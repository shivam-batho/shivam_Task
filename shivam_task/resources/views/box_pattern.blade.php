@extends('include.app')
@section('content')
    <div class="row mt-4">
    <div class="col-lg-12 col-md-12 col-sm-12 pull-left text-center mb-4">
            <h2>Box Pattern </h2>
    </div>
    @php $color_code = true; @endphp
        @for($i=1 ; $i<=12;$i++)
                @if($i%2 == 0)
                    @php
                        $color_code =$color_code == true ? false: true ;
                    @endphp   
                @endIf
            <div class='col-md-6'>
                @if ($color_code)
                <div class="p-4 mb-2 " style='background-color:#df9d9b'></div>
                @else
                <div class='p-4 mb-2' style='background-color:#e7e1e1'></div>
                @endIf
            </div>
        @endFor
    </div>
@endsection