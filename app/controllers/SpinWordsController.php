<?php

    class SpinWordsController {
        

        public function spinWords($str){
            $result = [];
            $splitWord = explode(" ",$str);
            for($i=0;$i<count($splitWord);$i++){
                if(strlen($splitWord[$i])>=5){
                    $revWord = strrev($splitWord[$i]);
                    $myRevWord = $this->reverse($splitWord[$i]);
                    if($myRevWord===$revWord)
                        $result[] = $myRevWord;
                    else
                        $result[] = '---Error---';
                }else{
                    $result[] = $splitWord[$i];
                }
            }
            return implode(" ",$result)."<br>";
        }

        private function reverse($word){
            $result = null;
            for ($i=strlen($word)-1; $i >= 0; $i--) { 
               $result .= $word[$i]; 
            }
            return $result;
        }
    }


?>