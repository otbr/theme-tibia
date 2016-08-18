var Vue = require('vue');

Vue.component('step', require('./progressbar-step'));

module.exports = {
    template: '<div class="progressbar"><ul class="steps"><content></content></ul></div>'
};
