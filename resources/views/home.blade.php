@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif



                    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin-left: 500px;">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

                    <form method="POST" action="{{ route('subjects') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="sub1" class="col-md-4 col-form-label text-md-right">{{ __('Mathematics') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('sub1') ? ' is-invalid' : '' }}" name="sub1" value="{{ old('sub1') }}" required autofocus>

                                @if ($errors->has('sub1'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('sub1') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="sub2" class="col-md-4 col-form-label text-md-right">{{ __('English') }}</label>

                            <div class="col-md-6">
                                <input id="sub2" type="text" class="form-control{{ $errors->has('sub2') ? ' is-invalid' : '' }}" name="sub2" value="{{ old('sub2') }}" required>

                                @if ($errors->has('sub2'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('sub2') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="sub3" class="col-md-4 col-form-label text-md-right">{{ __('Kiswahili') }}</label>

                            <div class="col-md-6">
                                <input id="sub3" type="text" class="form-control{{ $errors->has('sub3') ? ' is-invalid' : '' }}" name="sub3" required>

                                @if ($errors->has('sub3'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('sub3') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="sub4" class="col-md-4 col-form-label text-md-right">{{ __('Physics') }}</label>

                            <div class="col-md-6">
                                <input id="sub4" type="text" class="form-control{{ $errors->has('sub4') ? ' is-invalid' : '' }}" name="sub4" required>

                                @if ($errors->has('sub4'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('sub4') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="sub5" class="col-md-4 col-form-label text-md-right">{{ __('Geography') }}</label>

                            <div class="col-md-6">
                                <input id="sub5" type="text" class="form-control{{ $errors->has('sub5') ? ' is-invalid' : '' }}" name="sub5" required>

                                @if ($errors->has('sub5'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('sub5') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="sub6" class="col-md-4 col-form-label text-md-right">{{ __('Chemistry') }}</label>

                            <div class="col-md-6">
                                <input id="sub6" type="text" class="form-control{{ $errors->has('sub6') ? ' is-invalid' : '' }}" name="sub6" required>

                                @if ($errors->has('sub6'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('sub6') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="sub7" class="col-md-4 col-form-label text-md-right">{{ __('Biology') }}</label>

                            <div class="col-md-6">
                                <input id="sub7" type="text" class="form-control" name="sub7" required>
                                 @if ($errors->has('sub7'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('sub7') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add Subjects') }}
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
