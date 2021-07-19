<?php 
/**
 * class salarier 
 */
  class salarier
  {
#proprietes
private $_nom;
private $_prenom;
private $_tel;
private $_login;      //  adress email
private $_pass;
private $_connectDB;



public function __construct($connectOBJ){
  // instance PDO
  $this->set_connectDB($connectOBJ->pdo);
   
}

public function add_salarier(string $nom, string $prenom, string $email, string $tel)
{

  # pour info non public
  $p = $this->generate_pass();
  

  # donnees
  $this->set_nom(strtoupper($this->nettoyer($nom)));
  $this->set_prenom(strtolower($this->nettoyer($prenom)));
  $this->set_tel($this->nettoyer($tel));
  $this->set_login(strtolower($this->nettoyer($email)));
  $this->set_pass(password_hash($this->generate_pass(), PASSWORD_DEFAULT));

  $dates = date("Y-m-d H:i:s");
  
  $reqI = "INSERT INTO salarier (nom, prenom, telephone, dateAdd, dateUpdate) 
  VALUES ('".$this->get_nom()."', '".$this->get_prenom()."', '".$this->get_tel()."',
  '".$dates."', '".$dates."')";

  $dbh = $this->get_connectDB()->query($reqI);
  $idS = $this->get_connectDB()->lastInsertId();

  if (isset($idS)) {

    $reqI = "INSERT INTO user (idsalarier, login, password, dateAdd, dateUpdate) 
  VALUES ('".$idS."', '".$this->get_login()."', '".$this->get_pass()."',
  '".$dates."', '".$dates."')";

  $dbh = $this->get_connectDB()->query($reqI);

  echo $p;

  } else {
    echo "erreur id";
  }






}

public function generate_pass()
{
        $p = "abcdefghjkmnpqrstuvwxyzABCDEFGHIJKLMNPQRSTUVWXYZ23456789@&=#";
        $p = str_shuffle($p);
        $pP = str_split($p, 11);
        $index = rand(0, 4);  

        $password = $pP[$index];

        return $password;
        
}



public function nettoyer($chaine){

  // securite
  $chaine = trim(strip_tags($chaine));
  return $chaine;

}




/**
 * Get the value of _nom
 */ 
public function get_nom()
{
return $this->_nom;
}

/**
 * Set the value of _nom
 *
 * @return  self
 */ 
public function set_nom($_nom)
{
$this->_nom = $_nom;

return $this;
}

/**
 * Get the value of _prenom
 */ 
public function get_prenom()
{
return $this->_prenom;
}

/**
 * Set the value of _prenom
 *
 * @return  self
 */ 
public function set_prenom($_prenom)
{
$this->_prenom = $_prenom;

return $this;
}

/**
 * Get the value of _tel
 */ 
public function get_tel()
{
return $this->_tel;
}

/**
 * Set the value of _tel
 *
 * @return  self
 */ 
public function set_tel($_tel)
{
$this->_tel = $_tel;

return $this;
}

/**
 * Get the value of _login
 */ 
public function get_login()
{
return $this->_login;
}

/**
 * Set the value of _login
 *
 * @return  self
 */ 
public function set_login($_login)
{
$this->_login = $_login;

return $this;
}

/**
 * Get the value of _pass
 */ 
public function get_pass()
{
return $this->_pass;
}

/**
 * Set the value of _pass
 *
 * @return  self
 */ 
public function set_pass($_pass)
{
$this->_pass = $_pass;

return $this;
}

/**
 * Get the value of _connectDB
 */ 
public function get_connectDB()
{
return $this->_connectDB;
}

/**
 * Set the value of _connectDB
 *
 * @return  self
 */ 
public function set_connectDB($_connectDB)
{
$this->_connectDB = $_connectDB;

return $this;
}
  }







?>