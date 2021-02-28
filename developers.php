<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/tabs.css" />
    <link rel="stylesheet" href="./css/person-card.css" />
    <title>Developers</title>
    <script src="./js/tabs.js"></script>
</head>

<body>
    <?php
    $title_1 = "";
    $title_2 = "Developers";
    $main_desc = "";

    include "header.php";
    ?>

    <div class="tabs-container flex-layout ">
        <div data-tab="disk" class="dev tab h4 active-tab flex-layout justify-center items-center text-uppercase">
            Disk Scheduling
        </div>
        <div data-tab="scheduling" class="dev tab h4 flex-layout justify-center items-center text-uppercase">
            Scheduling
        </div>
        <div data-tab="pageRep" class="dev tab h4 flex-layout justify-center items-center text-uppercase">
            Page Replacement
        </div>
        <div data-tab="concurrency" class="dev tab h4 flex-layout justify-center items-center text-uppercase">
            Concurrency & Deadlock
        </div>
    </div>

    <div id="disk" class="tab-view">
        <section class="person-cards">

            <div class="person-card white-text">
                <div class="person-card-header">
                    <img class="person-card-img" src="./assets/images/post.jpg" alt="Person Image">
                </div>
                <div class="person-card-body">
                    <h4 class="person-card-name">Lorem Ipsum</h4>
                    <h5 class="person-card-des">President</h5>
                </div>
            </div>

            <div class="person-card white-text">
                <div class="person-card-header">
                    <img class="person-card-img" src="./assets/images/post.jpg" alt="Person Image">
                </div>
                <div class="person-card-body">
                    <h4 class="person-card-name">Lorem Ipsum</h4>
                    <h5 class="person-card-des">President</h5>
                </div>
            </div>

            <div class="person-card white-text">
                <div class="person-card-header">
                    <img class="person-card-img" src="./assets/images/post.jpg" alt="Person Image">
                </div>
                <div class="person-card-body">
                    <h4 class="person-card-name">Lorem Ipsum</h4>
                    <h5 class="person-card-des">President</h5>
                </div>
            </div>

            <div class="person-card white-text">
                <div class="person-card-header">
                    <img class="person-card-img" src="./assets/images/post.jpg" alt="Person Image">
                </div>
                <div class="person-card-body">
                    <h4 class="person-card-name">Lorem Ipsum</h4>
                    <h5 class="person-card-des">President</h5>
                </div>
            </div>

        </section>
    </div>
    <div id="scheduling" class="tab-view">
        <section class="person-cards">

            <div class="person-card white-text">
                <div class="person-card-header">
                    <img class="person-card-img" src="./assets/images/post.jpg" alt="Person Image">
                </div>
                <div class="person-card-body">
                    <h4 class="person-card-name">Lorem Ipsum</h4>
                    <h5 class="person-card-des">President</h5>
                </div>
            </div>

            <div class="person-card white-text">
                <div class="person-card-header">
                    <img class="person-card-img" src="./assets/images/post.jpg" alt="Person Image">
                </div>
                <div class="person-card-body">
                    <h4 class="person-card-name">Lorem Ipsum</h4>
                    <h5 class="person-card-des">President</h5>
                </div>
            </div>

            <div class="person-card white-text">
                <div class="person-card-header">
                    <img class="person-card-img" src="./assets/images/post.jpg" alt="Person Image">
                </div>
                <div class="person-card-body">
                    <h4 class="person-card-name">Lorem Ipsum</h4>
                    <h5 class="person-card-des">President</h5>
                </div>
            </div>

            <div class="person-card white-text">
                <div class="person-card-header">
                    <img class="person-card-img" src="./assets/images/post.jpg" alt="Person Image">
                </div>
                <div class="person-card-body">
                    <h4 class="person-card-name">Lorem Ipsum</h4>
                    <h5 class="person-card-des">President</h5>
                </div>
            </div>

            <div class="person-card white-text">
                <div class="person-card-header">
                    <img class="person-card-img" src="./assets/images/post.jpg" alt="Person Image">
                </div>
                <div class="person-card-body">
                    <h4 class="person-card-name">Lorem Ipsum</h4>
                    <h5 class="person-card-des">President</h5>
                </div>
            </div>

        </section>
    </div>
    <div id="pageRep" class="tab-view">
        <section class="person-cards">

            <div class="person-card white-text">
                <div class="person-card-header">
                    <img class="person-card-img" src="./assets/images/post.jpg" alt="Person Image">
                </div>
                <div class="person-card-body">
                    <h4 class="person-card-name">Lorem Ipsum</h4>
                    <h5 class="person-card-des">President</h5>
                </div>
            </div>

            <div class="person-card white-text">
                <div class="person-card-header">
                    <img class="person-card-img" src="./assets/images/post.jpg" alt="Person Image">
                </div>
                <div class="person-card-body">
                    <h4 class="person-card-name">Lorem Ipsum</h4>
                    <h5 class="person-card-des">President</h5>
                </div>
            </div>

            <div class="person-card white-text">
                <div class="person-card-header">
                    <img class="person-card-img" src="./assets/images/post.jpg" alt="Person Image">
                </div>
                <div class="person-card-body">
                    <h4 class="person-card-name">Lorem Ipsum</h4>
                    <h5 class="person-card-des">President</h5>
                </div>
            </div>

            <div class="person-card white-text">
                <div class="person-card-header">
                    <img class="person-card-img" src="./assets/images/post.jpg" alt="Person Image">
                </div>
                <div class="person-card-body">
                    <h4 class="person-card-name">Lorem Ipsum</h4>
                    <h5 class="person-card-des">President</h5>
                </div>
            </div>

            <div class="person-card white-text">
                <div class="person-card-header">
                    <img class="person-card-img" src="./assets/images/post.jpg" alt="Person Image">
                </div>
                <div class="person-card-body">
                    <h4 class="person-card-name">Lorem Ipsum</h4>
                    <h5 class="person-card-des">President</h5>
                </div>
            </div>

        </section>
    </div>
    <div id="concurrency" class="tab-view">

    </div>
</body>

</html>