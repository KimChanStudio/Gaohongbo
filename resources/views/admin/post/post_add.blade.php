

@extends('layouts.admin.app')

@section('title', '后台管理')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">新建文章</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{url('admin/post/add')}}">
                            {!! csrf_field() !!}
                            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                <label class="col-md-2 control-label">标题</label>
                                <div class="col-md-8">
                                    <input class="form-control" name="title" value="{{ old('title') }}" placeholder="不超过40个字符的标题~">
                                    @if ($errors->has('title'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('source') ? ' has-error' : '' }}">
                                <label class="col-md-2 control-label">来源</label>
                                <div class="col-md-8">
                                    <input type="username" class="form-control" name="source" value="{{ old('source') }}" placeholder="转自何处？还是原创？~">
                                    @if ($errors->has('source'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('source') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('abstract') ? ' has-error' : '' }}">
                                <label class="col-md-2 control-label">摘要</label>
                                <div class="col-md-8">
                                    <textarea type="text" class="form-control" rows="3" name="abstract"  placeholder="140个字符以内哦~">{{ old('abstract') }}</textarea>
                                    @if ($errors->has('abstract'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('abstract') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('feature') ? ' has-error' : '' }}">
                                <label class="col-md-2 control-label">配图外链</label>
                                <div class="col-md-8">
                                    <input type="url" class="form-control" name="feature" value="{{ old('feature') }}" >
                                    @if ($errors->has('feature'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('feature') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                                <label class="col-md-2 control-label">内容</label>
                                <div class="col-md-8">
                                    <input type="hidden" class="form-control" id="content" name="content"  />
                                    <div id="summernote" ></div>
                                    @if ($errors->has('content'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('content') }}</strong>
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
            </div>
        </div>
    </div>
@endsection


