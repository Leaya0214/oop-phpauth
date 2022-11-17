<?php

    class Database{
        public $con;

        public function __construct()
        {
            $this->con = new mysqli("localhost","root","","batch03");
        }
    }

?>