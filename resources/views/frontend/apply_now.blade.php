@extends('frontend.layout')
@section('title', 'Apply Now')
<link rel="stylesheet" href="{{asset('css/test-form.css')}}">
<style>    
    .accordion-item {
            border: 1px solid #ccc;
            border-radius: 5px;
            overflow: hidden;
            margin-bottom: 10px;
        }
        .accordion-header {
            background: #f4f4f4;
            padding: 15px;
            cursor: pointer;
            font-size: 18px;
            transition: background 0.3s;
        }
        .accordion-header:hover {
            background: #ddd;
        }
        .accordion-content {
            max-height: 0;
            overflow: hidden;
            padding: 0 15px;
            background: #fff;
            transition: max-height 0.3s ease-out, padding 0.3s ease-out;
        }
        .accordion-item.active .accordion-content {
            max-height: 200px;
            padding: 15px;
        }

        .btn-primary_2{
            background-color: var(--e-global-color-primary) !important;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .accordion {
                width: 100%; /* Full width on smaller screens */
            }
        }    
        
</style>
@section('main_content') 
<div data-elementor-type="wp-post" data-elementor-id="436" class="elementor elementor-436 elementor-304">        
    <section class="container-lg"style="padding: 40px;">
        <div class="row p-4">
            <div class="col-lg-5 test-content shadow p-4">
                <h3 class="text-light" style="">How To Apply</h3>
                <div class="steps-container" style="list-style: none;">
                    <li class="step">
                        <span class="step-circle">STEP 01</span>
                        <span class="step-text">Register yourself</span>
                    </li>
                    <li class="step-divider" style="height:30px; width:0;"></li>
                    
                    <li class="step">
                        <span class="step-circle">STEP 02</span>
                        <span class="step-text">Verify Email and Mobile</span>
                    </li>
                    <li class="step-divider" style="height:30px; width:0;"></li>
                    
                    <li class="step">
                        <span class="step-circle">STEP 03</span>
                        <span class="step-text">Fill Application Online</span>
                    </li>
                    <li class="step-divider" style="height:30px; width:0;"></li>
                    
                    <li class="step">
                        <span class="step-circle">STEP 04</span>
                        <span class="step-text">Upload Documents (Complete Additional details/Educational Details, Upload photo & Documents)</span>
                    </li>
                    <li class="step-divider" style="height:30px; width:0;"></li>
                
                    <li class="step">
                        <span class="step-circle">STEP 05</span>
                        <span class="step-text">Pay Application fee Online.</span>
                    </li>
                </div>
                
            </div>
            <div class="col-lg-7 form-content">
                <h3>ADMISSIONS OPEN 2025</h3>
                <small>Apply Now to Get Information.</small>

                <div class="form-2">
                    {{-- <div class="btns">
                        <button class="btn btn-primary p-2">Register</button>
                        <button class="btn btn-secondary-2 p-2">Login</button>                        
                    </div>                 --}}

                    <div class="alert alert-success alert-dismissible fade show" role="alert" id="successalert_apply" style="display: none;">
                        <strong>Success</strong> Enquiry Form submitted.
                        <button type="button" onclick="closealert()" style="background-color: transparent !important; color:#000 !important;" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form data-action="{{route('admission-apply')}}" method="POST" style="margin: 8px 0;" id="apply-form">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 col-sm-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <i class="input-group-text input-group-text-2  fa fa-user" id="basic-addon1"></i>
                                    </div>
                                    <input type="text" name="username" class="form-control" placeholder="Username *" aria-label="Username" autocomplete="new-password" aria-describedby="basic-addon1">
                                  </div>
                            </div>

                            {{-- email --}}
                            <div class="col-lg-12 col-sm-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <i class="input-group-text input-group-text-2  fa fa-envelope" id="basic-addon2"></i>
                                    </div>
                                    <input type="email" class="form-control" name="email" placeholder="Enter Email Address *" aria-label="Enter Email Address" aria-describedby="basic-addon2" autocomplete="new-password">
                                  </div>
                            </div>

                            {{-- Phone --}}
                            <div class="col-lg-12 col-sm-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text input-group-text-2"><i class="fa fa-phone"></i></span>
                                    </div>
                                    <input type="tel" class="form-control" name="mobile_number" placeholder="Enter Mobile Number *" aria-label="Enter Mobile Number" aria-describedby="basic-phone" max="10" maxlength="10" autocomplete="new-password">
                                    {{-- <div class="input-group-append">
                                        <button class="btn btn-primary_2" style="height: 38px;" type="button">Send OTP</button>
                                    </div> --}}

                                    <script>
                                        document.getElementById('phone').addEventListener('input', function (e) {
                                            this.value = this.value.replace(/\D/g, ''); // Remove non-numeric characters
                                        });
                                    </script>
                                </div>
                            </div>
                            

                            {{-- otp --}}
                            {{-- <div class="col-lg-12 col-sm-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <i class="input-group-text input-group-text-2 fa fa-key" id="basic-otp"></i>
                                    </div>
                                    <input type="number" class="form-control" placeholder="Enter OTP *" aria-label="Enter OTP" aria-describedby="basic-otp" max="6" maxlength="6">
                                  </div>
                            </div> --}}
                            {{-- state --}}
                            <div class="col-lg-6 col-sm-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <i class="input-group-text input-group-text-2 fa fa-map" id="basic-state"></i>
                                    </div>
                                    {{-- <input type="number" class="form-control" placeholder="Enter OTP *" aria-label="Enter OTP" aria-describedby="basic-state" max="6" maxlength="6"> --}}
                                    <select name="state" class="form-control" aria-label="Enter OTP" aria-describedby="basic-state" id="state">
                                        <option value="" >Select state</option>
                                        <option>Select your state</option>                        
                                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                        <option value="Assam">Assam</option>
                                        <option value="Bihar">Bihar</option>
                                        <option value="Chhattisgarh">Chhattisgarh</option>
                                        <option value="Goa">Goa</option>
                                        <option value="Gujarat">Gujarat</option>
                                        <option value="Haryana">Haryana</option>
                                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                                        <option value="Jharkhand">Jharkhand</option>
                                        <option value="Karnataka">Karnataka</option>
                                        <option value="Kerala">Kerala</option>
                                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                                        <option value="Maharashtra">Maharashtra</option>
                                        <option value="Manipur">Manipur</option>
                                        <option value="Meghalaya">Meghalaya</option>
                                        <option value="Mizoram">Mizoram</option>
                                        <option value="Nagaland">Nagaland</option>
                                        <option value="Odisha">Odisha</option>
                                        <option value="Punjab">Punjab</option>
                                        <option value="Rajasthan">Rajasthan</option>
                                        <option value="Sikkim">Sikkim</option>
                                        <option value="Tamil Nadu">Tamil Nadu</option>
                                        <option value="Telangana">Telangana</option>
                                        <option value="Tripura">Tripura</option>
                                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                                        <option value="Uttarakhand">Uttarakhand</option>
                                        <option value="West Bengal">West Bengal</option>
                                    
                                        <option value="Andaman & Nicobar">Andaman & Nicobar (UT)</option>
                                        <option value="Chandigarh">Chandigarh (UT)</option>
                                        <option value="Dadra & Nagar Haveli and Daman & Diu">Dadra & Nagar Haveli and Daman & Diu (UT)</option>
                                        <option value="Delhi">Delhi [National Capital Territory (NCT)]</option>
                                        <option value="Jammu & Kashmir">Jammu & Kashmir (UT)</option>
                                        <option value="Ladakh">Ladakh (UT)</option>
                                        <option value="Lakshadweep">Lakshadweep (UT)</option>
                                        <option value="Puducherry">Puducherry (UT)</option>                        
                                    </select>
                                  </div>
                            </div>

                            {{-- city --}}
                            <div class="col-lg-6 col-sm-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <i class="input-group-text input-group-text-2 fa fa-map-marker-alt" id="basic-city"></i>
                                    </div>                                    
                                    {{-- <select name="city" class="form-control" aria-label="Enter OTP" aria-describedby="basic-city" id="state">
                                        <option value="" >Select city</option>
                                    </select> --}}

                                    <input type="text" name="city" id="city" class="form-control" placeholder="Enter city">
                                  </div>
                            </div>


                            {{-- discipline --}}
                            <div class="col-lg-12 col-sm-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <i class="input-group-text input-group-text-2 fa fa-graduation-cap" id="basic-discipline"></i>
                                    </div>                                    
                                    <select name="discipline" class="form-control" aria-label="Enter OTP" aria-describedby="basic-discipline" id="state">
                                        <option value="" >Select discipline</option>
                                        <option value="cse">Computer Science and Engineering</option>
                                        <option value="ai_ml">CSE (Artificial Intelligence and Machine Learning)</option>
                                        <option value="cs_it">Computer Science & Information Technology</option>
                                        <option value="ece">Electronics & Communication Engineering</option>
                                    </select>
                                  </div>
                            </div>

                            {{-- specialization --}}
                            {{-- <div class="col-lg-6 col-sm-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <i class="input-group-text input-group-text-2 fa fa-lightbulb" id="basic-specialization"></i>
                                    </div>                                    
                                    <select name="specialization" class="form-control" aria-label="Enter OTP" aria-describedby="basic-specialization" id="state">
                                        <option value="" >Select specialization</option>
                                    </select>
                                  </div>
                            </div> --}}

                            {{-- schedule a call --}}
                            <div class="col-lg-12 col-sm-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <i class="input-group-text input-group-text-2 fa fa-calendar" title="Schedule a call" id="basic-schedule"></i>
                                    </div>                                    
                                    <input type="date" title="Schedule a call" name="schedule_call" id="schedule" aria-describedby="basic-schedule" class="form-control" placeholder="Schedule a Call">
                                  </div>
                            </div>

                            <div class="col-lg-12 col-sm-12">
                                <div class="box" style="width: 100%; display: flex; align-items: flex-start; gap: 10px;padding: 10px;">
                                    <input type="checkbox" id="customControlAutosizing" name="checked" style="margin: 0; width: 16px; height: 16px;">
                                    <label for="customControlAutosizing" style="margin-bottom: 0; font-size: 11px; user-select:none;">
                                        I authorize {{env('COLLEGE_NAME_SHORT')}} to contact me with notifications / updates via call/ email/ SMS/ WhatsApp which overrides DND/NDNC registration *    
                                    </label>                                    
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-primary_2 w-100 p-3 ">APPLY NOW <i class="fa-solid fa-paper-plane"></i></button>
                                {{-- <a href="#">Already have an Account? Login</a> --}}
                            </div>                            
                        </div>                        
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('#apply-form').on('submit', function (e) {
            e.preventDefault();
    
            var form = $(this);
            var url = form.data('action');
            var formData = form.serialize();
    
            $.ajax({
                type: 'POST',
                url: url,
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                beforeSend: function () {
                    // Optional: show loading spinner or disable button
                },
                success: function (response) {                
                    $('#successalert_apply').fadeIn(); // Show the alert
                    form[0].reset(); // Reset form
                    setTimeout(() => {
                        $('#successalert_apply').fadeOut();
                    }, 5000);
    
                    
                    
                    // Optional: close modal/popup
                },
                error: function (xhr) {
                    let errors = xhr.responseJSON?.errors;
                    if (errors) {
                        let firstError = Object.values(errors)[0][0];
                        alert('Error: ' + firstError);
                    } else {
                        alert('An error occurred. Please try again.');
                    }
                }
            });
        });
    });
</script>
    

@endsection

