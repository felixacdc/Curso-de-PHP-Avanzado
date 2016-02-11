<?php

/**
* Clase de Acceso al Sistema
*/
class Acceso
{
	private $email;
    private $user;
    private $pass;

    private function Encrypt($string)
    {
        $sizeof = strlen($string) - 1;
        $result = '';

        for ($i = $sizeof; $i >= 0; $i--) {
            $result .= $string[$i];
        }

        $result = md5($result);

        return $result;
    }

	public function Login()
	{
	   try {

	       if ( !empty($_POST['user']) and !empty($_POST['pass']) and !empty($_POST['session']) ) {
	           $db = new Conexion();
               $this->user = $db->real_escape_string($_POST['user']);
               $this->pass = $this->Encrypt($_POST['pass']);

               $sql = $db->query("SELECT * FROM users
                                  WHERE user='$this->user' AND pass='$this->pass';");

               if ( $db->rows($sql) > 0 ) {

                   $datos = $db->recorrer($sql);
                   $_SESSION['id'] = $datos['id'];
                   $_SESSION['user'] = $datos['user'];
                   $_SESSION['email'] = $datos['email'];
				   $_SESSION['first_name'] = $datos['first_name'];
                   $_SESSION['last_name'] = $datos['last_name'];
				   $_SESSION['date'] = $datos['date'];
				   $_SESSION['changes'] = $datos['changes'];

                   if ($_POST['session'] == true) {
                       ini_set('session.cookie_lifetime', time() + (60*60*24*2));
                   }
                   echo 1;

               } else {
                   throw new Exception(2);
               }

               $db->liberar($sql);
               $db->close();

	       } else {
               throw new Exeption('ERROR: Datos vacios.');
           }

	   } catch (Exception $e) {
	       echo $e->getMessage();
	   }

	}

    public function Recuperar()
    {

    }

    public function Registrar()
    {
        try {

	       if ( !empty($_POST['user']) and !empty($_POST['pass']) and !empty($_POST['email']) ) {
	           $db = new Conexion();
               $this->user = $db->real_escape_string($_POST['user']);
               $this->email = $db->real_escape_string($_POST['email']);
               $this->pass = $this->Encrypt($_POST['pass']);

               $sql = $db->query("SELECT * FROM users
                                  WHERE user='$this->user' OR email='$this->email';");

               if ( $db->rows($sql) == 0 ) {

                   $sqlTwo = $db->query("INSERT INTO users (user, pass, email)
                                  VALUES ('$this->user', '$this->pass', '$this->email');");
                   $id = $db->insert_id;

                   $_SESSION['id'] = $id;
                   $_SESSION['user'] = $this->user;
                   $_SESSION['email'] = $this->email;
				   $_SESSION['first_name'] = '';
                   $_SESSION['last_name'] = '';
				   $_SESSION['date'] = '';
				   $_SESSION['changes'] = 0;

                   echo 1;
                   $db->liberar($sqlTwo);
               } else {
                   $datos = $db->recorrer($sql);

                   if ( strtolower($this->user) ==  strtolower($datos['user'])) {
                       throw new Exception(2);
                   } else {
                       throw new Exception(3);
                   }
               }

               $db->liberar($sql);
               $db->close();

	       } else {
               throw new Exception('ERROR: Datos vacios.');
           }

	   } catch (Exception $e) {
	       echo $e->getMessage();
	   }
    }
}
