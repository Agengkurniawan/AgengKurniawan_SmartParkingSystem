function toggleText(textId, button) {
    var x = document.getElementById(textId);
    if (x.style.display === "block" || x.style.display === "") {
        x.style.display = "none";
        button.innerHTML = "Read More";
    } else {
        x.style.display = "block";
        button.innerHTML = "Read Less";
    }
}
