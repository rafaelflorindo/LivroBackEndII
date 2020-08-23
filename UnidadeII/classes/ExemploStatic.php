<?php
class ExemploStatic
{
    public static $voltagem = 220;

    public function valorEstatico() {
        return self::$voltagem;
    }
}
?>
