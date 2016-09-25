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
							<li class="list-group-item">Page Number: {{{ $DotTable->pageNumber }}} &nbsp;&nbsp;Counts: {{{ $DotTable->counts }}}</li>
							<br>
							<?php $count++; ?> @endforeach
				</ul>
			</div>
		</div>
	</div>

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
								<label for="select" class="control-label">
									<h5><b>Field Side</b></h5></label>
								<select class="form-control" name="selectSide" id="selectSide">
									<option value="One">1 (Audience Left)</option>
									<option value="Two">2 (Audience Right)</option>
								</select>
								<br>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
							<div class="form-group">
								<label for="select" class="control-label">
									<h5><b>Yard Line</b></h5></label>
								<div class="selWidth">

									<select class="form-control" name="selectLine" id="selectLine">
										<option value="Goal">0 (Goal Line)</option>
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
								<label for="select" class="control-label">
									<h5><b>In or Out</b></h5></label>
								<select class="form-control" name="selectIn" id="selectIn">
									<option value="Inside">Inside (Towards 50)</option>
									<option value="Outside">Outside (Away from 50)</option>
								</select>
								<br>
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
							<div class="form-group">
								<label for="select" class="control-label">
									<h5><b>Steps Off Line</b></h5></label>
								<select class="form-control" name="distanceFromYardLine" id="distanceFromYardLine">
									<option value="One">1</option>
									<option value="One and a Quarter">1.25</option>
									<option value="One and a Half">1.5</option>
									<option value="Two">2</option>
									<option value="Two and a Quarter">2.25</option>
									<option value="Two and a Half">2.5</option>
									<option value="Three">3</option>
									<option value="Three and a Quarter">3.25</option>
									<option value="Three and a Half">3.5</option>
									<option value="Four">4 (Splitting)</option>
									<option value="Four and a Quarter">4.25</option>
									<option value="Four and a Half">4.5</option>
								</select>
								<br>
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
							<div class="form-group">
								<label for="select" class="control-label">
									<h5><b>Hash Mark or Sideline</b></h5></label>
								<select class="form-control" name="hashMark" id="hashMark">
									<option value="Front Hash">Front Hash</option>
									<option value="Back Hash">Back Hash</option>
									<option value="Front Sideline">Front Sideline</option>
									<option value- "Back Sideline">Back Sideline</option>
								</select>
								<br>
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
							<div class="form-group">
								<label for="select" class="control-label">
									<h5><b>In Front Or Behind Hash/Line</b></h5></label>
								<select class="form-control" name="fOrb" id="fOrb">
									<option value="Front">Front</option>
									<option value="Back">Behind</option>
								</select>
								<br>
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
							<div class="form-group">
								<label for="select" class="control-label">
									<h5><b>Steps From Hash</b></h5></label>
								<select class="form-control" name="stepsFromHash" id="stepsFromHash">
									<option value="One">1</option>
									<option value="One and a Quarter">1.25</option>
									<option value="One and a Half">1.5</option>
									<option value="Two">2</option>
									<option value="Two and a Quarter">2.25</option>
									<option value="Two and a Half">2.5</option>
									<option value="Three">3</option>
									<option value="Three and a Quarter">3.25</option>
									<option value="Three and a Half">3.5</option>
									<option value="Four">4</option>
									<option value="Four and a Quarter">4.25</option>
									<option value="Four and a Half">4.5</option>
									<option value="Five">5</option>
									<option value="Five and a Quarter">5.25</option>
									<option value="Five and a Half">5.5</option>
									<option value="Six">6</option>
									<option value="Six and a Quarter">6.25</option>
									<option value="Six and a Half">6.5</option>
									<option value="Seven">7</option>
									<option value="Seven and a Quarter">7.25</option>
									<option value="Seven and a Half">7.5</option>
									<option value="Eight">8</option>
									<option value="Eight and a Quarter">8.25</option>
									<option value="Eight and a Half">8.5</option>
									<option value="Nine">9</option>
									<option value="Nine and a Quarter">9.25</option>
									<option value="Nine and a Half">9.5</option>
									<option value="Ten">10</option>
									<option value="Ten and a Quarter">10.25</option>
									<option value="Ten and a Half">10.5</option>
									<option value="Eleven">11</option>
									<option value="Eleven and a Quarter">11.25</option>
									<option value="Eleven and a Half">11.5</option>
									<option value="Twelve">12</option>
									<option value="Twelve and a Quarter">12.25</option>
									<option value="Twelve and a Half">12.5</option>
									<option value="Thirteen">13</option>
									<option value="Thirteen and a Quarter">13.25</option>
									<option value="Thirteen and a Half">13.5</option>
									<option value="Fourteen">14</option>
									<option value="Fourteen and a Quarter">14.25</option>
									<option value="Fourteen and a Half">14.5</option>
								</select>
								<br>
							</div>
						</div>
					</fieldset>

					<div class="form-group">
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
							<button type="submit" class="btn btn-success btn-sm dotButton" id="submitButton">Submit And Add Another Dot</button>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
							<button type="button" onclick="window.location='/dotbook'" class="btn btn-primary btn-sm dotButton" id="dotButton">Submit And Go To DotBook</button>
						</div>
					</div>

					<!-- End of big row -->
			</div>

			</form>
		</div>
	</div>
</div>

@endsection
