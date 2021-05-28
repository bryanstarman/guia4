async function subirArchivo(){
	let formulario=new FormData();
	let archivo=document.getElementById("archivo");
	formulario.append("file",archivo.files[0]);
	fetch("logica/logica.php",{
		method:"post",
		body:formulario
	});
	alert("Documento Guardado");
}
function leer(){
	let xhr = new XMLHttpRequest();
	xhr.onreadystatechange=function(){
	if (this.readyState==4 && this.status==200) {
		document.getElementById('starman').innerHTML = this.responseText;

	}
};
	xhr.open("get","logica/cargar.php?archivo="+archivo);
	xhr.send();
}
function escribir(){
	let xhr = new XMLHttpRequest();
	let cambio=document.getElementById('texto').value;
	alert(cambio);
	xhr.onreadystatechange=function(){
	if (this.readyState==4 && this.status==200) {
		document.getElementById('starman').innerHTML = this.responseText;

	}
};
	xhr.open("get","logica/escribir.php?cambio="+cambio);
	xhr.send();
}
function guardar(){
	let xhr = new XMLHttpRequest();
	xhr.onreadystatechange=function(){
	if (this.readyState==4 && this.status==200) {
		document.getElementById('starman').innerHTML = this.responseText;

	}
};
	xhr.open("get","logica/guardar.php?archivo="+archivo);
	xhr.send();
}
async function verDatos() {
	let xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function () {
		if (this.readyState == 4 && this.status ==200) {
			document.getElementById('starman').innerHTML = this.responseText;

		} 
	};
	xhr.open("GET","logica/verDatos.php");
	xhr.send();

}
