<?php
namespace Application;

class StringManager {

    public function getMaxLength($string1 = null, $string2 = null) {
      if(!is_string($string1) && !is_string($string2)) return false;
      $stringLength = 0;
      $string1Len   = (!is_null($string1))? strlen($string1) : 0;
      $string2Len   = (!is_null($string2))? strlen($string2) : 0;
      $stringLength = ($string1Len >= $string2Len)? $string1Len: $string2Len;
      return $stringLength;
    }

}