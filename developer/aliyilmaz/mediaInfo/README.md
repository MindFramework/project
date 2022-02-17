## What is mediaInfp ?

This package uses the `getID3()` project. For more information, you can visit the [project page](https://github.com/JamesHeinrich/getID3).

The `mediaInfo` package contains the current version of the `getID3` project. If you think the `getID3` project is out of date, you can download and replace the original files of the project in question. When we created the `mediaInfo` package, we did not make any changes to the `getID3` project files.

**Out-of-class use:**

code:
```php
require_once('Mind.php');
$m = new Mind();
$filePath = '1.mp4';
print_r($m::aliyilmaz('mediaInfo')->mediaInfo($filePath));
```

**When using it in the class:**

code:
```php
$filePath = '1.mp4';
print_r(self::aliyilmaz('mediaInfo')->mediaInfo($filePath));
```

output:
```php
Array
(
    [GETID3_VERSION] => 1.9.21-202202031206
    [filesize] => 29861840
    [filepath] => C:/laragon/www/project
    [filename] => 1.mp4
    [filenamepath] => C:/laragon/www/project/1.mp4
    [avdataoffset] => 39339
    [avdataend] => 29861840
    [fileformat] => mp4
    [audio] => Array
        (
            [dataformat] => mp4
            [codec] => ISO/IEC 14496-3 AAC
            [sample_rate] => 48000
            [channels] => 2
            [bits_per_sample] => 16
            [lossless] => 
            [channelmode] => stereo
            [streams] => Array
                (
                    [0] => Array
                        (
                            [dataformat] => mp4
                            [codec] => ISO/IEC 14496-3 AAC
                            [sample_rate] => 48000
                            [channels] => 2
                            [bits_per_sample] => 16
                            [lossless] => 
                            [channelmode] => stereo
                        )

                )

        )

    [video] => Array
        (
            [dataformat] => quicktime
            [rotate] => 0
            [resolution_x] => 1280
            [resolution_y] => 720
            [fourcc] => avc1
            [fourcc_lookup] => H.264/MPEG-4 AVC
            [frame_rate] => 23.976
        )

    [warning] => Array
        (
            [0] => Unknown QuickTime atom type: "?TIM" (a9 54 49 4d), 23 bytes at offset 33421
            [1] => Unknown QuickTime atom type: "?TSC" (a9 54 53 43), 17 bytes at offset 33444
            [2] => Unknown QuickTime atom type: "?TSZ" (a9 54 53 5a), 16 bytes at offset 33461
        )

    [comments] => Array
        (
            [language] => Array
                (
                    [0] => English
                )

        )

    [encoding] => UTF-8
    [mime_type] => video/mp4
    [quicktime] => Array
        (
            [hinting] => 
            [controller] => standard
            [ftyp] => Array
                (
                    [hierarchy] => ftyp
                    [name] => ftyp
                    [size] => 24
                    [offset] => 0
                    [signature] => mp42
                    [unknown_1] => 0
                    [fourcc] => mp42
                )

            [timestamps_unix] => Array
                (
                    [create] => Array
                        (
                            [moov mvhd] => 1483818871
                            [moov trak tkhd] => 1483818871
                            [moov trak mdia mdhd] => 1483818871
                        )

                    [modify] => Array
                        (
                            [moov mvhd] => 1483818872
                            [moov trak tkhd] => 1483818871
                            [moov trak mdia mdhd] => 1483818871
                        )

                )

            [time_scale] => 48000
            [display_scale] => 1
            [video] => Array
                (
                    [rotate] => 0
                    [resolution_x] => 1280
                    [resolution_y] => 720
                    [frame_rate] => 23.976
                    [frame_count] => 396
                )

            [stts_framecount] => Array
                (
                    [0] => 1646
                    [1] => 3222
                )

            [audio] => Array
                (
                    [codec] => mp4
                    [sample_rate] => 48000
                    [channels] => 2
                    [bit_depth] => 16
                )

            [uuid] => Array
                (
                    [0] => Array
                        (
                            [hierarchy] => uuid
                            [name] => uuid
                            [size] => 5854
                            [offset] => 33477
                            [uuid_field_id] => be7acfcb-97a9-42e8-9c71-999491e3afac
                            [xml] => 
                 
                        )

                )

            [mdat] => Array
                (
                    [hierarchy] => mdat
                    [name] => mdat
                    [size] => 29822509
                    [offset] => 39331
                )

            [encoding] => UTF-8
        )

    [playtime_seconds] => 68.736
    [bitrate] => 3470961.4757914
    [playtime_string] => 1:09
)
```

---

### Dependencies
The `self::$path` variable in the Mind project is used.

---

### License
Instructions and files in this directory are shared under the [GPL3](https://github.com/aliyilmaz/mediaInfo/blob/main/LICENSE) license.