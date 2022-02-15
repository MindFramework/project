## What is base_url ?

This package is used to get the project path.

**Out-of-class use:**

code:
```php
require_once('Mind.php');
$m = new Mind();
echo $m::aliyilmaz('base_url')->base_url();
```

**When using it in the class:**

code:
```php
echo self::aliyilmaz('base_url')->base_url();
```

output:
```php
/Mind/
```

---

### Dependencies
1. [get_absolute_path 1.0.0](https://github.com/aliyilmaz/get_absolute_path)

---

### License
Instructions and files in this directory are shared under the [GPL3](https://github.com/aliyilmaz/base_url/blob/main/LICENSE) license.