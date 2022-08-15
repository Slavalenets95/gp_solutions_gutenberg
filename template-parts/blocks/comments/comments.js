import $ from "jquery";

(function($){
    var initializeBlock = function( $block ) {
        if($('.comments-slider').length) {
            const prev_arrow = '<button class="slick-btn slick-btn--prev">' +
                '<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">\n' +
                '<path d="M13.3417 2.91634C13.4507 3.02796 13.5117 3.17781 13.5117 3.33384C13.5117 3.48988 13.4507 3.63972 13.3417 3.75134L7.2504 10.0001L13.3417 16.2476C13.4507 16.3592 13.5117 16.509 13.5117 16.6651C13.5117 16.8211 13.4507 16.971 13.3417 17.0826C13.2887 17.137 13.2253 17.1803 13.1553 17.2098C13.0853 17.2393 13.0101 17.2546 12.9342 17.2546C12.8582 17.2546 12.783 17.2393 12.713 17.2098C12.643 17.1803 12.5796 17.137 12.5267 17.0826L6.04915 10.4363C5.93539 10.3196 5.87171 10.1631 5.87171 10.0001C5.87171 9.8371 5.93539 9.68055 6.04915 9.56384L12.5267 2.91759C12.5796 2.86316 12.643 2.8199 12.713 2.79036C12.783 2.76082 12.8582 2.74561 12.9342 2.74561C13.0101 2.74561 13.0853 2.76082 13.1553 2.79036C13.2253 2.8199 13.2887 2.86316 13.3417 2.91759V2.91634Z" fill="white"/>\n' +
                '</svg>' +
                '</button>';
            const next_arrow = '<button class="slick-btn slick-btn--next">' +
                '<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">\n' +
                '<path d="M13.3417 2.91634C13.4507 3.02796 13.5117 3.17781 13.5117 3.33384C13.5117 3.48988 13.4507 3.63972 13.3417 3.75134L7.2504 10.0001L13.3417 16.2476C13.4507 16.3592 13.5117 16.509 13.5117 16.6651C13.5117 16.8211 13.4507 16.971 13.3417 17.0826C13.2887 17.137 13.2253 17.1803 13.1553 17.2098C13.0853 17.2393 13.0101 17.2546 12.9342 17.2546C12.8582 17.2546 12.783 17.2393 12.713 17.2098C12.643 17.1803 12.5796 17.137 12.5267 17.0826L6.04915 10.4363C5.93539 10.3196 5.87171 10.1631 5.87171 10.0001C5.87171 9.8371 5.93539 9.68055 6.04915 9.56384L12.5267 2.91759C12.5796 2.86316 12.643 2.8199 12.713 2.79036C12.783 2.76082 12.8582 2.74561 12.9342 2.74561C13.0101 2.74561 13.0853 2.76082 13.1553 2.79036C13.2253 2.8199 13.2887 2.86316 13.3417 2.91759V2.91634Z" fill="white"/>\n' +
                '</svg>' +
                '</button>';
            const comments_slider = $('.comments-slider')

            comments_slider.on('init', function() {
                const dots = $('.comments-slider .slick-dots')
                const prev_arrow = $('.comments-slider .slick-btn--prev')
                const next_arrow = $('.comments-slider .slick-btn--next')
                const offset_dots = dots.offset()
                const offset_slider = comments_slider.offset()
                const dots_left_pos = offset_dots.left - offset_slider.left
                const dots_right_pos = offset_dots.left - offset_slider.left + dots.width()
                const prev_arrow_pos  = dots_left_pos - 40 - prev_arrow.width()
                const right_arrow_pos = dots_right_pos + 40

                prev_arrow.css({ 'left' : prev_arrow_pos + 'px' })
                next_arrow.css({ 'left' : right_arrow_pos + 'px' })

            })

            comments_slider.slick({
                arrows: true,
                dots: true,
                slidesToShow: 1,
                prevArrow: prev_arrow,
                nextArrow: next_arrow,
            })
        }
    }

    $(document).ready(function(){
        $('.comments-slider').each(function(){
            initializeBlock( $(this) );
        });
    });

    if( window.acf ) {
        window.acf.addAction( 'render_block_preview/type=comments', initializeBlock );
    }

})(jQuery);