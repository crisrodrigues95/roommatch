function valida(){
    cep =(document.getElementById('cep'));
    var fileInput =  document.getElementById('foto_perfil_imovel');
    var filePath = fileInput.value;

    if ((cep.value).length < 10){
        alert("CEP Incompleto");
        cep.focus();
        return false
        }
    if (cep.value == ''){
        alert("Preencha o CEP");
        cep.focus();
        return false
    }
    
    if (fileInput.files.length != 0){

        // Permitir tipo de arquivo
        var allowedExtensions = 
                /(\.jpg|\.jpeg|\.png)$/i;
          
        if (!allowedExtensions.exec(filePath)) {
            alert('Tipo de Arquivo invalido, somente jpg, jpeg ou png');
            fileInput.value = '';
            return false
        }
    



    }
    

    
    
          
    
      
    
 }