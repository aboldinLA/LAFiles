(function () {
	var _int_adjust_hover = function () {
		var dom_uls, dom_lis, i, j;

		dom_uls = document.getElementsByTagName ('ul');
		for (i = 0; i < dom_uls.length; ++i) {
			if ((/^(.*\s+)?css_menu(\s+.*)?$/i).test (dom_uls [i].className)) {
				dom_lis = dom_uls [i].getElementsByTagName ('li');
				for (j = 0; j < dom_lis.length; ++j) {
					dom_lis [j].onmouseover = function () {this.className += ' hover';};
					dom_lis [j].onmouseout = function () {this.className = this.className.replace (/\s*hover/, '');};
				}
			}
		}
	};

	if ('addEventListener' in window) {
		window.addEventListener ('load', _int_adjust_hover, false);
	} else if ('attachEvent' in document) {
		window.attachEvent ('onload', _int_adjust_hover);
	} else {
		window.onload = _int_adjust_hover;
	}
}) ();
