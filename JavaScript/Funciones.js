
function mover(parametro, valor){

    console.log("parametro:" + parametro);
    let vh =document.getElementById(parametro);
   
    
    let textico = vh.style.left;
    //console.log(parseInt(textico.replace("px,""))+10);







    vh.style.left = parseInt (textico.replace("px",""))+10;  
}

