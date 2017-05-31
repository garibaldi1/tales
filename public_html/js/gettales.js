'use strict'
function gettales(){
$.ajax({
    type:"post",
    url:"php/datadb.php",
    succes: function(data){
         $("#result").html(data);
    }
});
}
