<?php
class Connect {
    public static function getConnection() {
        return new PDO(
            "mysql:host=localhost;dbname=fabrica_carros;charset=utf8",
            "root",
            ""
        );
    }
}