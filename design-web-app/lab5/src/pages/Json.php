<?php

class Json
{
    private IPage $page;

    public function __construct(IPage $page)
    {
        $this->page = $page;
    }

    public function renderJsonTitle()
    {
        $this->render($this->page->getTitle());
    }

    public function renderJsonBody()
    {
        $this->render($this->page->getBody());
    }

    public function renderJsonFooter()
    {
        $this->render($this->page->getFooter());
    }

    private function render($content)
    {
        // some implementation
    }
}