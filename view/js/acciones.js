$(document).ready(function(e){

    
    $("img[id=primeraimagen]").click(function(e){
        e.preventDefault();
        $("div[id=primeracolumna]").prop("hidden", false);
        $("div[id=segundacolumna]").prop("hidden", true);
        $("div[id=terceracolumna]").prop("hidden", true);

        $("div[id=col1img]").addClass("fondeado");
        $("div[id=primeracolumna]").addClass("bordeado");

        $("div[id=col2img]").removeClass("fondeado");
        $("div[id=segundacolumna]").removeClass("bordeado");
        
    $("div[id=col3img]").removeClass("fondeado");
    $("div[id=terceracolumna]").removeClass("bordeado");



   })
   $("img[id=segundaimagen]").click(function(e){
    e.preventDefault();
    $("div[id=primeracolumna]").prop("hidden", true);
    $("div[id=segundacolumna]").prop("hidden", false);
    $("div[id=terceracolumna]").prop("hidden", true);


    $("div[id=col2img]").addClass("fondeado");
    $("div[id=segundacolumna]").addClass("bordeado");

    $("div[id=col1img]").removeClass("fondeado");
    $("div[id=primeracolumna]").removeClass("bordeado");

    $("div[id=col3img]").removeClass("fondeado");
    $("div[id=terceracolumna]").removeClass("bordeado");

})
$("img[id=terceraimagen]").click(function(e){
    e.preventDefault();
    $("div[id=primeracolumna]").prop("hidden", true);
    $("div[id=segundacolumna]").prop("hidden", true);
    $("div[id=terceracolumna]").prop("hidden", false);

    $("div[id=col3img]").addClass("fondeado");
    $("div[id=terceracolumna]").addClass("bordeado");

    $("div[id=col1img]").removeClass("fondeado");
    $("div[id=primeracolumna]").removeClass("bordeado");
    $("div[id=col2img]").removeClass("fondeado");
    $("div[id=segundacolumna]").removeClass("bordeado");


}) 
   
               
});