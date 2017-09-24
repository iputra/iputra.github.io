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

Setelah selesai di edit. Jalanakan kembali service named dengan 
menggunakan command `service named restart` atau `/etc/init.d/named restart`
uji coba menggunakan dig dan lakukan ping 
{% highlight ruby %}
dig tekom.com
ping tekom.com
{% endhighlight %}
![dig ping](/img/007-dig-ping.png)

##### Source
[1] [digitalocean.com](https://www.digitalocean.com/community/tutorials/how-to-install-the-bind-dns-server-on-centos-6)
<br>
[2] [askubuntu.com](https://askubuntu.com/questions/356813/dns-configuration-problem-bind9)
