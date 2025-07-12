<style>
    body {
      background-color: #f8f9fa;
    }
    footer {
      /* background-color: var(--e-global-color-primary); */
      background-color: #213153;
      color: #fff;
    }
    .btn-primary_2{
      transition: all ease 1s;
    }
    .btn-primary_2:hover{
      scale: 1.1;
    }
    footer h3 {
      color: #fff !important;
    }
    footer h3 a{
      color: #fff !important;
      text-decoration: none !important;
    }
    .footer-section ul {
      padding-left: 0;
      list-style: none;
    }
    .footer-section ul li {
      margin-bottom: 6px;
      color: #888;
      cursor: pointer;
    }
    .footer-section ul li a{
        text-decoration: none;
        color: #888;
    }
    .footer-section p{
        /*color: #888;*/
        cursor: pointer;
    }
    .footer-section p:hover{
        color: #fff;
    }
    .footer-section ul li:hover{
        color: #fff;
    }

    .footer-section ul li a:hover{
        color: #fff;
    }
    .footer-section h4{
        color: #fff;
        font-weight:bold;
    }
    .footer-section h4 a{
        color: #fff;
        font-weight:400 !important;
        text-decoration: none;
    }
    .red-strip {
      background-color: var(--e-global-color-accent);
      color: #fff;
    }
    .footer-about {
      color: #ccc;
      font-size: 15px;
      line-height: 1.6;
      margin-top: 15px;
    }
    .copyright-strip {
    background-color: #111;
    color: #ccc;
    font-size: 14px;
  }

  .copyright-strip a {
    color: #ccc;
    text-decoration: none;
  }

  .copyright-strip a:hover {
    text-decoration: underline;
  }

  .social-icons a{
    padding-right: 10px;    
    font-size: 30px;
    color: #fff;
  }

  .submit-btn:hover{
    background-color: var(--e-global-color-primary) !important;
  }
  </style>

