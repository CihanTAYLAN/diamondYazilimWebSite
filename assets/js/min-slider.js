function mslider(id, width, maxLeft)
{
	var left = parseInt(document.getElementById(id).style['left']);

	if (width > 0 && left != 0 || width < 0 && left != maxLeft)
	{
		var newLeft = width + left;
		document.getElementById(id).style['left'] = newLeft + 'px';
	}
}