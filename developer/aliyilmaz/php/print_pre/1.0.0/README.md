## What is print_pre ?

This function is used to display the data sent in `array` or `json` format on the screen in a readable way.

**Out-of-class use:**

data:
```php
$data = array(
    'username'=>'aliyilmaz',
    'password'=>md5(123456)
);

// or json
// $data = json_encode($data);
```

code:
```php
require_once('Mind.php');
$m = new Mind();
$m::aliyilmaz('php/print_pre/1.0.0')->print_pre($data);
```

**When using it in the class:**

code:
```php
self::aliyilmaz('php/print_pre/1.0.0')->print_pre($data);
```

output:
```php
Array
(
    [username] => aliyilmaz
    [password] => e10adc3949ba59abbe56e057f20f883e
)
```

---

### Dependencies

1. [is_json - 1.0.0](https://github.com/aliyilmaz/is_json)

---

### License
Instructions and files in this directory are shared under the [GPL3](https://github.com/aliyilmaz/print_pre/tree/main/1.0.0/LICENSE.md) license.