<!-- Light Red Background Section -->
{{-- <section style="background: linear-gradient(to bottom, transparent 0%, transparent 50%, #a3b1cf 50%, #a3b1cf 100%); padding: 60px 0;"> --}}
  <section style="background: linear-gradient(to bottom, #ffffff 0%, #ffffff 50%, #f8f9fa 50%, #f8f9fa 100%); padding: 60px 0;">
  <!-- Contact Form Section -->
  <div class="container">
    <div class="card p-4 shadow" style="border: none;">
      <h3 style="font-weight: 400 !important;
    opacity: 0.9;">Enquiry</h3>
      <h3 class="mb-4">Form</h3>

      <div class="alert alert-success alert-dismissible fade show" role="alert" id="successalert_footer" style="display: none;">
        <strong>Success</strong> Enquiry Form submitted.
        <button type="button" onclick="closealert()" style="background-color: transparent !important; color:#000 !important;" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="contact-form" method="POST" data-action="{{ route('submit-contact') }}">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label class="mb-2">Your Name*</label>
            <input type="text" name="name" class="form-control" required autocomplete="new-password">
          </div>
          <div class="col-md-6 mb-3">
            <label class="mb-2">Your Email*</label>
            <input type="email" name="email" class="form-control"  required autocomplete="new-password">
          </div>
          <div class="col-md-6 mb-3">
            <label class="mb-2">Your Phone Number*</label>
            <input type="text" name="phone" class="form-control" maxlength="10" required autocomplete="new-password" oninput="this.value = this.value.replace(/[^0-9]/g, '')">
          </div>          
          <div class="col-md-6 mb-3">
            <label class="mb-2">Select Program*</label>
            <select class="form-control" name="program" id="select_program" required autocomplete="new-password">              
              <option value="B.TECH" selected>Bachelor of Technology (B.TECH)</option>            
            </select>
          </div>
          <div class="col-md-6 mb-3">
            <label class="mb-2">Select Specialization*</label>
            <select class="form-control" name="specialization" id="select_specialization" required autocomplete="new-password">
              <option value="">--Select Specialization--</option>
              <option value="CSE">CSE</option>
              <option value="AI & ML">AI & ML</option>
              <option value="CSE & IT">CSE & IT</option>
              <option value="ECE">ECE</option>              
            </select>
          </div>

          <?php 
            $states = \App\Models\State::all();          
          ?>
          <div class="col-md-6 mb-3">
            <label class="mb-2">Your State*</label>
            {{-- <input type="text" name="state" class="form-control" required autocomplete="new-password"> --}}
            <select name="state" id="state" style="border-color:#dbdbdb" onchange="getCities(this);">
                <option>Select your state</option>                        
                {{-- <option value="Andhra Pradesh">Andhra Pradesh</option>
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
                <option value="Puducherry">Puducherry (UT)</option>                         --}}
                @foreach ($states as $state)
                    <option value="{{$state->state}}" data-id="{{$state->id}}">{{$state->state}}</option>
                @endforeach
              </select>
          </div>
          <div class="col-md-6 mb-3">
            <label class="mb-2">Your City*</label>
            <select name="city" id="city" style="border-color:#dbdbdb" class="city"></select>
          </div>          
          <div class="col-12 text-right">
            <button type="submit" class="btn btn-primary_2 px-5 submit-btn" style="padding:15px 25px !important; width:200px; float:right;">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>


  <!-- Google Map -->
{{-- <div class="container my-5">
    <h3 class="text-center mb-3">Our Location</h3>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3507.121698538086!2d77.48518659999999!3d28.475881400000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ceb5380c79ed5%3A0x6614739ef8af810d!2sSITASRM%20ENGINEERING%20AND%20RESEARCH%20INSTITUTE!5e0!3m2!1sen!2sin!4v1744114386712!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    
  </div> --}}
  

  <!-- Red Strip Section -->
  <div class="red-strip py-4 px-4" style="padding: 70px;">
    <div class="container d-flex justify-content-between align-items-center">
      <span style="margin-left: 20px;"> Reach Out for More Insights</span>
      <span><i class="fa fa-phone-alt"></i> 0120-4100-585 | 4101-556</span>
    </div>
  </div>

  <!-- Footer Section -->
