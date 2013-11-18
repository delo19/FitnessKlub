function updated1(element)
{
    var idx=element.selectedIndex;
    var val=element.options[idx].value;
	
    document.body.setAttribute( "style",   
         "background-color: " + val );
 }

function updated2(element)
{
    var idx=element.selectedIndex;
    var val=element.options[idx].value;
	
    document.body.setAttribute( "style",   
         "color: " + val );
 }

function updated3(element)
{
    var idx=element.selectedIndex;
    var val=element.options[idx].value;
	
    document.body.setAttribute( "style",   
         "font-family: " + val );
 }

function update4(element) 
{
	var newItem=document.createElement("LI")
	var textnode=document.createTextNode("Test")
	newItem.appendChild(textnode)
	var list=document.getElementById("myList");
	list.insertBefore(newItem,list.childNodes[0]);
}

function update5()
{
	var textnode=document.createTextNode("Zmieniony(replaceChild)");		
	var item=document.getElementById("text");	
	item.replaceChild(textnode,item.childNodes[0]);	
}

function update6()
{	
	var item=document.getElementsByTagName('p')[0];	
	item.parentNode.removeChild(item);
}
