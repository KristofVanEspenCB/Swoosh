$(document).ready(function(){
	
		
	
			$('#op').click(function() {
			   // if the play button value is 'play', call the play function
			   // otherwise call the pause function
			 $(this).val() === "unlock card" ? afzetten() : opzetten();
			});
		

		function afzetten() {
			
			$('#op').val("locked");
			$('#img').attr( "src", "images/close.jpg" );
			$('#op').css('background-color', '#e64c3c');
			// do play
		}

		function opzetten() {
			
			$("#paswoorden").css('display','block');
			$("#phonecell").css('top','-100px');
			$("#op").css('top','-100px');
			$("#img").css('top','25px');
			
			// do pause
		}
		$('#check').click(function(e) {
			  var Paswoord = $("#paswoord").val();
			  var test = $("#op").attr("value","on");
			  e.preventDefault();
			  
			
			if(Paswoord == "hallo"){
				$('#op').val("unlock card");
				$('#img').attr( "src", "images/open.jpg" );
				$('#op').css('background-color', '#24ad60');
				$("#paswoorden").css('display','none');
				$("#img").css('top','25px');
				$("#phonecell").css('top','105px');
				$("#op").css('top','105px');
				e.preventDefault();
				
				}
				else 
				{	
					$("#feedback").css('display','block');
					$("#feedback").text("sorry je moet de juiste code ingeven");
					e.preventDefault();
				}
		});
		 $(function() {
			$("#phonecell").click(function(){
				var PhoneNumber = "070 344 344";
				PhoneNumber=PhoneNumber.replace("Phone:","");
				window.location.href="tel://"+PhoneNumber;
			});
    });

		 $("#notificationIcon").on('click', function()
		 {
		 	$("#notificationAlert").animate({top: "35px"});
		 	$(this).animate({opacity: 0});
		 });

		 $("#notificationAction #confirm").on('click', function()
		 {
		 	$("#notificationAction #confirm").animate({width: "243px"});
		 	$("#notificationAction #cancel").animate({width: "0"});
		 	$("#notificationAction #cancel h1").text("");
		 	$("#notificationAction #confirm h1").text("SENDING YOUR PAYMENT");
		 	setTimeout(function() 
		 	{
			     $("#notificationAlert").animate({top: "-200px"});
			}, 1800);
		 });

		 $("#notificationAction #cancel").on('click', function()
		 {
		 	$("#notificationAction #confirm").animate({width: "0"});
		 	$("#notificationAction #cancel").animate({width: "243px"});
		 	$("#notificationAction #confirm h1").text("");
		 	$("#notificationAction #cancel h1").text("CANCELING");
		 	setTimeout(function() 
		 	{
			     $("#notificationAlert").animate({top: "-200px"});
			}, 1800);
		 });



		 $("#locationIcon").on('click', function()
		 {
		 	$("#locationAlert").animate({top: "35px"});
		 	$(this).animate({opacity: 0});
		 });

		 $("#notificationAction #confirm").on('click', function()
		 {
		 	$("#notificationAction #confirm").animate({width: "243px"});
		 	$("#notificationAction #cancel").animate({width: "0"});
		 	$("#notificationAction #cancel h1").text("");
		 	$("#notificationAction #confirm h1").text("SENDING YOUR PAYMENT");
		 	setTimeout(function() 
		 	{
			     $("#notificationAlert").animate({top: "-200px"});
			}, 1800);
		 });

		 $("#notificationAction #cancel").on('click', function()
		 {
		 	$("#notificationAction #confirm").animate({width: "0"});
		 	$("#notificationAction #cancel").animate({width: "243px"});
		 	$("#notificationAction #confirm h1").text("");
		 	$("#notificationAction #cancel h1").text("CANCELING");
		 	setTimeout(function() 
		 	{
			     $("#notificationAlert").animate({top: "-200px"});
			}, 1800);
		 });
		
	});