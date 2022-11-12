<?php

class Html
{
    private IPage $page;

    public function __construct(IPage $page)
    {
        $this->page = $page;
    }

    public function renderHtmlTitle()
    {
        $this->render($this->page->getTitle());
    }

    public function renderHtmlBody()
    {
        $this->render($this->page->getBody());
    }

    public function renderHtmlFooter()
    {
        $this->render($this->page->getFooter());
    }

    private function render($content)
    {
        // some implementation
    }
}