<script type="text/javascript">
function ShowSelected(x,y)
{
/* Para obtener el valor */
var x,y;
switch(a.value){
    case "0":x="xxxx";break;
    case "1":x="INS";break;
    case "2":x="REP";break;
    case "3":x="PPT";break;
    case "4":x="PRC";break;
    case "5":x="MAN";break;
}
switch(b.value){
    case "0":x="xxxx";break;
    case "1":y="ING";break;
    case "2":y="ADM";break;
    case "3":y="VEN";break;
    case "4":y="MKT";break;
    case "5":y="PRD";break;
}

title.value  = x + "-" + y;
}
</script>