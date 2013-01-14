<?php

function parseContent($content)
{
    $parseContent = array();
    $expContent = preg_split("/[\n]#+/s", $content);
    if($content{0}!='#')
        unset ($expContent[0]);
    else 
        $expContent[0] = substr ($expContent[0], 1);
    foreach ($expContent as $exp){
        $str = explode("\n", $exp, 2);
        $keyStr = explode('=', $str[0], 2);
        if($keyStr[0]!=$str[0]){
            $key = $keyStr[0];
            $des = $keyStr[1];
        }
        else{
            $key = $str[0];
            $des = end($str);
        }
        trim($key);
        trim($des);
        $parseContent[$key] = $des;
    }
    return $parseContent;
}