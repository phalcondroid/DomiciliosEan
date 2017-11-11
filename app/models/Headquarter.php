<?php

class Headquarter extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $id_headquarter;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $id_unversity;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    protected $name;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $description;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    protected $address;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    protected $web_page;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    protected $latitude;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    protected $longitude;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    protected $initial_hour_attention;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    protected $final_hour_attention;

    /**
     *
     * @var integer
     * @Column(type="integer", length=4, nullable=false)
     */
    protected $active;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    protected $creation_date;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    protected $rooms;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    protected $headquartercol;

    /**
     * Method to set the value of field id_headquarter
     *
     * @param integer $id_headquarter
     * @return $this
     */
    public function setIdHeadquarter($id_headquarter)
    {
        $this->id_headquarter = $id_headquarter;

        return $this;
    }

    /**
     * Method to set the value of field id_unversity
     *
     * @param integer $id_unversity
     * @return $this
     */
    public function setIdUnversity($id_unversity)
    {
        $this->id_unversity = $id_unversity;

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
     * Method to set the value of field description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Method to set the value of field address
     *
     * @param string $address
     * @return $this
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Method to set the value of field web_page
     *
     * @param string $web_page
     * @return $this
     */
    public function setWebPage($web_page)
    {
        $this->web_page = $web_page;

        return $this;
    }

    /**
     * Method to set the value of field latitude
     *
     * @param integer $latitude
     * @return $this
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Method to set the value of field longitude
     *
     * @param integer $longitude
     * @return $this
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Method to set the value of field initial_hour_attention
     *
     * @param string $initial_hour_attention
     * @return $this
     */
    public function setInitialHourAttention($initial_hour_attention)
    {
        $this->initial_hour_attention = $initial_hour_attention;

        return $this;
    }

    /**
     * Method to set the value of field final_hour_attention
     *
     * @param string $final_hour_attention
     * @return $this
     */
    public function setFinalHourAttention($final_hour_attention)
    {
        $this->final_hour_attention = $final_hour_attention;

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
     * Method to set the value of field rooms
     *
     * @param string $rooms
     * @return $this
     */
    public function setRooms($rooms)
    {
        $this->rooms = $rooms;

        return $this;
    }

    /**
     * Method to set the value of field headquartercol
     *
     * @param string $headquartercol
     * @return $this
     */
    public function setHeadquartercol($headquartercol)
    {
        $this->headquartercol = $headquartercol;

        return $this;
    }

    /**
     * Returns the value of field id_headquarter
     *
     * @return integer
     */
    public function getIdHeadquarter()
    {
        return $this->id_headquarter;
    }

    /**
     * Returns the value of field id_unversity
     *
     * @return integer
     */
    public function getIdUnversity()
    {
        return $this->id_unversity;
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
     * Returns the value of field description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Returns the value of field address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Returns the value of field web_page
     *
     * @return string
     */
    public function getWebPage()
    {
        return $this->web_page;
    }

    /**
     * Returns the value of field latitude
     *
     * @return integer
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Returns the value of field longitude
     *
     * @return integer
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Returns the value of field initial_hour_attention
     *
     * @return string
     */
    public function getInitialHourAttention()
    {
        return $this->initial_hour_attention;
    }

    /**
     * Returns the value of field final_hour_attention
     *
     * @return string
     */
    public function getFinalHourAttention()
    {
        return $this->final_hour_attention;
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
     * Returns the value of field rooms
     *
     * @return string
     */
    public function getRooms()
    {
        return $this->rooms;
    }

    /**
     * Returns the value of field headquartercol
     *
     * @return string
     */
    public function getHeadquartercol()
    {
        return $this->headquartercol;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("DomiciliosEan");
        $this->setSource("headquarter");
        $this->hasMany('id_headquarter', 'Request', 'id_headquarter', ['alias' => 'Request']);
        $this->belongsTo('id_unversity', '\Unversity', 'id_unversity', ['alias' => 'Unversity']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'headquarter';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Headquarter[]|Headquarter|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Headquarter|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
