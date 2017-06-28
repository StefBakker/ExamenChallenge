<form class="form-signin" action="<?= URL ?>login/userLoginAction" method="post">
    <div class="login-wrap">
        <h2>Login</h2>
        <div class="form">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password"required>
            <button type="submit" id="login" placeholder="Login" name="login" class="btn btn-success" value="Login"> Sign in </button>
            <a href="<?= URL ?>register/register"> <p> Don't have an account? Register </p></a>
        </div>
    </div>
</form>
