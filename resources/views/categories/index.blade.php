<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('icomoon/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
<ul class="tabs">
    <li data-tab-target="#all-genre" class="active tab">{{$categories->name}}</li>
    <li data-tab-target="#business" class="tab">Business</li>
    <li data-tab-target="#technology" class="tab">Technology</li>
    <li data-tab-target="#romantic" class="tab">Romantic</li>
    <li data-tab-target="#adventure" class="tab">Adventure</li>
    <li data-tab-target="#fictional" class="tab">Fictional</li>
</ul>
<div class="tab-content">
    <div id="all-genre" data-tab-content class="active">
        <div class="row">
            <div class="col-md-3">
                <div class="product-item">
                    <figure class="product-style">
                        <img src="" alt="Books" class="product-item">
                        <button type="button" class="add-to-cart" data-product-tile="add-to-cart">
                            Add to
                            Cart
                        </button>
                    </figure>
                    <figcaption>
                        <h3></h3>
                        <span></span>
                        <div class="item-price"></div>
                    </figcaption>
                </div>
            </div>

        </div>
    </div>

</div>
<script src="js/jquery-1.11.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>

</body>
</html>
