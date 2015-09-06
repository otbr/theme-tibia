var Cookies = require('cookies-js');

module.exports = function (identifier, property, cookie) {
    this.$set(property, identifier);

    if (cookie === true) {
        Cookies.set(property, identifier);
    }
};
