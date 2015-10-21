<?php

class Person {
    public $firstName;
    public $lastName;

    public function __construct($firstName, $lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function __destruct() {
        print '<p>'.__CLASS__.'オブジェクトを破棄</p>';
    }

    public function show() {
        print "氏名：{$this->lastName} {$this->firstName}";
    }
}
