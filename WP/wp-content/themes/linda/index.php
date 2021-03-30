<?php get_header(); ?>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PNG4Q9M"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div class="main">
    
        <svg class="graph-topo" width="2560" height="1035" viewBox="0 0 2560 1035" fill="none" xmlns="http://www.w3.org/2000/svg">
            <mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="2560" height="1035">
            <rect width="2560" height="1035" fill="white"/>
            </mask>
            <g mask="url(#mask0)">
            <path opacity="0.03" d="M1454.3 279.808C1415.85 120.695 305.97 159.109 -17.6613 198.212L-25.5 -45.9684L2381 -234.484C2626.78 165.156 3106.5 1017.02 2060.31 949.678C1390.71 906.579 1502.35 478.699 1454.3 279.808Z" fill="#FF7175"/>
            <path opacity="0.03" d="M1371.5 319.347C1333.05 160.234 344.97 198.665 21.3387 237.769L13.5 -6.41223L2394.5 -249.002C2640.28 150.638 3273 1104 1977.51 989.218C1307.91 946.119 1419.55 518.238 1371.5 319.347Z" fill="#FF7175"/>
            <path opacity="0.03" d="M1425.94 299.407C1387.49 140.294 333.47 178.725 9.83875 217.829L2.0001 -26.352L2405 -278.501C2650.78 121.138 3412.5 1011.5 2031.95 969.277C1362.35 926.178 1473.99 498.298 1425.94 299.407Z" fill="#FF7175"/>
            </g>
        </svg>
        <?php get_template_part('inc/nav');?>

        <?php get_template_part('inc/modal');?>

        

        <section id="hero" class="moduleHero">
            <div class="wrap">
                <div class="text-box">

                    <?php the_field('intro_text', 'option'); ?>

                    <a href="javascript:(0)" class="btn modalcta"><div class="border-wrap">Baixe agora grátis!</div></a>
                    
                    <div class="box-btns">
                        <?php if(get_field('url_stores', 'option')): $i = 0; ?>
                        <?php while(has_sub_field('url_stores', 'option')): $i++; ?>

                        <a href="<?php the_sub_field('google_play'); ?>"><img alt="" src="<?php echo PW_THEME_URL; ?>./assets/img/gplay.png"></a>
                        <a href="<?php the_sub_field('app_store'); ?>"><img alt="" src="<?php echo PW_THEME_URL; ?>./assets/img/apstore.png"></a>

                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="img-box">
                    <img alt="Linda_1" src="<?php echo PW_THEME_URL; ?>./assets/img/svg/Linda_A_FLAT1png.png">
                </div>
            </div>
        </section>

        <section id="features" class="moduleFeature">
                
            <div class="wrap grid box-cont">
                <div class="img-box">
                    <img alt="Linda_2" src="<?php echo PW_THEME_URL; ?>./assets/img/iPhone-Clay-Frontal-White.png">
                </div>
                <div class="text-box">
                    <h1><?php the_field('titulo_feature1', 'option'); ?></h1>

                    <p>
                        <?php the_field('infos_feature1', 'option'); ?>
                    </p>
                    
                    <a href="javascript:(0)" class="btn modalcta"><div class="border-wrap">Quero baixar agora grátis!</div></a>
                    
                </div>
                    
            </div>
            
            <svg class="div-feature" width="2420" height="174" viewBox="0 0 2420 174" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.10352e-05 69.5H476C556 69.5 716 69.5 876 89.7341C1036 110.348 1196 150.247 1356 150.532C1516 150.247 1676 110.348 1756 89.7341L1836 69.5L2419.5 0V174H1756C1676 174 1516 174 1356 174C1196 174 1036 174 876 174C716 174 556 174 476 174H0L6.10352e-05 69.5Z" fill="white"/>
            </svg>
        </section>

        <section id="steps" class="moduleSteps">
            <div class="wrap grid">
                <h1 class="title col100" style="max-width: 600px;margin: auto;"><?php the_field('titulo_feature2', 'option'); ?></h1>
                <p class="subtitle col100"><?php the_field('info_feature2', 'option'); ?></p>
            </div>
            <div class="wrap grid">
            
            <?php if(get_field('utilidades', 'option')): $i = 0; ?>
            <?php while(has_sub_field('utilidades', 'option')): $i++; ?>

                <?php while(has_sub_field('utilidade1')): $i++; ?>
                <div class="step-box">
                    <icon>
                        <img alt="" src="<?php the_sub_field('icone'); ?>">
                    </icon>
                    <h4><?php the_sub_field('nome'); ?></h4>
                    <p><?php the_sub_field('texto'); ?></p>
                </div>
                <?php endwhile; ?>


                <?php while(has_sub_field('utilidade2')): $i++; ?>
                <div class="step-box">
                    <icon>
                        <img alt="" src="<?php the_sub_field('icone'); ?>">
                    </icon>
                    <h4><?php the_sub_field('nome'); ?></h4>
                    <p><?php the_sub_field('texto'); ?></p>
                </div>
                <?php endwhile; ?>


                <?php while(has_sub_field('utilidade3')): $i++; ?>
                <div class="step-box">
                    <icon>
                        <img alt="" src="<?php the_sub_field('icone'); ?>">
                    </icon>
                    <h4><?php the_sub_field('nome'); ?></h4>
                    <p><?php the_sub_field('texto'); ?></p>
                </div>
                <?php endwhile; ?>

            <?php endwhile; ?>
            <?php endif; ?>
            </div>
            <a href="javascript:(0)" class="btn modalcta"><div class="border-wrap">Baixe agora grátis!</div></a>

        </section>

        <section id="como-funciona" class="moduleFeature-2">
            <svg class="union-topo" width="2537" height="332" viewBox="0 0 2537 332" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="2536" height="332" fill="white"/>
                <path d="M2117.5 86.5C2042 100.5 1654.8 288.3 1274 207.5C879.455 123.784 564.837 97.9853 473 102C454.04 102.829 331 106 0.5 119V301.5H2536.5V66.5V3L2327 44.75C2327 44.75 2193 72.5 2117.5 86.5Z" fill="#FBF4F6"/>
                <path d="M2117 117C2041.5 131 1654.3 318.8 1273.5 238C878.955 154.284 564.337 128.485 472.5 132.5C453.54 133.329 330.5 136.5 0 149.5V332H2536V97V33.5L2326.5 75.25C2326.5 75.25 2192.5 103 2117 117Z" fill="#FFF8F8"/>
                </svg>
                
            <div class="wrap grid box-cont">
                <div class="img-box">
                    <img alt="Linda_2" src="<?php echo PW_THEME_URL; ?>./assets/img/svg/Linda_A_FLAT2png.png">
                </div>
                <div class="text-box">
                    <h1><?php the_field('titulo_comofunciona', 'option'); ?></h1>
                    <p><?php the_field('info_comofunciona', 'option'); ?></p>
            
                    <?php if(get_field('utilidades_comofunciona', 'option')): $i = 0; ?>
                    <?php while(has_sub_field('utilidades_comofunciona', 'option')): $i++; ?>

                        <?php while(has_sub_field('utilidade1')): $i++; ?>
                        <div class="step-box">

                            <div class="title-step"><img src="<?php the_sub_field('icone'); ?>">
                                <h3><?php the_sub_field('nome'); ?></h3>
                            </div>
                            <p><?php the_sub_field('texto'); ?></p>

                        </div>
                        <?php endwhile; ?>

                        <?php while(has_sub_field('utilidade2')): $i++; ?>
                        <div class="step-box">

                            <div class="title-step"><img src="<?php the_sub_field('icone'); ?>">
                                <h3><?php the_sub_field('nome'); ?></h3>
                            </div>
                            <p><?php the_sub_field('texto'); ?></p>

                        </div>
                        <?php endwhile; ?>

                        <?php while(has_sub_field('utilidade3')): $i++; ?>
                        <div class="step-box">

                            <div class="title-step"><img src="<?php the_sub_field('icone'); ?>">
                                <h3><?php the_sub_field('nome'); ?></h3>
                            </div>
                            <p><?php the_sub_field('texto'); ?></p>

                        </div>
                        <?php endwhile; ?>

                    <?php endwhile; ?>
                    <?php endif; ?>

                    <a href="javascript:(0)" class="btn modalcta"><div class="border-wrap">Adorei! Quero baixar agora grátis!</div></a>

                    <div class="box-btns">
                    
                        <?php if(get_field('url_stores', 'option')): $i = 0; ?>
                        <?php while(has_sub_field('url_stores', 'option')): $i++; ?>

                        <a href="<?php the_sub_field('google_play'); ?>"><img alt="" src="<?php echo PW_THEME_URL; ?>./assets/img/gplay.png"></a>
                        <a href="<?php the_sub_field('app_store'); ?>"><img alt="" src="<?php echo PW_THEME_URL; ?>./assets/img/apstore.png"></a>

                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    
                </div>
                    
            </div>
            
            <svg class="crop-bottom" width="1607" height="242" viewBox="0 0 1607 242" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M337 0.0638652C169.8 -2.73613 42.6667 87.2305 0 132.564V241.564H1607V223.064C1526 170.064 1329.1 63.6638 1189.5 62.0638C1015 60.0638 945 149.564 767.5 154.564C590 159.564 546 3.56387 337 0.0638652Z" fill="#FBFBFD"/>
            </svg>
        </section>

        <section id="depoimentos" class="moduleReviews" style="display:<?php the_field('sessao-testemonial', 'option'); ?>;">
            <h1 class="title"><?php the_field('titulo_testemonials', 'option'); ?></h1>
            <p class="subtitle"><?php the_field('intro_testemonials', 'option'); ?></p>
            <div class="wrap grid box-cont">
                <div class="cards-glider">
                    <?php if(get_field('Testemonials_loop', 'option')): $i = 0; ?>
                    <?php while(has_sub_field('Testemonials_loop', 'option')): $i++; ?>

                    <div class="col33">
                        <div class="wrap-box">
                            <div class="img-wrap">
                                <img alt="" src="<?php the_sub_field('img'); ?>">
                            </div>
    
                            
                            <h3><?php the_sub_field('nome'); ?></h3>
                            <h4><?php the_sub_field('profissao'); ?></h4>
                            <p><?php the_sub_field('testemunho'); ?></p>
                        </div>
    
                    </div>

                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div id="dots-cards" class="dots-cards"></div>
            </div>
            <a href="javascript:(0)" class="btn modalcta">
                <div class="border-wrap">Baixe agora grátis!</div>
            </a>
        </section>

        <section id="blog" class="moduleBlog">
            <h1 class="title">Ultimas noticias</h1>
            <h2 class="subtitle">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</h2>
            
            
            <div class="wrap">
                <div class="grid loop-blog">
                    <div class="col33 blog-card">
                        <div class="thumb-img">
                            <img src="http://placehold.it/363x290">
                        </div>
                        <h5>Lorem, ipsum.</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, beatae.</p>
                        <span>10/01/2021</span>
                    </div>
                    <div class="col33 blog-card">
                        <div class="thumb-img">
                            <img src="http://placehold.it/363x290">
                        </div>
                        <h5>Lorem, ipsum.</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, beatae.</p>
                        <span>10/01/2021</span>
                    </div>
                    <div class="col33 blog-card">
                        <div class="thumb-img">
                            <img src="http://placehold.it/363x290">
                        </div>
                        <h5>Lorem, ipsum.</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, beatae.</p>
                        <span>10/01/2021</span>
                    </div>
                </div>
                <a href="<?php the_field('url_ctas', 'option'); ?>" class="btn"><div class="border-wrap">Veja Mais</div></a>
            </div>
            
        </section>


        <section id="faq" class="moduleFaq">
            <svg class="wave-faq" width="2570" height="505" viewBox="0 0 2570 505" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="11.4536" width="2536" height="341" fill="#FBFBFD"/>
                <path d="M2547.19 0L2443.2 31.9972C2339.25 64.4685 2131.24 127.752 1919.67 135.326C1708.1 142.901 1492.82 92.397 1282.46 118.936C1072.1 145.476 866.514 246.688 656.558 279.509C446.555 311.619 232.18 275.339 124.94 256.369L11.4534 237L11.4535 342L180.453 348.113C286.049 341.362 470.261 361.614 681.453 348.113C892.645 334.612 1100.76 361.614 1311.95 348.113C1523.15 334.612 1722.26 361.614 1933.45 348.113C2145.45 343 2357.82 354.863 2463.41 348.113L2547.19 341.362L2547.19 0Z" fill="#FFF8F8"/>
                </svg>
            <!-- Faq -->
            <div class="wrap box-cont">
                <h1 class="title"><?php the_field('titulo_faq', 'option'); ?></h1>
                <h2 class="subtitle"><?php the_field('intro_faq', 'option'); ?></h2>

                <div class="accordion">

                    <?php if(get_field('faq', 'option')): $i = 0; ?>
                    <?php while(has_sub_field('faq', 'option')): $i++; ?>

                    <div class="item">
                        <a href="#acc<?php echo $i; ?>"  class="header-acc acc-heading ">
                            <span><?php the_sub_field('pergunta'); ?></span>
                            <svg width="24" height="14" viewBox="0 0 24 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 2L12.08 12.08L22.16 2" stroke="url(#paint0_linear)" stroke-width="2.88" stroke-linecap="round" stroke-linejoin="round"/>
                                <defs>
                                <linearGradient id="paint0_linear" x1="11.1852" y1="-2.55718" x2="18.0625" y2="12.6548" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FF626F"/>
                                <stop offset="1" stop-color="#D421D7"/>
                                </linearGradient>
                                </defs>
                            </svg>
                        </a>

                        <div id="acc<?php echo $i; ?>" class="acc-content">
                            <div class="inner">
                                <?php the_sub_field('resposta'); ?>
                            </div><!-- / .inner -->
                        </div>
                    </div><!-- / .item -->


                    <?php endwhile; ?>
                    <?php endif; ?>

                </div><!-- / .accordion -->

                <div class="btn-box">
                    <a href="javascript:(0)" class="btn modalcta"><div class="border-wrap">Baixe aqui!</div></a>
                </div>
            </div>
        </section> <!-- /Faq -->


        
        <?php get_footer(); ?>
    </div>

    
    
    
    
</body>
</html>