---
title : "Konfigurasi Virtual Host Centos"
---
edit file `/etc/httpd/conf/httpd.conf`
```
   1 #
.... 
 990 NameVirtualHost bintang:80
....
1010 
<VirtualHost *:80>
    ServerName www.iputra.io
    ServerAdmin admin@iputra.io
    DocumentRoot /var/www/html/iputra.io/public_html
    ErrorLog logs/iputra.io-error_log
    CustomLog logs/iputra.io-access_log common
</VirtualHost>

<VirtualHost *:80>
    ServerName blog.iputra.io
    ServerAdmin admin@iputra.io
    DocumentRoot /var/www/html/blog.iputra.io/public_html
    ErrorLog logs/iputra.io-error_log
    CustomLog logs/iputra.io-access_log common
</VirtualHost>
1026 
```

sekarang edit untuk https nya pada file `/etc/httpd/conf.d/ssl.conf`
{% highlight shell %}
  1 #
...
 77 DocumentRoot "/var/www/html"
 78 ServerName www.iputra.io:443
{% endhighlight %}

[1] [digitalocean.com](https://www.digitalocean.com/community/tutorials/how-to-set-up-apache-virtual-hosts-on-centos-6)
[2] [digicert.com](https://www.digicert.com/ssl-support/apache-multiple-ssl-certificates-using-sni.htm)
