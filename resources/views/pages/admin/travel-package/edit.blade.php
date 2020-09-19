@extends('layouts.admin')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Paket Travel {{ $item->title }}</h1>

    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('travel-package.update', $item->id)}}" method="POST">
                @method('PUT')
            @csrf
                <div class="form-group">
                    <label for="title">title</label>
                    <input class="form-control" type="text" name="title" placeholder="Title" value="{{ $item->title }}">
                </div>
                <div class="form-group">
                    <label for="location">Location</label>
                    <input class="form-control" type="text" name="location" placeholder="location" value="{{ $item->location }}">
                </div>
                <div class="form-group">
                    <label for="about">About</label>
                    <textarea rows="10" name="about" class="d-block w-100 form-control" placeholder="about">{{ $item->about }}</textarea>
                </div>
                <div class="form-group">
                    <label for="featured_event">Featured Event</label>
                    <input class="form-control" type="text" name="featured_event" placeholder="Featured Event" value="{{ $item->featured_event }}">
                </div>
                <div class="form-group">
                    <label for="language">Language</label>
                    <input class="form-control" type="text" name="language" placeholder="Language" value="{{ $item->language }}">
                </div>
                <div class="form-group">
                    <label for="foods">Foods</label>
                    <input class="form-control" type="text" name="foods" placeholder="Foods" value="{{ $item->foods }}">
                </div>
                <div class="form-group">
                    <label for="departure_date">Departure Date</label>
                    <input class="form-control" type="date" name="departure_date" placeholder="Departure Date" value="{{ $item->departure_date }}">
                </div>
                <div class="form-group">
                    <label for="duration">Duration</label>
                    <input class="form-control" type="text" name="duration" placeholder="Duration" value="{{ $item->duration }}">
                </div>
                <div class="form-group">
                    <label for="type">Type</label>
                    <input class="form-control" type="text" name="type" placeholder="Type" value="{{ $item->type }}">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input class="form-control" type="number" name="price" placeholder="Price" value="{{ $item->price }}">
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    Ubah
                </button>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

@endsection