let qu = 0;

function FCFS(processIDs, arrivalTime, burstTime) {
    let output = 'P\tAT\tBT\tCT\tTT\tWT\n',
        objCollection = [],
        PID = [],
        AT = [],
        BT = [],
        completion,
        ct = [],
        turnaround,
        tt = [],
        waiting,
        wt = [],
        att = [],
        awt = [];

    qu = parseInt(document.getElementById("at1").value);

    //Making an object to be sorted later.
    for (var x = 0; x < arrivalTime.length; x++)
        objCollection.push({ A: arrivalTime[x], B: burstTime[x], C: processIDs[x] });

    //Sorting begins with its corresponding Arrival Time and Burst Time
    //No interchanging of partner happens
    objCollection.sort(function (a, b) {
        return a.A - b.A;
    });

    for (var x = 0; x < (arrivalTime.length - 1); x++) {
        if (objCollection[x].A == objCollection[x + 1].A) {
            if (objCollection[x].C > objCollection[x + 1].C) {
                let temp = objCollection[x];
                objCollection[x] = objCollection[x + 1];
                objCollection[x + 1] = temp;
            }
        }
    }

    for (var x = 0; x < objCollection.length; x++) {
        //pushing to array AT and BT for later purposes.
        AT.push(objCollection[x].A);
        BT.push(objCollection[x].B);
        PID.push(objCollection[x].C);

        //calling these functions and store the values
        completion = CT(BT[x]);
        ct.push(completion);
        turnaround = TT(completion, AT[x]);
        tt.push(turnaround);
        waiting = WT(turnaround, BT[x]);
        wt.push(waiting);

        //storing values in output string, AT and BT array are used.
        output += `${x + 1}\t${AT[x]}\t${BT[x]}\t${completion}\t${turnaround}\t${waiting}\n`;

        //pushing to array att and awt for later purposes.
        att.push(turnaround);
        awt.push(waiting);
    }

    //Passing att and awt arrays to these functions
    output += `Average Turnaround Time: ${averageTT(att, objCollection.length)}\nAverage Waiting Time: ${averageWT(awt, objCollection.length)}`

    // Backend Ends here

    var finalAtt = averageTT(att, objCollection.length);
    var finalAwt = averageWT(awt, objCollection.length);

    document.getElementById("att").innerHTML = "Average Turn-around Time : " + finalAtt;
    document.getElementById("awt").innerHTML = "Average Waiting Time : " + finalAwt;

    var Table = document.getElementById("fcfsTable");
    var rows = Table.querySelectorAll('tr');
    for (let i = 1; i < rows.length; i++) {
        rows[i].children[0].innerHTML = '<input id="pid' + i + '" placeholder="pid' + i + '" value=' + PID[i - 1] + '>';
        rows[i].children[1].innerHTML = '<input id="at' + i + '" placeholder="at' + i + '" value=' + AT[i - 1] + '>';
        rows[i].children[2].innerHTML = '<input id="bt' + i + '" placeholder="bt' + i + '" value=' + BT[i - 1] + '>';
        rows[i].children[3].innerHTML = ct[i - 1];
        rows[i].children[4].innerHTML = tt[i - 1];
        rows[i].children[5].innerHTML = wt[i - 1];
    }

    google.charts.load('current', { 'packages': ['timeline'] });

    const drawTimeLine = () => {
        var container = document.getElementById('FCFStimeline');
        var chart = new google.visualization.Timeline(container);
        var dataTable = new google.visualization.DataTable();

        dataTable.addColumn({ type: 'string', id: 'Process' });
        dataTable.addColumn({ type: 'number', id: 'Start' });
        dataTable.addColumn({ type: 'number', id: 'End' });

        let arr = [];

        for (let i = 1; i < rows.length; i++) {
            // console.log(AT[i-1], wt[i-1]);
            // console.log(ct[i-1]);
            arr.push([
                'P' + i,
                (AT[i - 1] + wt[i - 1]) * 1000,
                (ct[i - 1]) * 1000
            ])
        }

        // dataTable.addColumn({ type: 'string', id: 'President' });
        // dataTable.addColumn({ type: 'date', id: 'Start' });
        // dataTable.addColumn({ type: 'date', id: 'End' });
        // dataTable.addRows([
        //   [ 'Washington', new Date(1789, 3, 30), new Date(1797, 2, 4) ],
        //   [ 'Adams',      new Date(1797, 2, 4),  new Date(1801, 2, 4) ],
        //   [ 'Jefferson',  new Date(1801, 2, 4),  new Date(1809, 2, 4) ]]);

        dataTable.addRows(arr);
        chart.draw(dataTable);
    }
    
    google.charts.setOnLoadCallback(drawTimeLine);
    const drawGantt = () => {
        var container = document.getElementById('FCFSgantt');
        var chart = new google.visualization.Timeline(container);
        var dataTable = new google.visualization.DataTable();

        dataTable.addColumn({ type: 'string', id: 'Position' });
        dataTable.addColumn({ type: 'string', id: 'Process' });
        dataTable.addColumn({ type: 'number', id: 'Start' });
        dataTable.addColumn({ type: 'number', id: 'End' });

        let arr = [];

        for (let i = 1; i < rows.length; i++) {
            // console.log(AT[i-1], wt[i-1]);
            // console.log(ct[i-1]);
            arr.push([
                'Process',
                'P' + i,
                (AT[i - 1] + wt[i - 1]) * 1000,
                (ct[i - 1]) * 1000
            ])
        }

        // dataTable.addColumn({ type: 'string', id: 'President' });
        // dataTable.addColumn({ type: 'date', id: 'Start' });
        // dataTable.addColumn({ type: 'date', id: 'End' });
        // dataTable.addRows([
        //   [ 'Washington', new Date(1789, 3, 30), new Date(1797, 2, 4) ],
        //   [ 'Adams',      new Date(1797, 2, 4),  new Date(1801, 2, 4) ],
        //   [ 'Jefferson',  new Date(1801, 2, 4),  new Date(1809, 2, 4) ]]);

        dataTable.addRows(arr);
        chart.draw(dataTable);
    }
    google.charts.setOnLoadCallback(drawGantt);

    return output;
}

