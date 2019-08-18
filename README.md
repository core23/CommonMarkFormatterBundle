CommonMarkFormatterBundle
=========================


[![Latest Stable Version](https://poser.pugx.org/core23/commonmark-formatter-bundle/v/stable)](https://packagist.org/packages/core23/commonmark-formatter-bundle)
[![Latest Unstable Version](https://poser.pugx.org/core23/commonmark-formatter-bundle/v/unstable)](https://packagist.org/packages/core23/commonmark-formatter-bundle)
[![License](https://poser.pugx.org/core23/commonmark-formatter-bundle/license)](https://packagist.org/packages/core23/commonmark-formatter-bundle)

[![Total Downloads](https://poser.pugx.org/core23/commonmark-formatter-bundle/downloads)](https://packagist.org/packages/core23/commonmark-formatter-bundle)
[![Monthly Downloads](https://poser.pugx.org/core23/commonmark-formatter-bundle/d/monthly)](https://packagist.org/packages/core23/commonmark-formatter-bundle)
[![Daily Downloads](https://poser.pugx.org/core23/commonmark-formatter-bundle/d/daily)](https://packagist.org/packages/core23/commonmark-formatter-bundle)

[![Build Status](https://travis-ci.org/core23/CommonMarkFormatterBundle.svg)](https://travis-ci.org/core23/CommonMarkFormatterBundle)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/core23/CommonMarkFormatterBundle/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/core23/CommonMarkFormatterBundle)
[![Code Climate](https://codeclimate.com/github/core23/CommonMarkFormatterBundle/badges/gpa.svg)](https://codeclimate.com/github/core23/CommonMarkFormatterBundle)
[![Coverage Status](https://coveralls.io/repos/core23/CommonMarkFormatterBundle/badge.svg)](https://coveralls.io/r/core23/CommonMarkFormatterBundle)

This bundle provides a commonmark formatter for the [Sonata FormatterBundle].

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
            service: core23_commonmark.formatter
```

## Add markdown extensions

If you want to use some [Github-Flavored Markdown extensions](https://github.com/thephpleague/commonmark-extras), you just need to register them inside the `config/services.yaml` file of your project:

```yaml
services:
    League\CommonMark\Extras\CommonMarkExtrasExtension:
        tags: [ 'core23_commonmark.extension' ]
```

[Sonata FormatterBundle]: https://github.com/sonata-project/SonataFormatterBundle
