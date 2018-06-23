---
title: "Bikin Sertifikat Pake Python"
author: iputra
date: 2018-06-17 10:12
---

# Bikin Sertifikat Pake Python

Bulan Februari lalu, saya bergabung dengan kepanitiaan untuk membuat sebuah acara. Di kepanitiaan tersebut, saya masuk pada divisi DDD (Divisi DDD yaitu divisi yang berkaitan dengan desain, dokumentasi, dan dekorasi). Ketika berbincang dengan teman-teman yang lain, saya menyarankan teman-teman untuk membuat suatu sistem desain (design system). Kenapa saya menyarankan hal itu, karena pada divisi ini cukup banyak orangnya, tanpa adanya sistem desain maka desain-desain yang dibuat oleh tiap-tiap orang akan berbeda-beda. Saya mendapat jobdesk untuk membuat xbanner, kemudian saya membuatnya dengan software gravit design.

Selain itu, mendekati hari h. Kami divisi DDD mendapat jobdesk untuk membuat sertifikat untuk semua peserta. Peserta yang daftar cukup banyak, akan membutuhkan waktu lama jika melakukan dengan cara manual. Beruntung beberapa waktu lalu saya membaca sebuah artikel tentang pustaka (library) bahasa pemrograman python. Namanya pillow, salah satu library tentang pengolah citra (image). Dengan library tersebut saya menghasil gambar sertifikat yang terdapat nama setiap pesertanya. Berikut code yang saya buat untuk men-generate file sertifikat tersebut.

```python
import csv
from PIL import Image, ImageDraw, ImageFont

imgfile = "certificate.png"
csvfile = "name-list.csv"

fontstyle = "Lato-Black.ttf"
fontsize = 84

# Configuration
color = (0, 0, 0)
yposition = 650
names = []

with open(csvfile, "rb") as f:
    reader = csv.reader(f)
    for row in reader:
        names.append(row[0]) 

names = sorted(names)

for name in names:
    img = Image.open(imgfile)
    draw = ImageDraw.Draw(img)
    font = ImageFont.truetype(fontstyle, fontsize)
    xposition = (img.size[0] - draw.textsize(name, font)[0]) / 2

    draw.text((xposition, yposition), name.upper(), color, font=font)
    print("Processing Image for "+name+" ...")
    img.save('png/'+name+'.png')
    print("Success Created "+name+" Certificate")

print("Success Created All Certificate")
```

