<x-layout>
    <a href="{{ route('index.posts')}}" class='re'>戻る</a>
    <h1>検索</h1>
    <form action="{{ route('store.posts') }}" method="post">
        @csrf

        <label>
            Title
            <input type="text" name="title" value="{{ old('title') }}">
        </label>
        @error('title')
        <div class="error">{{ $message }}</div>
        @enderror
        <div class="btn"><button>検索</button></div>
    </form>
    <h1>検索結果</h1>
</x-layout>


