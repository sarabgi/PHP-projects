<?php

// Define the autoloader function
spl_autoload_register(function ($className) {
    // Convert namespace separators to directory separators
    $classPath = str_replace('\\', DIRECTORY_SEPARATOR, $className);

    // Define the base directory for your project (adjust this as needed)
    $baseDir = __DIR__;

    // Construct the full path to the class file
    $classFile = $baseDir . DIRECTORY_SEPARATOR . $classPath . '.php';

    // Check if the class file exists and load it
    if (file_exists($classFile)) {
        require_once $classFile;
    }else{
        echo "file not found ", $classFile;
    }
});

?>