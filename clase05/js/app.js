console.log("cargo...");
var datos=[];
document.getElementById('enviar').onclick=procesar;
cargarDatos();
imprimirFilas();
function procesar()
    {
      console.log("procesando...");
      //console.log(document.getElementById('apellido'));
      if (document.getElementById('idx').value=="")
      {
      datos.push([document.getElementById('apellido').value,document.getElementById('nombre').value,document.getElementById('fenac').value]);
    } else {
      var idx=document.getElementById('idx').value;
      datos[idx][0]=document.getElementById('apellido').value;
      datos[idx][1]=document.getElementById('nombre').value;
      datos[idx][2]=document.getElementById('fenac').value;
    }
      //document.getElementById('apellido').value;
      console.log(datos);
      imprimirFilas();
      limpiarForm();
    }
function imprimirFilas()
    {
    var salida="";
    datos.forEach((item, i) => {
      salida=salida+"<tr><td>"+i+"</td><td>"+item[0]+"</td><td>"+item[1]+"</td><td>"+item[2]+"</td><td><button type='button' class='editar' data-id='"+i+"'>Editar</button> </td></tr>"
    });
    document.getElementById('datos').innerHTML=salida;
    //console.log(document.getElementsByClassName('editar'));
    var btedit=document.getElementsByClassName('editar');
    for (var i = 0; i < btedit.length; i++) {
      btedit[i].onclick=editar;
    }
    }
function cargarDatos() {
  datos.push(['Rivé', 'Alex','2000-04-06']);
  datos.push(['Ramirez', 'Andres','2001-11-01']);
  datos.push(['Ozuna', 'Nancy','2001-02-28']);
  datos.push(['Armoa', 'Roberto','1999-08-15']);
}
function limpiarForm() {
  document.getElementById('idx').value="";
  document.getElementById('apellido').value="";
  document.getElementById('nombre').value="";
  document.getElementById('fenac').value="";
  document.getElementById('apellido').focus();
}


function editar(e)
{
console.log("editando");
var fila=e.target;
//console.log(fila.attributes["data-id"].value);
var idx=fila.attributes["data-id"].value;
document.getElementById('idx').value=idx;
document.getElementById('apellido').value=datos[idx][0];
document.getElementById('nombre').value=datos[idx][1];
document.getElementById('fenac').value=datos[idx][2];
document.getElementById('apellido').focus();
}
