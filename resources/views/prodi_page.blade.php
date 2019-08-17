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
      <th scope="row">Prodi 1</th>
      <td>{{ Auth::user()->prodi2 }}</td>
      </tr>
      <tr>
      <th scope="row">Prodi 2</th>
      <td>{{ Auth::user()->prodi1 }}</td>
      </tr>
     
      
  </tbody>
</table>
            <a href='/PRoDi_^_edit' class='btn  outnone 'style='color:white;background-color:hsl(165, 100%, 40%)'>Edit prodi</a>   
           
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
