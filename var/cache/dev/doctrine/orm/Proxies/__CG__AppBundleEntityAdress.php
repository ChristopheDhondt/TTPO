<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Adress extends \AppBundle\Entity\Adress implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Adress' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Adress' . "\0" . 'street', '' . "\0" . 'AppBundle\\Entity\\Adress' . "\0" . 'postNumber', '' . "\0" . 'AppBundle\\Entity\\Adress' . "\0" . 'postBox', '' . "\0" . 'AppBundle\\Entity\\Adress' . "\0" . 'postCode', '' . "\0" . 'AppBundle\\Entity\\Adress' . "\0" . 'city', '' . "\0" . 'AppBundle\\Entity\\Adress' . "\0" . 'country'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Adress' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Adress' . "\0" . 'street', '' . "\0" . 'AppBundle\\Entity\\Adress' . "\0" . 'postNumber', '' . "\0" . 'AppBundle\\Entity\\Adress' . "\0" . 'postBox', '' . "\0" . 'AppBundle\\Entity\\Adress' . "\0" . 'postCode', '' . "\0" . 'AppBundle\\Entity\\Adress' . "\0" . 'city', '' . "\0" . 'AppBundle\\Entity\\Adress' . "\0" . 'country'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Adress $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getStreet()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStreet', []);

        return parent::getStreet();
    }

    /**
     * {@inheritDoc}
     */
    public function getPostNumber()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPostNumber', []);

        return parent::getPostNumber();
    }

    /**
     * {@inheritDoc}
     */
    public function getPostBox()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPostBox', []);

        return parent::getPostBox();
    }

    /**
     * {@inheritDoc}
     */
    public function getPostCode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPostCode', []);

        return parent::getPostCode();
    }

    /**
     * {@inheritDoc}
     */
    public function getCity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCity', []);

        return parent::getCity();
    }

    /**
     * {@inheritDoc}
     */
    public function getCountry()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCountry', []);

        return parent::getCountry();
    }

    /**
     * {@inheritDoc}
     */
    public function setStreet($street)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStreet', [$street]);

        return parent::setStreet($street);
    }

    /**
     * {@inheritDoc}
     */
    public function setPostNumber($postNumber)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPostNumber', [$postNumber]);

        return parent::setPostNumber($postNumber);
    }

    /**
     * {@inheritDoc}
     */
    public function setPostBox($postBox)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPostBox', [$postBox]);

        return parent::setPostBox($postBox);
    }

    /**
     * {@inheritDoc}
     */
    public function setPostCode($postCode)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPostCode', [$postCode]);

        return parent::setPostCode($postCode);
    }

    /**
     * {@inheritDoc}
     */
    public function setCity($city)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCity', [$city]);

        return parent::setCity($city);
    }

    /**
     * {@inheritDoc}
     */
    public function setCountry($country)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCountry', [$country]);

        return parent::setCountry($country);
    }

}
