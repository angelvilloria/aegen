$('#chapnum').on('click', function(){
	var chapter = $(this).find(':selected').attr("data-id");
	console.log(chapter);
	$('#chapname').val(chapter);
	
	var chapter = ($('#chapnum').val());
	
	var dropdown = document.getElementById("csid");
	var csid = dropdown.options[dropdown.selectedIndex].text;
	
	$.ajax({
		data: { chapter: chapter, csid: csid },
		type: 'POST',
		 url: "http://localhost/aegen/index.php/UserController/get_topics",
		success:function(data){
			$('#topic').html(data);
		}
	})
});