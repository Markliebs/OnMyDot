@extends('layouts.app') @section('content')

<div class="container">

    <div class="row">
        <div class="grid">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                <img src="http://placehold.it/750x350/007300/000000?text=Football Field Grid Goes Here">
            </div>
        </div>
        <div class="setList">
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 btn">
                <a href="#" class="list-group-item active" data-toggle="tooltip" data-placement="left" title="5 Most Recently Entered Dots Will Appear Here"
                    data-original-title="5 most recently entered dots will appear here">5 Latest Dots</a>
                <ul class="list-group">
                    {{--
                    <div class="selWidth"> --}}
                        <br>
                        <?php $count = 0; ?> @foreach ($DotTables as $DotTable)
                        <?php if($count == 5) break; ?>
                        <li class="list-group-item">Page Number: {{{ $DotTable->pageNumber }}} <br> Field Side: {{{ $DotTable->ss }}}</li>
                        <br>
                        <?php $count++; ?> @endforeach
                </ul>
                {{-- </div> --}}
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
                        <fieldset>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">

                                <div class="form-group">
                                    <div class="selWidth">
                                        <label class="control-label" for="focusedInput name=" pageNumber " id="pageNumber "">Page Number</label>
                                        <input class="form-control" id="focusedInput" type="text" placeholder="Solid Sets or Sub Sets">
                                    </div>
                                </div>
                            </div>



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