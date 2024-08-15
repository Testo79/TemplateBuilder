<?php

if (!function_exists('currencySymbol')) {
    function currencySymbol($currencyCode) {
        $symbols = [
            'USD' => '$',
            'EUR' => '€',
            'ISK' => 'kr',
            'GBP' => '£',
            'JPY' => '¥',
            'AUD' => 'A$',
            'CAD' => 'C$',
        ];

        return $symbols[$currencyCode] ?? $currencyCode;
    }
}

