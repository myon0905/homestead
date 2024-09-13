<x-layout>
    <h1>Hello Larabel</h1>
    <ul>
        @foreach ($posts as $key => $post)
            <li>
                <a href="{{ route('text.posts' , $key)}}">{{ $post }}</a>
            </li>
        @endforeach
    </ul>
</x-layout>
