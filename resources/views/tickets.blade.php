@extends('layouts.plantilla')

@section('mariposa')
<a href="#" id="logo"><img src="{{asset('assets/images/logo-page.jpg')}}" alt=""/></a> 
@endsection

@section('cuerpo')
<div id="content">
    <div id="tickets">
      <h1>Tickets</h1>
      <p>This website template has been designed by Free Website Templates for you, for free. You can replace all this text with your own text. You can remove any link to our website from this website template, you're free to use this website template without linking back to us. If you're having problems editing this website template, then don't hesitate to ask for help on the Forum.</p>
      <ul>
        <li class="first">
          <div><a href="#"><img src="{{asset('assets/images/ticket-lion.jpg')}}" alt=""/></a></div>
          <h2><a href="#">Lorem accumsan consect</a></h2>
          <p>Mauris dictum augue non sapien interdum cursus. Phasellus nisl eros, viverra nec blandit et, pellentesque ut augue. Vivamus eget justo libero.</p>
          <span>Adult - $ 9.00</span> <span>Kids - $ 4.00</span> </li>
        <li>
          <div><a href="#"><img src="{{asset('assets/images/ticket-dolphin.jpg')}}" alt=""/></a></div>
          <h2><a href="#">Sitamet bibendum ultricies</a></h2>
          <p>Mauris dictum augue non sapien interdum cursus. Phasellus nisl eros, viverra nec blandit et, pellentesque ut augue. Vivamus eget justo libero.</p>
          <span>Adult - $ 9.00</span> <span>Kids - $ 4.00</span> </li>
        <li>
          <div><a href="#"><img src="{{asset('assets/images/ticket-gorilla.jpg')}}" alt=""/></a></div>
          <h2><a href="#">Etiam eu ante vitae eros</a></h2>
          <p>Mauris dictum augue non sapien interdum cursus. Phasellus nisl eros, viverra nec blandit et, pellentesque ut augue. Vivamus eget justo libero.</p>
          <span>Adult - $ 9.00</span> <span>Kids - $ 4.00</span> </li>
      </ul>
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