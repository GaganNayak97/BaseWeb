<?php 

// Call to SVG 
function svg($name) {
    // Icons folder ka path
    $iconPath = __DIR__ . "/icon/{$name}.svg";

    // Check karein ki file exist karti hai ya nahi
    if (file_exists($iconPath)) {
        // SVG content ko read karke return karein
        echo file_get_contents($iconPath);
    } else {
        // Agar file nahi mili to error message show karein
        echo "<!-- SVG '{$name}' not found -->";
    }
}


?>