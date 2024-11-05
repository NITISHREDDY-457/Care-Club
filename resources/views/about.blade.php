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
            
              <div class="row featurette my-md-5 mt-5 mt-md-5" style="font-style: italic; font-weight: bold; font-family: 'Montserrat', sans-serif; color: #2c3e50; font-size:30px">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Awards & Certification</h2>
                    <p class="lead" style="font-family: 'Roboto Serif', serif; font-size: 1.25rem; line-height: 1.6; color: #555555; font-style: normal; font-weight: normal;">Care Club Foundation received the best service award...

                      On the occasion of the 3rd anniversary of Atmiya Charitable Organization held at the Ramakrishna Degree College Auditorium, Nandyala Town, the Chief Guests awarded the Best Service Award in recognition of our selfless service activities without any profit motive as we are for the welfare of the society with a humanitarian heart.</p>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image rounded mx-auto img-fluid mx-auto" src="{{ asset('images/awards.png') }}"
                        alt="Generic placeholder image">
                </div>
              </div>

              <div class="row featurette my-md-5 mt-5 mt-md-5" style="font-style: italic; font-weight: bold; font-family: 'Montserrat', sans-serif; color: #2c3e50; font-size:30px">
                <div class="col-md-7 order-md-2">
                  <h2 class="featurette-heading">Collaboration-DONATE TODAY</h2>
                  <p class="lead" style="font-family: 'Roboto Serif', serif; font-size: 1.25rem; line-height: 1.6; color: #555555; font-style: normal; font-weight: normal;">
                    In a powerful partnership, Donate Today and CareClub Foundation have come together to amplify their impact and better serve those in need. This collaboration marks a milestone in their shared commitment to uplift underprivileged communities, provide essential resources, and support sustainable development. With Donate Today's vast network of compassionate donors and CareClub Foundation's expertise in on-the-ground initiatives, this partnership will focus on addressing critical areas such as healthcare, education, and economic empowerment.
                    </p>
                </div>
                <div class="col-md-5 order-md-1">
                  <img class="featurette-image rounded mx-auto img-fluid mx-auto" src="{{ asset('images/collab.png') }}"
                      alt="Generic placeholder image">
                </div>
              </div>

              <div class="row featurette my-md-5 mt-5 mt-md-5" style="font-style: italic; font-weight: bold; font-family: 'Montserrat', sans-serif; color: #2c3e50; font-size:30px">
                <div class="col-md-7">
                    <h2 class="featurette-heading">
                      </h2>
                      <blockquote>Atmiya Seva Samithi</blockquote>
                    <p class="lead" style="font-family: 'Roboto Serif', serif; font-size: 1.25rem; line-height: 1.6; color: #555555; font-style: normal; font-weight: normal;">President of Atmiya Seva Sanstha Mrs. Munagala Swathi, Manager of Ramakrishna Educational Institutions Mrs. Pragathi, Principal of Ramakrishna College Shri k.B.V. Subbaiah Garu, Nandyala District Red Cross Branch Chairman Sri Parla Dastagiri Garu, Mula Math Temple Chairman Sri Venkat Reddy Garu, Eminent Homeopathic Doctor Mrs. Sasikala Garu,
                      Atmiya Seva Sanstha Secretary Mr. Battala Venkatasubbaiah, Apadbandhava Seva Trust Secretary Mr. Suresh Kumar, Retired Principal Mr. Muralikrishna gave mementos to Care Club.We are dedicating this award to Care Club Foundation members to donors who have contributed to Care Club.</p>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image rounded mx-auto img-fluid mx-auto" src="{{ asset('images/awards2.png') }}"
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
