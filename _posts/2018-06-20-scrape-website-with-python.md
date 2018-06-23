---
title: "Scrape Site with Python"
author: iputra
date: 2018-06-20 08:28
---

# Mengumpulkan Data dengan Python

Jadi kemarin ketemu temen smp pas bukber, terus sekarang dia lagi ada penelitian. Penelitian dia perlu beberapa data, data yang dia butuhin ada di internet. Hanya saja dia melakukannya dengan manual. Gak lama saya menawarkan kerja sama untuk membantu dia mengumpulkan data dari internet itu. Hanya saja saya melakukannya secara otomatis dengan cuplikan kode di bawah ini (beberapa kode sengaja di obfuscate)

```python
import requests
import sys
from lxml import html

def get_page():
    tree = html.fromstring(r.content)
    sumPage = tree.xpath('//a/@href')
    del sumPage[0:-1]
    sumPage = sumPage[0]
    sumPage = sumPage.split('/')
    return int(sumPage[-1]) 

def lastPage():
    link = sys.argv[1]+"/"+str(sumPage)
    r = requests.get(link)
    tree = html.fromstring(r.content)
    lastPage = tree.xpath('//td[@class="tcenter"]/text()')
    return int(lastPage[-1])
    
r = requests.get(sys.argv[1])

sumPage = get_page()
lastPage = lastPage()

idx = 1

for page in range(0, lastPage, 20):
    
    print sys.argv[1]+"/"+str(page)
    r = requests.get(sys.argv[1]+"/"+str(page))

    print "Parsing page-" + str(page) 

    tree = html.fromstring(r.content)

    mId = map(lambda x: x.split()[0], tree.xpath("//tr[@class='tmiddle']/td[2]/text()"))
    name = tree.xpath("//tr[@class='tmiddle']/td[3]/a/text()")
    link = tree.xpath("//tr[@class='tmiddle']/td[3]/a/@href")

    arr = {}
    for i in range(len(mId)):
        arr[id[i]] = {'name':name[i],'link':link[i]}

    for i in arr.keys():
        if(int(i[:2]) < 13):
            del arr[i]

    dictionary = {}
    for i in arr.keys():
        r = requests.get(arr[i]['link'])
        tree = html.fromstring(r.content)
        gnd = tree.xpath("//table[@class='table1']/tr[2]/td[3]/text()")[0]
        if(gnd != 'P'):
            continue
        
        status = tree.xpath("//table[@class='table1']/tr[9]/td[3]/text()")[0].split()[0]
        name = arr[i]['name']
        u = tree.xpath("//table[@class='table1']/tr[4]/td[3]/text()")[0]
        In = int(tree.xpath("//table[@class='table1']/tr[7]/td[3]/text()")[0].split()[0])

        if(status == "G"):
            Out = tree.xpath("//table[@class='table1']/tr[10]/td[3]/text()")
            if(Out):
                Out = int(Out[0].split()[2])
            else:
                Out = In + 4
        else:
            Out = In + 4

        dictionary[i] = {
            'name': name,
            'gnd': gnd,
            'in': In,
            'out': Out,
            'u': u
        }
	
    file = open("data-"+sys.argv[2]+".csv", "a")
    for i in dictionary.keys():
        
        file.write(dictionary[i]['name'] + ", ")
        file.write(str(dictionary[i]['in']) + ", ")
        file.write(str(dictionary[i]['in']) + ", ")
        file.write(str(dictionary[i]['out']) + ", ")
        file.write(dictionary[i]['u'] + ", ")
        file.write("4" + "\n")
        
    	print i + " " + dictionary[i]['name']

    print "Succeed save data..."
```

**Run Program**

```bash
$ python get-data.py https://example.com/00000 example
```



Dengan cara yang manual, teman saya ini menghabiskan waktu 10 menit untuk mendapatkan kurang lebih 20 data. Dengan waktu yang sama kode diatas mendapat 300-350 data.