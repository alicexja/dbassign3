window.onload = function()
{
prepareListener();
}

function prepareListener()
{
var sel = document.getElementById("docid");
sel.addEventListener("change",getDocPic);
}

function getDocPic(){
this.form.submit();
}
