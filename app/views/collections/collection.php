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
    <link rel="stylesheet" href="<?= CSSROOT ?>/collection.css">
    <link rel="stylesheet" href="<?= CSSROOT ?>/login_pop_up.css">
    <link rel="stylesheet" href="<?= CSSROOT ?>/helper.css">

</head>

<body>
    <?php
    include_once  APPROOT . "/app/components/navbar_main.php";
    ?>
    <main>
        <div class="header_placeholder"></div>
        <section class="hero">
            <div class="hero__title--wrapper">
                <h4 class="hero__title">Beautiful.</h4>
                <h4 class="hero__title">Bold.</h4>
                <h4 class="hero__title">Elegant.</h4>
            </div>
            <div class="hero__content">
                <div class="hero__content_leftSide--wrapper">
                    <div class="hero__content_imgs--wrapper left_imgs">
                        <img class="hero__content_leftSide-img" src="<?= ASTROOT ?>/imgs/collection_left_01" alt="" srcset="">
                        <img class="hero__content_leftSide-img--secondaryImage" src="<?= ASTROOT ?>/imgs/collection_left_02" alt="" srcset="">
                    </div>
                </div>
                <div class="hero__content_video--wrapper">
                    <video class="hero__content_video" autoplay muted loop>
                        <source src="<?= ASTROOT ?>/videos/collection_video.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="hero__content_rightSide--wrapper ">
                    <div class="hero__content_imgs--wrapper right_imgs">
                        <img class="hero__content_rightSide-img" src="<?= ASTROOT ?>/imgs/collection_right_01" alt="" srcset="">
                        <img class="hero__content_rightSide-img--secondaryImage" src="<?= ASTROOT ?>/imgs/collection_right_02" alt="" srcset="">
                    </div>
                </div>
            </div>

            <div class="hero__content--mobile">
                <div class="hero__content-img--mobile_wrapper">
                    <img class="hero__content-img--mobile" src="<?= ASTROOT ?>/imgs/collection_mobile_gradient.svg">
                </div>
            </div>
        </section>
        <section class="collections">
            <h1 class="collections_title">Our Collections</h1>
            <div class="collections__slider--wrapper">
                <div class="collections__slider">
                    <a href="<?= URLROOT ?>/collections/shop?id=Equilibrium">
                        <div class="collections__slider_img--wrapper collections_slider--current ">
                            <img src="<?= ASTROOT ?>/imgs/collections_slider_01.svg" class="collections__slider_img ">
                        </div>
                    </a>
                    <a href="<?= URLROOT ?>/collections/shop?id=Fate">
                        <div class="collections__slider_img--wrapper collections_slider--previous">
                            <img src="<?= ASTROOT ?>/imgs/collections_slider_02.svg" class="collections__slider_img ">
                        </div>
                    </a>
                    <a href="<?= URLROOT ?>/collections/shop?id=Night_owls">
                        <div class="collections__slider_img--wrapper collections_slider--next">
                            <img src="<?= ASTROOT ?>/imgs/collections_slider_03.svg" class="collections__slider_img ">
                        </div>
                    </a>


                    <div class="collections__slider_placeHolder"></div>
                    <div class="collections__slider_text--mainWrapper">

                        <div class="collections__slider_text--wrapper collections__slider_text--previous">
                            <h4 class="collections__text_title">Equilibrium</h4>
                            <h5 class="collections__text_gender">Men / Woman</h5>
                            <p class="collections__text_paragraph">This collection is a mix of art and quality; all while maintaining a casual look</p>
                        </div>

                        <div class="collections__slider_text--wrapper collections__slider_text--current">
                            <h4 class="collections__text_title">Fate</h4>
                            <h5 class="collections__text_gender">Men / Woman</h5>
                            <p class="collections__text_paragraph">A combination between the artistic boldness of the fashion industry and the culture of streetwear.</p>
                        </div>

                        <div class="collections__slider_text--wrapper collections__slider_text--next">
                            <h4 class="collections__text_title">Night Owls</h4>
                            <h5 class="collections__text_gender">Men / Woman</h5>
                            <p class="collections__text_paragraph">For the restless, the bold, and those who push the limits: We've got you covered.</p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="collections__slider_controls">
                <img class="left_arrow" src="<?= ASTROOT ?>/imgs/slider_arrow_left.svg">
                <img class="right_arrow" src="<?= ASTROOT ?>/imgs/slider_arrow_right.svg">
            </div>
        </section>

        <?php
        include_once  APPROOT . "/app/components/login_pop_up.php";
        ?>
    </main>

    <?php
    include_once  APPROOT . "/app/components/footer.php";
    ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.2/gsap.min.js" integrity="sha512-kVlGhj2qFy+KBCFuvjBJTGUMxbdqJKs4yK2jh0e0VPhWUPiPC87bzm4THmaaIee3Oj7j6sDpTTgm2EPPiESqBg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.2/ScrollTrigger.min.js"></script>
    <script src='<?= JSROOT ?>/navbarMain.js'></script>
    <script src="<?= JSROOT ?>/collection.js"></script>
    <script src='<?= JSROOT ?>/login_pop_up.js'></script>

</body>

</html>