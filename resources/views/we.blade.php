
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <div class="alert alert-warning" role="alert"> 
        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                     You are logged   lengkapi profilmu <a href="/profile" class="alert-link">Disini</a> 
</div>  
            <div class="card no_border shadow-sm">
                <div class="card-header no_border ">Dashboard{{$e}}</div>

                <div class="card-body">         
               
                </div>
            </div>
            
            </div>
        </div>
    </div>
</div>
