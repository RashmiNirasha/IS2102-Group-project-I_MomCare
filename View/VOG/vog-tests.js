function confirmUpdate() {
    var response = window.confirm("Are you sure you want to update this record?");
    if (response == true) {
        return true;
    } else {
        return false;
    }
}

function confirmDelete() {
    var response = window.confirm("Are you sure you want to delete this record?");
    if (response == true) {
        return true;
    } else {
        return false;
    }
}

function editPopupFunction(note_id) {
    var popup = document.getElementById("popup");
    document.body.appendChild(popup);
    var cancelButton = form.querySelector("input[type='button'][value='Cancel']");
    cancelButton.addEventListener("click", function() {
        form.remove();
    });
}