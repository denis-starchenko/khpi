<?php

interface IDownloader
{
    public function download(string $userId, string $path);
}