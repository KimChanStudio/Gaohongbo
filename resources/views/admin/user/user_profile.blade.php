

@extends('layouts.admin.app')

@section('title', '后台管理')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @unless($user->activated)
                <div class="panel panel-default">
                    <div class="panel-body">
                        <a class="btn btn-info btn-lg btn-block" href="{{url('admin/user/activate?id='.$user->id)}}" role="button">激活此用户</a>
                    </div>
                </div>
                @endunless
                <div class="panel panel-default">
                    <div class="panel-heading">登陆信息</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="GET" action="{{url('admin/user/username/edit')}}">
                            {!! csrf_field() !!}
                            <input type="hidden" class="form-control" name="id" value="{{ $user->id }}" hidden>
                            <div class="form-group">
                                <label class="col-md-4 control-label">邮箱</label>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email" value="{{ $user->email }}" disabled>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">用户名</label>
                                <div class="col-md-6">
                                    <input type="username" class="form-control" name="username" value="{{ $user->username }}" >
                                    @if ($errors->has('username'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-sign-in"></i>保存
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">基本信息</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="GET" action="{{url('admin/user/profile/edit')}}">
                            {!! csrf_field() !!}
                            <input type="hidden" class="form-control" name="id" value="{{ $user->id }}" hidden>
                            <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">姓</label>
                                <div class="col-md-6">
                                    <input type="last_name" class="form-control" name="last_name" value="{{ $user->last_name }}">
                                    @if ($errors->has('last_name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">名</label>
                                <div class="col-md-6">
                                    <input type="first_name" class="form-control" name="first_name" value="{{ $user->first_name }}" >
                                    @if ($errors->has('first_name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">所在地区</label>
                                <div class="col-md-6">
                                    <select class="form-control" id='region' name="region">
                                        <option />
                                        <option value={{Config::get("user.profile.region.DB")}} @if($user['region']==Config::get("user.profile.region.DB")) selected @endif/>东北
                                        <option value={{Config::get("user.profile.region.HB")}} @if($user['region']==Config::get("user.profile.region.HB")) selected @endif/>华北
                                        <option value={{Config::get("user.profile.region.HD")}} @if($user['region']==Config::get("user.profile.region.HD")) selected @endif/>华东
                                        <option value={{Config::get("user.profile.region.HZ")}} @if($user['region']==Config::get("user.profile.region.HZ")) selected @endif/>华中
                                        <option value={{Config::get("user.profile.region.HN")}} @if($user['region']==Config::get("user.profile.region.HN")) selected @endif/>华南
                                        <option value={{Config::get("user.profile.region.XN")}} @if($user['region']==Config::get("user.profile.region.XN")) selected @endif/>西南
                                        <option value={{Config::get("user.profile.region.XB")}} @if($user['region']==Config::get("user.profile.region.XB")) selected @endif/>西北
                                    </select>
                                    <span class="help-block" ><strong>东北地区:</strong>辽宁,吉林,黑龙江；<br/><strong>华北地区:</strong>河北,山西,内蒙古,北京,天津；<br/><strong>华东地区:</strong>山东,江苏,安徽,浙江,台湾,福建,江西,上海；<br/><strong>华中地区:</strong>河南,湖北,湖南；<br/><strong>华南地区:</strong>广东,广西,海南,香港,澳门；<br/><strong>西南地区:</strong>云南,贵州,四川,西藏;<br/><strong>西北地区:</strong>新疆,甘肃,陕西,青海,宁夏</span>
                                    @if ($errors->has('region'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('region') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            {{--<div class="form-group">--}}
                            {{--<label class="col-md-4 control-label">性别</label>--}}
                            {{--<div class="col-md-6">--}}
                            {{--<select id='gender' name="gender">--}}
                            {{--<option/>--}}
                            {{--<option value="1" @if($user['gender']==Config::get("tieba.user.gender.male")) selected @endif/>--}}
                            {{--男--}}
                            {{--<option value="2" @if($user['gender']==Config::get("tieba.user.gender.female")) selected @endif/>--}}
                            {{--女--}}

                            {{--</select>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            <div class="form-group{{ $errors->has('cellphone') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">手机号</label>
                                <div class="col-md-6">
                                    <input type="cellphone" class="form-control" name="cellphone" value="{{ $user->cellphone }}" >
                                    @if ($errors->has('cellphone'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('cellphone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('qqnumber') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">QQ号</label>
                                <div class="col-md-6">
                                    <input type="qqnumber" class="form-control" name="qqnumber" value="{{ $user->qqnumber }}" >
                                    @if ($errors->has('qqnumber'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('qqnumber') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">出生日期</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="birthday" value="{{$user->birthday? $user->birthday:'' }}" id="datetimepicker">
                                    @if ($errors->has('birthday'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('birthday') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-sign-in"></i>保存
                                    </button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">其他信息</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" >
                            {!! csrf_field() !!}

                            <div class="form-group">
                                <label class="col-md-4 control-label">最后一次登录时间</label>
                                <div class="col-md-6">
                                    <input type="last_login" class="form-control" name="last_login" value="{{ $user->last_login }}" disabled>

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">注册日期</label>
                                <div class="col-md-6">
                                    <input type="created_at" class="form-control" name="created_at" value="{{ date_format($user->created_at ,'Y-m-d')}}" disabled>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


