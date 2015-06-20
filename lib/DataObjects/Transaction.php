<?php
namespace PromisePay\DataObjects;

/**
 * Class Transaction
 * @package PromisePay\DataObjects
 */
class Transaction extends Object
{
    /**
     * @var
     */
    public $_description;
    /**
     * @var
     */
    public $_amount;
    /**
     * @var
     */
    public $_currency;
    /**
     * @var
     */
    public $_type;
    /**
     * @var
     */
    public $_from;
    /**
     * @var
     */
    public $_to;
    /**
     * @var
     */
    public $_related;

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->_amount;
    }

    /**
     * @param mixed $amount
     */
    public function setAmount($amount)
    {
        $this->_amount = $amount;
    }

    /**
     * @return mixed
     */
    public function getCurrency()
    {
        return $this->_currency;
    }

    /**
     * @param mixed $currency
     */
    public function setCurrency($currency)
    {
        $this->_currency = $currency;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->_description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->_description = $description;
    }

    /**
     * @return mixed
     */
    public function getFrom()
    {
        return $this->_from;
    }

    /**
     * @param mixed $from
     */
    public function setFrom($from)
    {
        $this->_from = $from;
    }

    /**
     * @return mixed
     */
    public function getRelated()
    {
        return $this->_related;
    }

    /**
     * @param mixed $related
     */
    public function setRelated($related)
    {
        $this->_related = $related;
    }

    /**
     * @return mixed
     */
    public function getTo()
    {
        return $this->_to;
    }

    /**
     * @param mixed $to
     */
    public function setTo($to)
    {
        $this->_to = $to;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->_type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->_type = $type;
    }

}