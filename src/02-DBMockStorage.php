<?php

require_once("02-StorageInterface.php");

class DBMockStorage implements Storage {
    protected $data;
    protected $dbType;

    public function __construct($dbType, $item) {
        // TODO Your code goes here
    }

    public function databaseType() {
        // TODO Your code goes here
    }

    public function save($item) {
        // TODO Your code goes here
    }

    public function Count() {
        // TODO Your code goes here
    }

    public function Put($item) {
        // TODO Your code goes here
    }
}

