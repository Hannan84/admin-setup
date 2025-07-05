@extends('backend.layouts.app')

@section('content')
    <div class="pd-20 card-box mb-30">
        <div class="clearfix">
            <div class="pull-left">
                <h4 class="text-blue h4">Services</h4>
            </div>
        </div>
        <form>
            <div class="form-group">
                <label>Title</label>
                <input class="form-control" type="text" placeholder="Service Title" name="title">
            </div>
        </form>
    </div>
@endsection