
// Haalt elementen op
let allGames = document.getElementsByClassName("game");
let filters = document.getElementsByClassName("filter");


// Scrollt naar top van sitee
window.scrollTo(0, 0);
// Reset style na 1.5 sec
setInterval(function () {
    document.getElementsByTagName("body")[0].style.overflow = "auto";
    document.getElementsByTagName("main")[0].style.opacity = 1;
}, 1500);
// Zet de filters aa bij laden site
for (let i = 0; i < filters.length; i++){
    filters[i].checked = true;
}

let ZeldaMcFilter = document.getElementById("Action-Adventure");
//For loop om te kijken of de fiter aan of uit is
ZeldaMcFilter.onchange = function () {
    if (ZeldaMcFilter.checked === true) {
        for (let i = 0; i < allGames.length; i++) {
            if (allGames[i].dataset.category === "Action-Adventure"){
                allGames[i].style.display = "block";
            }
        }    
    }
    else {
        for (let i = 0; i < allGames.length; i++) {
            if (allGames[i].dataset.category === "Action-Adventure"){
                allGames[i].style.display = "none";
            }
        }     
    }
}

//For loop om te kijken of de fiter aan of uit is
let RacingFilter = document.getElementById("Racing");

    RacingFilter.onchange = function () {
    if (RacingFilter.checked === true) {
        for (let i = 0; i < allGames.length; i++) {
            if (allGames[i].dataset.category === "Racing"){
                allGames[i].style.display = "block";
            }
        }    
    }
    else {
        for (let i = 0; i < allGames.length; i++) {
            if (allGames[i].dataset.category === "Racing"){
                allGames[i].style.display = "none";
            }
        }     
    }
}

//For loop om te kijken of de fiter aan of uit is
let SportFilter = document.getElementById("Sport");

    SportFilter.onchange = function () {
    if (SportFilter.checked === true) {
        for (let i = 0; i < allGames.length; i++) {
            if (allGames[i].dataset.category === "Sport"){
                allGames[i].style.display = "block";
            }
        }    
    }
    else {
        for (let i = 0; i < allGames.length; i++) {
            if (allGames[i].dataset.category === "Sport"){
                allGames[i].style.display = "none";
            }
        }     
    }
}