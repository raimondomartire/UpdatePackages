<?php

/**
 * Mail scanner action bind Leads
 * @package YetiForce.MailScanner
 * @copyright YetiForce Sp. z o.o.
 * @license YetiForce Public License 2.0 (licenses/License.html or yetiforce.com)
 * @author Mariusz Krzaczkowski <m.krzaczkowski@yetiforce.com>
 */
class OSSMailScanner_BindLeads_ScannerAction extends OSSMailScanner_EmailScannerAction_Model
{

	public function process(OSSMail_Mail_Model $mail, $moduleName = 'Leads')
	{
		return parent::process($mail, 'Leads');
	}
}
