<div class="app app-auth-sign-up align-content-stretch d-flex flex-wrap justify-content-end">
    <div class="app-auth-background">

    </div>
    <div class="app-auth-container">
        <div class="logo">
            <a href="<?= base_url(''); ?>">Website Penyewaan Mobil</a>
        </div>
        <p class="auth-description">Please enter your credentials to create an account.<br>Already have an account? <a href="<?= base_url(''); ?>">Sign In</a></p>

        <form action="<?= base_url('auth/registerPost'); ?>" method="post">
            <div class="auth-credentials m-b-xxl">
                <label for="signUpUsername" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control m-b-md" name="nama" id="signUpUsername" aria-describedby="signUpUsername" placeholder="Masukkan Nama Lengkap">

                <label for="signUpEmail" class="form-label">Email</label>
                <input type="email" class="form-control m-b-md" name="email" id="signUpEmail" aria-describedby="signUpEmail" placeholder="Masukkan Email">

                <label for="signUpPassword" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="signUpPassword" aria-describedby="signUpPassword" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;">
                <div id="emailHelp" class="form-text">Password must be minimum 8 characters length*</div>

                <label for="signUpPasswordConfirm" class="form-label">Konfirmasi Password</label>
                <input type="password" class="form-control" name="password_confirm" id="signUpPasswordConfirm" aria-describedby="signUpPasswordConfirm" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;">
                <div id="emailHelp" class="form-text">Password must be minimum 8 characters length*</div>
            </div>

            <div class="auth-submit">
                <button type="submit" class="btn btn-primary">Sign Up</button>
            </div>
        </form>
    </div>
</div>