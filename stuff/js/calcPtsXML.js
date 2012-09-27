/*
 Loads and parses the xml file. CallBack is triggered when the xml is ready.
*/


(function($) {

function globalParameters(xml, fnk){
	var parameterObject = {};
	 $(xml).find(':first').each(function(i){
		
		  for (var i = 0; i < this.attributes.length; i++) {
		  var attrib = this.attributes[i];
		  
			 parameterObject[attrib.name] = attrib.value;
		
		}
  
});
	 fnk.call(parameterObject);
	 
}


function globalContent(xml, fnk){
	var contentArray = [];
	
 $(xml).find('asset').each(function(){
	var xmlObj = {};
	
	//Parse XML node attributes
	for (var i = 0; i < this.attributes.length; i++) {
	  var attrib = this.attributes[i];
	
	  xmlObj[attrib.name] = attrib.value;
	
	}
	
	//Parse XML nodes
	
		$(this).children().each(function(){
			xmlObj[this.tagName] = $(this).text();
		});
	
	contentArray.push(xmlObj);					
	
});
	
	 fnk.call(contentArray);
}

function globalSimpleContent(xml, fnk){
	var contentArray = [];
	
	 $(xml).find('asset').each(function(){
		
		contentArray.push(this.attributes[0].value);				
	  });
	  
	 fnk.call(contentArray);
}


function xmlError(xhr, ajaxOptions, thrownError){
    alert(xhr.status + " " + "Xml File: failed to load");
 }  




$.calcPtsXML = function(obj, fnk) {

var $obj = obj;
var $fnk = fnk;

var time = new Date().getTime();
	
    jQuery.ajax({
			type: "GET",
			url: obj.xml + '?time=' + time,
			dataType: "xml",
			context: $fnk,
			success: function(xml){
				var $this = this;
				
				//Parse Xml: Parameters
				globalParameters(xml, function(){
					
				var parameterObject = this;
		
				//Parse Xml: Content
				if($obj.type == 'default'){
					globalContent(xml, function(t){
						
						var contentArray = this;
						$this.call({content:contentArray, param:parameterObject});
					});		
				}
			
				if($obj.type == 'simple'){
					globalSimpleContent(xml, function(){
						var contentArray = this;
						$this.call({content:contentArray});
					});	
				}
			});
	
			
			}
			,
	 		 error: xmlError
    });
	
}

})(jQuery);