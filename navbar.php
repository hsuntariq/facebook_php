<nav>
    <div class="row px-4 bg-white shadow">
        <div class="col-lg-8 d-flex gap-4 align-items-center">
            <div class="search d-flex gap-3 align-items-center">
                <img width="50px" src="https://upload.wikimedia.org/wikipedia/commons/6/6c/Facebook_Logo_2023.png"
                    alt="">
                <div class="search-bar d-flex align-items-center border p-2 rounded-pill " style="width:400px">
                    <span><i class="bi bi-search"></i></span>
                    <input style="outline-width:0" type="search" placeholder="Search Facebook" class=" border-0 w-100"
                        name="search" id="">
                </div>
            </div>
            <div class="icons d-flex justify-content-center mx-auto fs-1 gap-5">
                <i style="cursor:pointer" class="bi bi-house-door-fill"></i>
                <i style="cursor:pointer" class="bi bi-bell"></i>
                <i style="cursor:pointer" class="bi bi-display"></i>
                <div class="user-profile position-relative">
                    <i style="cursor:pointer" class="bi bi-person-circle"></i>
                    <div class="card p-2 border-1 rounded-0 user position-absolute">
                        <a href="./profile.php" class='d-flex align-items-center gap-4 text-decoration-none'>
                            <i class="bi text-danger fs-6 bi-box-arrow-left"></i>
                            <h5>View Profile</h5>
                        </a>
                        <a href="./logout" class='d-flex align-items-center gap-4 text-decoration-none'>
                            <i class="bi text-danger fs-6 bi-box-arrow-left"></i>
                            <h5>Update Profile</h5>
                        </a>
                        <a href="./logout.php" class='d-flex align-items-center gap-4 text-decoration-none'>
                            <i class="bi fs-6 text-danger bi-box-arrow-left"></i>
                            <h5>Logout</h5>
                        </a>
                    </div>
                </div>
                <i style="cursor:pointer" class="bi bi-house-door-fill"></i>
                <i style="cursor:pointer" class="bi bi-bell"></i>
                <i style="cursor:pointer" class="bi bi-display"></i>
                <i style="cursor:pointer" class="bi bi-person-circle"></i>
            </div>
        </div>
        <div class="col-lg-4 fs-1 d-flex justify-content-end ">
            <i style="cursor:pointer" class="bi bi-gear "></i>
        </div>
    </div>
</nav>