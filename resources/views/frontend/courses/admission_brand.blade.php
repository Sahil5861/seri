@extends('frontend.layout')
@section('title', 'Admission')

<link rel="stylesheet" href="{{asset('css/test-form.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<style>               
        .content{
            margin: 20px;
            scroll-margin-top: 200px;
        }   

        .owl-carousel .item{
            padding: 10px 0px;
        }
        .owl-carousel .item img {
            width: 90%;
            height: 200px; /* Adjust as needed */
            object-fit: contain;
            border-radius: 10px;
            background-blend-mode: color-burn;
            mix-blend-mode: multiply;            
        } 

        .carousel-fade-wrapper {
            position: relative;
            overflow: hidden;
        }

        /* Left Fade */
        .carousel-fade-wrapper::before,
        .carousel-fade-wrapper::after {
            content: '';
            position: absolute;
            top: 0;
            width: 60px;
            height: 100%;
            z-index: 2;
            pointer-events: none;
        }

        .carousel-fade-wrapper::before {
            left: 0;
            background: linear-gradient(to right, white, transparent);
        }

        .carousel-fade-wrapper::after {
            right: 0;
            background: linear-gradient(to left, white, transparent);
        }
                
        
        .container{
            position: relative;
        }
        .navbar-container{
            position: sticky;
            top: 0;
            left: 0;         
            width: 100%;   
            z-index: 1000; /* Higher than other elements to keep it on top */
        }

        .boxes{
            display: flex;
            gap: 10px;
        }
        .box1{
            border-right: 1px solid #888;
        }
        .box{
            min-width: 130px;
            display: flex;
            flex-direction: column;
        }


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
            transition: all 0.3s;
            user-select: none;            
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
            max-height: max-content;
            padding: 15px;
            border-left: 1px solid #888;
            border-right: 1px solid #888;
            border-bottom: 1px solid #888;
        }

        .accordion-item.active .accordion-header i{
            transform: rotateZ(90deg);
            transition: transform 0.3s ease;
        }

        .btn-primary_2{
            background-color: var(--e-global-color-primary) !important;
        }

        .contact{
            padding: 10px;
            background-color: var(--e-global-color-primary) !important;
            color: #fff;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            gap: 20px;            
            border-radius: 10px;
        }
        .contact h4{
            color: #fff;
        }
        .btn-contact{
            background-color: #fff !important;
            color: #000 !important;
            color: var(--e-global-color-primary) !important;
            border-radius: 10px !important;
            float: right !important;
        }  
    .accreditation-section {
        padding: 40px 0px;        
        background-color: transparent;        
      }
      
      .accreditation-section h3 {
        font-size: 22px;
        font-weight: 700;
        color: #0c1e41; /* dark navy */
        margin-bottom: 30px;
      }
      
      .accreditation-logos {
        display: flex;
        justify-content: flex-start;
        flex-wrap: wrap;
        gap: 30px;
      }
      
      .accreditation-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        max-width: 150px;
      }
      
      .accreditation-item img {
        height: 60px;
        object-fit: contain;
        margin-bottom: 10px;
      }
      
      .accreditation-item p {
        margin: 0;
        font-size: 14px;
        font-weight: 500;
        color: #333;
        text-align: center;
      }

      .download-btn{
        border-radius: 0 !important;
        padding: 13px !important;
      }

      .banner-2 {
            height: 73vh;
            position: relative;            
            display: flex;
            justify-content: flex-end;
            align-items: center;            
            padding: 2rem;
            color: white;            
            background-position-x: center;
            background-position-y: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .banner-dark{
            position: relative;
        }

        .baner-dark::before{
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4); /* Dark overlay */
            z-index: 1;
        }
        .banner-content2{
            position: absolute;
            z-index: 2;
            max-width: 700px;
            color: white;            
            padding: 20px;
            border-radius: 10px;
            right: 50px;
        }

        .banner-content2 h1{
            color: #fff !important;
            font-size: 50px !important;
        }
        .banner-content2 h4{
            color: #fff !important;
            font-size: 24px !important;
        }

        .content li{        
            font-size: 18px;
            line-height: 2;
            margin-bottom: 20px;
        }

        @media screen and (max-width:768px) {
        .banner-2 {
            background-position-x:20%;
        }
        .banner-content2 {
            position: absolute;
            z-index: 2;
            max-width: 350px;
            color: white;            
            padding: 20px;
            border-radius: 10px;
            bottom: 0px;
            left: 0px;            
            /* transform: translateY(-50%); */
        }   
        .banner-content2 h1{
            font-size: 24px !important;
        }

        .banner-content2 h4{
            font-size: 16px !important;
        }
        .banner-content2 p{
            font-size: 12px !important;
        }
    }

