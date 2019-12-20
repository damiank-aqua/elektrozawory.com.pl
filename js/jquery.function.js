function product() {

    $.ajax({
        type: "POST",
        url: "ajax-product-3W63Aa2o.php",
        beforeSend: function(){
            
            //process();

        }
    }).done(function($data){

        //$('#process').fadeOut();

        var $record = '';

        if($data){

            $dataArray = JSON.parse($data);

            if($dataArray.length > 1){

                for($i = 1; $i < $dataArray.length; $i++){

                    $record += $dataArray[$i][0];

                }

            }

        }

        if($record === '')
            $record = '<div class="col-xs-12">Brak danych</div>';

        $('#count strong').text($dataArray[0][0]);

        $('.product-box').html($record);

        if($record !== ''){

            gallery();

        }
        
        $('.product-box').css('opacity', 1);
        
        if($('#order').length > 0){

            order($("#" + $('#order').val()), false);

            blur('in');
            
            $('#order').remove();

        }

    }).fail(function(){
            
        console.log('AJAX "data" ERROR');
 
    });

}

function filter($name, $value, $display) {

    $.ajax({
       type: "POST",
       url: "ajax-filter-3W63Aa2o.php",
       data: {
            name: $name,
            value: $value
       },
       beforeSend: function(){

            //$('.product-box').css('opacity', 0.3);

            //$('#process').show();
            
            if(!$display){
            
                process();

            }
            
       }
       
    }).done(function($data){
        
        //if($display){

            $('#breadcrumb').html('');

            var $requiredCheckSet = 'false';

            if($data === 'false'){

                $('#breadcrumb').parent().hide();

            }else{

                $('#breadcrumb').parent().show();

                $dataArray = JSON.parse($data);

                var $record = '';
                var $checkCount = 0;
                if($dataArray.length > 0){

                    for($i = 0; $i < $dataArray.length; $i++){

                        $record += '<label class="label-blue" id="' + $dataArray[$i][0] + '">' + $dataArray[$i][1] + ': ' + $dataArray[$i][2] + ' <i class="fas fa-times-circle dk-clear"></i></label> ';

                        if($dataArray[$i][0] === 0 || $dataArray[$i][0] === 1 || $dataArray[$i][0] === 2){
                            $checkCount++;
                        }
                    }

                    if($checkCount === 3){
                        $requiredCheckSet = 'true';
                    }

                }

                if($record !== ''){

                    $('#breadcrumb').html($record);

                }

            }

            $('#required-check').val($requiredCheckSet);
            
            if($display){

                filterDescription();

            }

            //product();

            addUrl();

            //$('#process').hide();
        
        //}
    
    }).fail(function(){
            
        console.log('AJAX "session" ERROR');
 
    });
  
}

function process(){
    
    $('#breadcrumb').hide();
    
    $('body > div:not(#process)').css('opacity', 0.2);
    
    $('#process').show();
    
}

function breadcrumb(){
    
    $('#breadcrumb').show();
    
}

function search($name, $value) {

    $.ajax({
       type: "POST",
       url: "ajax-search-3W63Aa2o.php",
       data: {
            name: $name,
            value: $value
       },
       beforeSend: function(){
           
            //process();
            
       }
       
    }).done(function(){

        //product();
    
    }).fail(function(){
            
        console.log('AJAX "search" ERROR');
 
    });
  
}

function refresh(){
    
    setTimeout(function () { 
        location.reload();
    }, 500);
        
}

function cart($event, $value, $parameter) {

    $.ajax({
       type: "POST",
       url: "ajax-cart-3W63Aa2o.php",
       data: {
           event: $event,
           value: $value,
           parameter: $parameter
       },
       beforeSend: function(){

            //$('#process').show();
            
       }
       
    }).done(function(){
        
        //$('#process').fadeOut();

        getCart();
            
    }).fail(function(){
            
        console.log('AJAX "cart" ERROR');
 
    });
  
}

function getCart() {

    $.ajax({
       type: "POST",
       url: "ajax-cart-3W63Aa2o.php",
       data: {
           event: 'get'
       },
       beforeSend: function(){

            //$('#process').show();
            
       }
       
    }).done(function($data){
        
        //$('#process').hide();

        $dataArray = JSON.parse($data);
        
        $('#cart em').text($dataArray[0]['sum']);
        
        $('#cart label span').text($dataArray[0]['value']);
        
        var $record = '';
        
        if($dataArray.length > 1)
            $record += '<tr><th>Symbol elektrozaworu</th><th>Ilość</th><th>Parametry dodatkowe</th><th>Cena jednostkowa</th><th>Dodatkowe</th><th>Wartość</th><th></th></tr>';
        
        for($i = 1; $i < $dataArray.length; $i++){
            
            $record += '<tr>';
            
            //$record += '<td>' + $dataArray[$i][6] + '</td>';
            
            $record += '<td>' + $dataArray[$i][7] + '<br><span class="badge badge-secondary">' + $dataArray[$i][0] + '</span></td>';
            
            $record += '<td><span class="badge badge-secondary">' + $dataArray[$i][1] + '</span><br><span class="change-quantity" lang="' + $dataArray[$i][6] + '" style="padding: 1px; color: #aaa;cursor: pointer"><i class="fas fa-plus"></i></span><span class="change-quantity" lang="' + $dataArray[$i][6] + '" style="padding: 1px; color: #aaa; cursor: pointer"><i class="fas fa-minus"></i></span></td>';
            
            $record += '<td>' + $dataArray[$i][2] + '</td>';
            
            $record += '<td><span class="badge badge-warning">' + $dataArray[$i][3] + '</span></td>';
            
            $record += '<td><span class="badge badge-warning">' + $dataArray[$i][4] + '</span></td>';
            
            $record += '<td><span class="badge badge-danger">' + $dataArray[$i][5] + '</span></td>';
            
            $record += '<td>';
            
            if($('#sum-page').length === 0)
                $record += '<label class="remove" lang="' + $dataArray[$i][6] + '"><i class="far fa-trash-alt"></i></label>';
            
            $record += '</td>';
            
            $record += '</tr>';
            
        }
        
        if($record === '') {

            $('#to-order-process').hide();

            $record = 'Niestety, ale tutaj jest pusto <i class="far fa-frown"></i>';

        }else{

            $('#to-order-process').show();

        }
        
        $('#cart-content').children('table').html($record);
            
    }).fail(function(){
            
        console.log('AJAX "getCart" ERROR');
 
    });
  
}

