function rr(pt, at, bt, n, timeQuantum) {
    n -= 1;
    var count, 
        time, 
        remain, 
        flag=0,
        temp = 0,  
        waitTime=0, 
        turnAroundTime=0;
    let rt = [],
        process = [],
        tat = [],
        wt = [];
        arrivalTime = [],
        burstTime = [];

    // for (let i = 0; i < n; i++) {
    //     for (let j = 0; j < n - (i + 1); j++) {
    //         if (at[j] > at[j + 1]) {
    //             temp = at[j];
    //             at[j] = at[j + 1];
    //             at[j + 1] = temp;

    //             temp = bt[j];
    //             bt[j] = bt[j + 1];
    //             bt[j + 1] = temp;

    //             temp_process = pt[j];
    //             pt[j] = pt[j + 1];
    //             pt[j + 1] = temp_process;
    //         }
    //     }
    // }
    remain = n;
    for(count = 0; count < n; count++)
        rt[count] = bt[count];
    for(time = 0, count = 0; remain != 0;) {
        if(rt[count] <= timeQuantum && rt[count] > 0) { 
            time += rt[count]; 
            rt[count] = 0; 
            flag = 1; 
        } 
        else if(rt[count] > 0) { 
            rt[count] -= timeQuantum; 
            time += timeQuantum; 
        } 
        if(rt[count] == 0 && flag == 1) { 
            remain--; 
            process.push(count + 1);
            tat.push(time - at[count]);
            wt.push(time - at[count] - bt[count]); 
            waitTime += time - at[count] - bt[count]; 
            turnAroundTime += time - at[count]; 
            flag = 0; 
        } 
        if(count == n-1) 
            count = 0; 
        else if(at[count + 1] <= time) 
            count++; 
        else 
            count = 0; 
    }
    for(count = 0; count < n; count++) {
        arrivalTime.push(at[process[count]-1]);
        burstTime.push(bt[process[count]-1]);
    }
    // Backend ends here
    document.getElementById('att').innerHTML = "Average Turn-around Time : " + turnAroundTime/n ;
    document.getElementById('awt').innerHTML = "Average Waiting Time : " + waitTime/n ;
    
    var Table = document.getElementById("rrTable");
    var rows = Table.querySelectorAll('tr');
    for(let i = 1; i < rows.length; i++) {
        rows[i].children[0].innerHTML = process[i-1];
        rows[i].children[1].innerHTML = '<input id="rat'+ i +'" placeholder="at'+ i +'" value='+arrivalTime[i-1]+'>';
        rows[i].children[2].innerHTML = '<input id="rbt'+ i +'" placeholder="bt'+ i +'" value='+burstTime[i-1]+'>';
        // rows[i].children[3].innerHTML = finish[i-1];
        rows[i].children[4].innerHTML = tat[i-1];
        rows[i].children[5].innerHTML = wt[i-1];
    }
}

var RRcounter = 2;
function RRfn() {
    let atimes = [];
    let btimes = [];
    let ptimes = [];
    for (let i = 1; i < RRcounter; i++) {
        if (document.getElementById('rat' + i) !== undefined && document.getElementById('rbt' + i) !== undefined) {
            ptimes.push(parseInt(document.getElementById("rpid" + i).value));
            atimes.push(parseInt(document.getElementById("rat" + (i)).value));
            btimes.push(parseInt(document.getElementById("rbt" + (i)).value));
        }
    }
    let timeQuantum = parseInt(document.getElementById('tq').value);
    rr(ptimes, atimes, btimes, RRcounter, timeQuantum);
}

function addRRRow() {
    $('#rrTable').append('<tr><td><input disabled type="number" id="rpid' + RRcounter + '" placeholder="pid' + RRcounter + '" value="' + RRcounter + '" /></td><td><input type="number" id="rat' + RRcounter + '" placeholder="at' + RRcounter + '" /></td><td><input type="number" id="rbt' + RRcounter + '" placeholder="bt' + RRcounter + '" /></td><td></td><td></td><td></td></tr>');
    RRcounter += 1;
}
  
function deleteRRRow() {
    var table = document.getElementById("rrTable");
    var rowCount = table.rows.length;

    if (rowCount > 2) {
        table.deleteRow(rowCount - 1);
        RRcounter -= 1;
    }
    else {
        alert("Cannot delete row");
    }
}