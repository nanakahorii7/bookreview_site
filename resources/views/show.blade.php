@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/show.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    <h1 class='pagetitle'>レビュー詳細ページ</h1>
    <div class="card">
        <div class="card-body d-flex">
            <section class='review-main'>
                <h2 class='h2'>本のタイトル</h2>
                    <p class='h2 mb-2'>{{ $review->title }}</p>
                <h2 class="h2">レビュー本文</h2>
            </section>
            <aside class="review-image">
                @if(!empty($review->image))
                    <img class='book-image' src="{{ asset('storage/images/'.$review->image) }}">
                @else
                    <img class='book-image' src="{{ asset('images/dummy.png') }}">
                @endif

            </aside>
        </div>
        <a href="{{ route('index') }}" class="btn btn-info btn-back mb-2">一覧へ戻る</a>
    </div>
</div>
@endsection


