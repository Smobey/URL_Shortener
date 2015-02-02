# URL_Shortener
A simple URL shortener service by Smobey.

USAGE:

As a user inputs a URL, the script creates a database entry for the URL, assigning it a numerical ID and converting the numerical ID of that entry into a base-36 format (of lower case letters and numbers.)

The base-36 form of the ID can be used access the URL from thereafter.

The purpose of the application is to turn long URLs into a short form, and to mask them.

PAGES:

The core functionality of the application can be found in the /libs -folder, specifically the dbaccess.php -file. Check its comments for their usage. The following files are important:

shortener.php: The actual user interface for createurl.php to use. The user inputs a URL that gets sent to createurl.php to be stored into the database (if not already there.)

createurl.php: Takes the URL by POST (via shortener.php), checks its validity (returning the user to shortener.php should the ULR be invalid) and returns the user the full shortened URL for use.

u.php: Takes the encoded ID of the URL by a GET and redirects the user to the URL the ID represents.

API:

u.php: GETs the "u" variable, 301 redirecting to the corresponding URL in database if valid and 404 redirecting to an error page if there isn't one.<br>
createurl_api.php: Accepts a URL by POST (by the 'shorten' variable), inserts it in the database and gives its encoded ID as plain text if successful. In cases of invalid URLs, it returns an error in plain text. This page is for API purposes only and doesn't get used by the application by default.

INSTALLATION:

1. Install everything to a directory on your web service<br>
2. Create a MySQL database for the shortener to use<br>
3. Fill out the config.ini<br>
4. Run create-tables.php<br>

ADDITIONAL NOTES:

To actually make the shortener sensible to use, consider using a short domain name, and to further shorten the URLs provided to the user by using .htaccess rewrite rules.

i.e. making the server understand mini.xx/a5f as mini.xx/u.php?u=a5f for the sake of extra short URLs.

KNOWN ISSUES:

1. The shortened URLs are sequential and nonrandom, and thus easily accessible by anyone. Users should not link to anything that should be kept private.
