let i = 0;
let j = 7;
var w = window.innerWidth;
const dots = document.querySelectorAll(".dot-container button");
const images = document.querySelectorAll(".image-container img");

let calculateBtn = document.getElementById("calculate-btn");
let result = document.getElementById("result");
let calculate = () => {
let c = Number(document.getElementById("cost").value);
let f = Number(document.getElementById("fee").value);
let t = Number(document.getElementById("time").value);
let duration = document.getElementById("duration").value;
let percent =
duration == "year" ? ((c - f)*(1.12**t)) : ((c - f)*(1.12**t)) / 12;
let total = percent + f;
let interest = total - c
result.innerHTML = `<div>Cost of Car: <span>${c.toFixed(2)}</span></div>
<div>Interest: <span>${interest.toFixed(2)}</span></div>
<div>Total Amount: <span>${total.toFixed(2)}</span></div>`;
};





calculateBtn.addEventListener("click", calculate);
window.addEventListener("load", calculate);
function next(){
  document.getElementById("content" + (i+1)).classList.remove("active");
  i = ( j + i + 1) % j;
  document.getElementById("content" + (i+1)).classList.add("active");
  indicator( i+ 1 );
}

function prev(){
  document.getElementById("content" + (i+1)).classList.remove("active");
  i = (j + i - 1) % j;
  document.getElementById("content" + (i+1)).classList.add("active");
  indicator(i+1);
}



function isChecked(){
  if(document.getElementById("my-checkbox").checked){
      document.getElementById("first").style.display = "flex";
  }
  else{
      document.getElementById("first").style.display = "none";
  }
}
function isChecked1(){
  if(document.getElementById("my-checkbox1").checked){
      document.getElementById("second").style.display = "flex";
  }
  else{
      document.getElementById("second").style.display = "none";
  }
}
function isChecked2(){
  if(document.getElementById("my-checkbox2").checked){
      document.getElementById("third").style.display = "flex";
  }
  else{
      document.getElementById("third").style.display = "none";
  }
}
function isChecked3(){
  if(document.getElementById("my-checkbox3").checked){
      document.getElementById("forth").style.display = "flex";
  }
  else{
      document.getElementById("forth").style.display = "none";
  }
}
function isChecked4(){
  if(document.getElementById("my-checkbox4").checked){
      document.getElementById("fifth").style.display = "flex";
  }
  else{
      document.getElementById("fifth").style.display = "none";
  }
}