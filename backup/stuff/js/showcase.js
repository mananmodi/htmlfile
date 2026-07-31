(function($) {

function cloneItem(_$this){
	var $base = _$this.data('baseParams');
		
	$base.clone = _$this.children('div:first').clone(true);
}

function placeContent(element, index, _$this){
	var $base = _$this.data('baseParams');
	
	var $content = element.find('.pts-text');
	var $image = element.find('.pts-image');
	
	$content.html($base.content[index].description);
	$image.html($base.imageArr[index]);
}

function animItem(action, _$this){
	var $l = action == 'append' ? -364 : 0;
	
	var easing = 'easeOutCubic';
	var duration = 600;
	
	var step = function(){
		var $left = _$this.children('div:first').position().left;
		_$this.children('div:eq(1)').css('left',364 + $left);
	}
	
	var complete = function(){
		var $d = action == 'append' ? 'div:first' : 'div:last';
		destroyItem(_$this.children($d),_$this);
	}
	
	 _$this.children('div:first').stop(false,false).animate({left:$l}, {duration:duration, easing: easing, step:step, complete:complete});
}

function destroyItem(element,_$this){
	element.remove();
	cloneItem(_$this);
}


function preloadImages(_$this, fnk) {   
	var $base = _$this.data('baseParams');
	var $count = 0;
	$base.imageArr = [];
	
   $.each($base.content ,function(index){
	
	var $url = $base.content[index].image + "?" + new Date().getTime(); 
	
	// set up the node / element
	var $img = $("<img>");
	
	$base.imageArr.push($img);
	
	$img.attr("src", $url);
	
	$base.imageArr[index].bind("load",function(){ 	
		++$count	 
		$(this).unbind("load");
		$base.content.length == $count ? fnk.call() : "";
	 });
	
    });
}


function initialize(params){
	var _$this = this;
	var $base = _$this.data('baseParams');
	
	 var $params = $.extend({content:[]}, params); 
	 
	 $base.content = $params.content;
	
	
		preloadImages(_$this,function(){
			_$this.find('.pts-item').removeClass('hide-content');
			cloneItem(_$this);
			placeContent(_$this, 0, _$this);
			
		});
		
	
	
}

$.fn.showcase = function() {
	
	var _$this = this;

	
	//Exposed Functions
	var $commands = {createItem:createItem};
	
	    if (typeof arguments[0] === 'string') {  
		
            var property = arguments[1];  
			
            //remove the command name from the arguments  
            var args = Array.prototype.slice.call(arguments);  
            args.splice(0, 1);  
  
           $commands[arguments[0]].apply(_$this, args);  
        }  
        else {  
			_$this.data('baseParams',{
			content:'',
			clone:'',
			imageArr:'',
			commands:''
			})
           initialize.apply(_$this, arguments);  
        }  
	
 	return _$this;
}
	
//Exposed Functions
function createItem(action,index){
	var _$this = this;
	var $base = _$this.data('baseParams');
	
	action == 'append' ? _$this.append($base.clone) : _$this.prepend($base.clone);
	var $element = action == 'append' ? _$this.children('div:last') : _$this.children('div:first');
	var $left = action == 'append' ? 364 : -364;
	$element.css({'left':$left})
	
	placeContent($element,index,_$this);
	animItem(action,_$this);
	
}
})(jQuery);

