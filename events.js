//frame for AJAX to check the username
window.onload = function(){
    $("user").onchange = userCheck;
}

function userCheck(){
    console.log("here");
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
    console.log(ajax.responseText);
    if (ajax.responseText == "false"){
        $("submit").disabled = true;
        $("status").textContent = "Username is already in use!";
    } else{
        $("submit").disabled = false;
        $("status").textContent = "";
    }
}