<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <link rel="stylesheet" href="./css/style.css"> -->
    <link rel="stylesheet" href="./css/algo.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>SA | FCFS</title>
</head>

<body>
    <div class="main">
        <div class="table-con">
            <div class="table">
                <table id="fcfsTable" class="nameTable">
                    <tr>
                        <th>Process ID</th>
                        <th>Arrival Time</th>
                        <th>Burst Time</th>
                        <th>Completion Time</th>
                        <th>Turn Around Time</th>
                        <th>Waiting Time</th>
                    </tr>
                    <tr>
                        <td><input type="number" id="pid1" placeholder="pid1" value="1" disabled></td>
                        <td><input type="number" id="at1" placeholder="at1"></td>
                        <td><input type="number" id="bt1" placeholder="bt1"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </div>
            <div class='table-action-grp'>
                <div><button onclick="addFCFSRow()">
                        <div><i class="fas fa-plus-circle"></i></div>
                        <div>Add Row</div>
                    </button></div>
                <div><button id='deleteBtn' onclick="deleteFCFSRow()">
                        <i class="fas fa-times"></i>
                    </button></div>
            </div>
            <div class='submit-div'>
                <button onclick="FCFSfn()" id="btnFcfs" class="submit-btn">
                    Submit
                </button>
            </div>
            <div class="avg">
                <div id="att"> </div><br />
                <div id="awt"> </div>
            </div>
        </div>
    </div>

    <div id="FCFStimeline" style="height: max-content"></div>
    <div id="FCFSgantt" style="height: max-content;"></div>

    <script src='./js/fcfs.js'></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" integrity="sha384-9/D4ECZvKMVEJ9Bhr3ZnUAF+Ahlagp1cyPC7h5yDlZdXs4DQ/vRftzfd+2uFUuqS" crossorigin="anonymous"></script>
</body>

</html>