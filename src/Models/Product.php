<?php
namespace Sylapi\Feeds\Google\Models;

use JMS\Serializer\Annotation as Serializer;
use Sylapi\Feeds\Contracts\ProductSerializer;
use Sylapi\Feeds\Google\Feed;

/**
 * @Serializer\XmlRoot("item")
 * @Serializer\AccessType("public_method")
 * @Serializer\XmlNamespace(uri="http://base.google.com/ns/1.0", prefix="g")
 */

class Product implements ProductSerializer
{
    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     */
    private $id;

    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=true, namespace="http://base.google.com/ns/1.0")
     */
    private $title;

    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=true, namespace="http://base.google.com/ns/1.0")
     */
    private $description;

    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=true)
     */
    private $link;

    /**
     * @Serializer\Type("string") 
     * @Serializer\XmlElement(cdata=true, namespace="http://base.google.com/ns/1.0")
     */
    private $imageLink;

    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=true, namespace="http://base.google.com/ns/1.0")
     */
    private $mobileLink;

    /**
     * @Serializer\XmlElement(cdata=false)
     * @Serializer\XmlList(inline = true, entry = "additional_image_link", namespace="http://base.google.com/ns/1.0")
     */
    private $additionalImageLinks;

    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=true, namespace="http://base.google.com/ns/1.0")
     */
    private $availability;

    /**
     * @Serializer\Type("DateTime")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     */
    private $availabilityDate;

    /**
     * @Serializer\Type("string")
     * @Serializer\Exclude
     */
    private $currency;

    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     */
    private $costOfGoodsSold;

    /**
     * @Serializer\Type("DateTime")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     */
    private $expirationDate;

    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     */
    private $price;


    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     */
    private $salePrice;

    /**
     * @Serializer\Type("DateTime")
     * @Serializer\Exclude
     */
    private $salePriceEffectiveDateStart;

    /**
     * @Serializer\Type("DateTime")
     * @Serializer\Exclude
     */
    private $salePriceEffectiveDateEnd;

    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     */
    private $unitPricingMeasure;

    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     */
    private $unitPricingBaseMeasure;

    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     * @Serializer\SerializedName("google_product_category")
     */
    private $productCategory; 

    /**
     * @Serializer\XmlElement(cdata=true)
     * @Serializer\XmlList(inline = true, entry = "product_type", namespace="http://base.google.com/ns/1.0")
     */
    private $productTypes;  

    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     */
    private $canonicalLink;

    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=true, namespace="http://base.google.com/ns/1.0")
     */
    private $brand;

    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=true, namespace="http://base.google.com/ns/1.0")
     */
    private $gtin;  

    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     */
    private $mpn;

    /**
     * @Serializer\Type("boolean")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     */
    private $identifierExists;

    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     */
    private $condition;

    /**
     * @Serializer\Type("boolean")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     */
    private $adult;
    
    /**
     * @Serializer\Type("integer")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     */
    private $multipack;

    /**
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("is_bundle")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0") 
     */
    private $bundle;

    /**
     * @Serializer\Type("boolean")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     */
    private $ageGroup;

    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     */
    private $color;

    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     */
    private $gender;

    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     */
    private $material;

    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     */
    private $pattern;

    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     */
    private $size;

    /**
     * @Serializer\XmlElement(cdata=false)
     * @Serializer\XmlList(inline = true, entry = "size_type", namespace="http://base.google.com/ns/1.0")
     */
    private $sizeTypes;

    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     */
    private $sizeSystem;

    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     */
    private $itemGroupId;

    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     */
    private $adsRedirect;

    /**
     * @Serializer\Exclude
     */
    private $customLabels;

    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     */
    private $promotionId;

    /**
     * @Serializer\XmlElement(cdata=false)
     * @Serializer\XmlList(inline = true, entry = "excluded_destination", namespace="http://base.google.com/ns/1.0")
     */
    private $excludedDestinations;

    /**
     * @Serializer\XmlElement(cdata=false)
     * @Serializer\XmlList(inline = true, entry = "included_destination", namespace="http://base.google.com/ns/1.0")
     */
    private $includedDestinations;
    
    /**
     * @Serializer\Type("Sylapi\Feeds\Google\Models\Shipping")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     */
    private $shipping;

    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     */
    private $shippingLabel;

    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     */
    private $shippingWeight;

    /**
     * @Serializer\Type("string")
     * @Serializer\Exclude
     */
    private $shippingWeightUnit;

    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     */
    private $shippingLength;

    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     */
    private $shippingWidth;

    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     */
    private $shippingHeight;

    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     */
    private $transitTimeLabel;

    /**
     * @Serializer\Type("integer")
     * @Serializer\XmlElement(namespace="http://base.google.com/ns/1.0")
     */
    private $minHandlingTime;
    
    /**
     * @Serializer\Type("integer")
     * @Serializer\XmlElement(namespace="http://base.google.com/ns/1.0")
     */
    private $maxHandlingTime;        

    /**
     * @Serializer\Type("Sylapi\Feeds\Google\Models\Tax")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     */ 
    private $tax;

    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     */
    private $taxCategory;

    /**
     * @Serializer\XmlElement(cdata=false)
     * @Serializer\XmlList(inline = true, entry = "product_detail", namespace="http://base.google.com/ns/1.0")
     */
    private $productDetails;


    /**
     * @Serializer\XmlElement(cdata=false)
     * @Serializer\XmlList(inline = true, entry = "shopping_ads_excluded_country", namespace="http://base.google.com/ns/1.0")
     */
    private $shoppingAdsExcludedCountry;


    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     */
    private $shipsFromCountry;

    /**
     * @Serializer\XmlElement(cdata=false)
     * @Serializer\XmlList(inline = true, entry = "product_highlight", namespace="http://base.google.com/ns/1.0")
     */
    private $productHighlights;    

    
    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of link
     */ 
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set the value of link
     *
     * @return  self
     */ 
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }    

    /**
     * Get the value of imageLink
     */ 
    public function getImageLink()
    {
        return $this->imageLink;
    }

    /**
     * Set the value of imageLink
     *
     * @return  self
     */ 
    public function setImageLink($imageLink)
    {
        $this->imageLink = $imageLink;

        return $this;
    }

    /**
     * Get the value of mobileLink
     */ 
    public function getMobileLink()
    {
        return $this->mobileLink;
    }

    /**
     * Set the value of mobileLink
     *
     * @return  self
     */ 
    public function setMobileLink($mobileLink)
    {
        $this->mobileLink = $mobileLink;

        return $this;
    }

    /**
     * Get the value of additionalImageLinks
     */ 
    public function getAdditionalImageLinks()
    {
        return $this->additionalImageLinks;
    }

    /**
     * Set the value of additionalImageLinks
     *
     * @return  self
     */ 
    public function setAdditionalImageLinks($additionalImageLinks)
    {
        $this->additionalImageLinks = $additionalImageLinks;

        return $this;
    }

    /**
     * Get the value of availability
     */ 
    public function getAvailability()
    {
        return $this->availability;
    }

    /**
     * Set the value of availability
     *
     * @return  self
     */ 
    public function setAvailability($availability)
    {
        $this->availability = $availability;

        return $this;
    }

    /**
     * Get the value of availabilityDate
     */ 
    public function getAvailabilityDate()
    {
        return $this->availabilityDate;
    }

    /**
     * Set the value of availabilityDate
     *
     * @return  self
     */ 
    public function setAvailabilityDate($availabilityDate)
    {
        $this->availabilityDate = $availabilityDate;

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
     * Get the value of costOfGoodsSold
     */ 
    public function getCostOfGoodsSold()
    {
        if($this->costOfGoodsSold && $this->getCurrency()) {
            return $this->costOfGoodsSold.' '.$this->getCurrency();
        }
        return null;
    }

    /**
     * Set the value of costOfGoodsSold
     *
     * @return  self
     */ 
    public function setCostOfGoodsSold($costOfGoodsSold)
    {
        $this->costOfGoodsSold = $costOfGoodsSold;

        return $this;
    }

    /**
     * Get the value of expirationDate
     */ 
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * Set the value of expirationDate
     *
     * @return  self
     */ 
    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;

        return $this;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        if($this->price && $this->getCurrency()) {
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
     * Get the value of salePrice
     */ 
    public function getSalePrice()
    {
        if($this->salePrice && $this->getCurrency()) {
            return $this->salePrice.' '.$this->getCurrency();
        }
        return null;
    }

    /**
     * Set the value of salePrice
     *
     * @return  self
     */ 
    public function setSalePrice($salePrice)
    {
        $this->salePrice = $salePrice;

        return $this;
    }

    /**
     * Get the value of salePriceEffectiveDateStart
     */ 
    public function getSalePriceEffectiveDateStart()
    {
        return $this->salePriceEffectiveDateStart;
    }

    /**
     * Set the value of salePriceEffectiveDateStart
     *
     * @return  self
     */ 
    public function setSalePriceEffectiveDateStart($salePriceEffectiveDateStart)
    {
        $this->salePriceEffectiveDateStart = $salePriceEffectiveDateStart;

        return $this;
    }

    /**
     * Get the value of salePriceEffectiveDateEnd
     */ 
    public function getSalePriceEffectiveDateEnd()
    {
        return $this->salePriceEffectiveDateEnd;
    }

    /**
     * Set the value of salePriceEffectiveDateEnd
     *
     * @return  self
     */ 
    public function setSalePriceEffectiveDateEnd($salePriceEffectiveDateEnd)
    {
        $this->salePriceEffectiveDateEnd = $salePriceEffectiveDateEnd;

        return $this;
    }

    /**
     * @Serializer\VirtualProperty
     * @Serializer\SerializedName("sale_price_effective_date")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     * @return null|string
     */
    public function getSalePriceEffectiveDate()
    {
        $start = $this->getSalePriceEffectiveDateStart();
        $end = $this->getSalePriceEffectiveDateEnd();

        if(!($start instanceof \DateTime && $end instanceof \DateTime)) {
            return null;
        }

        return $start->format(\DateTime::ISO8601)
            .'/'.
            $end->format(\DateTime::ISO8601);
    }


    /**
     * Get the value of unitPricingMeasure
     */ 
    public function getUnitPricingMeasure()
    {
        return $this->unitPricingMeasure;
    }

    /**
     * Set the value of unitPricingMeasure
     *
     * @return  self
     */ 
    public function setUnitPricingMeasure($unitPricingMeasure)
    {
        $this->unitPricingMeasure = $unitPricingMeasure;

        return $this;
    }

    /**
     * Get the value of unitPricingBaseMeasure
     */ 
    public function getUnitPricingBaseMeasure()
    {
        return $this->unitPricingBaseMeasure;
    }

    /**
     * Set the value of unitPricingBaseMeasure
     *
     * @return  self
     */ 
    public function setUnitPricingBaseMeasure($unitPricingBaseMeasure)
    {
        $this->unitPricingBaseMeasure = $unitPricingBaseMeasure;

        return $this;
    }

    /**
     * Get the value of productCategory
     */ 
    public function getProductCategory()
    {
        return $this->productCategory;
    }

    /**
     * Set the value of productCategory
     *
     * @return  self
     */ 
    public function setProductCategory($productCategory)
    {
        $this->productCategory = $productCategory;

        return $this;
    }

    /**
     * Get the value of productTypes
     */ 
    public function getProductTypes()
    {
        return $this->productTypes;
    }

    /**
     * Set the value of productTypes
     *
     * @return  self
     */ 
    public function setProductTypes($productTypes)
    {
        $this->productTypes = $productTypes;

        return $this;
    }

    /**
     * Get the value of canonicalLink
     */ 
    public function getCanonicalLink()
    {
        return $this->canonicalLink;
    }

    /**
     * Set the value of canonicalLink
     *
     * @return  self
     */ 
    public function setCanonicalLink($canonicalLink)
    {
        $this->canonicalLink = $canonicalLink;

        return $this;
    }

    /**
     * Get the value of brand
     */ 
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set the value of brand
     *
     * @return  self
     */ 
    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get the value of gtin
     */ 
    public function getGtin()
    {
        return $this->gtin;
    }

    /**
     * Set the value of gtin
     *
     * @return  self
     */ 
    public function setGtin($gtin)
    {
        $this->gtin = $gtin;

        return $this;
    }

    /**
     * Get the value of mpn
     */ 
    public function getMpn()
    {
        return $this->mpn;
    }

    /**
     * Set the value of mpn
     *
     * @return  self
     */ 
    public function setMpn($mpn)
    {
        $this->mpn = $mpn;

        return $this;
    }

    /**
     * Get the value of identifierExists
     */ 
    public function getIdentifierExists()
    {
        // return ($this->identifierExists)?'yes':'no';
        return $this->identifierExists;
    }

    /**
     * Set the value of identifierExists
     *
     * @return  self
     */ 
    public function setIdentifierExists($identifierExists)
    {
        $this->identifierExists = $identifierExists;

        return $this;
    }

    /**
     * Get the value of condition
     */ 
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Set the value of condition
     *
     * @return  self
     */ 
    public function setCondition($condition)
    {
        $this->condition = $condition;

        return $this;
    }

    /**
     * Get the value of adult
     */ 
    public function getAdult()
    {
        return $this->adult;
    }

    /**
     * Set the value of adult
     *
     * @return  self
     */ 
    public function setAdult($adult)
    {
        $this->adult = $adult;

        return $this;
    }

    /**
     * Get the value of multipack
     */ 
    public function getMultipack()
    {
        return $this->multipack;
    }

    /**
     * Set the value of multipack
     *
     * @return  self
     */ 
    public function setMultipack($multipack)
    {
        $this->multipack = $multipack;

        return $this;
    }

    /**
     * Get the value of bundle
     */ 
    public function getBundle()
    {
        return $this->bundle;
    }

    /**
     * Set the value of bundle
     *
     * @return  self
     */ 
    public function setBundle($bundle)
    {
        $this->bundle = $bundle;

        return $this;
    }

    /**
     * Get the value of ageGroup
     */ 
    public function getAgeGroup()
    {
        return $this->ageGroup;
    }

    /**
     * Set the value of ageGroup
     *
     * @return  self
     */ 
    public function setAgeGroup($ageGroup)
    {
        $this->ageGroup = $ageGroup;

        return $this;
    }

    /**
     * Get the value of color
     */ 
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get the value of gender
     */ 
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set the value of gender
     *
     * @return  self
     */ 
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get the value of material
     */ 
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * Set the value of material
     *
     * @return  self
     */ 
    public function setMaterial($material)
    {
        $this->material = $material;

        return $this;
    }

    /**
     * Get the value of pattern
     */ 
    public function getPattern()
    {
        return $this->pattern;
    }

    /**
     * Set the value of pattern
     *
     * @return  self
     */ 
    public function setPattern($pattern)
    {
        $this->pattern = $pattern;

        return $this;
    }

    /**
     * Get the value of size
     */ 
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set the value of size
     *
     * @return  self
     */ 
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get the value of sizeTypes
     */ 
    public function getSizeTypes()
    {
        return $this->sizeTypes;
    }

    /**
     * Set the value of sizeTypes
     *
     * @return  self
     */ 
    public function setSizeTypes($sizeTypes)
    {
        $this->sizeTypes = $sizeTypes;

        return $this;
    }

    /**
     * Get the value of sizeSystem
     */ 
    public function getSizeSystem()
    {
        return $this->sizeSystem;
    }

    /**
     * Set the value of sizeSystem
     *
     * @return  self
     */ 
    public function setSizeSystem($sizeSystem)
    {
        $this->sizeSystem = $sizeSystem;

        return $this;
    }

    /**
     * Get the value of itemGroupId
     */ 
    public function getItemGroupId()
    {
        return $this->itemGroupId;
    }

    /**
     * Set the value of itemGroupId
     *
     * @return  self
     */ 
    public function setItemGroupId($itemGroupId)
    {
        $this->itemGroupId = $itemGroupId;

        return $this;
    }

    /**
     * Get the value of adsRedirect
     */ 
    public function getAdsRedirect()
    {
        return $this->adsRedirect;
    }

    /**
     * Set the value of adsRedirect
     *
     * @return  self
     */ 
    public function setAdsRedirect($adsRedirect)
    {
        $this->adsRedirect = $adsRedirect;

        return $this;
    }

    /**
     * Get the value of customLabels
     */ 
    public function getCustomLabels()
    {
        return $this->customLabels;
    }

    /**
     * Set the value of customLabels
     *
     * @return  self
     */ 
    public function setCustomLabels($customLabels)
    {
        $this->customLabels = $customLabels;

        return $this;
    }

    /**
     * @Serializer\VirtualProperty
     * @Serializer\SerializedName("custom_label_0")
     * @Serializer\XmlElement(cdata=true, namespace="http://base.google.com/ns/1.0")
     * @return null|string
     */
    public function getCustomLabel0()
    {
        $lables = $this->getCustomLabels();
        if(!isset($lables[0])) {
            return null;
        }
        return $lables[0];
    }

    /**
     * @Serializer\VirtualProperty
     * @Serializer\SerializedName("custom_label_1")
     * @Serializer\XmlElement(cdata=true, namespace="http://base.google.com/ns/1.0")
     * @return null|string
     */
    public function getCustomLabel1()
    {
        $lables = $this->getCustomLabels();
        if(!isset($lables[1])) {
            return null;
        }
        return $lables[1];
    }
    
    /**
     * @Serializer\VirtualProperty
     * @Serializer\SerializedName("custom_label_2")
     * @Serializer\XmlElement(cdata=true, namespace="http://base.google.com/ns/1.0")
     * @return null|string
     */
    public function getCustomLabel2()
    {
        $lables = $this->getCustomLabels();
        if(!isset($lables[2])) {
            return null;
        }
        return $lables[2];
    }
    
    /**
     * @Serializer\VirtualProperty
     * @Serializer\SerializedName("custom_label_3")
     * @Serializer\XmlElement(cdata=true, namespace="http://base.google.com/ns/1.0")
     * @return null|string
     */
    public function getCustomLabel3()
    {
        $lables = $this->getCustomLabels();
        if(!isset($lables[3])) {
            return null;
        }
        return $lables[3];
    }
    
    /**
     * @Serializer\VirtualProperty
     * @Serializer\SerializedName("custom_label_4")
     * @Serializer\XmlElement(cdata=true, namespace="http://base.google.com/ns/1.0")
     * @return null|string
     */
    public function getCustomLabel4()
    {
        $lables = $this->getCustomLabels();
        if(!isset($lables[4])) {
            return null;
        }
        return $lables[4];
    }    

    /**
     * Get the value of promotionId
     */ 
    public function getPromotionId()
    {
        return $this->promotionId;
    }

    /**
     * Set the value of promotionId
     *
     * @return  self
     */ 
    public function setPromotionId($promotionId)
    {
        $this->promotionId = $promotionId;

        return $this;
    }

    /**
     * Get the value of excludedDestinations
     */ 
    public function getExcludedDestinations()
    {
        return $this->excludedDestinations;
    }

    /**
     * Set the value of excludedDestinations
     *
     * @return  self
     */ 
    public function setExcludedDestinations($excludedDestinations)
    {
        $this->excludedDestinations = $excludedDestinations;

        return $this;
    }

    /**
     * Get the value of includedDestinations
     */ 
    public function getIncludedDestinations()
    {
        return $this->includedDestinations;
    }

    /**
     * Set the value of includedDestinations
     *
     * @return  self
     */ 
    public function setIncludedDestinations($includedDestinations)
    {
        $this->includedDestinations = $includedDestinations;

        return $this;
    }

    /**
     * Get the value of shipping
     */ 
    public function getShipping()
    {
        return $this->shipping;
    }


    /**
     * Set the value of shipping
     *
     * @return  self
     */ 
    public function setShipping($shipping)
    {
        $this->shipping = $shipping;

        return $this;
    } 

    /**
     * Get the value of shippingLabel
     */ 
    public function getShippingLabel()
    {
        return $this->shippingLabel;
    }

    /**
     * Set the value of shippingLabel
     *
     * @return  self
     */ 
    public function setShippingLabel($shippingLabel)
    {
        $this->shippingLabel = $shippingLabel;

        return $this;
    }

    /**
     * Get the value of shippingWeight
     */ 
    public function getShippingWeight()
    {
        if($this->shippingWeight && $this->getShippingWeightUnit()) {
            return $this->shippingWeight.' '.$this->getShippingWeightUnit();
        }
        return null;
    }

    /**
     * Set the value of shippingWeight
     *
     * @return  self
     */ 
    public function setShippingWeight($shippingWeight)
    {
        $this->shippingWeight = $shippingWeight;

        return $this;
    }

    /**
     * Get the value of shippingWeightUnit
     */ 
    public function getShippingWeightUnit()
    {
        return $this->shippingWeightUnit;
    }

    /**
     * Set the value of shippingWeightUnit
     *
     * @return  self
     */ 
    public function setShippingWeightUnit($shippingWeightUnit)
    {
        $this->shippingWeightUnit = $shippingWeightUnit;

        return $this;
    }

    /**
     * Get the value of shippingLength
     */ 
    public function getShippingLength()
    {
        return $this->shippingLength;
    }

    /**
     * Set the value of shippingLength
     *
     * @return  self
     */ 
    public function setShippingLength($shippingLength)
    {
        $this->shippingLength = $shippingLength;

        return $this;
    }

    /**
     * Get the value of shippingWidth
     */ 
    public function getShippingWidth()
    {
        return $this->shippingWidth;
    }

    /**
     * Set the value of shippingWidth
     * @return  self
     */ 
    public function setShippingWidth($shippingWidth)
    {
        $this->shippingWidth = $shippingWidth;

        return $this;
    }

    /**
     * Get the value of shippingHeight
     */ 
    public function getShippingHeight()
    {
        return $this->shippingHeight;
    }

    /**
     * Set the value of shippingHeight
     *
     * @return  self
     */ 
    public function setShippingHeight($shippingHeight)
    {
        $this->shippingHeight = $shippingHeight;

        return $this;
    }    

    /**
     * Get the value of transitTimeLabel
     */ 
    public function getTransitTimeLabel()
    {
        return $this->transitTimeLabel;
    }

    /**
     * Set the value of transitTimeLabel
     *
     * @return  self
     */ 
    public function setTransitTimeLabel($transitTimeLabel)
    {
        $this->transitTimeLabel = $transitTimeLabel;

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
     * Get the value of tax
     */ 
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * Set the value of tax
     *
     * @return  self
     */ 
    public function setTax($tax)
    {
        $this->tax = $tax;

        return $this;
    }    

    /**
     * Get the value of taxCategory
     */ 
    public function getTaxCategory()
    {
        return $this->taxCategory;
    }

    /**
     * Set the value of taxCategory
     *
     * @return  self
     */ 
    public function setTaxCategory($taxCategory)
    {
        $this->taxCategory = $taxCategory;

        return $this;
    }

    /**
     * Get the value of productDetails
     */ 
    public function getProductDetails()
    {
        return $this->productDetails;
    }

    /**
     * Set the value of productDetails
     *
     * @return  self
     */ 
    public function setProductDetails($productDetails)
    {
        $this->productDetails = $productDetails;

        return $this;
    }    

    /**
     * Get the value of shoppingAdsExcludedCountry
     */ 
    public function getShoppingAdsExcludedCountry()
    {
        return $this->shoppingAdsExcludedCountry;
    }

    /**
     * Set the value of shoppingAdsExcludedCountry
     *
     * @return  self
     */ 
    public function setShoppingAdsExcludedCountry($shoppingAdsExcludedCountry)
    {
        $this->shoppingAdsExcludedCountry = $shoppingAdsExcludedCountry;

        return $this;
    }

    /**
     * Get the value of shipsFromCountry
     */ 
    public function getShipsFromCountry()
    {
        return $this->shipsFromCountry;
    }

    /**
     * Set the value of shipsFromCountry
     *
     * @return  self
     */ 
    public function setShipsFromCountry($shipsFromCountry)
    {
        $this->shipsFromCountry = $shipsFromCountry;

        return $this;
    }

    /**
     * Get the value of productHighlights
     */ 
    public function getProductHighlights()
    {
        return $this->productHighlights;
    }

    /**
     * Set the value of productHighlights
     *
     * @return  self
     */ 
    public function setProductHighlights($productHighlights)
    {
        $this->productHighlights = $productHighlights;

        return $this;
    }

    public function make(\Sylapi\Feeds\Models\Product $product): self
    {
        $item  = new self;

        $itemVars = array_keys(get_class_vars(self::class));
    
        foreach($itemVars as $itemVar) {
            $getterName = 'get'.ucfirst($itemVar);
            $setterName = 'set'.ucfirst($itemVar);

            if(method_exists($product, $getterName) && method_exists($item, $setterName)) {
                $elem =  $product->{$getterName}();
                if(is_object($elem)) {
                    switch(get_class($elem)) {
                        case 'Sylapi\Feeds\Models\Shipping' :
                            $elem = (new Shipping)->make($elem);
                        break;
                        case 'Sylapi\Feeds\Models\Tax' :
                            $elem = (new Tax)->make($elem);
                        break;                        
                    }
                }

                if($itemVar === 'productCategory' || $itemVar === 'productTypes') {
                    if(is_array($elem) && isset($elem[Feed::NAME])) {
                        $elem = $elem[Feed::NAME];
                    } else {
                        $elem = null;
                    }
                }

                if($itemVar === 'productDetails') {
                    if(isset($elem[Feed::NAME]) && is_array($elem[Feed::NAME])) {
                        $elems = [];
                        foreach($elem[Feed::NAME] as $pd){
                            $elems[] = (new ProductDetail)->make($pd);
                        }
                        $elem = $elems;
                    } else {
                        $elem = null;
                    }
                }

                $item->{$setterName}($elem);  
            }
        }

        return $item;
    }
}
