<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Car Review</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div id="reviewData" data-id="{{ $capId }}" data-url="{{ route('car.review', ['capId' => $capId]) }}">
                <h1>Car Review</h1>
                <div class="row">
                    <section class="section-video col-sm-12 col-md-6">
                        <div id="video-container">
                            <!-- Video content will be loaded here -->
                        </div>
                    </section>
                    <section class="section-paragraphs col-sm-12 col-md-6">
                        <div id="review-container">
                            <!-- Review paragraphs will be loaded here -->
                        </div>
                    </section>
                </div>
                <section class="section-photos mt-4">
                    <div id="photo-container" class="row">
                        <!-- Photos will be loaded here -->
                    </div>
                </section>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="{{ mix('js/app.js') }}" defer></script>
    </body>
</html>
