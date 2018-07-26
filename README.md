## Installation
```bash
$ composer require magentix/pickup-demo-plugin
```

Add plugin dependencies to your AppKernel.php file:
```php
public function registerBundles()
{
    $bundles = [
        ...
        new \MagentixPickupDemoPlugin\MagentixPickupDemoPlugin(),
    ];
}
```

Import required config in your `app/config/config.yml` file:

```yaml
# app/config/config.yml

imports:
    ...   
    - { resource: "@MagentixPickupDemoPlugin/Resources/config/config.yml" }