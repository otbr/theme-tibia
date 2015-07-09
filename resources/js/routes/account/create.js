(function (window, document, undefined) {

    var Vue = require('vue');

    new Vue({
        el: 'body.account-create',

        data: {
            account         : null,
            email           : null,
            password        : null,
            confirmation    : null,
            suggestedName   : null,
            errors: {
                account         : true,
                email           : true,
                password        : true,
                suggestedName   : true
            }
        },

        methods: {
            suggestWorld    : require('../../methods/suggest-world'),
            suggestName     : require('../../methods/suggest-name'),

            validateAccount : function (e) {
                var endpoint = baseurl + '/api/account';

                this.$http.get(endpoint)
                    .success(function (response) {
                        this.errors.account = response;
                    });
            },

            validateEmail : function (e) {
                var endpoint = baseurl + '/api/email';

                this.$http.get(endpoint)
                    .success(function (response) {
                        this.errors.email = response;
                    });
            },

            validatePassword : function (e) {
                if ((this.password === null || this.password === "") || (this.confirmation === null || this.confirmation === "")) {
                    return this.errors.password = 'Please enter the password again!';
                }

                if (this.password !== this.confirmation) {
                    return this.errors.password = 'The two passwords do not match!';
                }

                if (this.password.length < 8 || this.password.length > 30 || this.password.match(/^([a-z]+)$/ig)) {
                    return this.errors.password = 'The password must have at least 8 and less than 30 letters!<br />The password must contain at least one character other than A-Z or a-z!';
                }

                return this.errors.password = false;
            },

            validateName : function (e) {
            }
        }
    });

})(window, document);
