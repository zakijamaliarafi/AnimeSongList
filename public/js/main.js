window.onresize = function() {
    if(window.innerWidth >= 1024){
        displaySearch('close');
    }
}

function displaySearch(condition) {
    var header = document.getElementById("header"); 
    var x = document.getElementById("mobile-search-container");
    var y = document.getElementById("search-icon");
    var z = document.getElementById("close-icon");
    if (condition == "close") {
        header.style.paddingBottom = "1.5rem"
        x.style.display = "none";
        y.style.display = "block";
        z.style.display = "none";
    } else {
        header.style.paddingBottom = "1rem"
        x.style.display = "block";
        y.style.display = "none";
        z.style.display = "block";
    }
}

function displayBar(condition) {
    var x = document.getElementById("bar-form");
    var y = document.getElementById("arrow-down");
    var z = document.getElementById("arrow-up");
    if (condition == "close") {
        x.style.display = "none";
        y.style.display = "block";
        z.style.display = "none";
    } else {
        x.style.display = "block";
        y.style.display = "none";
        z.style.display = "block";
    }
}