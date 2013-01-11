<?php

function parseContent($content)
{
    $parseContent = array();
    $content = explode("\n#", "\n" . $content);
    foreach ($content as $block) {
        if (empty($block))
            continue;
        
        $strs  = explode("\n", $block, 2);
        $parts = explode('=', $strs[0], 2);
        
        list($key, $val) = isset($parts[1]) ? $parts : $strs;

        $key = trim($key);
        $val = trim($val);
        $parseContent[$key] = $val;
    }
    return $parseContent;
}