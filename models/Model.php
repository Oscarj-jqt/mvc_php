<?php

class Model {
    protected PDO $bdd;

    function __construct() {
        $this->bdd = new PDO('mysql:host=localhost;dbname=blog', 'root', '');
        $this->bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    }
}
