module.exports = {
    template: '<li class="step"><content></content></li>',
    replace: true,
    props: ['completed', 'class'],

    methods: {

        /**
         * If a step is marked as complete, make it so!
         *
         * @param  \DOMElement  $element
         * @return \DOMElement
         */
        complete: function ($element) {
            var active = this.completed !== undefined;
            var tag    = active ? 'strong' : 'span';
            var color  = active ? 'green' : 'blue';

            $element.classList.add(color);
            $element.innerHTML = '<'+tag+'>'+$element.innerHTML+'</'+tag+'>';

            return $element;
        },

        /**
         * Add step dividers.
         *
         * @param  \DOMElement  $element
         * @return \DOMElement
         */
        dividers: function ($element) {
            var active    = this.completed !== undefined;
            var $previous = $element.previousElementSibling;

            if ($previous === null) {
                return;
            }

            var content = $element.outerHTML;
            var isPreviousActive = $previous.classList.contains('green');

            if (isPreviousActive && active) {
                $element.outerHTML = '<li class="green"></li>'+content;
            } else if (isPreviousActive && ! active) {
                $element.outerHTML = '<li class="greenblue"></li>'+content;
            } else {
                $element.outerHTML = '<li class="blue"></li>'+content;
            }

            return $element;
        }
    },

    /**
     * Execute events when the DOM is ready.
     *
     * @return void
     */
    ready: function () {
        var $element = this.$el;

        $element = this.complete($element);
        $element = this.dividers($element);

        this.$el = $element;
    }
};
