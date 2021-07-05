$(document).ready(function(){
var down = false;
$('#bell').click(function(e){
var color = $(this).text();
if(down){

$('#box').css('height','0px');
$('#box').css('opacity','0');
down = false;
}else{

$('#box').css('height','auto');
$('#box').css('opacity','1');
down = true;

}

});

$('#bell2').click(function(e){
	var color = $(this).text();
	if(down){
	
	$('#box').css('height','0px');
	$('#box').css('opacity','0');
	down = false;
	}else{
	
	$('#box').css('height','auto');
	$('#box').css('opacity','1');
	down = true;
	
	}
	
	});

});

function disable_modal(){
	$('#request').hide();
	$('body').removeClass('modal-open');
	$('.modal-backdrop').remove();
}