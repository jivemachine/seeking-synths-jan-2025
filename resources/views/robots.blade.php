# robots.txt for a Laravel Site

# Allow all search engines
User-agent: *
Disallow: /vendor/
Disallow: /storage/
Disallow: /resources/
Disallow: /node_modules/
Disallow: /bootstrap/
Disallow: /tests/

# Block access to the environment file
Disallow: /.env

# Block routes related to authentication and admin
Disallow: /login
Disallow: /register
Disallow: /admin
Disallow: /password/reset

# Sitemap location
Sitemap: {{ url('sitemap.xml') }}
