<?php

namespace redrum0x\embroideryJef;

class JefFile
{

    public function __construct(string $filename)
    {
        $this->OpenFile($filename);
    }

    public function OpenFile(string $filename): bool
    {
        $file = fopen($filename, 'rb');
        if (!$file) {
            return false;
        }

    }
}