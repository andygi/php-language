# php-language

Simply and essential code to use .mo files as multilanguage system.

You can find the .pot file as template, more informationatrion regarding how made .pot file [here](http://www.gsy-design.com/how-to-generate-a-pot-file-using-poedit/).


##how it works

It' work by get language international code by get variable like that

`
example.php?locale=it_IT
`

[here the locale code list](http://viralpatel.net/blogs/java-locale-list-tutorial/)

in page use the syntax

`<?php echo(__('hello world')); ?>`

with bouble underscore `__` as funtion prefix.
