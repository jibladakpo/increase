<?php

class User extends BaseModel{

    /**
     *
     * @var integer
     */
    protected $id;

    /**
     *
     * @var string
     */
    protected $mail;

    /**
     *
     * @var string
     */
    protected $password;

    /**
     *
     * @var string
     */
    protected $identite;

    /**
     *
     * @var string
     */
    protected $role;

    /**
     * Method to set the value of field id
     *
     * @param integer $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Method to set the value of field mail
     *
     * @param string $mail
     * @return $this
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Method to set the value of field password
     *
     * @param string $password
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Method to set the value of field identite
     *
     * @param string $identite
     * @return $this
     */
    public function setIdentite($identite)
    {
        $this->identite = $identite;

        return $this;
    }

    /**
     * Method to set the value of field role
     *
     * @param string $role
     * @return $this
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Returns the value of field id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the value of field mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Returns the value of field password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Returns the value of field identite
     *
     * @return string
     */
    public function getIdentite()
    {
        return $this->identite;
    }

    /**
     * Returns the value of field role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id', 'Message', 'idUser', array('alias' => 'Message'));
        $this->hasMany('id', 'Projet', 'idClient', array('alias' => 'Projet'));
        $this->hasMany('id', 'Usecase', 'idDev', array('alias' => 'Usecase'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'user';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return User[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return User
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }


	/**
	 * {@inheritDoc}
	 * @see BaseModel::toString()
	 */
	public function toString() {
		return $this->identite." (".$this->mail.")";
	}

}
