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
    <link rel="stylesheet" href="<?= CSSROOT ?>/admin_css/main.css">
    <link rel="stylesheet" href="<?= CSSROOT ?>/admin_css/header.css">
    <link rel="stylesheet" href="<?= CSSROOT ?>/admin_css/navbar.css">



</head>

<body>
    <?php
    include_once  APPROOT . "/app/components/admin/header.php";
    ?>
    <main class="content">
        <img src="<?= ASTROOT ?>/imgs/dash_bg.svg" class="content__bg">
        <section class="content__leftSection">
            <div class="table__group table__group-msgs">
                <h3 class="table__title">New messages</h3>
                <div class="table--wrapper">
                    <table class="table table-msgs">
                        <thead class="thead">
                            <tr class="table__head">
                                <td class="table__head_col table__head_col-first">email</td>
                                <td class="table__head_col">action</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="table__row">
                                <td class="table__row_col table__row_col-first">
                                    <p class="table__col_value">johnDoe@gmail.com</p>
                                </td>
                                <td class="table__row_col">
                                    <p class="table__col_value btn-view">view<span class="material-icons-sharp arrowBtn__icon">navigate_next</span></p>
                                </td>
                            </tr>
                            <tr class="table__row">
                                <td class="table__row_col table__row_col-first">
                                    <p class="table__col_value">johnDoe@gmail.com</p>
                                </td>
                                <td class="table__row_col">
                                    <p data-msg-id="1" class="table__col_value btn-view">view<span class="material-icons-sharp arrowBtn__icon">navigate_next</span></p>
                                </td>
                            </tr>
                            <tr class="table__row">
                                <td class="table__row_col table__row_col-first">
                                    <p class="table__col_value">johnDoe@gmail.com</p>
                                </td>
                                <td class="table__row_col">
                                    <p class="table__col_value btn-view">view<span class="material-icons-sharp arrowBtn__icon">navigate_next</span></p>
                                </td>
                            </tr>
                            <tr class="table__row">
                                <td class="table__row_col table__row_col-first">
                                    <p class="table__col_value">johnDoe@gmail.com</p>
                                </td>
                                <td class="table__row_col">
                                    <p class="table__col_value btn-view">view<span class="material-icons-sharp arrowBtn__icon">navigate_next</span></p>
                                </td>
                            </tr>
                            <tr class="table__row">
                                <td class="table__row_col table__row_col-first">
                                    <p class="table__col_value">johnDoe@gmail.com</p>
                                </td>
                                <td class="table__row_col">
                                    <p class="table__col_value btn-view">view<span class="material-icons-sharp arrowBtn__icon">navigate_next</span></p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <a class="arrowBtn">See All Products<span class="material-icons-sharp arrowBtn__icon">navigate_next</span></a>
            </div>
            <div class="table__group table__group-orders">
                <h3 class="table__title">New orders</h3>
                <div class="table--wrapper">
                    <table class="table table-msgs">
                        <thead class="thead">
                            <tr class="table__head">
                                <td class="table__head_col table__head_col-first">name</td>
                                <td class="table__head_col">order date</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="table__row">
                                <td class="table__row_col table__row_col-first">
                                    <div class="table__imgGroup--wrapper">
                                        <div class="table__img--wrapper">
                                            <img class="table__img" src="<?= ASTROOT ?>/imgs-products/prd__01_1.jpg" alt="product img">
                                        </div>
                                        <p class="table__img_label table__col_value">Relaxed Fit Hoodie - looney tunes edition</p>
                                    </div>
                                </td>
                                <td class="table__row_col">
                                    <p class="table__col_value">2022-12-10</p>
                                </td>
                            </tr>
                            <tr class="table__row">
                                <td class="table__row_col table__row_col-first">
                                    <div class="table__imgGroup--wrapper">
                                        <div class="table__img--wrapper">
                                            <img class="table__img" src="<?= ASTROOT ?>/imgs-products/prd__01_1.jpg" alt="product img">
                                        </div>
                                        <p class="table__img_label table__col_value">Relaxed Fit Hoodie - looney tunes edition</p>
                                    </div>
                                </td>
                                <td class="table__row_col">
                                    <p class="table__col_value">2022-12-10</p>
                                </td>
                            </tr>
                            <tr class="table__row">
                                <td class="table__row_col table__row_col-first">
                                    <div class="table__imgGroup--wrapper">
                                        <div class="table__img--wrapper">
                                            <img class="table__img" src="<?= ASTROOT ?>/imgs-products/prd__01_1.jpg" alt="product img">
                                        </div>
                                        <p class="table__img_label table__col_value">Relaxed Fit Hoodie - looney tunes edition</p>
                                    </div>
                                </td>
                                <td class="table__row_col">
                                    <p class="table__col_value">2022-12-10</p>
                                </td>
                            </tr>
                            <tr class="table__row">
                                <td class="table__row_col table__row_col-first">
                                    <div class="table__imgGroup--wrapper">
                                        <div class="table__img--wrapper">
                                            <img class="table__img" src="<?= ASTROOT ?>/imgs-products/prd__01_1.jpg" alt="product img">
                                        </div>
                                        <p class="table__img_label table__col_value">Relaxed Fit Hoodie - looney tunes edition</p>
                                    </div>
                                </td>
                                <td class="table__row_col">
                                    <p class="table__col_value">2022-12-10</p>
                                </td>
                            </tr>
                            <tr class="table__row">
                                <td class="table__row_col table__row_col-first">
                                    <div class="table__imgGroup--wrapper">
                                        <div class="table__img--wrapper">
                                            <img class="table__img" src="<?= ASTROOT ?>/imgs-products/prd__01_1.jpg" alt="product img">
                                        </div>
                                        <p class="table__img_label table__col_value">Relaxed Fit Hoodie - looney tunes edition</p>
                                    </div>
                                </td>
                                <td class="table__row_col">
                                    <p class="table__col_value">2022-12-10</p>
                                </td>
                            </tr>
                            <tr class="table__row">
                                <td class="table__row_col table__row_col-first">
                                    <div class="table__imgGroup--wrapper">
                                        <div class="table__img--wrapper">
                                            <img class="table__img" src="<?= ASTROOT ?>/imgs-products/prd__01_1.jpg" alt="product img">
                                        </div>
                                        <p class="table__img_label table__col_value">Relaxed Fit Hoodie - looney tunes edition</p>
                                    </div>
                                </td>
                                <td class="table__row_col">
                                    <p class="table__col_value">2022-12-10</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <a class="arrowBtn">See All Orders<span class="material-icons-sharp arrowBtn__icon">navigate_next</span></a>
            </div>
        </section>
        <section class="content__rightSection">
            <div class="table__group">
                <h3 class="table__title">best sellers</h3>
                <div class="table--wrapper">
                    <table class="table table-msgs">
                        <thead class="thead">
                            <tr class="table__head">
                                <td class="table__head_col table__head_col-first">name</td>
                                <td class="table__head_col">number of sales</td>
                                <td class="table__head_col">total profit</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="table__row">
                                <td class="table__row_col table__row_col-first">
                                    <div class="table__imgGroup--wrapper">
                                        <div class="table__img--wrapper">
                                            <img class="table__img" src="<?= ASTROOT ?>/imgs-products/prd__01_1.jpg" alt="product img">
                                        </div>
                                        <p class="table__img_label table__col_value">Relaxed Fit Hoodie - looney tunes edition</p>
                                    </div>
                                </td>
                                <td class="table__row_col">
                                    <p class="table__col_value">100</p>
                                </td>
                                <td class="table__row_col">
                                    <p class="table__col_value">10000</p>
                                </td>
                            </tr>
                            <tr class="table__row">
                                <td class="table__row_col table__row_col-first">
                                    <div class="table__imgGroup--wrapper">
                                        <div class="table__img--wrapper">
                                            <img class="table__img" src="<?= ASTROOT ?>/imgs-products/prd__01_1.jpg" alt="product img">
                                        </div>
                                        <p class="table__img_label table__col_value">Relaxed Fit Hoodie - looney tunes edition</p>
                                    </div>
                                </td>
                                <td class="table__row_col">
                                    <p class="table__col_value">100</p>
                                </td>
                                <td class="table__row_col">
                                    <p class="table__col_value">10000</p>
                                </td>
                            </tr>
                            <tr class="table__row">
                                <td class="table__row_col table__row_col-first">
                                    <div class="table__imgGroup--wrapper">
                                        <div class="table__img--wrapper">
                                            <img class="table__img" src="<?= ASTROOT ?>/imgs-products/prd__01_1.jpg" alt="product img">
                                        </div>
                                        <p class="table__img_label table__col_value">Relaxed Fit Hoodie - looney tunes edition</p>
                                    </div>
                                </td>
                                <td class="table__row_col">
                                    <p class="table__col_value">100</p>
                                </td>
                                <td class="table__row_col">
                                    <p class="table__col_value">10000</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <a class="arrowBtn">See All products<span class="material-icons-sharp arrowBtn__icon">navigate_next</span></a>
            </div>
            <div class="widget--wrapper">
                <div class="widget">
                    <h5 class="widget__title">Profit<br>Today</h5>
                    <p class="widget__profit_value profit_value-today">10000</p>
                    <img src="<?= ASTROOT ?>/icons/widget__icon_profit.svg" alt="money tag" class="widget__icon">
                </div>
                <div class="widget">
                    <h5 class="widget__title">Profit<br>This Month</h5>
                    <p class="widget__profit_value profit_value-today">100000</p>
                    <img src="<?= ASTROOT ?>/icons/widget__icon_profit.svg" alt="money tag" class="widget__icon">
                </div>
                <div class="widget">
                    <h5 class="widget__title">Profit<br>This Year</h5>
                    <p class="widget__profit_value profit_value-today">1000000</p>
                    <img src="<?= ASTROOT ?>/icons/widget__icon_profit.svg" alt="money tag" class="widget__icon">
                </div>
            </div>
        </section>
        <section class="modal">
            <div class="modal__header">
                <h3 class="modal__title">1960bla@gmail.com</h3>
                <span class="material-icons-outlined modal__icon">close</span>
            </div>
            <p class="modal__text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis soluta quo deleniti officia quis sapiente praesentium maxime, illo accusamus incidunt impedit ut sit consectetur aspernatur explicabo cupiditate. Excepturi quasi, ipsam obcaecati consectetur vitae repellendus harum nulla perferendis magni suscipit aliquid reiciendis magnam minima nobis assumenda tenetur odit sed enim? Incidunt quam nesciunt animi quibusdam sapiente natus minima magnam, officia eaque, facilis quasi enim inventore qui explicabo, omnis quisquam deleniti quas officiis libero vero cum esse asperiores delectus repudiandae! Natus similique est fugit repellendus repudiandae iusto, eligendi voluptate neque temporibus asperiores reiciendis quae minus omnis, perferendis velit tenetur illum. Nostrum saepe pariatur ducimus veniam quidem accusamus animi quae dignissimos voluptate, quasi sit? Perspiciatis, repellat minima! Labore quo dolor quidem itaque omnis nam mollitia error quas molestiae sapiente eligendi eaque, nemo nihil delectus accusamus sequi repudiandae in animi ipsum obcaecati architecto aspernatur impedit. Fugit perspiciatis officiis animi voluptatem quas iste quam rem quod veritatis in et atque eaque, minus earum accusantium aspernatur nostrum molestias tempore itaque cumque dicta vitae a nam. Nesciunt, quaerat sed labore in vel ipsum est maxime dignissimos ex nisi aliquam quisquam nobis unde facere ipsam obcaecati quasi blanditiis omnis laudantium nostrum, vero quibusdam? Iste labore commodi eius ipsam!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit molestiae suscipit quos quo rem accusantium quia nam ratione quidem deserunt rerum laborum, ipsa, odio, esse voluptates! Magni ex dolores dicta incidunt ab alias vero omnis similique ipsa. Labore ea dolorum facilis perspiciatis ullam repudiandae similique, in tempore. Praesentium, corrupti optio.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente tempore dicta inventore id ab cum aliquid aut commodi dolorem excepturi. At possimus asperiores voluptatem laborum alias? Voluptatem quae ducimus similique!
            </p>
        </section>
        <?php
        include_once  APPROOT . "/app/components/admin/navbar.php";
        ?>

        <script src='<?= JSROOT ?>/admin_js/main.js'></script>
        <script src='<?= JSROOT ?>/admin_js/navbar.js'></script>
    </main>
</body>

</html>