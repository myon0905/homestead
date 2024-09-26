<x-layout>
    <a href="{{ route('index.posts')}}" class='re'>戻る</a>
    <h1>検索</h1>
    <form action="" method="get">
        @csrf

        <label>
            Title
            <input type="text" name="keyword" value="{{ request('keyword') }}">
        </label>
        <div class="btn"><button>検索</button></div>
    </form>
    <h1>検索結果</h1>
    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{ route('text.posts' , $post->id)}}">{{ $post->title }}</a>
            </li>
        @endforeach
    </ul>
</x-layout>


