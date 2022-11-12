<?php

class ProductPage implements IPage
{
    private Product $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function getTitle()
    {
        return $this->product->name;
    }

    public function getFooter()
    {
        // TODO: Implement getFooter() method.
    }

    public function setTitle(string $title)
    {
        // TODO: Implement setTitle() method.
    }

    public function getBody()
    {
        return $this->product->description . ' ' . $this->product->id . ' ' . $this->product->image;
    }

    public function setBody($body)
    {
        // TODO: Implement setBody() method.
    }

    public function setFooter(string $footer)
    {
        // TODO: Implement setFooter() method.
    }
}