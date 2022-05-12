@extends('layouts.app')

@section('content')
{!! Form::open(['action' =>'cartController@store', 'method' => 'POST','files'=>true])!!}
<table>
    <tr>
        <td>
             <img src="{{ URL::asset($items->image) }}" width="400" height="600"/>
        </td>
        <td>
            <table>
                <tr>
                    <td>
                        <p>Name: {{ $items->name }}</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Descriptions: {{ $items->descriptions }}</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Price: HKD{{ $items->price }}</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Stock: {{ $items->stock }}</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-group">
                            {{ Form::hidden('itemsId', $items->itemsId, array('class' => 'form-control')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('quantity', 'Quantity') }}
                            {{ Form::text('quantity', 1 , array('class' => 'form-control')) }}
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-group text-center">
                            {{ Form::submit('Add to Cart', array('class' => 'btn btn-primary')) }}
                        </div>
                    </td>
                </tr>
            </table>    
        </td>
    </tr>
</table>
{{ Form::close() }}
@endsection
