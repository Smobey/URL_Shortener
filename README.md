# URL_Shortener
A simple URL shortener service

USAGE:
As a user inputs a URL, the script creates a database entry for the URL, assigning it a numerical ID and converting the numerical ID of that entry into a base-36 format (of lower case letters and numbers.)

The base-36 form of the ID can be used access the URL from thereafter.

The purpose of the application is to turn long URLs into a short form, and to mask them.

IMPORTANT FILES & FOLDERS:
u.php: The links will be in the form of u.php?u=[short url code].  See additional notes.
libs/: The core functionality of the program.
views/: Contains the template for all pages, and the views for pages visible for the user.

INSTALLATION:
1. Install everything to a directory on your web service
2. Create a MySQL database for the shortener to use
3. Fill out the config.ini
4. Run create-tables.php

ADDITIONAL NOTES:
To actually make the shortener sensible to use, consider using a short domain name, and to further shorten the URLs provided to the user by using .htaccess rewrite rules.

i.e. making the server understand mini.xx/a5f as mini.xx/u.php?u=a5f for extra short URLs.

KNOWN ISSUES:
1. The shortened URLs are sequential and nonrandom, and thus easily accessible by anyone. Users should not link to anything that should be kept private.
