<?php


namespace Hillel;


class str
{
    public static function after($subject, $after){
        $subjectPos = strpos($subject,$after);
        if( $subjectPos == false){
          return $subject;
       } elseif ($subjectPos){
            return substr($subject,$subjectPos+strlen($after));
        }

    }









}