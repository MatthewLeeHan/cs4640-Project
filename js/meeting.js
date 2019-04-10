function showInput() {
    // document.getElementById('display').innerHTML = document.getElementById("user_input").value;

    // var rows = document.getElementById("rows").value;
    // var cols = document.getElementById("cols").value;
    // var rows = document.getElementById('row').value;
    var rows = '16';
    var cols = document.getElementById('col').value;
    console.log(rows, cols);

    // var x = document.createElement("TABLE");
    // x.setAttribute("id", "myTable");
    var x = document.getElementById('myTable');

    var timeArray = ['8:00AM','9:00AM','10:00AM','11:00AM','12:00PM','1:00PM','2:00PM','3:00PM','4:00PM','5:00PM','6:00PM','7:00PM','8:00PM','9:00PM','10:00PM','11:00PM','12:00AM'];
    for (i = 0; i < rows; i++) {
        var y = document.createElement("TR");
        y.setAttribute("id", "myTr" + String(i));
        document.getElementById("myTable").appendChild(y);
        for (j = 0; j < cols; j++) {
            var z = document.createElement("TD");
            var t = document.createTextNode("8:00");
            z.appendChild(t);
            document.getElementById("myTr"+ String(i)).appendChild(z);
        }
    }
}
