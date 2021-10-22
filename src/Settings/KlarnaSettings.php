<?php

namespace Astrogoat\Klarna\Settings;

use Helix\Lego\Settings\AppSettings;

class KlarnaSettings extends AppSettings
{
    public string $account_key;
    public string $environment;
    public int $threshold;

    protected array $rules = [
        'account_key' => ['required'],
        'environment' => ['required', 'string'],
        'threshold' => ['required', 'integer'],
    ];

    public function environmentOptions(): array
    {
        return [
            'https://na-library.playground.klarnaservices.com/lib.js' => 'Playground',
            'https://na-library.klarnaservices.com/lib.js' => 'Production',
        ];
    }

    public function help(): array
    {
        return [
            'threshold' => 'The dollar amount threshold for when a product is eligible for Klarna finacing.'
        ];
    }

    public function description(): string
    {
        return 'Choose one of our payment options when shopping at your favorite retailers. Split the purchase into manageable installments or pay for your order up to 30 days later.';
    }
}
