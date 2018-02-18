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


class Controller_Layout extends Controller_Template
{
	public function action_index()
	{
		// 必ず親クラスのbefore()メソッドを実行する
		$results = Model_Status::find_body_by_username('foo');
		Debug::dump($results);
		//resultsをダンプして確認する。
	}

	public function action_before()
	{
		// ビューファイル全体に$titleをセットする
		$this->template->set_global('title', 'レイアウト機能のサンプル');

		$data = array('user' => $this->current_user);

		$this->template->content = View::forge('layout/index', $data);
		$this->template->footer  = View::forge('layout/footer');
	}
}
