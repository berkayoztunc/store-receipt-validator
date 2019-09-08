<?php

namespace ReceiptValidator\Tunes;

class ProductionResponse extends AbstractResponse implements ResponseInterface
{
    public function isProduction(): bool
    {
        return true;
    }

    public function isSandbox(): bool
    {
        return false;
    }
}
