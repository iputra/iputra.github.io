---
title : "Repositori Centos 6.7"
---
```
# CentOS-Base.repo
#
# The mirror system uses the connecting IP address of the client and the
# update status of each mirror to pick mirrors that are updated to and
# geographically close to the client.  You should use this for CentOS updates
# unless you are manually picking other mirrors.
#
# If the mirrorlist= does not work for you, as a fall back you can try the 
# remarked out baseurl= line instead.

# CentOS-Base.repo
# http://kambing.ui.ac.id/centos/6/

[Add Ons]
name=CentOS
baseurl=http://kambing.ui.ac.id/centos/6/addons/x86_64/
enabled=1
gpgcheck=1
gpgkey=http://kambing.ui.ac.id/centos/RPM-GPG-KEY-CentOS-6

[CentOS Plus]
name=CentOS
baseurl=http://kambing.ui.ac.id/centos/6/centosplus/x86_64/
enabled=1
gpgcheck=1
gpgkey=http://kambing.ui.ac.id/centos/RPM-GPG-KEY-CentOS-6

[Contrib]
name=CentOS
baseurl=http://kambing.ui.ac.id/centos/6/contrib/x86_64/
enabled=1
gpgcheck=1
gpgkey=http://kambing.ui.ac.id/centos/RPM-GPG-KEY-CentOS-6

[Extras]
name=CentOS
baseurl=http://kambing.ui.ac.id/centos/6/extras/x86_64/
enabled=1
gpgcheck=1
gpgkey=http://kambing.ui.ac.id/centos/RPM-GPG-KEY-CentOS-6

[Fasttrack]
name=CentOS
baseurl=http://kambing.ui.ac.id/centos/6/fasttrack/x86_64/
enabled=1
gpgcheck=1
gpgkey=http://kambing.ui.ac.id/centos/RPM-GPG-KEY-CentOS-6

[OS]
name=CentOS
baseurl=http://kambing.ui.ac.id/centos/6/os/x86_64/
enabled=1
gpgcheck=1
gpgkey=http://kambing.ui.ac.id/centos/RPM-GPG-KEY-CentOS-6

[Update]
name=CentOS
baseurl=http://kambing.ui.ac.id/centos/6/updates/x86_64/
enabled=1
gpgcheck=1
gpgkey=http://kambing.ui.ac.id/centos/RPM-GPG-KEY-CentOS-6

```

{% highlight shell %}
# Repository lokal
curl http://iputra.github.io/files/CentOS-Base.repo > /etc/yum.repos.d/CentOS-Base.repo

# Repository origin
curl http://iputra.github.io/files/CentOS-Base.repo.orig > /etc/yum.repos.d/CentOS-Base.repo
{% endhighlight %}
