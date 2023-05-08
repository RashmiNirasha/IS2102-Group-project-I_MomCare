document.addEventListener("DOMContentLoaded", function() {
    myPatientSearch();
});

function myPatientSearch() {
    var searchInput = document.getElementById("myPatientsSearch").value;
    var encodedSearchInput = encodeURIComponent(searchInput);

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.querySelector(".myPatientsCardsDiv").innerHTML = this.responseText;
        }
    };
    xhr.open("GET", "vog-myPatientsSearchResult.php?search=" + searchInput, true);
    xhr.send();
}

function submitMyPatientsSearch() {
    myPatientSearch();
}

//all mothers search

document.addEventListener("DOMContentLoaded", function() {
    allMotherSearch();
});

function allMotherSearch() {
    var allMotherSearchInput = document.getElementById("allMotherSearch").value;
    var encodedSearchInput = encodeURIComponent(allMotherSearchInput);

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.querySelector(".allMotherCardsDiv").innerHTML = this.responseText;
        }
    };
    xhr.open("GET", "vog-motherSearchResult.php?search=" + allMotherSearchInput, true);
    xhr.send();
}
