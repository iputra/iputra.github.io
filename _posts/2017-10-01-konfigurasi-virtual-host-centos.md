---
title : "Konfigurasi Virtual Host Centos"
---
> "Knowing is not enough, we must apply. Willing is not enough, we must do". - Johann Wolfgang von Goethe

<br>
Buat direktori baru pada `/var/www/html`
{% highlight shell %}
cd /var/www/html
mkdir -p iputra.io/public_html blog.iputra.io/public_html
{% endhighlight %}

kemudian pindahkan file yang ada pada `/var/www/html` ke dalam 
`iputra.io/public_html`
{% highlight shell %}
cp background.png favicon.ico split.css index.html iputra.io/public_html
{% endhighlight %}

tambahkan file baru ke dalam direktori `/var/www/html/blog.iputra.io/public_html`
{% highlight shell %}
cd /var/www/html/blog.iputra.io/public_html
curl -O https://iputra.github.io/f/bio/ava.png \
-O https://iputra.github.io/f/bio/ava@2x.png \
-O https://iputra.github.io/f/bio/favicon.ico \
-O https://iputra.github.io/f/bio/style.css \
-O https://iputra.github.io/f/bio/index.html
{% endhighlight %}

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
 77 DocumentRoot "/var/www/html/iputra.io/public_html"
 78 ServerName www.iputra.io:443
{% endhighlight %}

jika sudah restart service httpd

maka jika diakses `iputra.io` akan tampil seperti ini
![Tampilan iputra.io](/img/009-iputra-io.png)

dan jika diakses `blog.iputra.io` maka akan seperti ini
![Tampilan blog.iputra.io](/img/010-blog-iputra-io.png)

[1] [digitalocean.com](https://www.digitalocean.com/community/tutorials/how-to-set-up-apache-virtual-hosts-on-centos-6)
<br>
[2] [digicert.com](https://www.digicert.com/ssl-support/apache-multiple-ssl-certificates-using-sni.htm)
