<?php 

class Interest{

private $principal;
private $rate;
private $time;

    public function simple_interest(){
    $interest = ($this->principal * $this->rate * $this->time)/100;
    return $interest;
    }
     //P(1 + RATE/N)^N*TIME
    public function compound_interest($n){  
    $c_interest = $this->principal * (1 + ($this->rate/$n))**$this->time * $n;
    return $c_interest;
    }

    public function setRate($r){ 
        $this->rate = $r; 
    }

    public function getRate(){  
        return $this->rate;
    }

     public function setPrincipal($p){ 
        $this->principal = $p; 
    }

    public function getPrincipal(){  
        return $this->principal;
    }

    public function setTime($t){ 
        $this->time = $t; 
    }

    public function getTime(){  
        return $this->time;
    }

}

$interest_calculator = new Interest();
$interest_calculator->setRate(30);
$interest_calculator->setTime(2);
$interest_calculator->setPrincipal(5000);

echo $interest_calculator->simple_interest();

?>