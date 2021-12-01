<?php

wp_head();
$hero_banner_text = get_field('hero_banner_text', 'options');
$hero_banner_image = get_field('hero_banner_image', 'options');

$stulpelio_1_pavadinimas = get_field('1_stulpelio_pavadinimas', 'options');
$stulpelio_1_aprasymas = get_field('1_stulpelio_aprasymas', 'options');

$stulpelio_2_pavadinimas = get_field('2_stulpelio_pavadinimas', 'options');
$stulpelio_2_aprasymas = get_field('2_stulpelio_aprasymas', 'options');

$stulpelio_3_pavadinimas = get_field('3_stulpelio_pavadinimas', 'options');
$stulpelio_3_aprasymas = get_field('3_stulpelio_aprasymas', 'options');

$stulpelio_4_pavadinimas = get_field('4_stulpelio_pavadinimas', 'options');
$stulpelio_4_aprasymas = get_field('4_stulpelio_aprasymas', 'options');

$apvalaus_stulpelio_1_pavadinimas = get_field('apvalaus_stulpelio_1_pavadinimas', 'options');
$apvalaus_stulpelio_2_pavadinimas = get_field('apvalaus_stulpelio_2_pavadinimas', 'options');
$apvalaus_stulpelio_3_pavadinimas = get_field('apvalaus_stulpelio_3_pavadinimas', 'options');

$apvalaus_stulpelio_1_popup = get_field('apvalaus_stulpelio_1_popup', 'options');
$apvalaus_stulpelio_2_popup = get_field('apvalaus_stulpelio_2_popup', 'options');
$apvalaus_stulpelio_3_popup = get_field('apvalaus_stulpelio_3_popup', 'options');

$main_popup_pavadinimas = get_field('main_popup_pavadinimas', 'options');
$main_popup_mygtuko_linkas = get_field('main_popup_mygtuko_linkas', 'options');
$main_popup_procentai = get_field('main_popup_procentai', 'options');
$main_popup_tekstas = get_field('main_popup_tekstas', 'options');
$main_popup_mygtuko_tekstas = get_field('main_popup_mygtuko_tekstas', 'options');
$main_popup_foto = get_field('main_popup_foto', 'options');
?>
<!-- Dynamic styles -->
<style type="text/css">

    .hero-background {
        background-image: url("<?php echo $hero_banner_image; ?>;}")
    }

</style>

<?php include 'new-header.php'; ?>

<div class="hero">
    <div class="hero-background d-flex justify-content-center align-items-center">
        <h1><?php echo $hero_banner_text; ?></h1>
    </div>
</div>

<div class="container-fluid services background">
    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="service-item col-sm-3 pt-5 pb-5">
                <div class="circle position-relative">
                    <i class="fas fa-truck"></i>
                </div>
                <h5>
                    <?php echo $stulpelio_1_pavadinimas; ?>
                </h5>
                <div class="line">

                </div>
                <div class="item-description mt-3">
                    <?php echo $stulpelio_1_aprasymas; ?>
                </div>
            </div>

            <div class="service-item col-sm-3 pt-5 pb-5">
                <div class="circle position-relative">
                    <i class="fas fa-gift"></i>
                </div>
                <h5>
                    <?php echo $stulpelio_2_pavadinimas; ?>
                </h5>
                <div class="line">

                </div>
                <div class="item-description mt-3">
                    <?php echo $stulpelio_2_aprasymas; ?>
                </div>
            </div>

            <div class="service-item col-sm-3 pt-5 pb-5">
                <div class="circle position-relative">
                    <i class="fas fa-praying-hands"></i>
                </div>
                <h5>
                    <?php echo $stulpelio_3_pavadinimas; ?>
                </h5>
                <div class="line">

                </div>
                <div class="item-description mt-3">
                    <?php echo $stulpelio_3_aprasymas; ?>
                </div>
            </div>

            <div class="service-item col-sm-3 pt-5 pb-5">
                <div class="circle position-relative">
                    <i class="fas fa-leaf"></i>
                </div>
                <h5>
                    <?php echo $stulpelio_4_pavadinimas; ?>
                </h5>
                <div class="line">

                </div>
                <div class="item-description mt-3">
                    <?php echo $stulpelio_4_aprasymas; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container p-5">
    <div class="row modals">
        <div class="col-sm-4" id="myBtn">
            <img src="/wp-content/uploads/2021/10/PhotoRoom_20211014_100250-1024x1024.jpeg">
            <h5><?php echo $apvalaus_stulpelio_1_pavadinimas; ?></h5>
        </div>
        <div class="col-sm-4" id="myBtn1">
            <img src="/wp-content/uploads/2021/10/PhotoRoom_20211014_100351-1024x1024.jpeg">
            <h5><?php echo $apvalaus_stulpelio_2_pavadinimas; ?></h5>
        </div>
        <div class="col-sm-4" id="myBtn2">
            <img src="/wp-content/uploads/2021/10/PhotoRoom_20211014_100119-1024x1024.jpeg">
            <h5><?php echo $apvalaus_stulpelio_3_pavadinimas; ?></h5>
        </div>
    </div>
