$(function() {  
$("#news-inscription").submit(function(){
var emailInput = $('#mail-news').val();  
    $.ajax({
       url : 'process.php',
       type : 'POST',
       data: { 'email': emailInput},
       dataType : 'html',
       success : function(statut){
           $('.succeed').html("<span>Votre email a bien été ajouté</span>").hide().fadeIn( 'slow' );
       },

       error : function(resultat, statut, erreur){
         
       },

       complete : function(resultat, statut){

       }

    });
   return false;
});
});