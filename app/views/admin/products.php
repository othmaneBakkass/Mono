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
    <link rel="stylesheet" href="<?= CSSROOT ?>/admin_css/header.css">
    <link rel="stylesheet" href="<?= CSSROOT ?>/admin_css/navbar.css">
    <link rel="stylesheet" href="<?= CSSROOT ?>/admin_css/products.css">
</head>

<body>
    <?php
    include_once  APPROOT . "/app/components/admin/header.php";
    ?>
    <main>
        <img src="<?= ASTROOT ?>/imgs/dash_bg.svg" class="content__bg">
        <section class="content--wrapper">
            <div class="content__title--wrapper">
                <h3 class="content__title">Products table</h3>
                <p class="addBtn btn"><span class="material-icons-outlined addBtnIcon">add</span>add product</p>
            </div>

            <div class="crud__table--wrapper">
                <table class="table table-crud">
                    <thead class="thead">
                        <tr class="table__head">
                            <td class="table__head_col table__head_col-first">product ID</td>
                            <td class="table__head_col">image</td>
                            <td class="table__head_col">product name</td>
                            <td class="table__head_col">price</td>
                            <td class="table__head_col">collection</td>
                            <td class="table__head_col">quantity</td>
                            <td class="table__head_col">actions</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="table__row">
                            <td class="table__row_col table__row_col-first">
                                <p class="table__col_value">1</p>
                            </td>
                            <td class="table__row_col">
                                <img class="table__img" src="<?= ASTROOT ?>/imgs-products/prd__01_1.jpg">
                            </td>
                            <td class="table__row_col ">
                                <p class="table__col_value">blue hoodie lonney toons</p>
                            </td>
                            <td class="table__row_col ">
                                <p class="table__col_value price__value-decorated"><span class="price__value">10000</span>$</p>
                            </td>
                            <td class="table__row_col ">
                                <p class="table__col_value">equilibrium</p>
                            </td>
                            <td class="table__row_col ">
                                <p class="table__col_value">150</p>
                            </td>
                            <td class="table__row_col ">
                                <div class="table__row_col-actions">
                                    <div data-id="1" class="btn-delete--wrapper btn--wrapper">
                                        <span class="material-icons-outlined btn-icon btn-icon-delete">delete</span>
                                        <p class="table__col_value btn-delete">Delete</p>
                                    </div>
                                    <div data-id="1" class="btn-update--wrapper btn--wrapper">
                                        <span class="material-icons-outlined btn-icon btn-icon-update">edit</span>
                                        <p class="table__col_value btn-update">Update</p>

                                    </div>
                                    <div data-id="1" class="btn-view--wrapper btn--wrapper">
                                        <p class="table__col_value btn-view">view</p>
                                        <span class="material-icons-outlined btn-icon btn-icon-view">navigate_next</span>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="table__row">
                            <td class="table__row_col table__row_col-first">
                                <p class="table__col_value">1</p>
                            </td>
                            <td class="table__row_col">
                                <img class="table__img" src="<?= ASTROOT ?>/imgs-products/prd__01_1.jpg">
                            </td>
                            <td class="table__row_col ">
                                <p class="table__col_value">blue hoodie lonney toons</p>
                            </td>
                            <td class="table__row_col ">
                                <p class="table__col_value price__value-decorated"><span class="price__value">10000</span>$</p>
                            </td>
                            <td class="table__row_col ">
                                <p class="table__col_value">equilibrium</p>
                            </td>
                            <td class="table__row_col ">
                                <p class="table__col_value">150</p>
                            </td>
                            <td class="table__row_col ">
                                <div class="table__row_col-actions">
                                    <div data-id="1" class="btn-delete--wrapper btn--wrapper">
                                        <span class="material-icons-outlined btn-icon btn-icon-delete">delete</span>
                                        <p class="table__col_value btn-delete">Delete</p>
                                    </div>
                                    <div data-id="1" class="btn-update--wrapper btn--wrapper">
                                        <span class="material-icons-outlined btn-icon btn-icon-update">edit</span>
                                        <p class="table__col_value btn-update">Update</p>

                                    </div>
                                    <div data-id="1" class="btn-view--wrapper btn--wrapper">
                                        <p class="table__col_value btn-view">view</p>
                                        <span class="material-icons-outlined btn-icon btn-icon-view">navigate_next</span>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="table__row">
                            <td class="table__row_col table__row_col-first">
                                <p class="table__col_value">1</p>
                            </td>
                            <td class="table__row_col">
                                <img class="table__img" src="<?= ASTROOT ?>/imgs-products/prd__01_1.jpg">
                            </td>
                            <td class="table__row_col ">
                                <p class="table__col_value">blue hoodie lonney toons</p>
                            </td>
                            <td class="table__row_col ">
                                <p class="table__col_value price__value-decorated"><span class="price__value">10000</span>$</p>
                            </td>
                            <td class="table__row_col ">
                                <p class="table__col_value">equilibrium</p>
                            </td>
                            <td class="table__row_col ">
                                <p class="table__col_value">150</p>
                            </td>
                            <td class="table__row_col ">
                                <div class="table__row_col-actions">
                                    <div data-id="1" class="btn-delete--wrapper btn--wrapper">
                                        <span class="material-icons-outlined btn-icon btn-icon-delete">delete</span>
                                        <p class="table__col_value btn-delete">Delete</p>
                                    </div>
                                    <div data-id="1" class="btn-update--wrapper btn--wrapper">
                                        <span class="material-icons-outlined btn-icon btn-icon-update">edit</span>
                                        <p class="table__col_value btn-update">Update</p>

                                    </div>
                                    <div data-id="1" class="btn-view--wrapper btn--wrapper">
                                        <p class="table__col_value btn-view">view</p>
                                        <span class="material-icons-outlined btn-icon btn-icon-view">navigate_next</span>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="table__row">
                            <td class="table__row_col table__row_col-first">
                                <p class="table__col_value">1</p>
                            </td>
                            <td class="table__row_col">
                                <img class="table__img" src="<?= ASTROOT ?>/imgs-products/prd__01_1.jpg">
                            </td>
                            <td class="table__row_col ">
                                <p class="table__col_value">blue hoodie lonney toons</p>
                            </td>
                            <td class="table__row_col ">
                                <p class="table__col_value price__value-decorated"><span class="price__value">10000</span>$</p>
                            </td>
                            <td class="table__row_col ">
                                <p class="table__col_value">equilibrium</p>
                            </td>
                            <td class="table__row_col ">
                                <p class="table__col_value">150</p>
                            </td>
                            <td class="table__row_col ">
                                <div class="table__row_col-actions">
                                    <div data-id="1" class="btn-delete--wrapper btn--wrapper">
                                        <span class="material-icons-outlined btn-icon btn-icon-delete">delete</span>
                                        <p class="table__col_value btn-delete">Delete</p>
                                    </div>
                                    <div data-id="1" class="btn-update--wrapper btn--wrapper">
                                        <span class="material-icons-outlined btn-icon btn-icon-update">edit</span>
                                        <p class="table__col_value btn-update">Update</p>

                                    </div>
                                    <div data-id="1" class="btn-view--wrapper btn--wrapper">
                                        <p class="table__col_value btn-view">view</p>
                                        <span class="material-icons-outlined btn-icon btn-icon-view">navigate_next</span>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="table__row">
                            <td class="table__row_col table__row_col-first">
                                <p class="table__col_value">1</p>
                            </td>
                            <td class="table__row_col">
                                <img class="table__img" src="<?= ASTROOT ?>/imgs-products/prd__01_1.jpg">
                            </td>
                            <td class="table__row_col ">
                                <p class="table__col_value">blue hoodie lonney toons</p>
                            </td>
                            <td class="table__row_col ">
                                <p class="table__col_value price__value-decorated"><span class="price__value">10000</span>$</p>
                            </td>
                            <td class="table__row_col ">
                                <p class="table__col_value">equilibrium</p>
                            </td>
                            <td class="table__row_col ">
                                <p class="table__col_value">150</p>
                            </td>
                            <td class="table__row_col ">
                                <div class="table__row_col-actions">
                                    <div data-id="1" class="btn-delete--wrapper btn--wrapper">
                                        <span class="material-icons-outlined btn-icon btn-icon-delete">delete</span>
                                        <p class="table__col_value btn-delete">Delete</p>
                                    </div>
                                    <div data-id="1" class="btn-update--wrapper btn--wrapper">
                                        <span class="material-icons-outlined btn-icon btn-icon-update">edit</span>
                                        <p class="table__col_value btn-update">Update</p>

                                    </div>
                                    <div data-id="1" class="btn-view--wrapper btn--wrapper">
                                        <p class="table__col_value btn-view">view</p>
                                        <span class="material-icons-outlined btn-icon btn-icon-view">navigate_next</span>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
        <?php
        include_once  APPROOT . "/app/components/admin/navbar.php";
        ?>
        <section class="sideForm--wrapper">
            <div class="sideForm">
                <form class="sideForm__content" enctype="multipart/form-data">
                    <div class="sideForm__header">
                        <h3 class="sideForm__title">View Panel</h3>
                        <div class="closeBtn--wrapper">
                            <span class="material-icons-outlined btn-icon btn-icon-close">close</span>
                        </div>
                    </div>
                    <div class="form__grid">
                        <div class="form__group_fileUpload">
                            <div class="uploadBtn">
                                <img class="form__img" src="<?= ASTROOT ?>/imgs-products/prd__01_1.jpg" alt="" srcset="">
                                <label for="upload" class="form__label_fileUpload"><span class="material-icons-sharp btn-icon-label">photo</span></label>
                                <input type="file" id="upload" autocomplete="off" class="form__fileUpload form__viewMode">
                            </div>
                            <div class="uploadBtn">
                                <img class="form__img" src="<?= ASTROOT ?>/imgs-products/prd__01_1.jpg" alt="" srcset="">
                                <label for="upload" class="form__label_fileUpload"><span class="material-icons-sharp btn-icon-label">photo</span></label>
                                <input type="file" id="upload" autocomplete="off" class="form__fileUpload form__viewMode">
                            </div>
                            <div class="uploadBtn">
                                <img class="form__img" src="<?= ASTROOT ?>/imgs-products/prd__01_1.jpg" alt="" srcset="">
                                <label for="upload" class="form__label_fileUpload"><span class="material-icons-sharp btn-icon-label">photo</span></label>
                                <input type="file" id="upload" autocomplete="off" class="form__fileUpload form__viewMode">
                            </div>
                            <div class="uploadBtn">
                                <img class="form__img" src="<?= ASTROOT ?>/imgs-products/prd__01_1.jpg" alt="" srcset="">
                                <label for="upload" class="form__label_fileUpload"><span class="material-icons-sharp btn-icon-label">photo</span></label>
                                <input type="file" id="upload" autocomplete="off" class="form__fileUpload form__viewMode">
                            </div>
                            <p class="form__msg form__msg_upload"> *invalid password must be between (8-10)</p>
                        </div>
                        <div class="form__block">
                            <div class="form__group form__group_1">
                                <label for="productId" class="form__label form__label_1">product ID</label>
                                <input type="text" id="productId" autocomplete="off" class="form__input form__input_1 form__viewMode">
                                <p class="form__msg"> *invalid password must be between (8-10)</p>
                            </div>
                            <div class="form__group form__group_2">
                                <label for="name" class="form__label form__label_2">name</label>
                                <input type="text" id="name" autocomplete="off" class="form__input form__input_2 form__viewMode">
                                <p class="form__msg"> *invalid password must be between (8-10)</p>
                            </div>
                        </div>
                        <div class="form__block">
                            <div class="form__group form__group_3">
                                <label for="price" class="form__label form__label_3">price</label>
                                <input type="text" id="price" autocomplete="off" class="form__input form__input_3 form__viewMode">
                                <p class="form__msg"> *invalid password must be between (8-10)</p>
                            </div>
                            <div class="form__group_dropdown">
                                <label for="discount" class="form__label_dropDown form__label_dropdownDiscount">discount amount</label>
                                <input readonly type="text" id="discount" autocomplete="off" class="form__input form__input_dropDown form__input_dropDownDiscount">
                                <p class="form__msg"> *invalid password must be between (8-10)</p>
                                <span class="material-icons-outlined dropdown__icon dropdown__icon_discount">arrow_drop_down</span>
                                <div class="form__dropdown_options--wrapper form__dropdown_optionsDiscount--wrapper">
                                    <div class="dropdown_option dropdown__option--first">
                                        <label for="none" class="dropdown__option_label">none</label>
                                        <input name="dropdownOptionDiscount" type="radio" id="none" value="none" class="dropdown__option_value dropdown__option_valueDiscount">
                                    </div>
                                    <div class="dropdown_option">
                                        <label for="20Percent" class="dropdown__option_label">20%</label>
                                        <input name="dropdownOptionDiscount" type="radio" id="20Percent" value="20%" class="dropdown__option_value dropdown__option_valueDiscount">
                                    </div>
                                    <div class="dropdown_option dropdown_option--last">
                                        <label for="100" class="dropdown__option_label">100$</label>
                                        <input name="dropdownOptionDiscount" type="radio" id="100" value="100$" class="dropdown__option_value dropdown__option_valueDiscount">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form__block">
                            <div class="form__group_dropdown">
                                <label for="category" class="form__label_dropDown form__label_dropdownCategory">category</label>
                                <input readonly type="text" id="category" autocomplete="off" class="form__input form__input_dropDown form__input_dropDownCategory">
                                <p class="form__msg"> *invalid password must be between (8-10)</p>
                                <span class="material-icons-outlined dropdown__icon dropdown__icon_category">arrow_drop_down</span>
                                <div class="form__dropdown_options--wrapper form__dropdown_optionsCategory--wrapper">
                                    <div class="dropdown_option dropdown__option--first">
                                        <label for="topwear" class="dropdown__option_label">topwear</label>
                                        <input name="dropdownOptionCategory" type="radio" id="topwear" value="topwear" class="dropdown__option_value dropdown__option_valueCategory">
                                    </div>
                                    <div class="dropdown_option">
                                        <label for="bottomwear" class="dropdown__option_label">bottomwear</label>
                                        <input name="dropdownOptionCategory" type="radio" id="bottomwear" value="bottomwear" class="dropdown__option_value dropdown__option_valueCategory">
                                    </div>
                                    <div class="dropdown_option dropdown_option--last">
                                        <label for="shoes" class="dropdown__option_label">shoes</label>
                                        <input name="dropdownOptionCategory" type="radio" id="shoes" value="shoes" class="dropdown__option_value dropdown__option_valueCategory">
                                    </div>
                                </div>
                            </div>
                            <div class="form__group_dropdown">
                                <label for="collection" class="form__label_dropDown form__label_dropdownCollections">collection</label>
                                <input readonly type="text" id="collection" autocomplete="off" class="form__input form__input_dropDown form__input_dropDownCollections">
                                <p class="form__msg"> *invalid password must be between (8-10)</p>
                                <span class="material-icons-outlined dropdown__icon dropdown__icon_collections">arrow_drop_down</span>
                                <div class="form__dropdown_options--wrapper form__dropdown_optionsCollections--wrapper">
                                    <div class="dropdown_option dropdown__option--first">
                                        <label for="equilibrium" class="dropdown__option_label">equilibrium</label>
                                        <input name="dropdownOptionCollections" type="radio" id="equilibrium" value="equilibrium" class="dropdown__option_value dropdown__option_valueCollections">
                                    </div>
                                    <div class="dropdown_option">
                                        <label for="fate" class="dropdown__option_label">fate</label>
                                        <input name="dropdownOptionCollections" type="radio" id="fate" value="fate" class="dropdown__option_value dropdown__option_valueCollections">
                                    </div>
                                    <div class="dropdown_option dropdown_option--last">
                                        <label for="nightOwls" class="dropdown__option_label">night owls</label>
                                        <input name="dropdownOptionCollections" type="radio" id="nightOwls" value="night owls" class="dropdown__option_value dropdown__option_valueCollections">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form__block">
                            <div class="form__group_dropdown">
                                <label for="type" class="form__label_dropDown form__label_dropdownClothes">type of clothes</label>
                                <input readonly type="text" id="type" autocomplete="off" class="form__input form__input_dropDown form__input_dropDownClothes ">
                                <p class="form__msg"> *invalid password must be between (8-10)</p>
                                <span class="material-icons-outlined dropdown__icon dropdown__icon_clothes">arrow_drop_down</span>
                                <div class="form__dropdown_options--wrapper form__dropdown_optionsClothes--wrapper">
                                    <div class="dropdown_option dropdown__option--first">
                                        <label for="chinos" class="dropdown__option_label">chinos</label>
                                        <input name="dropdownOptionClothes" type="radio" id="chinos" value="chinos" class="dropdown__option_value dropdown__option_valueClothes">
                                    </div>
                                    <div class="dropdown_option">
                                        <label for="jeans" class="dropdown__option_label">jeans</label>
                                        <input name="dropdownOptionClothes" type="radio" id="jeans" value="jeans" class="dropdown__option_value dropdown__option_valueClothes">
                                    </div>
                                    <div class="dropdown_option">
                                        <label for="cargoPants" class="dropdown__option_label">cargo pants</label>
                                        <input name="dropdownOptionClothes" type="radio" id="cargoPants" value="cargo pants" class="dropdown__option_value dropdown__option_valueClothes">
                                    </div>
                                    <div class="dropdown_option">
                                        <label for="shorts" class="dropdown__option_label">shorts</label>
                                        <input name="dropdownOptionClothes" type="radio" id="shorts" value="shorts" class="dropdown__option_value dropdown__option_valueClothes">
                                    </div>
                                    <div class="dropdown_option">
                                        <label for="t-shirts" class="dropdown__option_label">t-shirts</label>
                                        <input name="dropdownOptionClothes" type="radio" id="t-shirts" value="t-shirts" class="dropdown__option_value dropdown__option_valueClothes">
                                    </div>
                                    <div class="dropdown_option">
                                        <label for="sweatshirts" class="dropdown__option_label">sweatshirts</label>
                                        <input name="dropdownOptionClothes" type="radio" id="sweatshirts" value="sweatshirts" class="dropdown__option_value dropdown__option_valueClothes">
                                    </div>
                                    <div class="dropdown_option">
                                        <label for="hoodies" class="dropdown__option_label">hoodies</label>
                                        <input name="dropdownOptionClothes" type="radio" id="hoodies" value="hoodies" class="dropdown__option_value dropdown__option_valueClothes">
                                    </div>
                                    <div class="dropdown_option">
                                        <label for="jackets" class="dropdown__option_label">jackets</label>
                                        <input name="dropdownOptionClothes" type="radio" id="jackets" value="jackets" class="dropdown__option_value dropdown__option_valueClothes">
                                    </div>
                                    <div class="dropdown_option">
                                        <label for="flannel" class="dropdown__option_label">flannel</label>
                                        <input name="dropdownOptionClothes" type="radio" id="flannel" value="flannel" class="dropdown__option_value dropdown__option_valueClothes">
                                    </div>
                                    <div class="dropdown_option">
                                        <label for="overcoats" class="dropdown__option_label">overcoats</label>
                                        <input name="dropdownOptionClothes" type="radio" id="overcoats" value="overcoats" class="dropdown__option_value dropdown__option_valueClothes">
                                    </div>
                                    <div class="dropdown_option">
                                        <label for="suits" class="dropdown__option_label">suits</label>
                                        <input name="dropdownOptionClothes" type="radio" id="suits" value="suits" class="dropdown__option_value dropdown__option_valueClothes">
                                    </div>
                                    <div class="dropdown_option">
                                        <label for="sneakers" class="dropdown__option_label">sneakers</label>
                                        <input name="dropdownOptionClothes" type="radio" id="sneakers" value="sneakers" class="dropdown__option_value dropdown__option_valueClothes">
                                    </div>
                                    <div class="dropdown_option dropdown__option--last">
                                        <label for="boots" class="dropdown__option_label">boots</label>
                                        <input name="dropdownOptionClothes" type="radio" id="boots" value="boots" class="dropdown__option_value dropdown__option_valueClothes ">
                                    </div>
                                </div>
                            </div>
                            <div class="form__group form__group_4">
                                <label for="quantity" class="form__label form__label_4">quantity total</label>
                                <input type="text" id="quantity" autocomplete="off" class="form__input form__input_4 form__viewMode">
                                <p class="form__msg"> *invalid password must be between (8-10)</p>
                            </div>
                        </div>
                        <div class="form__block">
                            <div class="form__group form__group_5">
                                <label for="sm" class="form__label form__label_5">number of product in size sm:</label>
                                <input type="text" id="sm" autocomplete="off" class="form__input form__input_5 form__viewMode">
                                <p class="form__msg"> *invalid password must be between (8-10)</p>
                            </div>
                            <div class="form__group form__group_6">
                                <label for="m" class="form__label form__label_6">number of product in size m:</label>
                                <input type="text" id="m" autocomplete="off" class="form__input form__input_6 form__viewMode">
                                <p class="form__msg"> *invalid password must be between (8-10)</p>
                            </div>
                        </div>
                        <div class="form__block">
                            <div class="form__group form__group_7">
                                <label for="l" class="form__label form__label_7">number of product in size l:</label>
                                <input type="text" id="l" autocomplete="off" class="form__input form__input_7 form__viewMode">
                                <p class="form__msg"> *invalid password must be between (8-10)</p>
                            </div>
                            <div class="form__group form__group_8">
                                <label for="xl" class="form__label form__label_8">number of product in size xl:</label>
                                <input type="text" id="xl" autocomplete="off" class="form__input form__input_8 form__viewMode">
                                <p class="form__msg"> *invalid password must be between (8-10)</p>
                            </div>
                        </div>
                        <div class="form__block">
                            <div class="form__group form__group_9 form__group_textarea">
                                <label for="description" class="form__label_textarea form__label_9">description:</label>
                                <textarea id="description" autocomplete="off" class="form__input_textarea form__input_9 form__viewMode"></textarea>
                                <p class="form__msg"> *invalid password must be between (8-10)</p>
                            </div>
                        </div>
                        <div class="form__block uploadImgs--wrapper">
                            <label for="uploadImg" class="uploadImg__label"><span class="material-icons-outlined uploadImg__icon">cloud_upload</span>upload 4 images</label>
                            <input type="file" name="uploadImg" id="uploadImg">
                        </div>
                    </div>
                    <p class="sideForm__confirmBtn btn">Confirm</p>
                </form>
            </div>
        </section>
    </main>

    <script src='<?= JSROOT ?>/admin_js/navbar.js'></script>
    <script src='<?= JSROOT ?>/admin_js/products.js'></script>

</body>

</html>