---
layout: post
title: solve commit in git
date: 2017-04-07
---

Kadang masalah akan selalu muncul dalam hal-hal yang baru di coba. Masalah masalah inilah yang akan melatih kemampuan kita hingga bisa naik ke tahap berikutnya. Nah di dalam proses belajar git, gue dapet kendala ketika melakukan commit. Kira kira kaya gini contohnya.
```bash
$ git commit -m "save arezzo files"
On branch master
Changes not staged for commit:
  (use "git add <file>..." to update what will be committed)
  (use "git checkout -- <file>..." to discard changes in working directory)

      modified:   arezzo.txt
      modified:   arezzo.jsp
no changes added to commit (use "git add" and/or "git commit -a")
```

Masalah ini penyebabnya karena terdapat folder .git di dalam subfolder master branch. Untuk menyelesaikan masalah ini cukup mudah hanya hapus saja folder .git yang ada pada sub folder. Karena kalo satu satu ngehapusnya lumayan lama dan bikin pegel, cara yang mudahnya bisa pake perintah dibawah

```
$ find . -type f | grep -i "\.git" | xargs rm
```