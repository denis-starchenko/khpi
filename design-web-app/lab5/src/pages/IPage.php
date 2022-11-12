<?php

interface IPage
{
    public function getTitle();

    public function setTitle(string $title);

    public function getBody();

    public function setBody($body);

    public function getFooter();

    public function setFooter(string $footer);
}