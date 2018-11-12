<?php
/*
Memo
  javaScript
    文字列の結合
      +=
    オブジェクト
      { 'key': 'string' }
    変数（example）展開
      "こんにちは${example}"
    html文字列内での変数展開
      '<li class="item">${example}</li>';
    長い文字列の折り返し
      `ありがとう
       こんにちは`;
    new
     const func = new Func();

  php
    文字列の結合
      .=
    key 付きの配列
      array('key' => 'string')
    通常の変数（$example）展開
      "こんにちは${example}"
    html文字列内での変数展開（シングルクオート内で変数は展開されない）
      "<li class=\"item\">${example}</li>";
    classで定義された変数（privete $example）展開
      "こんにちは{$this->example}"
    長い文字列の折り返し
      "ありがとう".
      "こんにちは";
    new（引数がない場合はなくても良い）
      $func = new Func;
*/
    echo "Welcome to Docker php 5.2.17 environment";
