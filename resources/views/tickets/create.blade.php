@extends('layouts.app')

@section('title', 'Open Ticket')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"> <p style="font-size:30px;text-align:center;"> Open New Ticket </p> </div>

                <div class="panel-body">
                    @include('includes.flash')

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/new_ticket') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-4 control-label">Title</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}">

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('caller') ? ' has-error' : '' }}">
                            <label for="caller" class="col-md-4 control-label">Caller</label>

                            <div class="col-md-6">
                                <input id="caller" type="text" class="form-control" name="caller" value="{{ old('caller') }}">

                                @if ($errors->has('caller'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('caller') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('operator') ? ' has-error' : '' }}">
                            <label for="operator" class="col-md-4 control-label">Operator</label>

                            <div class="col-md-6">
                                <input id="operator" type="text" class="form-control" name="operator" value="{{ old('operator') }}">

                                @if ($errors->has('operator'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('operator') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
                            <label for="category" class="col-md-4 control-label">Category</label>

                            <div class="col-md-6">
                                <select id="category" type="category" class="form-control" name="category">
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('category'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('category') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('OS') ? ' has-error' : '' }}">
                            <label for="OS" class="col-md-4 control-label">OS</label>

                            <div class="col-md-6">
                                <select id="OS" type="" class="form-control" name="OS">
                                    <option value="">Select OS</option>
                                    <option value="Microsoft Windows">Microsoft Windows</option>
                                    <option value="macOS">macOS</option>
                                    <option value="Netware">Netware</option>
                                    <option value="Linux">Linux</option>
                                    <option value="BSD">BSD</option>
                                </select>

                                @if ($errors->has('OS'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('OS') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('version') ? ' has-error' : '' }}">
                            <label for="version" class="col-md-4 control-label">Version</label>

                            <div class="col-md-6">
                                <input id="version" type="text" class="form-control" name="version" value="{{ old('version') }}">

                                @if ($errors->has('version'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('version') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('serial_number') ? ' has-error' : '' }}">
                            <label for="serial_number" class="col-md-4 control-label">Serial Number</label>

                            <div class="col-md-6">
                                <input id="serial_number" type="text" class="form-control" name="serial_number" value="{{ old('serial_number') }}">

                                @if ($errors->has('serial_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('serial_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('priority') ? ' has-error' : '' }}">
                            <label for="priority" class="col-md-4 control-label">Priority</label>

                            <div class="col-md-6">
                                <select id="priority" type="" class="form-control" name="priority">
                                    <option value="">Select Priority</option>
                                    <option value="Low">Low</option>
                                    <option value="Medium">Medium</option>
                                    <option value="High">High</option>
                                </select>

                                @if ($errors->has('priority'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('priority') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
                            <label for="message" class="col-md-4 control-label">Notes</label>

                            <div class="col-md-6">
                                <textarea rows="10" id="message" class="form-control" name="message"></textarea>

                                @if ($errors->has('message'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-ticket"></i> Open Ticket
                                </button>
                                <button type="reset" class="btn btn-primary">
                                    </i> Clear Data
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
@endsection