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
    <link rel="stylesheet" href="<?= CSSROOT ?>/admin_css/orders.css">
</head>

<body>
    <?php
    include_once  APPROOT . "/app/components/admin/header.php";
    ?>
    <img src="<?= ASTROOT ?>/imgs/dash_bg.svg" class="content__bg">
    <section class="content--wrapper">
        <div class="content__title--wrapper">
            <h3 class="content__title">Products table</h3>
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
    <script src='<?= JSROOT ?>/admin_js/navbar.js'></script>
    <script src='<?= JSROOT ?>/admin_js/orders.js'></script>
</body>

</html>