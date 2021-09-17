<?php 
$counterFilePath = "\files\counterFile.txt";
function counter($counterFilePath)
{
    if(!is_file($counterFilePath))
    {
        file_put_contents($counterFilePath, "1");
        return "1";
    }
    else if(is_file($counterFilePath))
    {
        $file = fopen($counterFilePath, "r+");
        if(flock($file, LOCK_EX))
        {
            $ = (int)fread($file, filesize($file));
            
        }
    }
}

counter($counterFilePath);
?>
