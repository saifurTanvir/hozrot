@extends('frontend.common_template')

@section('content')

    <div class="section">
        <div class="container">

            <div class="entry-content">
                <h3 class="entry-title">{{$shayekh->name}}</h3>

                <p>
                    {!! $shayekh->detail !!}
                </p>

                <p>
                    {!! $shayekh->story !!}
                </p>

                <p>
                    {!! $shayekh->impact !!}
                </p>

            </div>

        </div>
    </div>

@endsection
