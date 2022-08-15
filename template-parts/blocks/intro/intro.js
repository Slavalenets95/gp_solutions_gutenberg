(function($){
    var initializeBlock = function( $block ) {
        $block.find('.intro-slider').slick({
            arrows: false,
            dots: true,
            slidesToShow: 1,
            lazyLoad: 'ondemand',
        });
    }

    $(document).ready(function(){
        $('.intro-slider').each(function(){
            initializeBlock( $(this) );
        });
    });

    if( window.acf ) {
        window.acf.addAction( 'render_block_preview/type=intro', initializeBlock );
    }

})(jQuery);