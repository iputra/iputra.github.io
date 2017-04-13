---
layout: post
title: "Packet Tracer 6.3 install from source"
date: 2017-04-12
---

### Install
1. Download the files
Cisco Packet Tracer 6.3
[cs.rpi.edu](http://www.cs.rpi.edu/~kotfid/packettracer/LinuxUbuntu/PacketTracer63_linux.tar.gz)
Cisco Packet Tracet 7.0
[32 bit gdrive](https://drive.google.com/open?id=0B7zGwz0yWP8QZTVyTjRieGFFRHM)
[64 bit gdrive](https://drive.google.com/open?id=0B7zGwz0yWP8QZWo2dGhjR2E3ck0)
2. Extract and configure
```bash
$ cd /tmp
$ cp ~/Downloads/PacketTracerXX_linux.tar.gz .
$ tar -zxvf PacketTracerXX_linux.tar.gz
$ sudo ./install
```

### Uninstall
```bash
$ rm -r /opt/pt
```
