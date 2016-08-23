# updated News Dashlet for SugarCRM #

### What is it? ###

The original News dashlet used Google API. Google API was retired which caused 
the News Dashlet to no longer function properly. This repo contains an updated
News Dashlet which is now using Google News RSS feed to retrieve its information.

The Dashlet was ported by Angel Magaña from SugarCRM.

* Version 0.0.1

### Installation ###

There is a Node script that can be used to build the ZIP archive. Because
it's Node you'll have that installed along with NPM.

To install: Clone the repo and from the root directory of the repo run

    npm install

This is will install the Node dependency on the ZIP lib being used.

### Creating the ZIP archive ###

Once **npm install** has been executed you can execute the 
**packageManfiest** script to build the archive.

    node packageManifest.js
which will create the ZIP file one directory up. So, if you've checked the 
repo into C:\sugar\news-dashlet then the ZIP file will be created in C:\sugar\

If you'd like a different the location then just edit the packageManifest javascript
file.
