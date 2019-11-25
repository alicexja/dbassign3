window.onload=function()
{
  prepareListener();
}

function prepareListener(){
	var sel = document.getElementById("docid");
	sel.addEventListener("change",getPatient);
	
	var inv = document.getElementById("docform");
	inv.addEventListener("change",delFunction);
}

function getPatient()
{
	this.form.submit();
}

function delFunction(e)
{
	var txt;
	if(confirm("Are you sure to delete the doctor?"))
	{
		txt=e;
		document.getElementById("inv_docid").value=txt;
		document.getElementById("docform").submit();
	}		
}
