{{-- Header & footer --}}
@extends('layouts.header')

{{-- All Content --}}
@section('content')
    <div class="container">
        <div class="welcome-container">
            <p class="intro-text">Welcome! We're excited to learn more about you.</p>
            <p class="intro-text">Please share your professional journey with us by uploading your CV. Your achievements and
                experiences matter, and by providing your CV in PDF format, you're giving us the opportunity to understand
                your unique skills. As a special bonus, once you upload your CV, our system will analyze it and recommend a
                job role or career path that best suits your submitted qualifications. It's our way of ensuring that your
                talents align with the perfect opportunity. Click below to easily upload your CV and embark on a
                personalized career journey with us.</p>

            <p class="intro-text">If you have immediate access to your up-to-date Curriculum Vitae (CV) in PDF Format, please
                select the "Continue" button.</p>

            <a id="openModalBtnTest" class="continue-button">Continue</a>
        </div>
    </div>
    <div id="myModal" class="modal">
        <div class="modal-content">
            <div class="banner">
                <img src="{{ asset('assets/img/frame.png') }}" alt="">
                <h1>CV Upload</h1>
                <span class="close">&times;</span>
            </div>
            <div class="cv_form">

                <div id="form-errors"></div>

                <form method="POST" id="my_form" data-parsley-validate>

                    @csrf
                    <fieldset class="custom-fieldset">
                        <legend class="custom-legend">Contact</legend>
                        {{-- First Name --}}
                        <div class="cv_upload_form">
                            <label for="first_name">First Name <span id="span">*</span></label>
                            <input type="text" id="first_name" name="first_name" placeholder="Enter First Name"
                                value="{{ old('first_name') }}">
                            <div class="form-errors" id="first_name_errors"></div>
                        </div>

                        {{-- Last Name  --}}
                        <div class="cv_upload_form">
                            <label for="last_name">Last Name <span id="span">*</span></label>
                            <input type="text" id="last_name" name="last_name" placeholder="Enter Last Name">
                            <div class="form-errors" id="last_name_errors"></div>
                        </div>

                        {{-- Email --}}
                        <div class="cv_upload_form">
                            <label for="email">Email <span id="span">*</span></label>
                            <input type="email" id="email" name="email" placeholder="Enter Email">
                            <div class="form-errors" id="email_errors"></div>
                        </div>

                        {{-- Country --}}
                        <div class="cv_upload_form">
                            <label for="country">Country <span id="span">*</span></label>
                            <select name="country" id="country">
                                <option disabled selected>Choose Country</option>
                                <option value="brunei">Brunei</option>
                                <option value="cambodia">Cambodia</option>
                                <option value="indonesia">Indonesia</option>
                                <option value="laos">Laos</option>
                            </select>
                            <div class="form-errors" id="country_errors"></div>
                        </div>

                        {{-- Mobile Phone Number --}}
                        <div class="cv_upload_form">
                            <label for="phone_number">Mobile Phone Number <span id="span">*</span></label>
                            <input type="text" id="phone_number" name="phone_number" placeholder="Enter Phone Number">
                            <div class="form-errors" id="phone_number_errors"></div>
                        </div>
                    </fieldset>

                    <fieldset class="custom-fieldset">
                        <legend class="custom-legend">Other</legend>

                        {{-- Date of Birth --}}
                        <div class="cv_upload_form">
                            <label for="date_of_birth">Date of Birth <span id="span">*</span></label>
                            <input type="date" id="date_of_birth" name="date_of_birth">
                            <div class="form-errors" id="date_of_birth_errors"></div>

                        </div>

                        {{-- Country Residence Status  --}}
                        <div class="cv_upload_form">
                            <label for="residence_status">Country Residence Status <span id="span">*</span></label>
                            <select name="residence_status" id="residence_status">
                                <option disabled selected>Choose Country Residence Status</option>
                                <option value="citizen">Citizen</option>
                                <option value="permanent_resident">Permanent Resident</option>
                                <option value="long_term_visitor_pass_holder">Long Term Visitor Pass Holder</option>
                                <option value="other">Other</option>
                            </select>
                            <div class="form-errors" id="residence_status_errors"></div>
                        </div>

                        {{-- Highest Academic Qualification  --}}
                        <div class="cv_upload_form">
                            <label for="academic_qualification">Highest Academic Qualification <span
                                    id="span">*</span></label>
                            <select name="academic_qualification" id="academic_qualification">
                                <option disabled selected>Choose Academic Qualification</option>
                                <option value="phd">PhD</option>
                                <option value="masters">Masters</option>
                                <option value="postgraduate">Postgraduate</option>
                                <option value="bachelors">Bachelors</option>
                                <option value="diploma">Diploma</option>
                                <option value="higher_nitec">Higher Nitec</option>
                                <option value="nitec">Nitec</option>
                                <option value="o_level">O Level</option>
                                <option value="n_level">N Level</option>
                                <option value="wpln">WPLN</option>
                                <option value="vocational_certificates">Vocational Certificates</option>
                                <option value="none">None</option>
                            </select>
                            <div class="form-errors" id="academic_qualification_errors"></div>
                        </div>
                    </fieldset>

                    <fieldset class="custom-fieldset">
                        <legend class="custom-legend">Terms of Use and Privacy Policy</legend>
                        {{-- Terms of Use Acknowledged   --}}
                        <div class="cv_upload_form">
                            <label for="terms_acknowledged">Terms of Use Acknowledged <span
                                    id="span">*</span></label>

                            <div class="radio-buttons">
                                <span>
                                    <input type="radio" name="terms_acknowledged" value="1"> Yes
                                </span>
                                <span>
                                    <input type="radio" name="terms_acknowledged" value="0"> No
                                    <div class="form-errors" id="terms_acknowledged_errors"></div>
                                </span>


                            </div>


                        </div>

                        {{-- Privacy Policy Acknowledged  --}}
                        <div class="cv_upload_form">
                            <label for="privacy_acknowledged">Privacy Policy Acknowledged <span
                                    id="span">*</span></label>
                            <div class="radio-buttons">
                                <span>
                                    <input type="radio" name="privacy_acknowledged" value="1"> Yes
                                </span>
                                <span>
                                    <input type="radio" name="privacy_acknowledged" value="0"> No
                                </span>
                            </div>
                            <div class="form-errors" id="privacy_acknowledged_errors"></div>

                        </div>
                    </fieldset>
                    <fieldset class="custom-fieldset">
                        <legend class="custom-legend">CV Upload</legend>
                        {{-- CV in PDF Format  --}}
                        <div class="cv_upload_form">
                            <label for="cv_pdf">CV in PDF Format <span id="span">*</span></label>
                            <br>
                            <input type="file" id="cv_pdf" name="cv_pdf" accept=".pdf,.docx,.doc">
                            <div class="form-errors" id="cv_pdf_errors"></div>
                        </div>
                    </fieldset>


                    <div class="submit_btn_div">
                        <input type="submit" class="submit_btn" value="Upload CV" id="btnSubmit">

                    </div>


                </form>
            </div>
        </div>
    </div>


    <div id="myModal" class="modal">
        <div class="modal-content">
            <div class="banner">
                <img src="{{ asset('assets/img/frame.png') }}" alt="">
                <h1>CV Upload</h1>
                <span class="close">&times;</span>
            </div>
            <div class="cv_form">

                <div id="form-errors"></div>

                <form method="POST" id="my_form" data-parsley-validate>

                    @csrf

                    {{-- First Name --}}
                    <div class="cv_upload_form">
                        <label for="first_name">First Name <span id="span">*</span></label>
                        <input type="text" id="first_name" name="first_name" placeholder="Enter First Name"
                            value="{{ old('first_name') }}">
                        <div class="form-errors" id="first_name_errors"></div>
                    </div>

                    {{-- Last Name  --}}
                    <div class="cv_upload_form">
                        <label for="last_name">Last Name <span id="span">*</span></label>
                        <input type="text" id="last_name" name="last_name" placeholder="Enter Last Name">
                        <div class="form-errors" id="last_name_errors"></div>
                    </div>

                    {{-- Email --}}
                    <div class="cv_upload_form">
                        <label for="email">Email <span id="span">*</span></label>
                        <input type="email" id="email" name="email" placeholder="Enter Email">
                        <div class="form-errors" id="email_errors"></div>
                    </div>

                    {{-- Country --}}
                    <div class="cv_upload_form">
                        <label for="country">Country <span id="span">*</span></label>
                        <select name="country" id="country">
                            <option disabled selected>Choose Country</option>
                            <option value="brunei">Brunei</option>
                            <option value="cambodia">Cambodia</option>
                            <option value="indonesia">Indonesia</option>
                            <option value="laos">Laos</option>
                        </select>
                        <div class="form-errors" id="country_errors"></div>
                    </div>

                    {{-- Mobile Phone Number --}}
                    <div class="cv_upload_form">
                        <label for="phone_number">Mobile Phone Number <span id="span">*</span></label>
                        <input type="text" id="phone_number" name="phone_number" placeholder="Enter Phone Number">
                        <div class="form-errors" id="phone_number_errors"></div>
                    </div>




                    {{-- Date of Birth --}}
                    <div class="cv_upload_form">
                        <label for="date_of_birth">Date of Birth <span id="span">*</span></label>
                        <input type="date" id="date_of_birth" name="date_of_birth">
                        <div class="form-errors" id="date_of_birth_errors"></div>

                    </div>

                    {{-- Country Residence Status  --}}
                    <div class="cv_upload_form">
                        <label for="residence_status">Country Residence Status <span id="span">*</span></label>
                        <select name="residence_status" id="residence_status">
                            <option disabled selected>Choose Country Residence Status</option>
                            <option value="citizen">Citizen</option>
                            <option value="permanent_resident">Permanent Resident</option>
                            <option value="long_term_visitor_pass_holder">Long Term Visitor Pass Holder</option>
                            <option value="other">Other</option>
                        </select>
                        <div class="form-errors" id="residence_status_errors"></div>
                    </div>

                    {{-- Highest Academic Qualification  --}}
                    <div class="cv_upload_form">
                        <label for="academic_qualification">Highest Academic Qualification <span
                                id="span">*</span></label>
                        <select name="academic_qualification" id="academic_qualification">
                            <option disabled selected>Choose Academic Qualification</option>
                            <option value="phd">PhD</option>
                            <option value="masters">Masters</option>
                            <option value="postgraduate">Postgraduate</option>
                            <option value="bachelors">Bachelors</option>
                            <option value="diploma">Diploma</option>
                            <option value="higher_nitec">Higher Nitec</option>
                            <option value="nitec">Nitec</option>
                            <option value="o_level">O Level</option>
                            <option value="n_level">N Level</option>
                            <option value="wpln">WPLN</option>
                            <option value="vocational_certificates">Vocational Certificates</option>
                            <option value="none">None</option>
                        </select>
                        <div class="form-errors" id="academic_qualification_errors"></div>


                    </div>

                    {{-- Terms of Use Acknowledged   --}}
                    <div class="cv_upload_form">
                        <label for="terms_acknowledged">Terms of Use Acknowledged <span id="span">*</span></label>

                        <div class="radio-buttons">
                            <span>
                                <input type="radio" name="terms_acknowledged" value="1"> Yes
                            </span>
                            <span>
                                <input type="radio" name="terms_acknowledged" value="0"> No
                            </span>

                            <div class="form-errors" id="terms_acknowledged_errors"></div>

                        </div>


                    </div>

                    {{-- Privacy Policy Acknowledged  --}}
                    <div class="cv_upload_form">
                        <label for="privacy_acknowledged">Privacy Policy Acknowledged <span
                                id="span">*</span></label>
                        <div class="radio-buttons">
                            <span>
                                <input type="radio" name="privacy_acknowledged" value="1"> Yes
                            </span>
                            <span>
                                <input type="radio" name="privacy_acknowledged" value="0"> No
                            </span>
                        </div>
                        <div class="form-errors" id="privacy_acknowledged_errors"></div>

                    </div>

                    {{-- CV in PDF Format  --}}
                    <div class="cv_upload_form">
                        <label for="cv_pdf">CV in PDF Format <span id="span">*</span></label>
                        <br>
                        <input type="file" id="cv_pdf" name="cv_pdf" accept=".pdf,.docx,.doc">
                        <div class="form-errors" id="cv_pdf_errors"></div>
                    </div>


                    <div class="submit_btn_div">
                        <input type="submit" class="submit_btn" value="Upload CV" id="btnSubmit">

                    </div>

                </form>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#my_form').submit(function(e) {
                e.preventDefault();
                var form = $('#my_form')[0];
                var data = new FormData(form);
                console.log(data);

                $.ajax({
                    type: "POST",
                    url: "{{ route('add.store') }}",
                    data: data,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        console.log('Success Response:', response);

                        // Check if there are errors in the response
                        if (!response.res) {
                            // Clear existing error messages
                            $('#output').html('');

                            // Loop through each error and display it
                            $.each(response.errors, function(key, value) {
                                console.log('Error:', key, value);
                                $('#output').append('<p>' + value + '</p>');
                            });
                        } else {
                            toast_function("success", "Data created successfully", 5000);
                            $('#output').html(response.res);
                            $('#btnSubmit').prop('disabled', true);
                            $("input[type='text']").val('');
                            $("input[type='email']").val('');
                            $("input[type='file']").val('');
                            $("input[type='date']").val('');
                            $("select").val('');

                            $("input[type='radio']").prop('checked', false);
                            sweetAlertFunction("success",
                                "CV uploaded successfully! Thank you for submitting your application."
                            );

                        }

                    },
                    error: function(error) {
                        console.error('AJAX Error:', error.responseJSON.exception);
                        if (error.responseJSON.errors) {
                            // Display a general error message for form validation errors
                            toast_function("error",
                                "An error occurred. Please check the form for errors.", 5000
                            );
                        } else if (error.responseJSON.exception ===
                            'Illuminate\\Database\\UniqueConstraintViolationException') {
                            // Display a specific error message for duplicate entry violation
                            toast_function("error",
                                "Email address already exists. Please use a different email.",
                                5000);
                        }



                        var fields = [
                            'first_name',
                            'last_name',
                            'email',
                            'country',
                            'phone_number',
                            'date_of_birth',
                            'residence_status',
                            'academic_qualification',
                            'terms_acknowledged',
                            'privacy_acknowledged',
                            'cv_pdf'
                        ];

                        // Loop through each field and display errors
                        fields.forEach(function(field) {
                            displayError(field, error);
                        });

                    },
                    complete: function() {
                        $('#btnSubmit').prop('disabled', false);
                    }
                });
            });
        });
    </script>
@endsection