</style>
@section('main_content') 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<div data-elementor-type="wp-post" data-elementor-id="436" class="elementor elementor-436 elementor-304" style="background-color: #fff;">        
    {{-- <section class="banner-2 baner-dark" style="background-image: url('../images/cse_banner3.jpg');">    
        <div class="banner-content2">
            <h1 style="">Computer Science and Engineering</h1>            
            <h4>Transform Your Passion for Technology into a Rewarding Career</h4>
            <p style="color:#fff;"><i>Applying for SERI’s B.Tech. – Computing Science and Engineering program provides a comprehensive education in core CSE principles and cutting-edge technologies.</i></p>
        </div>
    </section> --}}

    <section class="container-lg"style="padding: 10px 40px;">
        <div class="elementor-element elementor-element-66a6537 elementor-invisible elementor-widget elementor-widget-heading"
            data-id="66a6537" data-element_type="widget"
            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
            data-widget_type="heading.default">
            <div class="elementor-widget-container">
                <h2 class="elementor-heading-title elementor-size-default">SERI<br> Admissions 2025-26</h2>                                                        
            </div>
        </div>
        <br>
        <h4>Welcome to Your Future of Innovation and Excellence</h4>            
        <p>At {{env('COLLEGE_NAME_MID')}} Engineering & Research Institute (SERI), we empower aspiring engineers to become leaders, innovators, and problem-solvers. Our mission is to deliver outstanding education and research, blending theory with hands-on practice in a dynamic, inclusive environment. Join a community where your ideas matter and your potential is realized.</p>              
    </section>
    <div class="container p-4" style="padding: 10px 40px;">        
        <section>
            <div class="content" id="why_choose_seri">
                <h2>Why Choose SERI?</h2>
                <ul>
                    <li><b>Cutting-edge B.Tech Specializations:</b></li>    
                    <ul>
                        <li>Computer Science & Engineering (CSE)</li>
                        <li>Electronics & Communication Engineering (ECE)</li>
                        <li>Computer Science & Information Technology (CS & IT)</li>
                        <li>CSE (Artificial Intelligence & Machine Learning)</li>
                    </ul>
                    <li> 
                        <b>Industry-aligned Curriculum:</b> <br>
                        Our programs are designed with input from leading industry experts to ensure you graduate job-ready and future-focused3.
                    </li>                    
                    <li><b>Vibrant Campus Life:</b> <br> Experience a culture of innovation, creativity, and collaboration.</li>
                    <li><b>Commitment to Diversity:</b> <br> Dedicated cells and committees for SC/ST, OBC, minorities, and gender equity ensure a supportive environment for all.</li>
                </ul>                
            </div>

            <div class="navbar-box" style="position: sticky;top: 85px; margin-bottom:100px;z-index: 994; background-color:#fff;padding:5px;">
                <nav class="navbar" style="box-shadow: 0px 4px 10px rgba(0, 0, 0, 1);">
                    <ul style="display: flex;">                    
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-24 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px"><a href="#admission_criteria">Admission Criteria</a></li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-24 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px"><a href="#entrance_exam">Entrance Exams</a></li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-24 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px"><a href="#admission_process">Admission Process</a></li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-24 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px"><a href="#our_commitment">Our Commitment</a></li>                                      
                    </ul>
                </nav>
            </div>

            <div class="content eligibility" id="admission_criteria">
                <h2>B.Tech Admission Criteria</h2>       
                <b>Eligibility:</b>
                <ul>
                    <li>Minimum 50% marks in 10+2 (or equivalent) with Physics, Mathematics, and Chemistry/Computer Science as core subjects3.</li>
                    <li>For AKTU/UPTAC counseling: 45% aggregate in Class 12 (40% for SC/ST candidates).</li>
                </ul>
            </div>
            
            <div class="content" id="entrance_exam">
                <h2>Entrance Exams Accepted:</h2>
                <ul>
                    <li>AKTU Entrance Examination</li>
                    <li>JEE Mains</li>
                    <li>CUET</li>
                </ul>
            </div>

            <div class="content" id="admission_process">
                <h2>Admission Process:</h2>

                <b>Criteria-I:</b>

                <ul>
                    <li>Allotted through AKTU/UPTAC Counseling.</li>
                    <li>Report physically to SERI campus with proof of fee payment (Rs. 20,000/Rs. 12,000) as per schedule.</li>
                    <li>Failure to report or complete all steps within the deadline results in cancellation.</li>
                </ul>

                <b>Criteria-II:</b>
                <ul>
                    <li>Management Quota/Vacant Seats.</li>
                    <li>Confirm admission via Institute Admission Cell and report physically with all documents and fees.</li>
                    <li>Non-compliance or delay leads to cancellation.</li>
                </ul>
            </div>

            <div class="content" id="our_commitment">
                <h2>Our Commitment: Safe, Inclusive, and Supportive</h2>
                <ul>
                    <li><strong>Zero Tolerance for Ragging:</strong><br>Strict anti-ragging policies with active monitoring and immediate action as per UGC and government guidelines.</li>
                    <li>
                        <strong>Support Cells:</strong>
                        <ul>
                            <li>SC/ST Cell</li>
                            <li>Minority & OBC Cell</li>
                            <li>Internal Complaints Committee</li>
                            <li>Grievance & Redressal Committee</li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="content" style="margin: 0px;">
                <h2 class="text-center">Our Industry Collaborations</h2>
            </div>
            <div class="carousel-fade-wrapper">                
                <div class="owl-carousel owl-theme">
                    <div class="item"><img src="{{asset('recruiters/image1.png')}}" alt="Image 1" width="70" height="70"></div>
                    <div class="item"><img src="{{asset('recruiters/image2.png')}}" alt="Image 2" width="60" height="60"></div>
                    <div class="item"><img src="{{asset('recruiters/image3.png')}}" alt="Image 3" width="60" height="50" style="width: 50%; align-self:center; margin:auto;"></div>
                    <div class="item"><img src="{{asset('recruiters/image4.png')}}" alt="Image 4" width="100" height="70" style="width: 80%; align-self:center; margin:auto;"></div>
                    <div class="item"><img src="{{asset('recruiters/image5.png')}}" alt="Image 5" width="70" height="70" style="width: 80%; align-self:center; margin:auto;"></div>
                    <div class="item"><img src="{{asset('recruiters/image6.png')}}" alt="Image 6" width="70" height="70" style="width: 80%; align-self:center; margin:auto;"></div>        
                    <div class="item"><img src="{{asset('recruiters/image7.png')}}" alt="Image 7" width="70" height="70" style="width: 80%; align-self:center; margin:auto;"></div>        
                    <div class="item"><img src="{{asset('recruiters/image8.png')}}" alt="Image 8" width="70" height="70" style="width: 80%; align-self:center; margin:auto;"></div>        
                    <div class="item"><img src="{{asset('recruiters/image9.png')}}" alt="Image 9" width="60" height="60" style="width: 80%; align-self:center; margin:auto;"></div>                
                    <div class="item"><img src="{{asset('recruiters/image10.png')}}" alt="Image 10" width="60" height="60" style="width: 80%; align-self:center; margin:auto;"></div>                
                    <div class="item"><img src="{{asset('recruiters/image11.webp')}}" alt="Image 11" width="60" height="70" style="width: 80%; align-self:center; margin:auto;"></div>                
                    <div class="item"><img src="{{asset('recruiters/image12.webp')}}" alt="Image 12" width="60" height="60" style="width: 80%; align-self:center; margin:auto;"></div>                
                </div>
            </div>  
            

            <div class="content" id="how_to_apply">
                <h2>How to Apply?</h2>    
                <ul>
                    <li style="list-style: decimal"><strong>Check Eligibility : </strong>Review the above criteria.</li>
                    <li style="list-style: decimal"><strong>Appear for Entrance Exam : </strong>AKTU/JEE Mains/CUET.</li>
                    <li style="list-style: decimal"><strong>Apply via Counseling or Management Quota:</strong>
                        <ul>
                            <li>Counseling: Follow UPTAC/AKTU process.</li>
                            <li>Management Quota: Contact SERI Admission Cell.</li>
                        </ul>
                    </li>
                    <li style="list-style: decimal"><strong>Report to Campus:</strong>Complete physical reporting with all required documents and fees as per instructions.</li>
                </ul>
            </div>   
            
            <div class="content" id="begin_journey">
                <h2>Ready to Begin Your Journey?</h2>
                <b>Take the first step toward a transformative engineering career.</b>
                <p> Apply now and be part of SERI’s legacy of excellence.</p>

                <h4>For Admission Support:</h4>
                <li style="list-style: none; margin:0;">📧 admissions@seri.net.in</li>
                <li style="list-style: none; margin:0;">📱 WhatsApp: 9560201536, 9560339929</li>
                <li style="list-style: none; margin:0;">📍 Plot No 14, Knowledge Park 3, Greater Noida-201310</li>
            </div>

            <hr>
            <div class="content contact">
                <h4 style="color: #fff;">Speak with our counselors to explore your options and know more about programs</h4>
                <button class="btn-contact btn btn-lg">Schedule a Call</button>
            </div>
        </section>
    </div>    
