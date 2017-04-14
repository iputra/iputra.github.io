---
layout: post
title: "Unity Window Title"
date: 2017-04-14
---

![Unity Window Title](/image/unity-window-title-01.png)
Edit one of the theme files (e.g. gtk.css on arc-gtk). Modify this of the css file
```bash
UnityDecoration {
    /* Title settings */
    -UnityDecoration-title-indent: 5px; /* Size property, left indent of the title */
    -UnityDecoration-title-fade: 35px; /* Size property, space of the title that can be faded */
    -UnityDecoration-title-alignment: 0.5; /* Float from 0.0 to 1.0, to align the title - THIS WHAT YOU REELY NEED*/
}
```
