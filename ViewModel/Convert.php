<?php

/**
 * Copyright Elgentos BV. All rights reserved.
 * https://www.elgentos.nl/
 */

declare(strict_types=1);

namespace Elgentos\Convert\ViewModel;

use Elgentos\Convert\Model\Config;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class Convert implements ArgumentInterface
{
    public function __construct(
        private readonly Config $config
    ) {
    }

    public function isEnabled(): bool
    {
        return $this->config->isEnabled();
    }

    public function getGeneralConvertJsUrl(): string
    {
        return $this->config->generalConvertJsUrl();
    }
}
