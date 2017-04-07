---
layout: post
title: "Create Blog With Jekyll"
categories: [design,all]
---
## Install the Environment

To create the website we need some tools, such as ruby environment, gem, and jekyll of course. okay, to install that let's check it out

1. Install Ruby from source to get the newer version
```bash
$ wget http://ftp.ruby-lang.org/pub/ruby/2.4/ruby-2.4.0.tar.gz
$ tar -xzvf ruby-2.4.0.tar.gz
$ cd ruby-2.4.0/
$ ./configure
$ make
$ sudo make install
$ ruby -v
```
2. Install gem from package manager
```bash
$ sudo apt install gem
```
3. Install jekyll from gem
```bash
$ gem instal jekyll
```
4. Find The page
```bash
$ wget https://github.com/kronik3r/daktilo/archive/master.zip
$ unzip master.zip
```
5. Run with jekyll
```bash
$ cd daktilo-master
$ jekyll serve
```

<br>
## Create the post

To create the post you need follow the format from the sample page, if not follow you can't get the style for your post.

**add this header to every your post**
```html
---
layout: post
title: "Your Title Here"
subtitle: "Your Subtitle Here"
date: 2015-09-06
categories: [design, tool]
---
```

i think it's enough for create the page or blog with jekyll.
