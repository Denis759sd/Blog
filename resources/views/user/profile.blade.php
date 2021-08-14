@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    <div class="container">
        <h1>Profile</h1>
        <hr>

        <main class="container align-items-center" style="width: 50rem;">
            <div class="bg-light p-5">
                <div>
                    <h2 align="center">Name</h2>
                    <h5 align="center">{{$user->name}}</h5>
                </div>

                <div>
                    <h2 align="center">Email</h2>
                    <h5 align="center">{{$user->email}}</h5>
                </div>
            </div>
        </main>
    </div>
@endsection
