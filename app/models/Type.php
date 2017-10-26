<?php

class Type extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Column(type="integer", length=11, nullable=false)
     */
    public $idType;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    public $TypeName;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("camp");
        $this->hasMany('idType', 'Activity', 'Type_idType', ['alias' => 'Activity']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'type';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Type[]|Type
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Type
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
