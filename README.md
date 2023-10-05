Dan you optimize this documentation

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

# Page Types

To set the `_conv_page_type` value you can use our prepared block `convert.page-type`.
This is a example where we set the page type as `Foo Bar`.

```xml
<?xml version="1.0"?>
<page xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xsi:noNamespaceSchemaLocation="urn:magento:framework:View/Layout/etc/page_configuration.xsd">
    <body>
        <referenceBlock name="convert.page-type">
            <arguments>
                <argument name="_conv_page_type" xsi:type="string">Foo Bar</argument>
            </arguments>
        </referenceBlock>
    </body>
</page>
```

By using this layout in the correct handles you can configure the which page type is used in wich location.

# Events

## By Javascript

If you want to push a event to conv we have a function prepared that you can use:

```js
convQPush(12345);
```

This is usable over the entire page and is loaded wherever you have the script loaded.
If the module is not enabled in the store config this function will not brake your application.
It will create a fake function in order that the application does not brake.

## By XML

This triggers a event to convert when the page is loaded. You can create a layout file on any handle you want.

This is a example to trigger a event when the user opens the cart in the layout file `checkout_cart_index.xml`:

```xml
<?xml version="1.0"?>
<page xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xsi:noNamespaceSchemaLocation="urn:magento:framework:View/Layout/etc/page_configuration.xsd">
    <body>
        <referenceContainer name="head.additional">
            <block
                    name="convert.event.view_cart"
                    template="Elgentos_Convert::event.phtml"
                    ifconfig="elgentos_convert/general/enabled"
            >
                <arguments>
                    <argument name="event_id" xsi:type="number">12345</argument>
                </arguments>
            </block>
        </referenceContainer>
    </body>
</page>

```
