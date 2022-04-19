<?php get_header() ?>

<div class='hero'>
    <div class="hero__container">
        <div class="hero__row">

            <div class="hero__left">
                <h1 class='hero__header'>MOBILNY BAR <p class='hero__header--serif'>do zadań specjalnych </p>
                </h1>
                <p class='hero__para'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <a class='hero__link' href='<?php get_permalink(get_page_by_title('Oferta'));  ?>'>ZOBACZ OFERTĘ
                    <img class='d-block mt-3' src='<?php echo get_template_directory_uri() . '/assets/images/strzalka-przycisk.svg'  ?>'>
                </a>
            </div>
            <div class="hero__right">
                <div id="js-slider-images">
                    <?php

                    if (have_rows('hero')) :
                        while (have_rows('hero')) : the_row();
                            $slide = get_sub_field('slajd');
                        ?>
                        <img class='hero__image' src="<?php echo $slide['url'] ?>" alt="<?php echo $slide['alt'] ?>">
                        <?php
                        endwhile;

                    else :
                    endif;
                    ?>
                </div>
                <div class="hero-slider">
                    <div class="row">
                        <div class="col-6 flex-column d-flex justify-content-center align-items-center">
                            <svg id='js-arrow-next' class='hero-slider__arrow-next' xmlns="http://www.w3.org/2000/svg" width="76.645" height="9.98" viewBox="0 0 76.645 9.98">
                                <path id="strzalka-przycisk" d="M54.506,18.526l-5.3-7.79-4.683,8.149,1.735,1,2.034-3.54v71.04h2V15.89l2.557,3.76Z" transform="translate(87.381 -44.526) rotate(90)" />
                            </svg>
                            <svg id='js-arrow-prev' class='hero-slider__arrow-prev' xmlns="http://www.w3.org/2000/svg" width="76.645" height="9.98" viewBox="0 0 76.645 9.98">
                                <path id="strzalka-przycisk" d="M54.506,18.526l-5.3-7.79-4.683,8.149,1.735,1,2.034-3.54v71.04h2V15.89l2.557,3.76Z" transform="translate(87.381 -44.526) rotate(90)" />
                            </svg>
                        </div>
                        <div class="hero-slider__slide-amounts">
                            <p>
                                <span id='js-current-slide' class='hero-slider__current-slide'>01</span>
                                <span class='hero-slider__slash'>/</span>
                                <span id='js-total-slides' class='hero-slider__total-slides'>03</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="about-us">
    <div class="about-us__container">
        <h2 class='about-us__header'>
            NA POCZĄTEK
            <span class='about-us__header--serif'>trochę o nas</span>
        </h2>
        <div class="about-us__row">

            <div class="about-us__text">
                <p class='about-us__para'>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                </p>
                <a class='about-us__link' href='<?php echo get_permalink(get_page_by_title('Oferta'));  ?>'>dowiedz sie wiecej
                    <img class='about-us__link-arrow d-block mt-3' src='<?php echo get_template_directory_uri() . '/assets/images/strzalka-przycisk.svg'  ?>'>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="events">
    <div class="events__container">
        <h2 class='events__header about-us__header'>
            NA JAKIE IMPREZY
            <span class='events__header--serif about-us__header--serif'>możesz nas zaprosić</span>
        </h2>
        <div class="events__row">
            <?php
            if (have_rows('imprezy')) :
                while (have_rows('imprezy')) : the_row();
                    $icon = get_sub_field('ikona');
                    $event_name = get_sub_field('nazwa');
            ?>

                    <div class="events__item">
                        <div class="events__row events__row--loop">
                            <div class='event'>
                                <img class='event__img' loading='lazy' src="<?php echo $icon['sizes']['thumbnail']  ?>" alt="<?php echo $icon['alt']  ?>">
                                <p class='event__text'><?php echo $event_name; ?></p>
                            </div>
                        </div>
                    </div>

            <?php
                endwhile;
            endif;
            ?>
            <div class="event-offer">
                <h3 class='event-offer__text'>i każde inne jakie będziesz chciał</h3>
                <a class='event-offer__link ' href='<?php echo get_permalink(get_page_by_title('Oferta'));  ?>'>Zobacz ofertę
                    <img class='d-block mt-3 mx-auto' src='<?php echo get_template_directory_uri() . '/assets/images/strzalka-przycisk.svg'  ?>'>
                </a>
            </div>
        </div>
    </div>
</div>

<div class='container-fluid'>
    <div class="container py-3 position-relative">
        <h3 class='text-center'>ONI JUŻ MIELI NASZEGO VANA
            <span class='d-block'>na swojej imprezie</span>
        </h3>

        <div id='js-testimonials-slider' class="row ">
            <?php
            if (have_rows('opinie')) :
                while (have_rows('opinie')) : the_row();
                    $testimonial = get_sub_field('opinia');
            ?>
                    <div class="testimonial">
                        <div class='testimonial-content'>
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/cudzyslow1.svg'   ?>" alt="">
                            <?php echo $testimonial;  ?>
                            <img class='d-block ms-auto' style='transform:rotate(180deg)' src="<?php echo get_template_directory_uri() . '/assets/images/cudzyslow1.svg'   ?>" alt="">
                        </div>
                    </div>
            <?
                endwhile;
            endif;
            ?>
        </div>
        <div class='testimonials-slider__controls'>
            <img id='js-testimonial__arrow-prev' class='testimonials__arrow-prev' style='transform:rotate(180deg)' src="<?php echo get_template_directory_uri() . '/assets/images/strzalka-przycisk.svg'   ?>" alt="">
            <img id='js-testimonial__arrow-next' class='testimonials__arrow-next' src="<?php echo get_template_directory_uri() . '/assets/images/strzalka-przycisk.svg'   ?>" alt="">
        </div>
    </div>
</div>

<?php get_template_part('template-parts/contact-cta');  ?>

<?php get_footer(); ?>