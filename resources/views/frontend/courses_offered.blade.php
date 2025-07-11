@extends('frontend.layout')
@section('title', 'Admission')

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
        list-style: none;
        font-size: 18px;
        line-height: 1.5;
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
            
            /* flex-wrap: wrap;                                */
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


        .tabs-container {
           width: 100%;
            max-width: 1280px;
            margin: 0 auto 85px;
            position: relative;
        }

        /* Tab Buttons */
        .tab-buttons {
            display: flex;
            justify-content: space-around;
            padding: 10px;
            border-radius: 10px;
        }

        .tab-button {
            flex: 1;
            padding: 10px;
            text-align: center;
            cursor: pointer;
            font-size: 16px;
            transition: background 0.3s ease;
            border-radius: 10px;
            position: relative;
        }

        .tab-button.active {
            color: #000;
            border-bottom: 2px solid red;
            border-radius: 0;
        }

        /* Tab Content */
        .tab-content {
            display: none; /* Hide all tabs initially */
            padding: 50px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            background-size: cover;
        }

        .tab-content.active {
            display: block; /* Show only active tab */
        }

        .tab-content-card{
            background: #fff;
            border-radius: 10px;
            padding: 50px 30px;
            width: 800px;
        }  
        .tab-content h2{
            font-size: 40px;
            margin: 0;
        }
        .tab-content span{
            color: red;
        }
        .tab-content p{
            font-size: 18px;
            color: #000;
            opacity: .9;
            margin:20px 0 0;
        }

</style>

