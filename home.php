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
            height: 1px;
            width: 1px;
        }

        ::-webkit-scrollbar-thumb {
            height: 1px;
            width: 1px;
            background: var(--bs-primary);
        }

        .user {
            z-index: 3333 !important;
            width: max-content;
            display: none;
        }

        a {
            transition: all 0.1s;
            z-index: 222;
        }

        .user a:hover {
            background: var(--bs-secondary);
            color: white;

        }

        .show {
            display: block;
        }

        .user h5::selection {
            background: transparent;
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

        <div style="z-index:333" class="pop-up d-flex justify-content-center align-items-center">
            <div style="width:max-content" class="p-3 rounded-4 bg-dark text-white">
                <h1 class='fw-light text-center'>
                    <?php echo $_SESSION['story_uploaded'] ?>
                </h1>
                <button class="btn btn-success close-pop d-block mx-auto my-3 w-25 ">OK</button>
            </div>
        </div>

    <?php } ?>

    <?php include './navbar.php' ?>
    <div class="row w-100 p-0 m-0">

        <div style="height:100vh" class="sidebar bg-white container col-3">
            <div class="d-flex justify-content-between align-items-center p-3">
                <h3>Home</h3>
                <!-- Button trigger modal -->
                <span type="button" class="text-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Create
                </span>

                <?php include './story_model.php' ?>
            </div>
            <?php include './sidebar.php' ?>
        </div>

        <div style="height:100vh;overflow-y:scroll" class="main col-lg-6">
            <div class="d-flex p-3 justify-content-between align-items-center">
                <h5>Stories</h5>
                <a href="#" class="text-decoration-none text-primary fw-medium">See All</a>
            </div>
            <?php include './stories.php' ?>

            <!-- create post -->
            <div
                class="d-flex bg-white rounded-3 col-lg-8 mx-auto my-3 justify-content-between gap-4 align-items-center py-2 px-4">
                <div class="user-image">
                    <img width="50px" height="50px" class="rounded-circle" src="" alt="">
                </div>
                <div class="add-post w-100">
                    <button type="button" style="background: #F2F3F5;" class="btn w-100" data-bs-toggle="modal"
                        data-bs-target="#postModal">
                        Add post
                    </button>
                </div>
                <div class="images">
                    <i class="bi bi-images" data-bs-toggle="modal" data-bs-target="#postModal">

                    </i>
                </div>
                <?php include './postModal.php';
                ?>

            </div>


            <?php include './posts.php'; ?>

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

    <script>
        let profile = document.querySelector('.bi-person-circle');
        let user = document.querySelector('.user');
        profile.addEventListener('click', () => {
            user.classList.toggle('show')
        })
    </script>

</body>

</html>