@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="container">

        @include('approvals::layouts.alerts')

        @foreach($approvals as $ap)

        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="home-tab" href="{{route('approvals')}}" role="tab" aria-controls="home" aria-selected="true">List</a>
            </li>
            
            <li class="nav-item">
             <a class="nav-link" id="profile-tab" href="{{route('approvals.edit',['id' => $ap->approval_id])}}" role="tab" aria-controls="profile" aria-selected="false">Edit</a>
            </li>
            
            
          </ul>



            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><h3>Approval - {{$ap->approval_name}}</h3></div>
        
                        <div class="card-body">
                                         <div class="row">
                                                <div class="col-md-6">
                                                    <h5>Approver 1</h5>
                                                    <hr>
                                                    <div class="form-group">
                                                    <label>Name:</label>
                                                    {{$ap->approver1_name}}
                                                    </div>

                                                    <div class="form-group">
                                                    <label>Email:</label>
                                                    {{$ap->approver1_email}}
                                                    </div>

                                                </div>

                                                <div class="col-md-6">
                                                    <h5>Approver 2</h5>
                                                    <hr>
                                                    <div class="form-group">
                                                    <label>Name:</label>
                                                    {{$ap->approver2_name}}
                                                    </div>

                                                    <div class="form-group">
                                                    <label>Email:</label>
                                                    {{$ap->approver2_email}}
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h5>Approver 3</h5>
                                                    <hr>
                                                    <div class="form-group">
                                                    <label>Name:</label>
                                                    {{$ap->approver3_name}}
                                                    </div>

                                                    <div class="form-group">
                                                    <label>Email:</label>
                                                    {{$ap->approver3_email}}
                                                    </div>

                                                </div>

                                                <div class="col-md-6">
                                                    <h5>Approver 4</h5>
                                                    <hr>
                                                    <div class="form-group">
                                                    <label>Name:</label>
                                                    {{$ap->approver4_name}}
                                                    </div>

                                                    <div class="form-group">
                                                    <label>Email:</label>
                                                    {{$ap->approver4_email}}
                                                    </div>

                                                </div>
                                            </div>

                                           
                                

                        </div>
      @endforeach                      

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    
    
        
@endsection

@push('scripts')
   
@endpush