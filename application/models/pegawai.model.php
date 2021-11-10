<?php

class Pegawai extends Model {
    public function __construct() {
        parent::__construct();
        $this->_table = 'pegawai';
    }
}