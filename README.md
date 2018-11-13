## Notes

* This Plugin allows to add pickup delivery method.

## Screenshot

![Alt text](doc/images/shipping.png "Demo Pickup Shipping Method")

## Installation

```bash
$ composer require magentix/sylius-pickup-demo-plugin
```

Add the plugins to the `config/bundles.php` file:

```php
Magentix\SyliusPickupPlugin\MagentixSyliusPickupPlugin::class => ['all' => true],
Magentix\SyliusPickupDemoPlugin\MagentixSyliusPickupDemoPlugin::class => ['all' => true],
```

Add the plugin's config to by creating the file `config/packages/magentix_sylius_pickup_demo_plugin.yaml` with the following content:

```yaml
imports:
    - { resource: "@MagentixSyliusPickupPlugin/Resources/config/config.yml" }
    - { resource: "@MagentixSyliusPickupDemoPlugin/Resources/config/config.yml" }
```
    
Add the plugin's routing by creating the file `config/routes/magentix_sylius_pickup_demo_plugin.yaml` with the following content:

```yaml
magentix_sylius_pickup_plugin:
    resource: "@MagentixSyliusPickupPlugin/Resources/config/routing.yml"
```

Finish the installation by updating the database schema and installing assets:

```bash
bin/console doctrine:migrations:diff
bin/console doctrine:migrations:migrate
bin/console assets:install
bin/console sylius:theme:assets:install
```

## Configuration

In *Shipping Method* section from admin, add and configure new Method with *Demo Pickup* Calculator.