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
    <link rel="stylesheet" href="<?= CSSROOT ?>/helper.css">
    <link rel="stylesheet" href="<?= CSSROOT ?>/breadcrumb.css">

    <link rel="stylesheet" href="<?= CSSROOT ?>/navbarMain.css">
    <link rel="stylesheet" href="<?= CSSROOT ?>/footer.css">

    <link rel="stylesheet" href="<?= CSSROOT ?>/product.css">


</head>

<body>
    <?php
    include_once  APPROOT . "/app/components/navbar_main.php";
    ?>
    <main>
        <section class="breadCrumb">
            <div class="breadCrumb--wrapper">
                <a href="<?= URLROOT ?>/home" class="breadCrumb__link">Home</a>
                <p class="breadCrumb__divider">/</p>
                <a href="<?= URLROOT ?>/collections" class="breadCrumb__link">Collections</a>
                <p class="breadCrumb__divider">/</p>
                <a href="" class="breadCrumb__link">Fate</a>
                <div class="breadCrumb__link--wrapper-productName">
                    <p class="breadCrumb__divider">/</p>
                    <a href="" class="breadCrumb__link">Relaxed Fit Hoodie - looney tunes edition</a>
                </div>
            </div>
        </section>

        <section class="product">
            <div class="product__images">
                <div class="product__images-firstGroup--wrapper">
                    <img src="<?= ASTROOT ?>/imgs-products/prd__01_1.jpg" alt="" class="product__images_img">
                    <img src="<?= ASTROOT ?>/imgs-products/prd__01_0.webp" alt="" class="product__images_img">
                </div>
                <div class="product__images-secondGroup--wrapper">
                    <img src="<?= ASTROOT ?>/imgs-products/prd__01_2.webp" alt="" class="product__images_img">
                    <img src="<?= ASTROOT ?>/imgs-products/prd__01_3.webp" alt="" class="product__images_img">
                </div>
            </div>
            <div class="product__details--wrapper">
                <div class="product__details">
                    <div class="product__details_header">
                        <div class="product__details_header-firstSection--wrapper">
                            <h4 class="product_header_title">Relaxed Fit Hoodie - looney tunes edition</h4>
                            <div class="product_header_favorite_icon--wrapper">
                                <span class="material-icons-outlined product_header_favorite_icon--sleep show--favoriteIcon">favorite_border</span>
                                <span class="material-icons-outlined product_header_favorite_icon--active">favorite</span>
                            </div>
                        </div>
                        <div class="product__details_header-secondSection--wrapper">
                            <p class="product_price-decorated-current"><span class="product_price-current">300</span>$</p>
                            <p class="product_price-decorated-former"><span class="product_price-former">499</span>$</p>
                        </div>
                    </div>
                    <div class="product__details_main">
                        <p class="product_main_description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi temporibus qui dolores ab facilis necessitatibus commodi provident voluptates eum, vitae nemo excepturi quidem sequi sit, omnis odit, facere sapiente illum?
                        </p>
                        <div class="product_main_sizes--wrapper">
                            <h5 class="product__details_label">Select size</h5>
                            <div class="product__sizes_btn--wrapper">
                                <div class="sizes_btn">
                                    <input class="sizes__btn_value" value="sm" type="radio" name="size" id="size__sm">
                                    <label class="sizes__btn_label sizes__btn_label-sm" for="size__sm">SM</label>
                                </div>
                                <div class="sizes_btn">
                                    <input class="sizes__btn_value" value="m" type="radio" name="size" id="size__m">
                                    <label class="sizes__btn_label sizes__btn_label-m" for="size__m">M</label>
                                </div>
                                <div class="sizes_btn">
                                    <input class="sizes__btn_value" value="l" type="radio" name="size" id="size__l">
                                    <label class="sizes__btn_label sizes__btn_label-l" for="size__l">L</label>
                                </div>
                                <div class="sizes_btn">
                                    <input class="sizes__btn_value" value="xl" type="radio" name="size" id="size__xl">
                                    <label class="sizes__btn_label sizes__btn_label-xl" for="size__xl">XL</label>
                                </div>
                            </div>
                            <p class="msg msg__sizes msg--success msg--hidden">*please choose a size</p>
                        </div>
                        <div class="product_main_amount--wrapper">
                            <h5 class="product__details_label">Select amount</h5>
                            <div class="product__amount_btn--wrapper">
                                <span data-product-id="1" class="material-icons-sharp product-amount-desc">expand_more</span>
                                <span data-product-id="1" class="product__amount_value">1</span>
                                <span data-product-id="1" class="material-icons-sharp product-amount-asc">expand_less</span>
                            </div>
                        </div>
                    </div>
                    <div class="product__details_footer">
                        <p class="addToBag__btn btn btn_xl"><span class="material-icons-outlined addToBag__icon">shopping_bag</span> Add to bag</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php
    include_once  APPROOT . "/app/components/footer.php";
    ?>
    <script src='<?= JSROOT ?>/navbarMain.js'></script>
    <script src='<?= JSROOT ?>/product.js'></script>


</body>