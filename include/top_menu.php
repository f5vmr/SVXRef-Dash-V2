<p style="padding-right: 5px; text-align: right; color: #000000;">
	<a style="color: black;">Display</a> |
	<a href="/index.php" style="color: #0000ff;">Dashboard</a> | 
	<a href="/node.php" style="color: #0000ff;">Nodes</a> | 
	<a href="/tg.php" style="color: #0000ff;">Talk Groups</a> | 
	<a href="/dtmf.php" style="color: #0000ff;">Dtmf</a> | 
	<!--<a href="/audio.php" style="color: #0000ff;">Audio</a> | 
	<a href="/wifi.php" style="color: #0000ff;">Wifi</a> | 
	<a href="/network.php" style="color: #0000ff;">Network</a> |
	<a href="/svxlink.php" style="color: #0000ff;">SVXLink</a> |-->
	<a href="/nodeInfo.php" style="color: #0000ff;">Node Info</a> |
	
	 

<?php
include_once('parse_svxconf.php') 
/*if (fopen($REFCONFIGFile,'r'))
{

  $REFCONFIG = parse_ini_file($REFCONFIGFile,true,INI_SCANNER_RAW);
  $logics = explode(",",$REFCONFIG['GLOBAL']['LOGICS']);
  foreach ($logics as $key) {
	if ($key == "SimplexLogic") $isSimplex = true;
	if ($key == "RepeaterLogic") $isRepeater = true; 
  };
  $logics = explode(",",$REFCONFIG['GLOBAL']['LOGICS']);
  if ($isSimplex) $modules = explode(",",str_replace('Module','',$REFCONFIG['SimplexLogic']['MODULES']));
  if ($isRepeater) $modules = explode(",",str_replace('Module','',$REFCONFIG['RepeaterLogic']['MODULES']));
  foreach ($modules as $key){
	if ($key == "EchoLink") $isEchoLink = true;
 }
 */
 //if ($isEchoLink==true) {echo ' <a href="/echolink.php" style="color: #0000ff;">EchoLink</a> |';};
//$globalRf = $REFCONFIG['GLOBAL']['RF_MODULE'];

/*if ($globalRf <> "No")
{
	echo'	<a href="/rf.php" style="color: #0000ff;"> Rf</a> |';
}
}*/
?>
	<a href="/log.php" style="color: #0000ff;">Log</a> |
	<a href="/update.php" style="color: #0000ff;">Update</a> |
	<a href="/power.php" style="color: #0000ff;">Power</a> 
	<p style="padding-right: 5px; text-align: right; color: #000000;" <a style="color: black;">Full Edit</a> |
	<a href="editor.php" style="color: crimson;" id="svxlink">SVXLink </a> |
	<a href="editor.php" style="color: crimson;" id="gpio">GPIO</a>|
	<a href="editor.php" style="color: crimson;" id="echolink">EchoLink</a>|
	<a href="editor.php" style="color: crimson;" id="metarinfo">MetarInfo</a></p>
</p>
