function showInput() {
    // document.getElementById('display').innerHTML = document.getElementById("user_input").value;

    var rows = document.getElementById("rows").value;
    var cols = document.getElementById("cols").value;

    var x = document.createElement("TABLE");
    x.setAttribute("id", "myTable");
    document.body.appendChild(x);

    for (i = 0; i < rows; i++) {
        var y = document.createElement("TR");
        y.setAttribute("id", "myTr" + String(i));
        document.getElementById("myTable").appendChild(y);
        for (j = 0; j < cols; j++) {
            var z = document.createElement("TD");
            var t = document.createTextNode("cell");
            z.appendChild(t);
            document.getElementById("myTr"+ String(i)).appendChild(z);
        }
    }
}