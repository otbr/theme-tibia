(function(window, document, undefined) {

	var button = document.getElementsByClassName('navigation-button');
	var toggle = function() {
		var parent = this.parentNode;

		if (parent.className.indexOf('open') === -1) {
			parent.className = parent.className + ' open';
		} else {
			parent.className = parent.className.replace(/open/i, '');
		}
	};

	for (var i = 0; i < button.length; i++) {
		button[i].addEventListener('click', toggle, false);
	}

})(window, document);
