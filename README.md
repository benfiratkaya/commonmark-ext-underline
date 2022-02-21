## CommonMark Underline Extension

![Tests](https://github.com/benfiratkaya/commonmark-ext-underline/workflows/PHP%20Composer/badge.svg)

This extension adds support for underline syntax. It allows users to use !! in order to indicate text that should be rendered within <u> tags.
## Install

```bash
composer require benfiratkaya/commonmark-ext-underline
```

## Example

```php
use League\CommonMark\Environment\Environment;
use League\CommonMark\Extension\CommonMark\CommonMarkCoreExtension;
use BenFiratKaya\CommonMarkExtension\Underline;

$environment = new Environment([]);
$environment->addExtension(new CommonMarkCoreExtension())
            ->addExtension(new UnderlineExtension());

$converter = new MarkdownConverter($environment);
$html = $converter->convertToHtml('!!test!!');
```

This creates the following HTML

```html
<u>test</u>
```
