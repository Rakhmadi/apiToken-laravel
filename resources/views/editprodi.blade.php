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
                            <label for="prodi1" class="col-md-4 col-form-label text-md-right">{{ __('Prodi 1') }}</label>

                            <div class="col-md-6">
                               <select id="prodi1" class="form-control" name='prodi1'>
                                   <option selected></option>
                                    <option>TAV</option>
                                      <option>TKJ</option>
                                        <option>TITL</option>
                                          <option>TKR</option>
                                            <option>TP</option>
                                             

                              </select>

                                @error('prodi1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="prodi2" class="col-md-4 col-form-label text-md-right">{{ __('Prodi 2') }}</label>

                            <div class="col-md-6">
                               <select id="prodi2" class="form-control" name='prodi2'>
                                   <option selected></option>
                                   <option selected></option>
                                    <option>TAV</option>
                                      <option>TKJ</option>
                                        <option>TITL</option>
                                          <option>TKR</option>
                                            <option>TP</option>

                              </select>

                                @error('agama')
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
