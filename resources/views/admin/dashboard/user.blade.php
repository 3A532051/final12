@extends('admin.layouts.master')

@section('title', '主控台')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-sm-12">
        <h1 class="page-header">
           <small></small>
        </h1>
    </div>
        <div class="col-lg-12">
        <h1 class="page-header">
            <small></small>
        </h1>

        </div>
        <div class="col-lg-12">
        <div class="row,page-header" style="margin-bottom: 20px; text-align: right" >
            <div>
                <a href="{{ route('admin.assets.index') }}" class="btn btn-primary">我要租借</a>
        </div>
        </div>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> 公告
            </li>
        </ol>

        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th width="100" style="text-align: center">標題</th>
                            <th style="text-align: center">內容</th>
                            <th width="100" style="text-align: center">日期</th>
                            <th style="text-align: center">發布者</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($announcements as $announcement)
                            <tr>
                                <td style="text-align: center">{{ $announcement->title}}</td>
                                <td style="text-align: center">{{ $announcement->content }}</td>
                                <td style="text-align: center">{{ $announcement->date}}</td>
                                <td style="text-align: center">
                                    @foreach($users as $user)
                                        @if($announcement->user_id==$user->id)
                                            {{ $user->name }}
                                        @endif
                                    @endforeach
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> 我的申請
            </li>
        </ol>
        @if(count($applications) > 0)
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th width="80" style="text-align: center">申請編號</th>
                        <th style="text-align: center">場地名稱</th>
                        <th width="100" style="text-align: center">申請狀態</th>
                        <th width="120" style="text-align: center">申請日期</th>
                    </tr>
                    </thead>
                    @foreach($applicationsA as $application)
                        
						
						<tbody>
                        @foreach($maintainces_A as $maintaince)
                           @if($maintaince->id==$application->maintaince_id)
                                <tr>
                                    <td style="text-align: center">
                                        {{ $maintaince->id }}
                                    </td>

                                    <td style="text-align: center">
                                        @foreach($assets as $asset)
                                            @if($maintaince->asset_id==$asset->id)
                                                {{ $asset->name }}
                                            @endif
                                        @endforeach
                                    </td>

                                    <td style="text-align: center">{{ $maintaince->status }}</td>
                                    <td style="text-align: center">
                                       
                                            {{ $maintaince-> date}}
                                        
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                        </tbody>
                    @endforeach
                </table>
            </div>
        @endif
    </div>
</div>

<!-- /.row -->

<div class="row">
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
</div>
<!-- /.row -->

@endsection