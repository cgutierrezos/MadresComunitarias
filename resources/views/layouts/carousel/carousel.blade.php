<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
	{{ $slot }}
	</div>
	<ol class="carousel-indicators">
        <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
        @for($i=1; $i<$items; $i++)
        	<li data-target="#carouselExampleControls" data-slide-to="{{ $i }}"></li>
        @endfor
    </ol>
    
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
    </a>
</div>