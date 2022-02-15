## What is evalContainer ?

This package serves to append `string` type data to the part where it is used together with PHP codes inside. If there are PHP codes that have been converted to HTML special characters, it also uses them by converting them to PHP code.

data:
```php
$code = 'Hello world <?php print_r(["test","test1"]);?>';
// $code = 'Hello world &lt;?php print_r(["test","test1"]);?&gt;';
```
**Out-of-class use:**

code:
```php
require_once('Mind.php');
$m = new Mind();
$m::aliyilmaz('evalContainer')->evalContainer($code);
```

**When using it in the class:**

code:
```php
self::aliyilmaz('evalContainer')->evalContainer($code);
```

output:
```php
Hello world Array ( [0] => test [1] => test1 )
```

---

### Dependencies
1. [is_htmlspecialchars 1.0.0](https://github.com/aliyilmaz/is_htmlspecialchars)

---

### License
Instructions and files in this directory are shared under the [GPL3](https://github.com/aliyilmaz/evalContainer/blob/main/LICENSE) license.