<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/person-card.css">
    <title>Homepage</title>

    <style>
        .index:hover img {
            box-shadow:5px 5px 10px #000;
        }

        .person-card-img {
            width: 100%;
        }

        @media screen and (min-width: 960px) {

            .index {
                flex: 0 1 calc(25% - 2em);
                margin-left: 0;
                margin-right: 0;
            }

            .person-cards {
                justify-content: space-between;
            }
        }
    </style>

</head>
<body>
    <?php 
        $title_1 = "OS";
        $title_2 = "Virtual Lab";
        $main_desc = "";
        include 'header.php'; 
    ?>

    <section class="person-cards">

        <div class="index person-card white-text items-center justify-center">
            <a href="./Main.php">
                <div class="person-card-header">
                    <img class="person-card-img" src="./assets/images/hard-disk1.jpg" alt="Person Image">
                </div>
            </a>
            <div class="person-card-body">
                <h4 class="person-card-name text-center">Disk Scheduling<br>Algorithms</h4>
            </div>
        </div>

        <div class="index person-card white-text items-center justify-center">
            <a href="./schedulingAlgo.php">
                <div class="person-card-header">
                    <img class="person-card-img" src="./assets/images/scheduling-bg.jpg" alt="Person Image">
                </div>
            </a>
            <div class="person-card-body">
                <h4 class="person-card-name text-center">Scheduling Algorithms</h4>
            </div>
        </div>

        <div class="index person-card white-text items-center justify-center">
            <a href="./pageReplacementAlgo.php">
                <div class="person-card-header">
                    <img class="person-card-img" src="./assets/images/page-replacement-bg.jpg" alt="Person Image">
                </div>
            </a>
            <div class="person-card-body">
                <h4 class="person-card-name text-center">Page Replacement<br>Algorithms</h4>
            </div>
        </div>

        <div class="index person-card white-text items-center justify-center">
            <a href="#">
                <div class="person-card-header">
                    <img class="person-card-img" src="./assets/images/concurrency-deadlock-bg.jpg" alt="Person Image">
                </div>
            </a>
            <div class="person-card-body">
                <h4 class="person-card-name text-center">Concurrency &<br>Deadlock Algorithms</h4>
            </div>
        </div>

    </section>

</body>
</html>