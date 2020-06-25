$(function(){
    var mostrandoSubAluno = false;
    var mostrandoSubConta = false;
    var mostrandoSubFinanca = false;
    var mostrandoSubFuncionario = false;

    var mostrandoMenuUser = false;
    console.log("init");

    $("#subMenuAluno").css("display","none");
    $("#subMenuConta").css("display","none");
    $("#subMenuFinanca").css("display","none");
    $("#subMenuFuncionarios").css("display","none");



    $("#alunoMenu").on("click",function(){
        mostrandoSubAluno = showHide($("#subMenuAluno"),mostrandoSubAluno, $("#alunoMenu"));
    });

   $("#contaMenu").on("click",function(){
       mostrandoSubConta = showHide($("#subMenuConta"),mostrandoSubConta, $("#contaMenu"));
   });

   $("#financaMenu").on("click",function(){
       mostrandoSubFinanca = showHide($("#subMenuFinanca"),mostrandoSubFinanca, $("#financaMenu"));
   });

   $("#funcionarioMenu").on("click",function(){
       mostrandoSubFuncionario = showHide($("#subMenuFuncionarios"),mostrandoSubFuncionario, $("#funcionarioMenu"));
   });

   $("#usuario").on("click",function () {
        if (!mostrandoMenuUser){
            $("#menuLogout").fadeIn(500);
            mostrandoMenuUser = true;
        }else{
            $("#menuLogout").fadeOut(500);
            mostrandoMenuUser = false;
        }
   });

    function showHide(element, flagShow, botao) {
        if (!flagShow){
            element.fadeIn(500);
            flagShow = true;
            botao.css({"background-color":"cornflowerblue"});
            return flagShow;
        }else{
            element.fadeOut(500);
            flagShow = false;
            botao.css({"background-color":"#262525"});
            return flagShow;
        }
    }

});