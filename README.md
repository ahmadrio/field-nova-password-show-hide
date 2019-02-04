# field-nova-password-show-hide
Install
```php
composer require opanegro/field-password-show-hide
```

Usage
```php
use Opanegro\FieldPasswordShowHide\FieldPasswordShowHide;
...
public function fields(Request $request)
{
    return [
        FieldPasswordShowHide::make('Password')->onlyOnForms();
    ];
}
```
