# field-nova-password-show-hide
Install
```php
composer require opanegro/field-nova-password-show-hide
```

Usage
```php
use Opanegro\FieldNovaPasswordShowHide\FieldNovaPasswordShowHide;
...
public function fields(Request $request)
{
    return [
        FieldNovaPasswordShowHide::make('Password')->onlyOnForms();
    ];
}
```

Preview

![18_02_2019](https://thumbs.gfycat.com/DrearyImperturbableDachshund-size_restricted.gif)
