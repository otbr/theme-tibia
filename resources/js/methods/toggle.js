var Cookies = require('cookies-js');

module.exports = function (identifier, list, cookie) {
    var array = this[list] || this.toggleable,
        index = this.isToggled(identifier, list, true);

    if (index > -1) {
        array.splice(index, 1);
    } else {
        array.push(identifier);
    }

    if (cookie === true) {
        Cookies.set(list || 'toggleable', JSON.stringify(array));
    }
};
