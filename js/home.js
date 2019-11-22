window.onload=function(){

prepareListener();
}

function prepareListener(){
var docid = document.getElementById("choose_doc");
docid.addEventListener("change",getDoctor);

}

function getDoctor()
{
//alert();
this.form.submit();
}
