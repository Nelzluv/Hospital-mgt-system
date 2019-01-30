$(function(){

	/*Login form*/
	$("#formLogin").on("submit", function(e){
		e.preventDefault();
		$.ajax({
			type: "POST",
			url: 'include/login.php',
			data: new FormData(this),
			processData: false,
			contentType: false,
			cache: false,
			success: function(response){
				$("#responseText").slideDown();
				$("#responseText").html(response);
			}
		});
	});

	/*New Patient form*/
	$("#formPatient").on("submit", function(e){
		e.preventDefault();
		$.ajax({
			type: "POST",
			url: 'include/newPatient.php',
			data: new FormData(this),
			processData: false,
			contentType: false,
			cache: false,
			success: function(response){
				$("#responseText").slideDown();
				$("#responseText").html(response);
			}
		});
	});

	//Doctors form
	$("#formDoctor").on("submit", function(e){
		e.preventDefault();
		$.ajax({
			type: "POST",
			url: 'include/addDoctor.php',
			data: new FormData(this),
			processData: false,
			contentType: false,
			cache: false,
			success: function(response){
				$("#responseText").slideDown();
				$("#responseText").html(response);
			}
		});
	});

	//Search form
	$("#formSearch").on("submit", function(e){      
		e.preventDefault();
		$.ajax({
			type: "POST",
			url: 'include/search.php',
			data: new FormData(this),
			processData: false,
			contentType: false,
			cache: false,
			success: function(response){
				$("#responseText").slideDown();
				$("#responseText").html(response);
			}
		});
	});


//Search form
	$("#formDocSearch").on("submit", function(e){      
		e.preventDefault(); 
		$.ajax({
			type: "POST",
			url: 'include/searchFunctions.php',
			data: new FormData(this),
			processData: false,
			contentType: false,
			cache: false,
			success: function(response){
				$("#profile").slideDown();
				$("#profile").html(response);
			}
		});
	});

//Old patient form
	$("#formOldPatient").on("submit", function(e){      
		e.preventDefault(); 
		$.ajax({
			type: "POST",
			url: 'include/oldPatient.php',
			data: new FormData(this),
			processData: false,
			contentType: false,
			cache: false,
			success: function(response){
				$("#responseText").slideDown();
				$("#responseText").html(response);
			}
		});
	});


//Old patient form
	$("#reportForm").on("submit", function(e){      
		e.preventDefault(); 
		$.ajax({
			type: "POST",
			url: 'include/report.php',
			data: new FormData(this),
			processData: false,
			contentType: false,
			cache: false,
			success: function(response){
				$("#responseText").slideDown();
				$("#responseText").html(response);
			}
		});
	});


	
	

	






















})
