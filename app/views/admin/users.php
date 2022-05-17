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
    <link rel="stylesheet" href="<?= CSSROOT ?>/admin_css/users.css">
</head>

<body>
    <?php
    include_once  APPROOT . "/app/components/admin/header.php";
    ?>
    <main>
        <img src="<?= ASTROOT ?>/imgs/dash_bg.svg" class="content__bg">
        <section class="content--wrapper">
            <h3 class="content__title">Users table</h3>
            <div class="crud__table--wrapper">
                <table class="table table-crud">
                    <thead class="thead">
                        <tr class="table__head">
                            <td class="table__head_col table__head_col-first">user ID</td>
                            <td class="table__head_col">image</td>
                            <td class="table__head_col">email</td>
                            <td class="table__head_col">password</td>
                            <td class="table__head_col">role</td>
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
                                <p class="table__col_value">johnDoe@gmail.com</p>
                            </td>
                            <td class="table__row_col ">
                                <p class="table__col_value">21436587</p>
                            </td>
                            <td class="table__row_col ">
                                <p class="table__col_value">admin</p>
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
                                <p class="table__col_value">johnDoe@gmail.com</p>
                            </td>
                            <td class="table__row_col ">
                                <p class="table__col_value">21436587</p>
                            </td>
                            <td class="table__row_col ">
                                <p class="table__col_value">admin</p>
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
                                <p class="table__col_value">johnDoe@gmail.com</p>
                            </td>
                            <td class="table__row_col ">
                                <p class="table__col_value">21436587</p>
                            </td>
                            <td class="table__row_col ">
                                <p class="table__col_value">admin</p>
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
                                <p class="table__col_value">johnDoe@gmail.com</p>
                            </td>
                            <td class="table__row_col ">
                                <p class="table__col_value">21436587</p>
                            </td>
                            <td class="table__row_col ">
                                <p class="table__col_value">admin</p>
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
                                <p class="table__col_value">johnDoe@gmail.com</p>
                            </td>
                            <td class="table__row_col ">
                                <p class="table__col_value">21436587</p>
                            </td>
                            <td class="table__row_col ">
                                <p class="table__col_value">admin</p>
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
                <div class="sideForm__content">
                    <div class="sideForm__header">
                        <h3 class="sideForm__title">View Panel</h3>
                        <div class="closeBtn--wrapper">
                            <span class="material-icons-outlined btn-icon btn-icon-close">close</span>
                        </div>
                    </div>
                    <div class="form__grid">
                        <div class="form__group_fileUpload">
                            <img class="form__img" src="<?= ASTROOT ?>/imgs-products/prd__01_1.jpg" alt="" srcset="">
                            <div class="file__upload_btn">
                                <label for="upload" class="form__label_fileUpload"><span class="material-icons-sharp btn-icon-label">photo</span>Change Image</label>
                                <input type="file" id="upload" autocomplete="off" class="form__fileUpload form__viewMode">
                                <p class="form__msg form__msg_upload"> *invalid password must be between (8-10)</p>
                            </div>
                        </div>
                        <div class="form__block">
                            <div class="form__group form__group_1">
                                <label for="userID" class="form__label form__label_1">user ID</label>
                                <input type="text" id="userID" autocomplete="off" class="form__input form__input_1 form__viewMode">
                                <p class="form__msg"> *invalid password must be between (8-10)</p>
                            </div>
                            <div class="form__group form__group_2">
                                <label for="userName" class="form__label form__label_2">username</label>
                                <input type="text" id="userName" autocomplete="off" class="form__input form__input_2 form__viewMode">
                                <p class="form__msg"> *invalid password must be between (8-10)</p>
                            </div>
                        </div>
                        <div class="form__block">
                            <div class="form__group form__group_3">
                                <label for="firstName" class="form__label form__label_3">first name</label>
                                <input type="text" id="firstName" autocomplete="off" class="form__input form__input_3 form__viewMode">
                                <p class="form__msg"> *invalid password must be between (8-10)</p>
                            </div>
                            <div class="form__group form__group_4">
                                <label for="lastName" class="form__label form__label_4">last name</label>
                                <input type="text" id="lastName" autocomplete="off" class="form__input form__input_4 form__viewMode">
                                <p class="form__msg"> *invalid password must be between (8-10)</p>
                            </div>
                        </div>
                        <div class="form__block">
                            <div class="form__group form__group_5">
                                <label for="email" class="form__label form__label_5">email</label>
                                <input type="email" id="email" autocomplete="off" class="form__input form__input_5 form__viewMode">
                                <p class="form__msg"> *invalid password must be between (8-10)</p>
                            </div>
                            <div class="form__group form__group_6">
                                <label for="lastName" class="form__label form__label_6">password</label>
                                <input type="text" id="lastName" autocomplete="off" class="form__input form__input_6 form__viewMode">
                                <p class="form__msg"> *invalid password must be between (8-10)</p>
                            </div>
                        </div>
                        <div class="form__block">
                            <div class="form__group form__group_7">
                                <label for="role" class="form__label form__label_7">role</label>
                                <input type="text" id="role" autocomplete="off" class="form__input form__input_7 form__viewMode">
                                <p class="form__msg"> *invalid password must be between (8-10)</p>
                            </div>
                        </div>
                    </div>
                    <p class="sideForm__confirmBtn btn">Confirm</p>
                </div>
            </div>
        </section>
    </main>

    <script src='<?= JSROOT ?>/admin_js/navbar.js'></script>
    <script src='<?= JSROOT ?>/admin_js/users.js'></script>

</body>

</html>