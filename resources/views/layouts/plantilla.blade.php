<!DOCTYPE html>
<html>

<head>
    <title>Animal Kingdom Zoo</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css" />
</head>

<body>
    <div id="page">
        <div id="header"> @yield('mariposa')
            <ul>
              <li class="first">
                <h2><a href="live.html">Live</a></h2>
                <span>Have fun in your visit</span> </li>
              <li>
                <h2><a href="#">Love</a></h2>
                <span>Donate for the animals</span> </li>
              <li>
                <h2><a href="#">Learn</a></h2>
                <span>Get to know the animals</span> </li>
            </ul>
            <a href="#">Buy tickets / Check Events</a>
            <ul id="navigation">
              <li id="link1" class="selected"><a href="{{route('index')}}">Home</a></li>
              <li id="link2"><a href="{{route('blog')}}">The Zoo</a></li>
              <li id="link3"><a href="{{route('info')}}">Visitors Info</a></li>
              <li id="link4"><a href="{{route('tickets')}}">Tickets</a></li>
              <li id="link5"><a href="{{route('evento')}}">Events</a></li>
              <li id="link6"><a href="{{route('gallery')}}">Gallery</a></li>
              <li id="link7"><a href="{{route('contact')}}">Contact Us</a></li>
            </ul>
            @yield('Familialeon')
            
            @yield('especial')
            
          </div>
        {{-- campo para el contenido --}}
        @yield('cuerpo')
        {{-- campo reservado para el foooter --}}
        <div id="footer">
            <div>
                <a href="#" class="logo"><img src="{{ asset('assets/images/animal-kingdom.jpg') }}" alt="" /></a>
                <div>
                    <p>Ellentesque habitant morbi tristique senectus et 0000</p>
                    <span>285 067-39 282 / 5282 9273 999</span> <span>email@animalkingdomzoo.com</span>
                </div>
                <ul class="navigation">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="tickets.html">Tickets</a></li>
                    <li><a href="zoo.html">The Zoo</a></li>
                    <li><a href="events.html">Events</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                </ul>
                <ul>
                    <li><a href="#">Live : Have fun in your visit</a></li>
                    <li><a href="#">Love : Donate for the animals</a></li>
                    <li><a href="#">Learn : Get to know the animals</a></li>
                </ul>
                <p>Copyright &copy; <a href="#">Domain Name</a> - All Rights Reserved | Template By <a target="_blank"
                        href="http://www.freewebsitetemplates.com/">FreeWebsiteTemplates.com</a></p>
            </div>
        </div>
    </div>
</body>

</html>
