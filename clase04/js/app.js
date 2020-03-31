console.log("funciona");
var lista=[];
var frutas= ["naranja", 2, "manzana"];
console.log(frutas);
console.log(frutas[0]);
console.log(frutas.length);
frutas[1]="frutilla";
console.log(frutas);
frutas.push("pera");
console.log(frutas);
frutas.push("sandia","melon");
console.log(frutas);
frutas.unshift("durazno","ciruela");
console.log(frutas);
//
console.log(frutas.sort());
var numeros=[1,2,3,40,100,11,101];
console.log(numeros.sort());
//
 for (var i=0;i<frutas.length; i++ )
  {
    console.log(frutas[i]);
  }
  console.log(i);
////////// funciones
var a=3;
var b= 12;
function sumar(a,b)
    {
      return a+b;
    }
console.log(sumar(a,b));

var suma= function (a,b) { return a+b; }
console.log(suma(a,b));

var flecha = (a,b) => { return a+b;   }
console.log(flecha(a,b));
var x = y = z = 5;
console.log(y);
///////////////////
console.log("con funcion flecha");
frutas.forEach((item, i) => {
    console.log("index = "+i+" valor = "+item);
});
console.log("con funcion anonima");
frutas.forEach( function (item, i){
  console.log("index = "+i+" valor = "+item);
 } );

 console.log("con funcion clasica");
function imrpimir(i, item) { console.log("index = "+i+" valor = "+item);  }
frutas.forEach( function (item, i) {  imrpimir(i, item);   });
// esto no funciona
// console.log("sin funcion ");
// frutas.forEach(console.log("index = "+i+" valor = "+item));
// esto no funciona
