<?php

class Xml
{
    private IPage $page;

    public function __construct(IPage $page)
    {
        $this->page = $page;
    }

    public function renderXmlTitle()
    {
        $this->render($this->page->getTitle());
    }

    public function renderXmlBody()
    {
        $this->render($this->page->getBody());
    }

    public function renderXmlFooter()
    {
        $this->render($this->page->getFooter());
    }

    private function render($content)
    {
        // some implementation
    }
}