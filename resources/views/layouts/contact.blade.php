@extends('layouts.index')

@section('content')
    <h1 class="h1 col-md-auto">This is Contact Page</h1>

    <form action="#" method="post" class="container">
        @csrf
        <div class="container">
            <div class="form-group">
                <label for="name">User Name</label>
                <input type="text" name="name" id="name" placeholder="Username" class="form-control">
            </div>
            <div class="form-group">
                <label for="Email">Email</label>
                <input type="email" name="email" id="email" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea type="text" name="message" id="message" placeholder="Message" class="form-control"></textarea>
            </div>
            <button  class="btn btn-success" >Submit </button>
        </div>
    </form>

@endsection
