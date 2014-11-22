<?php

/*
 * Smarty plugin
 * -------------------------------------------------------------
 * Type:     modifier
 * Name:     truncate
 * Purpose:  Truncate a string to a certain length if necessary,
 *           optionally splitting in the middle of a word, and 
 *           appending the $etc string.
 * Update:   change substr to msubstr and add fun msubstr.so it
 *           can bu used in chinese charset.
 * -------------------------------------------------------------
 */
function smarty_modifier_truncate($string, $length = 80, $etc = '...',
                                  $break_words = false)
{
    if ($length == 0)
        return '';

    if (strlen($string) > $length) {
        $length -= strlen($etc);    
        if (!$break_words)
        $string = preg_replace('/s+?(S+)?$/', '', SubstrGB($string, 0, $length+1));
      
        return SubstrGB($string, 0, $length).$etc;
    } else
        return $string;
}

function SubstrGB($str,$start,$len){

    for($i=0;$i<$start+$len;$i++){

        $tmpstr=(ord($str[$i])>=161 && ord($str[$i])<=254&& ord($str[$i+1])>=161 && ord($str[$i+1])<=254)?$str[$i].$str[++$i]:$tmpstr=$str[$i];

        if ($i>=$start&&$i<($start+$len))$tmp .=$tmpstr;

    }

    return $tmp;

}

/* vim: set expandtab: */

?>