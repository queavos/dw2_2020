
function cargarArray() {
  for (let i=0; i<11;i++ )
  {
  origen.push(Math.floor(Math.random() * (max - min)) + min);
  }
}

function ordenarArray(origen)
  {
    var aux=0;
    var auxArray=origen.slice();
    for (var i = 0; i < auxArray.length; i++) {
      for (var j = 0; j < auxArray.length; j++) {
        if (auxArray[i]<auxArray[j])
        {
          aux=auxArray[i];
          auxArray[i]=auxArray[j];
          auxArray[j]=aux;
        }

      }

    }
    return auxArray;
  }
  var origen=[];
  var destino=[];
  var min=1;
  var max=100;
  cargarArray();
  destino=ordenarArray(origen);
  console.log("--ORIGEN--");
  console.log(origen);
  console.log("--DESTINO--");
  console.log(destino);
