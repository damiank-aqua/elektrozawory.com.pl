<div id="filter">
    <?php
    
    foreach ($s_filter as $i => $f) {
		
        echo '<div>';

            $required = $star = '';
            if($f['required']) {

                    $required = ' required-filter';
                    //$star = '<b>*</b>';
            }

            echo '<label title="'.$f['name'].'">'.$f['name'].''.$star.'</label>';

            echo '<select name="'.$i.'" class="form-control'.$required.'" lang="filter">';

            echo '<option value="all" class="all">['.$l_wybierz.']</option>';

            foreach ($f['value'] as $j => $v) {

                    $selected = '';
                    if(isset($_SESSION['filter'][$i]) and $_SESSION['filter'][$i] == $j)
                            $selected = ' selected';

                    $description = '';
                    if(isset($f['description'][$j]))
                            $description = $f['description'][$j];

                    echo '<option title="'.$description.'" value="'.$j.'"'.$selected.'>'.$v.'</option>';

            }

            echo '</select>';

            echo '<p class="description" style="display: none; padding: 5px; font-size: 12px; font-style: italic; text-align: justify; border: 1px solid #6f7a84; margin: 1px 0 1px"></p>';

        echo '</div>';
            
    } 
    
    ?>
</div>