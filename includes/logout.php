<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>
<?php
function logout(){
    // session_abort();
    $_SESSION["username"]="";
    $_SESSION["loginstatus"]="";
}
?>
</body>
</html>