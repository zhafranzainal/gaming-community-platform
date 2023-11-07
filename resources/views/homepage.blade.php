@extends('master')

@section('content')
    <div class="row">
        <div class="col-md-12">

            <h1>Welcome to Gaming Community Platform</h1>

            <p>
                Explore the latest game reviews, stay up-to-date with gaming news, and join discussions
                with fellow gamers. Whether you're a casual player or a hardcore enthusiast, this is
                the place to connect and share your passion for gaming.
            </p>

            <div class="featured-games">

                <h2>Featured Games</h2>

                <div class="row">

                    <div class="col-md-4">
                        <div class="card">

                            <img src="https://cdn.akamai.steamstatic.com/steam/apps/936790/header.jpg?t=1666713640"
                                class="card-img-top" alt="Game 1">

                            <div class="card-body">
                                <h5 class="card-title">Life is Strange: True Colors</h5>
                                <p class="card-text" style="text-align: justify">
                                    Alex Chen hides her 'curse': the psychic power of Empathy, the ability to absorb the
                                    emotions of others. When her brother dies in a so-called accident, Alex must embrace her
                                    power to find the truth.
                                </p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">

                            <img src="https://cdn.akamai.steamstatic.com/steam/apps/976310/header.jpg?t=1691103008"
                                class="card-img-top" alt="Game 1">

                            <div class="card-body">
                                <h5 class="card-title">Mortal Kombat 11</h5>
                                <p class="card-text" style="text-align: justify">
                                    Mortal Kombat is back and better than ever in the next evolution of the iconic
                                    franchise.
                                </p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">

                            <img src="https://cdn.akamai.steamstatic.com/steam/apps/2369390/header.jpg?t=1697654297"
                                class="card-img-top" alt="Game 1">

                            <div class="card-body">
                                <h5 class="card-title">Far Cry® 6</h5>
                                <p class="card-text" style="text-align: justify">
                                    Enter the adrenaline-filled world of a modern-day guerrilla revolution. With stunning
                                    vistas, visceral gunplay, and a huge variety of gameplay experiences, there's never been
                                    a better time to join the fight.
                                </p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
            <br>

            <p>
                Start by browsing our featured games to find content related to your favorite games. Join our growing
                community today!
            </p>

        </div>
    </div>
@endsection
