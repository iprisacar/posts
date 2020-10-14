@extends('layouts.app')

@section('title', 'Пости')

@section('body')
    <div class="container">
        @include('includes.header')
        <form class="card p-3" action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Введіть, будь ласка, назву поста</label>
                <input type="text" name="name" class="form-control" placeholder="Введіть, будь ласка, назву поста" required>
            </div>
            <div class="form-group">
                <label>Введіть, будь ласка, опис поста</label>
                <textarea name="description" class="form-control" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label>Виберіть зображення поста</label>
                <input type="file" name="image" class="form-control-file">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Зберегти"/>
            </div>
        </form>
    </div>
@endsection