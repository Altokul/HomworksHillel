<?php

namespace App;

class Response
{
    private $body;
    private $status;

    public function __construct($body, $status = 200)
    {
        $this->body = $body;
        $this->status = $status;
    }

    public function send()
    {
        http_response_code($this->status);
        echo $this->body;
    }
}