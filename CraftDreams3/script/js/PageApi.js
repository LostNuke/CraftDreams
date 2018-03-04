$.loadPage = function(where, pageurl, title) {
	$(where).load(pageurl);
	$("title").html(title);
}