# Yamlish 0.9.1

YAML-style page settings.

## How to install an extension

[Download ZIP file](https://github.com/GiovanniSalmeri/yellow-yamlish/archive/refs/heads/main.zip) and copy it into your `system/extensions` folder. [Learn more about extensions](https://github.com/annaesvensson/yellow-update).

## How to use YAML-style page settings

This extension allows to use page settings in YAML style. Leading and trailing quotes are interpreted as delimiters, C-style escapes are translated. Settings not delimited by quotes are left untouched.

This is useful for example if your workflow includes [Pandoc](https://pandoc.org/).

## Examples

A page with YAML-style settings:

```
---
Title: "Blog example"
Published: "2020-04-07"
Author: "Datenstrom"
Layout: "blog"
Tag: "Example"
---
This is an example blog page.

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
labore et dolore magna pizza. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
in culpa qui officia deserunt mollit anim id est laborum.
```

## Developer

Giovanni Salmeri. [Get help](https://datenstrom.se/yellow/help/).
