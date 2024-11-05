@extends('layouts.app')

@section('content')
<div class="container">
    <main>
        <div class="pt-5 text-center">
            <h2>Contact Us</h2>
            <p class="lead">For any enquiry! Please contact us</p>
        </div>

        <div class="mt-md-5">
            <h3>Where to reach us!</h3>
            <div class="row">
                <div class="col-md-6">
                    <!-- Contact Information Cards -->
                    <div class="card my-4 shadow-sm border-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-3 d-flex align-items-center justify-content-center">
                                    <i class="text-success fa fa-map-marker fa-3x me-1"></i>
                                </div>
                                <div class="col-9 d-flex align-items-center">
                                    <p class="h5">{{ env('TRUST_NAME') }}, {{ env('TRUST_ADDRESS') }}, {{ env('TRUST_CITY') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card my-4 shadow-sm border-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-3 d-flex align-items-center justify-content-center">
                                    <i class="text-primary fa fa-phone-alt fa-3x me-1"></i>
                                </div>
                                <div class="col-9 d-flex align-items-center">
                                    <p class="h5">{{ env('TRUST_PHONE') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card my-4 shadow-sm border-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-3 d-flex align-items-center justify-content-center">
                                    <i class="text-warning fa fa-envelope fa-3x me-1"></i>
                                </div>
                                <div class="col-9 d-flex align-items-center">
                                    <p class="h5">{{ env('TRUST_EMAIL') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <iframe src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=sarvayapalli road mydukur&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
                    class="rounded shadow" width="100%" height="340" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

        <div class="row mt-md-5">
            <div class="col-md-12 col-lg-10 col-xxl-8 mt-md-0 mt-5 mx-auto">
                
                <h4 class="mb-2">🙏🔸Helping hands are better than praying lips🔸 🙏
                    
                </h4>
                <p>Please fill in all following fields to make your contribution.</p>
                
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('home.contact.submit') }}">
                            @csrf
                            @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                <strong>Oops!</strong> Please clear below errors:
                                <ul>{!! implode('', $errors->all('<li>:message</li>')) !!}</ul>
                            </div>
                            @endif

                            @if (Session::has('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                <strong>Oops!</strong> {{ Session::get('error') }}
                            </div>
                            @endif

                            @if (Session::has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                {{ Session::get('success') }}
                            </div>
                            @endif

                            <div class="mb-3">
                                <label class="form-label">Your name</label>
                                <input type="text" class="form-control required" name="name" placeholder="Your name" value="{{ old('name') }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email address</label>
                                <input type="text" class="form-control required" name="email" placeholder="Email address" value="{{ old('email') }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Mobile number</label>
                                <input type="text" class="form-control required mobile" name="mobile" placeholder="Mobile number" value="{{ old('mobile') }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Message</label>
                                <textarea class="form-control required" name="message" rows="5" placeholder="Write a message for us...">{{ old('message') }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Type of Donation</label>
                                <input type="hidden" name="donation_type" id="donationType"> <!-- Hidden input to store the donation type -->
                                <div class="d-flex flex-wrap">
                                    <button type="button" class="btn btn-outline-primary me-2 donation-type" data-type="food">
                                        <i class="fa fa-utensils"></i> Food
                                    </button>
                                    <button type="button" class="btn btn-outline-success me-2 donation-type" data-type="clothes">
                                        <i class="fa fa-tshirt"></i> Clothes
                                    </button>
                                    <button type="button" class="btn btn-outline-warning me-2 donation-type" data-type="toys">
                                        <i class="fa fa-puzzle-piece"></i> Toys
                                    </button>
                                </div>
                            </div>

                            <div class="mb-3">
                                <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#birthdayModal">Celebrate a Birthday</button>
                            </div>

                            <!-- Birthday Modal -->
                            <div class="modal fade" id="birthdayModal" tabindex="-1" aria-labelledby="birthdayModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="birthdayModalLabel">Birthday Celebration</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Would you like to organize a birthday celebration for an orphan?</p>
                                            <div class="mb-3">
                                                <label for="location" class="form-label">Location</label>
                                                <input type="text" class="form-control" id="location" name="location" placeholder="Enter location">
                                            </div>
                                            <div class="mb-3">
                                                <label for="birthday_date" class="form-label">Birthday Date</label>
                                                <input type="date" class="form-control" id="birthday_date" name="birthday_date" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="food_items" class="form-label">Select Food Items</label>
                                                <select class="form-select" id="food_items" name="food_items[]" multiple required>
                                                    <optgroup label="Breakfast">
                                                        <option value="idli">Idli</option>
                                                        <option value="dosa">Dosa</option>
                                                        <option value="upma">Upma</option>
                                                    </optgroup>
                                                    <optgroup label="Lunch">
                                                        <option value="rice">Rice</option>
                                                        <option value="dal">Dal</option>
                                                        <option value="rasam">Rasam</option>
                                                        <option value="chicken biriyani">Chicken Biriyani</option>
                                                    </optgroup>
                                                    <optgroup label="Dinner">
                                                        <option value="color rice">Color Rice</option>
                                                        <option value="dal">Dal</option>
                                                        <option value="aloo curry">Aloo Curry</option>
                                                        <option value="egg">Egg</option>
                                                        <option value="chicken curry">Chicken Curry</option>
                                                    </optgroup>
                                                    <optgroup label="Snacks">
                                                        <option value="cake">Cake</option>
                                                        <option value="snacks">Snacks</option>
                                                        <option value="drinks">Drinks</option>
                                                    </optgroup>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary" id="confirmBirthday">Confirm Celebration</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection

@section('javascript')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(function(){
        // Handle form submission with validation
        $('form').on("submit", function(e){
            e.preventDefault();

            let $form = $(this);
            let has_error = false;

            // Validate required fields
            $.each($form.find("input.required"), function(){
                if ($(this).val() === '') {
                    has_error = true;
                    $(this).addClass('is-invalid');
                } else {
                    $(this).removeClass('is-invalid');
                }
            });

            // Check if donation type is selected
            if ($('#donationType').val() === '') {
                has_error = true;
                alert("Please select a donation type.");
            }

            // If no error, submit the form
            if (!has_error) {
                this.submit();
            }
        });

        // Handle donation type button clicks
        $('.donation-type').on('click', function() {
            $('.donation-type').removeClass('selected');
            $(this).addClass('selected');
            const donationType = $(this).data('type');
            $('#donationType').val(donationType);
            toastr.success("Selected donation type: " + donationType, "Success!");
        });

        // Handle birthday confirmation
        $('#confirmBirthday').on('click', function() {
            const location = $('#location').val();
            const birthdayDate = $('#birthday_date').val();
            const foodItems = $('#food_items').val();

            if (location === '' || birthdayDate === '' || foodItems.length === 0) {
                alert('Please fill in all fields for the birthday celebration.');
                return;
            }
            const selectedItems = foodItems.join(', ');

            // Proceed with form submission or additional logic for the birthday celebration
            // Here you can handle the logic for what happens when the birthday is confirmed
            $('#birthdayModal').modal('hide'); // Close the modal
            toastr.success("Birthday celebration confirmed!", "Success!");
        });
    });
</script>
@endsection
