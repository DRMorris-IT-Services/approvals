@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="container">

        @include('approvals::layouts.alerts')
        @foreach($approvals as $ap)

        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link" id="home-tab" href="{{route('approvals')}}" role="tab" aria-controls="home" aria-selected="true">List</a>
            </li>
            
            <li class="nav-item">
             <a class="nav-link active" id="profile-tab" href="{{route('approvals.edit',['id' => $ap->approval_id])}}" role="tab" aria-controls="profile" aria-selected="false">Edit</a>
            </li>

            <li class="nav-item">
             <a class="nav-link bg-danger text-white" id="profile-tab" href="#" role="tab" aria-controls="profile" aria-selected="false">DELETE</a>
            </li>
            
            
          </ul>



            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><h3>Update Approval - {{$ap->approval_name}}</h3></div>
        
                        <div class="card-body">
                            <form class="col-md-12" action="{{ route('approvals.update',['id' => $ap->approval_id]) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT') 


                                    <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Approval Flow Name</label>
                                                        <input type="text" name="approval_name" class="form-control" placeholder="Approval Flow Name"  required value="{{$ap->approval_name}}" onchange="submit()">
                                                        </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Status</label>
                                                        <select name="approval_status" class="form-control" onchange="submit()">
                                                        <option>{{$ap->approval_status}}</option>
                                                        <option>----////----</option>
                                                        <option>Approved</option>
                                                        <option>NOT IN USE</option>
                                                        
                                                        </select>
                                                        </div>
                                                </div>
                                    </div>

                                         <div class="row">
                                                <div class="col-md-6">
                                                    <h5>Approver 1</h5>
                                                    <hr>
                                                    <div class="form-group">
                                                    <label>Name:</label>
                                                    <input type="text" name="approver1_name" class="form-control" placeholder="Approver 1 Name" value="{{$ap->approver1_name}}" onchange="submit()">
                                                    </div>

                                                    <div class="form-group">
                                                    <label>Email:</label>
                                                    <input type="text" name="approver1_email" class="form-control" placeholder="Approver 1 Email" value="{{$ap->approver1_email}}" onchange="submit()">
                                                    </div>

                                                </div>

                                                <div class="col-md-6">
                                                    <h5>Approver 2</h5>
                                                    <hr>
                                                    <div class="form-group">
                                                    <label>Name:</label>
                                                    <input type="text" name="approver2_name" class="form-control" placeholder="Approver 2 Name" value="{{$ap->approver2_name}}" onchange="submit()">
                                                    </div>

                                                    <div class="form-group">
                                                    <label>Email:</label>
                                                    <input type="text" name="approver2_email" class="form-control" placeholder="Approver 2 Email" value="{{$ap->approver2_email}}" onchange="submit()">
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h5>Approver 3</h5>
                                                    <hr>
                                                    <div class="form-group">
                                                    <label>Name:</label>
                                                    <input type="text" name="approver3_name" class="form-control" placeholder="Approver 3 Name" value="{{$ap->approver3_name}}" onchange="submit()">
                                                    </div>

                                                    <div class="form-group">
                                                    <label>Email:</label>
                                                    <input type="text" name="approver3_email" class="form-control" placeholder="Approver 3 Email" value="{{$ap->approver3_email}}" onchange="submit()">
                                                    </div>

                                                </div>

                                                <div class="col-md-6">
                                                    <h5>Approver 4</h5>
                                                    <hr>
                                                    <div class="form-group">
                                                    <label>Name:</label>
                                                    <input type="text" name="approver4_name" class="form-control" placeholder="Approver 4 Name" value="{{$ap->approver4_name}}" onchange="submit()">
                                                    </div>

                                                    <div class="form-group">
                                                    <label>Email:</label>
                                                    <input type="text" name="approver4_email" class="form-control" placeholder="Approver 4 Email" value="{{$ap->approver4_email}}" onchange="submit()">
                                                    </div>

                                                </div>
                                            </div>

                                     </form>      
                                

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