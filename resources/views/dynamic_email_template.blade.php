@extends('layouts')

@section('title')
    Dynamic_email_template
@endsection

@section('content')
    <div id="page-content">
        <div class="clear"></div>
        <div class="container">
            <p>Hi, This is {{ $data['name']  }}</p>
            <p>I have some query like { $data['message']  }}</p>
            <p>It would be appriciative, if you gone through this feedback.</p>
        </div>
    </div>

@endsection