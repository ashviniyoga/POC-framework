$(document).ready(function () {
    
    /* Live search */
    $('.live-search-list li').each(function () {
        $(this).attr('data-search-term', $(this).text().toLowerCase());
    });

    $('.live-search-box').on('keyup', function () {

        var searchTerm = $(this).val().toLowerCase();

        $('.live-search-list li').each(function () {

            if ($(this).filter('[data-search-term *= ' + searchTerm + ']').length > 0 || searchTerm.length < 1) {
                $(this).show();
            } else {
                $(this).hide();
            }

        });

    });

    /* End Live search */
    

    /* Link active Sidebar*/

    var url = window.location;
    $('ul.live-search-list a[href="' + url + '"]').parent().addClass('activated');
    $('ul.live-search-list a').filter(function () {
        return this.href == url;
    }).parent().addClass('activated');

    /* End Link active Sidebar*/

});
