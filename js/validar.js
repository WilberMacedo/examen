var formulario = document.getElementById("formularioTest"),
    comodin = true;

formulario.addEventListener("submit", function(event){
    event.preventDefault();
 	var flag = false
	
	/*------    TEXTS  ------------*/
	
    var elementos = document.getElementsByClassName("input-text");
    for (var i in elementos){
		if	(elementos[i].name && elementos[i].name !== "item" && elementos[i].name !== "namedItem"){
			if (!elementos[i].value){
				alert("Debe de completar el campo " + elementos[i].name);
				comodin = false;
				return;
			}
		}
    }
	
	/*------    SELECTS  ------------*/
	
	var elemento = document.getElementsByName("estado")[0];
	if (elemento.value == "0"){
		alert("Debe seleccionar una Entidad Federativa");
		comodin = false;
		return;
	}
	
	/*------    Preguntas  ------------*/
	
	for (var index = 1 ; index < 35 ; index++){
		elementos = document.getElementsByName("pregunta"+index);
		flag = false;
		for (var i in elementos){
			if (elementos[i].checked){
				flag = true;
				break;
			}
		}

		if (!flag){
			alert("Debe seleccionar una opción de la Pregunta "+index);
			comodin = false;
			return;
		}
    }
	
	
    if (comodin){
        this.submit();
    }
}, false);

