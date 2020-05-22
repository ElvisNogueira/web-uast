$(function(){
    var campoMin = $("#minInput");
    var campoSeg = $("#segInput");
    var intervalo, cronometroObj, min = 0, seg = 0, palavras = 0, letras = 0, pObj = 0, lObj = 0;

    //Eventos

    $("button").on("click", function () {
        $("#confJogo").fadeOut();
        $("#areaJogo").fadeIn();
        $("#areaJogo").css({display: "grid", justifyContent: "center"});
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
        min = campoMin.val();
        seg = campoSeg.val();

        pObj = $("#numPalavrasInput").val();
        lObj = $("#numLetrasInput").val();

        $("#cronometro").text(addZero(min)+":"+addZero(seg));
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
        $("#cronometro").text(addZero(min)+":"+addZero(seg));
    }

    function addZero (valor){
        if(valor<10)
            return "0"+valor;
        return valor;
    }

    function gameOver(){
        if(palavras>=pObj && letras>=lObj){
            $("#gameOver").fadeIn();
        }else{
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
        $("#gameOver>p").text("Você perdeu!");
    }
});