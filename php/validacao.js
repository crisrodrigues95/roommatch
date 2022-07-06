 function valida(){
    nome =(document.getElementById('nome'));
    telefone =(document.getElementById('telefone'));
    cpf  =(document.getElementById('cpf'));
    senha =(document.getElementById('password')); 
    senha2 =(document.getElementById('password2'));
    if ((nome.value).length < 10){
        alert("Nome muito curto");
        nome.focus();
        return false
        }
    if (cpf.value == ''){
        alert("Preencha o CPF");
        cpf.focus();
        return false
    
    }

    if ((cpf.value).length < 14){
        alert("CPF Inválido ou incompleto");
        cpf.focus();
        return false
    }
    if ((telefone.value).length <14 ) {
        alert("Telefone incompleto");
        telefone.focus();
        return false
    }
    if ((senha.value).length <6 ){
        alert('Senha deve ter no mínimo 6 caracteres')
        senha.focus();
        return false
    }
    if ((senha2.value) != (senha.value)){
        alert("As senhas devem ser iguais");
        senha2.focus();
        return false
    }
   
    }


