@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">账号激活</div>

                <div class="panel-body">
                    点击链接激活账号: <a href="{{ $link = url('activation/reset', $token).'?email='.urlencode($user->getEmailForPasswordReset()) }}"> {{ $link }} </a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
