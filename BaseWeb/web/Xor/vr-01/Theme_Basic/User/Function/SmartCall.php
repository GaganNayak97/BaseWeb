<?php 




// Call to Assets
function Asset($filename) {
    $path = "/Aduld/0/v22.05.25//Assets/" . $filename;
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    
    return in_array($ext, ['jpg', 'jpeg', 'png', 'webp', 'gif', 'avif']) 
        ? "<img src='$path' alt='$filename' />" 
        : "<a href='$path' download>$filename</a>";
}


 
/**
 * RequireAll function
 * दिए गए फ़ोल्डर में मौजूद सभी फ़ाइलों को require करता है जिनका एक्सटेंशन मेल खाता है।
 *
 * @param string $folder    - वह डायरेक्टरी जहाँ फ़ाइलें मौजूद हैं।
 * @param string $extension - फ़ाइल एक्सटेंशन, उदाहरण के लिए 'css'
 */
function RequireAll($folder, $extension) {
    // डायरेक्टरी मौजूद है या नहीं इसकी जांच करें
    if (!is_dir($folder)) {
        echo "<!-- Directory not found: $folder -->";
        return;
    }

    // डायरेक्टरी से सभी फ़ाइलें प्राप्त करें
    $files = scandir($folder);
    
    foreach ($files as $file) {
        // "." और ".." को छोड़ें
        if ($file !== '.' && $file !== '..') {
            // फ़ाइल का पूरा पथ तैयार करें
            $filePath = $folder . DIRECTORY_SEPARATOR . $file;
            // अगर यह एक फ़ाइल है और इसका एक्सटेंशन मेल खाता है
            if (is_file($filePath) && strtolower(pathinfo($file, PATHINFO_EXTENSION)) === strtolower($extension)) {
                require $filePath;
            }
        }
    }
}
 



?>