<?php

class CachedDownloader implements IDownloader
{
    private IDownloader $downloader;
    private $cachedFiles;

    public function __constructor(IDownloader $downloader)
    {
        $this->downloader = $downloader;
    }

    public function download(string $userId, string $path)
    {
        if ($this->cachedFiles[$path]) {
            return $this->cachedFiles[$path];
        }

        return $this->downloader->download($userId, $path);
    }
}