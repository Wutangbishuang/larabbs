@extends('layouts.app')

@section('title', '话题列表')

@section('content')

    <div class="row">
        <div class="col-lg-9 col-md-9 topic-list">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <ul class="nav nav-pills">
                        <li role="presentation" class="active"><a href="#">最后回复</a></li>
                        <li role="presentation"><a href="#">最新发布</a></li>
                    </ul>
                </div>

                <div class="panel-body">
                    {{-- 话题列表 --}}
                    @include('topics._topic_list', ['topics' => $topics])
                    {{-- 分页 --}}
                    {!! $topics->appends(Request::except('page'))->render() !!}
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-3 sidebar">
            @include('topics._sidebar')
        </div>
    </div>

@endsection

/* Topic Index Page */
.topics-index-page {
.topic-list {
.nav > li > a {
position: relative;
display: block;
padding: 5px 14px;
font-size: 0.9em;
}
a {
color: #444444;
}
.meta {
font-size:0.9em;
color: #b3b3b3;
a {
color: #b3b3b3;
}
}
.badge {
background-color: #d8d8d8;
}
hr {
margin-top: 12px;
margin-bottom: 12px;
border: 0;
border-top: 1px solid #dcebf5;
}
}
}