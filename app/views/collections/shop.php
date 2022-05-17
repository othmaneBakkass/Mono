<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mono</title>
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons&family=Material+Icons+Outlined&family=Material+Icons+Round&family=Material+Icons+Sharp&family=Material+Icons+Two+Tone" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="<?= CSSROOT ?>/base.css">
    <link rel="stylesheet" href="<?= CSSROOT ?>/navbarMain.css">
    <link rel="stylesheet" href="<?= CSSROOT ?>/footer.css">
    <link rel="stylesheet" href="<?= CSSROOT ?>/shop.css">

</head>

<body>
    <header class="navbar-wrapper">
        <nav class="nav">
            <h3 class="logo">Mono</h3>

            <div class="navGroup-wrapper">
                <ul class="navGroup">
                    <li class="navGroup__listItem"><a class="listItem_listLink " href="<?= URLROOT ?>/home">Home</a></li>
                    <li class="navGroup__listItem"><a class="listItem_listLink listLink-active" href="<?= URLROOT ?>/collections">Collections</a></li>
                    <li class="navGroup__listItem"><a class="listItem_listLink" href="">About us</a></li>
                    <li class="navGroup__listItem"><a class="listItem_listLink" href="">Contact us</a></li>
                    <li class="navGroup__listItem"><a class="listItem_listLink" href="">Profile</a></li>

                    <li class="navGroup__listItem"><a class="listItem_listLink" href="">Sign out</a></li>
                    <li class="navGroup__listItem"><a class="listItem_listLink" href="">Mono club</a></li>
                    <li class="navGroup__listItem"><a class="listItem_listLink listItem_listLink_cart" href="<?= URLROOT ?>/cart"><span class="listItem_listLink_cartText">Cart</span><span class="material-icons-outlined">shopping_bag</span></a></li>
                </ul>
            </div>

            <div class="toggleBtn-wrapper">
                <div class="toggleBtn">
                    <div class="toggleBtn__section_1"></div>
                    <div class="toggleBtn__section_2"></div>
                    <div class="toggleBtn__section_3"></div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="header_placeholder"></div>
        <section class="breadCrumb">
            <div class="breadCrumb--wrapper">
                <a href="<?= URLROOT ?>/home" class="breadCrumb__link">Home</a>
                <p class="breadCrumb__divider">/</p>
                <a href="<?= URLROOT ?>/collections" class="breadCrumb__link">Collections</a>
                <p class="breadCrumb__divider">/</p>
                <a href="" class="breadCrumb__link">Fate</a>
            </div>
        </section>
        <section class="hero__slider--wrapper">
            <div class="hero__slider">
                <div class="hero__slider_img--wrapper">
                    <img class="hero__slider_img" src="<?= ASTROOT ?>/imgs/fate__slider_01.svg">
                </div>
                <div class="hero__slider_img--wrapper">
                    <img class="hero__slider_img" src="<?= ASTROOT ?>/imgs/fate__slider_02.svg">
                </div>
                <div class="hero__slider_img--wrapper">
                    <img class="hero__slider_img" src="<?= ASTROOT ?>/imgs/fate__slider_03.svg">
                </div>
                <div class="hero__slider_img--wrapper">
                    <img class="hero__slider_img" src="<?= ASTROOT ?>/imgs/fate__slider_04.svg">
                </div>
                <div class="hero__slider_img--wrapper">
                    <img class="hero__slider_img" src="<?= ASTROOT ?>/imgs/fate__slider_05.svg">
                </div>
                <div class="hero__slider_img--wrapper">
                    <img class="hero__slider_img" src="<?= ASTROOT ?>/imgs/fate__slider_06.svg">
                </div>
                <div class="hero__slider_img--wrapper">
                    <img class="hero__slider_img" src="<?= ASTROOT ?>/imgs/fate__slider_01.svg">
                </div>
                <div class="hero__slider_img--wrapper">
                    <img class="hero__slider_img" src="<?= ASTROOT ?>/imgs/fate__slider_02.svg">
                </div>
                <div class="hero__slider_img--wrapper">
                    <img class="hero__slider_img" src="<?= ASTROOT ?>/imgs/fate__slider_03.svg">
                </div>
                <div class="hero__slider_img--wrapper">
                    <img class="hero__slider_img" src="<?= ASTROOT ?>/imgs/fate__slider_04.svg">
                </div>
                <div class="hero__slider_img--wrapper">
                    <img class="hero__slider_img" src="<?= ASTROOT ?>/imgs/fate__slider_05.svg">
                </div>
            </div>
        </section>
        <section class="userActions--wrapper">
            <div class="userActions__outline_top"></div>
            <div class="userActions__outline_bottom">
                <div class="userActions">
                    <div class="userActions__filter">
                        <p class="userActions__filter_text">Filter</p>
                        <span class="material-icons-outlined userActions__filter_icon">filter_list</span>
                    </div>
                    <div class="userActions__search">
                        <label id="search_label" for="search"><span class="material-icons-sharp userActions__search_icon">search</span></label>
                        <input id="search" type="text" class="userActions__search_input" placeholder="search..." autocomplete="off" />
                    </div>
                    <div class="userActions__sort">
                        <p class="userActions__sort_text">Sort by</p>
                        <span class="material-icons-outlined userActions__sort_icon">sort</span>
                        <div class="sort__dropdown">
                            <label class="sort__dropdown_option" for="sort__name--A-to-Z">Name from A to Z</label>
                            <label class="sort__dropdown_option" for="sort__name--Z-to-A">Name from Z to A</label>
                            <label class="sort__dropdown_option" for="sort__price--high-to-low">Price from high to low</label>
                            <label class="sort__dropdown_option" for="sort__price--low-to-high">Price from low to high</label>
                            <input type="radio" name="sort" id="sort__name--A-to-Z" value="name_a-z" class="sort__dropdown_input">
                            <input type="radio" name="sort" id="sort__name--Z-to-A" value="name_z-a" class="sort__dropdown_input">
                            <input type="radio" name="sort" id="sort__price--high-to-low" value="price_high-low" class="sort__dropdown_input">
                            <input type="radio" name="sort" id="sort__price--low-to-high" value="price_low-high" class="sort__dropdown_input">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="products">
            <a href="">
                <div class="product product--hover">
                    <img src="<?= ASTROOT ?>/imgs/fate__slider_06.svg" class="product__img">
                    <div class="product__overlay"></div>
                    <div class="product__description">
                        <p class="product__description_name">Lorem Ipsum</p>
                        <div class="product__description_price--wrapper">
                            <p class="product__description_price-decorated"><span class="product__description_price">300</span>$</p>
                            <p class="product__description_price-decorated-former"><span class="product__description_price-former">499</span>$</p>
                        </div>
                    </div>
                </div>
            </a>
            <div class="product ">
                <img src="<?= ASTROOT ?>/imgs/fate__slider_03.svg" class="product__img">
                <div class="product__overlay"></div>
                <div class="product-outOfStock">
                    <p class="product__text-outOfStock">Out of stock</p>
                </div>
            </div>
            <a href="">
                <div class="product product--hover">
                    <img src="<?= ASTROOT ?>/imgs/fate__slider_03.svg" class="product__img">
                    <div class="product__overlay"></div>
                    <div class="product__description">
                        <p class="product__description_name">Lorem Ipsum</p>
                        <div class="product__description_price--wrapper">
                            <p class="product__description_price-decorated"><span class="product__description_price">300</span>$</p>
                            <p class="product__description_price-decorated-former"><span class="product__description_price-former">499</span>$</p>
                        </div>
                    </div>
                </div>
            </a>
            <div class="product ">
                <img src="<?= ASTROOT ?>/imgs/fate__slider_03.svg" class="product__img">
                <div class="product__overlay"></div>
                <div class="product-outOfStock">
                    <p class="product__text-outOfStock">Out of stock</p>
                </div>
            </div>
            <a href="">
                <div class="product product--hover">
                    <img src="<?= ASTROOT ?>/imgs/fate__slider_03.svg" class="product__img">
                    <div class="product__overlay"></div>
                    <div class="product__description">
                        <p class="product__description_name">Lorem Ipsum</p>
                        <div class="product__description_price--wrapper">
                            <p class="product__description_price-decorated"><span class="product__description_price">300</span>$</p>
                            <p class="product__description_price-decorated-former"><span class="product__description_price-former">499</span>$</p>
                        </div>
                    </div>
                </div>
            </a>
            <div class="product ">
                <img src="<?= ASTROOT ?>/imgs/fate__slider_03.svg" class="product__img">
                <div class="product__overlay"></div>
                <div class="product-outOfStock">
                    <p class="product__text-outOfStock">Out of stock</p>
                </div>
            </div>
        </section>

        <div class="modal modal__filter">
            <div class="modal__content">
                <div class="modal__content_header">
                    <span class="material-icons-outlined modal__content_header_icon">
                        close
                    </span>
                </div>
                <div class="modal__content_body modal__content_body--filter">
                    <div class="product__size--section">
                        <h2 class="product__size_title">Product size</h2>
                        <div class="product__filter--wrapper product__filter-size--wrapper">
                            <div class="product__filter">
                                <input class="product__filter_input" type="checkbox" name="size__all" id="size__all">
                                <label class="product__filter_label" for="size__all">All</label>
                            </div>
                            <div class="product__filter">
                                <input class="product__filter_input" type="checkbox" name="size__xl" id="size__xl">
                                <label class="product__filter_label" for="size__xl">XL</label>
                            </div>
                            <div class="product__filter">
                                <input class="product__filter_input" type="checkbox" name="size__l" id="size__l">
                                <label class="product__filter_label" for="size__l">L</label>
                            </div>
                            <div class="product__filter">
                                <input class="product__filter_input" type="checkbox" name="size__m" id="size__m">
                                <label class="product__filter_label" for="size__m">M</label>
                            </div>
                            <div class="product__filter">
                                <input class="product__filter_input" type="checkbox" name="size__sm" id="size__sm">
                                <label class="product__filter_label" for="size__sm">SM</label>
                            </div>
                        </div>
                    </div>
                    <div class="product__type--section">
                        <h2 class="product__type_title">Product type</h2>
                        <div class="product__type--bottomwear">
                            <h4 class="product__type_label">Bottomwear</h4>
                            <div class="product__filter--wrapper">
                                <div class="product__filter">
                                    <input class="product__filter_input" type="checkbox" name="bottomwear__all" id="bottomwear__all">
                                    <label class="product__filter_label" for="bottomwear__all">All</label>
                                </div>
                                <div class="product__filter">
                                    <input class="product__filter_input" type="checkbox" name="bottomwear__chinos" id="bottomwear__chinos">
                                    <label class="product__filter_label" for="bottomwear__chinos">chinos</label>
                                </div>
                                <div class="product__filter">
                                    <input class="product__filter_input" type="checkbox" name="bottomwear__jeans" id="bottomwear__jeans">
                                    <label class="product__filter_label" for="bottomwear__jeans">jeans</label>
                                </div>
                                <div class="product__filter">
                                    <input class="product__filter_input" type="checkbox" name="bottomwear__cargo" id="bottomwear__cargo">
                                    <label class="product__filter_label" for="bottomwear__cargo">cargo pants</label>
                                </div>
                                <div class="product__filter">
                                    <input class="product__filter_input" type="checkbox" name="bottomwear__shorts" id="bottomwear__shorts">
                                    <label class="product__filter_label" for="bottomwear__shorts">shorts</label>
                                </div>
                                <div class="product__filter">
                                    <input class="product__filter_input" type="checkbox" name="bottomwear__sweatpants" id="bottomwear__sweatpants">
                                    <label class="product__filter_label" for="bottomwear__sweatpants">sweatpants</label>
                                </div>
                            </div>
                        </div>
                        <div class="product__type--topwear">
                            <h4 class="product__type_label">Topwear</h4>
                            <div class="product__filter--wrapper">
                                <div class="product__filter">
                                    <input class="product__filter_input" type="checkbox" name="topwear__all" id="topwear__all">
                                    <label class="product__filter_label" for="topwear__all">All</label>
                                </div>
                                <div class="product__filter">
                                    <input class="product__filter_input" type="checkbox" name="topwear__tShirts" id="topwear__tShirts">
                                    <label class="product__filter_label" for="topwear__tShirts">t-shirts</label>
                                </div>
                                <div class="product__filter">
                                    <input class="product__filter_input" type="checkbox" name="topwear__sweatshirts" id="topwear__sweatshirts">
                                    <label class="product__filter_label" for="topwear__sweatshirts">sweatshirts</label>
                                </div>
                                <div class="product__filter">
                                    <input class="product__filter_input" type="checkbox" name="topwear__hoodies" id="topwear__hoodies">
                                    <label class="product__filter_label" for="topwear__hoodies">hoodies</label>
                                </div>
                                <div class="product__filter">
                                    <input class="product__filter_input" type="checkbox" name="topwear__jackets" id="topwear__jackets">
                                    <label class="product__filter_label" for="topwear__jackets">jackets</label>
                                </div>
                                <div class="product__filter">
                                    <input class="product__filter_input" type="checkbox" name="topwear__flannel" id="topwear__flannel">
                                    <label class="product__filter_label" for="topwear__flannel">flannel</label>
                                </div>
                                <div class="product__filter">
                                    <input class="product__filter_input" type="checkbox" name="topwear__overcoats" id="topwear__overcoats">
                                    <label class="product__filter_label" for="topwear__overcoats">overcoats</label>
                                </div>
                                <div class="product__filter">
                                    <input class="product__filter_input" type="checkbox" name="topwear__suits" id="topwear__suits">
                                    <label class="product__filter_label" for="topwear__suits">suits</label>
                                </div>
                            </div>
                        </div>

                        <div class="product__type--shoes">
                            <h4 class="product__type_label">shoes</h4>
                            <div class="product__filter--wrapper">
                                <div class="product__filter">
                                    <input class="product__filter_input" type="checkbox" name="shoes__all" id="shoes__all">
                                    <label class="product__filter_label" for="shoes__all">All</label>
                                </div>
                                <div class="product__filter">
                                    <input class="product__filter_input" type="checkbox" name="shoes__sneakers" id="shoes__sneakers">
                                    <label class="product__filter_label" for="shoes__sneakers">Sneakers</label>
                                </div>
                                <div class="product__filter">
                                    <input class="product__filter_input" type="checkbox" name="shoes__boots" id="shoes__boots">
                                    <label class="product__filter_label" for="shoes__boots">Boots</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product__price--section">
                        <div class="product__price_title">Price</div>
                        <div class="price--wrapper">
                            <div class="price__range">
                                <input type="range" name="" min="250" max="30000" value="30000" class="price__range_max">
                                <input type="range" name="" min="250" max="30000" value="250" class="price__range_min">
                            </div>
                        </div>
                        <div class="price__range_value--wrapper">
                            <p class="price__range_minValue-decorated">Min: <span class="price__range_minValue">000</span>$</p>
                            <p class="price__range_maxValue-decorated">Max: <span class="price__range_maxValue">30000</span>$</p>
                        </div>
                    </div>
                    <div class="product__sale--section">
                        <h2 class="product__sale_title">Products on sale</h2>
                        <div class="product__filter--wrapper">
                            <div class="product__filter">
                                <input class="product__filter_input" type="checkbox" name="onSale" id="onSale">
                                <label class="product__filter_label" for="onSale">Yes</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal__content_footer">
                    <p class="filter__cancel_btn">cancel</p>
                    <button class="btn btn_sm filter__save_btn">save</button>
                </div>
            </div>
        </div>



    </main>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.2/gsap.min.js" integrity="sha512-kVlGhj2qFy+KBCFuvjBJTGUMxbdqJKs4yK2jh0e0VPhWUPiPC87bzm4THmaaIee3Oj7j6sDpTTgm2EPPiESqBg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src='<?= JSROOT ?>/navbarMain.js'></script>
    <script src='<?= JSROOT ?>/shop.js'></script>
</body>

</html>