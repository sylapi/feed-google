<?php

namespace Sylapi\Feeds\Google\Tests;


use PHPUnit\Framework\TestCase as PHPUnitTestCase;
use Sylapi\Feeds\Contracts\ProductSerializer;
use Sylapi\Feeds\Google\Feed;
use Sylapi\Feeds\Google\Models\Product;
use Sylapi\Feeds\Parameters;

class FeedTest extends PHPUnitTestCase
{
    private $feed;

    public function setUp():void
    {
        $this->feed =  new Feed(Parameters::create([
            'title' => 'Feed title'
        ]));
    }


    public function testDefaultFileName()
    {
        $this->assertEquals(Feed::NAME, $this->feed->getDefaultFileName());
    }

    public function testProductInstance()
    {
        $this->assertInstanceOf(Product::class, $this->feed->getProductInstance());
        $this->assertInstanceOf(ProductSerializer::class, $this->feed->getProductInstance());
    }

    public function testInitXML()
    {
        $this->assertInstanceOf(\DOMElement::class, $this->feed->initXML());
    }
}