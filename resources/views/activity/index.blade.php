@extends('layouts.app')
@section('content')    
    <div class="content">
        <div class="row">
            <div class="col">
                <table class="table">
                        
                    @foreach($activities as $activity)
                        <tr>
                            <td><a href="{{ route('activity.show', $activity) }}">{{$activity->id}}</a> </td>
                            <td>{{$activity->title}} </td>
                            <td>{{$activity->description}} </td>
                            <td><a href="{{ route('activity.edit', $activity) }}"> Edit</a> </td>
                            <form action="{{ route('activity.destroy', $activity) }}" method="POST">
                                @csrf
                                @method('delete')
                                <td><button type="submit"> Delete</button> </td>
                            </form>
                        </tr>
                    @endforeach  
                                                        
                </table>
                
            </div>
        </div>
    </div>
@endsection        
