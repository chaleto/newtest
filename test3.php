<?php
class money{
    public function __construct($earn,$spent){
        $this->earn = $earn;
        $this->spent = $spent;
        $total = $this->earn - $this->spent;
        echo $total;
    }
}
$nm = new money(1000,200);
$nx = new money(2000,1000);
?>