<?php
/* +**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.1
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 * Contributor(s): YetiForce.com
 * ********************************************************************************** */

//Overrides GetRelatedList : used to get related query
//TODO : Eliminate below hacking solution

$startTime = microtime(true);
require_once 'include/RequirementsValidation.php';
require_once 'include/Webservices/Relation.php';
require_once 'include/main/WebUI.php';
require_once 'vtlib/Vtiger/Module.php';

define('REQUEST_MODE', 'WebUI');

$webUI = new Vtiger_WebUI();
$webUI->process(AppRequest::init());
