<?php
namespace Sylapi\Feeds\Google\Models;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\XmlRoot("tax")
 * @Serializer\AccessType("public_method")
 * @Serializer\XmlNamespace(uri="http://base.google.com/ns/1.0", prefix="g") 
 */
class Tax
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
     * @Serializer\Type("double")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     */
    private $rate;

    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     */
    private $taxShip;

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
     * Get the value of rate
     */ 
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Set the value of rate
     *
     * @return  self
     */ 
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Get the value of taxShip
     */ 
    public function getTaxShip()
    {
        return ($this->taxShip)?'yes':'no';
    }

    /**
     * Set the value of taxShip
     *
     * @return  self
     */ 
    public function setTaxShip($taxShip)
    {
        $this->taxShip = $taxShip;

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