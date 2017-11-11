<?php

class RequestStatus extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $id_request_status;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    protected $status;

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
     * Method to set the value of field status
     *
     * @param string $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
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
     * Returns the value of field status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("DomiciliosEan");
        $this->setSource("request_status");
        $this->hasMany('id_request_status', 'Request', 'id_request_status', ['alias' => 'Request']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'request_status';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return RequestStatus[]|RequestStatus|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return RequestStatus|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
