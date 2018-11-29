@extends('layouts.app')
@section('content')

<div class="row">
        <div class="col-md-10 col-md-offset-5">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-heading" > <p style="font-size:30px;text-align:center;"> Equipment </p> </div>
                </div>

                <div class="container">
                        <div class="row">
                            <div class="form-control form-control-sm ml-3 w-100">
                                <div class="input-group" id="adv-search">
                                    <input type="text" class="form-control" placeholder="Search for equipment..." />
                                    <div class="input-group-btn">
                                        <div class="btn-group" role="group">
                                            <div class="dropdown dropdown-lg">
                                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
                                                <div class="dropdown-menu dropdown-menu-right" role="menu">
                                                    <form class="form-horizontal" role="form">
                                                      <div class="form-group">
                                                        <label for="filter">Search Criteria</label>
                                                        <select class="form-control">
                                                            <option value="0" selected>Serial Number</option>
                                                            <option value="1">Type</option>
                                                            <option value="2">Name</option>
                                                            <option value="3">Make</option>
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

<div class="row">
   <div class="col-md-10 col-md-offset-5">
      <div class="panel panel-default">
         <div class="panel-body">
            <table class="table">
               <thead>
                  <tr>
                     <th>Serial Number</th>
                     <th>Type</th>
                     <th>Name</th>
                     <th>Make</th>
                     <th>Authorised</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td>4CE0460D0G</td>
                     <td>Hardware-Laptop</td>
                     <td>ENVY Notebook</td>
                     <td>HP</td>
                     <td>Yes</td>
                  </tr>
                  <tr>
                     <td>8472956283</td>
                     <td>Hardware-Printer</td>
                     <td>PIXMA MX395 All-In-One Colour</td>
                     <td>Canon</td>
                     <td>Yes</td>
                  </tr>
                  
                  <tr>
                        <td>None</td>
                        <td>Software</td>
                        <td>PowerPoint</td>
                        <td>Microsoft</td>
                        <td>Yes</td>
                     </tr>
                     <tr>
                        <td>None</td>
                        <td>Software</td>
                        <td>Office</td>
                        <td>Microsoft</td>
                        <td>Yes</td>
                     </tr>
               </tbody>
            </table>

            <hr>
            <p> Equipment Updates: </p>

            <div class="comment-form">
                <form action="{{ url('comment') }}" method="POST" class="form">
                    {!! csrf_field() !!}

               

                    <div class="form-group">
                        <button type="button" class="btn btn-primary">Add Equipment</button> <button type="button" class="btn btn-primary">Delete Equipment</button> <button type="button" class="btn btn-primary">Modify Equipment</button> 
                    </div>
                    
                </form>
        </div>
         </div>
      </div>
   </div>
</div>
@endsection