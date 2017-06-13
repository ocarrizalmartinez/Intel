<?php

/**
 * Class login
 * handles the user's login and logout process
 */
class Login
{
    /**
     * @var object The database connection
     */
    private $db_connection = null;
    /**
     * @var array Collection of error messages
     */
    public $errors = array();
    /**
     * @var array Collection of success / neutral messages
     */
    public $messages = array();

    /**
     * the function "__construct()" automatically starts whenever an object of this class is created,
     * you know, when you do "$login = new Login();"
     */
    public function __construct()
    {
        // create/read session, absolutely necessary
        session_start();

        // check the possible login actions:
        // if user tried to log out (happen when user clicks logout button)
        if (isset($_GET["logout"])) {
            $this->doLogout();
        }
        // login via post data (if user just submitted a login form)
        elseif (isset($_POST["login"])) {
            $this->dologinWithPostData();
        }
    }

    /**
     * log in with post data
     */
    private function dologinWithPostData()
    {
        // check login form contents
        if (empty($_POST['user_name'])) {
            $this->errors[] = "El campo usuario esta vacio";
        } elseif (empty($_POST['user_password'])) {
            $this->errors[] = "El campo password esta vacio";
        } elseif (!empty($_POST['user_name']) && !empty($_POST['user_password'])) {

          $this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

            // change character set to utf8 and check it
            if (!$this->db_connection->set_charset("utf8")) {
                $this->errors[] = $this->db_connection->error;
            }
            if (!$this->db_connection->connect_errno) {
                $user_name = $this->db_connection->real_escape_string($_POST['user_name']);

                $sql = "SELECT user_id, user_name, firstname, user_email, user_password_hash, privilegio
                        FROM users
                        WHERE user_name = '" . $user_name . "' OR user_email = '" . $user_name . "';";

                $result_of_login_check = $this->db_connection->query($sql);
                if ($result_of_login_check->num_rows == 1) {
                  $result_row = $result_of_login_check->fetch_object();

                    if (password_verify($_POST['user_password'], $result_row->user_password_hash) && ($result_row->privilegio==true)) {
                        $_SESSION['user_id'] = $result_row->user_id;
            						$_SESSION['firstname'] = $result_row->firstname;
            						$_SESSION['user_name'] = $result_row->user_name;
                        $_SESSION['user_email'] = $result_row->user_email;
                        $_SESSION['user_login_status'] = 1;

                    } elseif (password_verify($_POST['user_password'], $result_row->user_password_hash) && ($result_row->privilegio==false)) {
                      $_SESSION['user_id'] = $result_row->user_id;
                      $_SESSION['firstname'] = $result_row->firstname;
                      $_SESSION['user_name'] = $result_row->user_name;
                      $_SESSION['user_email'] = $result_row->user_email;
                      $_SESSION['user_login_status'] = 2;

                    }else{
                        $this->errors[] = "Usuario y/o contraseña no coinciden.";
                    }
                } else {
                    $this->errors[] = "Usuario y/o contraseña no coinciden.";
                }
            } else {
                $this->errors[] = "Problema de conexión de base de datos.";
            }
        }
    }

    public function doLogout()
    {

        $_SESSION = array();
        session_destroy();

        $this->messages[] = "Has sido desconectado.";

    }

    /**
     * simply return the current state of the user's login
     * @return boolean user's login status
     */
    public function isUserLoggedIn()
    {
        if (isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] == 1) {
            return true;
        }
        // default return
        return false;
    }
}