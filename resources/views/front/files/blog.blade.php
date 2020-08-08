@extends('front')

@section('title')
    <title>{{$category->title}}</title>

@endsection
@section('content')

    <div class="sc-course-detail-page">
        <div class="learning-table-course-detail">
            <div class="container">
                <div class="learning-table-header">
                    <h2 class="title-text">{{$category->title}}</h2>
                </div>
                <div class="learning-table-menu">
                    <div class="learning-table-wrapper">
                        <table class="table learning-table table-hover">
                            <thead>
                            <tr>
                                <th></th>
                                <th> {{__('front.Title')}} </th>
                                <th>{{__('front.Download')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($category->files->count() > 0)
                                @foreach($category->files as $file)
                                    <tr>
                                        <td>{{$file->title}}</td>
                                        <td class="check space"><span class="icon-custom icon-download flaticon-download"></span></td>
                                        <td class="check"><a href="{{$file->file}}" download>{{__('front.Download')}}</a></td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection