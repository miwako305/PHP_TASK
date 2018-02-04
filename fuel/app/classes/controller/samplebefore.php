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
 class Controller_SampleBefore extends Controller
 {

   public function before()
   //例えば認証済みでなかったらログインページに飛ばす
   //認証済みなら、ユーザー名をプロパティにセットする
   {
     # code...
     $this->current_user = 'Yui';
   }
   public function action_index()
   {
     # code...
     $output = $this->current_user .'さん、'.
     __METHOD__ . 'が実行されました。<br>';
     return $output;

   }
   public function action_test(){

     $output = $this->current_user . 'さん、' .
     __METHOD__ . 'が実行されました。';
     return $output;
   }
 }
