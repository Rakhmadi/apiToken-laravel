@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card no_border shadow-sm">
                <div class="card-header no_border">{{ __('Edit Profile') }}</div>

                <div class="card-body">
                    <form id="only-number" method="POST" action="/savesprofl">
                        
                       @csrf
                        <div class="form-group row">
                            <label for="username" class="col-sm-4 col-form-label text-md-right">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input value='{{Auth::user()->username}}'id="username" type="name" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                      
                        <div class="form-group row">
                            <label for="name" class="col-sm-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input value='{{Auth::user()->name}}'id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input value='{{Auth::user()->email}}'id="email" type="name" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                         <div class="form-group row"id="only-number">
                            <label for="nik" class="col-sm-4 col-form-label text-md-right">{{ __('NIK') }}</label>

                            <div class="col-md-6">
                                <input value='{{Auth::user()->nik}}'id="nik" type="name" class="num form-control @error('nik') is-invalid @enderror" name="nik" value="{{ old('nik') }}" required autocomplete="nik" autofocus>

                                @error('nik')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <label for="nisn" class="col-sm-4 col-form-label text-md-right">{{ __('NISN') }}</label>

                            <div class="col-md-6">
                                <input value='{{Auth::user()->nisn}}'id="nisn" type="name" class=" num form-control @error('nisn') is-invalid @enderror" name="nisn" value="{{ old('nisn') }}" required autocomplete="nisn" autofocus>

                                @error('nisn')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>





                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                            <div class="col-md-6">
                               <select id="gender" class="form-control" name='gender'class="form-control @error('gender') is-invalid @enderror" name="gender" value="{{ old('gender') }}" required autocomplete="gender" autofocus>
                                   <option selected>Laki-laki</option>
                                    <option>Perempuan</option>
                              </select>

                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                          <div class="form-group row">
                            <label for="tempat_lahir" class="col-sm-4 col-form-label text-md-right">{{ __('Tempat lahir') }}</label>

                            <div class="col-md-6">
                                <input value='{{Auth::user()->tempat_lahir}}'id="tempat_lahir" type="name" class="form-control @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir" value="{{ old('tempat_lahir') }}" required autocomplete="tempat_lahir" autofocus>

                                @error('tempat_lahir')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                                      <div class="form-group row">
                            <label for="tgl_lahir" class="col-sm-4 col-form-label text-md-right">{{ __('Tanggal lahir') }}</label>
                            <div class="col-md-6">
                                <input value='{{Auth::user()->tgl_lahir}}' id="tgl_lahir" name='tgl_lahir'  placeholder="MM/DD/YYYY " type="text"  class=" form-control" >
                               
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="agama" class="col-md-4 col-form-label text-md-right">{{ __('Agama') }}</label>

                            <div class="col-md-6">
                               <select id="agama" class="form-control" name='agama'>
                                   <option selected>{{Auth::user()->agama}}</option>
                                    <option>Islam</option>
                                      <option>Kristen</option>
                                        <option>Khatolik</option>
                                          <option>Buddha</option>
                                            <option>Hindu</option>
                                              <option>Konghucu</option>

                              </select>

                                @error('agama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="alamat" class="col-sm-4 col-form-label text-md-right">{{ __('Alamat') }}</label>

                            <div class="col-md-6">
                                <input value='{{Auth::user()->alamat}}'id="alamat" type="name" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" required autocomplete="alamat" autofocus>

                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="asal_sek" class="col-sm-4 col-form-label text-md-right">{{ __('Asal Sekolah') }}</label>

                            <div class="col-md-6">
                                <input value='{{Auth::user()->asal_sek}}'id="asal_sek" type="name" class="form-control @error('asal_sek') is-invalid @enderror" name="asal_sek" value="{{ old('asal_sek') }}" required autocomplete="asal_sek" autofocus>

                                @error('asal_sek')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                          <div class="form-group row"id="only-number">
                            <label for="noTelp" class="col-sm-4 col-form-label text-md-right">{{ __('No Telp') }}</label>

                            <div class="col-md-6">
                                <input value='{{Auth::user()->noTelp}}'id="noTelp" type="tel" class="num form-control @error('noTelp') is-invalid @enderror" name="noTelp" value="{{ old('ninoTelpk') }}" required autocomplete="noTelp" autofocus>

                                @error('noTelp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="form-group row"id="only-number">
                            <label for="noorangtua" class="col-sm-4 col-form-label text-md-right">{{ __('No Telp Orang Tua') }}</label>

                            <div class="col-md-6">
                                <input value='{{Auth::user()->noorangtua}}'id="noorangtua" type="text"class="num form-control @error('noorangtua') is-invalid @enderror" name="noorangtua" value="{{ old('noorangtua') }}" required autocomplete="noorangtua" autofocus>

                                @error('noorangtua')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                       


                        
                        <div class="form-group row">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Sumbit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection
