UDID-protected-cydia-repo
============

A sample UDID-protected Cydia repository.

To use it, edit the accepted UDIDs inside checker.php

See .htaccess which plays an important role here.

If you are using lighttpd, include lighttpd_mod_rewrite.conf in your lighttpd server configuration, or paste its contents in.

Special thanks to http://serverfault.com/questions/166535/creating-a-password-protected-cydia-repository

There exists a mirror on BitBucket at https://bitbucket.org/angelXwind/udid-protected-cydia-repo if you are interested.

-------
Original author: @moeseth
Modified by Karen Tsai (angelXwind) for use with lighttpd