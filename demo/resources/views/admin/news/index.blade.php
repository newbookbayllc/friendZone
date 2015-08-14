@extends('admin.layouts.default')

{{-- Web site Title --}}
@section('title') News :: @parent @stop

{{-- Content --}}
@section('content')
    <div class="page-header">
        <h3>
           News
            <div class="pull-right">
                <div class="pull-right">
                    <a href="{{{ URL::to('admin/news/create') }}}"
                       class="btn btn-sm  btn-primary iframe"><span
                                class="glyphicon glyphicon-plus-sign"></span>News
            </div>
        </h3>
    </div>

    <table id="table" class="table table-striped table-hover">
        <thead>
        <tr>
	        <th>Id</th>
            <th>Title</th>
            <th>Description</th>
         
        </tr>
        </thead>
        <tbody>
        		@foreach ($data as $news)
                	<tr>
                    	<td>
		                    	{{ $news->id }}
                         </td>
                          <td>
		                    	{{ $news->news_title}}
                         </td>
                         <td>
		                    	{{ $user->news_desc }}
                         </td>
                       </tr>
                     @endforeach
        </tbody>
    </table>
@stop

