@extends('common.header')


<div class="container" style="padding-top:100px; padding-bottom:100px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Hello ADMINISTRATOR, You are logged in!') }}

                    <form method="POST" action="logout">
                          @csrf
                            <a class="" onclick="event.preventDefault();
                                                this.closest('form').submit();">Log out</a>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>


@extends('common.footer')

