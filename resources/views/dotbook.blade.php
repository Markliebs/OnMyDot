@extends('layouts.app') @section('content')

<div class="container">
    <div class="setList2">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <a href="#" class="list-group-item active" data-toggle="tooltip" data-placement="left" title="5 Most Recently Entered Dots Will Appear Here" data-original-title="Dots for current movement will appear here">Dot Book</a>
            <ul class="list-group">
                <br> @foreach ($DotTables as $DotTable)

                <li class="list-group-item">Page Number: {{{ $DotTable->pageNumber }}} <br> Field Side: {{{ $DotTable->ss }}} <br> Yard Line: {{{ $DotTable->sl }}} <br> Inside or Outside: {{{ $DotTable->sl }}} <br> Distance from yard line: {{{ $DotTable->dfl }}} <br> Hash Mark:
                    {{{ $DotTable->hm }}} <br> Front or Back: {{{ $DotTable->fb }}} <br> Steps From Hash: {{{ $DotTable->sfh }}}</li>
                <br> @endforeach
            </ul>
        </div>
    </div>
</div>

@endsection
