@extends('layouts.app')

<!-- Main Content -->
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>
                <div class="panel-body">
                   {!! Form::open(['url'=>'/password/email','class'=>'form-horizontal']) !!}

                   <div class="form-group{{ $errors->has('email')? ' has-error': ''}}">
                       {!! Form::label('email','alamat email',['class'=>'col-md-4 control-label']) !!}
                       <div class="col-md-6">
                           {!! Form::email('email', null, ['class'=>'form-control']) !!}
                           {!! $errors->first('email','<p class="help-block"></p>') !!}
                       </div>
                   </div>

                   <div class="form-group">
                       <div class="col-md-6 col-md-offset-4">
                           <button type="submit" class="btn btn-primary">
                               <i class="fa fa-btn fa-envelope"></i>kirim link reset password
                           </button>
                       </div>
                   </div>
                   {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
