
function Saludar(){
    alert('Hola');
}
 
function ConsultarNombre(){
    let identificacion = document.getElementById("txtIdentificacion").value;
    document.getElementById("txtNombre").value = "";
 
    const xhttpr = new XMLHttpRequest();
    xhttpr.open('GET', 'https://apis.gometa.org/cedulas/' + identificacion, true)
    xhttpr.send();
 
    xhttpr.onload = ()=> {
        if(xhttpr.status === 200){
            const response = JSON.parse(xhttpr.response);
            document.getElementById("txtNombre").value = response.nombre;
        }
    };
   
}
