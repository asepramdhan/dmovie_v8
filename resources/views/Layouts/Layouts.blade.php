<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dmovie | Website Drakor Terbaru & Terupdate, bisa download sepuasnya dan bisa nonton secara offline</title>

  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- my css -->
  <link rel="stylesheet" href="/css/styles.css">
  <!-- bootstrap css -->
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <!-- icon bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

  <!-- plyr -->
  <link rel="stylesheet" href="https://cdn.plyr.io/3.7.2/plyr.css" />

  <!-- jquery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>
<body style="background: rgb(185, 185, 185)">
  @if (session('berhasil'))
  @include('Components.NotifBerhasil')
  @elseif(session('gagal'))
  @include('Components.NotifGagal')
  @endif
  @include('Components.Iklan')
  @include('Components.Navbar')
  <div class="container">
    @yield('content')
  </div>
  @include('Components.Footer')

  <!-- my js -->
  <script src="/js/script.js"></script>
  <!-- bootstrap js -->
  <script src="/js/bootstrap.bundle.min.js"></script>
  <!-- Plyr -->
  <script src="https://cdn.plyr.io/3.7.2/plyr.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      $('[data-bs-toggle="tooltip"]').tooltip();

      $("#notifikasi").toast('show');

      if ($(window).width() <= 768) {
        $("#cardFilm").removeAttr("style");
        $("#playerFilm").removeAttr("style");
        $("#populerDrakor").removeAttr("style");
      }
    });

    // Change "{}" to your options:
    // https://github.com/sampotts/plyr/#options
    const player = new Plyr("#player", {
      autoplay: true,
      controls: [
        "play-large",
        // 'rewind',
        "play",
        // 'fast-forward',
        "progress"
        , "current-time"
        , "mute"
        , "volume",
        // 'captions',
        "settings",
        // 'pip',
        // 'airplay',
        // 'download',
        "fullscreen",
        // 'capture'
      ],
    });

    // Expose player so it can be used from the console
    window.player = player;

  </script>

</body>
</html>