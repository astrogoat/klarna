<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateKlarnaSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('klarna.enabled', false);
        $this->migrator->add('klarna.account_key', '');
        $this->migrator->add('klarna.environment', 'https://na-library.playground.klarnaservices.com/lib.js');
        $this->migrator->add('klarna.threshold', 0);
    }

    public function down()
    {
        $this->migrator->delete('klarna.enabled');
        $this->migrator->delete('klarna.account_key');
        $this->migrator->delete('klarna.environment');
        $this->migrator->delete('klarna.threshold');
    }
}
