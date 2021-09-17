<?php 
$counterFilePath = "files/counterFile.txt";
function counter($counterFilePath)
{
    if(!is_file($counterFilePath))
    {
        if(is_dir("files"))
        {
            $first = (int)"1";
            file_put_contents($counterFilePath, $first);
            return "1";
        }
        else
        {
            mkdir("files");
        }
    }
    else if(is_file($counterFilePath))
    {
        $file = fopen($counterFilePath, "r+");
        
        if(flock($file, LOCK_EX))
        {
            $state = fread($file, filesize($counterFilePath));
            $state ++;
            fseek($file, 0);
            fwrite($file, $state);
            flock($file, LOCK_UN);
        }
        fclose($file);
        return $state;
    }
}

echo counter($counterFilePath);
?>
