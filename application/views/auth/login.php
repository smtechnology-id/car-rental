<div class="app app-auth-sign-in align-content-stretch d-flex flex-wrap justify-content-end">
    <div class="app-auth-background">

    </div>
    <div class="app-auth-container">
        <form action="<?= base_url('auth/loginPost'); ?>" method="post">
            <div class="logo">
                <a href="<?= base_url(''); ?>">Website Penyewaan Mobil</a>
            </div>
            <p class="auth-description">Please sign-in to your account and continue to the dashboard.<br>Don't have an account? <a href="<?= base_url('auth/register'); ?>">Sign Up</a></p>

            <div class="auth-credentials m-b-xxl">
                <label for="signInEmail" class="form-label">Email address</label>
                <input type="email" class="form-control m-b-md" name="email" id="signInEmail" aria-describedby="signInEmail" placeholder="example@neptune.com" required>

                <label for="signInPassword" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="signInPassword" aria-describedby="signInPassword" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;" required>
            </div>

            <div class="auth-submit">
                <button type="submit" class="btn btn-primary">Sign In</button>
            </div>
        </form>
    </div>
</div>