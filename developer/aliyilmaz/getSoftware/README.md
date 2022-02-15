## What is getSoftware ?

It is used to get the server software name on the operating system the project is running on. **Apache**, **Microsoft IIS**, **LiteSpeed** and **Nginx** software are supported, other server software is named **Unknown**.

**Out-of-class use:**

code:
```php
require_once('Mind.php');
$m = new Mind();
echo $m::aliyilmaz('getSoftware')->getSoftware();
```

**When using it in the class:**

code:
```php
echo self::aliyilmaz('getSoftware')->getSoftware();
```

output:
```php
Apache
```

---

### Dependencies
This package has no dependencies.

---

### License
Instructions and files in this directory are shared under the [GPL3](https://github.com/aliyilmaz/getSoftware/blob/main/LICENSE) license.