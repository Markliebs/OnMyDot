@extends('layouts.app')

@section('content')

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
                    <form action="/dotLog" method="POST" class="form-horizontal">
                        <fieldset>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
                                <div class="form-group">
                                    <label for="select" class="control-label"><h5>Field Side</h5></label>
                                    <div class="selWidth">
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
                                    <label for="select" class="control-label"><h5>Yard Line</h5></label>
                                    <div class="selWidth">
                                        <select class="form-control" name "selectLine" id="selectLine">
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
                                        <select class="form-control" name="distanceFromYardline" id="distanceFromYardline">
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
                                        <select class="form-control" name="hashMark" id="hashMark">
                                            <option value="front">Front</option>
                                            <option value="back">Back</option>                                        </select>
                                        <br>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
                                <div class="form-group">
                                    <label for="select" class="control-label"><h5>Front-Back</h5></label>
                                    <div class="selWidth">
                                        <select class="form-control" name "fOrb" id="fOrb">
                                            <option value="front">Front</option>
                                            <option value="back">Back</option>                                        </select>
                                        <br>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
                                <div class="form-group">
                                    <label for="select" class="control-label"><h5>Steps from</h5></label>
                                    <div class="selWidth">
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
                    </form>
                    <div class="form-group clickyThings">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-1 col-xl-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 col-xl-offset-1">
                            <button type="submit" class="btn btn-success btn-sm submitButton" id="submitButton">Send to DotBook</button>
                            {{-- <button type="clear" class="btn btn-danger btn-sm clearButton" id="clearButton">Clear the Data</button> --}}
                            <button type="dots" class="btn btn-primary btn-sm dotButton" id="dotButton">Go to DotBook</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
