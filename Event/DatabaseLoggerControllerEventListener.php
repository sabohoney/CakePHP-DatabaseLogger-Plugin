<?php
class DatabaseLoggerControllerEventListener extends BcControllerEventListener {
    // 登録先イベントの定義
    public $events = [
        'initialize',
    ];
    // ユーザーコントローラーにおいてアクションが実行される直前に呼び出される
    public function initialize(CakeEvent $event) {}
}