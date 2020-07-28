@extends('layouts.plantilla')

@section('mariposa')
<a href="#" id="logo"><img src="{{asset('assets/images/logo.jpg')}}" alt=""/></a>
    
@endsection


@section('Familialeon')
<img src="{{asset('assets/images/lion-family.jpg')}}" alt=""/>
@endsection
@section('especial')
<div>
    <h1>Special Events:</h1>
    <p>This website template has been designed by Free Website Templates</p>
  </div>
    
@endsection

@section('cuerpo')
<div id="content">
    <div id="featured">
      <h2>Meet our Animals</h2>
      <ul>
        <li class="first"> <a href="#"><img src="{{asset('assets/images/penguin.jpg')}}" alt=""/></a> <a href="#">Duis laoreet</a> </li>
        <li> <a href="#"><img src="{{asset('assets/images/elephant.jpg')}}" alt=""/></a> <a href="#">Curabitur</a> </li>
        <li> <a href="#"><img src="{{asset('assets/images/owl.jpg')}}" alt=""/></a> <a href="#">Adipiscing</a> </li>
        <li> <a href="#"><img src="{{asset('assets/images/butterfly.jpg')}}" alt=""/></a> <a href="#">Sed Volutpat</a> </li>
        <li> <a href="#"><img src="{{asset('assets/images/turtle.jpg')}}" alt=""/></a> <a href="#">Nulla lobortis</a> </li>
        <li> <a href="#"><img src="{{asset('assets/images/snake.jpg')}}" alt=""/></a> <a href="#">Suspendisse</a> </li>
        <li> <a href="#"><img src="{{asset('assets/images/gorilla.jpg')}}" alt=""/></a> <a href="#">Tincidunt</a> </li>
        <li class="last"> <a href="#"><img src="{{asset('assets/images/button-view-gallery.jpg')}}" alt=""/></a> <a href="gallery.html">Gallery</a> </li>
      </ul>
    </div>
    <div class="section1">
      <h2>Events</h2>
      <ul id="article">
        <li class="first"> <a href="#"><span>Jul 17</span></a>
          <p>This website template has been designed by Free Website Templates for you, for free.</p>
        </li>
        <li> <a href="#"><span>Aug 23</span></a>
          <p>You can remove any link to our website from this website template, you're free to use this website template without linking back to us.</p>
        </li>
        <li> <a href="#"><span>Oct 01</span></a>
          <p>If you're having problems editing this website template, then don't hesitate to ask for help on the Forum.</p>
        </li>
      </ul>
    </div>
    <div class="section2">
      <h2>Blog : Curabitur sodales</h2>
      <p>This website template has been designed by freewebsitetemplates.com for you, for free.</p>
      <a href="#"><img src="{{asset('assets/images/dolphins.jpg')}}" alt=""/></a>
      <ul>
        <li>
          <p>This website template has been</p>
        </li>
        <li>
          <p>designed By Free Website Templates for you, for free.</p>
        </li>
        <li>
          <p>If you're having problems editing this website template,</p>
        </li>
        <li>
          <p>then don't hesitate to ask for help on the Forum.</p>
        </li>
        <li>
          <p>Duis a est eget nunc pretium laoreet</p>
        </li>
      </ul>
      <div id="section1">
        <ul>
          <li> <a href="#"><img src="{{asset('assets/images/gorilla-2.jpg')}}" alt=""/></a>
            <h4><a href="#">Malesuada fames turpis egestas</a></h4>
            <p>QUisque lobortis, sem condimentum lacinia</p>
          </li>
          <li> <a href="#"><img src="{{asset('assets/images/snake-2.jpg')}}" alt=""/></a>
            <h4><a href="#">Morbi eu lacus lorem, sed venenatis ligula</a></h4>
            <p>Fusce eratenim, lacinia eget pretium vitae</p>
          </li>
        </ul>
      </div>
      <div id="section2">
        <ul>
          <li> <a href="#"><img src="{{asset('assets/images/butterfly-2.jpg')}}" alt=""/></a>
            <h4><a href="#">This website template has been</a></h4>
            <p>designed by Free Website Templates for you, for free.</p>
          </li>
        </ul>
      </div>
    </div>
    <div class="section3">
      <h2>Connect</h2>
      <a href="#" id="email">Email Us</a> <a href="#" id="facebook">Facebook</a> <a href="#" id="twitter">Twitter</a>
      <form action="#">
        <h3>Subscribe to our</h3>
        <h2>NEWSLETTER</h2>
        <input type="text" value="your email here..." onBlur="this.value=!this.value?'your email here...':this.value;" onFocus="this.select()" onClick="this.value='';" />
      </form>
      <img src="images/penguin2.jpg" alt=""/> </div>
  </div>
    
@endsection
