var time = 4000, slideShow = 0, slides = 0, navs = 0, rotator = 0;

function sliderAct(rotator, left, btn, nav)
{
	document.getElementById(rotator).style['left'] = '-' + left + '00%';

	navs = document.getElementById(nav).getElementsByTagName('a');

	for (var i = navs.length - 1; i >= 0; i--) { navs[i].className = ""; }

	btn.className = "_hover";
}

function sliderRotator(rotator, nav)
{
	slides = document.getElementById(rotator).getElementsByTagName('a');

	rotator = document.getElementById(rotator);

	var num = slides.length, step = 1, activeSlide, activeNav;

	navs = document.getElementById(nav).getElementsByTagName('a');

	if (num > 0)
	{
		navs[0].className = "_hover";

		slideShow = setInterval(function()
		{
			rotator.style['left'] = '-' + step + "00%";

			activeSlide = slides[step];

			activeNav = navs[step];

			for (var i = navs.length - 1; i >= 0; i--) { navs[i].className = ""; }

			activeNav.className = "_hover";

			if (step == num -1) { step = 0; } else { step++; }

		}, time);
	}
}

function slidePause()
{ clearInterval(slideShow); }

function slideStart()
{ sliderRotator('rotator', 'nav'); }