@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! <br><br>
                    Click here to create a<a href="new_ticket"> New Ticket.</a> <br>
                    Click here to view<a href="my_tickets"> My Tickets.</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
