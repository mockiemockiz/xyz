function open_modal(url,width,height,margin){
$('#dialog-sl').fadeIn(1500);
var modal=document.getElementById('dialog-sl');

modal.style.top=margin+"px";
modal.style.height=height+"px";
modal.style.width=width+"px";

var content=document.getElementById('dialog_content');

content.style.top=margin+10 +"px";
content.style.width=width-10 +"px";
content.style.height=height-10 +"px";

$('#dialog_content').fadeIn(1500);
$('#dialog_content').load(url);
}

function open_modal_photo(url,width,height,margin){
$('#dialog-sl').fadeIn(1500);

var modal=document.getElementById('dialog-sl');

modal.style.top=margin+"px";
modal.style.height=height+"px";
modal.style.width=width+"px";

var content=document.getElementById('photo_content');

content.style.top=margin+10 +"px";
content.style.width=width-10 +"px";
content.style.height=height-10 +"px";


$('#photo_content').fadeIn(1500);
$('#photo_content').load(url);
}

function close_modal_photo(){
$('#dialog-sl').fadeOut(1500);
$('#photo_content').fadeOut(1500);
}

function close_modal_buddy(){
$('#dialog-sl').fadeOut(8000);
$('#photo_content').fadeOut(8000);
$('#dialog_content').fadeOut(8000);
$('#add_as_buddy').fadeOut(8000);
document.getElementById('already_add').innerHTML='Waiting Confirmation';
}

function close_modal_messages(){
postAJAX('index.php?page=messages&sub=send','messages_form','form_messages'); 
$('#dialog_content').fadeOut(10000);
$('#dialog-sl').fadeOut(8000);
}

function close_modal(){
$('#dialog-sl').fadeOut(1500);
$('#dialog_content').fadeOut(1500);
}

function delete_photo(url,el){
$('#dialog-sl').fadeOut(1500);
$('#photo_content').fadeOut(1500);
callAJAX(url,el);
}

