function setBackgroundColor(element)
{
    var idx=element.selectedIndex;
    var val=element.options[idx].value;
	
    document.body.setAttribute( "style",   
        "background-color: " + val );
 }

function setFontColor(element)
{
    var idx=element.selectedIndex;
    var val=element.options[idx].value;
	
    document.body.setAttribute( "style",   
        "color: " + val );
 }

function setFont(element)
{
    var idx=element.selectedIndex;
    var val=element.options[idx].value;
	
    document.body.setAttribute( "style",   
        "font-family: " + val );
 }

function addTextNode(element) 
{
	var newItem=document.createElement("LI")
	var textnode=document.createTextNode("Test")
	newItem.appendChild(textnode)
	var list=document.getElementById("myList");
	list.insertBefore(newItem,list.childNodes[0]);
}

function changeText()
{
	var textnode=document.createTextNode("Zmieniony(replaceChild)");		
	var item=document.getElementById("text");	
	item.replaceChild(textnode,item.childNodes[0]);	
}

function changeText2()
{
	document.all.namedItem("text").innerHTML = "Zmieniony przez metode namedItem"; 
}


function remove()
{	
	var item=document.getElementsByTagName('p')[0];	
	item.parentNode.removeChild(item);
}

/**/
var color   = 'red'; 
var columns = 25;    
var rows    = 25;   
var mouse   = 0;     
 

window.onload = function (){
    table_create(); 
    table_events();
    document.body.ondragstart = function(e){return false}   
    document.getElementById('drawing_table').onmousedown = mousedown;
    document.getElementById('drawing_table').onmouseup   = function(e){mouse = 0}
}
 

function mousedown(e){ 
    var evt = e || window.event;
	 if ( e.ctrlKey ) {
		color = 'blue';
		}
	if ( e.shiftKey ) {
		color = 'red';
		}

		if ( e.altKey ) {
		color = 'white';
		}

  
    if (evt.preventDefault) e.preventDefault();   
    if (evt.which) mouse = evt.which;
    else           mouse = evt.button;  
    if (this.tagName == 'TD' && mouse == 1) this.style.backgroundColor = color;
}
 

function table_create(){
    var tbl = ''; 
   
    for (var i=0; i<rows; i++){
        tbl = tbl + '<tr>';
        for (var j=0; j<columns; j++)    tbl = tbl + '<td width = 10px height=15px></td>';
        tbl = tbl + '</tr>\n';
    }
  
    var div = document.getElementById('drawing_table');
    div.innerHTML = '<table cellspacing="0" cellpadding="0">' + tbl + '</table>';
}
 

function table_events(){
  
    var td = document.getElementById('drawing_table').getElementsByTagName('td');
   
    for (var i=0; i<td.length; i++){
        td[i].onmousedown = mousedown;
     
        td[i].onmouseover = function (e){if (mouse == 1) this.style.backgroundColor = color}
    }
}

function set_color(obj){
    color = obj.style.backgroundColor;
    var tbl = document.getElementById('drawing_table').firstChild;
    tbl.style.borderColor = color;
}

/**/


var img;
var dragData=null;

function windowOnload() 
{
    img=document.getElementById("image")
    if(window.addEventListener) 
    {
        img.addEventListener('mousedown',startDrag,false);
        document.body.addEventListener('mousemove',drag,false);
        document.body.addEventListener('mouseup',stopDrag,false);
    }
    else if(window.attachEvent) 
    {
        img.attachEvent('onmousedown',startDrag);
        document.body.attachEvent('onmousemove',drag);
        document.body.attachEvent('onmouseup',stopDrag);
	}
}

function startDrag(ev) 
{
    if(!dragData) 
    {
        ev=ev||event;
        dragData=
        {
    	    x: ev.clientX-img.offsetLeft,
        	y: ev.clientY-img.offsetTop
        };
    };
}

function drag(ev) 
{
    if(dragData) 
    {
        ev=ev||event;
        img.style.left=ev.clientX-dragData.x+"px";
        img.style.top=ev.clientY-dragData.y+"px";
	}
}

function stopDrag(ev) 
{
	if(dragData) 
	{
  		ev=ev||event;
  		img.style.left=ev.clientX-dragData.x+"px";
  		img.style.top=ev.clientY-dragData.y+"px";
  		dragData=null;
	}
}

function getFocus()
{
	document.getElementById('download').focus()
}

function getBlur()
{
	document.getElementById('download').blur()
}

function submitAlert()
{
	window.alert("Wyslano");
}

function resetAlert()
{
	window.alert("Wyczyszczono");
}

/**/



