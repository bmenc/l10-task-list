@extends('layouts.app')

@section('title', $task->title)

@section('content')
   <p>{{$task->description}}</p>

   @if($task->long_description)
   <p> {{$task->long_description}} </р>
   @endif
      
   <p>{{$task->created_at}}</p>
   <p>{{$task->updated_at}}</p>
@endsection('content')