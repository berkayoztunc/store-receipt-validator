<?php

namespace ReceiptValidator\Tunes;

interface EnvironmentResponseInterface
{
    public function isSandbox(): bool;

    public function isProduction(): bool;
}
