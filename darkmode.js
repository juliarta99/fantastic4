var body = document.querySelector("body");
var mode = document.getElementById("mode");

mode.onclick = function (){
      body.classList.toggle("dark-mode");
if(document.body.classList.contains("dark-mode")){
      mode.src = "img/sun.png";
}else{
      mode.src = "img/moon.png";
}
};