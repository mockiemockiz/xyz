    try 
	  {
        req = new XMLHttpRequest(); /* e.g. Firefox */
      } catch(e) {
          try 
		  {
          req = new ActiveXObject("Msxml2.XMLHTTP");
   /* some versions IE */
          } catch (e) {
              try 
			  {
              req = new ActiveXObject("Microsoft.XMLHTTP");
  /* some versions IE */
              } catch (E) {
                 req = false;
              }
          }
      }


function responseAJAX(pageElement) {
    var output = '';
	if (req.readyState==4 || req.readyState=="complete")
	{
		document.getElementById(pageElement).innerHTML =  req.responseText;
		//document.getElementById(trigger).innerHTML = '';
		//clearTimeout(a);
	}
	if (req.readyState==1 || req.readyState=="loading")
	{
		document.getElementById(pageElement).innerHTML ='<div id="preloading"></div>';
		//document.getElementById(trigger).innerHTML ='<div id="trigger"></div>';
		//document.getElementById(trigger).style.display='block';
	}
}


//==============================================================================================
   
function callAJAX(url, pageElement) {
      document.getElementById(pageElement).innerHTML = 'Please Wait';
      req.onreadystatechange = function() {responseAJAX(pageElement);};
 	  req.open("GET",url,true);
      req.send(null);
	  }
	  
//==============================================================================================
function postAJAX(url,pageElement,frm) {
	var form=document.getElementById(frm).elements;
	var fg="";
	for(s=0;s<form.length;s++)
	{
		fg += form[s].id + "=" + form[s].value;
		if(s!=form.length-1)
		{
		fg += "&";	
		}
	form[s].value="";
	}
	  document.getElementById(pageElement).innerHTML = 'Please Wait';
	  req.onreadystatechange = function() {responseAJAX(pageElement);};
	  req.open("POST",url,true);
	  req.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	  req.send(fg);
}

function getAJAX(url,pageElement,frm) {
	var form=document.getElementById(frm).elements;
	var fg="";
	for(s=0;s<form.length;s++)
	{
		fg += form[s].id + "=" + form[s].value + "&";
	}
	  document.getElementById(pageElement).innerHTML = 'Please Wait';
	  req.onreadystatechange = function() {responseAJAX(pageElement);};
	  req.open("GET",url+"&"+fg,true);
	 // req.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	  req.send(fg);
}

function bersih(frm) {
	var form=document.getElementById(frm).elements;
	for(s=0;s<form.length;s++)
	{
		form[s].value="";
	}
}
	
 function smiley(smiley,el){
	 old=document.getElementById(el);
	 old.value=old.value + " " + smiley;
 }
 
function close_rb(el){
document.getElementById(el).style.display='none';	
}

function post_check(url,pageElement,id){
	var form=document.getElementById(id).elements;
	var all_el=form.length;
	var data='';
	for(a=0;a<all_el;a++){
		if(form[a].checked==true){
		data += form[a].id +"="+form[a].value + "&";
		}
	}
	
	  document.getElementById(pageElement).innerHTML = 'Please Wait';
	  req.onreadystatechange = function() {responseAJAX(pageElement);};
	  req.open("POST",url,true);
	  req.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	  req.send(data);
	
}

function check_all(id){
//Ambil semua elemen dalam id formCheck
allCheckList = document.getElementById(id).elements;
//Hitung banyaknya elemen
jumlahCheckList = allCheckList.length;
//Jika tombolCheck bernilai Check All
if(document.getElementById("tombolCheck").value == "Check All" || document.getElementById("tombolCheck").innerHTML== "Check All"){
	for(i = 0; i < jumlahCheckList; i++)
	{
	//semua elemen ke-i checkbox nya diset true (dicentang)
	allCheckList[i].checked = true;
	}
//Set nilai tombolCheck menjadi Uncheck All
document.getElementById("tombolCheck").value = "Uncheck All";
document.getElementById("tombolCheck").innerHTML= "Uncheck All"
//Jika tombolCheck tidak bernilai Check All (sudah dirubah menjadi Uncheck All)
}
else
{
	for(i = 0; i < jumlahCheckList; i++)
	{
	//semua elemen ke-i checkbox nya diset false (tidak dicentang)
	allCheckList[i].checked = false;
	}
//Set nilai tombolCheck menjadi Check All
document.getElementById("tombolCheck").value = "Check All";
document.getElementById("tombolCheck").innerHTML= "Check All"
}
}