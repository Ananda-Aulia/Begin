<section id="thumbnails">
    @if (Request::input('note')>=1 && Request::input('note')<=8)
        @for ($i = 1; $i <= Request::input('note'); $i++)
            <article>
                <a class="thumbnail" href="click-master/images/fulls/0{{$i}}.jpg" data-position="left center"><img src="click-master/images/thumbs/0{{$i}}.jpg" alt="" /></a>
                <h2>Masih , Mencoba , Sukses</h2>
                <p>Mencoba berada dalam jalur</p>
            </article>
        @endfor
    @else
    <a class="thumbnail" data-position="center"><h1>Masukan Min = 1 dan Max = 8</h1></a>
    @endif
    <!--
    <article>
        <a class="thumbnail" href="click-master/images/fulls/01.jpg"><img src="click-master/images/thumbs/01.jpg" alt="" /></a>
        <h2>Ladybug Insect Nature</h2>
        <p>Sed velit lacus, laoreet at venenatis convallis in lorem tincidunt.</p>
    </article>
    <article>
        <a class="thumbnail" href="click-master/images/fulls/03.jpg" data-position="top center"><img src="click-master/images/thumbs/03.jpg" alt="" /></a>
        <h2>Bokeh Close Up Nature</h2>
        <p>Maecenas eleifend tellus ut turpis eleifend, vitae pretium faucibus.</p>
    </article>
    <article>
        <a class="thumbnail" href="click-master/images/fulls/04.jpg"><img src="click-master/images/thumbs/04.jpg" alt="" /></a>
        <h2>Sloe Nature Crop Berry</h2>
        <p>Tristique in nulla vel congue. Sed sociis natoque parturient nascetur.</p>
    </article>
    <article>
        <a class="thumbnail" href="images/fulls/05.jpg" data-position="top center"><img src="click-master/images/thumbs/05.jpg" alt="" /></a>
        <h2>Kingfisher Bird Aviary Color Nature Animal Beak</h2>
        <p>In pellentesque cursus velit id posuere. Donec vehicula nulla.</p>
    </article>
    <article>
        <a class="thumbnail" href="images/fulls/06.jpg"><img src="click-master/images/thumbs/06.jpg" alt="" /></a>
        <h2>Stork Bird Animal Fly White Stork Rattle Stork</h2>
        <p>Nulla dignissim libero maximus tellus varius dictum ut posuere magna.</p>
    </article>
    <article>
        <a class="thumbnail" href="images/fulls/07.jpg"><img src="click-master/images/thumbs/07.jpg" alt="" /></a>
        <h2>Butterfly Nature Living Nature</h2>
        <p>Etiam ultricies, lorem quis efficitur porttitor, facilisis ante orci urna.</p>
    </article>
    <article>
        <a class="thumbnail" href="images/fulls/08.jpg"><img src="click-master/images/thumbs/08.jpg" alt="" /></a>
        <h2>Ladybug Insect Nature Meadow</h2>
        <p>Nunc egestas congue lorem. Nullam dictum placerat ex sapien tortor mattis.</p>
    </article>
    <article>
        <a class="thumbnail" href="images/fulls/09.jpg"><img src="click-master/images/thumbs/09.jpg" alt="" /></a>
        <h2>Morbi eget vitae adipiscing</h2>
        <p>In quis vulputate dui. Maecenas metus elit, dictum praesent lacinia lacus.</p>
    </article>
    <article>
        <a class="thumbnail" href="images/fulls/10.jpg"><img src="click-master/images/thumbs/10.jpg" alt="" /></a>
        <h2>Kolos Grass Meadow Field Green Nature Plant</h2>
        <p>Vestibulum ante ipsum primis in faucibus orci luctus ac tincidunt dolor.</p>
    </article>
    <article>
        <a class="thumbnail" href="images/fulls/04.jpg"><img src="click-master/images/thumbs/04.jpg" alt="" /></a>
        <h2>Pharetra ex non faucibus</h2>
        <p>Ut sed magna euismod leo laoreet congue. Fusce congue enim ultricies.</p>
    </article>
    <article>
        <a class="thumbnail" href="images/fulls/12.jpg"><img src="click-master/images/thumbs/12.jpg" alt="" /></a>
        <h2>Flower Floral Blossom Nature Spring Summer Bloom</h2>
        <p>Feugiat auctor leo massa, nec vestibulum nisl erat faucibus, rutrum nulla.</p>
    </article> -->
</section>
