<?php
namespace Sylapi\Feeds\Google;

use Sylapi\Feeds\Abstracts\Feed as FeedAbstract;
use Sylapi\Feeds\Contracts\ProductSerializer;

class Feed extends FeedAbstract
{
    const NAME = 'google';

    public function getDefaultFileName(): string
    {
        return self::NAME;
    }

    public function getProductInstance(): ProductSerializer
    {
        return new Models\Product();
    }

    public function initXML(): \DOMElement
    {
        $doc = $this->getDocument();
        $nodeRss = $doc->createElement("rss");
        $nodeRss->setAttribute("version", "2.0");
        $doc->appendChild($nodeRss);
        $doc->createAttributeNS('http://base.google.com/ns/1.0', 'g:attr');
        $nodeChannel = $doc->createElement('channel');
        $attributes = ['title', 'description', 'link'];

        foreach ($attributes as $attr) {
            if($this->getParameters()->hasProperty($attr)) {
                $cdata = $doc->createCDATASection($this->getParameters()->{$attr});
                $nodeItem = $doc->createElement($attr);
                $nodeItem->appendChild($cdata);
                $nodeChannel->appendChild($nodeItem);
            }
        }
        
        
        $nodeRss->appendChild($nodeChannel);
        

        $this->setMainXmlElement($nodeChannel);

        return $nodeChannel;
    }

}