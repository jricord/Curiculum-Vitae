function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

// function fullMenu() {
//   let main = document.querySelector("main");
//   main.style.display = "none";
//   document.querySelector(".icon").addEventListener("click", hideMenu);
// }

// document.querySelector(".icon").addEventListener("click", fullMenu);


// function hideMenu() {
//   let main = document.querySelector("main");
//   main.style.display = "flex";
//   document.querySelector(".icon").addEventListener("click", fullMenu);
// }

function fullMenu() {
  if (document.querySelector("main").style.display === "none") {
    document.querySelector("main").style.display = "flex";
    document.querySelector("footer").style.display = "flex";
  } else {
    document.querySelector("main").style.display = "none";
    document.querySelector("footer").style.display = "none";
  }
}
document.querySelector(".icon").addEventListener("click", fullMenu);