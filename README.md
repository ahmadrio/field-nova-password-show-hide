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
