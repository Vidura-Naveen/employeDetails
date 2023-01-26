$(document).ready(function(){  	
	$("#employee").change(function() {    
		var id = $(this).find(":selected").val();
		var dataString = 'empid='+ id;    
		$.ajax({
			url: 'getEmployee.php',
			dataType: "json",
			data: dataString,  
			cache: false,
			success: function(empData) {
			   if(empData) {
										
					$("#empId").val(empData.id);
					$("#empName").val(empData.name);
					$("#empDob").val(empData.dob);
					$("#empAddress").val(empData.address);					
				} else {
				
				}   	
			} 
		});
 	}) 
});
