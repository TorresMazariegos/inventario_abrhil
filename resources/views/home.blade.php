@extends('layouts.app')

@section('content')
<!-- <div class="container">
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

                    {{ __('You are logged in!') }}

                    <p>Hello <a href="https://docs.telerik.com/kendo-ui/intro/first-steps">Kendo UI for jQuery</a>!
                        This is version <strong id="kendoVersion"></strong>.</p>

                    <script>

                        $(function() {

                            $("#kendoVersion").text(kendo.version);

                        });

                    </script>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
