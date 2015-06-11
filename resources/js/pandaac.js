var pandaac = {

    /**
     * Toggle a navigation button.
     *
     * @param  \Event  e
     * @return void
     */
    toggleNavigationButton: function(e) {
        e.preventDefault();
        
        $(this).parent().toggleClass('open');
    },

    /**
     * Toggle a show/hide button.
     *
     * @param  \Event  e
     * @return void
     */
    toggleShowHideButton: function(e) {
        e.preventDefault();

        var $button = $(this),
            $span   = $button.siblings('span[data-value]'),
            value   = $span.html();

        $button.toggleClass('active');
        $span.html($span.attr('data-value')).attr('data-value', value);
    },

    /**
     * Toggle the active character row.
     *
     * @param  \Event  e
     * @return void
     */
    toggleCharacterList: function(e) {
        e.preventDefault();

        $('.account-index tr.character.active').removeClass('active');
        $(this).toggleClass('active');
    }

};
