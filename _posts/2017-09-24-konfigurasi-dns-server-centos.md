---
title : "Konfigurasi DNS Server Centos"
---

Install beberapa package yang dibutuhkan, hal ini 
dilakukan jika menggunakan centos minimal yang baru 
diinstall.

{% highlight ruby %}
yum install coreutils net-tools bind-utils
{% endhighlight %}

Install package bind versi 9
{% highlight ruby %}
yum install bind
{% endhighlight %}

Edit file `/etc/named.conf` menjadi seperti gambar dibawah
{% highlight ruby %}
vi /etc/named.conf
{% endhighlight %}
![file etc named conf](/img/004-file-etc-named-conf.png)

Edit file `/etc/named.rfc1912.zone` untuk menambahkan dns 
forward dan reverse dns.
{% highlight ruby %}
vi /etc/named.rfc1912.zones
{% endhighlight %}
![file etc named rfc1912 zones](/img/005-file-etc-named-rfc1912-zones.png)

Pergi ke directory `/var/named/` dan buat file baru bernama 
`named.tekom` atau salin dari file `named.localhost`. kemudian 
edit file tersebut.
{% highlight ruby %}
cd /var/named
cp named.localhost named.tekom
cp named.localhost named.192
vi named.tekom
{% endhighlight %}
![file var named named tekom](/img/006-file-var-named-named-tekom.png)

edit file `/etc/resolv.conf` ganti isinya sama di bawah ini
{% highlight ruby %}
# IP nya sama kaya yang ada di file /etc/named.conf
nameserver 192.168.3.2
{% endhighlight %}

Ubah owner file `/var/named/named.tekom` dari root menjadi named
{% highlight ruby %}
chown root:named /var/named/named.tekom
{% endhighlight %}

Setelah selesai di edit. Jalanakan kembali service named dengan 
menggunakan command `service named restart` atau `/etc/init.d/named restart`
uji coba menggunakan dig dan lakukan ping 
{% highlight ruby %}
dig tekom.com
ping tekom.com
{% endhighlight %}
![dig ping](/img/007-dig-ping.png)

Terima Kasih, teman - teman yang telah menghubungi saya atas kendala yang dihadapi.
Karena kalian saya jadi banyak tahu dan bisa membantu lebih banyak orang dengan masalah 
yang serupa..

##### Source
[1] [digitalocean.com](https://www.digitalocean.com/community/tutorials/how-to-install-the-bind-dns-server-on-centos-6)
<br>
[2] [askubuntu.com](https://askubuntu.com/questions/356813/dns-configuration-problem-bind9)
<br>
[3] [ask.xmodulo.com](http://ask.xmodulo.com/configure-static-dns-centos-fedora.html)
[4] [lisenet.com](https://www.lisenet.com/2015/setup-bind-dns-server-on-centos-6/)
