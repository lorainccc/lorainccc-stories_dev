jQuery(document).ready(function($) {
	
	var ppp = 9; // Post per page
	//var cat = 8;
	var pageNumber = 1;


	function load_posts(){
		pageNumber++;
		

		var str = '&pageNumber=' + pageNumber + '&ppp=' + ppp + '&action=show_more';
		$.ajax({
			type: "POST",
			dataType: "html",
			url: ajax_object.ajax_url,
			data: str,
			success: function(data){
				var $data = $(data);
				
				var itemCount = data.match(/grid-item/gi).length;
				
				if($data.length){
					
					if( itemCount == ppp ) {
						$("#more_posts").attr('disabled', false);
					} else {
						$("#more_posts").hide();
					}
					
				} else{
					$("#more_posts").hide();
				}
				
				// Append jQuery object $data to masonry grid
				$grid.append( $data ).masonry( 'appended', $data );
				$grid.imagesLoaded().progress( function() {
					$grid.masonry('layout');
				});
			},
			error : function(jqXHR, textStatus, errorThrown) {
				//$loader.html(jqXHR + " :: " + textStatus + " :: " + errorThrown);
			}

		});
		return false;
	}

	$("#more_posts").on("click",function(){ // When btn is pressed.
		$("#more_posts").attr("disabled",true); // Disable the button, temp.
		load_posts();
	});	
	
});