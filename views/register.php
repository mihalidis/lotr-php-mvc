<?php
include 'layouts/headSection.php';
?>

<main class="form-signin">
    <form method="post">
        <img class="mb-4" src="public/assets/images/auth/purple-witch.png" alt="Purple witch logo" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Register</h1>

        <div class="form-floating">
            <input type="text" class="form-control" id="registerUsernameInput" name="username" placeholder="Username">
            <label for="registerUsernameInput">Username</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="registerPasswordInput" name="password" placeholder="Password">
            <label for="registerPasswordInput">Password</label>
        </div>

<!--        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>-->
        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
    </form>
    <!-- FOOTER -->
    <?php include 'layouts/footer.php'; ?>
</main>

<?php include 'layouts/endSection.php'; ?>



</body>
</html>