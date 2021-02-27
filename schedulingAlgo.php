<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/algo.css">
    <link rel="stylesheet" href="./css/algoContent.css" />
    <link rel="stylesheet" href="./css/tabs.css" />
    <link rel="stylesheet" href="./css/header.css" />
    <title>SA</title>
    <script src="./js/tabs.js"></script>
</head>

<body>

    <?php
    $title_1 = "Scheduling";
    $title_2 = "Algorithms";
    $main_desc = "Ang Lorem Ipsum ay ginagamit na modelo ng industriya ng pagpriprint at pagtytypeset. Ang Lorem Ipsum ang naging
                    regular na modelo simula pa noong 1500s, noong may isang di kilalang manlilimbag and kumuha ng galley ng type at
                    ginulo ang pagkaka-ayos nito upang makagawa ng libro ng mga type specimen. Nalagpasan nito hindi lang limang siglo, kundi nalagpasan din
                    nito ang paglaganap ng electronic typesettin?";

    include "header.php";
    ?>

    <div class="tabs-container flex-layout ">
        <div data-tab="fcfs" class="sa tab h4 active-tab flex-layout justify-center items-center text-uppercase">
            FCFS
        </div>
        <div data-tab="sjf" class="sa tab h4 flex-layout justify-center items-center text-uppercase">
            SJF
        </div>
        <div data-tab="ljf" class="sa tab h4 flex-layout justify-center items-center text-uppercase">
            LJF
        </div>
        <div data-tab="rr" class="sa tab h4 flex-layout justify-center items-center text-uppercase">
            RR
        </div>
        <div data-tab="lrtf" class="sa tab h4 flex-layout justify-center items-center text-uppercase">
            LRTF
        </div>
        <div data-tab="srtf" class="sa tab h4 flex-layout justify-center items-center text-uppercase">
            SRTF
        </div>
        <div data-tab="priority" class="sa tab h4 flex-layout justify-center items-center text-uppercase">
            Priority
        </div>
    </div>

    <div id="fcfs" class="tab-view">
        <div class="page-heading flex-layout justify-center items-center text-uppercase white-text">
            <h1>First Come First Serve</h1>
        </div>
        <br><br>
        <?php
        $algoName = "FCFS";
        $algoDesc = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti ducimus eum, ex corporis officia iste fuga natus molestias totam perferendis quas, animi esse placeat obcaecati fugit explicabo repellendus distinctio dolores.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta corporis dignissimos aperiam necessitatibus omnis. Numquam quod iure excepturi in, nesciunt, iste dicta neque iusto perferendis, atque eligendi molestiae ad tempore!";

        include "algoContent.php";
        ?>
        <br><br>
        <?php include "fcfs.php"; ?>
        <br><br>
    </div>
    <div id="sjf" class="tab-view">
        <div class="page-heading flex-layout justify-center items-center text-uppercase white-text">
            <h1>Shortest Job First</h1>
        </div>
        <br><br>
        <?php
        $algoName = "SJF";
        $algoDesc = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti ducimus eum, ex corporis officia iste fuga natus molestias totam perferendis quas, animi esse placeat obcaecati fugit explicabo repellendus distinctio dolores.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta corporis dignissimos aperiam necessitatibus omnis. Numquam quod iure excepturi in, nesciunt, iste dicta neque iusto perferendis, atque eligendi molestiae ad tempore!";

        include "algoContent.php"; ?>
        <br><br>
        <?php include "sjf.php"; ?>
        <br><br>
    </div>
    <div id="ljf" class="tab-view">
        <div class="page-heading flex-layout justify-center items-center text-uppercase white-text">
            <h1>Longest Job First</h1>
        </div>
        <br><br>
        <?php
        $algoName = "LJF";
        $algoDesc = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti ducimus eum, ex corporis officia iste fuga natus molestias totam perferendis quas, animi esse placeat obcaecati fugit explicabo repellendus distinctio dolores.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta corporis dignissimos aperiam necessitatibus omnis. Numquam quod iure excepturi in, nesciunt, iste dicta neque iusto perferendis, atque eligendi molestiae ad tempore!";

        include "algoContent.php"; ?>
        <br><br>
        <?php include "ljf.php"; ?>
        <br><br>
    </div>
    <div id="rr" class="tab-view">
        <div class="page-heading flex-layout justify-center items-center text-uppercase white-text">
            <h1>Round Robin</h1>
        </div>
        <br><br>
        <?php
        $algoName = "RR";
        $algoDesc = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti ducimus eum, ex corporis officia iste fuga natus molestias totam perferendis quas, animi esse placeat obcaecati fugit explicabo repellendus distinctio dolores.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta corporis dignissimos aperiam necessitatibus omnis. Numquam quod iure excepturi in, nesciunt, iste dicta neque iusto perferendis, atque eligendi molestiae ad tempore!";

        include "algoContent.php"; ?>
        <br><br>
    </div>
    <div id="lrtf" class="tab-view">
        <div class="page-heading flex-layout justify-center items-center text-uppercase white-text">
            <h1>Least Running Time First</h1>
        </div>
        <br><br>
        <?php
        $algoName = "LRTF";
        $algoDesc = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti ducimus eum, ex corporis officia iste fuga natus molestias totam perferendis quas, animi esse placeat obcaecati fugit explicabo repellendus distinctio dolores.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta corporis dignissimos aperiam necessitatibus omnis. Numquam quod iure excepturi in, nesciunt, iste dicta neque iusto perferendis, atque eligendi molestiae ad tempore!";

        include "algoContent.php"; ?>
        <br><br>
    </div>
    <div id="srtf" class="tab-view">
        <div class="page-heading flex-layout justify-center items-center text-uppercase white-text">
            <h1>Shortest Running Time First</h1>
        </div>
        <br><br>
        <?php
        $algoName = "SRTF";
        $algoDesc = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti ducimus eum, ex corporis officia iste fuga natus molestias totam perferendis quas, animi esse placeat obcaecati fugit explicabo repellendus distinctio dolores.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta corporis dignissimos aperiam necessitatibus omnis. Numquam quod iure excepturi in, nesciunt, iste dicta neque iusto perferendis, atque eligendi molestiae ad tempore!";

        include "algoContent.php"; ?>
        <br><br>
    </div>
    <div id="priority" class="tab-view">
        <div class="page-heading flex-layout justify-center items-center text-uppercase white-text">
            <h1>Priority</h1>
        </div>
        <br><br>
        <?php
        $algoName = "Priority";
        $algoDesc = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti ducimus eum, ex corporis officia iste fuga natus molestias totam perferendis quas, animi esse placeat obcaecati fugit explicabo repellendus distinctio dolores.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta corporis dignissimos aperiam necessitatibus omnis. Numquam quod iure excepturi in, nesciunt, iste dicta neque iusto perferendis, atque eligendi molestiae ad tempore!";

        include "algoContent.php"; ?>
        <br><br>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" integrity="sha384-9/D4ECZvKMVEJ9Bhr3ZnUAF+Ahlagp1cyPC7h5yDlZdXs4DQ/vRftzfd+2uFUuqS" crossorigin="anonymous"></script>
</body>

</html>