//Calculating for completion time.
function CT(bt) {
    //qu must be globally scoped so that it starts initially at zero
    //and incrementing it every function invocation.
    qu += bt;
    return qu;
}

//Calculating for turnaround time.
function TT(ct, at) {
    return ct - at;
}

//calculating for waiting time.
function WT(tt, bt) {
    return tt - bt;
}

//calculating the average turnaround time and average waiting time
//using the reduce method to find the sum of its array and dividing
//by the number of elements in the array.
function averageTT(ttValues, noOfValues) {
    return ttValues.reduce(function (total, num) {
        return total + num;
    }) / noOfValues;
}

function averageWT(wtValues, noOfValues) {
    return wtValues.reduce(function (total, num) {
        return total + num;
    }) / noOfValues;
}

var FCFScounter = 2;
function FCFSfn() {
    let ptimes = [];
    let atimes = [];
    let btimes = [];
    for (let i = 1; i < FCFScounter; i++) {
        if (document.getElementById('at' + i) !== undefined && document.getElementById('bt' + i) !== undefined) {
            // console.log(i);
            ptimes.push(parseInt(document.getElementById("pid" + i).value));
            atimes.push(parseInt(document.getElementById("at" + i).value));
            btimes.push(parseInt(document.getElementById("bt" + i).value));
        }
    }
    qu = 0;
    console.log(FCFS(ptimes, atimes, btimes));
}

function addFCFSRow() {
    $('#fcfsTable').append('<tr><td><input type="number" disabled id="pid' + FCFScounter + '" placeholder="pid' + FCFScounter + '" value="' + FCFScounter + '"/></td><td><input type="number" id="at' + FCFScounter + '" placeholder="at' + FCFScounter + '" /></td><td><input type="number" id="bt' + FCFScounter + '" placeholder="bt' + FCFScounter + '" /></td><td></td><td></td><td></td></tr>');
    FCFScounter += 1;
}

function deleteFCFSRow() {
    var table = document.getElementById("fcfsTable");
    var rowCount = table.rows.length;
    if(rowCount > 2) {
        table.deleteRow(rowCount - 1);
        FCFScounter -= 1;
    }
    else{
        alert("Cannot delete row");
    }
}