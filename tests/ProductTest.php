<?php

namespace Sylapi\Feeds\Google\Tests;

use PHPUnit\Framework\TestCase as PHPUnitTestCase;
use Sylapi\Feeds\FeedGenerator;
use Sylapi\Feeds\Google\Feed;
use Sylapi\Feeds\Google\Models\Product;
use Sylapi\Feeds\Google\Models\Shipping;
use Sylapi\Feeds\Google\Models\Tax;
use Sylapi\Feeds\Google\Models\ProductDetail;

class ProductTest extends PHPUnitTestCase
{

    private $product;

    private $serializer;

    public function setUp():void
    {
        $this->product = $this->createProduct();
        $this->serializer = (new FeedGenerator())->getSerializer();
    }

    private function createProduct(): Product
    {

        $productDetails = [];
        for($x = 0; $x < 4; $x++)  {
            $productDetail = new ProductDetail();
            $productDetail->setAttributeName('param_'.$x)
                ->setAttributeValue('Value '.$x);
    
            $productDetails[] = $productDetail;
        }

        $tax = new Tax;
        $tax->setCountry('PL')
            ->setRegion('Lubuskie')
            ->setRate(5.00)
            ->setTaxShip(true);
        
        $shipping = new Shipping();
        $shipping->setService('DPD_PICKUP')
            ->setPrice(12.22)
            ->setCurrency('PLN')
            ;
    

        $product = new Product();
        
        $product->setId('id-1234567890')
            ->setTitle('Product title')
            ->setDescription('Product description...')
            ->setLink('https://url.exmaple.com/products/id-1234567890/')
            ->setMobileLink('https://mobile.url.exmaple.com/products/id-1234567890/')
            ->setImageLink('https://url.exmaple.com/storage/images/products/id-1234567890/main.jpg')
            ->setAdditionalImageLinks([
                'https://url.exmaple.com/storage/images/products/id-1234567890/1.jpg',
                'https://url.exmaple.com/storage/images/products/id-1234567890/2.jpg',
                'https://url.exmaple.com/storage/images/products/id-1234567890/3.jpg'
            ])
            ->setAvailability('in_stock')
            ->setAvailabilityDate(new \DateTime('2021-12-25T13:00-0800'))
            ->setCurrency('PLN')
            ->setCostOfGoodsSold(9.00)
            ->setExpirationDate(new \DateTime('2021-12-31T13:00-0800'))
            ->setPrice(11.00)
            ->setSalePrice(9.95)
            ->setSalePriceEffectiveDateStart(new \DateTime('2021-12-28T13:00-0800'))
            ->setSalePriceEffectiveDateEnd(new \DateTime('2021-12-31T13:00-0800'))
            ->setUnitPricingMeasure('750 ml')
            ->setUnitPricingBaseMeasure('100 ml')
            ->setProductCategory('2271')
            ->setProductTypes([
                'Home > Women > Dresses > Maxi Dresses',
                'Home > Women > Dresses'
            ])
            ->setCanonicalLink('https://url.exmaple.com/products/id-1234567890/')
            ->setBrand('Brand XYZ')
            ->setGtin('9876543210')
            ->setMpn('M1234599PN')
            ->setIdentifierExists(true)
            ->setCondition('new')
            ->setAdult(true)
            ->setMultipack(6)
            ->setBundle(false)
            ->setAgeGroup('toddler')
            ->setColor('black')
            ->setSizeTypes([
                'petite',
                'maternity'
            ])
            ->setCustomLabels([
                'summer',
                'sale',
                'test'
            ])
            ->setExcludedDestinations([
                'Buy on listings',
                'Local inventory ads'
            ])
            ->setIncludedDestinations([
                'Shopping ads',
                'Free local listings'
            ])
            ->setTaxCategory('Clothes')
            ->setShoppingAdsExcludedCountry([
                'CH',
                'AT'
            ])
            ->setShipsFromCountry('PL')
            ->setProductHighlights([
                'Product highlight #1',
                'Product highlight #2',
                'Product highlight #3'
            ])
            ->setShipping($shipping)
            ->setShippingWeight(3.50)
            ->setShippingWeightUnit('kg')
            ->setTax($tax)
            ->setProductDetails($productDetails)
            ->setMinHandlingTime(3)
            ->setMaxHandlingTime(14)
            ->setItemGroupId('gid-12345');
        return $product;
    }


    public function testProductXML()
    {
        $content = $this->serializer->serialize($this->product, 'xml');
        $filePath = __DIR__.'/Mock/product.xml';
        $this->assertXmlStringEqualsXmlFile($filePath, $content);
    }

    public function testMakeProduct()
    {
        $categoryName = 'Test Category';

        $productBase = new \Sylapi\Feeds\Models\Product();
        $productBase->setProductCategory([
            Feed::NAME => $categoryName
            ])
            ->setShipping(new \Sylapi\Feeds\Models\Shipping())
            ->setProductDetails([
                Feed::NAME => [ new \Sylapi\Feeds\Models\ProductDetail() ]
            ])
            ->setTax(new \Sylapi\Feeds\Models\Tax())
        ;
        $product = (new Product)->make($productBase);
        $productDetails = $product->getProductDetails();
        $this->assertInstanceOf(Product::class, $product);
        $this->assertInstanceOf(Shipping::class, $product->getShipping());
        $this->assertInstanceOf(Tax::class, $product->getTax());
        $this->assertInstanceOf(ProductDetail::class, $productDetails[0]);
        $this->assertEquals($categoryName, $product->getProductCategory());

    }
}