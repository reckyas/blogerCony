/*
* @Author: Pradesga Indonesia
* @Date:   2018-05-09 20:22:27
* @Last Modified by:   Pradesga Indonesia
* @Last Modified time: 2018-05-09 20:33:28
*/
function updateUrlQuery(uri, key, value) {
	var re = new RegExp("([?&])" + key + "=.*?(&|$)", "i");
	var separator = uri.indexOf('?') !== -1 ? "&" : "?";
	if (uri.match(re)) {
		return uri.replace(re, '$1' + key + "=" + value + '$2');
	}
	else {
		return uri + separator + key + "=" + value;
	}
}

$('.limit-perpage').change(function(val) {
	window.location.href = updateUrlQuery(window.location.href, 'limit', $(this).val())
})