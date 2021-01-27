<?php

class Errors{

    static public function saveErrors($message){
        $fileErrors = "errorLog.txt";
        if(!file_exists($fileErrors)){
            touch("errorLog.txt");
        }

        file_put_contents($fileErrors, $message.PHP_EOL ,FILE_APPEND);

    }
}
