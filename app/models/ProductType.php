<?php

class ProductType extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $id_product_type;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    protected $product_type;

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
    protected $creating_date;

    /**
     * Method to set the value of field id_product_type
     *
     * @param integer $id_product_type
     * @return $this
     */
    public function setIdProductType($id_product_type)
    {
        $this->id_product_type = $id_product_type;

        return $this;
    }

    /**
     * Method to set the value of field product_type
     *
     * @param string $product_type
     * @return $this
     */
    public function setProductType($product_type)
    {
        $this->product_type = $product_type;

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
     * Method to set the value of field creating_date
     *
     * @param string $creating_date
     * @return $this
     */
    public function setCreatingDate($creating_date)
    {
        $this->creating_date = $creating_date;

        return $this;
    }

    /**
     * Returns the value of field id_product_type
     *
     * @return integer
     */
    public function getIdProductType()
    {
        return $this->id_product_type;
    }

    /**
     * Returns the value of field product_type
     *
     * @return string
     */
    public function getProductType()
    {
        return $this->product_type;
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
     * Returns the value of field creating_date
     *
     * @return string
     */
    public function getCreatingDate()
    {
        return $this->creating_date;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("DomiciliosEan");
        $this->setSource("product_type");
        $this->hasMany('id_product_type', 'Product', 'id_product_type', ['alias' => 'Product']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'product_type';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return ProductType[]|ProductType|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return ProductType|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
