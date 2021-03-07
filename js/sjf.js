function SJF(num, mat) {
  // Arrange Arrival
  num = num - 1;
  // console.log(num);
  for (let i = 0; i < num; i++) {
    for (let j = 0; j < num - i - 1; j++) {
      if (mat[j][1] > mat[j + 1][1]) {
        for (let k = 0; k < 5; k++) {
          let temp = mat[j][k];
          mat[j][k] = mat[j + 1][k];
          mat[j + 1][k] = temp;
        }
      }
    }
  }
  // Completion Time
  let temp = 0,
    val = -1;
  mat[0][3] = mat[0][1] + mat[0][2];
  mat[0][5] = mat[0][3] - mat[0][1];
  mat[0][4] = mat[0][5] - mat[0][2];

  for (let i = 1; i < num; i++) {
    temp = mat[i - 1][3];
    let low = mat[i][2];
    for (let j = i; j < num; j++) {
      if (temp >= mat[j][1] && low >= mat[j][2]) {
        low = mat[j][2];
        val = j;
      }
    }
    mat[val][3] = temp + mat[val][2];
    mat[val][5] = mat[val][3] - mat[val][1];
    mat[val][4] = mat[val][5] - mat[val][2];
    for (let k = 0; k < 6; k++) {
      let tem = mat[val][k];
      mat[val][k] = mat[i][k];
      mat[i][k] = tem;
    }
  }
  //BackEnd Ends here

  var Table = document.getElementById("sjfTable");
  var rows = Table.querySelectorAll("tr");
  for (let i = 1; i < rows.length; i++) {
    rows[i].children[0].innerHTML =
      '<input id="spid' +
      i +
      '" placeholder="pid' +
      i +
      '" value=' +
      mat[i - 1][0] +
      ">";
    rows[i].children[1].innerHTML =
      '<input id="sat' +
      i +
      '" placeholder="at' +
      i +
      '" value=' +
      mat[i - 1][1] +
      ">";
    rows[i].children[2].innerHTML =
      '<input id="sbt' +
      i +
      '" placeholder="bt' +
      i +
      '" value=' +
      mat[i - 1][2] +
      ">";
    rows[i].children[3].innerHTML = mat[i - 1][3];
    rows[i].children[4].innerHTML = mat[i - 1][5];
    rows[i].children[5].innerHTML = mat[i - 1][4];
  }

  google.charts.load("current", { packages: ["timeline"] });

  const drawTimeLine = () => {
    var container = document.getElementById("SJFtimeline");
    var chart = new google.visualization.Timeline(container);
    var dataTable = new google.visualization.DataTable();

    dataTable.addColumn({ type: "string", id: "Process" });
    dataTable.addColumn({ type: "number", id: "Start" });
    dataTable.addColumn({ type: "number", id: "End" });

    let arr = [];

    for (let i = 1; i < rows.length; i++) {
      // console.log(AT[i-1], wt[i-1]);
      // console.log(ct[i-1]);
      arr.push([
        "P" + i,
        (mat[i - 1][1] + mat[i - 1][4]) * 1000,
        mat[i - 1][3] * 1000,
      ]);
    }
    dataTable.addRows(arr);
    chart.draw(dataTable);
  };
  google.charts.setOnLoadCallback(drawTimeLine);
  const drawGantt = () => {
    var container = document.getElementById("SJFgantt");
    var chart = new google.visualization.Timeline(container);
    var dataTable = new google.visualization.DataTable();

    dataTable.addColumn({ type: "string", id: "Position" });
    dataTable.addColumn({ type: "string", id: "Process" });
    dataTable.addColumn({ type: "number", id: "Start" });
    dataTable.addColumn({ type: "number", id: "End" });

    let arr = [];

    for (let i = 1; i < rows.length; i++) {
      // console.log(AT[i-1], wt[i-1]);
      // console.log(ct[i-1]);
      arr.push([
        "Process",
        "P" + i,
        (mat[i - 1][1] + mat[i - 1][4]) * 1000,
        mat[i - 1][3] * 1000,
      ]);
    }
    dataTable.addRows(arr);
    chart.draw(dataTable);
  };
  google.charts.setOnLoadCallback(drawGantt);
}
var SJFcounter = 2;
function SJFfn() {
  let mat = [];
  for (let i = 1; i < SJFcounter; i++) {
    if (
      document.getElementById("at" + i) !== undefined &&
      document.getElementById("sbt" + i) !== undefined
    ) {
      console.log(i);
      // mat[i][0] = i;
      mat.push([]);
      mat[i - 1][0] = parseInt(document.getElementById("spid" + i).value);
      mat[i - 1][1] = parseInt(document.getElementById("sat" + i).value);
      mat[i - 1][2] = parseInt(document.getElementById("sbt" + i).value);
    }
  }
  // console.log(mat.length);
  SJF(SJFcounter, mat);
}

function addSJFRow() {
  $("#sjfTable").append(
    '<tr><td><input disabled type="number" id="spid' +
      SJFcounter +
      '" placeholder="pid' +
      SJFcounter +
      '" value="' +
      SJFcounter +
      '"/></td><td><input type="number" id="sat' +
      SJFcounter +
      '" placeholder="at' +
      SJFcounter +
      '" /></td><td><input type="number" id="sbt' +
      SJFcounter +
      '" placeholder="bt' +
      SJFcounter +
      '" /></td><td></td><td></td><td></td></tr>'
  );
  SJFcounter += 1;
}

function deleteSJFRow() {
  var table = document.getElementById("sjfTable");
  var rowCount = table.rows.length;

  if (rowCount > 2) {
    table.deleteRow(rowCount - 1);
    SJFcounter -= 1;
  } else {
    alert("Cannot delete row");
  }
}
