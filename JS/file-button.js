const realFile = document.getElementById("archivo-real"),
btnFile = document.getElementById("btnAgregarArchivo"),
lblFile = document.getElementById("archivo-text");

btnFile.addEventListener('click', function(){
    realFile.click();
});

realFile.addEventListener('change', function () {
    if(realFile.value){
        lblFile.innerHTML = realFile.value.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];
    }else{
        lblFile.innerHTML = "Sin archivo";
    }
  });