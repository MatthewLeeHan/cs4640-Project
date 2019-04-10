function showInput() {

    // var cols = hidden value input from php (difference between dates)
    var cols = document.getElementById("diff").value;

    // document.getElementById('display').innerHTML = document.getElementById("user_input").value;

    var day1 = document.getElementById("row").value;
    var day2 = document.getElementById("col").value;

    var rows = '16';
    console.log(rows, cols);

    // var x = document.createElement("TABLE");
    // x.setAttribute("id", "myTable");
    var x = document.getElementById('myTable');
    
    // Create table header
    for (i = day1; i <= day2; i++){
        var d = document.createTextNode(i);
        var z = document.createElement("TD");
        z.setAttribute("id", "header");
        z.appendChild(d);
        document.getElementById("myTable").appendChild(z);
    }

    // Populate the table with 
    var timeArray = ['8:00AM','9:00AM','10:00AM','11:00AM','12:00PM','1:00PM','2:00PM','3:00PM','4:00PM','5:00PM','6:00PM','7:00PM','8:00PM','9:00PM','10:00PM','11:00PM','12:00AM'];
    for (i = 0; i < rows; i++) {
        var y = document.createElement("TR");
        y.setAttribute("id", "myTr" + String(i));
        document.getElementById("myTable").appendChild(y);
        for (j = 0; j < cols; j++) {
            var z = document.createElement("TD");
            var t = document.createTextNode(timeArray[i]);
            z.appendChild(t);
            document.getElementById("myTr"+ String(i)).appendChild(z);
        }
    }

}
