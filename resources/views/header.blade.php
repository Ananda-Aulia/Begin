<header id="header">
<div class="logohead">
    <img src="click-master/images/logo.jpg" alt="" width="150">
</div>	
    <h1 class="text-center">Ananda Aulia</h1>
    <h2>@if( Request::input('note') == 1)
            <p class="text-center">Beginner Programmer</p>
        @elseif (Request::input('note') == 2)
            <p class="text-center">Middle Programmer</p>
        @elseif(Request::input('note')==3)
            <p class="text-center">Senior Programmer</p>
        @endif
    </h2>
    <ul class="icons text-center">
        <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
        <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
        <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
        <li><a href="#" class="icon fa-flickr"><span class="label">Flickr</span></a></li>
        <li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
    </ul>
</header>
