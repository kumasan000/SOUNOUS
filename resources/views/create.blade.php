@extends('layouts.layout')
@section('title', 'timeline')
@section('content')

<div class="container mt-4">
    <div class="border p-4">
        <h1 class="h4 mb-4 font-weight-bold">
            投稿の新規作成
        </h1>
 
        <form method="POST" action="{{ route('list.store') }}">
            @csrf
 
            <fieldset class="mb-4">
 
                <div class="form-group">
                    <label for="subject">
                        名前
                    </label>
                    <input
                        id="name"
                        name="name"
                        class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                        value="{{ old('name') }}"
                        type="text"
                    >
                    @if ($errors->has('name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('name') }}
                        </div>
                    @endif
                </div>
 
                <div class="form-group">
                    <label for="subject">
                        カテゴリー
                    </label>
                    <input
                        id="category_id"
                        name="category_id"
                        class="form-control {{ $errors->has('category_id') ? 'is-invalid' : '' }}"
                        value="{{ old('category_id') }}"
                        type="text"
                    >
                    @if ($errors->has('category_id'))
                        <div class="invalid-feedback">
                            {{ $errors->first('category_id') }}
                        </div>
                    @endif
                </div>
 
                <div class="form-group">
                    <label for="subject">
                        件名
                    </label>
                    <input
                        id="subject"
                        name="subject"
                        class="form-control {{ $errors->has('subject') ? 'is-invalid' : '' }}"
                        value="{{ old('subject') }}"
                        type="text"
                    >
                    @if ($errors->has('subject'))
                        <div class="invalid-feedback">
                            {{ $errors->first('subject') }}
                        </div>
                    @endif
                </div>
 
                <div class="form-group">
                    <label for="message">
                        メッセージ
                    </label>
 
                    <textarea
                        id="message"
                        name="message"
                        class="form-control {{ $errors->has('message') ? 'is-invalid' : '' }}"
                        rows="4"
                    >{{ old('message') }}</textarea>
                    @if ($errors->has('message'))
                        <div class="invalid-feedback">
                            {{ $errors->first('message') }}
                        </div>
                    @endif
                </div>
 
                <div class="mt-5">
                    <a class="btn btn-secondary" href="{{ route('list.create') }}">
                        キャンセル
                    </a>
 
                    <button type="submit" class="btn btn-primary">
                        投稿する
                    </button>
                </div>
            </fieldset>
        </form>
    </div>
</div>
@endsection