<form style="transition:all 0.9s" action="./login.php" method="POST" class='bg-white w-75 mx-auto p-4 rounded-2'>
    <input class="form-control my-1" type="text" placeholder="Email adderss or phone number" name='m_mail'>
    <input class="form-control my-1" type="text" placeholder="Password" name='password'>
    <button class="btn text-white fw-medium btn-primary w-100 my-2">
        Log in
    </button>
    <?php
    if (isset($_SESSION['error'])) {
        echo "<p class='text-danger flash text-center fw-bolder '>
            {$_SESSION['error']}
        </p>";
    }
    if (isset($_SESSION['empty'])) {
        echo "<p class='text-danger flash text-center fw-bolder '>
            {$_SESSION['empty']}
        </p>";
    }

    unset($_SESSION['error']);
    unset($_SESSION['empty']);

    ?>
    <a href="/" class="text-primary text-decoration-none text-center w-100 d-block">Forgotten password?</a>
    <hr class='my-3'>
    <button type="button" style="background: #42B72A;"
        class="btn reg my-4 py-2  fw-medium px-4 fs-5 text-white d-block mx-auto">Create new account</button>
</form>

<script>



</script>