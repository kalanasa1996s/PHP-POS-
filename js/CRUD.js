

var rIndex,
    table = document.getElementById("table");


function addRow() {

    var fname = document.getElementById('fname').value;
    var lname = document.getElementById('lname').value;
    var nic = document.getElementById('nic').value;
    var address = document.getElementById('address').value;
    var cusid = document.getElementById('cusid').value;
    var telno = document.getElementById('telno').value;


    var table = document.getElementsByTagName('table')[0];


    var newRow = table.insertRow(table.rows.length /1);


    var cel1 = newRow.insertCell(0);
    var cel2 = newRow.insertCell(1);
    var cel3 = newRow.insertCell(2);
    var cel4 = newRow.insertCell(3);
    var cel5 = newRow.insertCell(4);
    var cel6 = newRow.insertCell(5);



    cel1.innerHTML = fname;
    cel2.innerHTML = lname;
    cel3.innerHTML = nic;
    cel4.innerHTML = address;
    cel5.innerHTML = cusid;
    cel6.innerHTML = telno;


}


function myFunction() {
    var x = document.getElementById("table");
    if (x.length > 0) {
        x.remove(x.length-1);
    }
}


