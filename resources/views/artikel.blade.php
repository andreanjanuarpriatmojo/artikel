@extends('layouts.master')

@section('title')

Coba coba

@endsection

@section('content')

<nav class="navbar navbar-expand-xl bg-success navbar-dark">
    <a class="navbar-brand" href="#">Artikel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#"></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"></a>
            </li>
        </ul>
    </div>   
</nav>
<br>

<div class="container-fluid">
  <h1>ini artikel</h1>
  <p>This part is inside a .container-fluid class.</p>
  <p>kwkwkwkwkwk</p>           
</div>

@endsection