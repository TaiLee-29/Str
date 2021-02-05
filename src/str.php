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

    // Changed function srtpos on strrpos(that returns last substring place)
    public static function afterLast($subject, $after){
        $subjectPos = strrpos($subject, $after);

        if ($subjectPos == false) {
            return $subject;
        } elseif ($subjectPos){
            return substr($subject,$subjectPos+strlen($after));
        }
    }








}