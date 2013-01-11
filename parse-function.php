<?php

function parseContent($content)
{
    $parseContent = array();
    $content = explode("\n#", "\n" . $content);
    foreach ($content as $exp) {
        if (empty($exp))
            continue;
        
        $str = explode("\n", $exp, 2);
        $keyStr = explode('=', $str[0], 2);
        
        list($key, $des) = isset($keyStr[1]) ? $keyStr : $str;

        $key = trim($key);
        $des = trim($des);
        $parseContent[$key] = $des;
    }
    return $parseContent;
}