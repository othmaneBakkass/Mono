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
    <link rel="stylesheet" href="<?= CSSROOT ?>/navbarSecondary.css">
    <link rel="stylesheet" href="<?= CSSROOT ?>/pagination.css">
    <link rel="stylesheet" href="<?= CSSROOT ?>/form__input.css">
    <link rel="stylesheet" href="<?= CSSROOT ?>/cart.css">

</head>

<body>
    <?php
    include_once  APPROOT . "/app/components/navbar_secondary.php";
    ?>
    <main>
        <section class="breadcrumbs--wrapper flex__center container__full">
            <div class="breadcrumbs flex__center">
                <a href="<?= URLROOT ?>/home" class="breadCrumb__link">Home</a>
                <p class="breadCrumb__divider">/</p>
                <a href="<?= URLROOT ?>/cart" class="breadCrumb__link">Bag</a>
            </div>
        </section>
        <section class="cart">
            <h4 class="cart__section_title">Shopping Bag</h4>
            <div class="cart__table--wrapper">
                <table class="cart__table">
                    <thead class="cart__table_head">
                        <tr class="cartTable__head_row">
                            <td class="cartTable__head_column cartTable__head_column-starter">Item</td>
                            <td class="cartTable__head_column">Unit Price</td>
                            <td class="cartTable__head_column">Quantity</td>
                            <td class="cartTable__head_column">Final price</td>
                            <td class="cartTable__head_column">Remove</td>
                        </tr>
                    </thead>
                    <tbody class="cart__table_body">
                        <tr class="cartTable__body_row">
                            <td class="cartTable__body_column">
                                <div class="product__img--wrapper">
                                    <img class="product__img" src="<?= ASTROOT ?>/imgs/fate__slider_01.svg" alt="">
                                    <p class="product__img_title ">Levis Jeans 501</p>
                                </div>
                            </td>
                            <td class="cartTable__body_column">
                                <p class="cartTable__body_column_text"><span class="product__price-unit">22</span>$</p>
                            </td>
                            <td class="cartTable__body_column">
                                <div class="quantity--wrapper">
                                    <span data-product-id="1" class="material-icons-sharp cart-quantity-desc">expand_more</span>
                                    <span data-trip-id="1" class="quantity__value cartTable__body_column_text--quantity">1</span>
                                    <span data-trip-id="1" class="material-icons-sharp cart-quantity-asc">expand_less</span>
                                </div>
                            </td>
                            <td class="cartTable__body_column">
                                <p class="cartTable__body_column_text"><span class="product__price-final">44</span>$</p>
                            </td>
                            <td class="cartTable__body_column">
                                <span class="material-icons-outlined cart__remove_btn cartTable__body_column_text ">
                                    close
                                </span>
                            </td>
                        </tr>
                        <tr class="cartTable__body_row">
                            <td class="cartTable__body_column">
                                <div class="product__img--wrapper">
                                    <img class="product__img" src="<?= ASTROOT ?>/imgs/fate__slider_01.svg" alt="">
                                    <p class="product__img_title ">Levis Jeans 501</p>
                                </div>
                            </td>
                            <td class="cartTable__body_column">
                                <p class="cartTable__body_column_text"><span class="product__price-unit">22</span>$</p>
                            </td>
                            <td class="cartTable__body_column">
                                <div class="quantity--wrapper">
                                    <span data-product-id="1" class="material-icons-sharp cart-quantity-desc">expand_more</span>
                                    <span data-product-id="1" class="quantity__value cartTable__body_column_text--quantity">1</span>
                                    <span data-product-id="1" class="material-icons-sharp cart-quantity-asc">expand_less</span>
                                </div>
                            </td>
                            <td class="cartTable__body_column">
                                <p class="cartTable__body_column_text"><span class="product__price-final">44</span>$</p>
                            </td>
                            <td class="cartTable__body_column">
                                <span class="material-icons-outlined cart__remove_btn cartTable__body_column_text ">
                                    close
                                </span>
                            </td>
                        </tr>
                        <tr class="cartTable__body_row">
                            <td class="cartTable__body_column">
                                <div class="product__img--wrapper">
                                    <img class="product__img" src="<?= ASTROOT ?>/imgs/fate__slider_01.svg" alt="">
                                    <p class="product__img_title ">Levis Jeans 501</p>
                                </div>
                            </td>
                            <td class="cartTable__body_column">
                                <p class="cartTable__body_column_text"><span class="product__price-unit">22</span>$</p>
                            </td>
                            <td class="cartTable__body_column">
                                <div class="quantity--wrapper">
                                    <span data-product-id="1" class="material-icons-sharp cart-quantity-desc">expand_more</span>
                                    <span data-trip-id="1" class="quantity__value cartTable__body_column_text--quantity">1</span>
                                    <span data-trip-id="1" class="material-icons-sharp cart-quantity-asc">expand_less</span>
                                </div>
                            </td>
                            <td class="cartTable__body_column">
                                <p class="cartTable__body_column_text"><span class="product__price-final">44</span>$</p>
                            </td>
                            <td class="cartTable__body_column">
                                <span class="material-icons-outlined cart__remove_btn cartTable__body_column_text ">
                                    close
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </section>
        <section class="pagination--wrapper">
            <div class="pagination">
                <div class="pagination__start">First</div>
                <div class="pagination__page pagination__page--current">2</div>
                <div class="pagination__page">3</div>
                <div class="pagination__page">4</div>
                <div class="pagination__page">5</div>
                <div class="pagination__end">Last</div>
            </div>
        </section>
        <section class="customer__form">
            <div class="customer__form_title--wrapper">
                <h4 class="cart__section_title customer__form_title">Customer Information</h4>
            </div>
            <form autocomplete="off" class="customer__form--wrapper form__grid">
                <div class="form__block">
                    <div class="form__group form__group_1">
                        <label for="firstName" class="form__label form__label_1">First Name</label>
                        <input type="text" id="firstName" autocomplete="nope" class="form__input form__input_1">
                        <p class="form__msg"> *invalid password must be between (8-10)</p>
                    </div>
                    <div class="form__group form__group_2">
                        <label for="lastName" class="form__label form__label_2">Last Name</label>
                        <input type="text" id="lastName" autocomplete="nope" class="form__input form__input_2">
                        <p class="form__msg"> *invalid password must be between (8-10)</p>
                    </div>
                </div>
                <div class="form__block">
                    <div class="form__group form__group_3">
                        <label for="email" class="form__label form__label_3">Email</label>
                        <input type="email" id="email" autocomplete="nope" class="form__input form__input_3">
                        <p class="form__msg"> *invalid password must be between (8-10)</p>
                    </div>
                    <div class="form__group form__group_4">
                        <label for="phoneNumber" class="form__label form__label_4">Phone number (optional)</label>
                        <input type="text" id="phoneNumber" autocomplete="nope" class="form__input form__input_4">
                        <p class="form__msg"> *invalid password must be between (8-10)</p>
                    </div>
                </div>
                <div class="form__block">
                    <div class="form__group form__group_dropdown form__group_5">
                        <label for="shipping" class="form__label form__label_dropdown  form__label_5">Shipping option</label>
                        <input type="text" id="shipping" autocomplete="nope" class="form__input form__input_dropDown form__input_5" readonly>
                        <p class="form__msg"> *invalid password must be between (8-10)</p>
                        <span class="material-icons-outlined dropdown__icon">arrow_drop_down</span>
                        <div class="form__dropdown_options--wrapper">
                            <div class="dropdown_option dropdown__option--first">
                                <label for="standard" class="dropdown__option_label">Standard Shipping</label>
                                <input name="dropdownOption" type="radio" id="standard" value="Standard Shipping" class="dropdown__option_value">
                            </div>
                            <div class="dropdown_option dropdown__option--last">
                                <label for="deluxe" class="dropdown__option_label">Deluxe Shipping</label>
                                <input name="dropdownOption" type="radio" id="deluxe" value="Deluxe Shipping" class="dropdown__option_value ">
                            </div>
                        </div>
                    </div>
                    <div class="form__group form__group_6">
                        <label for="adresse" class="form__label form__label_6">Adresse</label>
                        <input type="text" id="adresse" autocomplete="nope" class="form__input form__input_6">
                        <p class="form__msg"> *invalid password must be between (8-10)</p>
                    </div>
                </div>
            </form>
        </section>
        <div class="summary">
            <div class="summary__title--wrapper">
                <h4 class="summary__title">Summary</h4>
            </div>

            <div class="summary__block-wrapper">
                <div class="summary__block">

                    <h4 class="summary__subtotal">Subtotal:</h4>

                    <p class="summary__subtotal_value-decorated"><span class="summary__subtotal">4000</span>$</p>
                </div>
                <div class="summary__block">
                    <div class="summary__block_shipping">
                        <h4 class="summary__shipping">Shipping cost:</h4>
                        <p class="shipping__date-decorated ">Estimated delivery on <span class="shipping__date">20/12/2025</span></p>
                    </div>
                    <p class="summary__shippingCost-decorated"><span class="summary__shippingCost">100</span>$</p>
                </div>
                <div class="summary__block summary__block--form">
                    <div class="form__group-coupon form__group form__group_7 ">
                        <label for="coupon" class="form__label form__label_7 form__label-coupon">coupon code</label>
                        <p class="form__msg"> *invalid password must be between (8-10)</p>
                        <input type="text" id="coupon" autocomplete="off" class="form__input form__input_7 form__input-coupon">
                    </div>

                    <h5 class="coupon__btn ">Apply</h5>
                </div>
            </div>

            <div class="summary__footer">
                <p class="summary__total--title">Total</p>
                <p class="summary__total--decorated"><span class="summary__total">20000</span>$</p>
            </div>
        </div>
    </main>

    <script src="<?= JSROOT ?>/navbarSecondary.js"></script>
    <script src="<?= JSROOT ?>/cart.js"></script>
    <script src="<?= JSROOT ?>/form__input.js"></script>

</body>


</html>