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
            $state = (int)fread($file, filesize($file));
            $state ++;
            fseek($file, 0);
            fwrite($file, $state);
            flock($file, LOCK_UN);
        }
    }
}

counter($counterFilePath);
?>
