<?php

/**
 * Inventory UnitPrice Field Class
 * @package YetiForce.Fields
 * @copyright YetiForce Sp. z o.o.
 * @license YetiForce Public License 3.0 (licenses/LicenseEN.txt or yetiforce.com)
 * @author Mariusz Krzaczkowski <m.krzaczkowski@yetiforce.com>
 */
class Vtiger_UnitPrice_InventoryField extends Vtiger_Basic_InventoryField
{

	protected $name = 'UnitPrice';
	protected $defaultLabel = 'LBL_UNIT_PRICE';
	protected $defaultValue = 0;
	protected $columnName = 'price';
	protected $dbType = 'decimal(28,8) DEFAULT 0';
	protected $summationValue = false;

	/**
	 * Getting value to display
	 * @param type $value
	 * @return type
	 */
	public function getDisplayValue($value)
	{
		return CurrencyField::convertToUserFormat($value, null, true);
	}

	/**
	 * {@inheritDoc}
	 */
	public function getValueFromRequest(&$insertData, \App\Request $request, $i)
	{
		$column = $this->getColumnName();
		if (empty($column) || $column === '-' || !$request->has($column . $i)) {
			return false;
		}
		$insertData[$column] = CurrencyField::convertToDBFormat($request->getByType($column . $i, 'NumberInUserFormat'), null, true);
	}
}
