<?php
/**
 * 電子書籍『はじめてのフレームワークとしてのFuelPHP 第2版』の一部です。
 *
 * @version    1.1.0
 * @author
 * @license    MIT License
 * @copyright  2014 Kenji Suzuki
 * @link       https://github.com/kenjis/fuelphp1st-2nd
 */


class Model_Status extends Model
{
	public static function find_body_by_username($username)
	{
		//本来の使いかたとしてはデータベースを検索して結果をかえすなどがある

	$date = $arrayName = array(
			array(
				'date' =>'2012/04/08 12:33' ,
				'body' => '花祭りなう',
			),
			array(
				'date' => '2012/04/08' ,
				'body' => '花祭りなう'
			),
		);

		return $date;
	}
}
