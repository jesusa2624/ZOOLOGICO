@extends('layouts.plantilla')

@section('mariposa')
<a href="#" id="logo"><img src="{{asset('assets/images/logo-page.jpg')}}" alt=""/></a>
@endsection

@section('cuerpo')
    <div id="content">
        <div>
            <h1>Blog</h1>
            <h4>This website template has been designed by Free Website Templates for you, for free. You can replace all
                this text with your own text.</h4>
            <span>by : Lorem M. January 2,2011</span>
            <p>This website template has been designed by Free Website Templates for you, for free. You can replace all this
                text with your own text. You can remove any link to our website from this website template, you're free to
                use this website template without linking back to us. If you're having problems editing this website
                template, then don't hesitate to ask for help on the Forum.</p>
            <p>Vestibulum hendrerit est at purus rutrum vel tempus lacus vulputate. Morbi a enim urna, eu dictum quam. Cras
                nec mollis purus. Suspendisse eu lectus nec purus sodales gravida nec interdum dui. Nulla ultrices iaculis
                mauris eu tempor. Aliquam luctus suscipit lectus sit amet mollis. Pellentesque dignissim ultricies magna, eu
                egestas lectus consequat a. Praesent at sem eu metus fermentum lobortis. Nunc dapibus sem eget ligula
                condimentum volutpat. Cras convallis, urna sed varius blandit, mauris ante elementum nibh, a tincidunt
                libero quam eu nulla. Aliquam erat volutpat. In at sem ac lectus pulvinar accumsan nec vel dolor. Aliquam
                vitae felis eget odio ornare ornare a quis diam. In dapibus massa vel leo malesuada aliquet. Donec laoreet
                risus ac quam elementum a fringilla mi bibendum.</p>
            <p>Looking for more templates? Just browse through all our Free Website Templates and find what you’re looking
                for. But if you don’t find any website template you can use, you can try our Free Web Design service and
                tell us all about it. Maybe you’re looking for something different, something special. And we love the
                challenge of doing something different and something special.</p>
        </div>
        <div id="blog">
            <h4><a href="#">Lorem etiam vitae eros bibendum ultricies consectetu suspend</a></h4>
            <span>by : Lorem M. January 2,2011</span>
            <p>Cras tempus varius mauris, et dictum neque malesuada vitae. Cras sit amet orci at magna ornare porta nec et
                neque cras congue nibh.</p>
            <h4><a href="#">Etiam eu ante vitae eros bibendum ultricies donec hendrerit massa</a></h4>
            <span>by : Lorem M. January 2,2011</span>
            <p>Nulla sit amet arcu mi. Mauris sollicitudin nibh vestibulum justo ullamcorper eu suscipit enim cursus. Etiam
                eu ante vitae eros bibendum</p>
            <h4><a href="#">Aliquam erat volutpat. In at sem ac lectus pulvinar accumsan nec</a></h4>
            <span>by : Lorem M. January 2,2011</span>
            <p>Mauris sollicitudin nibh vestibulum justo ullamcorper eu suscipit enim cursus. Etiam eu ante vitae eros
                bibendum ultricie donec.</p>
        </div>
        <div class="featured">
            <h2>Meet our Animals</h2>
            <ul>
                <li class="first"> <a href="#"><img src="{{asset('assets/images/penguin.jpg')}}" alt="" /></a> <a href="#">Duis laoreet</a>
                </li>
                <li> <a href="#"><img src="{{asset('assets/images/elephant.jpg')}}" alt="" /></a> <a href="#">Curabitur</a> </li>
                <li> <a href="#"><img src="{{asset('assets/images/owl.jpg')}}" alt="" /></a> <a href="#">Adipiscing</a> </li>
                <li> <a href="#"><img src="{{asset('assets/images/butterfly.jpg')}}" alt="" /></a> <a href="#">Sed Volutpat</a> </li>
                <li> <a href="#"><img src="{{asset('assets/images/turtle.jpg')}}" alt="" /></a> <a href="#">Nulla lobortis</a> </li>
                <li> <a href="#"><img src="{{asset('assets/images/snake.jpg')}}" alt="" /></a> <a href="#">Suspendisse</a> </li>
                <li> <a href="#"><img src="{{asset('assets/images/gorilla.jpg')}}" alt="" /></a> <a href="#">Tincidunt</a> </li>
                <li class="last"> <a href="#"><img src="{{asset('assets/images/button-view-gallery2.jpg')}}" alt="" /></a> <a href="#">View
                        Gallery</a> </li>
            </ul>
        </div>
    </div>
@endsection
