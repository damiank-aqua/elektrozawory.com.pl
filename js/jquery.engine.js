$(function(){

    if($('#cart').length > 0){
    
        getCart();
    
    }
    
    if($('.product-box').length > 0){
        
        filter('all', 'all', true);
        
        $('#modal').on('click', '.go-cart', function(){
            
            window.location = $(this).attr('href');
            
        });
        
        //Dodanie do koszyka w oknie pop-up
        $('#modal').on('click', '.add', function(){

            $this = $(this);
            
            var $selectArray = [];

            $this.prev().find('select').each(function(){
                
                var $optionArray = [$(this).attr('name'), $(this).val()];
                
                $selectArray.push($optionArray);
                
                
            });
            
            var $current = $this.html();

            cart('set', $(this).attr('id'), $selectArray);
            
            $this.html($('#' + $this.attr('lang')).html());
            
            $this.addClass('btn-success');
            
            $('#go-cart').show();
            
            var $second = 2;
            var $close = setInterval(function(){

                $this.html('Zamknięcie okna: ' + $second + ' sek.');
                
                $second--;
            
            }, 1000);

            setTimeout(function(){
                
                $this.html($current);
                
                $this.removeClass('btn-success');
                
                $('#go-cart').hide();

                $('.mfp-close').trigger('click');
                
                clearInterval($close);
                
                $second = 2;
                
            }, 3000);

        });

    }
    
   $('#produkty #cart').hover(function(){
        
        $('#cart').addClass('showcart');
        
        $(this).children('#cart-content').show();
        
    }, function(){
        
        $(this).children('#cart-content').hide(0, function(){
            
            $('#cart').removeClass('showcart');
            
        });
        
    });
    
    $('#company-check').click(function(){
      
//        $('#company-box-out').css('background', 'none');
        $('#company-box').slideUp();
        if($(this).is(':checked')){
            $('#company-box').slideDown();
//            $('#company-box-out').css('background', '#eee');
        }
        
    });
    
    $('#cart').on('click', '.remove', function(){

        var $cartId = $(this).attr('lang');
        
        cart('remove', $cartId);
        
    });
    
    $('#cart').on('click', '.change-quantity', function(){
        
        $changeEvent = $(this).children().attr('class');
        
        $currentQuantity = $(this).parent().children(':first-child').text();

        if($changeEvent.indexOf('plus') > -1 || ($changeEvent.indexOf('minus') > -1 && $currentQuantity !== '1')){
            
            var $cartId = $(this).attr('lang');

            cart('change', $cartId, $changeEvent);
            
        }
        
    });
    
    $('select[lang="filter"]').change(function(){

        filter($(this).attr('name'), $(this).val(), false);
        
        refresh();
        
    });

    $('#breadcrumb').on('click', '.dk-clear', function(){

        var $id = $(this).parent().attr('id');
        
        filter($id, 'all', false);

        $('select[name="' + $id  + '"] option:selected').prop('selected', false);
        
        $('select[name="' + $id  + '"] option:first').prop('selected', 'selected');
        
        refresh();
        
    });
    
        
    $('.product-box').on('click', '.dk-modal', function(){
        
        order($(this), false);
    
//		var $search = $('#search input').val();
//		
//		if($search !== ''){
//			
//			order($(this), false);
//			
//		}else{
//			
//			order($(this), true);
//			
//		}

    });
    
    $('.copy-to').blur(function(){
      
        $('#' + $(this).attr('name')).val($(this).val());
        
    });
    
    $('.copy-to').focus(function(){
      
        delivery();
        
    });
    
    $('.move').click(function(){
        
        var $url = $(this).attr('id');

        if($('#order-form').length > 0) {

            var $order = '';
            $('#order-form .address').each(function(){
                
                var $value = $(this).val();
                
                if($value && $value !== ''){

                    $order += $(this).attr('name') + ':' + $(this).val() + '|';
                
                }
                
            });
            
            $order = $order.slice(0, -1);
            
            session('order', $order, $url);
            
        }else{
        
            window.location = $url;
        
        }
        
    });
    
    $('.pay').click(function(){
        
        var $selected = $(this).attr('class').indexOf('btn-secondary');
        
        $('#payment .btn-secondary').addClass('btn-light');
        
        $('#payment .btn-secondary').removeClass('btn-secondary');
     
        var $value = '';
        if($selected === -1){
        
            $(this).removeClass('btn-light');

            $(this).addClass('btn-secondary');
            
            $value = $(this).attr('id');
        
        }

        session('pay', $value, false);
        
    });

//    $('#order-form .addressd').each(function(){
//     
//        if($(this).val() !== ''){
//            
//            delivery();
//            
//            //break w js:)
//            return false;
//            
//        }
//        
//    });

    if($('#search input').val() !== ''){
        
        $('#search p').show();
        
    }
    
    $('.product-box').on('click', '.detail', function(){
        
        $(this).parent().children('.cover').slideDown();
        
    });
    
    $('.product-box').on('click', '.close', function(){
        
        $(this).parent().slideUp();
        
    });
    
    $('.send-order').click(function(){
        
        session('comment', $('#comment').val(), $(this).attr('id'));
        
    });
    
    $('.product-box, .detail').on('click', '.image, .dk-modal', function(){

        blur('in');
        
    });
    
    $('#search button').click(function(){

        if($('#search input').val() !== ''){
            
            process();
        
            refresh();
        
        }
        
    });
    
    $('#search input').keyup(function(){

        search('search', $(this).val());
        
    });
    
    $('#search p').click(function(){
        
        process();

        search('clear', '');
        
        refresh();
        
    });
    
    $('#cart-sum').click(function(){
        
        window.location = $(this).attr('class');
        
    });
    
    $('.product, .detail').magnificPopup({
        delegate: 'a.image',
        type: 'image'
    });
    
    $('.slide-next').click(function(){
        
        $this = $(this);
        
        $this.parent().next().slideToggle(500, function(){
            
            $lang = $this.attr('lang').split(';');
            
            if($this.parent().next().is(':visible')){
                
                $this.text($lang[1]);
                
            }else{
                
                $this.text($lang[0]);
                
            }
            
        });

    });

    $(document).on('click', '.dk-close', function(){

        blur('out');
        
    });
    
    $('.navbar#mobile section').click(function(){
        
        var $iconArray = $('.navbar#mobile').attr('lang').split(':');
        
        var $menuContent = $('.navbar#mobile > div');
        
        var $svg = $('.navbar#mobile section svg');
        
        $menuContent.slideToggle(function(){
            
            if($menuContent.is(':visible')){
                
                $svg.removeClass($iconArray[0]);
                
                $svg.addClass($iconArray[1]);
                
            }else{
                
                $svg.removeClass($iconArray[1]);
                
                $svg.addClass($iconArray[0]);
                
            }
            
        });

    });
    
    $('.make-payment').click(function(){
        
        window.location.reload(true);
        
    });
    
    if($('#order').length > 0){

        order($("#" + $('#order').val()), false);

        blur('in');

        $('#order').remove();

    }
	
	$('.show-next').hover(function(){
		
		$(this).next().removeClass('hide');
		
	});
	
	$('.show-next-click-mobile').click(function(){
		
		$this = $(this);
		
		$(this).nextAll('.submenu').slideToggle(500, function(){
			
			if($('.submenu').is(':visible')){
				
				$this.children().removeClass('fa-plus-circle');
			
				$this.children().addClass('fa-minus-circle');
				
			}else{
				
				$this.children().removeClass('fa-minus-circle');
			
				$this.children().addClass('fa-plus-circle');
				
			}
			
		});
		
	});
	
	$('.show-next-click').click(function(){
		
		$('.submenu .name').each(function(){
			
			$(this).children().removeClass('fa-chevron-up');
			
			$(this).children().addClass('fa-chevron-down');
			
		});
		
		$('.submenu .separator').each(function(){

			if(!$(this).hasClass('hide')){
				
				$(this).addClass('hide');
				
			}

		});
		
		$(this).next().removeClass('hide');
		
		$(this).children().removeClass('fa-chevron-down');
		
		$(this).children().addClass('fa-chevron-up');
		
	});
	
	/*$('.submenu').mouseleave(function(){
		
		$(this).addClass('hide');
		
	});*/
	
	$('.submenu .separator a').each(function(){
		
		if($(this).hasClass('a-selected')){
			
			var $parent = $(this).parents('.separator');
			
			$parent.removeClass('hide');
			
			$parent.children('i');
			
			$parent.prev().children().removeClass('fa-chevron-down');
			
			$parent.prev().children().addClass('fa-chevron-up');
			
		}
		
	});
	
	$(document).click(function($event){
		
		if($($event.target).attr('class') !== 'submenu' && $($event.target).parents('.submenu').attr('class') !== 'submenu'){
		
			$('.submenu').addClass('hide');
		
		}
		
	});
	
	$(document).scroll(function(){
		
		var $top = $(window).scrollTop();
		
		if($top > 330) {
			
			$('#cart').addClass('fixed-top');
			
			$('#cart').css('background-color', '#fff');
			
			$('#cart-content').css('width', '100%');
			
			$('#cart-content').css('left', '0');
			
			$('#cart-icon').css('display', 'none');
			
		}else{
			
			$('#cart').removeClass('fixed-top');
			
			$('#cart-content').css('width', 'auto');
			
			$('#cart-content').css('left', 'unset');
			
			$('#cart-icon').css('display', 'block');
			
		}
		
	});
    
    filterDescription();

});
