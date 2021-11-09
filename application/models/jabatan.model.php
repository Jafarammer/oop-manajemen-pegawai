<?php
    class Jabatan extends Model {
        public function __construct() {
            parent::__construct();
            $this->_table = 'jabatan';
        }
    }