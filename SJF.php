<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shortest Job First</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/demo.css">    
</head>

<body>
    <section class="sa-algo-container">
        <div class="sa-containers">
            <div id="sjf-container">
                <div class="item">P No.</div>
                <div class="item">Arrival time</div>
                <div class="item">Burst time</div>

                <div class="item ans">Completion Time</div>
                <div class="item ans">Turn Around Time</div>
                <div class="item ans">Waiting Time</div>

            </div>
            <div id="sjf-container_IO">
                <div class="item">P No.</div>
                <div class="item">Total IO</div>
                <div class="item">Arrival time</div>
                <div class="item">Burst time</div>

                <div class="item ans">Completion Time</div>
                <div class="item ans">Turn Around Time</div>
                <div class="item ans">Waiting Time</div>
            </div>

            <div id="sjf-data">
                <label class="cen">0</label>
                <input type="number" class="cen">
                <input type="number" class="cen">
                <label class="ans"></label>
                <label class="ans"></label>
                <label class="ans"></label>
            </div>

            <div id="sjf-data_IO">
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
            <button id="sjf-add_row" class="btn">Add Row</button>
            <button id="sjf-delete_row" class="btn">Delete Row</button>
            <button id="sjf-compute" class="btn">Compute</button>
            <button id="sjf-reset" class="btn">Reset</button>

            <br><br>

            <!-- <button id="animate" class="btn">Animate</button> -->

            <div id="sjf-animateAll">
                <label class="start"></label>
                <div class="animation black-text">
                    <label class="process_animate">p0</label>
                </div>
            </div>

            <div class="avg black-text">
                <span class="b">Average Turn Around Time </span>
                <label class="a" id="sjf-avg_tat"></label>
                <span class="b">Average Waiting Time </span>
                <label class="a" id="sjf-avg_wat"></label>
            </div>
        </div>
    </section>
    
</body>
<script type="module" src="./js/sjf.js"></script>
</html>