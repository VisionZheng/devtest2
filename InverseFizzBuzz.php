<?php        
class InverseFizzBuzz {
    public function __construct($list) {
        $this->list = $list;
    }
    
    public function sequence() {

        $resultList = array();
        for($i = 1; $i <= 100; $i++){
            
            $index = $i;
            $count = count($this->list);
            $num = 0;
            $resultHash = array();
            $result = array();
            
            foreach($this->list as $key => $val) {
              
                if($index % 15 == 0) {
                    $now = 'fizzbuzz';
                } elseif($index % 3 == 0) {
                    $now = 'fizz';
                } elseif($index % 5 == 0) {
                    $now = 'buzz';
                } else {
                    break;
                }
                
                if(strpos($now, $val) !== false) {
                    // echo $index . '   ';
                    array_push($resultHash, $index);
                    if($index != 100) {
                        $index = $this->find_next($index);
                        $num++;
                    }
                }
                    
            }
            // echo "<br />";
            
            if ($resultHash && ($num == $count)){
                // echo "<pre>";
                // print_r($resultHash);
                $time = count($resultHash) - 1;
                for($j = $resultHash[0]; $j <= $resultHash[$time]; $j++){
                    array_push($result, $j);
                }
                array_push($resultList, $result);
                
            }
            
        }
        
        if (count($resultList) == 0){
            return null;
        } else {
            $count = 100;
            foreach ($resultList as $v){
                $length = count($v);
                if ($length < $count){
                    $count = $length;
                    $result = $v;
                }
            }
    
            // echo "<pre>";
            // print_r($result);
            return $result;
        }
        
    }
    
    
    public function find_next($i) {
        for($i = $i + 1; $i <= 100; $i++){
 
            if($i % 5 == 0 || $i % 3 == 0){
                return $i;
            }
        }

    }
}
