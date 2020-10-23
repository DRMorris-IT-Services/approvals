@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="container">

        @include('approvals::layouts.alerts')

        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="home-tab" href="{{route('approvals')}}" role="tab" aria-controls="home" aria-selected="true">List</a>
            </li>
            
            <li class="nav-item">
             <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">New Approval Flow</a>
            </li>
            
            
          </ul>
          

            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><h3>{{ __('Approvals') }}</h3></div>
        
                        <div class="card-body">

                        <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                            <th>Name</td>
                                            <th>Approver 1</th>
                                            <th>Approver 2</th>
                                            <th>Approver 3</th>
                                            <th>Approver 4</th>
                                            <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($approvals as $ap)
                                                <tr>
                                                <td>{{$ap->approval_name}}</td>
                                                <td>{{$ap->approver1_name}}</td>
                                                <td>{{$ap->approver2_name}}</td>
                                                <td>{{$ap->approver3_name}}</td>
                                                <td>{{$ap->approver4_name}}</td>
                                                <td>{{$ap->approval_status}}</td>
                                                </tr>
                                            @endforeach

                                        </tbody>

                                    </table>
                                
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <form class="col-md-12" action="{{ route('approvals.add') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT') 
                                        <h5>New Approval Flow</h5>
                                        <br>

                                        <div class="form-group">
                                        <label>Approval Flow Name</label>
                                        <input type="text" name="approval_name" class="form-control" placeholder="Approval Flow Name"  required>
                                        </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h5>Approver 1</h5>
                                                    <hr>
                                                    <div class="form-group">
                                                    <input type="text" name="approver1_name" class="form-control" placeholder="Approver 1 Name" >
                                                    </div>

                                                    <div class="form-group">
                                                    <input type="text" name="approver1_email" class="form-control" placeholder="Approver 1 Email" >
                                                    </div>

                                                </div>

                                                <div class="col-md-6">
                                                    <h5>Approver 2</h5>
                                                    <hr>
                                                    <div class="form-group">
                                                    <input type="text" name="approver2_name" class="form-control" placeholder="Approver 2 Name" >
                                                    </div>

                                                    <div class="form-group">
                                                    <input type="text" name="approver2_email" class="form-control" placeholder="Approver 2 Email" >
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h5>Approver 3</h5>
                                                    <hr>
                                                    <div class="form-group">
                                                    <input type="text" name="approver3_name" class="form-control" placeholder="Approver 3 Name" >
                                                    </div>

                                                    <div class="form-group">
                                                    <input type="text" name="approver3_email" class="form-control" placeholder="Approver 3 Email" >
                                                    </div>

                                                </div>

                                                <div class="col-md-6">
                                                    <h5>Approver 4</h5>
                                                    <hr>
                                                    <div class="form-group">
                                                    <input type="text" name="approver4_name" class="form-control" placeholder="Approver 4 Name" >
                                                    </div>

                                                    <div class="form-group">
                                                    <input type="text" name="approver4_email" class="form-control" placeholder="Approver 4 Email" >
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="row justify-content-end">
                                                <div class="col-md-12">
                                                    <div class="card-footer">
                                                    <button type="submit" class="btn btn-success">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                </form>
                                </div>

                        </div>
                            

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    
    
        
@endsection

@push('scripts')
   
@endpush