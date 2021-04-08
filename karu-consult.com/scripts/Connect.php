<?php
class Connect{
    //propriétés
    public $host;
    public $user;
    public $password;
    public $db;
    public $DBConnect;
    public $pdo;


    //méthodes
    public function __construct(){
        //indiquer information de connection db
        $this->host = 'localhost';
        $this->user = 'karuconsult';
        $this->password = 'karuconsult';
        $this->db = 'karuconsult';

    $this->instance_db($this->host, $this->db, $this->user, $this->password);

    }//fin construct

    public function instance_db($host, $db, $user, $pass){

        //instance PDO
        /**
         * dsn = Data Source Name
         * username = nom utilisateur db
         * passwd = mot de passe utilisateur db
         */

        try {
            //creation objet PDO avec propriété en paramètre
            $this->pdo = new PDO('mysql:host='.$host.';dbname='.$db, $user,$pass);
            $this->pdo->exec('SET CHARACTER SET utf8');
            $this->pdo->exec('SET NAMES utf8');
            return $this->pdo;  //retourner objet PDO
        } catch (PDOException $event) {
            // lever une exception = attraper une erreur et l'afficher
            echo 'ERREUR DE CONNECTION'.$event->getMessage(), $event->getCode();
        }


    }//fin instance_db

    public function db_connexion(){
        //renvoie ou affiche le nom de la db
        return $this->db;
    }//fin db_connexion

} //fin class connect