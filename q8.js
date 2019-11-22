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
}

