@extends('layouts.app') @section('content')

<div class="container">

    <div class="row">
        <div class="grid">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                <img src="http://placehold.it/750x350/007300/000000?text=Football Field Grid Goes Here">
            </div>
            <div class="setList">
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <img src="http://placehold.it/350x350/ffffff/000000?text=Dot List Goes Here">
                </div>
            </div>
        </div>
    </div>

    <div class="stuffandthings">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">Enter a new set</h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <form class="form-horizontal" role="form" method="POST" action="/dotLog">
                        {{-- {!! Form::open(['route' => 'dotLog.store']) !!}  --}}
                        {{ csrf_field() }}
                        <fieldset>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
                               
                                <div class="form-group">
                                    <label for="select" class="control-label"><h5>Field Side</h5></label>
                                    <div class="selWidth">
                                        {{-- {!! Form::label('selectSide', 'Field Side') !!}<br />
                                        {!! Form::select('selectSide', ['one' => '1', 'two' => '2'], 'one'); !!}   --}}
                                        <select class="form-control" name="selectSide" id="selectSide">
                                        <option value="one">1</option>
                                        <option value="two">2</option>
                                        </select>
                                        <br>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
                                <div class="form-group">
                                    {<label for="select" class="control-label"><h5>Yard Line</h5></label>
                                    <div class="selWidth">
                                        {{-- {!! Form::label('selectLine', 'Yard Line') !!}<br />
                                        {!! Form::select('selectLine', ['goal' => '0', 'five' => '5', 'ten' => '10', 'fifteen' => '20', "twentyFive" => '25', 'thirty' => '30', 'thirtyFive' => '35', 'forty' => '40', 'fortyFive' => '45', 'fifty' => '50'], 'goal'); !!}      --}}

                                    <select class="form-control" name="selectLine" id="selectLine">
                                    <option value="goal">0</option>
                                    <option value="five">5</option>
                                    <option value="ten">10</option>
                                    <option value="fifteen">15</option>
                                    <option value="twenty">20</option>
                                    <option value="twentyFive">25</option>
                                    <option value="thirty">30</option>
                                    <option value="thirtyFive">35</option>
                                    <option value="forty">40</option>
                                    <option value="fortyFive">45</option>
                                    <option value="fifty">50</option>
                                    </select>
                                        <br>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
                                <div class="form-group">
                                    <label for="select" class="control-label"><h5>In or Out</h5></label>
                                    <div class="selWidth">
                                        {{-- {!! Form::label('selectIn', 'In or Out') !!}<br />
                                        {!! Form::select('selectIn', ['inside' => 'Inside', 'outside' => 'Outside'], 'inside'); !!}    --}}
                                        <select class="form-control" name="selectIn" id="selectIn">
                                    <option value="inside">Inside</option>
                                    <option value="outside">Outside</option>
                                </select>
                                        <br>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
                                <div class="form-group">
                                    <label for="select" class="control-label"><h5>Steps Off</h5></label>
                                    <div class="selWidth">
                                        {{-- {!! Form::label('distanceFromYardLine', 'Steps Off') !!}<br />
                                        {!! Form::select('distanceFromYardLine', ['one' => '1', 'two' => '2', 'three' => '3', 'four' => '4'], 'one'); !!}   --}}
                                        <select class="form-control" name="distanceFromYardLine" id="distanceFromYardLine">
                                            <option value="one">1</option>
                                            <option value="two">2</option>
                                            <option value="three">3</option>
                                            <option value="four">4</option>
                                        </select>
                                        <br>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
                                <div class="form-group">
                                    <label for="select" class="control-label"><h5>Hash Mark</h5></label>
                                    <div class="selWidth">
                                        {{-- {!! Form::label('hashMark', 'Hash Mark') !!}<br />
                                        {!! Form::select('hashMark', ['front' => 'Front', 'back' => 'Back'], 'front'); !!}   --}}
                                        <select class="form-control" name="hashMark" id="hashMark">
                                            <option value="front">Front</option>
                                            <option value="back">Back</option>
                                        </select>
                                        <br>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
                                <div class="form-group">
                                    <label for="select" class="control-label"><h5>Front-Back</h5></label>
                                    <div class="selWidth">
                                        {{-- {!! Form::label('fOrb', 'Front-Back') !!}<br />
                                        {!! Form::select('fOrb', ['front' => 'Front', 'back' => 'Back'], 'Front'); !!}   --}}
                                        <select class="form-control" name="fOrb" id="fOrb">
                                            <option value="front">Front</option>
                                            <option value="back">Back</option>
                                        </select>
                                        <br>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
                                <div class="form-group">
                                    <label for="select" class="control-label"><h5>Steps from</h5></label>
                                    <div class="selWidth">
                                        {{-- {!! Form::label('stepsFromHash', 'Steps from') !!}<br />
                                        {!! Form::select('stepsFromHash', ['one' => '1', 'two' => '2', 'three' => '3', 'four' => '4', "five" => '5', 'six' => '6', 'seven' => '7', 'eight' => '8', 'nine' => '9', 'ten' => '10', 'eleven' => '11', 'twelve' => '12', 'thirteen' => '13', 'fourteen' => '14'], 'goal'); !!}      --}}

                                        <select class="form-control" name="stepsFromHash" id="stepsFromHash">
                                            <option value="one">1</option>
                                            <option value="two">2</option>
                                            <option value="three">3</option>
                                            <option value="four">4</option>
                                            <option value="five">5</option>
                                            <option value="six">6</option>
                                            <option value="seven">7</option>
                                            <option value="eight">8</option>
                                            <option value="nine">9</option>
                                            <option value="ten">10</option>
                                            <option value="eleven">11</option>
                                            <option value="twelve">12</option>
                                            <option value="thirteen">13</option>
                                            <option value="fourteen">14</option>
                                        </select>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    
                    <div class="form-group">
                        <div class="clickyThings">
                            <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                {{-- {!! Form::submit('Send to DotBook', array('class' => 'btn btn-success btn-sm submitButton')) !!}
                                {!! Form::submit('Go to DotBook', array('class' => 'btn btn-primary btn-sm dotButton')) !!} --}}
                                <button type="submit" class="btn btn-success btn-sm submitButton" id="submitButton">Send to DotBook</button>
                                <button type="dots" class="btn btn-primary btn-sm dotButton" id="dotButton">Go to DotBook</button>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
</form>
            </div>
        </div>
    </div>
    @endsection