module.exports = {
    template: '#vue-debug-template',
    data: function () {
        return this.$parent._data;
    }
};
