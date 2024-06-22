
//services links categroies
$(function() {
	var url = window.location;
	// Will only work if string in href matches with location
	$('.widget-categories-menu .blog-cat a[href="' + url + '"]').parent().removeClass('active');
  
	// Will also work for relative and absolute  hrefs
	$('.widget-categories-menu .blog-cat a').filter(function() {
		return this.href == url;
	}).parent().addClass('active');   
	// $(this).addClass('active');  
  
  })   