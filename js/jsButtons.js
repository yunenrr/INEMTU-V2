/*
 * Función que permite cambiar el color de fondo
 * @param {string} section
 * @param {string} color
 * @returns {none}
 */
function changeColor(section)
{
    document.getElementById(section).style.backgroundColor=getColor();
}//Fin de la función

/*
 * Función que nos permite eliminar los cambios realizados
 */
function removeChange()
{
    document.getElementById('btnDev').style.backgroundColor='#24242A';
    document.getElementById('myMenu').style.backgroundColor='#24242A';
    document.getElementById('footer').style.backgroundColor='#24242A';
    document.getElementById('team').style.backgroundColor='#FFF';
}

/**
 * Función que permite cambiar el color de texto
 * @param {string} section
 * @param {string} color
 * @returns {none}
 */
function changeColorText(section,color)
{
    document.getElementById(section).style.color=color;
}//Fin de la función

/**
 * Función que retorna un color
 * */
function getColor()
{
   hexadecimal = new Array("0","1","2","3","4","5","6","7","8","9",
   "A","B","C","D","E","F");
   ramdonColor = "#";
   for (i=0;i<6;i++)
   {
      posarray = aleatorio(0,hexadecimal.length);
      ramdonColor += hexadecimal[posarray];
   }
   return ramdonColor;
}//Fin de la función

/*
 * @param {type} inferior
 * @param {type} superior
 * @returns {numPosibilidades|superior|aleatorio.inferior|inferior|aleatorio.superior|Number|aleat}
 */
function aleatorio(inferior,superior)
{
   numPosibilidades = superior - inferior;
   aleat = Math.random() * numPosibilidades;
   aleat = Math.floor(aleat);
   return parseInt(inferior) + aleat;
}//Fin de la función