@extends('layout.master')

@section('custom-css')

@endsection

@section('title', 'Почетна')

@section('content')
    @include('layout.navbar')

    <div class="container-fluid" style="margin-top: 75px">
        <div class="row">
            <div class="col-1" style="background-color: red; height: 20px"></div>
            <div class="col-1" style="background-color: #edaf19; height: 20px"></div>
            <div class="col-1" style="background-color: #edd219; height: 20px"></div>
            <div class="col-1" style="background-color: #329b1e; height: 20px"></div>
            <div class="col-1" style="background-color: #1463a7; height: 20px"></div>
            <div class="col-1" style="background-color: #9e479b; height: 20px"></div>
            <div class="col-1" style="background-color: #d03d6b; height: 20px"></div>
            <div class="col-1" style="background-color: #f39bf8; height: 20px"></div>
            <div class="col-1" style="background-color: #6acdf0; height: 20px"></div>
            <div class="col-1" style="background-color: #7f6226; height: 20px"></div>
            <div class="col-1" style="background-color: #000000; height: 20px"></div>
            <div class="col-1" style="background-color: #329b1e; height: 20px"></div>
        </div>
        <div class="row">
            <div class="col-md-12 bannerSection"></div>
        </div>
        <div class="row">
            <div class="col-1" style="background-color: red; height: 20px"></div>
            <div class="col-1" style="background-color: #edaf19; height: 20px"></div>
            <div class="col-1" style="background-color: #edd219; height: 20px"></div>
            <div class="col-1" style="background-color: #329b1e; height: 20px"></div>
            <div class="col-1" style="background-color: #1463a7; height: 20px"></div>
            <div class="col-1" style="background-color: #9e479b; height: 20px"></div>
            <div class="col-1" style="background-color: #d03d6b; height: 20px"></div>
            <div class="col-1" style="background-color: #f39bf8; height: 20px"></div>
            <div class="col-1" style="background-color: #6acdf0; height: 20px"></div>
            <div class="col-1" style="background-color: #7f6226; height: 20px"></div>
            <div class="col-1" style="background-color: #000000; height: 20px"></div>
            <div class="col-1" style="background-color: #329b1e; height: 20px"></div>
        </div>
    </div>

    <div class="container p-5 mt-5">
        <div class="row">
            <div class="col-md-12">
                <h1 class="mb-5">Teaching Affirmative Psychotherapy</h1>
                <div class="col-md-6">
                    <h3>
                        The Affirmative Couch is a committed advocate for the mental
                        health of LGBTQIA+* , consensually non-monogamous , and kink
                        communities.
                    </h3>
                    <br />
                    <h3>
                        As an APA-approved sponsor of continuing education, we offer
                        online CE courses for mental health professionals seeking training
                        on clinical work with sexuality-, gender-, and
                        relationship-expansive clients. Psychotherapists can purchase
                        courses individually, or through our Annual Membership or Lifetime
                        Membership.
                    </h3>
                    <br />
                    <h3>
                        We provide affirmative organizational development and training for
                        medical and mental health clinics and group practices to create
                        systemic change and become leaders in affirmative health care. Our
                        library of courses is available for clinics at a group rate.
                    </h3>
                    <br />
                    <h3>
                        Our online publication The Affirmative Couch Magazine features
                        articles written by and for mental health care providers that
                        explore the unique needs of these communities and provide insight
                        into best practices.
                    </h3>
                    <br />
                    <h3>
                        *LGBTQIA+ refers to lesbian, gay, bisexual, pansexual, queer,
                        transgender, gender nonbinary, intersex, asexual, and other
                        related communities. Consensually non-monogamous (CNM) refers to
                        polyamorous, swinging, relationship anarchy and other open
                        relationship models. Kink refers to fetish, bondage, discipline,
                        domination, submission, sadism, masochism, and other non-vanilla
                        communities.
                    </h3>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid text-white">
        <div class="row bg-dark">
            <div class="col-md-12 text-center p-5">
                <h3 class="text-uppercase fw-bold">interested in contributing?</h3>
                <p>
                    If you are a mental health professional who wants to share your
                    expertise…
                </p>
                <a href="{{ route('about.contact') }}" class="btn btn-outline-light text-uppercase rounded-pill">
                    contact us
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-1" style="background-color: red; height: 20px"></div>
            <div class="col-1" style="background-color: #edaf19; height: 20px"></div>
            <div class="col-1" style="background-color: #edd219; height: 20px"></div>
            <div class="col-1" style="background-color: #329b1e; height: 20px"></div>
            <div class="col-1" style="background-color: #1463a7; height: 20px"></div>
            <div class="col-1" style="background-color: #9e479b; height: 20px"></div>
            <div class="col-1" style="background-color: #d03d6b; height: 20px"></div>
            <div class="col-1" style="background-color: #f39bf8; height: 20px"></div>
            <div class="col-1" style="background-color: #6acdf0; height: 20px"></div>
            <div class="col-1" style="background-color: #7f6226; height: 20px"></div>
            <div class="col-1" style="background-color: #000000; height: 20px"></div>
            <div class="col-1" style="background-color: #329b1e; height: 20px"></div>
        </div>
    </div>

    @include('layout.footer')
@endsection
