@extends('layouts.app')

@section('title', $ticket->title)

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-5">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Problem ID: #{{ $ticket->ticket_id }} - {{ $ticket->title }}
                </div>

                <div class="panel-body">
                    @include('includes.flash')

                    <div class="ticket-info">
                        <p></p>
                        <p>Caller: {{$ticket->caller}}</p>
                        <p>Operator: {{$ticket->operator}}</p>
                        <p>Problem Description: {{ $ticket->message }}</p>
                        <p>Category: {{ $category->name }}</p>
                        <p>OS: {{$ticket->OS}}</p>
                        <p>
                            @if ($ticket->version !=null)
                            Version: {{$ticket->version}}
                            @endif
                        </p>

                        <p>
                            @if ($ticket->serial_number !=null)
                            Serial Number: {{$ticket->serial_number}}
                            @endif
                        </p>
                                              
                        <p>
                        @if ($ticket->status === 'Open')
                            Status: <span class="label label-success">{{ $ticket->status }}</span>
                        @else
                            Status: <span class="label label-danger">{{ $ticket->status }}</span>
                        @endif
                        </p>
                        <p>Created on:  {{ $ticket->created_at}}({{ $ticket->created_at->diffForHumans() }})</p>
                    </div>

                    <hr>
                    <p> Ticket Updates: </p>

                    <div class="comment-form">
                        <form action="{{ url('comment') }}" method="POST" class="form">
                            {!! csrf_field() !!}

                            <input type="hidden" name="ticket_id" value="{{ $ticket->id }}">

                            <div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }}">
                                    <div class="col-md-6">
                                <textarea rows="10" id="comment" class="form-control" name="comment"></textarea>

                                @if ($errors->has('comment'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('comment') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="button" class="btn btn-primary">Submit</button> <button type="button" class="btn btn-primary">Close Ticket</button> <button type="button" class="btn btn-primary">Modify Ticket</button> <button type="button" class="btn btn-primary">Assign Ticket</button>
                            </div>
                            
                        </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection