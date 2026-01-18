<?php
header("Location: " . str_replace("/paginas/Experiences/", "/paginas/Docencia/", $_SERVER['REQUEST_URI']), true, 301);
exit();
?>