</div>

<script>
    document.querySelectorAll('.accordion-header').forEach(header => {
        header.addEventListener('click', function() {
            const item = this.parentElement;
            const isActive = item.classList.contains('active');

            document.querySelectorAll('.accordion-item').forEach(el => el.classList.remove('active'));

            if (!isActive) {
                item.classList.add('active');
            }
        });
    });
</script>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>   

  <!-- JS Script to handle dynamic document loading -->
  <script>
    document.querySelectorAll('.view-doc-btn').forEach(btn => {
      btn.addEventListener('click', function () {
        const docPath = this.getAttribute('data-doc_name');
        document.getElementById('docFrame').src = docPath;
        // document.getElementById('downloadLink').href = docPath;

        const modal = new bootstrap.Modal(document.getElementById('documentModal'));
        modal.show();
      });
    });

    function printIframe() {
      const iframe = document.getElementById('docFrame');
      iframe.contentWindow.focus();
      iframe.contentWindow.print();
    }
  </script>


<script>
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 2000, // <- no delay between transitions
            autoplaySpeed: 2500, // <- smooth & long transition time
            smartSpeed: 2500,
            dots: false,
            nav: false,
            slideTransition: 'linear', // <- enables smooth motion
            responsive: {
                0: { items: 3 },
                600: { items: 5 },
                1000: { items: 7 }
            }
        });
    });
</script>
@endsection

