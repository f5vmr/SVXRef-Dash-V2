<?php
// Report all errors except E_NOTICE
// error_reporting(E_ALL & ~E_NOTICE);
// disable all.

if ( (defined('REFCONFIG')) && (defined('SVXCONFPATH')) ) {$REFCONFIGFile = SVXCONFPATH."/".REFCONFIG ; }
else {$REFCONFIGFile = trim(substr(shell_exec("grep CFGFILE /etc/default/svxlink"), strrpos(shell_exec("grep CFGFILE /etc/default/svxlink"), "=")+1)); }
    if (fopen($REFCONFIGFile,'r'))
       {$REFCONFIG = parse_ini_file($REFCONFIGFile,true,INI_SCANNER_RAW);
         $callsign = $REFCONFIG['ReflectorLogic']['CALLSIGN'];
         // check if we are a repeater or a simplex system
         $check_logics = explode(",",$REFCONFIG['GLOBAL']['LOGICS']);
            foreach ($check_logics as $logic_key) {
            if ($check_logics[0]=="RepeaterLogic") {
              // if we work with CTCSS please set REPORT_CTCSS with correct value in svxreflector.conf
              $ctcss = $REFCONFIG['RepeaterLogic']['REPORT_CTCSS'];
              $system_type="IS_DUPLEX"; // if repeater
              $dtmfctrl = $REFCONFIG['RepeaterLogic']['DTMF_CTRL_PTY']; }
            if ($check_Logics[0] =="SimplexLogic") {
            // if we work with CTCSS please set REPORT_CTCSS with correct value in svxreflector.conf
            $ctcss = $REFCONFIG['SimplexLogic']['REPORT_CTCSS'];
            $system_type = "IS_SIMPLEX"; // if simplex
            $dtmfctrl = $REFCONFIG['SimplexLogic']['DTMF_CTRL_PTY'];
        }
         }
         // additional variables need to define in svxreflector.conf in stanza [ReflectorLogic]: API, FMNET, TG_URI
         // FMNET - Name of FM-Network
         // API - URI for access the status of SVXReflector you are connected
         // TG_URI ??? I don't know...
         $refApi = $REFCONFIG['ReflectorLogic']['API'];
         $fmnetwork =$REFCONFIG['ReflectorLogic']['FMNET'];
         $tgUri = $REFCONFIG['ReflectorLogic']['TG_URI'];
         $nodeinfoFile = $REFCONFIG['ReflectorLogic']['NODE_INFO_FILE'];
    $globalRf = $REFCONFIG['GLOBAL']['RF_MODULE'];
       }
else { $callsign="NOCALL";
       $fmnetwork="no registered";
       $refApi="";
        }
?>