# Download-File-Keep-directory-structure
Example:
You want  download file
https://xxx.com/aaa/bbb/ccc/1.jpg
and  keep the folder  like    /aaa/bbb/ccc

use  [aria2](https://aria2.github.io/)

get url list   like a   download_list.txt   (Convert to  aria2 format)

in download folder run commend

```
aria2c  --input-file=download-list.txt
```
```
aria2c --max-concurrent-downloads=10 --input-file=download-list.txt
```

[Manual](https://aria2.github.io/manual/en/html/aria2c.html#basic-options)
