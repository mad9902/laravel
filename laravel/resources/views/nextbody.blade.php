@extends("newmain")

@extends("body")

@section("konten")

<div class="text-center mb-4">
    <h3>Your score says...</h3>
</div>
<div class="container d-flex justify-content-center">
    @if (($age >= 18))
        <div>
            You can vote
        </div>
    @else
        <div>
            You can't vote
        </div>
    @endif
</div>

@endsection
