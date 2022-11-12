<?php

$simplePage = new SimplePage();
$html = new Html($simplePage);
$html->renderHtmlTitle();

$productPage = new ProductPage(new Product('test name', 'test-id', 'some description', 'http://localhost/my_img.png'));
$json = new Json($productPage);
$xml = new Xml($productPage);

$json->renderJsonBody();
$xml->renderXmlBody();