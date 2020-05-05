<?php
session_start();
session_destroy();
header('Location: index.php');
 ?>
 <pre>
<?php print_r($_SESSION); ?>
 </pre>
