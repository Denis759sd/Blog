@extends('layouts.app')

@section('title', 'New post')

@section('content')
    <div class="container">
        <form class="needs-validation" method="post">
            {{csrf_field()}}
            <div class="row g-3">
                <div class="col-12">
                    <label for="title" class="form-label">Title</label>
                    <div class="input-group has-validation">
                        <input type="text" class="form-control" id="title" name="title" placeholder="Title" required="" style="height: 5rem;">
                        <div class="invalid-feedback">
                            Your title is required.
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <label for="description" class="form-label">Description</label>
                    <div class="input-group has-validation">
                        <input type="text" class="form-control" id="description" name="description" placeholder="Description" required="" style="height: 8rem;">
                        <div class="invalid-feedback">
                            Your description is required.
                        </div>
                    </div>
                </div>
            </div>

            <hr class="my-4">

            <button class="w-100 btn btn-primary btn-lg" type="submit" name="submit">Create</button>
        </form>
    </div>
@endsection
