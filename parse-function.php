<?php	
	public function parseContent($content)
    {
        $parseContent = array();
        $content = explode('#', $content);
        foreach ($content as $str){
            preg_match("|^(.*)\n|U", $str, $res);
            foreach ($res as $item){
                 if(preg_match("|=(.*)\n|U", $item, $parseDes)){
                     $des = $parseDes[1];
                     preg_match("|^(.*)=|U", $item, $parseKey);
                     $key = $parseKey[1];
                 }
                 else{
                    $key = $item;
                    $des = str_replace($key, '', $str);
                 }
                 $parseContent[$key] = $des;
                 break;
            }
        }
        return $parseContent;
    }