@extends('layouts')

@section('content')
    <div id="page-content">
        <div class="clear"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div style=" height:50px"></div>
                    <div class="panel panel-info">
                        <div class="col-md-6">
                            <div class="panel">
                                <div class="panel-header">{{ __('Preverite svoj email naslov') }}</div>

                                <div class="panel-body">
                                    @if (session('resent'))
                                        <div class="alert alert-success" role="alert">
                                            {{ __('Na vaš email naslov je bila poslana nova povezava za preverjanje.') }}
                                        </div>
                                    @endif

                                    {{ __('Preden nadaljujete, preverite povezavo za preverjanje emaila.') }}
                                    {{ __('Če emaila niste prejeli') }}, <a href="{{ route('verification.resend') }}">{{ __('Kliknite tukaj, da zahtevate drugo') }}</a>.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
