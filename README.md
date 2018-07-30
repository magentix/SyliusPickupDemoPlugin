## Notes

* This Plugin allows to add pickup delivery method.

## Installation

```bash
$ composer require magentix/pickup-demo-plugin
```

Add plugin dependencies to your `AppKernel.php` file:

```php
# app/AppKernel.php

public function registerBundles()
{
    $bundles = [
        ...
        new \MagentixPickupPlugin\MagentixPickupPlugin(),
        new \MagentixPickupDemoPlugin\MagentixPickupDemoPlugin(),
    ];
}
```

Import required config in your `app/config/config.yml` file:

```yaml
# app/config/config.yml

imports:
    ...
    - { resource: "@MagentixPickupPlugin/Resources/config/config.yml" }
    - { resource: "@MagentixPickupDemoPlugin/Resources/config/config.yml" }
```
    
Import routing in your `app/config/routing.yml` file:

```yaml
# app/config/routing.yml
...

magentix_pickup_plugin:
    resource: "@MagentixPickupPlugin/Resources/config/routing.yml"
```

Deploy Assets:

```bash
php bin/console sylius:theme:assets:install
```

Finally, in *Shipping Method* section from admin, add new Method with *Demo Pickup* Calculator.