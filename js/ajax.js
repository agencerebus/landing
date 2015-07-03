$(function() {  
$("#inscription-news").click(function(){
event.preventDefault();
var emailInput = $('#mail-news').val();  
console.log(emailInput);   
    $.ajax({
       url : 'process.php',
       type : 'POST',
       data: { 'email': emailInput},
       dataType : 'html',
       success : function(code_html, statut){
           $(code_html).appendTo("#commentaires"); // On passe code_html à jQuery() qui va nous créer l'arbre DOM !
       },

       error : function(resultat, statut, erreur){
         
       },

       complete : function(resultat, statut){

       }

    });
   
});
});