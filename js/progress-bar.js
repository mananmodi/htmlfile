var pct=0;
var handle=0;
function update(){
        $(".progressbar").reportprogress(++pct);
        if(pct==100){
                clearInterval(handle);
                $(".raisingListing li img").val("start");
                pct=0;
        }
}
jQuery(function($){
        $(".raisingListing li img").mouseover(function(){
		
                if(this.value!="start"){
                        handle=setInterval("update()",250);
                        this.value="stop";
                }else{
                        clearInterval(handle);
                        this.value="start";
                }
        });
});