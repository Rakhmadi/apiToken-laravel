@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card no_border shadow-sm">
                <div class="card-header no_border">Profile</div>

                <div class="card-body no_border">
                    <table class="table">
                    
  
  <tbody>
    <tr>
      <th scope="row">name</th>
      <td>{{ Auth::user()->name }}</td>
      </tr>
      <tr>
      <th scope="row">Username</th>
      <td>{{ Auth::user()->username }}</td>
      </tr>
      <tr>
      <th scope="row">email</th>
      <td>{{ Auth::user()->email }}</td>
      </tr>
      <tr>
      <th scope="row">nisn</th>
      <td>{{ Auth::user()->nisn }}</td>
      </tr>
      <tr>
      <th scope="row">nik</th>
      <td>{{ Auth::user()->nik }}</td>
      </tr>
      <tr>
      <th scope="row">Tanggal Lahir</th>
      <td>{{ Auth::user()->tgl_lahir }}</td>  
      </tr> 
      <tr>
      <th scope="row">Alamat</th>
      <td>{{ Auth::user()->alamat }}</td>
      </tr>
      <tr>
      <th scope="row">Asal Sekolah</th>
      <td>{{ Auth::user()->asal_sek }}</td>
      </tr>
      <tr>
      <th scope="row">gender</th>
      <td>{{ Auth::user()->gender }}</td>  
      </tr> 
      <tr>
      <th scope="row">Agama</th>
      <td>{{ Auth::user()->agama }}</td>  
      </tr> 
      
  </tbody>
</table>
           
            @if ($e!='100')
            <a href='/profile.edit' class='btn  outnone 'style='color:white;background-color:hsl(165, 100%, 40%)'>Edit Profile</a>   
            @else      
            <a href='/profile.edit' class='btn  outnone 'style='color:white;background-color:hsl(165, 100%, 40%)'>Lengkapi Profile</a>
            @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
