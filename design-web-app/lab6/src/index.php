<?php

function downloadFile(IDownloader $downloader) {
    $downloader->download('my-user', 'my-file.pdf');
}

$simpleDownloader = new SimpleDownloader();
$cachedDownloader = new CachedDownloader($simpleDownloader);

downloadFile($cachedDownloader);