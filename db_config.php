<?php
    try {
        $base = new PDO('mysql:host=mariadb;dbname=testkelvinphp;charset=utf8', 'root', '');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    paytm.com
