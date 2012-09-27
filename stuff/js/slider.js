(function($) {

function updateBarPos(_$this){
		var $base = _$this.data('baseParams');
		
		var $value = $base.btn.position().left - $base.bar.position().left;
		_$this.find('.slider-bar-bar').width($value + $base.btnOffset);
		
}

function updateTotal(_$this){
		var $base = _$this.data('baseParams');
		
		var $value = $base.btn.position().left - $base.bar.position().left;
		var $valueNew = $base.sliderParams.total / _$this.find('.slider-bar-container').outerWidth();
		
		_$this.data('baseParams').total = Math.round(($value + 20) * $valueNew);
		
		var _$total = _$this.data('baseParams').total;
		var $amount = $base.sliderParams.symbol == 'none' ? digits(_$total) : $base.sliderParams.symbol + digits(_$total);
		_$this.trigger('sliderTotal',{amount:$amount,id:_$this});
}

function updatePoints(_$this){
	var $base = _$this.data('baseParams');
	
	 _$this.data('baseParams').points =  ($base.total * Number($base.sliderParams.point)) * $base.sliderParams.multiplier;
	 var $points = digits($base.points);
	_$this.trigger('sliderPoints',{pts:$points, id:_$this});
}

function digits($string){ 
	 $string = String($string).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
	 
   return $string;
}

function draggableUpdateHandler(evt){
	var $data = evt.data;
	draggableUpdate($data.id)
}

function draggableUpdate(_$this){
	
	var $base = _$this.data('baseParams');
	 
	$base.btnOffset = ($base.btn.outerWidth() / 2);
	  
	var $x1 = $base.bar.offset().left - $base.btnOffset;
	var $x2 = $base.bar.offset().left + ($base.bar.outerWidth()  - $base.btnOffset);
	$base.btn.draggable({containment:[$x1, 0, $x2, 0], axis:'x', cursor:'pointer'});
}


function initialize(_$this,fnk){
	
	var $base = _$this.data('baseParams');
	
	_$this.data('baseParams').points = 0;
	  
	$base.doc  = $(document);
    $base.bar  = _$this.find('.slider-bar-container');
	$base.btn = _$this.find('.slider-bar-btn');
	
	var $amount  = $base.sliderParams.symbol == 'none' ? '0' : $base.sliderParams.symbol + '0';
	_$this.find('.slider-content-amount').html($amount);
	_$this.find('.pts-total-amount').html( $base.points);
	
	 draggableUpdate(_$this);
	touchIpad();
	
	fnk.call();
}


	function dragUpdate(evt){
		var $data = evt.data;
		
		updateBarPos($data.id);
		updateTotal($data.id);
		updatePoints($data.id);
	}
		
	function releaseOutsideHandler(evt){
			var $data = evt.data;
			
			releaseOutside($data)
	}
	
	function releaseOutside($data){
			
			var $base = $data.id.data('baseParams');
			
			updateBarPos($data.id);
			updateTotal($data.id);
			updatePoints($data.id);
				
			$data.id.trigger('sliderMenu',{pts:$base.points, id:$data.id});
	}
				
$.fn.slider = function(params) {
	
	var _$this = this;
	
	_$this.data('baseParams',{
		sliderParams:'',
		bar:'',
		btn:'',
		btnOffset:'',
		total:'',
		points:''
		})
	
	var $base = _$this.data('baseParams');
	
	// merge default and parameters  
	$base.sliderParams = $.extend({total: '100', symbol:'none', point:'1',multiplier:'1'}, params);

	
	initialize(this, function(){
		
			_$this.bind("mouseup.slider",{id:_$this} ,releaseOutsideHandler);
		
			$base.btn.bind( "drag.slider", {id:_$this} ,dragUpdate);
			$(window).bind('resize.slider',{id:_$this}, draggableUpdateHandler);

		
		});
	


 	return _$this;
}


function touchHandler(event){
	var $element = $(event.target);
	
	if($element.hasClass('slider-bar-btn')){
    var touches = event.changedTouches,
        first = touches[0],
        type = "";
         switch(event.type)
    {
        case "touchstart": type = "mousedown"; break;
        case "touchmove":  type="mousemove"; break;        
        case "touchend":   type="mouseup"; break;
        default: return;
    }
	
    var simulatedEvent = document.createEvent("MouseEvent");
    simulatedEvent.initMouseEvent(type, true, true, window, 1, 
                              first.screenX, first.screenY, 
                              first.clientX, first.clientY, false, 
                              false, false, false, 0/*left*/, null);

    first.target.dispatchEvent(simulatedEvent);
    event.preventDefault();
	}
}

function touchIpad() {
	
	var $deviceAgent = navigator.userAgent.toLowerCase();
    var $agentID = $deviceAgent.match(/(iphone|ipod|ipad)/);

	if($agentID){
		document.addEventListener("touchstart", touchHandler, true);
		document.addEventListener("touchmove", touchHandler, true);
		document.addEventListener("touchend", touchHandler, true);
		document.addEventListener("touchcancel", touchHandler, true); 
	}

}

	
})(jQuery);


