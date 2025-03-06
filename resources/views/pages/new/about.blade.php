<x-layout title="About Us">
    <h1 class="pt-5 pb-4 text-center">{{$title}}</h1>
    <section class="about-us py-5">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Side: Image Frame -->
                <div class="col-lg-5">
                    <div class="about-img">
                        <img src="{{ asset('images/about-us.jpg') }}" alt="About Us" class="img-fluid rounded-3 shadow">
                    </div>
                </div>

                <!-- Right Side: Big Text -->
                <div class="col-lg-7">
                    <div class="about-content">
                        <h2 class="display-5 fw-bold">Who We Are</h2>
                        <p class="lead text-muted">
                            We are a team of passionate professionals dedicated to providing high-quality services.
                            Our mission is to deliver innovative solutions that empower businesses to thrive in the digital world.
                        </p>
                        <p class="text-muted">
                            Our values are rooted in excellence, integrity, and customer satisfaction. 
                            We believe in working collaboratively with our clients to achieve their goals and drive meaningful impact.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layout>
