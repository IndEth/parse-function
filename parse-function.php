<?php	
	public function parseContent($content)
    {
        $parseContent = array();
        $expContent = explode("\n#", $content);
        if($content{0}!='#')
            unset ($expContent[0]);
        else 
            $expContent[0] = substr ($expContent[0], 1);
        foreach ($expContent as $exp){
            $str = explode("\n", $exp, 2);
            $keyStr = explode('=', $str[0], 2);
            if(isset($keyStr[1])){
                $key = $keyStr[0];
                $des = $keyStr[1];
            }
            else{
                $key = $str[0];
                $des = end($str);
            }
            $key = trim($key);
            $des = trim($des);
            $parseContent[$key] = $des;
        }
        return $parseContent;
    }