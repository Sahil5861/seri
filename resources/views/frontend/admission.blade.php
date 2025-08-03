@extends('frontend.layout')
@section('title', 'Admission')

<meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

<link rel="stylesheet" href="{{asset('css/tabs_container.css')}}">
<link rel="stylesheet" href="{{asset('css/test-form.css')}}">

<style>    
    .main h3, .main h1{
        font-family: yale, TimesNewRoman, Times New Roman, Times, Baskerville, Georgia, serif;
        font-weight: bold;
    }



    .main p{
        /* font-family: Mallory, 'Gill Sans', 'Gill Sans MT', Calibri, Arial, sans-serif; */
        line-height: 1.6;
        font-weight: 400;
        font-size: 18px;
    }

.nav-list {
    list-style: none;
    padding: 0;
    margin: 0;
    width: 100%;
    max-width: 300px; /* Adjust width as needed */
}

.nav-list li {
    font-family: "Arial", sans-serif; /* Choose a clean font */
    font-size: 16px;
    font-weight: normal;
    padding: 15px;
    border-bottom: 1px solid #ddd; /* Light separator */
    text-align: left;
    cursor: pointer;
    transition: background 0.3s;
}

.nav-list li:hover {
    background-color: #f5f5f5; /* Light hover effect */
}


.card{
        height: 400px;
        background-position: left;
        background-position-x: left;
        background-size: contain;
        background-repeat: no-repeat;
        margin-bottom: 50px;
        border: none;
        border-bottom: 1px solid #555;
    }

    .blog-card .card-body img{
        width: 250px; 
        height: 250px; 
        object-fit: cover; 
        flex-shrink: 0;
    }

    .main .content{
        margin:20px auto;
    }

    .content li{        
        font-size: 18px;
        line-height: 2;
    }
    

    @media screen and (max-width:990px){
        .nav-responsive-div{
            overflow-x: auto;
            white-space: nowrap; /* Prevent text from wrapping */
            position: sticky;
            top: 135px;
            /* background: #333; */
            background-color: #fff;
            /* box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.5); */
            border-bottom: 1px solid #888;

        }
        .nav-responsive{
            display: flex;
            width: 100%;                         
        }
        .nav-responsive li{
            flex: 1 1 100%;
            text-align: left;
            cursor: pointer;
        }

        .nav-responsive li.active-nav {
            border-bottom: 1px solid #000;
        }
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


        .banner {
            height: 73vh;
            position: relative;
            overflow: hidden;            
        }
        .banner img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .counter-section {
            position: absolute;
            top: 50%;
            right: 5%;
            transform: translateY(-50%);            
            color: white;
            padding: 40px;
            width: 35%;
        }
        .counter-table {
            width: 100%;
            padding: 20px;
            background-color: #fff;
        }
        .counter-table td {
            padding: 10px;
            text-align: left;
            cursor: pointer;
        }
        .counter-table p{
            font-weight: bold;
        }
        .counter {
            font-size: 2.5rem;
            font-weight: bold;
            color: red;
        }

    
        

    .comprehensive-data{
        display: flex;
        justify-content: center;
        align-content: center;
        gap: 20px;
        flex-wrap: wrap;
    }
    .comprehensive-data li{
        cursor: pointer;
        padding: 20px;
        width: 150px;
        text-align: center;
        background-color: var(--e-global-color-primary);
        color: #fff;        
    }
    .comprehensive-data li:hover{
        box-shadow: .1rem .1rem 10px rgba(00, 0, 0, 0.5);
    }

    @media screen and (max-width:500px){

        .comprehensive-data{
            width: 100%;
            display: flex;
            justify-content: flex-start;
            align-content: center;
            gap: 20px;
            overflow-x:  auto;            
        }
        .comprehensive-data li{
            cursor: pointer;
            padding: 8px;
            width: 70px;
            font-size: 12px;
            text-align: center;
            background-color: var(--e-global-color-primary);
            color: #fff;        
        }   
    }

    .owl-carousel .item{
        padding: 20px;
    }
    .owl-carousel .item img {
        width: 90%;
        height: 200px; /* Adjust as needed */
        object-fit: contain;
        border-radius: 10px;
        background-blend-mode: color-burn;
        mix-blend-mode: multiply;            
    } 
    .section-dark{
        position: relative;
    }

    .section-dark::before{
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        background-color: rgba(0, 0, 0, 0.6);
        z-index: 1;
    }
    .card .card-img-top{
        max-height: 344px !important;
    }

    table th, table td{
        text-align: center;        
    }

</style>

@section('main_content') 
<div data-elementor-type="wp-post" data-elementor-id="436" class="elementor elementor-436 elementor-304">
    {{-- here it is --}}      
    <div class="banner" style="background: url('../images/admission_banner_4.jpg') no-repeat center center / cover;">
        <div class="banner-content">
            <h1>Admission Cell @  {{env('COLLEGE_NAME_SHORT')}}</h1>        
            <h4>Welcome to {{env('COLLEGE_NAME')}} ({{env('COLLEGE_NAME_SHORT')}}), where we're shaping the leaders of tomorrow.</h4>
            <p>Secure Your Spot Today, Limited Seats Available!</p>
        </div>
    </div>
    <script>
        // Counter Animation
        const counters = document.querySelectorAll('.counter');
        counters.forEach(counter => {
            const updateCount = () => {
                const target = +counter.getAttribute('data-target');
                let count = +counter.innerText;
                const increment = target / 100;

                if (count < target) {
                    counter.innerText = Math.ceil(count + increment);
                    setTimeout(updateCount, 50);
                } else {
                    counter.innerText = target;
                }
            };
            updateCount();
        });
    </script>
    <section class="container-lg p-4">
        {{-- <p style="font-family: Arial, Helvetica, sans-serif; margin: 30px 0 50px 0;">HOME > <span class="text-primary">ADMISSIONS</span></p> --}}
        <div class="row d-flex flex-column-reverse flex-lg-row">
            <div class="col-lg-12 main" style="font-family:Arial, Helvetica, sans-serif;">                
                <br>
                

                {{-- <div class="content">
                    <div class="tabs-container">
                        <!-- Tab Buttons -->
                        <div class="tab-buttons">
                            <div class="tab-button active" data-index="0">Courses Offered</div>
                            <div class="tab-button" data-index="1">Eligibility & Duration</div>
                            <div class="tab-button" data-index="2">Admission Process</div>
                            <div class="tab-button" data-index="3">Fee Structure</div>
                        </div>
                        
                
                        <!-- Tab Content -->
                        <div class="tab-content active" style="background-image: url('../admission_tab/image1.png');">
                            <div>
                                <div class="tab-content-card">
                                    <h2>Courses at <span>{{env('COLLEGE_NAME_SHORT')}}</span></h2>
                                    <p>
                                        <strong>BCA</strong> (Bachelor of Computer Applications) <br>
                                        <strong>BBA</strong> (Bachelor of Business Administration) <br>
                                        <strong>MCA</strong> (Master of Computer Applications) <br>
                                        <strong>MBA</strong> (Master of Business Administration) with Dual Specializations in: <br>
                                        HR, Marketing, Finance, IT, IB, Operations, Business Analytics
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="tab-content" style="background-image: url(https://res.cloudinary.com/dqqfisfji/image/upload/v1741332791/Research_r2bbya.png);">
                            <div>
                                <div class="tab-content-card">
                                    <h2>Eligibility Standards & <span>Course Duration</span></h2>
                                    <p>
                                        <strong>UG Courses:</strong> BCA & BBA <br>
                                        <strong>Eligibility:</strong> 10+2 with minimum 45% <br>
                                        <strong>Duration:</strong> 3 Years
                                    </p>
                                    <p>
                                        <strong>PG Courses:</strong> <br>
                                        <strong>MCA</strong> <br>
                                        <strong>Eligibility:</strong> Graduation with minimum 50% in a relevant field like Computer Science, IT, or Mathematics <br>
                                        <strong>Duration:</strong> 2 Years
                                    </p>
                                    <p>
                                        <strong>MBA</strong> <br>
                                        <strong>Eligibility:</strong> Graduation with minimum 50% in any discipline <br>
                                        <strong>Duration:</strong> 2 Years
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        
                        
                        <div class="tab-content" style="background-image: url('../admission_tab/image2.jpg');">
                            <div>
                                <div class="tab-content-card">
                                    <h2>Your Path to <span>{{env('COLLEGE_NAME_SHORT')}}</span></h2>
                                    <p>
                                        Your goals, our guidance. SIMT's admission is a mutual selection, finding those ready to thrive in our innovative learning environment.
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        
    
                        <div class="tab-content" style="background-image: url(https://res.cloudinary.com/dqqfisfji/image/upload/v1741332811/Center_of_Excellence_syesox.png);">
                            <div>
                                <div class="tab-content-card">
                                    <h2>Investment in <span>Your Education</span></h2>
                                    <p>
                                        SIMT's fee structure is designed for high-value education, a key investment in your success. 
                                        For detailed fee information and scholarship opportunities, please contact our admissions office.
                                    </p>
                                    <p>
                                        <strong>Contact:</strong> For fee details, scholarships, and payment options, reach out to 
                                        <a href="mailto:admissions@simt.edu.in">admissions@simt.edu.in</a> or call <a href="tel:+919560201536">+91-9560201536</a>.
                                    </p>
                                </div>
                            </div>
                        </div>                    
                    </div>
                    <script>
                        document.addEventListener("DOMContentLoaded", function () {
                            const tabButtons = document.querySelectorAll(".tab-button");
                            const tabContents = document.querySelectorAll(".tab-content");
                
                            tabButtons.forEach((button, index) => {
                                button.addEventListener("click", function () {
                                    // Remove active class from all buttons & contents
                                    tabButtons.forEach(btn => btn.classList.remove("active"));
                                    tabContents.forEach(content => content.classList.remove("active"));
                
                                    // Add active class to clicked tab & corresponding content
                                    this.classList.add("active");
                                    tabContents[index].classList.add("active");
                                });
                            });
                        });
                    </script>
                </div> --}}



                {{-- <section class="content">                                    
                    <div class="container mt-4">
                        <div class="row p-0">
                            <div class="col-md-6 mb-3">
                                <div class="accordion-item">
                                    <div class="accordion-header btn-primary_2 text-light"><i class="fa-solid fa-angles-right"></i> Holistic Education</div>
                                    <div class="accordion-content">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="accordion-item">
                                    <div class="accordion-header btn-primary_2  text-light"><i class="fa-solid fa-angles-right"></i> Comfortable Accommodation</div>
                                    <div class="accordion-content">
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="accordion-item">
                                    <div class="accordion-header btn-primary_2 text-light"><i class="fa-solid fa-angles-right"></i> Industry Ready Graduates</div>
                                    <div class="accordion-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="accordion-item">
                                    <div class="accordion-header btn-primary_2 text-light"><i class="fa-solid fa-angles-right"></i> Strong Industry Connection</div>
                                    <div class="accordion-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> --}}


                <div class="content">
                    <h2>Admission Cell – {{env('COLLEGE_NAME')}}</h2>
                    <h4>Admission Cell: Your Gateway to a Seamless Admission Experience</h4>

                    <p>The college takes pride in its dedicated Admission Cell, which is committed to ensuring a smooth and transparent admission process for all prospective students. Staffed by experienced and knowledgeable professionals, the Admission Cell offers comprehensive guidance and personalized support throughout every step of the application journey.</p>

                    <p>Whether it's understanding admission requirements, navigating the application process, or keeping track of important deadlines, applicants can rely on the Admission Cell for accurate and up-to-date information. The team operates in full compliance with the college’s admission policies and maintains the highest standards of efficiency and transparency in all its activities.</p>

                    <p>With a strong focus on student-centric service, the Admission Cell promptly addresses all inquiries and assists applicants in making informed decisions about their educational future.</p>                    
                </div>

                <div class="content">
                    <h4>Objectives</h4>

                    <ul>
                        <li>Program Promotion: To publicize the various academic programs offered by the institution through the official website and other marketing platforms.</li>
                        <li>Career Counseling: To guide and counsel prospective students in choosing suitable programs based on their interests and career goals.</li>
                        <li>Eligibility & Application Support: To assess candidates’ eligibility and assist them throughout the application process.</li>
                        <li>Examination & Selection: To organize entrance examinations, prepare merit lists, and oversee the counseling and on-boarding of selected candidates.</li>
                        <li>Market Research: To conduct research on industry trends to identify potential new programs that aligns with market demand.</li>
                        <li>Data Management: To maintain and provide access to student-related data as required by the institution.</li>
                        <li>Financial Support: Making Education Accessible
                            The Admission Cell at {{env('COLLEGE_NAME')}} is equipped with a dedicated Financial Assistance Support Team, committed to helping student’s access affordable education financing. This team assists applicants in securing education loans from reputable banks and NBFCs (Non-Banking Financial Companies), often at low or even zero interest rates, depending on eligibility and lender terms.
                            By guiding students through the loan application process and offering tailored financial advice, the team ensures that financial constraints do not stand in the way of academic aspirations.
                            </li>
                    </ul>
                </div>

                <div class="content">
                    <h4>{{env('COLLEGE_NAME')}} ADMISSION CELL STRUCTURE </h4>
                    <table>
                        <thead>
                            <tr>
                                <th class="text-center" colspan="3"><h4>DIRECTOR ADMISSIONS</h4></th>
                            </tr>                            
                        </thead>

                        <tbody>
                            <tr>
                                <th>Head Marketing & Outreach</th>                                
                                <th>Head Counselling & Admissions</th>
                                <th>Head Digital Marketing</th>
                            </tr>
                            <tr>
                                <td>Manager Bihar / Jharkhand</td>
                                <td rowspan="2">Counsellor-1</td>
                                <td>Manager Social Media</td>
                            </tr>
                            <tr>
                                <td>Manager East U.P / Uttrakhand</td>                                
                                <td>Manager Content writing</td>
                            </tr>

                            <tr>
                                <td>Manager West U.P / Uttrakhand</td>
                                <td rowspan="2">Counsellor-1</td>
                                <td>Manager CRM handling</td>
                            </tr>
                            <tr>
                                <td>Manager Delhi / NCR</td>                                
                                <td>Graphic Designer</td>
                            </tr>

                            <tr>
                                <td>Manager M.P / Chhatisgarh</td>
                                <td rowspan="2">Counsellor-1</td>
                                <td>SEO specialist </td>
                            </tr>
                            <tr>
                                <td>Manager Haryana / Rajasthan</td>                                
                                <td></td>
                            </tr>
                            <tr>
                                <td>Manager West Bengal / North east</td>
                                <td rowspan="2">Counsellor-1</td>
                                <td></td>
                            </tr>                            
                        </tbody>
                    </table>
                </div>


                <hr>
                <section class="content">                                    
                    <div class="container mt-4">
                        <h2 class="text-center mb-4">Why Choose {{env('COLLEGE_NAME_SHORT')}}?</h2>
                        <div class="row p-0">
                            <div class="col-md-6 mb-3">
                                <div class="accordion-item">
                                    <div class="accordion-header btn-primary_2 text-light"><i class="fa-solid fa-angles-right"></i> Future-Ready Skills</div>
                                    <div class="accordion-content">
                                        <p>Acquire industry-ready skills and not just theory. Acquire hands-on know-how with live projects and twin internships. Acquire Industry-Ready Skills with Prestigious Certifications!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="accordion-item">
                                    <div class="accordion-header btn-primary_2 text-light"><i class="fa-solid fa-angles-right"></i> Placement Excellence</div>
                                    <div class="accordion-content">
                                        <p>Strategic placement preparation for success in high-end interviews. Interact with Top-of-the-Line Recruiters</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="accordion-item">
                                    <div class="accordion-header btn-primary_2 text-light"><i class="fa-solid fa-angles-right"></i> Experienced Faculty & Industrial Networking</div>
                                    <div class="accordion-content">
                                        <p>Get guidance from experienced faculty members with long-standing industrial exposure.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="accordion-item">
                                    <div class="accordion-header btn-primary_2 text-light"><i class="fa-solid fa-angles-right"></i> International Vision</div>
                                    <div class="accordion-content">
                                        <p>Increase your vision through global training and exposure to the world.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="accordion-item">
                                    <div class="accordion-header btn-primary_2 text-light"><i class="fa-solid fa-angles-right"></i> Accrediated Excellence</div>
                                    <div class="accordion-content">
                                        <p>Enjoy a recognized, high-standard degree.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="accordion-item">
                                    <div class="accordion-header btn-primary_2 text-light"><i class="fa-solid fa-angles-right"></i> Innovation Orientation</div>
                                    <div class="accordion-content">
                                        <p>Become part of a worldwide center of responsive, responsible professionals who power sustainable innovation.</p>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-md-6 mb-3">
                                <div class="accordion-item">
                                    <div class="accordion-header btn-primary_2 text-light"><i class="fa-solid fa-angles-right"></i> Research-Backed Learning</div>
                                    <div class="accordion-content">
                                        <p>Student learning occurs in the context of research, with student interaction with researchers who are authorities in their disciplines.</p>
                                    </div>
                                </div>
                            </div>                             --}}
                        </div>
                    </div>
                </section>
            
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

                <section class="section-courses">
                    <div class="container">
                        <h2 class="text-center mb-4">B.Tech Programs at {{env('COLLEGE_NAME_SHORT')}}</h2>
                        <p class="text-center my-3">SERI offers Bachelor of Technology (B.Tech) programs in the following specializations:</p>
                        
                        <div class="row">
                            <!-- Card 1 -->
                            <div class="col-md-6 mb-4">
                                <div class="card">
                                    <img src="{{asset('admission_caurses_img/image1.jpg')}}" class="card-img-top" alt="B.Tech in Computer Science">
                                    <div class="card-body">
                                        <h5 class="card-title">Computer Science & Engineering (CSE)</h5>                                        
                                    </div>
                                </div>
                            </div>
                
                            <!-- Card 2 -->
                            <div class="col-md-6 mb-4">
                                <div class="card">
                                    <img src="{{asset('admission_caurses_img/image2.jpg')}}" class="card-img-top" alt="B.Tech in Mechanical Engineering" height="100%" style="max-height: 344px; !important">
                                    <div class="card-body">
                                        <h5 class="card-title">Computer Science & Information Technology (CS & IT)</h5>                                        
                                    </div>
                                </div>
                            </div>
                
                            <!-- Card 3 -->
                            <div class="col-md-6 mb-4">
                                <div class="card">
                                    <img src="{{asset('admission_caurses_img/image3.jpg')}}" class="card-img-top" alt="B.Tech in Civil Engineering">
                                    <div class="card-body">
                                        <h5 class="card-title">Artificial Intelligence & Machine Learning (CSE - AI/ML)</h5>                                        
                                    </div>
                                </div>
                            </div>
                
                            <!-- Card 4 -->
                            <div class="col-md-6 mb-4">
                                <div class="card">
                                    <img src="{{asset('admission_caurses_img/image4.png')}}" class="card-img-top" alt="B.Tech in Electrical Engineering">
                                    <div class="card-body">
                                        <h5 class="card-title">Electronics & Communication Engineering (ECE)</h5>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                

                {{-- <section class="section-dark" style="height: 100vh; background: url('../images/admission_banner3.png') no-repeat center center / cover;">

                </section> --}}


                <section>        
                    <div class="container mt-1" style="position: relative;">  
                        <div class="elementor-element elementor-element-2772079 elementor-invisible elementor-widget elementor-widget-heading"
                            data-id="2772079" data-element_type="widget"
                            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                            data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h3 class="elementor-heading-title elementor-size-default mt-4">Placement and Industry Connections</h3>                                                    
                            </div>
                        </div> 
                        <p>We deliver dynamic business education, equipping you with vital skills like strategic management and data analytics. Through industry partnerships and a tech-empowered environment, we prepare you for top recruiters, ensuring a strong ROI on your career investment.</p>        

                        <div class="owl-carousel owl-theme">
                            <div class="item"><img src="{{asset('recruiters/image1.png')}}" alt="Image 1" width="100" height="100"></div>
                            <div class="item"><img src="{{asset('recruiters/image2.png')}}" alt="Image 2" width="100" height="100"></div>
                            <div class="item"><img src="{{asset('recruiters/image3.png')}}" alt="Image 3" width="100" height="100"></div>
                            <div class="item"><img src="{{asset('recruiters/image4.png')}}" alt="Image 4" width="100" height="100"></div>
                            <div class="item"><img src="{{asset('recruiters/image5.png')}}" alt="Image 5" width="100" height="100"></div>
                            <div class="item"><img src="{{asset('recruiters/image6.png')}}" alt="Image 6" width="100" height="100"></div>        
                            <div class="item"><img src="{{asset('recruiters/image7.png')}}" alt="Image 7" width="100" height="100"></div>        
                            <div class="item"><img src="{{asset('recruiters/image8.png')}}" alt="Image 8" width="100" height="100"></div>                                    
                            <div class="item"><img src="{{asset('recruiters/image9.png')}}" alt="Image 9" width="100" height="100"></div>                                    
                            <div class="item"><img src="{{asset('recruiters/image10.png')}}" alt="Image 10" width="100" height="100"></div>                
                            <div class="item"><img src="{{asset('recruiters/image11.webp')}}" alt="Image 11" width="100" height="100"></div>                                            
                            <div class="item"><img src="{{asset('recruiters/image12.webp')}}" alt="Image 12" width="100" height="100"></div>                                            
                        </div>
                    </div>        
                </section>                                                    
                

                <br>
                
                
                
                
                {{-- <div class="content">
                    <h2>Campus Life Beyond Classrooms</h2>
                    <li style="margin:20px 0;"><strong>Your Home Away From Home</strong>:  <br>Safe and comfortable accommodations fostering community and belonging.</li>
                    <li style="margin:20px 0;"><strong>Step into the Future of Learning</strong>: <br> Experience modern, tech-driven learning spaces with seamless Wi-Fi connectivity across our expansive 9.47-acre campus, creating an environment that's both connected and inspiring</li>
                    <li style="margin:20px 0;"><strong>Fueling Your Success, Deliciously</strong>: <br> Enjoy diverse and delicious dining options in our premium cafeterias, providing the energy you need to thrive.</li>
                    <li style="margin:20px 0;"><strong>Where Energy and Excitement Converge</strong>: <br> Immerse yourself in a vibrant sports and cultural hub, a place to discover your passions and connect with others.</li>
                    <li style="margin:20px 0;"><strong>Seamless Connectivity, Effortless Journeys</strong>: <br> Benefit from our convenient transport facilities, ensuring easy access to and from campus.</li>
                    <li style="margin:20px 0;"><strong>Elevate Your Potential, Define Your Path</strong>: <br> Propel your growth with our skill enhancement workshops, personalized mentorship programs, and dedicated career services.</li>
                    <li style="margin:20px 0;"><strong>Holistic Growth, Boundless Opportunities</strong>: <br> Embrace a focus on your complete development, with a rich blend of extracurricular activities and meaningful industry interactions. </li>
                </div>


                <div class="content">
                    <h2>Our Vision and Mission</h2>
                    <li style="margin:20px 0;"><strong>Vision</strong>: To be a globally recognized hub for leadership incubation, shaping agile, ethical, and forward-thinking professionals who drive sustainable business transformations.</li>
                    <li style="margin:20px 0;"><strong>Mission</strong>: To empower aspiring and next-generation leaders with transformative learning experiences that integrate sustainability, analytical thinking, and innovation, enabling them to thrive in a rapidly progressing corporate world.</li>
                </div> --}}
                
                <div class="content">
                    <h2>Admissions Details</h2>
                    <li style="margin:20px 0;"><strong>Now Open</strong>: Admissions for the 2025-26 batch are currently open.</li>
                    <li style="margin:20px 0;"><strong>Contact Us</strong>: For inquiries, reach out at <a href="mailto:admissions@seri.edu.in">admissions@seri.edu.in</a>.</li>
                    <li style="margin:20px 0;"><strong>Visit Our Website</strong>: <a href="http://www.seri.net.in/" target="_blank">www.seri.net.in</a></li>
                    <li style="margin:20px 0;"><strong>Call Us</strong>: +91-9560201536, 9560990539, 9560339929</li>
                </div>
                
                
            </div>            
        </div>
    </section>
</div>
@endsection

<script>
    $(document).ready(function() {
    $(".nav-responsive li").on("click", function() {
        $(".nav-responsive li").removeClass("active-nav"); // Remove class from all items
        $(this).addClass("active-nav"); // Add class to the clicked item
    });
});
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>   

<script>
    $(document).on('click', '.otp-btn', function () {
        let phone = $('input[type=tel]').val();

        console.log(phone);                
        $.ajax({
            url: 'send-apply-otp',
            type: 'POST',
            data: {
                _token: $('meta[name="csrf-token"]').attr('content'),
                phone: phone
            },
            success: function (res) {
                alert(res.message);
            },
            error: function (err) {
                alert("Failed to send OTP.");
            }
        });
    });

</script>
<script>
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
            loop: true,  // Enables infinite looping
            margin: 10,  // Space between images            
            autoplay: true,  // Enables auto-slide            
            dots:false,
            autoplayTimeout: 3000,  // Slide changes every 3 seconds            
            responsive: {
                0: { items: 1 },  // 1 image per slide on small screens
                600: { items: 2 },  // 2 images per slide on medium screens
                1000: { items: 3 }  // 3 images per slide on large screens
            }
        });
    });
</script>