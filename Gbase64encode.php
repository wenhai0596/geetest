public function getbase64chars($e=''){
           
        $t = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789()";
      
		 return $e < 0 || $e >= strlen($t) ? "." : str_split($t)[$e];
         
         //var_dump(str_split($t)); 
        }
        
public function strsplit($e, $t) {
            $n = 0;
            for ( $r = 23; 0 <= $r; $r--) {
                ($t >> $r & 1)===1 && ($n = ($n << 1) + ($e >> $r & 1));
            }
            return $n;
        }
        
public function Gbase64encode($e=''){
        $n = ""; $r = "";
        $a = count($e);
        
       for ($s = 0; $s < $a; $s += 3) {
                if ($s + 2 < $a) {
                    $c = ($e[$s] << 16) + ($e[$s + 1] << 8) + $e[$s + 2];
                    $n .= $this->getbase64chars($this->strsplit($c, 7274496));
                    $n .= $this->getbase64chars($this->strsplit($c, 9483264));
                    $n .= $this->getbase64chars($this->strsplit($c, 19220));
                    $n .= $this->getbase64chars($this->strsplit($c, 235));
                } else {
                    $u = $a % 3;
                    if($u == 2){
                        $c = ($e[$s] << 16) + ($e[$s + 1] << 8); 
                        $n .= $this->getbase64chars($this->strsplit($c, 7274496));
                        $n .= $this->getbase64chars($this->strsplit($c, 9483264)); 
                        $n .= $this->getbase64chars($this->strsplit($c, 19220)); 
                        $r = ".";    
                    }else{
                        $c = $e[$s] << 16; 
                        $n .= $this->getbase64chars($this->strsplit($c, 7274496));
                        $n .= $this->getbase64chars($this->strsplit($c, 9483264)); 
                        $r = ".." ;
                }
            }
        }
        return $n.$r;
        }
