<?php
	function parseContent($content)
    {
        $parseContent = array();
        $content = explode('#', $content);
        foreach ($content as $exp) {
            $str = explode("\n", $exp, 2);
            $keyStr = explode('=', $str[0], 2);
            if ($keyStr[0]!=$str[0]) {
                $key = $keyStr[0];
                $des = str_replace($keyStr[0].'=', '', $str[0]);
                
            } else {
                $key = $str[0];
                $des = str_replace($str[0], '', $exp);
            }
            trim($key);
            trim($des);
            $parseContent[$key] = $des;
        }
        return $parseContent;
    }