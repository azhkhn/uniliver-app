@extends('app')

@section('title','Result')

@section('content')
    <div id="load_element">
        <div class=" game-ques-vertical-align">
            <div class="row">
                <div class="col-sm-12">
                    <h2>Result of Day {{$day}}</h2>
                    <table class="table">
                        <tr>
                            <td >Question</td>
                            <td >1</td>
                            <td >2</td>
                            <td >3</td>
                        </tr>
                        <tr>
                            <td >Result</td>
                            <td >
                                @if($q1res==true)
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                @elseif($q1res==false)
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                @else
                                    <i class="fa fa-question" aria-hidden="true"></i>
                                @endif
                            </td>
                            <td >@if($q2res==true)
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                @elseif($q1res==false)
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                @else
                                    <i class="fa fa-question" aria-hidden="true"></i>
                                @endif</td>
                            <td >@if($q3res==true)
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                @elseif($q1res==false)
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                @else
                                    <i class="fa fa-question" aria-hidden="true"></i>
                                @endif</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection