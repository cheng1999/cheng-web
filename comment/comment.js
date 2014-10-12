var loaded=0;
var loading=document.getElementById("loading");
var reply;

load(1);
setTimeout(function(){
    load(2);
	loaded+=20;
}, 1000);

$(window).scroll(function() {   
	if ($(window).scrollTop() + $(window).height() == $(document).height()
		&&
		(document.getElementById("cmt-1")==null)) {
			
		load(1);
		setTimeout(function(){
			load(2);
			loaded+=20;
		}, 1000);
		
	}
});

var mode;
function load(mode) {//----------------------------------loading comment----------------------------------
	document.getElementById("loading").style.visibility = "visible";
    
	$.ajax({
		url: 'load.php?load='+loaded+'&mode='+mode,
		type: 'POST',
		data: {
			page:$(this).data('page'),
		},
		success: function(response){
			if(response){
				loading.style.visibility = "hidden";
				if(mode==1){
					$("#commentList").append(response);
					enableReply();
				}
				if(mode==2){
					$("#replyList").append(response);
					reply=document.getElementById("replyList").getElementsByClassName("reply");
					comment=document.getElementById("commentList");
					for(var i=0;reply.length!=0;i++){
						comment.getElementsByTagName("div")[reply[0].id].appendChild(reply[0]);
					}
				}
			}
		}
	});

if (document.getElementById("cmt-1")!=null){
	loading.style.visibility = "hidden";
	document.getElementById("cmt-1").innerHTML="<center style=\"color:#4D4D4D;font-weight:bold;\">no more</center>";
}
}


var Cid;
function enableReply(){
$(".cmt #reply").click(function(){
  Cid=$(this).parent().attr("id").substring(4);
  $(this).parent().append($('.cmt #commentbox'));
  $(".cmt #commentbox #Cid").attr('value',''+Cid);
});
}


















