@props(['anime'])

<div class="card">
    <a href="/anime/{{$anime->id}}">
        <div class="card-image">
            <img src="{{asset('images/no-image.jpg')}}" alt="">
        </div>
        <div class="card-title">
            <p>{{$anime->title}}</p>
        </div>
    </a>
</div>