(function($, window, document, undefined) {
    $(document).ready(function() {

        $(document).on('click', '.navigation-button', function(e) {
            e.preventDefault();
            
            $(this).parent().toggleClass('open');
        });

    });
})(jQuery, window, document);
