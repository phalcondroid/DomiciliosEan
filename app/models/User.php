<?php

class User extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $id_user;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    protected $facebook_id;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=false)
     */
    protected $name;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    protected $identify;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    protected $career;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=true)
     */
    protected $ean_user;

    /**
     *
     * @var integer
     * @Column(type="integer", length=2, nullable=false)
     */
    protected $active;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    protected $creation_date;

    /**
     * Method to set the value of field id_user
     *
     * @param integer $id_user
     * @return $this
     */
    public function setIdUser($id_user)
    {
        $this->id_user = $id_user;

        return $this;
    }

    /**
     * Method to set the value of field facebook_id
     *
     * @param string $facebook_id
     * @return $this
     */
    public function setFacebookId($facebook_id)
    {
        $this->facebook_id = $facebook_id;

        return $this;
    }

    /**
     * Method to set the value of field name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Method to set the value of field identify
     *
     * @param integer $identify
     * @return $this
     */
    public function setIdentify($identify)
    {
        $this->identify = $identify;

        return $this;
    }

    /**
     * Method to set the value of field career
     *
     * @param string $career
     * @return $this
     */
    public function setCareer($career)
    {
        $this->career = $career;

        return $this;
    }

    /**
     * Method to set the value of field ean_user
     *
     * @param string $ean_user
     * @return $this
     */
    public function setEanUser($ean_user)
    {
        $this->ean_user = $ean_user;

        return $this;
    }

    /**
     * Method to set the value of field active
     *
     * @param integer $active
     * @return $this
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Method to set the value of field creation_date
     *
     * @param string $creation_date
     * @return $this
     */
    public function setCreationDate($creation_date)
    {
        $this->creation_date = $creation_date;

        return $this;
    }

    /**
     * Returns the value of field id_user
     *
     * @return integer
     */
    public function getIdUser()
    {
        return $this->id_user;
    }

    /**
     * Returns the value of field facebook_id
     *
     * @return string
     */
    public function getFacebookId()
    {
        return $this->facebook_id;
    }

    /**
     * Returns the value of field name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Returns the value of field identify
     *
     * @return integer
     */
    public function getIdentify()
    {
        return $this->identify;
    }

    /**
     * Returns the value of field career
     *
     * @return string
     */
    public function getCareer()
    {
        return $this->career;
    }

    /**
     * Returns the value of field ean_user
     *
     * @return string
     */
    public function getEanUser()
    {
        return $this->ean_user;
    }

    /**
     * Returns the value of field active
     *
     * @return integer
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Returns the value of field creation_date
     *
     * @return string
     */
    public function getCreationDate()
    {
        return $this->creation_date;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("DomiciliosEan");
        $this->setSource("user");
        $this->hasMany('id_user', 'Request', 'id_user', ['alias' => 'Request']);
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
     * @return User[]|User|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return User|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
