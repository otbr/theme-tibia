(function($, window, document, undefined) {
    $(document).ready(function() {

        $(document).on('click', '.navigation-button', Theme.toggleNavigationButton);
        $(document).on('click', '.showhide', Theme.toggleShowHideButton);
        $(document).on('click', '.account-index tr.character:not(.active)', Theme.toggleCharacterList);
        $(document).on('click', '#suggest-world', Theme.suggestWorld);
        $(document).on('click', '#suggest-name', Theme.suggestName);

    });
})(jQuery, window, document);
