function get_chapter(){
	var dropdown = document.getElementById("csid");
	var csid = dropdown.options[dropdown.selectedIndex].text;
	$.ajax({
		data: { csid: csid },
		type: 'POST',
		 url: "http://localhost/aegen/index.php/UserController/get_chapters",
		success:function(data){
			$('#chapnum').html(data);
		}
	})
}