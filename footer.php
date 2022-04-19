<?php 
$footer_logo = get_field('logo-stopka','option');
 ?>
<footer class='footer'>

    <div class="container">
        <div class='row py-3'>
            <div class='col-12 col-md-2 order-3 order-md-0 py-4 d-flex align-items-center flex-column'>
                <a href='<?php echo get_home_url( )  ?>'><img class='img-fluid mb-3' src="<?php echo $footer_logo['url'] ;?>" alt="" srcset=""></a>
                <p class='mt-5'>PROJEKT I REALIZACJA: CANDYWEB.PL</p>
            </div>
            <div class='col-12 col-md-5 d-flex flex-column flex-nowrap justify-content-center px-md-3 px-xl-4 px-xxl-5 py-4 py-md-0'>
                <h6 class='mb-4'>MENU</h6>
                <div class='row row-cols-2'>
                        <?php wp_nav_menu(['footer']); ?>

                </div>
            </div>
            <div class='col-12 col-md-5 d-flex flex-column flex-nowrap justify-content-center px-md-3 px-xl-4 px-xxl-5 py-4 py-md-0'>
                <h6 class='mb-4'>KONTAKT</h6>
                <div class='row row-cols-2'>
                    <p class='col'>STRONA GŁÓWNA</p>
                    <p class='col'>STRONA GŁÓWNA</p>
                    <p class='col'>STRONA GŁÓWNA</p>
                    <p class='col'>STRONA GŁÓWNA</p>
                    <p class='col'>STRONA GŁÓWNA</p>
                </div>
            </div>
        </div>
    </div>

</footer>
<?php wp_footer()  ?>   
</body>

</html>