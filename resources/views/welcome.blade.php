@section('title') On My Dot @endsection @extends('layout') @section('content')
<div class="container">

    <div class="h1">I'm on my dot</h1><br>
    </div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-9">
    <img src="http://placehold.it/750x350/007300/000000?text=Football Field Grid Goes Here">
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
    <img src="http://placehold.it/200x350/ffffff/000000?text=List Of Entered Sets Goes Here">
    <br>
    </div>
</div>




    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title">Enter a new set</h3>
        </div>
        <div class="panel-body">

            <div class="boxSize" id="boxSize">

                <div class="row">
                    <form class="form-horizontal">
                        <fieldset>
                            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 col-xl-offset-1">
                                <div class="form-group">
                                    <label for="select" class="control-label"><h5>Side</h5></label>
                                    <div class="selWidth">
                                        <select class="form-control" id="selectSide selWidth">
                                        <option value="one">1</option>
                                        <option value="two">2</option>
                                        </select>
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 col-xl-offset-1">
                                <div class="form-group">
                                    <label for="select" class="control-label"><h5>Yard Line</h5></label>
                                    <div class="selWidth">
                                        <select class="form-control" id="selectLine">
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

                            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 col-xl-offset-1">
                                <div class="form-group">
                                    <label for="select" class="control-label"><h5>In or Out</h5></label>
                                    <div class="selWidth">
                                        <select class="form-control" id="selectIn">
                                    <option value="inside">Inside</option>
                                    <option value="outside">Outside</option>
                                </select>
                                        <br>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 col-xl-offset-1">
                                <div class="form-group">
                                    <label for="select" class="control-label"><h5>Steps Off Line</h5></label>
                                    <div class="selWidth">
                                        <select class="form-control" id="distanceFromSideline">
                    <option value="one">1</option>
                    <option value="two">2</option>
                    <option value="three">3</option>
                    <option value="four">4</option>
                        </select>
                                        <br>
                                    </div>
                                </div>
                            </div>



                            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 col-xl-offset-1">
                                <div class="form-group">
                                    <label for="select" class="control-label"><h5>Front/Back</h5></label>
                                    <div class="selWidth">
                                        <select class="form-control" id="distanceFromSideline">
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
                    <option value="fifteen">15</option>
                    <option value="sixteen">16</option>
                    <option value="seventeen">17</option>
                    <option value="eighteen">18</option>
                    <option value="nineteen">19</option>
                    <option value="twenty">20</option>
                    <option value="twentyOne">21</option>
                    <option value="twentyTwo">22</option>
                    <option value="twentyThree">23</option>
                    <option value="twentyFour">24</option>
                    <option value="twentyFive">25</option>
                    <option value="twentySix">26</option>
                    <option value="twentySeven">27</option>
                    <option value="twentyEight">28</option>
                        </select>
                                        <br>
                                    </div>
                                </div>
                            </div>
                <div class="form-group">
                <div class="col-lg-1 col-lg-offset-1">
                    <button type="restart" class="btn btn-danger btn-sm">Restart</button>
                    <button type="submit" class="btn btn-success btn-sm">Submit</button>
                </div>
            </div>
            </div>



            <!-- <div class="row">
                <div class="form-group">
                    <label for="select" class="control-label"><h5>Hash Marks</h5></label>
                    <div class="selWidth">
                        <select class="form-control" id="selectHash">
                            <option value="HS">High School</option>
                            <option value="NCAA">College</option>
                            <option value="NFL">Professional</option>
                        </select>
                        <br>
                    </div>
                </div>
            </div> -->


            </fieldset>
            </form>
        </div>
    </div>
</div>



@stop