</div>


<div class="container home-products">
    <h1 class="">PRODUKTAI</h1>
    <div class="mt-5">
        <?php
        echo do_shortcode('[products columns="4" limit="4" orderby="date"]');
        ?>
    </div>
</div>
<div class="container-fluid silk background p-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
            </div>
            <div class="col-sm-6">
                <h1>Kodėl Šilkas?</h1>
                <ul>
                    <li>Viena iš artimiausių medžiagų plauko sudėčiai yra Šilkas</li>
                    <li>Šilko pluoštas nesugeria plauko drėgmės</li>
                    <li>Nepažeidžia natūralaus plauko pluošto</li>
                    <li>Dėka slidžios šilko tekstūros nesukelia jokio tempimo jausmo!</li>
                </ul>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid reviews background">
    <div class="container text-center p-5">
        <h3>
            ATSILIEPIMAI
        </h3>
        <p>
            Labai dėkoju! Siuntą gavau labai greitai, o įpakavimas ir rinkinys viršijo lūkesčius! Kvapas, estetika ir
            galutinis rezultatas – 100 balų… Plaukus deginančios priemonės jau giliai paslėptos. Rekomenduoju! ❤️
        </p>
        <div>
            <div class="circle">

            </div>
            <h5 class="mt-3">Miglė Mickevičiūtė</h5>
        </div>
    </div>
</div>

<div class="container-fluid contacts p-0">
    <div class="row">
        <div class="col-sm-6 d-flex p-5 left justify-content-end align-items-center">
            <?php echo do_shortcode('[mc4wp_form id="520"]'); ?>
        </div>
        <div class="col-sm-6 p-5 right">
            <h3 class="mt-3">SUSISIEKITE SU MUMIS</h3>
            <span class="text-white d-block">Instagram: <a class="text-white"
                                                           href="https://www.instagram.com/silk_curls" target="_blank">@silkcurls</a></span>
            <span class="text-white d-block">Facebook: <a class="text-white" href="https://www.facebook.com/silkcurlss"
                                                          target="_blank">SilkCurls</a></span>
            <span class="text-white d-block">El. paštas: <a class="text-white" href="mailto:silkcurlss@gmail.com">SilkCurlss@gmail.com </a></span>
        </div>
    </div>
</div>


<div class="all-modals">

    <!-- The Modal -->
    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <?php echo $apvalaus_stulpelio_1_popup; ?>
        </div>
    </div>

    <!-- The Modal -->
    <div id="myModal1" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close1">&times;</span>
            <img src="<?php echo $apvalaus_stulpelio_2_popup; ?>" alt="">
        </div>
    </div>

    <!-- The Modal -->
    <div id="myModal2" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close2">&times;</span>
            <div class="overflow-class">
                <?php echo $apvalaus_stulpelio_3_popup; ?>
            </div>
        </div>
    </div>

    <!-- Main modal -->
        <div class="popup">
            <div class="contentBox p-5 d-flex justify-content-center align-items-center position-relative">
                <div class="close-modal"><i class="far fa-times-circle"></i></div>
                <div class="row">
                    <div class="col-sm-6 imgBx">
                        <img src="<?php echo $main_popup_foto?>">
                    </div>
                    <div class="col-sm-6 content">
                        <h5 class="m-0"><?php echo $main_popup_pavadinimas; ?></h5>
                        <h5 class="m-0"><?php echo $main_popup_procentai; ?><sup>%</sup><span>Nuolaida</span></h5>
                        <p><?php echo $main_popup_tekstas; ?></p>
                        <a href="<?php echo $main_popup_mygtuko_linkas?>" class="btn btn-danger text-white"><?php echo $main_popup_mygtuko_tekstas; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include 'new-footer.php' ?>
<?php wp_footer(); ?>

