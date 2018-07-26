## Notes

* This Plugin allows to add pickup delivery method.
* Plugin is under development.

## Installation

Add needed repositories to the `composer.json` file:

```json
"repositories": {
    ...
    "magentix/pickup-plugin": {
        "type": "vcs",
        "url": "https://github.com/magentix/pickup-plugin.git"
    },
    "magentix/pickup-demo-plugin": {
        "type": "vcs",
        "url": "https://github.com/magentix/pickup-demo-plugin.git"
    }
}
```

Add new packages to the `composer.json` file:

```json
"require": {
    ...
    "magentix/pickup-plugin": "dev-master",
    "magentix/pickup-demo-plugin": "dev-master"
},
```

Then update:

```bash
$ composer update
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