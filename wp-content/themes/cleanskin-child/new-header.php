<?php
?>
<header class="header">
    <div class="container-fluid">
        <div class="row v-center pt-3 pb-3">
            <div class="col-5 d-flex justify-content-start align-items-center p-0">
                <div class="header-item">
                    <!-- mobile menu trigger -->
                    <div class="mobile-menu-trigger">
                        <span></span>
                    </div>
                    <div class="menu-overlay">
                    </div>
                    <nav class="menu h-100">
                        <div class="mobile-menu-head">
                            <div class="go-back d-flex justify-content-center align-items-center"><i
                                        class="fa fa-angle-left"></i></div>
                            <div class="current-menu-title"></div>
                            <div class="mobile-menu-close d-flex justify-content-center align-items-center">&times;
                            </div>
                        </div>
                        <ul class="menu-main p-0 m-0 h-100">
                            <li class="menu-item">
                                <a href="/parduotuve">PARDUOTUVĖ </a>
                            </li>

                            <li class="menu-item">
                                <a href="/apie-mus">APIE MUS</a>
                            </li>
                            <li class="menu-item">
                                <a href="/kontaktai">KONTAKTAI</a>
                            </li>

                            <li class="menu-item-has-children">
                                <a href="#">POLITIKOS<i class="fa fa-angle-down"></i></a>
                                <div class="sub-menu mega-menu">
                                    <div class="list-item">
                                        <ul>
                                            <li><a href="/privatumo-politika">PRIVATUMO POLITIKA</a></li>
                                            <li><a href="/grazinimas">GRAZINIMAS</a></li>
                                            <li><a href="/pristatymas">PRISTATYMAS</a></li>
                                        </ul>
                                    </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-2 d-flex justify-content-center align-items-center p-0">
                <div class="header-item">
                    <div class="logo d-flex align-items-center"><a href="/"><img
                                    src="/wp-content/uploads/2021/10/cropped-NEWLOGO.png"></a></div>
                </div>
            </div>
            <div class="col-5 d-flex justify-content-end align-items-center p-0">
                <div class="header-item cart ">
                    <div class="position-relative">
                        <a href="/cart">
                            <i class="fas fa-shopping-cart"></i>
                        </a>

                        <div class="circle position-absolute text-white">
                            <div class="position-relative">
                                <div style="
    position: absolute;
    top: 12px;
    left: 50%;
    transform: translate(-50%, -50%);
">
                                    <?php echo WC()->cart->get_cart_contents_count(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- header end -->