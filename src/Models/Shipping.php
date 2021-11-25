<?php
namespace Sylapi\Feeds\Google\Models;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\XmlRoot("shipping")
 * @Serializer\AccessType("public_method")
 * @Serializer\XmlNamespace(uri="http://base.google.com/ns/1.0", prefix="g")
 */
class Shipping
{
    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     */
    private $country;

    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     */
    private $region;
    
    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     */
    private $service;

    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     * @Serializer\Exclude
     */
    private $currency;

    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     */
    private $price;
    
    /**
     * @Serializer\Type("integer")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     */
    private $minHandlingTime;

    /**
     * @Serializer\Type("integer")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     */
    private $maxHandlingTime;

    /**
     * @Serializer\Type("integer")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     */
    private $minTransitTime;

    /**
     * @Serializer\Type("integer")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     */
    private $maxTransitTime;

    /**
     * Get the value of country
     */ 
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set the value of country
     *
     * @return  self
     */ 
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * Get the value of region
     */ 
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set the value of region
     *
     * @return  self
     */ 
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get the value of service
     */ 
    public function getService()
    {
        return $this->service;
    }

    /**
     * Set the value of service
     *
     * @return  self
     */ 
    public function setService($service)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Get the value of currency
     */ 
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set the value of currency
     *
     * @return  self
     */ 
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        if(is_numeric($this->price) && $this->getCurrency()) {
            return $this->price.' '.$this->getCurrency();
        }
        return null;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of minHandlingTime
     */ 
    public function getMinHandlingTime()
    {
        return $this->minHandlingTime;
    }

    /**
     * Set the value of minHandlingTime
     *
     * @return  self
     */ 
    public function setMinHandlingTime($minHandlingTime)
    {
        $this->minHandlingTime = $minHandlingTime;

        return $this;
    }

    /**
     * Get the value of maxHandlingTime
     */ 
    public function getMaxHandlingTime()
    {
        return $this->maxHandlingTime;
    }

    /**
     * Set the value of maxHandlingTime
     *
     * @return  self
     */ 
    public function setMaxHandlingTime($maxHandlingTime)
    {
        $this->maxHandlingTime = $maxHandlingTime;

        return $this;
    }    

    /**
     * Get the value of minTransitTime
     */ 
    public function getMinTransitTime()
    {
        return $this->minTransitTime;
    }

    /**
     * Set the value of minTransitTime
     *
     * @return  self
     */ 
    public function setMinTransitTime($minTransitTime)
    {
        $this->minTransitTime = $minTransitTime;

        return $this;
    }

    /**
     * Get the value of maxTransitTime
     */ 
    public function getMaxTransitTime()
    {
        return $this->maxTransitTime;
    }

    /**
     * Set the value of maxTransitTime
     *
     * @return  self
     */ 
    public function setMaxTransitTime($maxTransitTime)
    {
        $this->maxTransitTime = $maxTransitTime;

        return $this;
    }

    public function make($shipping): self
    {
        $item  = new self;

        $itemVars = array_keys(get_class_vars(self::class));
    
        foreach($itemVars as $itemVar) {
            $getterName = 'get'.ucfirst($itemVar);
            $setterName = 'set'.ucfirst($itemVar);

            if(method_exists($shipping, $getterName) && method_exists($item, $setterName)) {
                $elem =  $shipping->{$getterName}();
                $item->{$setterName}($elem);  
            }
        }

        return $item;
    }      
}