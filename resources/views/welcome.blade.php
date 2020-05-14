<?php

use Carbon\Carbon;
?>
@extends('master')
@section('title', 'Halaman Utama Portal - Kabar Burung')
@section('body')
<h1>Portal - Kabar Burung</h1>
@foreach (App\berita::where('published','yes')->get() as $berita)
<br>
<a href="">{{ $berita->judul }}</a>
<br>
<hr>
{{ $berita->created_at->format('M d,Y') }}
<hr>
<br>
{{ $berita->isi }}
<br>
<br>
<hr>
@endforeach
@endsection