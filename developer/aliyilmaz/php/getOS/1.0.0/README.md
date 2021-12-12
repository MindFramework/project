## What is getOS ?

It is used to obtain the server operating system name on which the project is running. It supports `Darwin`, `Windows`, `Linux` operating systems, other operating systems are named `Unknown`.

**Out-of-class use:**

code:
```php
require_once('Mind.php');
$m = new Mind();
echo $m::aliyilmaz('php/getOS/1.0.0')->getOS();
```

**When using it in the class:**

code:
```php
self::aliyilmaz('php/getOS/1.0.0')->getOS();
```

output:
```php
Linux
```

---

### Dependencies
This package has no dependencies.

---

### License
Instructions and files in this directory are shared under the [GPL3](https://github.com/aliyilmaz/getOS/tree/main/1.0.0/LICENSE.md) license.