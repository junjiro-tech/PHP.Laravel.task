{{-- news/profile.blade.phpを読み込む --}}
@extends('layouts.admin')

{{-- prodile.blade.phpの@yield('title')に'プロフィールの新規作成'を埋め込む -- }}
@section('title', 'プロフィールの新規作成')

{{-- profile.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
      <div class="container">
          <div class="row">
              <div class="col-md-8 mx-auto">
                  <h2>Myプロフィール</h2>
                  <from action="{{ action('Admin\ProfileController@create') }}" method="post" enctype="multipart/from-data">
                  @if (count($errors) > 0)
                        <ul>
                              @foreach($errors->all() as $e)
                              <li>{{ $e }}</li>
                              @endforeach
                        </ul>
                        @endif
                        <div class="form-group row">
                              <label class="col-md-2" for="title">氏名(name)</label>
                              <div class="col-md-10">
                                    <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                              </div>
                        </div>
                        <div class="form-group row">
                              <label class="col-md-2" for="title">性別(gender)</label>
                              <div class="col-md-10">
                                    <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                              </div>
                        </div>
                        <div class="form-group row">
                              <label class="col-md-2" for="title">趣味(hobby)</label>
                              <div class="col-md-10">
                                    <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                              </div>
                        </div>
                        <div class="form-group row">
                              <label class="col-md-2" for="body">自己紹介欄(introduction)</label>
                              <div class="col-md-10">
                                    <textarea class="form-control" name="body" rouws="20">{{ old('body')}}</textarea>
                              </div>
                        </div>
              </div>
          </div>
      </div>
@endsection