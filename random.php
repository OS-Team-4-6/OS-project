<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/algo2.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>PRA | Random</title>
</head>

<body>
    <br><br>
    <div id="algo" class="black-text">
        <div class="container">
            <div class="flex-layout">
                <strong class="input-field">Reference String:</strong><input class="input" type="text" style="width: 40%;" id="random-input">
                <strong class="input-field">Frames:</strong> <input class="input" type="number" style="width: 10%;" id="random-frames" min=1 max=10>
            </div>
            <div class="flex-layout items-center justify-center">
                <button class="submit white-text" id="random-submit">Submit</button>
            </div>
            <div>
                <br>
                <div class="flex-layout items-center justify-center">
                    <table id="random-table" class="table container text-center">
                    </table>
                </div>
                <br><br>
                <div class="flex-layout items-center justify-center">
                    <div id="random-summary" class="summary flex-layout justify-center items-center bold-text text-uppercase"></div>
                </div>
            </div>
        </div>
    </div>
    <script src="./js/random.js"></script>
</body>

</html>