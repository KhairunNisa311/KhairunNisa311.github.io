<html>
    <head>
</head>
<body>
    <?php
    $myFile = "testFile.txt";
    $fh = fopen($myFile, 'r');
    $theData = fread($fh, filesize($myFile));
    fclose($fh);
    echo $theData;
    ?>
    </body>
    </html>