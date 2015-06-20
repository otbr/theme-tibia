module.exports = function (e) {
    e.preventDefault();

    var endpoint = baseurl + '/api/name';

    this.$http.get(endpoint)
        .success(function (response) {
            this.suggestedName = response;
        });
};