function session($name, $value, $url) {

    $.ajax({
       type: "POST",
       url: "ajax-session-3W63Aa2o.php",
       data: {
            name: $name,
            value: $value
       }
       
    }).done(function(){

        if($url){
            
            window.location = $url;
            
        }
            
    }).fail(function(){
            
        alert('AJAX ERROR');
 
    });
  
}

function gallery(){
    
    $('.product').magnificPopup({
        delegate: 'a.image',
        type: 'image'
    });
    
}

function modal(){
    
    $.magnificPopup.open({
        items: {
          src: '#modal',
          type: 'inline'
        }
    });
    
}

function delivery(){
 
    $('#address').removeClass('col-md-12');
        
    $('#address').addClass('col-md-6');

    $('#address').next().fadeIn('slow');
        
}

function blur($type){
    
    if($type === 'in'){
        $('.product-box, #top, #filter, .navbar, #slider, #breadcrumb, .detail').css('filter', 'blur(3px)');
    }
    
    if($type === 'out'){
        $('.product-box, #top, #filter, .navbar, #slider, #breadcrumb, .detail').css('filter', 'none');
    }
    
}

function order($this, $requiredStatus){

        var $type = $this.attr('lang'); //cart (zamowienie), question (zapytanie)
        
        var $firstRun = $('#first-run'); //pierwsze uruchomienie

        var $modal = '<div class="content-popup">';
        
        if($type === 'cart'){
            
            if($requiredStatus) {
                
                var $requiredCheck = $('#required-check').val();
                
            }else{
                
                var $requiredCheck = 'true';
                
            }
            
            if($requiredCheck === 'true'){
            
                var $name = $this.parents('.product').find('.name').text();

                var $price = $this.parents('.product').find('.price').text();

                var $image = $this.parents('.product').find('.picture').html();

                var $parameter = $this.parents('.product').find('.parameter-box').html();

                var $add = $this.parents('.product').find('.add-box').html();

                $modal += '<div class="popup-name">' + $name + '</div>';

                $modal += $image;

                $modal += '<div class="popup-price">' + $price + '</div>';

                $modal += $parameter;

                $modal += $add;
            
            }else{
                
                $modal += '<div class="popup-name">' + $('#required-check').attr('class') + '</div>';
                
            }
        
        }

        if($type === 'question'){
            
            var $textarea = $this.parents('.product').find('.question-box').html();

            $modal += $textarea;

        }
        
        $modal += '</div>';
        
        modal();
        
        $('#modal div').html($modal);

        if($firstRun.val() === 'on') {

            //wykonaj rzeczy po zaladowaniu strony (elementy AJAX i wydajnosc)
            
            
            $firstRun.val('off');
        
        }
    
}
function filterDescription(){
    
    $('.description').hide();
    
    $('#filter > div').each(function(){
        
        $selected = $(this).find('option:selected').not('.all').attr('title');
        
        if($selected){
            
            $(this).children('.description').text($selected);
            
            $(this).children('.description').show();
            
        }
        
    });
    
}

function addUrl(){
    
    var $addUrl = '';
    
    var $addTitle = '';
    
    $('#filter > div').each(function(){

        $selected = $(this).find('option:selected').not('.all').text();
        
        if($selected){
            
            var $titleText = $(this).children('label').attr('title');
            
            $addUrl += $titleText;
            
            $addTitle += $titleText + ' - ';
            
            $addUrl += '_';
            
            $addUrl += $selected + ',';
            
            $addTitle += $selected + ', ';
            
        }
        
    });

    var $setUrl = '';
    
    if($addUrl !== ''){
        
        $addUrl = $addUrl.slice(0, -1);

        $addUrl = creteUrl($addUrl);
        
        $setUrl = '/produkty,' + $addUrl;

    }
    
    if(history.pushState){

        var $newUrl = window.location.protocol + "//" + window.location.host + $setUrl;

        window.history.pushState({path:$newUrl},'',$newUrl);

    }

    if($addTitle !== ''){
    
        $addTitle = $addTitle.slice(0, -2);

        $('title').text($addTitle);
    
    }else $('title').text($('#start-title').text());
      
}

function creteUrl($string){
    
    var $url = $string.toLowerCase();
    
    $url = $url.replace(/[ ]/g,'-');
    
    $url = $url.replace(/[/]/g,'');

    $url = $url.replace(/["]/g,'');
    
    $url = $url.replace(/[ą]/g,'a');
    
    $url = $url.replace(/[ć]/g,'c');
    
    $url = $url.replace(/[ę]/g,'e');
    
    $url = $url.replace(/[ł]/g,'l');
    
    $url = $url.replace(/[ń]/g,'n');
    
    $url = $url.replace(/[ó]/g,'o');
    
    $url = $url.replace(/[ś]/g,'s');
    
    $url = $url.replace(/[ź]/g,'z');
    
    $url = $url.replace(/[ż]/g,'z');
    
    return $url;
    
}