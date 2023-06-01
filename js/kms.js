
function ultrakill(){

    var newDiv = document.createElement("div");
    var newContent = document.createTextNode("ESTAS SEGURO QUE DESEA BORRAR?");
    newDiv.appendChild(newContent); //añade texto al div creado.

    var newButt = document.createElement("BUTTON");
    newText=document.createTextNode("Aceptar");
    newButt.appendChild(newText);

	var newButt2 = document.createElement("BUTTON");
    newText=document.createTextNode("Cancelar");
    newButt2.appendChild(newText);

// añade el elemento creado y su contenido al DOM

var currentDiv = document.getElementById("div");
 document.body.appendChild(newDiv);
 document.body.appendChild(newButt);
 document.body.appendChild(newButt2);


}
function eliminar(){
	lista = document.getElementsByTagName('div')[0];
	if (lista) {
		padre = lista.parentNode;
		padre.removeChild(lista);
	}
}