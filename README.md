# vulnPHP
Some common PHP vulnerabilities, as well as their fixes. This is the first time I ever used PHP/mysql/etc. so please don't mind anything I throw in that isn't really relevent to the relating bug. 

## 01 Reflected XSS
Some PHP thats vulnerable to reflected XSS. Also contains unencoded cookie stuff that may or may not work properly...

## 02 Stored XSS
Some PHP thats vulnerable to stored XSS. If you want to use this, make sure to change your configuration/configuration.php
The plan is to have configuration.php be vulnerable to a file disclosure vuln.

## 03 Full Path Disclosure
Some PHP that has debugging turned on. Easiest fix is to just turn off debugging.
