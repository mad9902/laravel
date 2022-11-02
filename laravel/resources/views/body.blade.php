{{-- @extends('newmain')

    <div>
        @if ($nationality == 'Indian')
            @if ($age >= 18)
                <div>
                    Eligible to give vote
                </div>
            @else
                <div>
                    Not eligible to give vote
                </div>
            @endif
    </div> --}}

    @include('newmain')

    @section("contain")

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
    @include("footer")


