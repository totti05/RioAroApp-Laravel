@extends('layouts.app')
@section('content')    
    <div class="content">
        <div class="row">
            <div class="col">
                <table class="table">
                        
                    @foreach($people as $person)
                        <tr>
                            <td><a href="{{ route('person.show', $person) }}">{{$person->dni}}</a> </td>
                            <td>{{$person->name}} </td>
                            <td>{{$person->lastname}} </td>
                            <td><a href="{{ route('person.edit', $person) }}"> Edit</a> </td>
                            <form action="{{ route('person.destroy', $person) }}" method="POST">
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
