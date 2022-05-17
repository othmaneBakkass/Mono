<div class="popup--wrapper">
    <div class="display__flex flex__center flex__direction_row popup">
        <div class="popup__header">
            <span class="material-icons-outlined popup__header_icon">close</span>
        </div>
        <div class="flex__direction_row popup__content">
            <div class="popup__content_title--wrapper">
                <h2 class="popup__content_title">Login</h2>
                <h5 class="popup__content_subheading">before we go any further please login.</h5>
                <p class="popup__msg  popup__msg_global popup__msg_success">hello is it me your looking for</p>
            </div>
            <div class="popup__content_inputs">
                <div class="popup__content_input--wrapper">
                    <label for="popup_email" class="popup__content_label popup__content_label-email">e-mail</label>
                    <input class="popup__content_input" type="email" name="" id="popup_email">
                    <p class="popup__msg  popup__msg_email popup__msg_success">hello</p>
                </div>
                <div class="popup__content_input--wrapper">
                    <label for="popup_password" class="popup__content_label popup__content_label-password">password</label>
                    <input class="popup__content_input" type="password" name="" id="popup_password">
                    <p class="popup__msg  popup__msg_password popup__msg_error">hello</p>
                    <div class="popup__content_options--wrapper">
                        <label class="keep_me_loggedIn_btn">
                            <input type="checkbox" id="keepMeLogged"> keep me logged in
                        </label>
                        <a class="forgotten_password_link" href="<?= URLROOT ?>/join/forgottenPassword">forgotten password?</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="popup__footer">
            <p class="login__btn btn btn_xl">Login</p>
            <a class="login__google" href=""><i class="fa-brands fa-google google_icon"></i>Login With Google</a>
            <a class="signup_link" href="http://">you don't have an account?</a>
        </div>
    </div>
</div>