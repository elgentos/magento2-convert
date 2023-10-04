Elgentos Convert
================

This is a module to connect Magento 2 to [Convert](https://www.convert.com/).

# Installation

## Composer

To install this module you run:

```bash
composer require elgentos/magento2-convert
bin/magento setup:di:compile
bin/magento setup:upgrade
```

## Configuration

When the module is required in composer and installed through the setup we need to configure the store config settings.

Navigate:
- Go to the Magento Backend
- Press `Stores`
- Press `Settings -> Configuration`
- Press `Extensions (Depending on Magento version) -> Elgentos -> Convert`

Now you are in the settings for the module. Here you have 2 options:

- `Enabled` (Yes / No) - This determines if the functionality is active.
- `Convert JS URL` (URL obtained from Convert) - This is the URL used to load the Javascript from Convert
