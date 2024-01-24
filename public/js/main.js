function displaySearch() {
    var header = document.getElementById("header"); 
    var x = document.getElementById("search-container");
    var y = document.getElementById("search-icon");
    var z = document.getElementById("close-icon");
    if (x.style.display == "block") {
        header.style.paddingBottom = "1.5rem"
        x.style.display = "none";
        y.style.display = "block";
        z.style.display = "none";
    } else {
        header.style.paddingBottom = "0.5rem"
        x.style.display = "block";
        y.style.display = "none";
        z.style.display = "block";
    }
}