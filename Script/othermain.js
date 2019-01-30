$(function(){
	alert('hello world');
	$('#searchInput').keyup(function(){
		var search = $('#searchInput').val();
		$.post("profile.php", {"searchInput": search}, function(data)){
			$('#responseText').html(data);
		}
	})

/*build();
function build(){
$("#profileDiv").load("include/patientProfile.php?mode=build");
}
	*/

});