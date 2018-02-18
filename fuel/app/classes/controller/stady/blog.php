<?php

/**
 *参考書の資料内容
 *
 */
class Controller_Blog extends Controller{

 /**
 * $cat = 'php';のように引数のデフォルト値を入れないとhttp://localhost/ http：//locallhost/ fuephp/blog/category/
 *と行ったパラメーターの無いURLにアクセスされた場合にエラーが発生します。デフォルト値を必ず設定しましょう。
 *
 */
 public function action_category($cat = 'php' , $page = '1')
 {
  return __FILE__ . '<br>' . $cat .'<br>' . $page;
 }
}
