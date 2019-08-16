<?php
require_once 'Db.php';

class Employees extends Db
{
    protected $_table = 'employees';

    private $_id;
    private $_chef_id;
    private $_username;
    private $_password;

    public function setId($id)
    {
        return $this->_id = $id;
    }

    public function getId()
    {
        return $this->_id;
    }

    public function setChefId($chef_id)
    {
        return $this->_chef_id = $chef_id;
    }

    public function getChefId()
    {
        return $this->_chef_id;
    }

    public function setUsername($username)
    {
        return $this->_username = $username;
    }

    public function getUsername()
    {
        return $this->_username;
    }

    public function setPassword($password)
    {
        return $this->_password = $password;
    }

    public function getPassword()
    {
        return $this->_password;
    }
}
?>
