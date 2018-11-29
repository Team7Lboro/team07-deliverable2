@extends('layouts.app')

@section('title', 'My Tickets')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-5">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-heading" > <p style="font-size:30px;text-align:center;"> My Tickets </p> </div>
                </div>
                
<div class="container">
	<div class="row">
		<div class="form-control form-control-sm ml-3 w-100">
            <div class="input-group" id="adv-search">
                <input type="text" class="form-control" placeholder="Search for a ticket..." />
                <div class="input-group-btn">
                    <div class="btn-group" role="group">
                        <div class="dropdown dropdown-lg">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                <form class="form-horizontal" role="form">
                                  <div class="form-group">
                                    <label for="filter">Search Criteria</label>
                                    <select class="form-control">
                                        <option value="0" selected>Problem ID</option>
                                        <option value="1">Category</option>
                                    </select>
                                  </div>
                                </form>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary">Search<span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                    </div>
                </div>
            </div>
          </div>
        </div>
	</div>
</div>

<br>
                <div class="panel-body">
                    @if ($tickets->isEmpty())
                        <p>You have not created any tickets.</p>
                    @else
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Problem ID</th>
                                    <th>Category</th>                                    
                                    <th>Status</th>
                                    <th>Priority</th>
                                    <th>Last Updated</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($tickets as $ticket)
                                <tr>
                                    <td>
                                        <a href="{{ url('tickets/'. $ticket->ticket_id) }}">
                                            #{{ $ticket->ticket_id }} - {{ $ticket->title }}
                                        </a>
                                    </td>
                                    <td>
                                    @foreach ($categories as $category)
                                        @if ($category->id === $ticket->category_id)
                                            {{ $category->name }}
                                        @endif
                                    @endforeach
                                    </td>                                
                                    <td>
                                    @if ($ticket->status === 'Open')
                                        <span class="label label-success">{{ $ticket->status }}</span>
                                    @else
                                        <span class="label label-danger">{{ $ticket->status }}</span>
                                    @endif
                                    </td>
                                    <td>
                                        {{ $ticket->priority }}
                                    </td>
                                    <td>{{ $ticket->updated_at }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        {{ $tickets->render() }}
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection