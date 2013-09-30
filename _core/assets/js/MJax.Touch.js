MJax.Touch = {
    is_rendering:false,
    Controls:{},
    Events:{

    },
    Init:function(){
        $('body').html('<div id="mjax-touch" data-role="page"></div>');
        requirejs(['jquery_mobile'],
            function(jQueryMobile){
                MJax.Touch.InitBinding();
            }
        );

        MJax.Render = function(){ };


    },
    InitBinding:function(){
        $(document).bind( "pagebeforechange", function( e, data ) {
            if(!MJax.Touch.is_rendering){
                MJax.Touch.is_rendering = true;
                e.preventDefault();

                 var options = data.options;

                // Get the page we are going to dump our content into.
                var $page = $('#mjax-touch');



                // The markup we are going to inject into the content


                // Inject the category items markup into the content element.
                $page.html(
                    MJax.FormData.Render()
                );

                // Pages are lazily enhanced. We call page() on the page
                // element to make sure it is always enhanced before we
                // attempt to enhance the listview markup we just injected.
                // Subsequent calls to page() are ignored since a page/widget
                // can only be enhanced once.
                $page.page();

                // Enhance the listview we just injected.
                $page.find( ":jqmData(role=listview)" ).listview();

                // We don't want the data-url of the page we just modified
                // to be the url that shows up in the browser's location field,
                // so set the dataUrl option to the URL for the category
                // we just loaded.
                options.dataUrl = 'x';

                // Now call changePage() and tell it to switch to
                // the page we just modified.
                $.mobile.changePage( $page, options );
            }
            MJax.Touch.is_rendering = false;

        });

        $.mobile.changePage('mjax-touch');

    }
};
$(document).on('mjax-run-start', function(){ MJax.Touch.Init(); });