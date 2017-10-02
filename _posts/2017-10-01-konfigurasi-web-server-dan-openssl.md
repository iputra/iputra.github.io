---
title : "Konfigurasi Web Server dan OpenSSL"
---
{% highlight shell %}
yum install httpd openssl mod_ssl
{% endhighlight %}

edit file `/etc/httpd/conf/httpd.conf`
{% highlight shell %}
# Edit sesuai baris 

  1 #
... 
135 #Listen 12.34.56.78:80
136 Listen 192.168.3.2:80
... 
262 ServerAdmin admin@tekom.com
... 
276 ServerName www.tekom.com:80
{% endhighlight %}

Buat file `index.html` pada direktori `/var/www/html`
kemudian isi seperti code berikut
{% highlight html %}
<html>
    <h1>Hello, Ikhsan</h1>
<html>
{% endhighlight %}

Restart service httpd dengan menggunakan command berikut
{% highlight shell %}
service httpd restart
{% endhighlight %}

Jika domain `tekom.com` tidak dapat diakses matikan firewall 
atau edit file `/etc/sysconfig/iptables`
{% highlight shell %}
service iptables stop
{% endhighlight %}

<!-- 
jika ingin mengedit file firewal bisa dengan mengisi konfigurasi 
sebagai berikut 
{% highlight shell %}
-A INPUT -p udp -m state --state NEW --dport 53 -j ACCEPT
-A INPUT -p tcp -m state --state NEW --dport 53 -j ACCEPT
-A INPUT -p tcp -m state --state NEW --dport 953 -j ACCEPT
-A INPUT -p udp -m state --state NEW --dport 953 -j ACCEPT
-A INPUT -p tcp -m tcp --dport 80 -j ACCEPT
-A INPUT -p tcp -m tcp --dport 443 -j ACCEPT
{% endhighlight %}
-->

# Konfigurasi OpenSSL
Masuk ke direktori `/etc/pki/tls/certs`
{% highlight shell %}
cd /etc/pki/tls/certs
openssl genrsa -des3 -out server.key 1024
make server.csr
openssl x509 -in server.csr -out server.crt -req -signkey server.key -days 365
cp server.key /etc/pki/tls/private
{% endhighlight %}

edit file `/etc/httpd/conf.d/ssl.conf`
{% highlight shell %}
  1 #
... 
 18 Listen 192.168.3.2:443
...
 77 DocumentRoot "/var/www/html"
 78 ServerName www.tekom.com:443
... 
105 SSLCertificateFile /etc/pki/tls/certs/server.crt
...
112 SSLCertificateKeyFile /etc/pki/tls/private/server.key
{% endhighlight %}
