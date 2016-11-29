function changeColor(section)
{document.getElementById(section).style.backgroundColor=getColor();}
function removeChange(){document.getElementById('myMenu').style.backgroundColor='#24242A';document.getElementById('team').style.backgroundColor='#FFF';}
function changeColorText(section,color)
{document.getElementById(section).style.color=color;}
function getColor()
{hexadecimal=new Array("0","1","2","3","4","5","6","7","8","9","A","B","C","D","E","F");ramdonColor="#";for(i=0;i<6;i++)
{posarray=aleatorio(0,hexadecimal.length);ramdonColor+=hexadecimal[posarray];}
return ramdonColor;}
function aleatorio(inferior,superior)
{numPosibilidades=superior-inferior;aleat=Math.random()*numPosibilidades;aleat=Math.floor(aleat);return parseInt(inferior)+aleat;}