## What is info ?

This function is used to access information about a path that contains a file. Both parameters it takes must be specified as `string`. The path `$str` represents the information type parameter `$type`.

parameters:
1. dirname (The directory where the file is located)
2. basename (The name of the file with its extension)
3. extension (File extention)
4. filename (File name)


**Out-of-class use:**

code:
```php
require_once('Mind.php');
$m = new Mind();
echo $m::aliyilmaz('info')->info($_SERVER['SCRIPT_NAME'], 'dirname');
// echo $m::aliyilmaz('info')->info($_SERVER['SCRIPT_NAME'], 'basename');
// echo $m::aliyilmaz('info')->info($_SERVER['SCRIPT_NAME'], 'extension');
// echo $m::aliyilmaz('info')->info($_SERVER['SCRIPT_NAME'], 'filename');
```

**When using it in the class:**

code:
```php
echo self::aliyilmaz('info')->info($_SERVER['SCRIPT_NAME'], 'dirname');
// echo self::aliyilmaz('info')->info($_SERVER['SCRIPT_NAME'], 'basename');
// echo self::aliyilmaz('info')->info($_SERVER['SCRIPT_NAME'], 'extension');
// echo self::aliyilmaz('info')->info($_SERVER['SCRIPT_NAME'], 'filename');
```

output:
```php
Mind
```

---

### Dependencies
1. [get_absolute_path 1.0.0](https://github.com/aliyilmaz/get_absolute_path)

---

### License
Instructions and files in this directory are shared under the [GPL3](https://github.com/aliyilmaz/info/blob/main/LICENSE) license.