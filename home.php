<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './boot_css.php' ?>
    <title>Document</title>
    <style>
        body {
            background: #F2F3F5;
        }

        .pop-up {
            height: 100vh;
            position: fixed;
            width: 100vw;
            top: 0;
            background: rgba(255, 255, 255, 0.7);
        }

        ::-webkit-scrollbar {
            height: 1px
        }

        ::-webkit-scrollbar-thumb {
            height: 1px;
            background: var(--bs-primary);
        }
    </style>
</head>

<body>
    <?php
    include './config.php';
    if (!isset($_SESSION['check_logged'])) {
        header("Location: $base_url");
    }
    if (isset($_SESSION['story_uploaded'])) {
        ?>

        <div class="pop-up d-flex justify-content-center align-items-center">
            <div style="width:max-content" class="p-3 rounded-4 bg-dark text-white">
                <h1 class='fw-light text-center'>
                    <?php echo $_SESSION['story_uploaded'] ?>
                </h1>
                <button class="btn btn-success close-pop d-block mx-auto my-3 w-25 ">OK</button>
            </div>
        </div>

    <?php } ?>

    <nav>
        <div class="row px-4 bg-white shadow">
            <div class="col-lg-8 d-flex gap-4 align-items-center">
                <div class="search d-flex gap-3 align-items-center">
                    <img width="50px" src="https://upload.wikimedia.org/wikipedia/commons/6/6c/Facebook_Logo_2023.png"
                        alt="">
                    <div class="search-bar d-flex align-items-center border p-2 rounded-pill " style="width:400px">
                        <span><i class="bi bi-search"></i></span>
                        <input style="outline-width:0" type="search" placeholder="Search Facebook"
                            class=" border-0 w-100" name="search" id="">
                    </div>
                </div>
                <div class="icons d-flex justify-content-center mx-auto fs-1 gap-5">
                    <i style="cursor:pointer" class="bi bi-house-door-fill"></i>
                    <i style="cursor:pointer" class="bi bi-bell"></i>
                    <i style="cursor:pointer" class="bi bi-display"></i>
                    <i style="cursor:pointer" class="bi bi-person-circle"></i>
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
    <div class="row w-100 p-0 m-0">

        <div style="height:100vh" class="sidebar bg-white container col-3">
            <div class="d-flex justify-content-between align-items-center p-3">
                <h3>Home</h3>
                <!-- Button trigger modal -->
                <span type="button" class="text-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Create
                </span>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Upload a story</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="./upload_story.php" method="POST" enctype="multipart/form-data">
                                    <label for="">Caption</label>
                                    <input type="text" name="caption" class="form-control">
                                    <label for="">Image</label>
                                    <input type="file" class='form-control' name="image" id="">
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="d-flex flex-column gap-4">
                <li class='d-flex gap-3'>
                    <img width="50px"
                        src="http://www.wallpaperup.com/uploads/wallpapers/2015/04/11/659101/5ff9c57dcd7405f38eda737bc5be9e1c.jpg"
                        alt="">
                    <h5>Lorem, ipsum.</h5>
                </li>
                <li class='d-flex gap-3'>
                    <img width="50px"
                        src="http://www.wallpaperup.com/uploads/wallpapers/2015/04/11/659101/5ff9c57dcd7405f38eda737bc5be9e1c.jpg"
                        alt="">
                    <h5>Lorem, ipsum.</h5>
                </li>
                <li class='d-flex gap-3'>
                    <img width="50px"
                        src="http://www.wallpaperup.com/uploads/wallpapers/2015/04/11/659101/5ff9c57dcd7405f38eda737bc5be9e1c.jpg"
                        alt="">
                    <h5>Lorem, ipsum.</h5>
                </li>
                <li class='d-flex gap-3'>
                    <img width="50px"
                        src="http://www.wallpaperup.com/uploads/wallpapers/2015/04/11/659101/5ff9c57dcd7405f38eda737bc5be9e1c.jpg"
                        alt="">
                    <h5>Lorem, ipsum.</h5>
                </li>
                <li class='d-flex gap-3'>
                    <img width="50px"
                        src="http://www.wallpaperup.com/uploads/wallpapers/2015/04/11/659101/5ff9c57dcd7405f38eda737bc5be9e1c.jpg"
                        alt="">
                    <h5>Lorem, ipsum.</h5>
                </li>
                <li class='d-flex gap-3'>
                    <img width="50px"
                        src="http://www.wallpaperup.com/uploads/wallpapers/2015/04/11/659101/5ff9c57dcd7405f38eda737bc5be9e1c.jpg"
                        alt="">
                    <h5>Lorem, ipsum.</h5>
                </li>
                <li class='d-flex gap-3'>
                    <img width="50px"
                        src="http://www.wallpaperup.com/uploads/wallpapers/2015/04/11/659101/5ff9c57dcd7405f38eda737bc5be9e1c.jpg"
                        alt="">
                    <h5>Lorem, ipsum.</h5>
                </li>
                <li class='d-flex gap-3'>
                    <img width="50px"
                        src="http://www.wallpaperup.com/uploads/wallpapers/2015/04/11/659101/5ff9c57dcd7405f38eda737bc5be9e1c.jpg"
                        alt="">
                    <h5>Lorem, ipsum.</h5>
                </li>
                <li class='d-flex gap-3'>
                    <img width="50px"
                        src="http://www.wallpaperup.com/uploads/wallpapers/2015/04/11/659101/5ff9c57dcd7405f38eda737bc5be9e1c.jpg"
                        alt="">
                    <h5>Lorem, ipsum.</h5>
                </li>
                <li class='d-flex gap-3'>
                    <img width="50px"
                        src="http://www.wallpaperup.com/uploads/wallpapers/2015/04/11/659101/5ff9c57dcd7405f38eda737bc5be9e1c.jpg"
                        alt="">
                    <h5>Lorem, ipsum.</h5>
                </li>
            </ul>
        </div>

        <div style="height:100vh" class="main col-lg-6">
            <div class="d-flex p-3 justify-content-between align-items-center">
                <h5>Stories</h5>
                <a href="#" class="text-decoration-none text-primary fw-medium">See All</a>
            </div>
            <div class="d-flex gap-2" style='overflow-x:scroll'>
                <?php
                include './config.php';
                $select = "SELECT * FROM stories";
                $result = mysqli_query($connection, $select);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <div class="col-2">
                            <a style="width:100%" href="./show-story.php?id=<?php echo $row['id'] ?>">

                                <div style="height:200px" class="card w-100 rounded-3">
                                    <img width="100%" height="100%" class="rounded-3" style="object-fit:cover"
                                        src="./images/<?php echo $row['image'] ?>" alt="">
                                </div>
                            </a>
                        </div>
                    <?php }
                } ?>
            </div>
        </div>
        <div class="col-lg-3 bg-white" style="height:100vh">

        </div>
    </div>

    <a href="./logout.php" class="btn btn-danger">
        Logout
    </a>

    <?php include './boot_js.php';
    unset($_SESSION['story_uploaded']);
    ?>

</body>

</html>