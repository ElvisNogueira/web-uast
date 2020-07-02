$(function () {
    $('#campoCpf').mask('999.999.999-99');
    $('#campoTelefone').mask('(99)99999-9999');
    $('#campoCep').mask('99999-999');
    $('#salarioCampo').mask('000.000.000.000.000,00', {reverse: true});

    $('#campoCep').on("keyup",function () {
        cep = $('#campoCep').val();

        if(cep.length == 9){
            cep = cep.replace("-","")
            $.get("https://viacep.com.br/ws/"+cep+"/json/",function (data,status) {
                $('#campoRua').val(data.logradouro);
                $('#campoBairro').val(data.bairro);
                $('#campoCidade').val(data.localidade);
                $('#comboUf option').filter(function () {
                    return this.text == $('#comboUf').val();
                }).attr('selected', false)
                $('#comboUf option').filter(function() {
                    return this.text == data.uf;
                }).attr('selected', true);
            });

        }
    });
});