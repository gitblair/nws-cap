# nws-cap

NWS watches, warnings, advisories, and other similar products in the Common Alerting Protocol (CAP) and Atom Syndication Format (ATOM) can be used to launch Internet messages, trigger alerting systems, feed mobile device (e.g., cell phone/smart phone and tablet) applications, news feeds, television text captions, highway sign messages, and synthesized voice over automated telephone calls or radio broadcasts.

This code allows you to pull and parse ATOM feeds to display on your website.

This project contains 3 files. The feeds folder is required to house feeds pulled.

pull-alerts.php - this pulls down ATOM feeds from alerts.weather.gov for NYC and NJ. Edit as desired but no editing required to demo.

create-alerts.php - this parses the NYC and NJ ATOM feeds and creates a variable for display. Edit as desired but no editing required to demo.

display-alerts.php - this includes the above two so it displays the updated weather variable whenever used. This could be renamed index or use it in your existing page.

For more information on the source or to find the names of the atom feeds you want for your project, check out https://alerts.weather.gov/index.php
