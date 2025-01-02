<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seeking Synths | Exploring Vintage Synthesizers with Renowned Musicians</title>
    <meta name="description"
        content="Seeking Synths is a captivating video series where the host explores musicians' collections of vintage synthesizers and how they've shaped their music.">
    <meta name="keywords"
        content="Seeking Synths, vintage synthesizers, music, musicians, video series, Syntaur, synthesizers">
    <meta name="author" content="Seeking Synths">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://www.seekingsynths.com">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Seeking Synths | Exploring Vintage Synthesizers with Renowned Musicians">
    <meta property="og:description"
        content="Join host Jesse Beaman as he explores musicians' collections of vintage synthesizers.">
    <meta property="og:image" content="https://www.seekingsynths.com/images/logo.png">
    <meta property="og:url" content="https://www.seekingsynths.com">
    <meta property="og:type" content="website">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Seeking Synths | Exploring Vintage Synthesizers with Renowned Musicians">
    <meta name="twitter:description"
        content="Join host Jesse Beaman as he explores musicians' collections of vintage synthesizers.">
    <meta name="twitter:image" content="https://www.seekingsynths.com/images/logo.png">


    <!-- Structured Data Markup -->
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "TVSeries",
          "name": "Seeking Synths",
          "description": "A video series where host Jesse Beaman explores renowned musicians' collections of vintage synthesizers.",
          "genre": ["Documentary", "Music"],
          "creator": {
            "@type": "Person",
            "name": "Sam Mims"
          },
          "actor": [
            {
              "@type": "Person",
              "name": "Jesse Beaman"
            },
            {
              "@type": "Person",
              "name": "Joe Berry"
            },
            {
              "@type": "Person",
              "name": "Kaela Sinclair"
            }
          ],
          "director": [
            {
              "@type": "Person",
              "name": "Lucas Fowler"
            },
            {
              "@type": "Person",
              "name": "Sam Mims"
            }
          ],
          "image": "https://www.seekingsynths.com/images/logo.png",
          "url": "https://www.seekingsynths.com",
          "sameAs": [
            "https://www.facebook.com/seekingsynths",
            "https://www.instagram.com/seekingsynths",
            "https://www.twitter.com/seekingsynths"
          ],
          "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "https://www.seekingsynths.com"
          }
        }
        </script>

    <!-- Tailwind CSS -->
    @vite('resources/css/app.css')
</head>

