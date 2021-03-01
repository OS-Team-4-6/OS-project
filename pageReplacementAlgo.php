<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/algoContent.css" />
    <link rel="stylesheet" href="./css/tabs.css" />
    <link rel="stylesheet" href="./css/header.css" />
    <title>Page Replacement Algorithms</title>
    <script src="./js/tabs.js"></script>
</head>

<body>
    <?php
    $title_1 = "Page Replacement";
    $title_2 = "Algorithms";
    $main_desc = "Ang Lorem Ipsum ay ginagamit na modelo ng industriya ng pagpriprint at pagtytypeset. Ang Lorem Ipsum ang naging
                    regular na modelo simula pa noong 1500s, noong may isang di kilalang manlilimbag and kumuha ng galley ng type at
                    ginulo ang pagkaka-ayos nito upang makagawa ng libro ng mga type specimen. Nalagpasan nito hindi lang limang siglo, kundi nalagpasan din
                    nito ang paglaganap ng electronic typesettin?";

    include "header.php";
    ?>

    <div class="tabs-container flex-layout ">
        <div data-tab="fifo" class="pra tab h4 active-tab flex-layout justify-center items-center text-uppercase">
            FIFO
        </div>
        <div data-tab="belady" class="pra tab h4 flex-layout justify-center items-center text-uppercase">
            BELADY
        </div>
        <div data-tab="lifo" class="pra tab h4 flex-layout justify-center items-center text-uppercase">
            LIFO
        </div>
        <div data-tab="lru" class="pra tab h4 flex-layout justify-center items-center text-uppercase">
            LRU
        </div>
        <div data-tab="optimal" class="pra tab h4 flex-layout justify-center items-center text-uppercase">
            Optimal
        </div>
        <div data-tab="random" class="pra tab h4 flex-layout justify-center items-center text-uppercase">
            Random
        </div>
    </div>

    <div id="fifo" class="tab-view">
        <div class="page-heading flex-layout justify-center items-center text-uppercase white-text">
            <h1>First In First Out</h1>
        </div>
        <br><br>
        <?php
        $algoName = "FIFO";
        $algoDesc = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti ducimus eum, ex corporis officia iste fuga natus molestias totam perferendis quas, animi esse placeat obcaecati fugit explicabo repellendus distinctio dolores.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta corporis dignissimos aperiam necessitatibus omnis. Numquam quod iure excepturi in, nesciunt, iste dicta neque iusto perferendis, atque eligendi molestiae ad tempore!";

        include "algoContent.php";
        ?>
        <br><br>
        <?php include "fifo.php"; ?>
    </div>
    <div id="belady" class="tab-view">
        <div class="page-heading flex-layout justify-center items-center text-uppercase white-text">
            <h1>Belady</h1>
        </div>
        <br><br>
        <?php
        $algoName = "BELADY";
        $algoDesc = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti ducimus eum, ex corporis officia iste fuga natus molestias totam perferendis quas, animi esse placeat obcaecati fugit explicabo repellendus distinctio dolores.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta corporis dignissimos aperiam necessitatibus omnis. Numquam quod iure excepturi in, nesciunt, iste dicta neque iusto perferendis, atque eligendi molestiae ad tempore!";

        include "algoContent.php";
        ?>
        <br><br>
        <?php include "belady.php"; ?>
    </div>
    <div id="lifo" class="tab-view">
        <div class="page-heading flex-layout justify-center items-center text-uppercase white-text">
            <h1>Last In First Out</h1>
        </div>
        <br><br>
        <?php
        $algoName = "LIFO";
        $algoDesc = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti ducimus eum, ex corporis officia iste fuga natus molestias totam perferendis quas, animi esse placeat obcaecati fugit explicabo repellendus distinctio dolores.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta corporis dignissimos aperiam necessitatibus omnis. Numquam quod iure excepturi in, nesciunt, iste dicta neque iusto perferendis, atque eligendi molestiae ad tempore!";

        include "algoContent.php";
        ?>
        <br><br>
        
    </div>
    <div id="lru" class="tab-view">
        <div class="page-heading flex-layout justify-center items-center text-uppercase white-text">
            <h1>least recently used</h1>
        </div>
        <br><br>
        <?php
        $algoName = "LRU";
        $algoDesc = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti ducimus eum, ex corporis officia iste fuga natus molestias totam perferendis quas, animi esse placeat obcaecati fugit explicabo repellendus distinctio dolores.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta corporis dignissimos aperiam necessitatibus omnis. Numquam quod iure excepturi in, nesciunt, iste dicta neque iusto perferendis, atque eligendi molestiae ad tempore!";

        include "algoContent.php";
        ?>
        <br><br>
    </div>
    <div id="optimal" class="tab-view">
        <div class="page-heading flex-layout justify-center items-center text-uppercase white-text">
            <h1>optimal</h1>
        </div>
        <br><br>
        <?php
        $algoName = "Optimal";
        $algoDesc = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti ducimus eum, ex corporis officia iste fuga natus molestias totam perferendis quas, animi esse placeat obcaecati fugit explicabo repellendus distinctio dolores.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta corporis dignissimos aperiam necessitatibus omnis. Numquam quod iure excepturi in, nesciunt, iste dicta neque iusto perferendis, atque eligendi molestiae ad tempore!";

        include "algoContent.php";
        ?>
        <br><br>
    </div>
    <div id="random" class="tab-view">
        <div class="page-heading flex-layout justify-center items-center text-uppercase white-text">
            <h1>random</h1>
        </div>
        <br><br>
        <?php
        $algoName = "Random";
        $algoDesc = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti ducimus eum, ex corporis officia iste fuga natus molestias totam perferendis quas, animi esse placeat obcaecati fugit explicabo repellendus distinctio dolores.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta corporis dignissimos aperiam necessitatibus omnis. Numquam quod iure excepturi in, nesciunt, iste dicta neque iusto perferendis, atque eligendi molestiae ad tempore!";

        include "algoContent.php";
        ?>
        <br><br>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" integrity="sha384-9/D4ECZvKMVEJ9Bhr3ZnUAF+Ahlagp1cyPC7h5yDlZdXs4DQ/vRftzfd+2uFUuqS" crossorigin="anonymous"></script>
</body>

</html>