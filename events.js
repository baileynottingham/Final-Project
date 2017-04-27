//frame for AJAX to check the username
window.onload = function(){
    $("user").onchange = userCheck;
}

function userCheck(){
    if ($("user").value){
        new Ajax.Request("Database.php",
            {
                onSuccess: ajaxSuccess,
                parameters:
                {
                name: $("user").value
                }
            }
        )
    }
}

function ajaxSuccess(ajax){
    if (ajax.responseText == "false"){
        $("submit").disabled = true;
        $("status").textContent = "Username is already in use!";
    } else{
        $("submit").disabled = false;
        $("status").textContent = "";
    }
}