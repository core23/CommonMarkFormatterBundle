CommonMarkFormatterBundle
=========================
[![Latest Stable Version](https://poser.pugx.org/core23/commonmark-formatter-bundle/v/stable)](https://packagist.org/packages/core23/commonmark-formatter-bundle)
[![Latest Unstable Version](https://poser.pugx.org/core23/commonmark-formatter-bundle/v/unstable)](https://packagist.org/packages/core23/commonmark-formatter-bundle)
[![License](https://poser.pugx.org/core23/commonmark-formatter-bundle/license)](https://packagist.org/packages/core23/commonmark-formatter-bundle)

[![Total Downloads](https://poser.pugx.org/core23/commonmark-formatter-bundle/downloads)](https://packagist.org/packages/core23/commonmark-formatter-bundle)
[![Monthly Downloads](https://poser.pugx.org/core23/commonmark-formatter-bundle/d/monthly)](https://packagist.org/packages/core23/commonmark-formatter-bundle)
[![Daily Downloads](https://poser.pugx.org/core23/commonmark-formatter-bundle/d/daily)](https://packagist.org/packages/core23/commonmark-formatter-bundle)

[![Continuous Integration](https://github.com/core23/CommonMarkFormatterBundle/workflows/Continuous%20Integration/badge.svg)](https://github.com/core23/CommonMarkFormatterBundle/actions)
[![Code Coverage](https://codecov.io/gh/core23/CommonMarkFormatterBundle/branch/master/graph/badge.svg)](https://codecov.io/gh/core23/CommonMarkFormatterBundle)

This bundle provides a [commonmark] formatter for the [Sonata FormatterBundle].

## Installation

Open a command console, enter your project directory and execute the following command to download the latest stable version of this bundle:

```
composer require core23/commonmark-formatter-bundle
```

### Enable the Bundle

Then, enable the bundle by adding it to the list of registered bundles in `config/bundles.php` file of your project:

```php
// config/bundles.php

return [
    // ...
    Core23\CommonMarkFormatterBundle\Core23CommonMarkFormatterBundle::class => ['all' => true],
];
```

To use the new formatter, register the formatter in `config/packages/sonata_formatter.yaml` file of your project:

```yaml
sonata_formatter:
    formatters:
        commonmark:
            service: core23_commonmark_formatter.formatter
```

## Add markdown extensions

If you want to use some [Github-Flavored Markdown extensions], you need download the extension and register it inside the `config/services.yaml` file of your project:

```yaml
services:
    League\CommonMark\Extras\CommonMarkExtrasExtension:
        tags: [ 'core23_commonmark_formatter.extension' ]
```

[commonmark]: https://github.com/thephpleague/commonmark
[Sonata FormatterBundle]: https://github.com/sonata-project/SonataFormatterBundle
[Github-Flavored Markdown extensions]: https://github.com/thephpleague/commonmark-extras
