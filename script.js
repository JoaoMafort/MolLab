function menu() {

    var x = document.getElementById("panel");  
    if (x.style.display === "none") {
        x.style.display = "flex";
    } else {
        x.style.display = "none";
    }
}