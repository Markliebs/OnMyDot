@extends('layouts.app') @section('content')

<div class="container">

    <div class="row">
        <div class="grid">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                <img src="/pics/page13.png"></img>
            </div>
        </div>
        <div class="setList">
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <a href="#" class="list-group-item active" data-toggle="tooltip" data-placement="left" title="5 Most Recently Entered Dots Will Appear Here" data-original-title="5 most recently entered dots will appear here">5 Latest Dots</a>
                <ul class="list-group">
                    <br>
                    <?php $count = 0; ?> @foreach ($DotTables as $DotTable)
                    <?php if($count == 5) break; ?>
                    <li class="list-group-item">Page Number: {{{ $DotTable->pageNumber }}} Counts: {{{ $DotTable->counts }}}</li>
                    <br>
                    <?php $count++; ?> @endforeach
                </ul>
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
                        {{ csrf_field() }}
                        <fieldset>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
                                <div class="form-group" id="pageNumAdjust">
                                    <label for="input" class="control-label" for="focusedInput" name="pageNumber" id="pageNumber">Page Number</label>
                                    <div class="pageNumber">
                                        <input class="form-control" id="focusedInput" name="pageNumber" type="text" placeholder="Solid Sets or Sub Sets" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
                                <div class="form-group" id="pageNumAdjust">
                                    <label for="input" class="control-label" for="focusedInput" name="counts" id="counts">Counts</label>
                                    <div class="pageNumber">
                                        <input class="form-control" id="focusedInput" name="counts" type="text" placeholder="Number Of Counts" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">

                                <div class="form-group">
                                    <label for="select" class="control-label"><h5><b>Field Side</b></h5></label>
                                    <div class="selWidth">
                                        <select class="form-control" name="selectSide" id="selectSide">
                                        <option value="One">1</option>
                                        <option value="Two">2</option>
                                        </select>
                                        <br>

                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
                                <div class="form-group">
                                    <label for="select" class="control-label"><h5><b>Yard Line</b></h5></label>
                                    <div class="selWidth">

                                        <select class="form-control" name="selectLine" id="selectLine">
                                        <option value="Goal">0</option>
                                        <option value="Five">5</option>
                                        <option value="Ten">10</option>
                                        <option value="Fifteen">15</option>
                                        <option value="Twenty">20</option>
                                        <option value="TwentyFive">25</option>
                                        <option value="Thirty">30</option>
                                        <option value="ThirtyFive">35</option>
                                        <option value="Forty">40</option>
                                        <option value="FortyFive">45</option>
                                        <option value="Fifty">50</option>
                                    </select>
                                        <br>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
                                <div class="form-group">
                                    <label for="select" class="control-label"><h5><b>In or Out</b></h5></label>
                                    <div class="selWidth">
                                        <select class="form-control" name="selectIn" id="selectIn">
                                    <option value="Inside">Inside</option>
                                    <option value="Outside">Outside</option>
                                        </select>
                                        <br>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
                                <div class="form-group">
                                    <label for="select" class="control-label"><h5><b>Steps Off</b></h5></label>
                                    <div class="selWidth">
                                        <select class="form-control" name="distanceFromYardLine" id="distanceFromYardLine">
                                            <option value="One">1</option>
                                            <option value="Two">2</option>
                                            <option value="Three">3</option>
                                            <option value="Four">4</option>
                                        </select>
                                        <br>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
                                <div class="form-group">
                                    <label for="select" class="control-label"><h5><b>Hash Mark</b></h5></label>
                                    <div class="selWidth">
                                        <select class="form-control" name="hashMark" id="hashMark">
                                            <option value="Front">Front</option>
                                            <option value="Back">Back</option>
                                        </select>
                                        <br>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
                                <div class="form-group">
                                    <label for="select" class="control-label"><h5><b>Front-Back<b></h5></label>
                                    <div class="selWidth">
                                        <select class="form-control" name="fOrb" id="fOrb">
                                            <option value="Front">Front</option>
                                            <option value="Back">Back</option>
                                        </select>
                                        <br>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
                                <div class="form-group">
                                    <label for="select" class="control-label"><h5><b>Steps from</b></h5></label>
                                    <div class="selWidth">
                                        <select class="form-control" name="stepsFromHash" id="stepsFromHash">
                                            <option value="One">1</option>
                                            <option value="Two">2</option>
                                            <option value="Three">3</option>
                                            <option value="Four">4</option>
                                            <option value="Five">5</option>
                                            <option value="Six">6</option>
                                            <option value="Seven">7</option>
                                            <option value="Eight">8</option>
                                            <option value="Nine">9</option>
                                            <option value="Ten">10</option>
                                            <option value="Eleven">11</option>
                                            <option value="Twelve">12</option>
                                            <option value="Thirteen">13</option>
                                            <option value="Fourteen">14</option>
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
                                        <button type="submit" class="btn btn-success btn-sm submitButton" id="submitButton">Submit And Add Another Dot</button>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                        <button type="button" onclick="window.location='/dotbook'" class="btn btn-primary btn-sm dotButton" id="dotButton">Submit And Go To DotBook</button>
                                    </div>
                                </div>
                            </div>
                        </div>



                </div>



                </form>
            </div>
        </div>
    </div>
</div>

@endsection