@extends('layouts.landing')
@section('content')
    @include('landing.about.content1')
    @include('landing.about.content2')
    <!--
    Start Call To Action
    ==================================== -->
    <section class="call-to-action section-sm bg-1 overly">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Shaping a Future Where Technology Empowers All</h2>
                    <p>Connecting tech minds from around the world is not just a matter of networking and collaboration; it is about building a global community that shares a common purpose and a commitment to using technology to make the world a better place. By embracing diversity, fostering innovation, and tackling global challenges, we can shape a future where technology empowers all of humanity.</p>
                    <a href="contact.html" class="btn btn-main">Start a project with us</a>
                </div>
            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- End section -->
    @include('landing.services')
    @include('landing.team_skills')
    @include('landing.portfolio')
    @include('landing.counter')
    @include('landing.our_team')
    @include('landing.membership')
    @include('landing.testimonial')
    @include('landing.blog')
    @include('landing.contact_us')
    @include('landing.footer')
@endsection
@push('scripts')
<script src="{{ asset('js/custom.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/deznav-dark.js') }}" type="text/javascript"></script>
@endpush