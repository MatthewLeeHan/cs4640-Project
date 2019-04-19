function showInput() {

    // document.getElementById('display').innerHTML = document.getElementById("user_input").value;

    var day1 = Number(document.getElementById("row").value);
    var day2 = Number(document.getElementById("col").value);
    var month1 = Number(document.getElementById("month1").value);
    var month2 = Number(document.getElementById("month2").value);
    var dates_in_month = [0, 31, 29, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];


    // var cols = hidden value input from php (difference between dates)
    if (month1 == month2){
        var cols = document.getElementById("diff").value;
    }
    else{
        var cols = (dates_in_month[month1] - day1) + day2 + 1;
    }

    var rows = '16';

    // var x = document.createElement("TABLE");
    // x.setAttribute("id", "myTable");
    var x = document.getElementById('myTable');
    x.setAttribute("style", "border-radius: 20px;");
    
    // Create table header

    var date_list = [];
    
    if (month1 < month2) {
        for (i = day1; i <= dates_in_month[month1]; i++){
            var d = document.createTextNode(i);
            date_list.push(d);
            var z = document.createElement("TD");
            z.setAttribute("id", "header1");
            z.setAttribute("style", "background-color:red; border-radius: 0px; border: none;");
            z.appendChild(d);
            document.getElementById("myTable").appendChild(z);

        }
        for (i = 1; i <= day2; i++){
            var d = document.createTextNode(i);
            date_list.push(d);
            var z = document.createElement("TD");
            z.setAttribute("id", "header2");
            z.setAttribute("style", "background-color:red; border-radius: 0px; border: none;");
            z.appendChild(d);
            document.getElementById("myTable").appendChild(z);
        }
    }
    else{
        for (i = day1; i <= day2; i++){
            // longgggg dumb if cases to put in month name in column header... probably a better way to do this but i was in a hurry LOL
            if(month1 == '4'){
                var x = 'April ' + i;
            }
            else if(month1 == '1'){
                var x = 'Jan ' + i;
            }
            else if(month1 == '2'){
                var x = 'Feb ' + i;
            }
            else if(month1 == '3'){
                var x = 'March ' + i;
            }
            else if(month1 == '5'){
                var x = 'May ' + i;
            }
            else if(month1 == '6'){
                var x = 'June ' + i;
            }
            else if(month1 == '7'){
                var x = 'July ' + i;
            }
            else if(month1 == '8'){
                var x = 'August ' + i;
            }
            else if(month1 == '9'){
                var x = 'Sept ' + i;
            }
            else if(month1 == '10'){
                var x = 'Oct ' + i;
            }
            else if(month1 == '11'){
                var x = 'Nov ' + i;
            }
            else if(month1 == '12'){
                var x = 'Dec ' + i;
            }
            // shouldn't hit this else statement... but just in case...
            else{
                var x = i;
            }
            var d = document.createTextNode(x);
            date_list.push(d);
            var z = document.createElement("TD");
            z.setAttribute("id", "header");
            z.setAttribute("style", "background-color:red; border-radius: 0px; border: none;");
            z.appendChild(d);
            document.getElementById("myTable").appendChild(z);
        }
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
            z.setAttribute("id", "myTD" + String(j) + String(i));
            z.setAttribute("style", "border: none;");
            z.appendChild(t);
            document.getElementById("myTr"+ String(i)).appendChild(z);
        }
    }
    availability_clicked("myTable");
}

function availability_clicked(table){
    document.querySelectorAll('#' + table + 'td')
    .forEach(e => e.addEventListener("click", function() {
        // Here, `this` refers to the element the event was hooked on
        e.style.color = "white";
        e.style.background = "#6495ED";
    }));
}