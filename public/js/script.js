/* Set the width of the side navigation to 250px */
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

/* Show the access code form */
$(function() {
	$('.show-access-code').click(function() {
    	$('#code_input_container').show();
    	$('.show-access-code').hide();
    	$('#code_input_container').find('input:first').focus();
    	return false;
   	});        
});