(function(window, document, undefined) {

	var button = document.getElementsByClassName('navigation-button');

	window.addEventListener('load', function() {
		for (var i = 0; i < button.length; i++) {
			var parent = button[i].parentNode;

			console.log(document.cookie);
			if (getCookie('tibia_navigation_' + i) === 'open') {
				parent.className = parent.className + ' open';
			}
		}
	});

	var toggle = function(self, i) {
		var parent = self.parentNode;

		if (parent.className.indexOf('open') === -1) {
			parent.className = parent.className + ' open';
			setCookie('tibia_navigation_' + i, 'open');
			console.log(document.cookie);
		} else {
			parent.className = parent.className.replace(/open/i, '');
			setCookie('tibia_navigation_' + i, '');
		}
	};

	for (var i = 0; i < button.length; i++) {
		button[i].addEventListener('click', function() { toggle(this, i); }, false);
	}

})(window, document);

function setCookie(cname, cvalue, exdays) {
	var d = new Date();
	d.setTime(d.getTime() + (exdays*24*60*60*1000));
	var expires = "expires="+d.toUTCString();
	document.cookie = cname + "=" + cvalue + "; " + expires;
}

function getCookie(cname) {
	var name = cname + "=";
	var ca = document.cookie.split(';');
	for(var i=0; i<ca.length; i++) {
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1);
		if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
	}
	return "";
}
