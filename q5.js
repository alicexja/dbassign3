
windows.onload(){
checkSubmit();
}

function checkSubmit(){
alert("clicked");
var hname=document.getElementById("newHname").value;
if(!hname)
{
alert("please input new hospital name");
return;
}

}
