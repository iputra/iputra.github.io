---
title: "Konfigurasi IP Static Centos"
---

Cek interface yang tersedia dengan command `ifconfig -a`
![Interface Yang Tersedia](/img/001-interface-yang-tersedia.png)

interface yang belum memiliki IP yaitu interface eth2. Sekarang 
masuk ke directory `/etc/sysconfig/network-scripts/`. Lalu edit 
atau buat file(kalau tidak tersedia) `ifcfg-eth2`. Dan lakukan 
konfigurasi seperti gambar dibawah 

{% highlight ruby %}
# Pastikan MAC Address yang digunakan sama seperti
# yang ada pada file /etc/udev/rules.d/70-persistent-net.rules
cd /etc/sysconfig/network-scripts
vi ifcfg-eth2
{% endhighlight %}

![Konfigurasi IP Statik Interface eth2](/img/002-konfigurasi-ip-statik-interface-eth2.png)

kemudian restart service network dengan command `/etc/init.d/network restart`. 
Maka sekarang ketika dilihat interface eth2 dengan command `ifconfig` 
sudah memiliki IP seperti yang telah di konfigurasi. Dan ketika di coba ping 
ke host OS akan mendapatkan response.

![Cek ping ke host OS](/img/003-cek-ping-ke-host-os.png)

#### Source 
[1] [serverfault.com](https://serverfault.com/questions/272968/centos-ifcfg-eth0-config-file-deleted-utility-to-recreate-it)
<br>
[2] [centos.org](https://www.centos.org/docs/5/html/Deployment_Guide-en-US/s1-networkscripts-interfaces.html)
