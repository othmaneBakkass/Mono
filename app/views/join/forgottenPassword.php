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
    <link rel="stylesheet" href="<?= CSSROOT ?>/forgottenPassword.css">
    <link rel="stylesheet" href="<?= CSSROOT ?>/navbarSecondary.css">

</head>

<body>
    <?php
    include_once  APPROOT . "/app/components/navbar_secondary.php";
    ?>
    <main>
        <div class="hero container__full flex__center flex__direction_row">
            <h1 class="hero__title">Reset Your Password</h1>
            <h4 class="hero__subheading">Enter your user account's verified email address and we will send you a password reset Token.</h4>
        </div>
        <div class="form--wrapper display__flex content__center align__center flex__direction_row">
            <div class="step display__flex align__start content__center flex__direction_row step-1">
                <label class="step__email_label" for="email">email:</label>
                <input class="step__email_input step__input" type="email" name="" id="email">
            </div>
            <div class="step display__flex align__start content__center flex__direction_row step-2 step-hidden">
                <label class="step__token_label" for="token">token:</label>
                <input class="step__token_input step__input" type="text" name="" id="token">
            </div>
            <div class="step display__flex align__start content__center flex__direction_row step-3 step-hidden">
                <label class="step__new-password_label" for="new-password">New password:</label>
                <input class="step__new-password_input step__input" type="text" name="" id="new-password">
            </div>
            <div class="step display__flex align__center content__end step-final">
                <p data-step="1" class="flex__center btn  action__btn">Next</p>
            </div>

        </div>
    </main>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.2/gsap.min.js" integrity="sha512-kVlGhj2qFy+KBCFuvjBJTGUMxbdqJKs4yK2jh0e0VPhWUPiPC87bzm4THmaaIee3Oj7j6sDpTTgm2EPPiESqBg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="<?= JSROOT ?>/forgottenPassword.js"></script>
    <script src="<?= JSROOT ?>/navbarSecondary.js"></script>


</body>

</html>