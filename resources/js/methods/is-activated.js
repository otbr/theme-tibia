module.exports = function (identifier, property) {
    return this.$get(property) === identifier;
};
