<?php

class Display{

    public function __construct() {
        
    }
    
    public function url($string) {
	
        $string = str_replace(' ','-', $string); 

        $chars = array('!','#','$','%','^','&','*','(',')','+','[',']','{','}','/',';',':','\'','|','~','`','"','.',',');

        $string = str_replace($chars,'', $string);
        
        $string = $this->removePol($string);
        
        $string = strtolower($string);
        
        $string = str_replace(' ', '-', $string);

        return $string;
        
    }
    
    public function order($file) {
        
        $row = '<tr>';

            $row .= '<td>';

                $row .= '<p>Zamówienie: '.$file.' - <em class="slide-next" lang="szczegóły;ukryj" style="cursor:pointer">szczegóły</em></p>';

                $description = file_get_contents($file);

                $description = str_replace("\n", '<br>', $description);

                $row .= '<p class="hide" style="border: 1px solid #eee; padding: 10px">'.$description.'</p>';

            $row .= '</td>';

        $row .= '</tr>';
        
        return $row;
        
    }

    private function removePol($string) {
        
        $from = array(
            "\xc4\x85", "\xc4\x87", "\xc4\x99",
            "\xc5\x82", "\xc5\x84", "\xc3\xb3",
            "\xc5\x9b", "\xc5\xba", "\xc5\xbc",
            "\xc4\x84", "\xc4\x86", "\xc4\x98",
            "\xc5\x81", "\xc5\x83", "\xc3\x93",
            "\xc5\x9a", "\xc5\xb9", "\xc5\xbb"
	);
        $clear = array(
            "\x61", "\x63", "\x65",
            "\x6c", "\x6e", "\x6f",
            "\x73", "\x7a", "\x7a",
            "\x41", "\x43", "\x45",
            "\x4c", "\x4e", "\x4f",
            "\x53", "\x5a", "\x5a"
	);
        
        $string = str_replace($from, $clear, $string);
        
        return $string;
        
    }
    
    protected function priceSource($in) {

        return 
            '<div class="price">'.$in.'</div>';
        
    }
    
    protected function productSource($in, $medium) {

        $href = 'elektrozawor,'.$in.','.$this->url($medium);
        
        return 
              '<a href="product/'.$in.'/image.jpg" class="image zoom" title="Powiększenie zdjęcia"><i class="fas fa-search-plus fa-2x"></i></a>'
            . '<div class="name"><a href="'.$href.'" title="Model elektrozaworu: '.$in.'">'.$in.'</a></div>'
            . '<div class="detail"><button class="btn btn-default" title="Techniczne właściwości elektrozaworu">Parametry techniczne</button></div>'
            . '<a href="'.$href.'" class="picture" title="Zawór elektromagnetyczny: '.$in.'"><img src="product/'.$in.'/image.jpg" alt="Elektrozawór: '.$in.'"></a>';
        
    }
    
    protected function addToCartSource($in, $in2) {
        
        return 
              '<div class="hide add-box"><button href="#" class="btn btn-default add" id="'.$in.'" lang="v_cart">'
            . $in2
            . '</button></div>';
        
    }
    
    protected function modalSource($in, $in2, $in3) {
        
        return 
              '<div class="modal-button"><a href="#modal" class="btn dk-modal" id="'.$in.'" lang="'.$in3.'">'
            . $in2
            . '</a></div>';
        
    }
    
    protected function viewSource($in, $in2, $in3) {
        
        $target = $title = '';
        if($in3) {
            
            $target = ' target="blank"';
            $title = ' title="Karta katalogowa: '.$in2.'"';
        }

        return 
              '<div class="link"><a href="'.$in2.'" class="btn"'.$target.''.$title.'>'
            . ''.$in.''
            . '</a></div>';
        
    }
    
    protected function parameterSource($in) {
        
        $return = '<div class="hide parameter-box">';
        
        $return .= '<table class="table parameter">';
        
        foreach ($in as $text => $value) {
            
            $textArray = explode(':', $text);
            
            $return .= '<tr>';
            
            $return .= '<td>';
            
            $return .= '<strong>'.$textArray[1].':</strong> ';
            
            $return .= '</td>';
            
            $return .= '<td>';
            
            $return .= '<select class="form-control" name="'.$textArray[0].'">';
         
            foreach ($value as $i => $v) {
                
                $return .= '<option value="'.$i.'">'.$v.'</option>';
                
            }
            
            $return .= '</select>';
            
            $return .= '</td>';
            
            $return .= '</tr>';
            
        }
 
        $return .= '</table>';
        
        $return .= '</div>';
        
        return $return;
        
    }

    protected function questionSource($in) {

        return 
              '<div class="hide question-box clear-fix">'
            . ''.$in.''
            . '<img src="product/'.$in.'/image.jpg" title="'.$in.'">'
            . '<textarea></textarea>'
            . '</div>';
        
    }
    
    protected function alertSource($in) {

        echo '<div class="alert">'.$in.'</div>';
        
    }

}