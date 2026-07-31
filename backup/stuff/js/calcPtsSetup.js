(function($) {
	
	var _$contentArr;
	var _$contentParam;
	var _$last=0;
	var _$lastPts=0;
	
	function sliderAmount(evt,data){
		
		data.id.find('.slider-content-amount').text(data.amount);

	}
	
	function sliderPoints(evt,data){
		data.id.find('.pts-total-amount').text(data.pts);
	}
	
	function sliderMenu(evt, data){
		//alert(data)
			var $pts;
			var $element = data.id.find('.pts-content-group');
			var $spread = _$contentParam.spread - 1;
			 $.each(_$contentArr, function(index) {
				$pts = Number(_$contentArr[index].ptValue);
				
				if(data.pts >= $pts && data.pts < ($pts + $spread) && (_$last < $pts  ||  _$last > ($pts + $spread)) ){

					_$last > $pts ? $element.showcase('createItem','append',index) : $element.showcase('createItem','prepend',index);				
					_$last = $pts;
					
					 return false;
				}
		});
		
		
	}
	
	function sliderInitialize(param){
		
		var slider = $('#points').slider({total:param.total, symbol:param.symbol, point:param.point, multiplier:param.multiplier});

		slider.bind('sliderTotal', sliderAmount);
		slider.bind('sliderPoints', sliderPoints);
		slider.bind('sliderMenu', sliderMenu);
		
	
		
	}
	
	function showcaseInitialize(param){
		
		$('#points').find('.pts-content-group').showcase({content:param});
		

	}

	$(document).ready(function () {
		
				$.calcPtsXML({xml:"stuff/xml/showcase.xml", type:'default'}, function(evt, val){
					_$contentArr = this.content;
					_$contentParam = this.param;
					
					sliderInitialize(this.param);
					showcaseInitialize(this.content);
				
				});
				
	
	});



})(jQuery);