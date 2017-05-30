'use strict'
function gettales(){
$.ajax({
    type:"POST",
    url:"../php/datadb.php",
    data:"name=John&location=Boston",
    succes: function(msg){
        alert("Прибыли данные" + msg);
    }
});
}
