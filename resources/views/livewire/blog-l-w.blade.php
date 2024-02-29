<div>
@foreach($posts as $post)
    {{$post->title}}<br>
    {{$post->content}}<br>
    {{$post->created_at}}<br>
    {{$post->author}}<br>
    <img src="{{$post->image}}" alt=""><br>
@endforeach
</div>
