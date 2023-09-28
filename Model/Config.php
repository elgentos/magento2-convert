<?php

/**
 * Copyright Elgentos BV. All rights reserved.
 * https://www.elgentos.nl/
 */

declare(strict_types=1);

namespace Elgentos\Convert\Model;

use Magento\Framework\App\Config\ScopeConfigInterface;

class Config
{
    private const XML_PATH_GENERAL_ENABLED = 'elgentos_convert/general/enabled';

    private const XML_PATH_GENERAL_CONVERT_JS_URL = 'elgentos_convert/general/convert_js_url';

    public function __construct(
        private readonly ScopeConfigInterface $scopeConfig
    ) {
    }

    public function isEnabled(): bool
    {
        return (bool)$this->scopeConfig->getValue(self::XML_PATH_GENERAL_ENABLED);
    }

    public function generalConvertJsUrl(): string
    {
        return $this->scopeConfig->getValue(self::XML_PATH_GENERAL_CONVERT_JS_URL);
    }
}
