<?php
### =============================================================
### Mastop InfoDigital - Paix�o por Internet
### =============================================================
### Arquivo de redirecionamento de link
### =============================================================
### Developer: Fernando Santos (topet05), fernando@mastop.com.br
### Copyright: Mastop InfoDigital � 2003-2007
### -------------------------------------------------------------
### www.mastop.com.br
### =============================================================
### $Id: go2.php,v 1.1.1.1 2007/04/30 23:18:58 topet05 Exp $
### =============================================================
include_once "../../mainfile.php";
include_once "header.php";
$tac = (!empty($_REQUEST['tac'])) ? intval($_REQUEST['tac']) : 0;
$go2_classe =& mgo_getClass(MGO_MOD_TABELA1, $tac);
if (empty($tac) || $go2_classe->getVar('go2_30_link') == '') {
    exit();
}else{
$go2_classe->atualizaCount();
header("Location: ".$go2_classe->getVar("go2_30_link"));
exit();
}