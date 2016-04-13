$(document).ready(function() {
 
	 $("#error").hide();
	 $("#login").on("click", function(){
	 	loginByAjax($("#user").val(),$("#pass").val());
	 });

});

function loginByAjax(user, pass){
	$.ajax(
		{
			method:"POST",
			url:"login.php",
			data:{user: user, pass: pass}
		}).success(
		function(response){
			if(response === "ok"){
				window.location.href = "index.php";
			}
			else{
				$("#error").text("Error: El usuario y/o el password son invalidos");
				$("#error").show();
			}
		}
		).fail(
		function(){
			$("#error").text("Lo lamentamos pero ha ocurrido un error. Vuelva a intentarlo");
	        $("#error").show();
		})
}
