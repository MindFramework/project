## What is filter ?

This method is used to disable exploit codes such as `html` and special characters, `sql_injection`, `xss`. It secures and returns the data sent as `string` with the help of `htmlspecialchars` method. The `htmlspecialchars_decode` method should be used to convert the data back to its original state.

**Out-of-class use:**

data:
```php
$content = "%&%()' OR 1=1 characters are disabled.";
```

code:
```php
require_once('Mind.php');
$m = new Mind();
echo $m::aliyilmaz('filter')->filter($content);
```

**When using it in the class:**

code:
```php
echo self::aliyilmaz('filter')->filter($content);
```

output:
```php
%&amp;%()' OR 1=1 characters are disabled.
```

---

### Dependencies
This package has no dependencies.

---

### License
Instructions and files in this directory are shared under the [GPL3](https://github.com/aliyilmaz/filter/blob/main/LICENSE) license.