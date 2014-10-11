/*----------------------------------loading comment----------------------------------*/
var loaded=-20;
var loading=document.getElementById("loading");

load();
setInterval(function(){
	load();
	},1000);

$(window).scroll(function() {   
	if($(window).scrollTop() + $(window).height() == $(document).height()) {
		load();

	}
});

function load() {
if (document.getElementsByClassName("cmt-1")[0]==null){
	document.getElementById("loading").style.visibility = "visible";
    loaded+=20;
	$.ajax({
		url: 'load.php?load='+loaded,
		type: 'POST',
		data: {
			page:$(this).data('page'),
		},
		success: function(response){
			if(response){
				loading.style.visibility = "hidden";
				$("#commentList").append(response);
			}
		}
	});
}

if (document.getElementsByClassName("cmt-1")[0]!=null){
	loading.style.visibility = "hidden";
	document.getElementsByClassName("cmt-1")[0].innerHTML="<center style=\"color:#4D4D4D;font-weight:bold;\">no more</center>";
}

}


/*----------------------------------reply----------------------------------*/
/*
 * 
 *---------------------------still in building------------------------------
 * 
 * 
 * 
 *-------------------------------------------------------------------------*/


















