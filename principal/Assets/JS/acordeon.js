'use strict'
const bloque2 = document.querySelectorAll('.bloque2')
const bloque = document.querySelectorAll('.bloque')
const h2 = document.querySelectorAll('.h2')

//cuando haga click en las etiquetas h2,
    //quitar la clase activo de todos los bloques 
    //vamos a añadir la clase activo al bloque con la posicion del h2

    //recorrer todos los h2
h2.forEach((cadaH2 , i)=>{
    //asigando un click a cada h2
h2[i].addEventListener('click',()=>{
    //recorrer todos los bloques
  
    bloque.forEach((cadaBloque , i)=>{
        //quitamos la clase activa de todos los bloques
        bloque[i].classList.remove('activo')
    })
    
    // Añadiendo la clase activo al bloque cuya posicion sea igual al del h2
    //(linea 12)
    bloque[i].classList.add('activo')
    
   
})

})

