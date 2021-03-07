<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SA | Round Robin</title>
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/algo.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>

    <body>
        <div class="main">
            <div class="table-con">
                <div class="table">
                    <table id="rrTable" class="nameTable">
                        <tr>
                            <th>Process ID</th>
                            <th>Arrival Time</th>
                            <th>Burst Time</th>
                            <th>Completion Time</th>
                            <th>Turn Around Time</th>
                            <th>Waiting Time</th>
                        </tr>
                        <tr>
                            <td><input disabled type="number" id="rpid1" placeholder="pid1" value="1"></td>
                            <td><input type="number" id="rat1" placeholder="at1"></td>
                            <td><input type="number" id="rbt1" placeholder="bt1"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </div>
                <div class='table-action-grp'>
                    <div><button onclick="addRRRow()">
                            <div><i class="fas fa-plus-circle"></i></div>
                            <div>Add Row</div>
                        </button></div>
                    <div><button id='deleteBtn' onclick="deleteRRRow()">
                            <i class="fas fa-times"></i>
                        </button></div>
                </div>
                <div class='submit-div'>
                    <button onclick="RRfn()" id="btnFcfs" class="submit-btn">
                        Submit
                    </button>
                </div>
                <h3>Time Quantum: </h3><input id="tq" placeholder="tq">
                <div class="avg">
                    <div id="att"> </div>
                    <div id="awt"> </div>
                </div>
            </div>
        </div>
        <script src="./js/rr.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.15.1/js/all.js"
            integrity="sha384-9/D4ECZvKMVEJ9Bhr3ZnUAF+Ahlagp1cyPC7h5yDlZdXs4DQ/vRftzfd+2uFUuqS" crossorigin="anonymous">
        </script>
    </body>

</html>