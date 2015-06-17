var Theme = {

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
    },

    /**
     * Suggest a character world.
     *
     * @param  \Event  e
     * @return void
     */
    suggestWorld: function(e) {
        e.preventDefault();

        var $worlds = $('[name="world"]:not(:checked)');

        $worlds.eq(Math.floor(Math.random() * $worlds.length)).prop('checked', true);
    },

    /**
     * Suggest a character name.
     *
     * @param  \Event  e
     * @return void
     */
    suggestName: function(e) {
        e.preventDefault();

        var request = $.get(baseurl + '/api/name');

        request.done(function(response) {
            $('#name-suggestion').val(response[0]);
        });
    }

};