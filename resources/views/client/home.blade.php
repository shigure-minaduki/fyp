@extends('layouts.client')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if(session('status'))
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            </div>
                        </div>
                    @endif

                    You are logged in!
                    <br>
                    <p>The time now is
                      <script>
                        document.write(new Date().toLocaleDateString());
                      </script>
                      <span id="datetime"></span></p>
                      <script>
                      var dt = new Date();
                      document.getElementById("datetime").innerHTML = dt.toLocaleTimeString('en-GB');
                      </script>
                    </p>


                    Test 1 Start time:
                    <br>
                    <a href="{{ route('client.test') }}">Start Test 1</a>
                    <br>
                    <br>
                    Test 2 Start time:
                    <br>
                    <a href="{{ route('client.test') }}">Start Test 2</a>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
