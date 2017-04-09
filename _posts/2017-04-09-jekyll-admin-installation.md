---
title: Jekyll Admin Installation
layout: post
---

![Jekyll Admin Installation](/image/jekyll-admin-installation-01.png)
1. Make gemfile
```bash
$ touch Gemfile
$ vim Gemfile
```
the Gemfile contain code below here:
```bash
source 'https://rubygems.org'
gem 'jekyll-admin', group: :jekyll_plugins
```
2. execute with bundle
```bash
$ bundle install
$ bundle exec jekyll serve
```