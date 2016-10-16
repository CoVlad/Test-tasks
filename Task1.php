
<?php

/**
* Declaration of class Init has 3 functions
* 

* @author Vlad <covlad@ukr.net>
* @version 1.0
* @package files
*/
 
class Init {
    
/**
* Class Init - 3 function
* @package files
* @subpackage classes
*/
        
/**
* Create table 'test'
* @return string for SQL query
*/
  
    private function Create(){
        $sql="CREATE TABLE test
                (
                    id INTEGER AUTO_INCREMENT PRIMARY KEY,
                    script_name VARCHAR(25),
                    strart_script INTEGER,
                    end_script INTEGER,
                    result SET ('normal','illegal','failed','success')
                )";
        return $sql;
    }
    
/**
* Fill table 'test' random info
* @return string for SQL query
*/    
    
    private function Fill(){
        //random counter
        $n=rand(1,10);
        //part of query string
        $str="";
        for ($i=1;$i<=$n;$i++) {
            $t=time();            
            $dt=$t+rand(0,$i);
            $sn=substr(md5($dt),0,25);
            switch (($dt)%4) {
                case 0: 
                    $r="normal";
                    break;    
                case 1: 
                    $r="illegal";
                    break;
                case 2: 
                    $r="failed";
                    break;
                default: 
                    $r="success";
                    break;   
            }
            $str.="('".$sn."',".$t.",".$dt.",'".$r."')";
            if ($i<$n){
                $str.=" , ";
            }
        }
        $sql="INSERT INTO test (script_name, strart_script, end_script, result) VALUES ".$str;;
        return $sql;
    }

/**
* Return specific info from 'test'
* @return string for SQL query
*/
    
    function Get(){
        $sql="SELECT * FROM test WHERE result='normal' OR result='success'";
        return $sql;
    }
    
}


?>