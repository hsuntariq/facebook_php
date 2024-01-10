<form action="./reg-data.php" method="POST" class='bg-white shadow p-4  col-lg-3 rounded-3'>
    <div class="icon text-end me-3">
        <i class="bi bi-x-lg position-absolute" style='cursor:pointer'></i>
    </div>
    <h4>Sign Up</h4>
    <p class="fs-6">It's quick and easy</p>
    <hr>
    <div class="d-flex gap-2">
        <input type="text" name="f_name" placeholder="First Name" class="form-control my-1">
        <input type="text" name="l_name" placeholder="Surname" class="form-control my-1">
    </div>
    <input type="text" class="form-control my-1 mb-2" name='m_mail' placeholder='Mobile number or email address'>
    <input type="password" class="form-control my-1" name='password' placeholder='New password'>
    <label for="">Date of birth <i class="bi bi-question-circle-fill"></i></label>
    <div class="d-flex gap-2">

        <select name="date" class="form-control" id="">
            <?php
            $i = 1;
            while ($i <= 31) {
                echo "<option value='$i'>$i</option>";
                $i++;
            }
            ?>
        </select>

        <select name="month" class="form-control" id="">
            <?php
            $months = [
                'Jan',
                'Feb',
                'Mar',
                'Apr',
                'May',
                'Jun',
                'Jul',
                'Aug',
                'Sep',
                'Oct',
                'Nov',
                'Dec'
            ];
            foreach ($months as $month) {
                echo "<option value='$month'>$month</option>";
            }
            ?>

        </select>

        <select name="year" class="form-control" id="">
            <?php
            $start = 2024;
            $end = 1905;
            while ($start >= $end) {
                echo "<option value='$start'>$start</option>";
                $start--;
            }

            ?>

        </select>
    </div>

    <div class="d-flex justify-content-between gap-2 my-2">
        <div class="d-flex justify-content-between align-items-center border rounded-2 p-1 w-100">
            <label for="">Female</label>
            <input value="female" name="gender" type="radio" class="form-check">
        </div>
        <div class="d-flex justify-content-between align-items-center border rounded-2 p-1 w-100">
            <label for="">Male</label>
            <input value="male" name="gender" type="radio" class="form-check">
        </div>

    </div>
    <small>People who use our service may have uploaded your contact information to Facebook. Learn
        more.</small><br><br>
    <small>By clicking Sign Up, you agree to our Terms, Privacy Policy and Cookies Policy. You may receive SMS
        notifications from us and can opt out at any time.</small>
    <button style="background: #42B72A;" class="btn reg my-4 py-2  fw-medium px-4 fs-5 text-white d-block mx-auto">Sign
        In</button>
</form>