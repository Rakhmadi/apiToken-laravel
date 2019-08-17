@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <div class="alert no_border shadow-sm alert-success alert-dismissible fade show" role="alert">
  @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                     You are logged !
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

       @if ($e!='100')
                <div class="alert no_border shadow-sm alert-danger alert-dismissible fade show" role="alert">
  <i class="fas fa-exclamation-triangle"></i>&nbsp;&nbsp;<strong>{{Auth::user()->name}} !</strong> Silahkan Lengkapi Profil <a href='/profile' class='alert-link'>Disini</a>
  
</div>
       
            @endif


        
         
            <div class="card no_border shadow-sm">
          
            
                <div class="card-header no_border "></div>

                <div class="card-body">         
                 <h4>Status : {{Auth::user()->log}}</h4> 
                
                </div>
            </div>
            
            </div>
        </div>
    </div>
</div>
@endsection
