$("#fin_id").attr("disabled", "disabled");
$(document).ready(inicializarElementos);
function inicializarElementos()
{
	$("#activ").click(clickElemento);
}
function clickElemento()
{
	$("#fin_id").removeAttr("disabled");
}

