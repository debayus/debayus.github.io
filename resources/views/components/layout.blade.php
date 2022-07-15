<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title ?? '@debayus' }} - {{ config('app.name', 'Mahas') }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/site.css')}}" />
    <link rel="stylesheet" href="{{asset('lib/Magnific-Popup-master/dist/magnific-popup.css')}}" />
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-dark box-shadow mb-3 fixed-top">
            <div class="container">
                <a class="navbar-brand" href="/">Gede Bayu</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse d-sm-inline-flex flex-sm-row-reverse">
                    <ul class="navbar-nav flex-grow-1">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/gallery">Gallery</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="container gb-body">
        <main role="main" class="pb-3">
            {{ $slot }}
        </main>
    </div>

    <footer class="text-center footer text-muted">
        <div class="container">
            &copy; 2022 - <a href="{{ url('/') }}">{{ config('app.name', 'Mahas') }}</a>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="/lib/Magnific-Popup-master/dist/jquery.magnific-popup.min.js"></script>
    <script>
        AOS.init();
        $('.image-link').magnificPopup({type:'image'});
        $('.parent-container').magnificPopup({
            delegate: 'a',
            type: 'image',
            gallery: {
                enabled: true,
                tCounter: ''
            }
        });
    </script>
</body>
</html>
