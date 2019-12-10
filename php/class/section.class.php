<?php

class Section extends Display{
    
    public function __construct() {
        
    }
    
    public function price($in) {

        $display = $this->priceSource($in);
        
        return $display;
    }
    
    public function product($in, $in2) {

        $display = $this->productSource($in, $in2);
        
        return $display;
    }
    
    public function cart($in, $in2) {

        $display = $this->addToCartSource($in, $in2);
        
        return $display;
    }
    
    public function modal($in, $in2, $in3) {

        $display = $this->modalSource($in, $in2, $in3);
        
        return $display;
    }
    
    public function view($in, $in2, $in3) {

        $display = $this->viewSource($in, $in2, $in3);
        
        return $display;
    }
    
    public function question($in) {

        $display = $this->questionSource($in);
        
        return $display;
    }
    
    public function parameter($in) {

        $display = $this->parameterSource($in);
        
        return $display;
    }

    public function number($input, $precision = 2) {
       
        return number_format($input, $precision, ',', '');
    }
    
    public function alert($in) {
       
        $this->alertSource($in);
        
    }
   
   public function go($in) {
       
       header('Location: '.$in);
       
       exit();
       
   }
   
   public function go2($in) {
       
       echo '<script>window.open("'.$in.'");</script>';
       
   }
    
}