<?php
include_once __DIR__.'/config.php';         
include_once __DIR__.'/tools.php';        
include_once __DIR__.'/functions.php';    
include_once __DIR__.'/tgdb.php';    
$REFCONFIGFile = '/etc/svxlink/svxreflector.conf';
    if (fopen($REFCONFIGFile,'r'))
       { $REFCONFIG = parse_ini_file($REFCONFIGFile,true,INI_SCANNER_RAW);  
        $callsign = $REFCONFIG['ReflectorLogic']['CALLSIGN'];
        $fmnetwork =$REFCONFIG['ReflectorLogic']['FMNET'];
        $tgUri = $REFCONFIG['ReflectorLogic']['TG_URI'];
}



if (isset($_POST['btnUpdateTgs']))
    {

        $retval = null;
        $screen = null;
        //$sAconn = $_POST['sAconn'];
        //$password = $_POST['password'];
        //exec('nmcli dev wifi rescan');
        $command = "sudo wget ".$tgUri." 2>&1";
        exec($command,$screen,$retval);
	//if ($retval) {
	//echo "*";
	$command2 = "sudo mv /var/www/html/tgdb.txt /var/www/html/include/tgdb.php 2>&1";
        exec($command2,$screen,$retval);
	//}
        //$_SESSION['refresh']=True; header("Refresh: 3");

};

?>
<span style="font-weight: bold;font-size:14px;">Talk Groups</span>
<fieldset style=" width:620px;box-shadow:0 0 10px #999;background-color:#e8e8e8e8;margin-top:10px;margin-left:0px;margin-right:0px;font-size:12px;border-top-left-radius: 10px; border-top-right-radius: 10px;border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
  <form method="post">
  <table style="margin-top:3px;">
    <tr height=25px>
      <th width=100px>TG #</th>
      <th width=30px> M </th>
      <th width=30px> A </th>
      <th>TG Name</th>
    </tr>
<?php
foreach ($tgdb_array as $tg => $tgname)
{ 

		echo "<td align=\"left\">&nbsp;<span style=\"color:#b5651d;font-weight:bold;\">$tg</span></td>";
		echo "<td><button type=submit id=jumptoM name=jmptoM class=monitor_id value=\"$tg\"><i class=\"material-icons\" style=\"font-size:15px;\">volume_up</i></button></td>";
                echo "<td><button type=submit id=jumptoA name=jmptoA class=active_id value=\"$tg\"><i class=\"material-icons\" style=\"font-size:15px;\">cell_tower</i></button></td>";
		echo "<td style=\"font-weight:bold;color:#464646;\">&nbsp;<b>".$tgname."</b></td>";
		echo"</tr>\n";
};

?>
  </table>
<!--<button name="btnUpdateTgs" type="submit" class="red" style="height:30px; width:120px; font-size:12px;">Update Tgs</button>-->
</form>
</fieldset>
