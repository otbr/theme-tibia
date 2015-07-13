(function (window, document, undefined) {
    if (document.getElementsByTagName('body')[0].className.indexOf('account-create') !== -1) {

        var Vue = require('vue');

        new Vue({
            el: 'body.account-create',

            data: {
                account         : null,
                email           : null,
                password        : null,
                confirmation    : null,
                name            : null,
                errors: {
                    account     : true,
                    email       : true,
                    password    : true,
                    name        : true
                }
            },

            methods: {
                suggestWorld : require('../../methods/suggest-world'),

                /**
                 * Send an API request to generate a character name.
                 *
                 * @param  \Event  e
                 * @return void
                 */
                suggestName : function (e) {
                    if (e) e.preventDefault();
                    
                    var endpoint = baseurl + '/api/name';

                    this.$http.post(endpoint, function (response) {
                        this.name = response;
                        this.errors.name = false;
                    }).error(function () {
                        this.errors.name = 'Could not generate name, please try again.';
                    });
                },

                /**
                 * Send an API request to check the validity of the account name.
                 *
                 * @param  \Event  e
                 * @return void
                 */
                validateAccount : function (e) {
                    if (e) e.preventDefault();
                    
                    var endpoint = baseurl + '/api/validate/account';

                    this.$http.post(endpoint, { account: this.account }, function (response) {
                        this.errors.account = response;
                    }).error(function () {
                        this.errors.account = 'Could not validate field, please try again.';
                    });
                },

                /**
                 * Send an API request to check the validity of the email address.
                 *
                 * @param  \Event  e
                 * @return void
                 */
                validateEmail : function (e) {
                    if (e) e.preventDefault();
                    
                    var endpoint = baseurl + '/api/validate/email';

                    this.$http.post(endpoint, { email: this.email }, function (response) {
                        this.errors.email = response;
                    }).error(function () {
                        this.errors.email = 'Could not validate field, please try again.';
                    });
                },

                /**
                 * Send an API request to check the validity of the password.
                 *
                 * @param  \Event  e
                 * @return void
                 */
                validatePassword : function (e) {
                    if (e) e.preventDefault();
                    
                    var endpoint = baseurl + '/api/validate/password';

                    this.$http.post(endpoint, { password: this.password, password_confirmation: this.confirmation }, function (response) {
                        this.errors.password = response;
                    }).error(function () {
                        this.errors.password = 'Could not validate field, please try again.';
                    });
                },

                /**
                 * Send an API request to check the validity of the character name.
                 *
                 * @param  \Event  e
                 * @return void
                 */
                validateName : function (e) {
                    if (e) e.preventDefault();
                    
                    var endpoint = baseurl + '/api/validate/name';

                    this.$http.post(endpoint, { name: this.name }, function (response) {
                        this.errors.name = response;
                    }).error(function () {
                        this.errors.name = 'Could not validate field, please try again.';
                    });
                }
            },

            ready: function () {
                if (this.account != "") this.validateAccount();
                if (this.email != "") this.validateEmail();
                if (this.name != "") this.validateName();
            }
        });

    }
})(window, document);
