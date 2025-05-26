<section id="quotation" class="align-center pb-5 mb-5">
    <div class="inner-content">
        <h2 class="section-title divider">Quote of the day</h2>

        @if($quote)
            <blockquote data-aos="fade-up">
                <q>“{{ $quote->quote }}”</q>
                <div class="author-name">{{ $quote->author->name }}</div>
            </blockquote>
        @else
            <p class="text-center text-muted">نقل‌قولی برای نمایش وجود ندارد.</p>
        @endif
    </div>
</section>
