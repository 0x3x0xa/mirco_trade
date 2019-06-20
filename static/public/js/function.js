//active
function menuactice(sub_num,sub_num_son){
	if(!sub_num){
		var sub_num = 0;
	}
	if(!sub_num_son){
		var sub_num_son = 0;
	}
  var childrens = $('.sidebar-menu').children();
  $(childrens[sub_num]).attr('class','active');
  var sub_childrens = $(childrens[sub_num]).children();
  var sub_childrens = $(sub_childrens[1]).children();
  $(sub_childrens[sub_num_son]).attr('class','active');
}

/**
 * WP ajax post
 * @author lukui  2017-02-15
 * @param  {[type]} formurl post url
 * @param  {[type]} data    post data
 * @param  {[type]} locurl  成功后跳转的url
 */
function WPpost(formurl,data,locurl){

    $.post(formurl,data,function(data){
      if (data.type == 1) {

        layer.msg(data.data, {icon: 1,time: 1000},function(){
        	if(locurl){
        		window.location.href=locurl;
        	}else{
        		return true;
        	}
          
        }); 

      }else if(data.type == -1){
        layer.msg(data.data, {icon: 2}); 
      }else{
      	 layer.msg(data.msg, {icon: 2}); 
      }
    });
}

/**
 * WP ajax get
 * @author lukui  2017-02-16
 * @param  {[type]} geturl [description]
 * @param  {[type]} locurl [description]
 */
function WPget(geturl,locurl){

	$.get(geturl,function(data){
    	if (data.type == 1) {
          layer.msg(data.data, {icon: 1,time: 1000},function(){
          	if (locurl) {
          		window.location.href=locurl;
          	}else{
              return data;
            }
            
          }); 

        }else if(data.type == -1){
          layer.msg(data.data, {icon: 2}); 
        }
    });
}

function playSound() {
                var borswer = window.navigator.userAgent.toLowerCase();
                if ( borswer.indexOf( "ie" ) >= 0 )
                {
                    //IE内核浏览器
                    var strEmbed = '<embed name="embedPlay" src="/static/audio/order_notify.mp3" autostart="true" hidden="true" loop="false"></embed>';
                    if ( $( "body" ).find( "embed" ).length <= 0 )
                        $( "body" ).append( strEmbed );
                    var embed = document.embedPlay;

                    //浏览器不支持 audion，则使用 embed 播放
                    embed.volume = 100;
                    //embed.play();这个不需要
                } else
                {
                    //非IE内核浏览器
                    var strAudio = "<audio id='audioPlay' src='/static/audio/order_notify.mp3' hidden='true'>";

                    if($("#audioPlay").length<=0){
                        $( "body" ).append( strAudio );
                    }

                    var audio = document.getElementById( "audioPlay" );

                    //浏览器支持 audio
                    audio.play();
                }
            }
