@extends('layouts.app')

@section('content')
<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Dashboard Admin </div>
      <div class="list-group list-group-flush">
        <a href="{{ url('/experiences') }}" class="list-group-item list-group-item-action bg-light">Experiences</a>
        <a href="{{ url('/educations') }}" class="list-group-item list-group-item-action bg-light active">Educations</a>
        <a href="{{ url('/portofolios') }}" class="list-group-item list-group-item-action bg-light">Portofolios</a>
        <a href="{{ url('/getintouchs') }}" class="list-group-item list-group-item-action bg-light">Get In Touch</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="tombol-toggle">Hide Menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid">
        <div class="row mt-5 mb-5">
            <div class="col-lg-12 margin-tb">
                <div class="float-left">
                    <h2>Create New Education</h2>
                </div>
                <div class="float-right">
                    <a class="btn btn-secondary" href="{{ route('educations.index') }}"> Back</a>
                </div>
            </div>
        </div>
         
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
         
        <form action="{{ route('educations.store') }}" method="POST">
            @csrf
         
             <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Title:</strong>
                        <input type="text" name="title" class="form-control" placeholder="Title">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Description:</strong>
                        <textarea class="form-control" style="height:150px" name="description" placeholder="Description"></textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Since:</strong>
                        <input type="text" name="since" class="form-control" placeholder="Since">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->
@endsection

<!-- cursor -->
<style type="text/css">
    body{cursor: url("http://2.bp.blogspot.com/-NH2UONdsijY/UTl0CNeBM-I/AAAAAAAACj0/n2RgI7lUAG4/s1600/kursor+besi+jonarendra.blog.png"), auto;}
    </style>