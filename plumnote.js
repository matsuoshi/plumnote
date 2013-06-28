/*
 *	plumnote.js
 */

jQuery(function($)
{
	// tweet button
	!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
	
	// pretty-print
	$('article pre').addClass('prettyprint').addClass('linenums');
	prettyPrint();
});


function plumnote_recent_posts(resp) {
	var posts = resp.posts;
	jQuery('#sidebar .sidebar-recent > div:first').replaceWith('<ul/>');
	var $ul = jQuery('#sidebar .sidebar-recent ul');
	for (var i = 0; i < posts.length; i++) {
		var p = posts[i];
		var type = p.type;
		var title = p[type + '-title'] || p[type + '-text'] || p['slug'] || 'No title';
		$ul.append('<li><a href="'+p['url']+'">'+title+'</a></li>');
	}
};