<body class="w-full mx-auto text-white bg-black">
    <!-- Header Image with gradient -->
    <div class="relative w-full h-auto">
        <img src="{{ asset('images/Seeking-Synths-TV-Header.png') }}"
            alt="Image of Joe Berry & Kaela Sinclair jamming on thier keyboards" class="object-cover w-full h-auto" />

        <!-- gradient overlay -->
        <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent"></div>

        <!-- Seeking Synths Logo -->
        <img src="{{ asset('images/Seeking-Synths-Logo-Eye-Blink.gif') }}" alt="Seeking Synths Logo"
            class="absolute top-8 left-8 w-[134px] h-[134px] object-contain" />
    </div>

    <!-- Title & Credits Section -->
    <div class="max-w-3xl px-4 py-8 mx-auto text-center">
        <!-- Title SEEKING SYNTHS (BOLD) -->
        <h1 class="font-helvetica font-bold text-4xl md:text-5xl lg:text-6xl tracking-[0.04em] mb-4">
            SEEKING SYNTHS
        </h1>
        <!-- Host/Director/Editor etc. -->
        <p class="font-helvetica font-normal text-base md:text-lg lg:text-xl tracking-[0.04em]">
            Host: Jesse Beaman<br />
            Director: Sam Mims<br />
            Editor & Director of Photography: Lucas Fowler
        </p>
    </div>

    <!-- Text Below Header -->
    <div class="max-w-3xl px-4 py-8 mx-auto text-center">
        <!-- Seeking Synths in bold -->
        <p class="font-helvetica font-bold text-2xl md:text-3xl lg:text-4xl tracking-[0.04em] mb-4">
            Seeking Synths
            <!-- Follow Text with normal weight -->
            <span class="font-helvetica font-normal text-2xl md:text-3xl lg-text:4xl tracking-0.04em">
                is a captivating video series featuring 30-minute episodes in the spirit of Anthony Bourdain,
                where the host visits renowned musicians to explore their collections of vintage synthesizers
                and uncover how these iconic instruments have shaped their music.
            </span>
        </p>


    </div>

    <!-- Large image -->
    <div class="max-w-screen-xl px-4 py-8 mx-auto">
        <img src="{{ asset('images/joe-berry-keyboard-closeup.png') }}" alt="Closeup of Joe Berry playing keyboard"
            class="w-full h-auto rounded-tl[100px]" />
    </div>

    <!-- Text before two side-by-side images & Get in Touch button -->
    <div class="max-w-2xl px-4 py-8 mx-auto text-center">
        <p class="font-helvetica font-normal text-base md:text-lg lg:text-xl tracking-[0.04em]">
            The show delves into the guests' passion for vintage synthesizers and the distinctive sounds
            they create, revealing the stories behind the music, the musicians, and these rare instruments.
            Musicians will marvel at the impressive collections, while non-musicians will enjoy uncovering
            the artists behind some of their favorite tracks.
        </p>

        <!-- Get in Touch Button -->
        <div class="my-8">
            <button
                class="px-6 py-2 font-medium text-white transition bg-blue-600 rounded-full font-helvetica hover:bg-blue-700">
                Get in Touch
            </button>
        </div>
    </div>


    <!-- Two images side by side -->
    <div class="grid max-w-screen-xl grid-cols-1 gap-4 px-4 py-8 mx-auto md:grid-cols-2">
        <img src="{{ asset('images/Kaela-in-action.png') }}" alt="Kaela Sinclair from M83 playing keys"
            class="w-full h-auto rounded-tl-[100px]" />
        <img src="{{ asset('images/Joe-in-action.png') }}" alt="Joe Berry from M83 playing the flute"
            class="w-full h-auto rounded-tl-[100px]" />
    </div>

    <!-- Text Below Two Images (Kaela Sinclair / Joe Berry) -->
    <div class="max-w-3xl px-4 py-8 mx-auto text-center">
        <p class="font-helvetica font-bold text-xl md:text-2xl lg:text-3xl tracking-[0.04em]">
            Kaela Sinclair &amp; Joe Berry <br /> - music group M83
            <span class="font-normal">
                (episode photos)
            </span>
        </p>
    </div>

    <!-- Two more images (Little Tony Clifton / Jesse Beaman) -->
    <div class="grid max-w-screen-xl grid-cols-1 gap-4 px-4 py-8 mx-auto md:grid-cols-2">
        <img src="{{ asset('images/Little-Tony-Clifton-jamming.png') }}" alt="Little Tony Clifton"
            class="w-full h-auto rounded-tl-[100px]" />
        <img src="{{ asset('images/Kaela-Sinclair-and-Jesse-Beaman.png') }}" alt="Kaela & Jesse looking at the sunset"
            class="w-full h-auto rounded-tl-[100px]" />
    </div>

    <!-- Text below little tony & sunset photo -->
    <div class="max-w-3xl px-4 py-8 mx-auto text-center">
        <p class="font-helvetica font-bold text:xl md:text-2xl lg:text-3xl tracking-[0.04em]">
            Little Tony Clifton <br />
            Jesse Beaman - Seeking Synths host
            <span class="font-normal">
                (episode photos)
            </span>
        </p>
    </div>

    <!-- Single Large Image Below -->
    <div class="max-w-screen-xl px-4 py-8 mx-auto">
        <img src="{{ asset('images/joe-berry-kaela-sinclair-jesse-beaman-hiking.png') }}"
            alt="Jesse, Joe, and Kaela hiking under the beatufil LA sunset" class="w-full h-auto rounded-tl-[100px]" />
    </div>

    <!-- Gradient at bottom of the page -->
    <div class="w-full h-auto bg-gradient-to-t from-[#005F98] to-transparent py-16"></div>


    <!-- js -->
    @vite('resources/js/app.js')
</body>

</html>
