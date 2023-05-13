
function showEditForm(childId) {
    // Toggle the visibility of the edit form for the corresponding child row
    var editForm = document.getElementById('editForm_2' + childId);
    if (editForm.style.display === 'none') {
        editForm.style.display = 'table-row';
    } else {
        editForm.style.display = 'none';
    }
}
function myFunction() {
// Get the input field and filter value
var input = document.getElementById("myInput");
var filter = input.value.toUpperCase();

// Get the table and rows
var table = document.getElementById("myTable");
var rows = table.getElementsByTagName("tr");

// Loop through all rows, hide those that don't match the search query
for (var i = 0; i < rows.length; i++) {
    var childIdCell = rows[i].querySelector("#childid");

    // Check if the child ID cell contains the filter value
    if (childIdCell) {
        var childId = childIdCell.textContent || childIdCell.innerText;
        if (childId.toUpperCase().indexOf(filter) > -1) {
            rows[i].style.display = "";
        } else {
            rows[i].style.display = "none";
        }
    }
}
}
