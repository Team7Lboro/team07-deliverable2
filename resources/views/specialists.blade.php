@extends('layouts.app')
@section('content')

<div class="row">
        <div class="col-md-10 col-md-offset-5">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-heading" > <p style="font-size:30px;text-align:center;"> Specialists </p> </div>
                </div>

                <div class="container">
                        <div class="row">
                            <div class="form-control form-control-sm ml-3 w-100">
                                <div class="input-group" id="adv-search">
                                    <input type="text" class="form-control" placeholder="Search for a specialist..." />
                                    <div class="input-group-btn">
                                        <div class="btn-group" role="group">
                                            <div class="dropdown dropdown-lg">
                                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
                                                <div class="dropdown-menu dropdown-menu-right" role="menu">
                                                    <form class="form-horizontal" role="form">
                                                      <div class="form-group">
                                                        <label for="filter">Search Criteria</label>
                                                        <select class="form-control">
                                                            <option value="0" selected>Employee ID</option>
                                                            <option value="1">Name</option>
                                                            <option value="2">Department</option>
                                                            <option value="3">Specialty</option>
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
   <div class="col-md-12 col-md-offset-5">
      <div class="panel panel-default">
         <div class="panel-body">
            <table class="table">
               <thead>
                  <tr>
                     <th>Employee ID</th>
                     <th>Name</th>
                     <th>Job Title</th>
                     <th>Department</th>
                     <th>Telephone Number</th>
                     <th>Specialty</th>
                     <th>Requests</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td>857394030</td>
                     <td>Bert Davis</td>
                     <td>Second Level Technician</td>
                     <td>Software Engineering</td>
                     <td>02037658946</td>
                     <td>Operating Systems</td>
                     <td>2</td>
                  </tr>
                  <tr>
                     <td>956305320</td>
                     <td>Clara Bell</td>
                     <td>Computer Engineer</td>
                     <td>Hardware Engineering</td>
                     <td>02039857384</td>
                     <td>Printers</td>
                     <td>5</td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
@endsection