@section('main_content') 
<div data-elementor-type="wp-post" data-elementor-id="436" class="elementor elementor-436 elementor-304">
    {{-- here it is --}}
    <div class="elementor-element elementor-element-3701d24 e-flex e-con-boxed e-con e-parent e-lazyloaded"
        data-id="3701d24" data-element_type="container"
        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-0873433 e-con-full e-flex e-con e-child"
                data-id="0873433" data-element_type="container">
                <div class="elementor-element elementor-element-f7bba5a elementor-widget elementor-widget-heading animated fadeInLeft"
                    data-id="f7bba5a" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}"
                    data-widget_type="heading.default">                     
                </div>
                <div class="elementor-element elementor-element-9dac90b e-flex e-con-boxed e-con e-child"
                    data-id="9dac90b" data-element_type="container">                    
                </div>
            </div>
        </div>
    </div>    

    <section class="container-lg p-4">
        {{-- <p style="font-family: Arial, Helvetica, sans-serif; margin: 30px 0 50px 0;">HOME > <span class="text-primary">ADMISSIONS</span></p> --}}
        <div class="row d-flex flex-column-reverse flex-lg-row">
            <div class="col-lg-9 main" style="font-family:Arial, Helvetica, sans-serif;">
                <h1 style="margin:20px 0; font-weight:100; line-height:1.6;">Admissions at {{env('COLLEGE_NAME_MID')}} Engineering and Research Institute ({{ENV('COLLEGE_NAME_SHORT')}}) </h1>
                <h3 style="margin:20px 0; line-height:1.5;">Welcome to {{env('COLLEGE_NAME_SHORT')}} Admissions </h3>

                <p style="font-size: 18px; color:#444;">
                    {{env('COLLEGE_NAME_MID')}} Engineering and Research Institute is committed to developing the next generation of engineers, inventors, and innovators. Our admissions process is designed to select students who have great passion for technology, research, and problem solving. Join us on a great journey into a stimulating environment that encourages the pursuit of excellence and prepares you for a welcome career.
                </p>

                <div class="content">
                    <h2>Why Choose {{env('COLLEGE_NAME_SHORT')}}? </h2>
                    <li style="margin:20px 0;"><strong>Cutting Edge Programs</strong>: Specializations in Computer Science, Artificial Intelligence & Machine Learning, Electronics & Communication, and Information Technology. </li>
                    <li style="margin:20px 0;"><strong>Industry-Associated Curriculum</strong>: Programs with curricula based on real-world applications and associated with the industry </li>
                    <li style="margin:20px 0;"><strong>World-Class Infrastructure</strong>: Facilities which include laboratories and research centres alongside digital-based learning focuses </li>
                    <li style="margin:20px 0;"><strong>Global Exposure</strong>: Opportunities with international institutions, leading universities and leading tech companies </li>
                    <li style="margin:20px 0;"><strong>Placement & Internship Preparation</strong>: Extensive networks in the industry through affiliations with industries ensuring job-ready graduates </li>                    
                </div>


                {{-- <div class="tabs-container">
                    <!-- Tab Buttons -->
                    <div class="tab-buttons">
                        <div class="tab-button active" data-index="0">Courses Offered</div>
                        <div class="tab-button" data-index="1">Eligibility & Duration</div>
                        <div class="tab-button" data-index="2">Admission Process</div>
                        <div class="tab-button" data-index="3">Fee Structure</div>
                    </div>
                    
            
                    <!-- Tab Content -->
                    <div class="tab-content active" style="background-image: url(https://res.cloudinary.com/dqqfisfji/image/upload/v1741332722/Courses_Offers_eji5to.png);">
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
                    
                    
                    
                    <div class="tab-content" style="background-image: url(https://res.cloudinary.com/dqqfisfji/image/upload/v1741332831/International_Collaborations_j318tt.png);">
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
                </script> --}}
                
                <div class="content">
                    <h2>Programs Offered</h2>
                    <p>We offer B.Tech undergraduate programs in the following disciplines: </p>
                    <li style="margin:20px 0;">B.Tech in Computer Science & Engineering (CSE)</li>                        
                    <li style="margin:20px 0;">B.Tech in Electronics & Communication Engineering (ECE) </li>
                    <li style="margin:20px 0;">B.Tech in Computer Science & Information Technology (CSIT) </li>
                    <li style="margin:20px 0;">B.Tech in Computer Science & Engineering Artificial Intelligence & Machine Learning (AI & ML) </li>                    
                </div>
                <div class="content">
                    <h2>Eligibility Requirements</h2>

                    <li style="margin:20px 0;">Candidates must participate in <b>AKTU Counselling</b> based on their <b>JEE Mains Rank</b> or <b>CUET Rank</b> for admissions.</li>
                    <li style="margin:20px 0;">Applicants should have successfully completed 12th Standard from UP Board, CBSE, or any other equivalent board.</li>
                    <li style="margin:20px 0;">Physics, Chemistry, and Mathematics must be compulsory subjects in Standard 12th.</li>                    
                    <li style="margin:20px 0;">Candidates must achieve a minimum of 45% aggregate marks in Class 12 (40% aggregate marks for SC/ST candidates).</li>                    

                </div>
                <div class="content">
                    <h2>Admission Procedures</h2>
                    <li style="margin:20px 0;">
                        <strong>Step 1: Application</strong>
                        <p>Applications can be submitted online via our official website. You will be asked to provide details related to your personal and educational history. Necessary documentation must then be uploaded.</p>
                    </li>
                    <li style="margin:20px 0;">
                        <strong>Step 2: Entrance Examination</strong>
                        <p>JEE Main/State Entrance Exam or equivalent (when applicable). If you are a merit-based or eligible scholarship candidate, you may be considered for direct admission.</p>
                    </li>
                    <li style="margin:20px 0;">
                        <strong>Step 3: Counseling & Seat Allocation</strong>
                        <p>Candidates selected for admission will be notified by email for counseling. Seats will be allocated on a merit basis, depending on the entrance exam scores if applicable, and depending on seat availability.</p>
                    </li>
                    <li style="margin:20px 0;">
                        <strong>Step 4: Fee Payment & Admissions Process</strong>
                        <p>Deposit and secure your admission for the academic session. Submission of documents and admission approval will take place at this time.</p>
                    </li>                                        
                </div>

                <hr>
                <div class="content">
                    <table border="1" cellspacing="0" cellpadding="10">
                        <thead>
                            <tr>
                                <th>Important Dates</th>                                
                                <th>Event Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Online Application Opens</td>
                                <td>[Date]</td>
                            </tr>
                            <tr>
                                <td>Last Date for Application</td>
                                <td>[Date]</td>
                            </tr>
                            <tr>
                                <td>Entrance Exam Date</td>
                                <td>[Date]</td>
                            </tr>
                            <tr>
                                <td>Merit List Announcement</td>
                                <td>[Date]</td>
                            </tr>
                            <tr>
                                <td>Counseling & Seat Allotment</td>
                                <td>[Date]</td>
                            </tr>
                            <tr>
                                <td>Commencement of Classes</td>
                                <td>August 2025</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="content">
                    <h2>Scholarships & Financial Aid</h2>
                    <p>We offer merit-based and need-based scholarships:</p>
                    <li style="margin:20px 0;"><strong>Merit Scholarships:</strong> For students who excel in academics and entrance exams.</li>
                    <li style="margin:20px 0;"><strong>Financial Aid:</strong> Fee waivers for students from economically weaker sections.</li>
                    <li style="margin:20px 0;"><strong>Sponsored Scholarships:</strong> Corporate partners also provide scholarships for outstanding students.</li>                    
                </div>
                
                <div class="content">
                    <h2>Campus Life and Facilities</h2>
                    <li style="margin:20px 0;"><strong>Smart Classrooms and Labs:</strong> State-of-the-art computing facilities, AI labs, and IoT innovation hubs.</li>
                    <li style="margin:20px 0;"><strong>Library and Digital Access:</strong> Access to research journals, e-books, and online learning portals.</li>
                    <li style="margin:20px 0;"><strong>Hostel and Student Support:</strong> Comfortable facilities with 24*7 security and dining.</li>
                    <li style="margin:20px 0;"><strong>Sports and Extracurriculars:</strong> A fully functional sports complex, student clubs, and cultural activities.</li>                    
                </div>

                <div class="content">
                    <h2>Placements and Career Opportunities</h2>
                    <li style="margin:20px 0;"><strong>Top Recruiters:</strong> Collaborations with top IT firms, technology firms, and consulting firms.</li>
                    <li style="margin:20px 0;"><strong>Internship Programs:</strong> Practical experience in industry through real-life projects.</li>
                    <li style="margin:20px 0;"><strong>Entrepreneurial Support:</strong> Innovation hubs and startup incubators.</li>                    
                </div>
                                                                
                <div class="row">
                    <div class="col-lg-10 p-3">
                        <div id="apply-now" class="card blog-card" style="border: none; border-bottom:.1rem solid #888; border-radius:0;">                                
                            <div class="card-body" style="display: flex; align-items: center; gap: 15px; flex-wrap:wrap;">
                                <img src="{{asset('images/group-of-happy-international-students-posing-outdoors-near-university-building.jpg')}}" alt="Apply Now" style="width:300px">
                                <div class="card-cont" style="flex: 1; display:block;">
                                    <h1 style="font-size: 36px; font-weight:100; color:#00356b">Apply Now</h1>                                    
                                    <p style="margin: 5px 0; font-size:24px;">Start your journey with us today.</p>
                                </div>
                            </div>
                        </div>  
                        
                        <div id="courses-offered" class="card blog-card" style="border: none; border-bottom:.1rem solid #888; border-radius:0;">                                
                            <div class="card-body" style="display: flex; align-items: center; gap: 15px; flex-wrap:wrap;">
                                <img src="{{asset('images/group-of-happy-international-students-posing-outdoors-near-university-building.jpg')}}" alt="Courses Offered" style="width:300px">
                                <div class="card-cont" style="flex: 1; display:block;">
                                    <h1 style="font-size: 36px; font-weight:100; color:#00356b">Courses Offered</h1>                                    
                                    <p style="margin: 5px 0; font-size:24px;">Explore various programs we provide.</p>
                                </div>
                            </div>
                        </div>  
                        
                        <div id="eligibility-criteria" class="card blog-card" style="border: none; border-bottom:.1rem solid #888; border-radius:0;">                                
                            <div class="card-body" style="display: flex; align-items: center; gap: 15px; flex-wrap:wrap;">
                                <img src="{{asset('images/group-of-happy-international-students-posing-outdoors-near-university-building.jpg')}}" alt="Eligibility Criteria" style="width:300px">
                                <div class="card-cont" style="flex: 1; display:block;">
                                    <h1 style="font-size: 36px; font-weight:100; color:#00356b">Eligibility Criteria</h1>                                    
                                    <p style="margin: 5px 0; font-size:24px;">Find out if you qualify to apply.</p>
                                </div>
                            </div>
                        </div>  
                        
                        <div id="fee-structures" class="card blog-card" style="border: none; border-bottom:.1rem solid #888; border-radius:0;">                                
                            <div class="card-body" style="display: flex; align-items: center; gap: 15px; flex-wrap:wrap;">
                                <img src="{{asset('images/group-of-happy-international-students-posing-outdoors-near-university-building.jpg')}}" alt="Fee Structures" style="width:300px">
                                <div class="card-cont" style="flex: 1; display:block;">
                                    <h1 style="font-size: 36px; font-weight:100; color:#00356b">Fee Structures</h1>                                    
                                    <p style="margin: 5px 0; font-size:24px;">Understand tuition and fees details.</p>
                                </div>
                            </div>
                        </div>  
                        
                        <div id="document-checklist" class="card blog-card" style="border: none; border-bottom:.1rem solid #888; border-radius:0;">                                
                            <div class="card-body" style="display: flex; align-items: center; gap: 15px; flex-wrap:wrap;">
                                <img src="{{asset('images/group-of-happy-international-students-posing-outdoors-near-university-building.jpg')}}" alt="Document Checklist" style="width:300px">
                                <div class="card-cont" style="flex: 1; display:block;">
                                    <h1 style="font-size: 36px; font-weight:100; color:#00356b">Document Checklist</h1>                                    
                                    <p style="margin: 5px 0; font-size:24px;">Ensure you have all the required documents for admission.</p>
                                </div>
                            </div>
                        </div>  
                        
                        <div id="anti-ragging" class="card blog-card" style="border: none; border-bottom:.1rem solid #888; border-radius:0;">                                
                            <div class="card-body" style="display: flex; align-items: center; gap: 15px; flex-wrap:wrap;">
                                <img src="{{asset('images/group-of-happy-international-students-posing-outdoors-near-university-building.jpg')}}" alt="Online Anti Ragging Affidavit Procedure" style="width:300px">
                                <div class="card-cont" style="flex: 1; display:block;">
                                    <h1 style="font-size: 36px; font-weight:100; color:#00356b">Online Anti Ragging Affidavit Procedure</h1>                                    
                                    <p style="margin: 5px 0; font-size:24px;">Learn how to complete the mandatory anti-ragging affidavit.</p>
                                </div>
                            </div>
                        </div>  
                        
                        <div id="college-rules" class="card blog-card" style="border: none; border-bottom:.1rem solid #888; border-radius:0;">                                
                            <div class="card-body" style="display: flex; align-items: center; gap: 15px; flex-wrap:wrap;">
                                <img src="{{asset('images/group-of-happy-international-students-posing-outdoors-near-university-building.jpg')}}" alt="College Rules and Regulations" style="width:300px">
                                <div class="card-cont" style="flex: 1; display:block;">
                                    <h1 style="font-size: 36px; font-weight:100; color:#00356b">College Rules and Regulations</h1>                                    
                                    <p style="margin: 5px 0; font-size:24px;">Understand the rules and regulations every student must follow.</p>
                                </div>
                            </div>
                        </div>  
                        
                        <div id="prospectus" class="card blog-card" style="border: none; border-bottom:.1rem solid #888; border-radius:0;">                                
                            <div class="card-body" style="display: flex; align-items: center; gap: 15px; flex-wrap:wrap;">
                                <img src="{{asset('images/group-of-happy-international-students-posing-outdoors-near-university-building.jpg')}}" alt="Prospectus" style="width:300px">
                                <div class="card-cont" style="flex: 1; display:block;">
                                    <h1 style="font-size: 36px; font-weight:100; color:#00356b">Prospectus</h1>                                    
                                    <p style="margin: 5px 0; font-size:24px;">Discover everything about our institution in the official prospectus.</p>
                                </div>
                            </div>
                        </div>  
                        
                        <div id="admissions-policy" class="card blog-card" style="border: none; border-bottom:.1rem solid #888; border-radius:0;">                                
                            <div class="card-body" style="display: flex; align-items: center; gap: 15px; flex-wrap:wrap;">
                                <img src="{{asset('images/group-of-happy-international-students-posing-outdoors-near-university-building.jpg')}}" alt="Admissions Policy" style="width:300px">
                                <div class="card-cont" style="flex: 1; display:block;">
                                    <h1 style="font-size: 36px; font-weight:100; color:#00356b">Admissions Policy</h1>                                    
                                    <p style="margin: 5px 0; font-size:24px;">Learn about our admissions criteria and process.</p>
                                </div>
                            </div>
                        </div>  
                        
                        <div id="undergraduate" class="card blog-card" style="border: none; border-bottom:.1rem solid #888; border-radius:0;">                                
                            <div class="card-body" style="display: flex; align-items: center; gap: 15px; flex-wrap:wrap;">
                                <img src="{{asset('images/group-of-happy-international-students-posing-outdoors-near-university-building.jpg')}}" alt="Undergraduate Programs" style="width:300px">
                                <div class="card-cont" style="flex: 1; display:block;">
                                    <h1 style="font-size: 36px; font-weight:100; color:#00356b">Undergraduate Programs</h1>                                    
                                    <p style="margin: 5px 0; font-size:24px;">Explore our diverse undergraduate degree options.</p>
                                </div>
                            </div>
                        </div>  
                        
                        <div id="graduate-schools" class="card blog-card" style="border: none; border-bottom:.1rem solid #888; border-radius:0;">                                
                            <div class="card-body" style="display: flex; align-items: center; gap: 15px; flex-wrap:wrap;">
                                <img src="{{asset('images/group-of-happy-international-students-posing-outdoors-near-university-building.jpg')}}" alt="Graduate & Professional Schools" style="width:300px">
                                <div class="card-cont" style="flex: 1; display:block;">
                                    <h1 style="font-size: 36px; font-weight:100; color:#00356b">Graduate & Professional Schools</h1>                                    
                                    <p style="margin: 5px 0; font-size:24px;">Advance your career with our graduate programs.</p>
                                </div>
                            </div>
                        </div>  
                        
                        
                        <!-- Repeat similar blocks for other nav items -->
                        
                    </div>                    
                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12 nav-responsive-div">
                <ul class="nav-list nav-responsive">                    
                    <li><a href="#apply-now">Apply Now</a></li>
                    <li><a href="#courses-offered">Courses Offered</a></li>
                    <li><a href="#eligibility-criteria">Eligibility Criteria</a></li>
                    <li><a href="#fee-structures">Fee Structures</a></li>
                    <li><a href="#document-checklist">Document Checklist</a></li>
                    <li><a href="#anti-ragging">Online Anti Ragging Affidavit Procedure</a></li>
                    <li><a href="#college-rules">College Rules and Regulations</a></li>
                    <li><a href="#prospectus">Prospectus</a></li>
                    <li><a href="#admissions-policy">Admissions Policy</a></li>
                    <li><a href="#undergraduate">Undergraduate</a></li>
                    <li><a href="#graduate-schools">Graduate & Professional Schools</a></li>
                </ul>                
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