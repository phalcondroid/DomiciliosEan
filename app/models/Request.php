<?php

class Request extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $id_request;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $id_product;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $id_headquarter;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $id_user;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $id_request_status;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $room;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=false)
     */
    protected $floor;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    protected $creationg_date;

    /**
     * Method to set the value of field id_request
     *
     * @param integer $id_request
     * @return $this
     */
    public function setIdRequest($id_request)
    {
        $this->id_request = $id_request;

        return $this;
    }

    /**
     * Method to set the value of field id_product
     *
     * @param integer $id_product
     * @return $this
     */
    public function setIdProduct($id_product)
    {
        $this->id_product = $id_product;

        return $this;
    }

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
     * Method to set the value of field id_request_status
     *
     * @param integer $id_request_status
     * @return $this
     */
    public function setIdRequestStatus($id_request_status)
    {
        $this->id_request_status = $id_request_status;

        return $this;
    }

    /**
     * Method to set the value of field room
     *
     * @param integer $room
     * @return $this
     */
    public function setRoom($room)
    {
        $this->room = $room;

        return $this;
    }

    /**
     * Method to set the value of field floor
     *
     * @param string $floor
     * @return $this
     */
    public function setFloor($floor)
    {
        $this->floor = $floor;

        return $this;
    }

    /**
     * Method to set the value of field creationg_date
     *
     * @param string $creationg_date
     * @return $this
     */
    public function setCreationgDate($creationg_date)
    {
        $this->creationg_date = $creationg_date;

        return $this;
    }

    /**
     * Returns the value of field id_request
     *
     * @return integer
     */
    public function getIdRequest()
    {
        return $this->id_request;
    }

    /**
     * Returns the value of field id_product
     *
     * @return integer
     */
    public function getIdProduct()
    {
        return $this->id_product;
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
     * Returns the value of field id_user
     *
     * @return integer
     */
    public function getIdUser()
    {
        return $this->id_user;
    }

    /**
     * Returns the value of field id_request_status
     *
     * @return integer
     */
    public function getIdRequestStatus()
    {
        return $this->id_request_status;
    }

    /**
     * Returns the value of field room
     *
     * @return integer
     */
    public function getRoom()
    {
        return $this->room;
    }

    /**
     * Returns the value of field floor
     *
     * @return string
     */
    public function getFloor()
    {
        return $this->floor;
    }

    /**
     * Returns the value of field creationg_date
     *
     * @return string
     */
    public function getCreationgDate()
    {
        return $this->creationg_date;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("DomiciliosEan");
        $this->setSource("request");
        $this->belongsTo('id_user', '\User', 'id_user', ['alias' => 'User']);
        $this->belongsTo('id_headquarter', '\Headquarter', 'id_headquarter', ['alias' => 'Headquarter']);
        $this->belongsTo('id_product', '\Product', 'id_product', ['alias' => 'Product']);
        $this->belongsTo('id_request_status', '\RequestStatus', 'id_request_status', ['alias' => 'RequestStatus']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'request';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Request[]|Request|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Request|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
