<?php
abstract class Model{
    private static $_bdd;




    public static function setBdd()
    {
        self::$_bdd = new PDO('mysql:host=localhost;dbname=bdd_testir;port=3309;charset=utf-8','root','root');
        self::$_bdd -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }
    protected function getBdd()
    {
        if (self::$_bdd==null){
            $this->setBdd();

        }return self::$_bdd;


    }




    protected function getAll($table){
        $var=[];
        $req= self::$_bdd->PDO::query('SELECT * FROM ' .$table. ' ORDER BY id desc');
        return $req;
    }

}
