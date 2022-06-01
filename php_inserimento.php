<?php 
$cognome=$_POST['Cognome'];
$email=$_POST['E-mail'];
$Nazione=$_POST['nazione'];
$datan=$_POST['Data_di_nascita'];
$sesso=$_POST['Sesso'];
if (isset($_POST["ECDL"]))
$ecdl=$_POST['ECDL'];
if (isset($_POST["FIRST"]))
$first=$_POST['FIRST'];
if (isset($_POST["PET"]))
$pet=$_POST['PET'];

echo"<b>VALLORI INSERITI: </b> <br>";
echo"Cognome: $cognome <br>";
echo"E-mail: $email <br>";
echo"Nazione: $Nazione <br>";
echo"Data di nascita: $datan <br>";
echo"Sesso: $sesso <br>";
if (isset($ecdl))
{
echo"Hai selezionato ECDL";
}
if (isset($first))
echo"Hai selezionato FIRST";
if (isset($pet))
echo"Hai selezionato PET";
?>
