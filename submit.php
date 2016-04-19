<?php
if(isset($_POST["amount"])){
$Amount=$_POST['amount'];
$From=$_POST['from'];
$To=$_POST['to'];
$result = file_get_contents('http://www.xe.com/currencyconverter/convert/?Amount='.$Amount.'&From='.$From.'&To='.$To);
preg_match('/<td width="47%" align="left" class="rightCol">(.*?)<td width="6%" valign="middle" align="center" rowspan="2" class="invCol">/s',$result,$data);
echo $data[0];
}
?>
