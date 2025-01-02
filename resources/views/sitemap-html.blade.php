<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>HTML Sitemap</title>
</head>

<body>
    <h1>HTML Sitemap</h1>
    <ul>
        @foreach ($pages as $page)
            <li>
                <a href="{{ url($page->slug) }}">{{ $page->title }}</a>
            </li>
        @endforeach
    </ul>
</body>

</html>
