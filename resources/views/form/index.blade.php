{{-- Header & footer --}}
@extends('layouts.header')

{{-- All Content --}}
@section('content')
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"
        data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content form_row">
                <div class="row banner">
                    <div class="col-sm-5 col-12 logo ">
                        <img src="{{ asset('assets/img/lithan.com.png') }}" class="logo" width="250">
                    </div>

                    <div class="col-sm-7 col-12 title ">
                        <h1>CV Upload</h1>
                    </div>
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
                                    <option class="disabled" disabled selected>Choose Country</option>
                                    <option value="brunei">Brunei</option>
                                    <option value="cambodia">Cambodia</option>
                                    <option value="indonesia">Indonesia</option>
                                    <option value="laos">Laos</option>
                                    <option value="malaysia">Malaysia</option>
                                    <option value="myanmar">Myanmar</option>
                                    <option value="philippines">Philippines</option>
                                    <option value="singapore">Singapore</option>
                                    <option value="thailand">Thailand</option>
                                    <option value="vietnam">Vietnam</option>

                                </select>
                                <div class="form-errors" id="country_errors"></div>
                            </div>

                            {{-- Mobile Phone Number --}}
                            <div class="cv_upload_form">
                                <label for="phone_number">Mobile Phone Number <span id="span">*</span></label>
                                <input type="text" id="phone_number" name="phone_number"
                                    placeholder="Enter Phone Number">
                                <div class="form-errors" id="phone_number_errors"></div>
                            </div>
                        </fieldset>

                        <fieldset class="custom-fieldset">
                            <legend class="custom-legend">Other</legend>

                            {{-- Date of Birth --}}
                            <div class="cv_upload_form">
                                <label for="date_of_birth">Date of Birth <span id="span">*</span></label>
                                <input type="date" id="date_of_birth" name="date_of_birth" placeholder="dd-mm-yyyy">
                                <div class="form-errors" id="date_of_birth_errors"></div>
                            </div>

                            {{-- Country Residence Status --}}
                            <div class="cv_upload_form">
                                <label for="residence_status">Country Residence Status <span id="span">*</span></label>
                                <select name="residence_status" id="residence_status">
                                    <option disabled selected class="disabled">Choose Country Residence Status</option>
                                    <option value="citizen" class="singapore-options">Citizen</option>
                                    <option value="permanent_resident" class="singapore-options">Permanent
                                        Resident</option>
                                    <option value="long_term_visitor_pass_holder" class="singapore-options">Long
                                        Term Visitor Pass Holder</option>
                                    <option value="other">Other</option>
                                </select>
                                <div class="form-errors" id="residence_status_errors"></div>
                            </div>

                            {{-- Highest Academic Qualification  --}}
                            <div class="cv_upload_form">
                                <label for="academic_qualification">Highest Academic Qualification <span
                                        id="span">*</span></label>
                                <select name="academic_qualification" id="academic_qualification">
                                    <option disabled selected class="disabled">Choose Academic Qualification</option>
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

                            {{-- Terms of Use Acknowledged --}}
                            <div class="cv_upload_form">
                                <label for="terms_acknowledged">
                                    <a target="__blank" href="https://www.lithan.com/terms-of-use/">Terms of Use
                                        Acknowledged <span id="span">* </span></a>
                                </label>
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

                            {{-- Privacy Policy Acknowledged --}}
                            <div class="cv_upload_form">
                                <label for="privacy_acknowledged">
                                    <a target="__blank" href="https://www.lithan.com/privacy-policy/">Privacy Policy
                                        Acknowledged <span id="span">*</span></a>
                                </label>
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
                        <!-- Attachment Fieldset -->
                        <fieldset class="custom-fieldset" id="attachmentFieldset" style="display: none;">
                            <legend class="custom-legend">Attachment</legend>
                            {{-- CV in PDF Format --}}
                            <div class="cv_upload_form">
                                {{-- <label for="cv_pdf">CV in PDF, DOC, DOCX, TXT Format <span --}}
                                <label for="cv_pdf">CV in PDF <span id="span">*</span></label>
                                <br>
                                {{-- <input type="file" id="cv_pdf" name="cv_pdf" accept=".pdf,.docx,.doc, txt"> --}}
                                <input type="file" id="cv_pdf" name="cv_pdf" accept=".pdf,.docx,.doc, txt">
                                <div class="form-errors" id="cv_pdf_errors"></div>
                            </div>
                        </fieldset>

                        <div class="submit_btn_div">
                            <input type="submit" class="submit_btn" value="Upload" id="btnSubmit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(() => {
            flatpickr("#date_of_birth", {
                dateFormat: "d-m-Y",
            });
            $("#date_of_birth").on('change', function() {
                var selected = $(this).val();
                console.log(selected);
            })

            // Show modal on page load
            $('#myModal').fadeIn();
            $('.modal-content').addClass('show');

            // Handle form submission
            $('#my_form').submit((e) => {
                e.preventDefault();
                const form = $('#my_form')[0];
                const data = new FormData(form);

                $.ajax({
                    type: "POST",
                    url: "{{ route('add.store') }}",
                    data: data,
                    processData: false,
                    contentType: false,
                    success: (response) => {
                        if (!response.res) {
                            $('#output').html('');
                            $.each(response.errors, (key, value) => {
                                $('#output').append('<p>' + value + '</p>');
                            });
                        } else {
                            toast_function("success", "Data created successfully", 9000);
                            $('#output').html(response.res);
                            $('#btnSubmit').prop('disabled', true);
                            $("input[type='text'], input[type='email'], input[type='file'], input[type='date'], select")
                                .val('');
                            $("input[type='radio']").prop('checked', false);
                            sweetAlertFunction("success",
                                "CV uploaded successfully! Thank you for submitting your application."
                            );
                        }
                    },
                    error: (error) => {
                        if (error.responseJSON.errors) {
                            toast_function("error",
                                "All fields need to be filled.", 9000
                            );
                        } else if (error.responseJSON.exception ===
                            'Illuminate\\Database\\UniqueConstraintViolationException') {
                            toast_function("error",
                                "Email address already exists. Please use a different email.",
                                5000);
                        }

                        const fields = [
                            'first_name', 'last_name', 'email', 'country', 'phone_number',
                            'date_of_birth',
                            'residence_status', 'academic_qualification',
                            'terms_acknowledged', 'privacy_acknowledged',
                            'cv_pdf'
                        ];

                        fields.forEach((field) => displayError(field, error));
                    },
                    complete: () => {
                        $('#btnSubmit').prop('disabled', false);
                    }
                });
            });

            // Hide Singapore options initially and show on country change
            $(".singapore-options").hide();
            $("#country").change(() => {
                $(".singapore-options").toggle($("#country").val() === "singapore");
            });

            // Show/hide attachment fieldset based on radio button selection
            $('input[name="terms_acknowledged"], input[name="privacy_acknowledged"]').change(() => {
                $('#attachmentFieldset').toggle(
                    $('input[name="terms_acknowledged"]:checked').val() === '1' &&
                    $('input[name="privacy_acknowledged"]:checked').val() === '1'
                );
            });
        });
    </script>
@endsection
