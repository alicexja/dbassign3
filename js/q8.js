window.onload=function(){
prepareListener();
}
function prepareListener()
{
var sel = document.getElementById("assignDoc");
sel.addEventListener("change",function()
{
this.form.submit();
});

var sel1 = document.getElementById("stopDoc");
sel1.addEventListener("change",function(){

this.form.submit();
});
}

