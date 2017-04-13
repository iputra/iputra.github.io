---
layout: post
title: "QUCS - Electronics Simulation"
date: 2017-04-13
---
1. Download the files
```bash
$ wget https://downloads.sourceforge.net/project/qucs/qucs/0.0.19/qucs-0.0.19.tar.gz
```

2. Install Depedency
```bash
$ sudo apt update
$ sudo apt-get install build-essential libqt4-dev libqt4-qt3support automake libtool gperf flex bison git cmake
```

3. Extract the Files
```bash
$ cp qucs-0.0.19.tar.gz /tmp
$ tar -zxvf qucs-0.0.19.tar.gz
```

4. Build And Install
```bash
$ cd qucs
$ ./configure
$ sudo make
$ sudo make install
```

Source :
<br>[https://github.com/Qucs/qucs/wiki/Build-Linux](https://github.com/Qucs/qucs/wiki/Build-Linux)
<br>[http://qucs.sourceforge.net/build.html](http://qucs.sourceforge.net/build.html)
