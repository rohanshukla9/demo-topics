@extends('layouts.app')

@section('content')

  <form action="{{ route('uploads.store') }}" method="post" enctype="multipart/form-data">

    @csrf

    <input type="file" name="file" id="file">

    <button type="submit">UUpload </button>
  </form>



@endsection
