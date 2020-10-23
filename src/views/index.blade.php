@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="container">

        @include('approvals::layouts.alerts')

        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="home-tab" href="{{route('approvals')}}" role="tab" aria-controls="home" aria-selected="true">List</a>
            </li>
            
            
            
          </ul>

            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><h3>{{ __('Approvals') }}</h3></div>
        
                        <div class="card-body">
                            

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    
    
        
@endsection

@push('scripts')
   
@endpush