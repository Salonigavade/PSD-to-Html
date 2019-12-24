jQuery(document).ready(function($){
	var p=window.location.pathname.split("/").pop();
	if (p=='') {
		p='index.php'; 
	}
	var target=$('nav a[href="'+p+'"');
	target.addClass('active');
});