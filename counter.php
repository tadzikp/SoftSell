<?php 
$counterFilePath = "\files\counterFile.txt";
function counter($counterFilePath)
{
    if(!is_file($counterFilePath))
    {
        file_put_contents($counterFilePath, "1");
        return "1";
    }
    else{
        echo "GRA2 W KONCU DZIALA";
    }
    /* else if(is_file($counterFilePath))
    {
        $file = fopen($counterFilePath, "r+");
        
        
    } */
}

counter($counterFilePath);
?>
