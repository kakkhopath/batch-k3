<style>
    .portfolio-item {
        overflow: hidden;
        border-radius: 8px;
        position: relative;
    }

    .portfolio-item img {
        width: 100%;
        transition: transform 0.3s ease-in-out;
    }

    .portfolio-item:hover img {
        transform: scale(1.1);
    }

    .portfolio-overlay {
        opacity: 0;
    }

    .portfolio-item:hover .portfolio-overlay {
        opacity: 1;
    }

</style>
<x-layout title="Portfolio">
    <section class="portfolio py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">Our Portfolio</h2>
                <p class="text-muted">Check out some of our latest projects.</p>
            </div>
            <div class="row g-4">
                @foreach ($portfolioImages as $category => $image)
                <div class="col-md-6 col-lg-4">
                    <div class="portfolio-item shadow-sm position-relative">
                        <img src="{{ $image }}" alt="{{ $category }}" title="{{$category}}" class="img-fluid rounded">
                        <div class="portfolio-overlay position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-center text-center p-3" style="background: rgba(0,0,0,0.6); opacity: 0; transition: opacity 0.3s ease-in-out;">
                            <h5 class="text-white">{{ $category }}</h5>
                            <p class="text-white">A short description of the {{ strtolower($category) }} project.</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>
