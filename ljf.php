<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SA | LJF</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/algo.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <div class="main">
        <div class="table-con">
            <div class="table">
                <table id="ljfTable" class="nameTable">
                    <tr>
                        <td>Process ID</td>
                        <td>Arrival Time</td>
                        <td>Burst Time</td>
                        <td>Completion Time</td>
                        <td>Turn Around Time</td>
                        <td>Waiting Time</td>
                    </tr>
                    <tr>
                        <td><input disabled type="number" id="lpid1" placeholder="pid1" value='1'></td>
                        <td><input type="number" id="lat1" placeholder="at1"></td>
                        <td><input type="number" id="lbt1" placeholder="bt1"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </div>
            <div class='table-action-grp'>
                <div><button onclick="addLJFRow()">
                        <div><i class="fas fa-plus-circle"></i></div>
                        <div>Add Row</div>
                    </button></div>
                <div><button id='deleteBtn' onclick="deleteLJFRow()">
                        <i class="fas fa-times"></i>
                    </button></div>
            </div>
            <div class='submit-div'>
                <button onclick="LJFfn()" id="btnFcfs" class="submit-btn">
                    Submit
                </button>
            </div>
            <div class="avg">
                <div id="att"> </div><br />
                <div id="awt"> </div>
            </div>
        </div>
    </div>
    <div id="LJFtimeline" style="height: max-content"></div>
    <div id="LJFgantt" style="height: max-content;"></div>

    <script src="./js/ljf.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" integrity="sha384-9/D4ECZvKMVEJ9Bhr3ZnUAF+Ahlagp1cyPC7h5yDlZdXs4DQ/vRftzfd+2uFUuqS" crossorigin="anonymous"></script>
</body>

</html>