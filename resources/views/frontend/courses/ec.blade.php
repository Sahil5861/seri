@extends('frontend.layout')
@section('title', 'EC')
<link rel="stylesheet" href="{{asset('css/test-form.css')}}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style>             
        .content{
            margin: 20px;
            scroll-margin-top: 200px;
        }   
        .content li{
            margin: 20px 0;
        }
        
        .eligibility li {
            list-style: none; /* Remove default bullet */
            padding-left: 30px; /* Space for the icon */
            position: relative;   
            margin: 20px 0;         
        }

        .eligibility li::before {
            content: "";
            position: absolute;
            left: 0;
            top: 20%;
            transform: translateY(-50%);
            width: 24px; /* Larger size */
            height: 24px;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='black'%3E%3Cpath d='M10 7l5 5-5 5V7z'/%3E%3C/svg%3E");
            background-size: contain;
            background-repeat: no-repeat;
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
        .about-the-prog{
            flex-direction: column;
        }
    }

</style>
@section('main_content') 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<div data-elementor-type="wp-post" data-elementor-id="436" class="elementor elementor-436 elementor-304">        
    <section class="banner-2" style="background-image: url('../images/electronics_eng.webp');">
    {{-- <section class="banner" style="background: url('https://img.freepik.com/free-photo/am-i-doing-it-right-group-young-people-casual-clothes-working-modern-office_146671-16514.jpg?t=st=1744697523~exp=1744701123~hmac=87266e614c22534b02b99280d888c635337c4490a32f5f6adbdc0e411da6aa28&w=996') no-repeat center center / cover;"> --}}
        <div class="banner-content2">
            <h1 style="">Electronics and Communication Engineering</h1>            
            <p style="color:#fff;"><i>Where Innovation Meets Technology
                Dive into a future fueled by AI, IoT, and advanced robotics as you master the art of designing, developing, and deploying transformative technologies.</i></p>
        </div>
    </section>

    <section class="container-lg"style="padding: 40px;">
        <div class="elementor-element elementor-element-66a6537 elementor-invisible elementor-widget elementor-widget-heading"
            data-id="66a6537" data-element_type="widget"
            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
            data-widget_type="heading.default">
            <div class="elementor-widget-container">
                <h2 class="elementor-heading-title elementor-size-default">B.Tech. in Electronics & Communication Engineering</h2>                                                        
            </div>
        </div>
        <br>
            <h4>Step Into the World of Advanced Electronics and Communication Design</h4>
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
                        <button data-doc_name="{{asset('course_pdf/ec_1.pdf')}}" class="btn btn-primary_2 text-white w-100 my-1 view-doc-btn" href="#">1st Year</button>
                        <button data-doc_name="{{asset('course_pdf/ec_2.pdf')}}" class="btn btn-primary_2 text-white w-100 my-1 view-doc-btn" href="#">2nd Year</button>
                        <button data-doc_name="{{asset('course_pdf/ec_3.pdf')}}" class="btn btn-primary_2 text-white w-100 my-1 view-doc-btn" href="#">3rd Year</button>
                        <button data-doc_name="{{asset('course_pdf/ec_4.pdf')}}" class="btn btn-primary_2 text-white w-100 my-1 view-doc-btn" href="#">4th Year</button>                        
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
                <img src="{{asset('accresiations/image1.webp')}}" alt="NAAC A+">
                <p>Approved by the AICTE, India</p>
                
              </div>
              <div class="accreditation-item">
                <img style="margin-top:13px;" src="{{asset('accresiations/image2.webp')}}" alt="UGC Entitled" width="90">
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
    <div class="container p-4" style="padding: 40px;">
        <div class="navbar-box" style="position: sticky;top: 85px; margin-bottom:100px;z-index: 994; background-color:#fff;padding:5px;">
            <nav class="navbar" style="box-shadow: 0px 4px 10px rgba(0, 0, 0, 1);">
                <ul class='about-the-prog' style="display: flex;">
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-24 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px"><a href="#About_the_programme">About the Programme</a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-24 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px"><a href="#eligibility">Eligibility</a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-24 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px"><a href="#curriculum_structure">Curriculum Structure</a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-24 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px"><a href="#program_objectives">POs</a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-24 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px"><a href="#pos">PSOs</a></li>
                </ul>
            </nav>
        </div>
        <section>
            <div class="content" id="About_the_programme">
                <h2>About the Program</h2>
                <p><strong>Core Focus :</strong> SERI's B.Tech. in Electronics & Communication Engineering program prepares students for impactful careers in the rapidly evolving world of electronics and communication. The program provides a strong foundation in math and
                    science, and emphasizes the development of complex electronic devices, circuits, and systems. Students will gain expertise in areas like microelectronics, communication techniques, networks, and telecommunication systems. 
                </p>

                <p>Curriculum Highlights : The curriculum covers Electronic Devices and Circuits, Digital Principles, Analog and Digital modulation techniques, Wireless communications, Satellite and Optical communication technologies, Computer communication and Networking, Microelectronic circuits, and electronic Instrumentation and Control.</p>

                <p>Career Readiness (Combined): Graduates will be ready to drive innovation in various industries and research. </p>
                
            </div>

            <div class="content eligibility" id="eligibility">
                <h2>Eligibility</h2>                

                <li style="list-style">
                    <strong>Academic Requirement:</strong> All applicants should possess a minimum of 45% marks in any of the eligible 10+2 (or equivalent) examination process with Physics, Chemistry and Mathematics/Computer Science subjects as compulsory.
                </li>

                <li style="list-style">
                    <strong>Entrance Exam : </strong>Students will be offered an admission seat by Counseling, based on their performance in a nationally recognized Entrance test such as JEE Mains, CUET, State entrance etc.

                </li>

                <li style="list-style">
                    <strong>Selection Procedure : </strong>A robust assessment process undertaken in regards to the students' academic qualifications and performance on entrance examination will guarantee that admission is limited to qualified candidates in order to support a competitive and stimulating educational program. 
                </li>            
            </div>
            
            <div class="content" id="curriculum_structure">
                <h2>Curriculum Structure</h2>

                <strong>Focus</strong>
                <p>SERI’s curriculum is designed to develop specialized skill sets that help students to think innovatively and to efficiently develop real-world solutions to complex problems. The curriculum incorporates theoretical bases, as well as pragmatic knowledge by utilizing an array of engaged and current specialty courses</p>

                <strong>Course Examples (ECE)</strong>
                
                <li>Covers Electronic Devices and Circuits.</li>
                <li>Includes study of Digital Principles.</li>
                <li>Explores Analog and Digital modulation techniques for communication.</li>
                <li>Examines equipment and systems in Wireless communications.</li>
                <li>Covers Satellite and Optical communication technologies.</li>
                <li>Involves Computer communication and Networking.  </li>
                <li>Focuses on design and development of Microelectronic circuits.  </li>
                <li>Includes components and systems for electronic Instrumentation and Control.  </li>
                <li>Covers hardware and interfacing of computer systems.  </li>
                <li>Integrates programming skills.  </li>
                <li>Applies computers in signal processing and communication.</li>                            
            </div>

            <div class="content" id="program_objectives">
                <h2>Program Outcomes (POs)</h2>            
                

                <li>
                    <strong>Foundation</strong>
                    <p>To develop a strong understanding of the fundamental principles of electronics, communication, and related areas</p>
                </li>
                
                <li>
                    <strong>Problem Solving</strong>
                    <p>To foster critical thinking, problem-solving abilities, and creativity in addressing complex challenges in electronics and communication</p>
                </li>
                <li>
                    <strong>Critical Thinking & Innovation</strong>
                    <p>To develop critical thinking abilities, problem solving, and creativity in the simplification and approaches to complex technological issues, allowing for innovative products and solutions.</p>
                </li>
                <li>
                    <strong>Career Prep</strong>
                    <p> To prepare graduates for successful careers in electronics and communication industries, research, and academia.</p>
                </li>
                <li>
                    <strong>Interdisciplinary</strong>
                    <p>To cultivate an appreciation for the interdisciplinary nature of electronics and communication and its connections to other fields. </p>
                </li>
            </div>

            <div class="content" id="pos">
                <h2>Program Specific Outcomes (PSOs)</h2>                
                <li><strong>Core Skills :</strong> Design and develop electronic devices, circuits, and systems.</li>
                <li><strong>Communication Focus :</strong> Work in the design and development of communication systems and networks</li>
                <li><strong>Microelectronics :</strong> Contribute to advancements in microelectronics and embedded systems</li>
                <li><strong>Applications :</strong> Apply electronics and communication technologies in diverse fields such as healthcare, automation, and IT.</li>
                <li><strong>Career Paths :</strong> Pursue careers in research, academia, and various industries.</li>                            
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

