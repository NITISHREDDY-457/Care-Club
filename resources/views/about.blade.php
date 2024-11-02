@extends('layouts.app')


@section('content')
    <main role="main">

        <div class="container mt-md-5">
            <!-- Three columns of text below the carousel -->
            <div class="row">
              <h2 class="text-center">Team Members</h2>
              @foreach ($member as $person)
                  <div class="col-md-4 text-center">
                    <div class="card">
                        <div class="card-title mt-2">
                            <div class="rounded-circle mx-auto" style="width:150px; height:150px; background:url({{ asset('images/members/'.$person->image) }}) center no-repeat ; background-size :cover;" ></div>
                        </div>
                        <div class="card-body">
                            <h4 class="fw-bold mb-0">{{ $person->name }}</h4>
                            <small class="text-muted">&horbar; {{ $person->designation }}</small>
                            <p class="text-italic fw-light my-2">
                                <i class="fa fa-quote-left text-muted fa-sm"></i>
                                {{ $person->quote }}
                                <i class="fa fa-quote-right text-muted fa-sm"></i>
                            </p>
                        </div>
                    </div>
                </div>
              @endforeach
            </div><!-- /.row -->

            <!-- START THE FEATURETTES -->
              <div class="row featurette my-md-5 mt-5 mt-md-5">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Awards & Certification</h2>
                    <p class="lead">Care Club Foundation received the best service award...

                      On the occasion of the 3rd anniversary of Atmiya Charitable Organization held at the Ramakrishna Degree College Auditorium, Nandyala Town, the Chief Guests awarded the Best Service Award in recognition of our selfless service activities without any profit motive as we are for the welfare of the society with a humanitarian heart.</p>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image rounded mx-auto img-fluid mx-auto" src="{{ asset('images/awards.png') }}"
                        alt="Generic placeholder image">
                </div>
              </div>

              <div class="row featurette my-md-5 mt-5 mt-md-5">
                <div class="col-md-7 order-md-2">
                  <h2 class="featurette-heading">Atmiya Seva Samithi</h2>
                  <p class="lead">President of Atmiya Seva Sanstha Mrs. Munagala Swathi, Manager of Ramakrishna Educational Institutions Mrs. Pragathi, Principal of Ramakrishna College Shri k.B.V. Subbaiah Garu, Nandyala District Red Cross Branch Chairman Sri Parla Dastagiri Garu, Mula Math Temple Chairman Sri Venkat Reddy Garu, Eminent Homeopathic Doctor Mrs. Sasikala Garu,
                    Atmiya Seva Sanstha Secretary Mr. Battala Venkatasubbaiah, Apadbandhava Seva Trust Secretary Mr. Suresh Kumar, Retired Principal Mr. Muralikrishna gave mementos to Care Club.We are dedicating this award to Care Club Foundation members to donors who have contributed to Care Club.</p>
                </div>
                <div class="col-md-5 order-md-1">
                  <img class="featurette-image rounded mx-auto img-fluid mx-auto" src="{{ asset('images/awards2.png') }}"
                      alt="Generic placeholder image">
                </div>
              </div>

              <div class="row featurette my-md-5 mt-5 mt-md-5">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Mother Teresa
                      </h2>
                      <blockquote>“Not all of us can do great things. But we can do small things with great love”</blockquote>
                    <p class="lead">Renowned for her unwavering commitment to the poor and orphaned, she dedicated her life to providing care and love, founding the Missionaries of Charity to support those in need.</p>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image rounded mx-auto img-fluid mx-auto" src="{{ asset('images/Mother.png') }}"
                        alt="Generic placeholder image">
                </div>
              </div>



            <!-- /END THE FEATURETTES -->

        </div><!-- /.container -->

        <p class="text-center"><a href="#">Back to top</a></p>
    </main>
@endsection
@section('javascript')
    <script></script>
@endsection
