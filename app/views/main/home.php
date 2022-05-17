<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mono</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons&family=Material+Icons+Outlined&family=Material+Icons+Round&family=Material+Icons+Sharp&family=Material+Icons+Two+Tone" rel="stylesheet" />

    <link rel="stylesheet" href="<?= CSSROOT ?>/base.css">
    <link rel="stylesheet" href="<?= CSSROOT ?>/navbarMain.css">
    <link rel="stylesheet" href="<?= CSSROOT ?>/footer.css">
    <link rel="stylesheet" href="<?= CSSROOT ?>/home.css">
    <link rel="stylesheet" href="<?= CSSROOT ?>/login_pop_up.css">
    <link rel="stylesheet" href="<?= CSSROOT ?>/helper.css">
</head>

<body>
    <?php
    include_once  APPROOT . "/app/components/navbar_main.php";
    ?>
    <main>
        <div class="header_placeholder"></div>
        <section class="hero-wrapper">
            <div class="hero">
                <div class="hero__img-wrapper">
                    <div class="hero__img-animationContainer clippedImg-animationContainer"></div>
                    <img src="<?= ASTROOT ?>/imgs/home-hero-01.svg" alt="lady in black jacket" class="hero__img">
                    <img src="<?= ASTROOT ?>/imgs/home-hero-02.svg" alt="lady with hair flowing" class="hero__img hero__img-clipped img-clipped">
                </div>
                <div class="hero__tagline">“MASK-OFF”</div>
                <div class="hero__callToAction-wrapper">
                    <a href="<?= URLROOT ?>/collections" class="hero__callToAction-link">
                        <h3 class="hero__callToAction">Shop Now</h3>
                        <img src="<?= ASTROOT ?>/imgs/Arrow.svg" alt="arrow" class="callToAction_icon">
                    </a>
                </div>
            </div>
        </section>

        <section class="showcase-wrapper">
            <div class="showcase__title">
                <h1 class="showcase__title_header">collections</h1>
                <h4 class="showcase__title_subHeader">showcase</h4>
            </div>
            <a class="showcase__countries_link" href="<?= URLROOT ?>/collections">

                <div class="showcase italy">
                    <div class="showcase__img_text">
                        <h4 class="img_text-italy showcase__img_text-content">100万人に一人</h4>
                        <div class="showcase__img-wrapper showcase__img-wrapper_italy">
                            <img class="showcase__img  italy__img-firstImage" src="<?= ASTROOT ?>/imgs/showcase_italy_01.svg">
                            <img class="showcase__img  italy__img-secondImage" src="<?= ASTROOT ?>/imgs/showcase_italy_02.svg">

                            <svg class="showcase__img_svg-filter">
                                <filter id="italy_noise" x="0%" y='0%' width='100%' height='100%'>
                                    <feTurbulence seed="7" stitchTiles="stitch" baseFrequency="0.01" result="italy_noise" numOcatves="10" />
                                    <feDisplacementMap id="italy_displacementMap" in="SourceGraphic" in2="italy_noise" scale="0"></feDisplacementMap>
                                </filter>
                            </svg>

                        </div>
                        <h1 class="italy__text-highlight-wrapper showcase__text showcase__text-mobile">italy/<span class="italy__text-highlight showcase__text-highlight">2025</span></h1>
                    </div>
                    <div class="showcase__text-wrapper">
                        <h1 class="italy__text-highlight-wrapper showcase__text showcase__text-desktop">italy/<br><span class="italy__text-highlight showcase__text-highlight">2025</span></h1>
                        <h4 class="showcase__text_subheading">Fashion week</h4>
                    </div>
                    <div class="italy__bg-wrapper">
                        <img src="<?= ASTROOT ?>/imgs/italy__bg.png" alt="" class="showcase__bg">
                    </div>
                </div>

                <div class="showcase hongKong">
                    <div class="showcase__text-wrapper">
                        <h1 class="hongKong__text-highlight-wrapper showcase__text showcase__text-desktop">Hong kong/<br><span class="hongKong__text-highlight showcase__text-highlight">2030</span></h1>
                        <h4 class="showcase__text_subheading">Fashion week</h4>
                    </div>
                    <div class="showcase__img_text">
                        <h4 class="img_text-hongKong showcase__img_text-content">悲 し み</h4>
                        <div class="showcase__img-wrapper showcase__img-wrapper_hongKong">
                            <img class="showcase__img  hongKong__img-firstImage" src="<?= ASTROOT ?>/imgs/showcase_hongKong_01.svg">
                            <img class="showcase__img  hongKong__img-secondImage" src="<?= ASTROOT ?>/imgs/showcase_hongKong_02.svg">

                            <svg class="showcase__img_svg-filter">
                                <filter id="hongKong_noise" x="0%" y='0%' width='100%' height='100%'>
                                    <feTurbulence seed="7" stitchTiles="stitch" baseFrequency="0.01" result="hongKong_noise" numOcatves="10" />
                                    <feDisplacementMap id="hongKong_displacementMap" in="SourceGraphic" in2="hongKong_noise" scale="0"></feDisplacementMap>
                                </filter>
                            </svg>
                        </div>
                        <h1 class="hongkong__text-highlight-wrapper showcase__text showcase__text-mobile">Hong kong/<span class="hongKong__text-highlight showcase__text-highlight">2030</span></h1>
                    </div>
                </div>
                <div class="showcase turky">
                    <div class="showcase__img_text">
                        <h4 class="img_text-turky showcase__img_text-content">忘れられたことを思い出す</h4>
                        <div class="showcase__img-wrapper showcase__img-wrapper_turky">
                            <img class="showcase__img  turky__img-firstImage" src="<?= ASTROOT ?>/imgs/showcase_turky_01.svg">
                            <img class="showcase__img  turky__img-secondImage" src="<?= ASTROOT ?>/imgs/showcase_turky_02.svg">

                            <svg class="showcase__img_svg-filter">
                                <filter id="turky_noise" x="0%" y='0%' width='100%' height='100%'>
                                    <feTurbulence seed="7" stitchTiles="stitch" baseFrequency="0.01" result="turky_noise" numOcatves="10" />
                                    <feDisplacementMap id="turky_displacementMap" in="SourceGraphic" in2="turky_noise" scale="0"></feDisplacementMap>
                                </filter>
                            </svg>

                        </div>
                        <h1 class="turky__text-highlight-wrapper showcase__text showcase__text-mobile">turky/<span class="turky__text-highlight showcase__text-highlight">2033</span></h1>
                    </div>
                    <div class="showcase__text-wrapper">
                        <h1 class="turky__text-highlight-wrapper showcase__text showcase__text-desktop">turky/<br><span class="turky__text-highlight showcase__text-highlight">2033</span></h1>
                        <h4 class="showcase__text_subheading">Fashion week</h4>
                    </div>
                </div>


                <div class="showcase newYork">
                    <div class="showcase__text-wrapper">
                        <h1 class="newYork__text-highlight-wrapper showcase__text showcase__text-desktop">new York/<br><span class="newYork__text-highlight showcase__text-highlight">2035</span></h1>
                        <h4 class="showcase__text_subheading">Fashion week</h4>
                    </div>
                    <div class="showcase__img_text">
                        <h4 class="img_text-newYork showcase__img_text-content">ランカー</h4>
                        <div class="showcase__img-wrapper showcase__img-wrapper_newYork">
                            <img class="showcase__img  newYork__img-firstImage" src="<?= ASTROOT ?>/imgs/showcase_newYork_01.svg">
                            <img class="showcase__img  newYork__img-secondImage" src="<?= ASTROOT ?>/imgs/showcase_newYork_02.svg">

                            <svg class="showcase__img_svg-filter">
                                <filter id="newYork_noise" x="0%" y='0%' width='100%' height='100%'>
                                    <feTurbulence seed="7" stitchTiles="stitch" baseFrequency="0.01" result="newYork_noise" numOcatves="10" />
                                    <feDisplacementMap id="newYork_displacementMap" in="SourceGraphic" in2="newYork_noise" scale="0"></feDisplacementMap>
                                </filter>
                            </svg>
                        </div>
                        <h1 class="newYork__text-highlight-wrapper showcase__text showcase__text-mobile">new York/<span class="newYork__text-highlight showcase__text-highlight">2035</span></h1>
                    </div>
                    <div class="newYork__bg-wrapper">
                        <img src="<?= ASTROOT ?>/imgs/newYork__bg.png" alt="" class="showcase__bg">
                    </div>
                </div>

                <div class="showcase canada">
                    <div class="showcase__img_text">
                        <h4 class="img_text-canada showcase__img_text-content">平衡</h4>
                        <div class="showcase__img-wrapper showcase__img-wrapper_canada">
                            <img class="showcase__img  canada__img-firstImage" src="<?= ASTROOT ?>/imgs/showcase_canada_01.svg">
                            <img class="showcase__img  canada__img-secondImage" src="<?= ASTROOT ?>/imgs/showcase_canada_02.svg">

                            <svg class="showcase__img_svg-filter">
                                <filter id="canada_noise" x="0%" y='0%' width='100%' height='100%'>
                                    <feTurbulence seed="7" stitchTiles="stitch" baseFrequency="0.01" result="canada_noise" numOcatves="10" />
                                    <feDisplacementMap id="canada_displacementMap" in="SourceGraphic" in2="canada_noise" scale="0"></feDisplacementMap>
                                </filter>
                            </svg>

                        </div>
                        <h1 class="canada__text-highlight-wrapper showcase__text showcase__text-mobile">canada/<span class="canada__text-highlight showcase__text-highlight">2037</span></h1>
                    </div>
                    <div class="showcase__text-wrapper">
                        <h1 class="canada__text-highlight-wrapper showcase__text showcase__text-desktop">canada/<br><span class="canada__text-highlight showcase__text-highlight">2037</span></h1>
                        <h4 class="showcase__text_subheading">Fashion week</h4>
                    </div>
                    <div class="canada__bg-wrapper">
                        <img src="<?= ASTROOT ?>/imgs/canada__bg.png" alt="" class="showcase__bg">
                    </div>
                </div>

                <div class="showcase tokyo">
                    <div class="showcase__text-wrapper">
                        <h1 class="tokyo__text-highlight-wrapper showcase__text showcase__text-desktop">tokyo/<br><span class="tokyo__text-highlight showcase__text-highlight">2042</span></h1>
                        <h4 class="showcase__text_subheading">Fashion week</h4>
                    </div>
                    <div class="showcase__img_text">
                        <h4 class="img_text-tokyo showcase__img_text-content">運命</h4>
                        <div class="showcase__img-wrapper showcase__img-wrapper_tokyo">
                            <img class="showcase__img  tokyo__img-firstImage" src="<?= ASTROOT ?>/imgs/showcase_tokyo_01.svg">
                            <img class="showcase__img  tokyo__img-secondImage" src="<?= ASTROOT ?>/imgs/showcase_tokyo_02.svg">

                            <svg class="showcase__img_svg-filter">
                                <filter id="tokyo_noise" x="0%" y='0%' width='100%' height='100%'>
                                    <feTurbulence seed="7" stitchTiles="stitch" baseFrequency="0.01" result="tokyo_noise" numOcatves="10" />
                                    <feDisplacementMap id="tokyo_displacementMap" in="SourceGraphic" in2="tokyo_noise" scale="0"></feDisplacementMap>
                                </filter>
                            </svg>

                        </div>
                        <h1 class="tokyo__text-highlight-wrapper showcase__text showcase__text-mobile">tokyo/<span class="tokyo__text-highlight showcase__text-highlight">2042</span></h1>
                    </div>

                </div>
            </a>

            <div class="showcase__callToAction">
                <div class="showcase__callToAction_text-wrapper">
                    <h4 class="showcase__callToAction_text">Collections</h4>
                </div>
                <div class="showcase__callToAction_mainContent-wrapper">
                    <div class="showcase__callToAction_img-wrapper">
                        <img class="showcase__callToAction_img" src="<?= ASTROOT ?>/imgs/showcaseCallToAction.svg">
                    </div>
                    <div class="showcase__callToAction_text-mobile">
                        <h4 class="showcase__callToAction_text">Collections</h4>
                        <a class="showcase__callToAction_link" href="">see more</a>
                    </div>
                </div>
                <div class="showcase__callToAction_link-wrapper">
                    <a href="<?= URLROOT ?>/collections" class="showcase__callToAction_link">see more</a>
                </div>
            </div>
        </section>
        <?php
        include_once  APPROOT . "/app/components/login_pop_up.php";
        ?>
    </main>

    <footer class="mainFooter-wrapper">
        <div class="mainFooter__header-wrapper">
            <div class="mainFooter__header">
                <p class="mainFooter__header_logo">MONO</p>
                <div class="mainFooter__header_nav">
                    <h5 class="mainFooter_nav__link">
                        <a href="<?= URLROOT ?>/home">Home</a>
                    </h5>
                    <h5 class="mainFooter_nav__link">
                        <a href="<?= URLROOT ?>/collections">Collections</a>
                    </h5>
                    <h5 class="mainFooter_nav__link">
                        <a href="">Contact us</a>
                    </h5>
                </div>
                <div class="mainFooter__header_icons">
                    <a class="mainFooter_icons_link" href="">
                        <i class="fa-brands fa-instagram mainFooter_link_icon"></i>
                    </a>
                    <a class="mainFooter_icons_link" href="">
                        <i class="fa-brands fa-facebook mainFooter_link_icon"></i>
                    </a>
                    <a class="mainFooter_icons_link" href="">
                        <i class="fa-brands fa-twitter mainFooter_link_icon"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="mainFooter__body-wrapper">
            <div class="mainFooter__body">
                <h4 class="mainFooter__body_text">Join our Newsletter</h4>
                <div class="mainFooter__body_form">
                    <div class="mainFooter_form">
                        <label class="mainFooter_form_label" for="mainFooter_form_email">email:</label>
                        <input type="email" id="mainFooter_form_email">
                    </div>
                    <p class="mainFooter_form_msg">this email already subscribed</p>
                </div>
                <button class="btn btn_sm mainFooter__body_btn">subscribe</button>
            </div>
        </div>
        <div class="mainFooter__footer-wrapper">
            <div class="mainFooter__footer">
                <h4 class="mainFooter__footer_text">Terms of service</h4>
                <h4 class="mainFooter__footer_text">Copyright by mono | since 2022</h4>
                <h4 class="mainFooter__footer_text">Made by Monochrome</h4>
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.2/gsap.min.js" integrity="sha512-kVlGhj2qFy+KBCFuvjBJTGUMxbdqJKs4yK2jh0e0VPhWUPiPC87bzm4THmaaIee3Oj7j6sDpTTgm2EPPiESqBg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.2/ScrollTrigger.min.js"></script>
    <script src='<?= JSROOT ?>/navbarMain.js'></script>
    <script src="<?= JSROOT ?>/home.js"></script>
    <script src='<?= JSROOT ?>/login_pop_up.js'></script>

</body>

</html>