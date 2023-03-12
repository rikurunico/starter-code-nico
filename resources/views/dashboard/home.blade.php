@extends('layouts.app')

@section('title', 'HomePage')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>HomePage</h1>
        </div>
        <div class="section-body">
            <h3>Ini Adalah Home Page</h3>
        </div>
    </section>
@endsection

@section('sidebar')
    @parent
    <li class="menu-header">Starter</li>
    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Layout</span></a>
      <ul class="dropdown-menu">
        <li><a class="nav-link" href="layout-default.html">Default Layout</a></li>
        <li><a class="nav-link" href="layout-transparent.html">Transparent Sidebar</a></li>
        <li><a class="nav-link" href="layout-top-navigation.html">Top Navigation</a></li>
      </ul>
    </li>
@endsection