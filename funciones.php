<?php 
    function mostrarcarpetas() {
        $carpeta = glob('img/', GLOB_ONLYDIR);
       // while ($f = readdir($carpeta)) {
            $carpeta = basename ($carpeta2);
        foreach ($carpeta2 as $folder) {
            echo "<option value=".$folder.">$folder</option>";
        }
    }

?>
