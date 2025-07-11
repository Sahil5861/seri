@extends('frontend.layout')
@section('title', 'AI ML')
<link rel="stylesheet" href="{{asset('css/test-form.css')}}">
<style>           
        .content{
            margin: 20px;
            scroll-margin-top: 200px;
        }   
        
        .eligibility li {
            list-style: none; /* Remove default bullet */
            padding-left: 30px; /* Space for the icon */
            position: relative;   
            margin: 20px 0;         
        }
        .content ul li{
            margin: 20px 0;
        }

        .eligibility li::before {
            content: "";
            position: absolute;
            left: 0;
            top: 44%;
            transform: translateY(-50%);
            width: 24px; /* Larger size */
            height: 24px;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='black'%3E%3Cpath d='M10 7l5 5-5 5V7z'/%3E%3C/svg%3E");
            background-size: contain;
            background-repeat: no-repeat;
        }
        
        .navbar-container{
            position:-webkit-sticky;            
            left: 0;         
            width: 100%;   
            top: 100px;
            z-index: 990; /* Higher than other elements to keep it on top */
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

        @media screen and (max-width:768px) {
        .banner-2 {
            background-position-x: left;
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
        .about-the-prog{
            flex-direction: column;
        }
    }
</style>
@section('main_content') 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<div data-elementor-type="wp-post" data-elementor-id="436" class="elementor elementor-436 elementor-304">        
    <section class="banner-2 baner-dark" style=" background-image: url('../images/aiml_banner.jpg');">
    {{-- <section class="banner" style=" background: url('https://img.freepik.com/free-photo/robot-human-hands-interacting_23-2151966731.jpg?t=st=1744698058~exp=1744701658~hmac=e4debbe3b9dcb405a01a7a960460ff9fe7180d2e7fb28988d4b07045913f37bd&w=1060') no-repeat center center / cover;"> --}}
        <div class="banner-content2">
            <h1 style="">Computer Science and Engineering (AI/ML)</h1>            
            <h4>"Empowering Innovators at SERI with AI & Machine Learning"</h4>
            <p style="color:#fff;"><i>Master transformative technologies like AI and ML in a program that blends foundational Computer Science expertise with innovation to shape industries and enrich lives.</i></p>
        </div>
    </section>

    <section class="container-lg"style="padding: 40px;">
        <div class="elementor-element elementor-element-66a6537 elementor-invisible elementor-widget elementor-widget-heading"
            data-id="66a6537" data-element_type="widget"
            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
            data-widget_type="heading.default">
            <div class="elementor-widget-container">
                <h2 class="elementor-heading-title elementor-size-default">B.Tech in Computer Science & Engineering </h2>                                        
                <br>
                <h3>(AI/ML)</h3>
            </div>
        </div>
        <br>
            <h4>Creating Trailblazers in ARTIFICIAL INTELLIGENCE (AI) & MACHINE LEARNING (ML) </h4>
        <br>
        {{-- <p>Program Level | Duration</p>
        <b>Undergraduate | 4 years</b> --}}

        <div class="boxes">
            <div class="box box1">
                Program Level
                <b>Undergraduate</b>
            </div>
            <div class="box box2">
                Duration 
                <b>4 years</b>
            </div>
        </div>

        <br>
        <div class="row p-0">
            <div class="col-md-3 mb-3">
                <div class="accordion-item">
                    <div class="accordion-header btn-primary_2 text-light"><i class="fa-solid fa-angles-right"></i> Check Syllabus</div>
                    <div class="accordion-content">
                        <button data-doc_name="{{asset('course_pdf/aiml_1.pdf')}}" class="btn btn-primary_2 text-white w-100 my-1 view-doc-btn" href="#">1st Year</button>
                        <button data-doc_name="{{asset('course_pdf/aiml_2.pdf')}}" class="btn btn-primary_2 text-white w-100 my-1 view-doc-btn" href="#">2nd Year</button>
                        <button data-doc_name="{{asset('course_pdf/aiml_3.pdf')}}" class="btn btn-primary_2 text-white w-100 my-1 view-doc-btn" href="#">3rd Year</button>
                        <button data-doc_name="{{asset('course_pdf/aiml_4.pdf')}}" class="btn btn-primary_2 text-white w-100 my-1 view-doc-btn" href="#">4th Year</button>                        
                    </div>
                </div>
            </div> 
            
            <div class="col md-2 mb-3">
                <a href="brouchers.pdf" class="btn btn-primary_2 text-white download-btn" download>Download Brouchers</a>
            </div>
        </div>

        <section class="accreditation-section">
            <h3>Program Accreditations</h3>
            <div class="accreditation-logos">
              <div class="accreditation-item">
                <img src="{{asset('accresiations/image1.png')}}" alt="NAAC A+">
                <p>Approved by the AICTE, India</p>
                
              </div>
              <div class="accreditation-item">
                <img style="margin-top:13px;" src="{{asset('accresiations/image2.png')}}" alt="UGC Entitled" width="90">
                <p>Affiliated with Dr. A.P.J. Abdul Kalam Technical University</p>
              </div>      
            </div>
        </section>

        <!-- Modal -->
        <div class="modal fade" id="documentModal" tabindex="-1" aria-labelledby="documentModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title">Document Preview</h5>
                <div class="ms-auto d-flex align-items-center gap-2">
                    {{-- <a id="downloadLink" href="#" class="btn btn-sm btn-success" download target="_blank">Download</a>
                    <button class="btn btn-sm btn-warning" onclick="printIframe()">Print</button> --}}
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                </div>
                <div class="modal-body p-0" style="height: 80vh;">
                <iframe id="docFrame" src="" style="width: 100%; height: 100%;" frameborder="0"></iframe>
                </div>
            </div>
            </div>
        </div>


    </section>
    <div class="container p-4" style="padding: 40px; position:unset;">
        <div class="navbar-box" style="position: sticky;top: 85px; margin-bottom:100px;z-index: 994; background-color:#fff;padding:5px;">
            <nav class="navbar" style="box-shadow: 0px 4px 10px rgba(0, 0, 0, 1);">
                <ul class='about-the-prog' style="display: flex;">
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-24 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px"><a href="#About_the_programme">About the Programme</a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-24 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px"><a href="#eligibility">Eligibility</a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-24 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px"><a href="#curriculum_structure">Curriculum Structure</a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-24 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px"><a href="#program_objectives">Program Objectives</a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-24 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px"><a href="#pos">Program Specific Outcomes (PSOs)</a></li>
                </ul>
            </nav>
        </div>
        <section>
            <div class="content" id="About_the_programme">
                <h2>About the Programme</h2>
                <p>SERI's B.Tech. in Computer Science and Engineering (AI/ML) program is geared toward providing students with deeper understanding and specialization in Artificial Intelligence (AI) and Machine Learning (ML), two disruptive technologies that will have an impact on the future of many industries. </p>
                <p>This program is both interdisciplinary and applied; students will consider the role of AI in advancing particularly important technologies, including self-driving cars, AI-controlled drones, and smart-living improvements to life. </p>
                <p>Students will also examine leading issues such as AI-powered transaction security; personalized medicine to individuals; and predictive analytics that promote business leadership and sales. </p>
                <p>Graduating students from SERI will be ready to participate in leading advances in AI and ML, and this will be true because of SERI's focus on innovation and excellence.</p>                
            </div>

            <div class="content" id="eligibility">
                <h2>Eligibility</h2>                
                <strong>Minimum Academic Eligibility</strong>
                <p>All applicants should possess a minimum of 50 percentile marks in any of the eligible 10+2 (or equivalent ) examination process with Physics, Chemistry and Mathematics/Computer Science subjects as compulsory. </p>
                <br>

                <strong>Entrance Test</strong>
                <p>Students will be offered an admission seat based on their performance in a nationally recognized Entrance test such as AKTU Entrance Test or JEE Mains." </p>
                <br>

                <strong>Selection Procedure</strong>
                <p>A robust assessment process undertaken in regards to the students' academic qualifications and performance on entrance examination will guarantee that admission is limited to qualified candidates in order to support a competitive and stimulating educational program."</p>
            </div>
            
            <div class="content" id="curriculum_structure">
                <h2>Curriculum Structure</h2>
                <p>SER’s curriculum is designed to develop specialized skill sets that help students to think innovatively and to efficiently develop real-world solutions to complex problems. The curriculum incorporates theoretical bases, as well as pragmatic knowledge by utilizing an array of engaged and current specialty courses.</p>
                <strong>Specialty Courses</strong>   
                <ul>
                    <li><strong>Computer Graphics:</strong> Learn to produce stunning visual communication.</li>
                    <li><strong>Artificial Intelligence (AI):</strong>Investigate AI technologies to improve human-computer interaction.</li>
                    <li><strong>Human-Computer Interaction:</strong> Design systems for human engagement with technology.</li>
                    <li><strong>Robotics: </strong> Design systems for human engagement with technology.</li>
                    <li><strong>Database Systems:</strong>Understand the structure of data and how to manage and operate effectively.</li>
                    <li><strong>Web Technology:</strong>Develop websites for dynamic and scalable web-based solutions.</li>
                    <li><strong>Networked and Cloud-based Computing:</strong> Develop proficiency with both cloud-based infrastructure and distributed systems.</li>
                    <li><strong>Cyber Security:</strong> Investigate technology to protect systems and data from cyber attacks.</li>    
                </ul>                
                
                <strong>Real-World Problem-Solving Skills</strong>
                <p>Through this variety of courses, students will learn to analyze problems and design innovative solutions, including</p>                

                <div class="eligibility">
                    <li>Designing computer models and software to transform educational systems.</li>
                    <li>Producing 3-D graphics to visualize and illustrate historical artifacts.</li>
                    <li>Developing natural language understanding in order to improve communication with machines</li>
                    <li>Interpreting imaging in the medical field and for diagnostic treatment</li>
                    <li>Utilizing computing technology to create art and invoke creativity.</li>
                    <li>Designing algorithms to manipulate and improve the capabilities of next generation technologies.</li>                
                </div>
                <br>                
            </div>

            <div class="content" id="program_objectives">
                <h2>Program Objectives</h2>            
                <p>The Bachelor of Technology (B.Tech) in Computer Science and Engineering program is carefully crafted to provide students with the broad foundation of knowledge, practical skills, and creative thinking to succeed in the fast-changing technology environment.</p>
                <p>The objectives of the program are: </p>

                <li>
                    <strong>Strong Academic Foundation</strong>
                    <p> To develop a strong appreciation of the core principles of computer science and engineering (computability, algorithms, programming languages, and software/hardware design) in order to develop a strong academic foundation.</p>
                </li>
                
                <li>
                    <strong>Real World Problem Solving</strong>
                    <p>To provide students with the knowledge to analyze, design, and develop software and hardware systems, in order to solve real-world, practical problems in a variety of environments and domains.</p>
                </li>
                <li>
                    <strong>Critical Thinking & Innovation</strong>
                    <p> To develop critical thinking skills, problem solving, and creativity, in regards to simplifying and approaching complex technological problems, which leads to innovative products and solutions.</p>
                </li>
                <li>
                    <strong>Career Preparedness</strong>
                    <p> To prepare career-ready computing professionals who can adapt and cope with emerging technology, while meeting industry needs and advancing new knowledge in computing.</p>
                </li>
                <li>
                    <strong>Interdisciplinary Connection</strong>
                    <p> To cultivate an appreciation for the connection of computer science to other disciplines - math, science, and engineering; and cultivate a broader perspective of technology."</p>
                </li>
            </div>

            <div class="content" id="pos">
                <h2>Program Specific Outcomes (PSOs)</h2>
                <p>The role of Computer Science Engineers falls in any one of the following categories:</p>

                <li>Design and develop software applications for different industries</li>
                <li>Manages the software, hardware & networks in any industry</li>
                <li>Involves in the design and development of the hardware components of PCs & laptops</li>
                <li>Develops software for peripheral computing devices such as printers, modems, and scanners</li>
                <li>Writes code and algorithms for operating systems such as Windows, Linux, etc.</li>
                <li>Develops the process and software for both domestic and industrial automation"</li>
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
@endsection

