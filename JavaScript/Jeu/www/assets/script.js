function PassageJour() {
    document.getElementById("Page").style.backgroundColor = "white";
    document.getElementById("Titre").style.color = "black";
    var x = document.getElementsByTagName("img").item(0);
    x.setAttribute("src", "./assets/Images/Jour.png");
}

function PassageNuit() {
    document.getElementById("Page").style.backgroundColor = "black";
    document.getElementById("Titre").style.color = "white";
    var x = document.getElementsByTagName("img").item(0);
    x.setAttribute("src", "./assets/Images/Nuit.png");
}