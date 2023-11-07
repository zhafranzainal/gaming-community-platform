@extends('master')

@section('content')
    <div class="row">
        <div class="col-md-12">

            <h1>Game Reviews</h1>

            <p>
                Explore in-depth game reviews contributed by our community of passionate gamers. Discover what others think
                about the latest releases, classics, and hidden gems. This is the place to dive into detailed reviews and
                share your own thoughts.
            </p>

            <h2>Latest Game Reviews</h2>

            <ul class="list-group">

                <li class="list-group-item">
                    <div class="media">

                        <img src="https://img.freepik.com/premium-vector/man-character_665280-46967.jpg"
                            class="mr-3 rounded-circle" style="max-width: 5%" alt="User123's Avatar">

                        <div class="media-body">
                            <h5 class="mt-0"><a href="#">Life is Strange: True Colors</a></h5>
                            <p>Reviewed by <a href="#">jeffchang076</a></p>
                            <p>
                                A captivating and immersive gaming experience that will keep you on the edge of your seat.
                            </p>
                            <a href="#" class="btn btn-primary">Read Review</a>
                        </div>

                    </div>
                </li>

            </ul>

        </div>
    </div>
@endsection
