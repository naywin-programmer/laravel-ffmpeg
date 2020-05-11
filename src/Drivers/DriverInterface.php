<?php

namespace Pbmedia\LaravelFFMpeg\Drivers;

use Pbmedia\LaravelFFMpeg\MediaCollection;

interface DriverInterface
{
    public function open(MediaCollection $mediaCollection): self;

    public function getMediaCollection(): MediaCollection;

    public function addFilter(): self;

    public function getFilters(): array;
}