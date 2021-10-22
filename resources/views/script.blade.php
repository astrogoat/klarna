<script
    async
    src="{{ settings(Astrogoat\Klarna\Settings\KlarnaSettings::class, 'environment') }}"
    data-client-id="{{ settings(Astrogoat\Klarna\Settings\KlarnaSettings::class, 'account_key') }}"
></script>
