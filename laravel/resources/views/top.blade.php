@extends('layouts.layout')

@section('content')
<div class="loginPage">
  <div class="container">
    <div class="loginPage_contents">
      <hi class="h3 loginPage_contents_title">新しい出会いを見つけよう</hi>
      <div class="btn loginPage_contents_btn"><a class="text-white" href="{{ route('login') }}">メールアドレスでログインする</a></div>
    </div>
  </div>
</div>
@endsection