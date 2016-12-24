$(document).ready(function(){
    $("#red").click(function(){
        $("#placeholder").removeClass("yellowLight");
        $("#placeholder").removeClass("greenLight");
        $("#placeholder").addClass("redLight");
    });
    $("#green").click(function(){
        $("#placeholder").removeClass("redLight");
        $("#placeholder").removeClass("yellowLight");
        $("#placeholder").addClass("greenLight");
    });
    $("#yellow").click(function(){
        $("#placeholder").removeClass("redLight");
        $("#placeholder").removeClass("greenLight");
        $("#placeholder").addClass("yellowLight");
    });

    });