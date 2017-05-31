'use strict'
function gettales(){
$.ajax({
    type:"post",
    url:"php/datadb.php",
    success: function(data){
         $("#result").html(data);
    }
});
}
