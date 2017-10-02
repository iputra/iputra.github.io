---
title : "Install Tmux From Source"
published : false
---
cd /tmp
wget wget https://github.com/downloads/libevent/libevent/libevent-2.0.21-stable.tar.gz
tar zxvf libevent-2.0.21-stable.tar.gz
./configure
make 
make install 
ldconfig

wget https://github.com/tmux/tmux/releases/download/2.5/tmux-2.5.tar.gz
tar zxvf tmux-2.5.tar.gz
cd tmux-2.5
./configure
make
make install
yum install gcc libevent libevent.i686 libevent-devel ncurses-devel

https://apurvtwr.wordpress.com/2013/08/23/installing-tmux/
http://rpm.pbone.net/
https://community.webfaction.com/questions/13624/install-tmux-in-home
