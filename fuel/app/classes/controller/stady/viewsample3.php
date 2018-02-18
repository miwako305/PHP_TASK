<?php
/**
 * 電子書籍『はじめてのフレームワークとしてのFuelPHP 第2版』の一部です。
 *
 * @version    1.1.0
 * @author     Kenji Suzuki <https://github.com/kenjis>
 * @license    MIT License
 * @copyright  2014 Kenji Suzuki
 * @link       https://github.com/kenjis/fuelphp1st-2nd
 */


class Controller_ViewSample3 extends Controller
{
	public function action_index()
	{
		$view = View::forge('viewsample');

		//viewに変数をセットする
		$view->set('title', 'ビューのサンプル3');
		$view->set_safe('username', '<del>Azunyan</del>Azusa');

		//Viewオブジェクトを返す
		return $view;
	}
}
