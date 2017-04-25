window.onload = function(){
    $("user").onchange = userCheck;
}

function userCheck(){
    new Ajax.Request("register.php",
        {
            onSuccess: checkDB
        }
    )
}

function checkDB(ajax){
    ajax.responseText;
}