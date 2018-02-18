<?php
/**
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.7
 * @author    MIwakoMatsuo
	* @license   none
 * @link      http://fuelphp/check
 */

/**
 * 初期設定の値を確認します。
 *
 * @package
 */
class Controller_check extends Controller
{


	public function action_index()
	{
		echo '<pre>';
		echo   'Fuelphp version: '  . Fuel::VERSION ."\n";
		echo 'local: '  . setlocale(LC_ALL, '0') . "\n";
		echo 'date:'  . Date::forge()->format('mysql'). "\n";
	  echo 'default_charset:' . ini_get('default_charset')  . "\n";
		echo '<pre>';
			}


}
