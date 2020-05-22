$(function(){
    var intervalo, cronometroObj, min = 0, seg = 15, 
        palavras = 0, letras = 0, pObj = 5, lObj = 25,
        nivel = 1;
    $("#cronometro").text(addZero(min)+":"+addZero(seg));
    $("#ObjLetras").val(lObj);
    $("#ObjPalavras").val(pObj);
    //Eventos

    $("#areaJogo").one("click", function () {
        init();
    });

    $("#cxTexto").on("keydown", function () {
        palavras = $("#cxTexto").val().split(" ").length;
        letras = $("#cxTexto").val().replace(/ /g,"").length;
        $("#letras").val(letras);
        $("#palavras").val(palavras);

    });

    //Métodos e funções

    function init(){
        intervalo = setInterval(contar,1000);
    }

    function contar(){
        seg--;
        if(seg<0){
            seg = 59;
            min--;
        } 
        if(min<0){
            clearInterval(intervalo);
            min = 0;
            seg = 0;
            $("#cronometro").css({color:"red"});
            $("#cxTexto").attr("disabled", true);
            gameOver();
        }
        verificarPontos();
        
        
    }

    function addZero (valor){
        if(valor<10)
            return "0"+valor;
        return valor;
    }

    function verificarPontos(){
        if(palavras>=pObj && letras>=lObj){
            seg+=5;
            pObj+=3;
            lObj+=15;
            nivel++;
            $("#nivel").val(nivel);
            $("#cronometro").text(addZero(min)+":"+addZero(seg)+" +5s");
        }else{
            $("#cronometro").text(addZero(min)+":"+addZero(seg));
        }
    }

    function gameOver(){
        if((palavras>=pObj && letras>=lObj) || nivel>1){
            $("#gameOver").fadeIn();
            $("#gameOver>p").text("Parabéns você chegou até o nível "+nivel+"! Você conseguiu escrever "+palavras+" palavras e "+letras+" letras.");
        }else if(palavras<pObj && letras<lObj && nivel == 1){
            perdeu();
        }
        
    }
    
    function perdeu(){
        $("#gameOver").fadeIn();
        $("#gameOver").css({
            background: "rgb(238, 106, 106)",
            borderTop: "solid red 1px",
            borderBottom: "solid red 1px",
        });
        $("#gameOver>p").text("Infelizmente não foi dessa vez! Você conseguiu escrever apenas "+palavras+" e "+letras+" letras.");
    }

    function eliminarRepeticoes(){
        
    }
});