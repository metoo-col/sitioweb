function copiar(id_elemento) {/*Script para copiar la ip al portapapeles*/
  var aux = document.createElement("input");
  aux.setAttribute("value", document.getElementById(id_elemento).innerHTML);
  document.body.appendChild(aux);
  aux.select();
  document.execCommand("copy");
  document.body.removeChild(aux);
}
let listElements = document.querySelectorAll('.play');
listElements.forEach(listElement => {
  listElements.addEventListener('click', () => { 
   
   })
});
const slider = document.querySelector("#slider");
let sliderSection = document.querySelectorAll(".slider__section");
let sliderSectionLast = sliderSection[sliderSection.length -1];
const btnLeft = document.querySelector("#btn-left");
const btnRight = document.querySelector("#btn-right");

slider.insertAdjacentElement(`afterbegin`, sliderSectionLast);

function Next (){
let sliderSectionFirst = document.querySelectorAll(".slider__section")[0];
slider.style.marginLeft = "-200%";
slider.style.transition = "all 0.5s";
setTimeout(function(){
  slider.style.transition = "none";
  slider.insertAdjacentElement(`beforeend`,sliderSectionFirst);
  slider.style.marginLeft = "-100%";
}, 500);
}
btnRigth.addEventListener(`click`,function(){

  Next();
})
function Prev (){
  let sliderSection = document.querySelectorAll("-slider__section");
  let sliderSectionLast = sliderSection[sliderSection.length-1];
  slider.style.marginLeft = "0";
  slider.style.transition = "all 0.5s";
  setTimeout(function(){
    slider.style.transition = "none";
    slider.insertAdjacentElement(`beforeend`,sliderSectionFirst);
    slider.style.marginLeft = "-100%";
  }, 500);
  }
  btnleft.addEventListener(`click`,function(){
  
    prev();
  })
