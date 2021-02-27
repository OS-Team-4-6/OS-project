<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SA | SJF</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/algo.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <div class="main">
        <div class="table-con">
            <div class="table">
                <table id="sjfTable" class="nameTable">
                    <tr>
                        <th>Process ID</th>
                        <th>Arrival Time</th>
                        <th>Burst Time</th>
                        <th>Completion Time</th>
                        <th>Turn Around Time</th>
                        <th>Waiting Time</th>
                    </tr>
                    <tr>
                        <td><input disabled type="number" id="spid1" placeholder="pid1" value='1'></td>
                        <td><input type="number" id="sat1" placeholder="at1"></td>
                        <td><input type="number" id="sbt1" placeholder="bt1"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </div>
            <div class='table-action-grp'>
                <div><button onclick="addSJFRow()">
                        <div><i class="fas fa-plus-circle"></i></div>
                        <div>Add Row</div>
                    </button></div>
                <div><button id='deleteBtn' onclick="deleteSJFRow()">
                        <i class="fas fa-times"></i>
                    </button></div>
            </div>
            <div class='submit-div'>
                <button onclick="SJFfn()" id="btnFcfs" class="submit-btn">
                    Submit
                </button>
            </div>
            <div class="avg">
                <div id="att"> </div><br />
                <div id="awt"> </div>
            </div>
        </div>
    </div>
    <div id="SJFtimeline" style="height: max-content"></div>
    <div id="SJFgantt" style="height: max-content;"></div>

    <script src="./js/sjf.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" integrity="sha384-9/D4ECZvKMVEJ9Bhr3ZnUAF+Ahlagp1cyPC7h5yDlZdXs4DQ/vRftzfd+2uFUuqS" crossorigin="anonymous"></script>
</body>

</html>