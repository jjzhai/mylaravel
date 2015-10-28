<?php namespace App\Services\Admin\Login;

abstract class AbstractProcess {

    /**
     * 是否已经登录
     */
    abstract public function hasLogin();
}