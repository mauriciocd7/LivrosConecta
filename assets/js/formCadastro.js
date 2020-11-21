$(document).ready(function () {
  
    $('#formCadastro').validate({
        rules: {
            nome: {
                required: true,
                minlength: 3
            },
            cpf: {
                required: true,
                minlength: 11
            },
            email: {
                required: true,
                email: true
            },
            telefone: {
                minlength: 11,
                maxlength: 14
            },
            celular: {
                required: true,
                minlength: 9,
                maxlength: 14
            },
            cep: {
                required: true,
                minlength: 8,
                maxlength: 9
            },
            password: {
                required: true
            },
            password_confirmation: {
                required: true,
                equalTo: "#password"
            },
            terms_of_use: "required"
        },
        messages: {
            nome: {
                required: "O campo nome é obrigatório.",
                minlength: "O campo nome deve conter no mínimo 3 caracteres."
            },
            cpf: {
                required: "O campo cpf é obrigatório.",
                minlength: "O campo cpf deve conter no mínimo 11 caracteres."
            },
            email: {
                required: "O campo email é obrigatório.",
                email: "O campo email deve conter um email válido."
            },
            telefone: {
                minlength: "O campo telefone deve conter um número válido.",
                maxlength: "O campo telefone deve conter um número válido."
            },
            celular: {
                required: "O campo celular é obrigatório.",
                minlength: "O campo celular deve conter um número válido.",
                maxlength:  "O campo celular deve conter um número válido."
            },
            cep: {
                required: "O campo cep é obrigatório.",
                minlength: "O campo cep deve conter um número válido.",
                maxlength:  "O campo cep deve conter um número válido."
            },


            password: {
                required: "O campo senha é obrigatório."
            },
            password_confirmation: {
                required: "O campo confirmação de senha é obrigatório.",
                equalTo: "O campo confirmação de senha deve ser identico ao campo senha."
            },
            terms_of_use: "Para se cadastrar você deve aceitar os termos de uso."
        }
    });
});


$("#cep").focusout(function(){
    //Início do Comando AJAX
    $.ajax({
        //O campo URL diz o caminho de onde virá os dados
        //É importante concatenar o valor digitado no CEP
        url: 'https://viacep.com.br/ws/'+$(this).val()+'/json/unicode/',
        //Aqui você deve preencher o tipo de dados que será lido,
        //no caso, estamos lendo JSON.
        dataType: 'json',
        //SUCESS é referente a função que será executada caso
        //ele consiga ler a fonte de dados com sucesso.
        //O parâmetro dentro da função se refere ao nome da variável
        //que você vai dar para ler esse objeto.
        success: function(resposta){
            //Agora basta definir os valores que você deseja preencher
            //automaticamente nos campos acima.
            $("#logradouro").val(resposta.logradouro);
            $("#complemento").val(resposta.complemento);
            $("#bairro").val(resposta.bairro);
            $("#cidade").val(resposta.localidade);
            $("#uf").val(resposta.uf);
            //Vamos incluir para que o Número seja focado automaticamente
            //melhorando a experiência do usuário
            $("#numero").focus();
        }
    });
});
