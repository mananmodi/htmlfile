/* 
	Author: http://codecanyon.net/user/sike
*/      
;(function($){      
	$.fn.extend({
		filterPortfolio: function(options) {
	      	// plugin default options, it's extendable
			var settings = { 
				initFilter: '#all',
				itemUL: '#itemUL',
				filterButtons: [ {'link': '#all', 'dom': 'li'}, {'link': '#book', 'dom': 'li.book'}, {'link': '#web', 'dom': 'li.web'}, {'link': '#card', 'dom': 'li.card'} ], 
				orderbyButtons: [ {'link': '#visit', 'dom': 'span.visit', 'isNumber': true}, {'link': '#name', 'dom': 'strong'}, {'link': '#date', 'dom': 'span.date', 'isNumber': true}],
				orderReverse: false,
				sortOption: {
					duration: 800,
					easing: 'easeInOutQuad',					
					adjustHeight: 'auto',
					easeIn: 'flipInX',
					easeOut: 'flipOutX'
				},
			}; 
			
  			// extends settings with options provided
	        if (options) {
				$.extend(settings, options);
			} 
						
			
			var _this = this; 
			_this.data('settings', settings);
			var _list = $(settings.itemUL);
			var _listClone = _list.clone();
			var _currentList = _listClone.find('li');
			var _filterButtonsLen = settings.filterButtons.length; 
			var _preFilterLink;
			for (var i=0; i < _filterButtonsLen; i++) {
				var _link = $(settings.filterButtons[i].link);
				_link.data('dom', settings.filterButtons[i].dom);
				if(_link.parent().hasClass('current')) _preFilterLink = _link.parent();									
				_link.on('click', function(event) {
					// _list.quicksand( _listClone.find($(this).data('dom')), settings.sortOption);
					if($(this).parent()[0]!=_preFilterLink[0]){
					if(_preOrderLink){
						var _dom = _preOrderLink.find('a').data('dom');
						var _isNum = _preOrderLink.find('a').data('isNumber'); 		
						_currentList = _listClone.find($(this).data('dom'));															
						var _sortedData = _currentList.sorted({
							reversed: _this.data('reversed'),
		            		by: function(v) {
								if(_isNum){
			              			return parseFloat($(v).find(_dom).data('num'));							
								}else{
		              				return $(v).find(_dom).text().toLowerCase();							
								}
			            	}
			          	});				
						_list.quicksand( _sortedData, settings.sortOption);						
						//_currentList = _sortedData;
					}else{
						_list.quicksand( _listClone.find($(this).data('dom')), settings.sortOption);						
						_currentList = _listClone.find($(this).data('dom'));						
					}
					if(_preFilterLink) _preFilterLink.removeClass('current');
					_preFilterLink = $(this).parent();
					_preFilterLink.addClass('current');						
					}
				});
			};
			
			if(settings.initFilter){
				$(settings.initFilter).trigger('click');
			}
			

			var _orderbyButtonsLen = settings.orderbyButtons.length;
			var _preOrderLink;
			_this.data('reversed', false);			
			for (var j=0; j < _orderbyButtonsLen; j++) {
				var _link = $(settings.orderbyButtons[j].link);
				if(_link.parent().hasClass('current')) {
					_preOrderLink = _link.parent();					
				}
				_link.data('dom', settings.orderbyButtons[j].dom);
				_link.data('isNumber', settings.orderbyButtons[j].isNumber);				
				_link.on('click', function(event) {
					var _dom = $(this).data('dom');
					var _isNum = $(this).data('isNumber'); 
					if(settings.orderReverse){
						_this.data('reversed') ? _this.data('reversed', false) : _this.data('reversed', true);
					}else{
						_this.data('reversed', false) 						
					}
					
					var _sortedData = _currentList.sorted({
						reversed: _this.data('reversed'),
	            		by: function(v) {
							if(_isNum){
		              			return parseFloat($(v).find(_dom).data('num'));							
							}else{
	              				return $(v).find(_dom).text().toLowerCase();							
							}
		            	}
		          	});				
					if(!settings.orderReverse&&_preOrderLink){
						if($(this).parent()[0]!=_preOrderLink[0]) _list.quicksand(_sortedData, settings.sortOption);						
					}else{
						_list.quicksand(_sortedData, settings.sortOption);												
					}

					if(_preOrderLink) _preOrderLink.removeClass('current');
					_preOrderLink = $(this).parent();
					_preOrderLink.addClass('current');
				});
			};			
						
			_this.updateAnimation = function(p1, p2){
				if(!p1) p1 = "fadeIn";
				if(!p2) p2 = "fadeOut";
				settings.sortOption = {
					easeIn: p1,
					easeOut: p2
				};
			}

			return this;
		}

	});
	
	$.fn.sorted = function(customOptions) {
		var options = {
			reversed: false,
			by: function(a) {
				return a.text();
			}
		};
		$.extend(options, customOptions);
	
		$data = $(this);
		arr = $data.get();
		arr.sort(function(a, b) {
			
		   	var valA = options.by($(a));
		   	var valB = options.by($(b));
			if (options.reversed) {
				return (valA <= valB) ? 1 : (valA > valB) ? -1 : 0;				
			} else {		
				return (valA <= valB) ? -1 : (valA > valB) ? 1 : 0;	
			}
		});
		return $(arr);
	};	
		
})(jQuery);