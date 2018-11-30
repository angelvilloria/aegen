$(document).ready( function() { 
	// ------------------------------------------------------------------ hide or show add choices 
	var dropdown = document.getElementById("questiontype");
	var type = dropdown.options[dropdown.selectedIndex].text;
	
    if(type == 'Multiple Choice'){ //'.val()'
		   $('#choice').show();
       }
	   
    $('#questiontype').change(function(){
       if($(this).val()== 'Multiple Choice'){ 
           $('#choice').show();
           return true;
       }
       $('#choice').hide();
    });
	// ----------------------------------------------------------- solving for difficulty index
	 $('#students').on('input', function(e){
		var totalstudents = $(this).val();
		var lowgroup = parseInt(totalstudents/2);
		var highgroup = totalstudents - lowgroup;
		
		$('#highgroup').val(highgroup);
		$('#lowgroup').val(lowgroup);
		
		if($('#correctstudents').val() != "")
		{
				var correctstudents = $('#correctstudents').val();
				var difficulty = correctstudents/totalstudents;

				if(difficulty >= 0 && difficulty <= 0.25)
					$('#remarks-difficulty').val('Difficult - Revise or Discard');
				else if(difficulty >= 0.26 && difficulty <= 0.75)
					$('#remarks-difficulty').val('Right Difficulty - Retain');
				else if (difficulty >= 0.76)
					$('#remarks-difficulty').val('Easy - Revise or Discard');
		}
    });
	
	$('#correctstudents').on('input', function(e){
		if($('#students').val() != "")
		{
			var correctstudents = $('#correctstudents').val();
			var totalstudents = $('#students').val();
			var difficulty = correctstudents/totalstudents;

			if(difficulty >= 0 && difficulty <= 0.25)
				$('#remarks-difficulty').val('Difficult - Revise or Discard');
			else if(difficulty >= 0.26 && difficulty <= 0.75)
				$('#remarks-difficulty').val('Right Difficulty - Retain');
			else if (difficulty >= 0.76)
				$('#remarks-difficulty').val('Easy - Revise or Discard');
		}
	});
	
	//-------------------------------------------------------------------------------- solving for discrimination index
	
	$('#correctstudents-high').on('input', function(e){
		if ($('#highgroup').val() != "" && $('#correctstudents-low').val() != "")
		{
			var highgroup = $('#correctstudents-high').val() / $('#highgroup').val();
			var lowgroup = $('#correctstudents-low').val() / $('#lowgroup').val();
			
			var total = highgroup-lowgroup;
			total = Math.round(total * 100) / 100
			console.log(total);
			
			if(total >= 0.09 && total <= 0.19)
				$('#remarks-discrimination').val('Poor Item');
			else if(total >= 0.20 && total <= 0.29)
				$('#remarks-discrimination').val('Fair Item');
			else if(total >= 0.30 && total <= 0.39)
				$('#remarks-discrimination').val('Good Item');
			else if(total >= 0.40)
				$('#remarks-discrimination').val('Very Good Item');
		}
	});
	
	$('#correctstudents-low').on('input', function(e){
		if ($('#lowgroup').val() != "" && $('#correctstudents-high').val() != "")
		{
			var highgroup = $('#correctstudents-high').val() / $('#highgroup').val();
			var lowgroup = $('#correctstudents-low').val() / $('#lowgroup').val();
			
			var total = highgroup-lowgroup;
			total = Math.round(total * 100) / 100
			console.log(total);
			
			if(total >= 0.09 && total <= 0.19)
				$('#remarks-discrimination').val('Poor Item');
			else if(total >= 0.20 && total <= 0.29)
				$('#remarks-discrimination').val('Fair Item');
			else if(total >= 0.30 && total <= 0.39)
				$('#remarks-discrimination').val('Good Item');
			else if(total >= 0.40)
				$('#remarks-discrimination').val('Very Good Item');
		}
	});
});