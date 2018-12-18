function PassageJour() {
    document.getElementById("Page").style.backgroundColor = "white";
    document.getElementById("Titre").style.color = "black";
    document.getElementById("Reveil").style.color = "white";
    document.getElementById("Reveil").style.backgroundColor = "black"; 
    document.getElementById("Couche").style.color = "white";
    document.getElementById("Couche").style.backgroundColor = "black";
    var x = document.getElementsByTagName("img").item(0);
    x.setAttribute("src", "./assets/Images/Jour.png");
}

function PassageNuit() {
    document.getElementById("Page").style.backgroundColor = "black";
    document.getElementById("Titre").style.color = "white";
    document.getElementById("Reveil").style.color = "black";
    document.getElementById("Reveil").style.backgroundColor = "white"; 
    document.getElementById("Couche").style.color = "black";
    document.getElementById("Couche").style.backgroundColor = "white";
    var x = document.getElementsByTagName("img").item(0);
    x.setAttribute("src", "./assets/Images/Nuit.png");
}