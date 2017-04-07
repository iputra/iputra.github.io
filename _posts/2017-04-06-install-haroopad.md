---
layout: post
title : Install Haroopad
date: 2017-04-06
---

Haroopad adalah sejenis teks editor, semacam nano, vim, sublime dkk. namun haroopad ini memiliki fungsi khusus untuk menulis dalama format markdown ( bagi yanb belum tau markdown itu apa bisa cari di google). Ketika menggunakan haroopad markdown yang kita ketikan akan langsung muncul tampilannya di sebelah IDE haroopad.

Haroopad ini memiliki tampilan yang bagus juga menarik gk bikin mata pusing atau bikin malas ngoding. Selain itu, haroopad memiliki tool - tool yang cukup membantu. Pertama, Tool Markdown syntax helper yang fungsinya akan membantu kita untuk menampilkan format dari sebuah syntax. ada berbagai macam format syntax markdown yang umum digunakan di tampilkan oleh syntax helper ini (pokoknya ini membantu banget). Kedua, haroopad memiliki tool untuk menampilkan line numbering. Walaupun ini kelihatan sepele tapi menurut gue line numbering ini bagus banget buat ngeliat progres kita ketika ngoding.

Oke itu hanya sedikit yang bisa gue bahas mengenai haroopad, sisanya bisa di eksplor sendiri.

Untuk Install haroopad caranya gampang banget. Ikutin aja kaya di bawah

1. Create Directory
```bash
$ mkdir haroopad
$ cd haroopad
```

2. Download the binary
```bash
$ # for 64 bit
$ wget https://bitbucket.org/rhiokim/haroopad-download/downloads/haroopad-v0.13.1-x64.tar.gz
$ 
$ # for 32 bit
$ wget https://bitbucket.org/rhiokim/haroopad-download/downloads/haroopad-v0.13.1-ia32.tar.gz
```

3. Extract the compressed file
```bash
$ tar -zxvf haroopad-v0.13.1-x64.tar.gz
$ tar -zxvf control.tar.gz
$ tar -zxvf data.tar.gz
```

4. Run The Program
```bash
$ usr/share/haroopad/haroopad
```

5. Create Symlink
```bash
$ ln -s $HOME/haroopad/usr/share/haroopad/haroopad
```