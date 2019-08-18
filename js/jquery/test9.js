var rIndex,
    table = document.getElementById("table");

// check the empty input
function checkEmptyInput() {
    var isEmpty = false,
        fname = document.getElementById("fname").value,
        lname = document.getElementById("lname").value,
        nic = document.getElementById("nic").value;
        address = document.getElementById("address").value;
        telno = document.getElementById("telno").value;

    if (fname === "") {
        alert("First Name Connot Be Empty");
        isEmpty = true;
    } else if (lname === "") {
        alert("Last Name Connot Be Empty");
        isEmpty = true;
    } else if (nic === "") {
        alert("Nic Connot Be Empty");
        isEmpty = true;
    }else if (address === "") {
        alert("address Connot Be Empty");
        isEmpty = true;

    }else if (telno === "") {
        alert("Tel No Connot Be Empty");
        isEmpty = true;

    return isEmpty;
}

// add Row
function addHtmlTableRow() {


}
    // get the table by id
    // create a new row and cells
    // get value from input text
    // set the values into row cell's
    if (!checkEmptyInput()) {
        var newRow = table.insertRow(table.length),
            cell1 = newRow.insertCell(0),
            cell2 = newRow.insertCell(1),
            cell3 = newRow.insertCell(2),
            cell4 = newRow.insertCell(3),
            cell5 = newRow.insertCell(4),
            fname = document.getElementById("fname").value,
            lname = document.getElementById("lname").value,
            nic = document.getElementById("nic").value;
            address = document.getElementById("address").value;
            telno = document.getElementById("telno").value;

        cell1.innerHTML = fname;
        cell2.innerHTML = lname;
        cell3.innerHTML = nic;
        cell4.innerHTML = address;
        cell5.innerHTML = telno;
        // call the function to set the event to the new row
        selectedRowToInput();
    }
}

// display selected row data into input text
function selectedRowToInput() {

    for (var i = 1; i < table.rows.length; i++) {
        table.rows[i].onclick = function () {
            // get the seected row index
            rIndex = this.rowIndex;
            document.getElementById("fname").value = this.cells[0].innerHTML;
            document.getElementById("lname").value = this.cells[1].innerHTML;
            document.getElementById("nic").value = this.cells[2].innerHTML;
            document.getElementById("address").value = this.cells[2].innerHTML;
            document.getElementById("telno").value = this.cells[2].innerHTML;
        };
    }
}

selectedRowToInput();



function removeSelectedRow() {
    table.deleteRow(rIndex);
    // clear input text
    document.getElementById("fname").value = "";
    document.getElementById("lname").value = "";
    document.getElementById("nic").value = "";
    document.getElementById("address").value = "";
    document.getElementById("telno").value = "";
}