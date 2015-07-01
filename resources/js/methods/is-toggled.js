module.exports = function (identifier, list, index) {
    var array = this[list] || this.toggleable,
        pos   = array.indexOf(identifier);

    return index ? pos : (pos > -1);
};
