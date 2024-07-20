<?php
     // Simple test script
     if (strpos(file_get_contents('index.php'), 'Hello, Jenkins!') !== false) {
         echo "Test Passed";
     } else {
         echo "Test Failed";
         exit(1);
     }
     ?>
