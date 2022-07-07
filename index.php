<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <?php
        include_once 'head.php';
        ?>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
            $(function () {
                $("#accordion").accordion();
            });
        </script>
    </head>
    <body>
        <?php
        include_once 'topo.php';
        include_once 'menu.php';
        ?>
        <div id="sliderindex">
            <figure id="slider">
                <div class="container">
                    <img src="imagens/slider1.png" >
                    <img src="imagens/slider2.png" >
                    <img src="imagens/slider3.png" >
                    <img src="imagens/slider4.png" >
                </div>
                <figcaption></figcaption> <!-- slideshow caption -->
                <nav id="slider-nav"></nav> <!-- navigation -->
            </figure>
            <script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
            <script>

            (function ($) {

                // ==================================================================================
                // Configuration here:
                // ----------------------------------------------------------------------------------
                var config = {
                    slices: 10, // number of slices
                    speed: 1000, // slideshow speed
                    easing: null, // easing type
                    interval: 3500 // slideshow interval
                };
                // ==================================================================================

                // Some variables...
                var $slider = $('#slider'),
                        $caption = $slider.find('figcaption'),
                        $container = $slider.find('.container'),
                        $nav = $('#slider-nav'),
                        $slide = $container.children(),
                        autoSlide = null,
                        $first = $slide.first();

                // Auto append navigation item based on the slides length
                $slide.each(function (index) {
                    var i = index + 1;
                    $nav.append('<a href="#slide-' + i + '">' + i + '</a>');
                    $(this).attr('id', 'slide-' + i);
                });

                // Set the slices size
                var slice_w = $slider.width() / config.slices,
                        slice_h = $slider.height();

                // Build the slices
                for (var i = 0; i < config.slices; i++) {
                    $('<div class="slice" />').css({
                        'position': 'absolute',
                        'width': slice_w,
                        'height': slice_h,
                        'left': slice_w * i,
                        'z-index': 4,
                        'background-color': 'transparent',
                        'background-repeat': 'no-repeat',
                        'background-position': '-' + slice_w * i + 'px 0'
                    }).appendTo($slider);
                }

                // Catch the slices, and also set the different position between odd and even slices
                var $sliceOdd = $slider.find('.slice:odd').css('bottom', 0),
                        $sliceEven = $slider.find('.slice:even').css('top', 0);

                // Click to switch!
                $nav.find('a').on("click", function () {

                    $nav.find('.active').removeClass('active');
                    $(this).addClass('active');

                    var pos = $(this).index(),
                            text = $slide.eq(pos).attr('alt'),
                            bg = $slide.eq(pos).attr('src');

                    $slide.hide().eq(pos).trigger("load").show();

                    // Do the caption and slices animation here!
                    $caption.stop().animate({bottom: '-100px'}, config.speed / 2);

                    $sliceOdd.each(function (i) {
                        $(this).stop().delay(i * 100).animate({bottom: '-' + slice_h + 'px', opacity: 0}, config.speed, config.easing, function () {
                            $(this).css({
                                'background-image': 'url(' + bg + ')',
                                'bottom': 0,
                                'opacity': 1
                            });
                        });
                    });
                    $sliceEven.each(function (i) {
                        $(this).stop().delay(i * 100).animate({top: '-' + slice_h + 'px', opacity: 0}, config.speed, config.easing, function () {
                            $(this).css({
                                'background-image': 'url(' + bg + ')',
                                'top': 0,
                                'opacity': 1
                            });
                        });
                    }).promise().done(function () {
                        $caption.html(text).stop().animate({bottom: '0'}, config.speed / 2);
                    });

                    clearInterval(autoSlide);
                    autoSlide = setInterval(slideShow, config.interval);

                    return false;

                }).first().addClass('active');

                // Init slideshow
                $caption.html($slide.first().attr('alt')).stop().animate({bottom: '0'}, config.speed);

                // Navigation clicker
                function slideShow() {
                    if ($nav.find('.active').next().length) {
                        $nav.find('.active').next().trigger("click");
                    } else {
                        $nav.find('a').first().trigger("click");
                    }
                }

                // Run the slideshow on page load...
                // **Edit: Run the slideshow on DOM Ready for the CSS Deck Playground only**
                $(function () {

                    // remove the 'loading background-image' of '#slider'
                    $slider.css('background-image', 'none');

                    // Show the '.container', 'figcaption' and '#slide-nav' when the page has been loaded!
                    // **Edit: Show the '.container', 'figcaption' and '#slide-nav' on DOM Ready for the CSS Deck Playground only**
                    $container.show();
                    $caption.show();
                    $nav.css('opacity', 1);

                    // Another init slideshow
                    $slider.find('.slice').css('background-image', 'url(' + $first.attr("src") + ')');

                    // Then, start the interval...
                    autoSlide = setInterval(slideShow, config.interval);

                });

            })(jQuery);
            </script>
        </div>
        <div id="resumo">
            <a href="trabalheconosco.php">
                <div class="artigo">
                    <div class="imgArt">
                        <img src="imagens/trab.png"/>
                    </div>
                    <div class="texArt">
                        <h3>Trabalhe Conosco</h3>
                        <br>
                        <p>Preencha nosso currículo </p>
                        <p>online!</p>
                    </div>
                </div>
            </a>
            <a href="sobre.php">
                <div class="artigo">
                    <div class="imgArt">
                        <img src="imagens/hist.png"/>
                    </div>
                    <div class="texArt">
                        <h3>Conheça Nossa História</h3>
                        <br>
                        <p>Saiba mais sobre como tudo começou!</p>
                    </div>
                </div>
            </a>
            <a href="sustentabilidade.php">
                <div class="artigo">
                    <div class="imgArt">
                        <img src="imagens/sus.png"/>
                    </div>
                    <div class="texArt">
                        <h3>Pense Mais no Futuro</h3>
                        <br>
                        <p>Aprenda como descartar o lixo eletrônico!</p>
                    </div>
                </div>
            </a>
        </div>
        <?php
        include_once 'rodape.php';
        ?>
    </body>
</html>
