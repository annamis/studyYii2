<?php

namespace console\models;

/**
 * @author anna
 */
class Log
{
    
    public static function writeDateInLog($date, $log)
    {           
        $current = file_get_contents($log);
        $current .= "$date\n";
        $result = file_put_contents($log, $current);
        if ($result) {
            return true;
        }        
    }
    
    public static function writeLetterInfoInLog($count, $date, $log)
    {       
        $current = file_get_contents($log);
        $current .= "Emails were sent on $date\n Receivers: $count\n -------\n";
        $result = file_put_contents($log, $current);
        if ($result) {
            return true;
        }       
    }
}