<footer class="text-light pt-5 pb-3 footer" style="padding: 60px;">
    <div class="container">
      <div class="row footer-section">
        <!-- {{env('COLLEGE_NAME_MID')}} Info -->
        <div class="col-md-4 mb-4">
          <h3>{{env('COLLEGE_NAME')}}</h3>
          <!--<p>ENGINEERING & RESEARCH INSTITUTE</p>-->
          <p style="cursor:unset">{{env('COLLEGE_ADDRESS')}}</p>
          <p>Email – <a href="mailto:info@seri.net.in" style="text-decoration:none;" class="text-light">info@seri.net.in</a></p>          
          <p>Phone – {{env('COLLEGE_PHONES')}}</p>          
          <!--<div class="social-icons">-->
            <!-- You can add your icons here -->
          <!--  <a href="https://www.facebook.com/profile.php?id=61574962801635"><i class="fab fa-facebook"></i></a>-->
          <!--  <a href="https://wa.me/919560201536"><i class="fab fa-whatsapp"></i></a>-->
          <!--  <a href="https://www.instagram.com/seri.grnoida?igsh=Zm91cjZha25keGl2"><i class="fab fa-instagram"></i></a>-->
          <!--  <a href="https://www.linkedin.com/company/sitasrm-engineering-and-research-institute/"><i class="fab fa-linkedin"></i></a>-->
          <!--  <a href="https://x.com/seri_grnoida?t=NEiDJxcgkY-r5yF7bAz6aQ&s=08"><i class="fa-brands fa-x-twitter"></i></a>-->
          <!--</div>    -->
           <h4><a href="{{route('reach-us')}}">How to Reach Us ?</a></h4>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3507.121698538086!2d77.48518659999999!3d28.475881400000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ceb5380c79ed5%3A0x6614739ef8af810d!2sSITASRM%20ENGINEERING%20AND%20RESEARCH%20INSTITUTE!5e0!3m2!1sen!2sin!4v1744114386712!5m2!1sen!2sin" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    
        </div>


  
        <!-- Quick Links -->
        <div class="col-md-4 mb-4">
          <h4>QUICK LINKS</h4>
          <ul class="list-unstyled">
            <li><a href="{{ route('home') }}">HOME</a></li>
            <li><a href="{{ route('about') }}">ABOUT US</a></li>
            <li><a href="#">ACADEMICS</a></li>
            <li><a href="#">CONTROLLER OF EXAMINATIONS</a></li>
            <li><a href="#">INFRASTRUCTURE</a></li>
            <li><a href="#">RESEARCH</a></li>
            <li><a href="#">STUDENT SUPPORT</a></li>
            <li><a href="#">DOWNLOADS</a></li>
            <li><a href="#">POSH COMMITTEE</a></li>            
          </ul>

           
        </div>
  
        <!-- Important Links -->
        <div class="col-md-4 mb-4">
          <h4>IMPORTANT LINKS</h4>
          <ul class="list-unstyled">
            <li><a href="{{route('anti-ragging')}}">ANTI RAGGING COMMITTEE</a></li>
            <li><a href="#">ANTI DRUGS COMMITTEE</a></li>
            <li><a href="{{ route('home') }}">CAREERS</a></li>
            <li><a href="{{ route('privacy-policy')}}">PRIVACY POLICY</a></li>
            <li><a href="{{ route('terms-conditions')}}">TERMS & CONDITIONS</a></li>
            <li><a href="{{ route('fees')}}">FEE STRUCTURE</a></li>
            <li><a href="{{ route('refund')}}">REFUND POLICY</a></li>
            <li><a href="#">SITE MAP</a></li>
            <li><a href="{{route('contact')}}">CONTACT US</a></li>
          </ul>
        </div>
      </div>
    </div>
</footer>

<hr style="padding: 0; margin:0;">
  
  <!-- Copyright Section -->
  <div class="bg-dark text-white py-2 px-3 d-flex justify-content-between">
    <div>
      <a href="{{ route('privacy-policy')}}" class="text-white text-decoration-none">Privacy Policy</a>
    </div>
    <div>
      Copyright © SERI
    </div>
  </div>



  <script>
    $(document).ready(function () {
      $('#contact-form').on('submit', function (e) {
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
                  $('#successalert_footer').fadeIn(); // Show the alert
                  form[0].reset(); // Reset form
                  setTimeout(() => {
                      $('#successalert_footer').fadeOut();
                  }, 5000);                                                  
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

  function getCities(elem){
    $('.city').empty();
    let state = $(elem).val();
    $.ajax({
      type: 'GET',
      url: "{{route('get-cities')}}",
      data: {state: state},
      success : function (response){        
        if (response.status == true) {          
          response.cities.forEach(city =>{
            $('.city').append('<option value="'+city.city+'">'+city.city+'</option>');
          })
        }        
      }
    })
  }

  const data = {
    'B.TECH' : ['CSE', 'AI & ML', 'CSE & IT', 'ECE']
  };

  $('#select_program').on('change', function (){
    let selected = $('#select_program').find('option:selected').val();    

    let specializationDropdown = $('#select_specialization');
    specializationDropdown.empty();

    let options = data[selected];

    if (options && options.length) {
        specializationDropdown.append(`<option value="">--Select Specialization--</option>`);
        options.forEach(function (opt) {
          specializationDropdown.append(`<option value="${opt}">${opt}</option>`);
        });
    }else {
        specializationDropdown.append(`<option value="">No options available</option>`);
    }
    console.log(options);
  })


  </script>
  