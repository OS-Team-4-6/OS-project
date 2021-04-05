<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First come first serve</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/demo.css">
    <link rel="stylesheet" href="./css/respo.css">
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Lobster&display=swap" rel="stylesheet">
</head>

<body>
    <section class="sa-algo-container">
        <div id="sa-containers">
            <div id="container">
                <div class="item">P No.</div>
                <div class="item">Arrival time</div>
                <div class="item">Burst time</div>

                <div class="item ans">Completion Time</div>
                <div class="item ans">Turn Around Time</div>
                <div class="item ans">Waiting Time</div>
            </div>

            <div id="container_IO">
                <div class="item">P No.</div>
                <div class="item">Total IO</div>
                <div class="item">Arrival time</div>
                <div class="item">Burst time</div>

                <div class="item ans">Completion Time</div>
                <div class="item ans">Turn Around Time</div>
                <div class="item ans">Waiting Time</div>
            </div>
            
            <div id="data">
                <label class="cen">0</label>
                <input type="number" class="cen">
                <input type="number" class="cen">
                <label class="ans"></label>
                <label class="ans"></label>
                <label class="ans"></label>
            </div>

            <div id="data_IO">
                <label class="cen">0</label>
                <input type="number" class="cen">
                <input type="number" class="cen">
                <div class="cen" style="overflow: auto;">
                    <input type="number" class="cen_IO" placeholder="BT" style="width:60px;">
                </div>
                <label class="ans"></label>
                <label class="ans"></label>
                <label class="ans"></label>
            </div>
            <br>
            <button id="add_row" class="btn">Add Row</button>
            <button id="delete_row" class="btn">Delete Row</button>
            <button id="compute" class="btn">Compute</button>
            <button id="reset" class="btn">Reset</button>
            <br><br>

            <!-- <button id="animate" class="btn">Animate</button> -->

            <div class="avg black-text">
                <span class="b">Average Turn Around Time </span>
                <label class="a" id="avg_tat"></label>
                <span class="b">Average Waiting Time </span>
                <label class="a" id="avg_wat"></label>
            </div>

            <div id="animateAll">
                <label class="start"></label>
                <div class="animation black-text">
                    <label class="process_animate">p0</label>
                </div>
            </div>

        </div>
    </section>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="module" src="./js/fcfs.js"></script>
<script src="./js/priority-queue.js"></script>

</html>