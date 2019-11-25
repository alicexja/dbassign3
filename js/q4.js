window.onload=function()
{

prepareListener();
}

function prepareListener()
{
var sel = document.getElementById("docid");
sel.addEventListener("change",function(){
var val=document.getElementById("docid").value;
document.getElementById("inv_docid").value = val;
//this.form.submit();
});

}

function checkSubmit()
{
var r=confirm("Are you sure to delete this doctor?");
if (r == true)
{
document.getElementById("docform").submit();
}
else
{
return;
}
}
