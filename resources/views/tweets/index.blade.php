@extends ('layout')

@section ('content')
    <div class="container">
        @foreach ($tweets as $tweet)
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ $tweet->salutation }}
                </div>
                <div class="panel-body">
                    {{ $tweet->tweet }}
                </div>
            </div>
        @endforeach
    </div>

    <style>
        .flexcontainer {
            display: flex;
            justify-content: center;
        }
    </style>
    <div class="flexcontainer">
        {{ $tweets->links() }}
    </div>
@endsection