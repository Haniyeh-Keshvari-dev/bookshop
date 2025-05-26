<section id="popular-books" class="bookshelf py-5 my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header align-center">
                    <div class="title">
                        <span>Some quality items</span>
                    </div>
                    <h2 class="section-title">Popular Books</h2>
                </div>
                <ul class="tabs">
                    @foreach($categories as $category)
                        <li data-tab-target="#tab-{{ $category->id }}"
                            class="tab {{ $loop->first ? 'active' : '' }}">
                            {{ $category->name }}
                        </li>
                    @endforeach
                </ul>
                <div class="tab-content">
                    @foreach($categories as $category)
                        <div
                            id="tab-{{ $category->id }}"
                            data-tab-content
                            class="{{ $loop->first ? 'active' : '' }}"
                        >
                            <div class="row">
                                @forelse($category->books as $book)
                                    <div class="col-md-3">
                                        <div class="product-item">
                                            <figure class="product-style">
                                                <img src="{{ asset('images/' . $book->cover_image) }}"
                                                     alt="{{ $book->title }}" class="product-item">
                                                <button type="button" class="add-to-cart"
                                                        data-product-tile="add-to-cart">
                                                    Add to Cart
                                                </button>
                                            </figure>
                                            <figcaption>
                                                <h3>{{ $book->title }}</h3>
                                                <span>{{ $book->author->name }}</span>
                                                <div class="item-price">{{ number_format($book->price) }} تومان</div>
                                            </figcaption>
                                        </div>
                                    </div>
                                @empty
                                    <div class="alert alert-warning text-center my-4" role="alert">
                                        empty !
                                    </div>

                                @endforelse
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    </div>

</section>


