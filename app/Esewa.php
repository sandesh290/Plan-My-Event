<?php

namespace App;
use Cixware\Esewa\Client;
use Cixware\Esewa\Config;

class Esewa {

    public $config;

    public $esewa;

    // Config for development.
    public function __construct() {
        $successUrl = route('ticket').'?ticket_id='.session()->get('ticket')->id;
        $failureUrl = route('failed');
        $this->config = new Config($successUrl, $failureUrl);

    // Config for production.
    // public $config = new Config($successUrl, $failureUrl, 'b4e...e8c753...2c6e8b');

    // Initialize eSewa client.
        $this->esewa = new Client($this->config);
    }

    public function pay($pid,$amount) {
        $this->esewa->process($pid, $amount, 0,0 ,0);
    }

    public function verify($refId, $pid, $amount) {
        $status = $this->esewa->verify($refId, $pid, $amount);
        if ($status) {
            return true;
        } else {
            return false;
        }
    }
}