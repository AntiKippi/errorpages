# HTTP error pages

This is a gorgeous yet simple and elegant template for `4xx` and `5xx` HTTP status code error pages. It features a dark, "hacker"-like atmosphere utilizing the incredible [Iosevka](https://typeof.net/Iosevka/) font and a glitch effect. It's written in pure HTML5 and CSS, no JavaScript needed. The font has been stripped down to the ASCII character range to keep the size reasonable (~17KB vs ~1MB).

Additionally there is a JSON with error information and a small build script to put the error information into the template and generate the respective pages. All client and server error codes listed in [MDN](https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status) are covered. `420` is also included just because 😎.

## Showcase

| [![404.html](blob/404.gif?raw=true)](https://kippi.at/public/errorpages/404.html) | [![418.html](blob/418.gif?raw=true)](https://kippi.at/public/errorpages/418.html) | [![420.html](blob/420.gif?raw=true)](https://kippi.at/public/errorpages/420.html) |
|-|-|-|

Click on the GIF to get to the full page. Note that the 418 and 420 pages feature additional elements not included here, if you want these pages just download and unminify them. You can find all pages at https://kippi.at/public/errorpages/.

## Background

I've spend the last few days completly overengineering HTTP status code error pages. It started with me wanting an aesthetic, glitchy 404 page with a bit of "cyberpunk" and "hacker" vibes while still being simple and JS free. It ended with me (who is usually not that good at design stuff) creating a crazy good looking page, writing kind of a "[template engine](https://github.com/AntiKippi/templator)" (more like a wrapper around Python's [`string.Template`](https://docs.python.org/3.14/library/string.html#string.Template), lol) and modularizing the page so that I can create one with the same design for every HTTP error code. The result is the template and JSON file you find here.

## Building
To build the pages just clone the repository and run the `build.php` script. It will create a new folder `pages` in the current working directory and put the resulting pages in there.

```
$ git clone 'https://github.com/AntiKippi/errorpages.git'
$ cd errorpages
$ php build.php
```

If you want to customize the error pages and need a more advanced and flexible build method, check out [templator](https://github.com/AntiKippi/templator).