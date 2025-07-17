@extends('frontend.layout')
@section('title', 'CSIT')
<link rel="stylesheet" href="{{asset('css/test-form.css')}}">

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
        background-position-x: 20%;
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
    <section class="banner-2 baner-dark" style="background-image: url('../images/csit_banner.webp');">
        <div class="banner-content2">
            <h1 style="">Computer Science & IT: Code the Future. Build the World.</h1>            
            <p style="color:#fff;"><i> "Master the theory and application of computing. From algorithms to cloud computing, shape tomorrow's technology."</i></p>
        </div>
    </section>

    <section class="container-lg"style="padding: 40px;">
        <div class="elementor-element elementor-element-66a6537 elementor-invisible elementor-widget elementor-widget-heading"
            data-id="66a6537" data-element_type="widget"
            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
            data-widget_type="heading.default">
            <div class="elementor-widget-container">
                <h2 class="elementor-heading-title elementor-size-default">Computer Science and Information Technology (CS & IT)</h2>                                                        
            </div>
        </div>
        <br>
            <h4>Building the future by mastering the theoretical foundations and practical applications of computing</h4>
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
                <p>The Computer Science & Information Technology program at {{env('COLLEGE_NAME')}} integrates the core principles of computer science with IT. The Computer Science (CS) and Information Technology (IT) program is designed to provide students with a comprehensive understanding of both the theoretical and practical aspects of computing. </p>
                <p>It covers core computer science concepts, including algorithms, data structures, computer organization, operating systems, databases, and computer networks. Additionally, the program delves into IT-specific areas such as cloud computing and cybersecurity.</p>                
                
            </div>

            <div class="content" id="eligibility">
                <h2>Eligibility</h2>                
                <p>To pursue the CS & IT program @ SERI, candidates must meet the following eligibility requirements:</p>
                <li style="list-style">
                    <strong>Academic Qualification:</strong>Applicants should have secured a minimum aggregate of 45% in their 10+2 (or equivalent) examinations, with mandatory subjects being Physics, Mathematics, and either Chemistry or Computer Science
                </li>

                <li>
                    <strong>Admission Basis : </strong>
                    <ul>
                        <li style="list-style:circle;">Admission is primarily granted based on the scores achieved in the <b>JEE Mains,CUET score,or state entrance exam. </b></li>
                        <li style="list-style:circle;">Candidates can alternatively apply for Management quota if he/she has not appeared in any entrance through {{env('COLLEGE_NAME')}} entrance exam .</li>
                    </ul>

                </li>

                <li style="list-style">
                    <strong>Selection Procedure : </strong>A robust assessment process undertaken in regards to the students' academic qualifications and performance on entrance examination will guarantee that admission is limited to qualified candidates in order to support a competitive and stimulating educational program. 
                </li>            
            </div>
            
            <div class="content" id="curriculum_structure">
                <h2>Curriculum Structure</h2>                
                <p>The curriculum @ SERI is designed to provide a strong foundation in both computer science and information technology. Key areas of study include:</p>

                <strong>Core Computer Science (CSE & IT)</strong>
                
                <li>Programming Fundamentals: C, C++, Java, Python</li>
                <li>Data Structures and Algorithms: Arrays, Linked Lists, Stacks, Queues, Trees, Graphs, Sorting, Searching</li>
                <li>Computer Architecture and Organization: CPU, Memory, Input/output, Buses</li>
                <li>Operating Systems: Process Management, Memory Management, File Systems  </li>
                <li>Databases: Relational Databases, SQL, Database Design</li>
                <li>Computer Networks: Networking Concepts, TCP/IP, Protocols</li>
                <li>Theory of Computation: Automata, Formal Languages </li>
                <li>Compiler Design: Lexical Analysis, Parsing, Code Generation </li>
                <li>Discrete Mathematics: Sets, Logic, Graph Theory</li>
                <li>Engineering Mathematics: Calculus, Linear Algebra, Probability and Statistics  </li>
                <li>Design and Analysis of Algorithms</li>  
                
                
                <strong>IT-Specific Areas</strong>

                <li>Cloud Computing: Cloud Services, Virtualization, Cloud Platforms  </li>
                <li>Cybersecurity: Network Security, Cryptography, Ethical Hacking</li>
                <li>Web Development: HTML, CSS, JavaScript, Server-Side Languages </li>
                <li>Mobile Application Development: Android, iOS </li>
                <li>Artificial Intelligence (AI): Machine Learning, Neural Networks</li>
                <li>Data Science: Data Mining, Data Analysis</li>


                <strong>Other Important Aspects</strong>
                <li>Professional Ethics  </li>
                <li>Project Management </li>
                <li>Software Engineering</li>
                <li>Human Computer Interaction (HCI)</li>
                <li>Computer Graphics </li>
                <li>Robotics</li>
                <li>Internet of Things (IoT)</li>


            </div>

            <div class="content" id="program_objectives">
                <h2>Program Outcomes (POs)</h2>   
                
                <p>Graduates of the Computer Science and Information Technology program @ SERI will be able to:</p>
                
                <li>Apply knowledge of computing fundamentals, mathematics, and engineering principles to solve complex problems.</li>
                <li>Design, implement, and evaluate computer-based systems, processes, components, or programs to meet specified needs with appropriate consideration for public health and safety, and cultural, societal, and environmental considerations.</li>
                <li>Analyze problems, identify and define the computing requirements appropriate to their solution.</li>
                <li>Use current techniques, skills, and tools necessary for computing practice.</li>
                <li>Function effectively on teams to accomplish a common goal.  </li>
                <li>Communicate effectively with a range of audiences.</li>
                <li>Recognize the social, ethical, and professional responsibilities.</li>
                <li>Engage in continuous learning and adapt to emerging technologies.</li>                
            </div>

            <div class="content" id="pos">
                <h2>Program Specific Outcomes (PSOs)</h2>   
                
                <p>Graduates of the Computer Science and Information Technology program at {{env('COLLEGE_NAME')}} will be able to:</p>
                
                <li>Specialize in the areas of network security, database management, and software solutions.</li>
                <li>Develop and manage IT infrastructure, ensuring secure and efficient operations.</li>
                <li>Apply computer science principles to design and implement software systems for real-life applications.</li>
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

