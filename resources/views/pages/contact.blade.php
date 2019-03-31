
@extends('layouts.default')

@section('content')

    <!-- Main jumbotron for a primary marketing message or call to action -->

    <div class = "card mt-3 pl-2 pr-2">
        <div class = "card-title">

            <h1>Contact</h1>
            <p class="lead">Please use page to contact site owner.</p>
        </div>

        <div class="card-body">
            <form action="/contact" method="post" action="{{route('contact.store')}}">
                {{ csrf_field() }}

                <div class="row">
                    <div class ="col-md-6">
                        <div class ="form-group">
                    <input type="text" class="form-control" name="name" autocomplete="off" id="Name" placeholder="Name">
                </div>
                    </div>
                    <div class ="col-md-6">
                        <div class ="form-group">
                            <input type="text" class="form-control" name="email" autocomplete="off" id="Email" placeholder="Email">
                        </div>
                    </div>
                </div>



                <div class="form-group">
                    <label for="body">Message</label>
                    <textarea name="body" class="form-control" id="body" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mb-2">Submit</button>

            </form>
        </div>
    </div>
@endsection