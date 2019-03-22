@extends('layouts')

@section('title')
    Send email
@endsection

@section('content')
    <div id="page-content">
        <div class="clear"></div>
        <div class="container">
            <br />
            <div class="container box">

                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error  }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


                @if($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        <strong>{{ $message  }}</strong>
                    </div>
                @endif
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-heading text-center">
                            <h4><strong>Kontaktirajte nas</strong></h4>
                        </div>
                            <div class="panel-body">
                                <form method="post" action="{{ url('sendemail/send') }}">

                                    {{ csrf_field() }}

                                    <div class="form-group col-xs-12">
                                        <label>Ime in priimek</label>
                                        <input type="text" name="name" class="form-control" />
                                    </div>

                                    <div class="form-group col-xs-12">
                                        <label>Email naslov</label>
                                        <input type="text" name="email" class="form-control" />
                                    </div>

                                    <div class="form-group col-xs-12">
                                        <label>Vpiši sporočilo</label>
                                        <textarea name="message" class="form-control" rows="7"></textarea>
                                    </div>

                                    <div class="form-group col-xs-12">
                                        <input type="submit" name="send" value="Send" class="btn btn-info" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>

@endsection