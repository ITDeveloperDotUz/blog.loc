@extends('layouts.app')

@section('content')
    <div class="col-md-8">
        <div class="row">
            @foreach($categories as $cat)
                <div class="col-md-12">
                    @include('categories.layout')
                </div>
            @endforeach
            {{--<div class="col-md-12">--}}
                {{--<div class="post-pagination  clearfix">--}}
                    {{--<ul class="pagination text-left">--}}
                        {{--<li><a href="http://demo.shapedtheme.com/kotha-pro-html/default-list.html#">1</a></li>--}}
                        {{--<li class="active"><a href="http://demo.shapedtheme.com/kotha-pro-html/default-list.html#">2</a></li>--}}
                        {{--<li><a href="http://demo.shapedtheme.com/kotha-pro-html/default-list.html#">3</a></li>--}}
                        {{--<li><a href="http://demo.shapedtheme.com/kotha-pro-html/default-list.html#">4</a></li>--}}
                        {{--<li><a href="http://demo.shapedtheme.com/kotha-pro-html/default-list.html#"><i class="fa fa-angle-double-right"></i></a></li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>
@endsection