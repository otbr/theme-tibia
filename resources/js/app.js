(function($, window, document, undefined) {
    $(document).ready(function() {

        $(document).on('click', '.navigation-button', pandaac.toggleNavigationButton);
        $(document).on('click', '.showhide', pandaac.toggleShowHideButton);
        $(document).on('click', '.account-index tr.character:not(.active)', pandaac.toggleCharacterList);

    });
})(jQuery, window, document);
