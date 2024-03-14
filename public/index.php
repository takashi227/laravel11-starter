<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// アプリケーションがメンテナンスモードか確認する
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// オートローダーの読み込み
require __DIR__.'/../vendor/autoload.php';

// フレームワークの起動、アプリケーションの実行およびHTTPレスポンスの送信
(require_once __DIR__.'/../bootstrap/app.php')
    ->handleRequest(Request::capture());
