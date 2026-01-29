<?php

function Component($componentName) {

    $filePath = str_replace('.', DIRECTORY_SEPARATOR, $componentName);
    $componentFile = __DIR__ . "/Component/" . $filePath . ".php";

    if (file_exists($componentFile)) {
        require_once $componentFile;
    } else {
        echo "Component file not found: " . $componentFile;
    }
}

require_once __DIR__ . "/Function.php";
