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

function getathors(){
    $.ajax({
       type:"post",
       url:"php/dataauthors.php",
       success: function(data){
           $("#result").html(data);
       }
    });
}

function getstory(){
    $.ajax({
       type:"post",
       url:"php/datastory.php",
       success: function(data){
           $("#result").html(data);
       }
    });
}

function getpoetry(){
    $.ajax({
        type:"post",
        url:"php/datapoetry.php",
        success: function(data){
            $("#result").html(data);
        }
    });
}

function getfable(){
    $.ajax({
        type:"post",
        url:"php/datafable.php",
        success: function(data){
            $("#result").html(data);
        }
    });
}


function getmyth(){
    $.ajax({
        type:"post",
        url:"php/datamyth.php",
        success: function(data){
            $("#result").html(data);
        }
    });
}


function getaudio(){
    $.ajax({
        type:"post",
        url:"php/dataaudio.php",
        success: function(data){
            $("#result").html(data);
        }
    });
}

