@extends('frontend.layout')
@section('title', 'R & D cell')

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
        list-style:none;
        font-size: 18px;
        line-height: 1.5;
        margin: 20px 0;
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

</style>

@section('main_content') 
<div data-elementor-type="wp-post" data-elementor-id="436" class="elementor elementor-436 elementor-304" style="background-color: #fff;">
    {{-- here it is --}}      
    <div class="banner banner-dark" style="background: url('../images/person-using-ar-technology-their-daily-occupation (1).jpg') no-repeat center center / cover;">
        <div class="banner-content">
            <h1>Become a Part of The Change: Innovate, Design, Inspire at SERI’s Research & Development Hub</h1>
            <p><i>Looking for a future beyond just a degree and job? Then, come be a part of SERI’s R&D Cell and co-create next-gen products and systems with innovators in academia and industry.</i></p>
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
                <h1 style="margin:20px 0; font-weight:100; line-height:1.6;"></h1>                                

                <p></p>
                <br>
                <div class="content"> 
                    <h1>Release Your Inner Innovator At SITASRM Engineering and Research Institute (SERI)</h1>                   
                    <br>
                    <h4>We are not just delivering engineering education, we are steady to help you create the future! </h4>
                    <br>
                    <p>Tired of the conventional degree path? At SERI, we're not just about education; we're actively investing in your potential to shape the future. Our Research and Development Cell stands as a testament to this commitment, providing students and faculty with the resources to collaborate on groundbreaking projects. Whatever your interest in AI, green energy, embedded systems, or robotics, this is your lab, your launchpad, and your legacy.</p>
                    <p>What truly distinguishes SERI within the educational landscape of Noida is our profound dedication to funding student-led research and development initiatives. We believe in providing the financial backing necessary to transform your ideas into tangible solutions. Our Research and Development Cell actively seeks and facilitates opportunities for students to access grants and resources, ensuring that promising projects receive the support they need to flourish. This commitment positions us uniquely to empower undergraduate research within the region.</p>
                    <p>Here, we also foster entrepreneurial culture, contribute towards economic growth, and advance society through innovation. To do this the R&D Cell conducts:</p>

                    
                    <ul>
                        <li style="list-style: disc;">interactions with entrepreneurs</li>
                        <li style="list-style: disc;">provides skill development training</li>
                        <li style="list-style: disc;">implements government-sponsored projects and </li>
                        <li style="list-style: disc;">incubates entrepreneurial opportunities for students through several planned activities and events</li>
                    </ul>
                </div>

                <div class="content">
                    <h4>How SERI’s R&D Cell is Your Innovation HQ?</h4>

                    <p>SERI's Research and Development Cell is meticulously designed to align with these UGC guidelines and go a step further. Our proactive approach to funding student research, coupled with state-of-the-art labs and dedicated mentorship, establishes us as a leading institution in nurturing young innovators in Noida. </p>
                    <p>We don't just follow guidelines; we create an environment where your research aspirations are actively supported and funded, making us a premier choice for aspiring engineers and researchers seeking substantial undergraduate research opportunities in the area.</p>
                    <p>In a world powered by technology, research is no longer a luxury, but rather a necessity. The R&D Cell is a flexible hub of invention, experimentation, and transformation with the purpose of preparing students for the demands and changes of the workforce around the globe.</p>

                </div>

                <div class="content">
                    <h4>What Sets Us Apart?</h4>
                    <ul>
                        <li style="list-style: disc;">We tackle real-world problems addressing industry sector challenges.</li>
                        <li style="list-style: disc;">Conduct research with local, national, and international agencies</li>
                        <li style="list-style: disc;">Advanced facilities like Labs open 24/7, digital simulation tools, and AI-enabled systems.</li>
                        <li style="list-style: disc;"> SERI provides support for transforming ideas into practice, from mentorship to funding guidance.</li>
                        <li style="list-style: disc;">Mentorship from highly qualified faculty helps in shaping your research idea</li>
                    </ul>
                </div>

                <div class="content">
                    <h4>Your Ideas Deserve to Exist</h4>
                    <p>SERI’s R&D Cell exists to transform your ideas from paper into practice. SERI can help you go from an idea, to execution; including:</p>
                    <ul>
                        <li style="list-style: disc;">Engage in regular encounters with entrepreneurs and innovators</li>
                        <li style="list-style: disc;">Participate in innovation and talent exhibitions</li>
                        <li style="list-style: disc;">Dedicated incubation support for startups/entrepreneurs</li>
                        <li style="list-style: disc;">Research projects funded by government and/or private organizations</li>
                        <li style="list-style: disc;">Competitions for business models and prototypes</li>
                    </ul>
                </div>


                <div class="content">
                    <h4>Skill based Self-Employability Training</h4>                    
                    <ul>
                        <li style="list-style: disc;">Do you want to try and develop a product?</li>
                        <li style="list-style: disc;">Do you want to try and publish a paper?</li>
                        <li style="list-style: disc;">Do you want to try and develop a startup?</li>                        
                    </ul>

                    <p>We can help you with everything you ask for! </p>
                </div>

                <div class="content">
                    <h4>Skill based Self-Employability Training</h4>
                    <ul>
                        <li style="list-style: disc;"><strong>Find your passion</strong> – find out what engineering problem you are interested in</li>
                        <li style="list-style: disc;"><strong>Understand the Problem</strong> – make sure it has real-world relevance</li>
                        <li style="list-style: disc;"><strong>Design a Solution</strong> – work with faculty</li>
                        <li style="list-style: disc;"><strong>Develop a Prototype</strong> – Participate in our state-of-the-art labs</li>
                        <li style="list-style: disc;"><strong>Deploy your Idea</strong> – Showcase at demos, exhibitions, etc</li>
                    </ul>
                </div>


                <div class="content">
                    <h4>Transform Ideas into Impact</h4>
                    <ul>
                        <li style="list-style: disc;">Want to create something outside the syllabus</li>
                        <li style="list-style: disc;">Have ideas but no space to experiment</li>
                        <li style="list-style: disc;">Need some expert mentorship to develop my projects</li>
                        <li style="list-style: disc;">Want to collaborate with real organizations</li>                        
                        <li style="list-style: disc;">Want to win research grants</li>
                        <li style="list-style: disc;">Want to be seen, heard, and respected as a creator </li>
                    </ul>
                    <p>If you said only one YES, you belong here. </p>
                </div>


                <div class="content">
                    <h4>Why choose SERI ? </h4>
                        <ul>
                            <li style="list-style: disc;">Curriculum that is directly aligned with industry</li>
                            <li style="list-style: disc;">AI Blended Learning vs Traditional Learning</li>
                            <li style="list-style: disc;">International Vision, Indian Principles</li>
                            <li style="list-style: disc;">Placement Specific Mentoring</li>
                            <li style="list-style: disc;">Future-Ready Campus, at Greater Noida</li>
                            <li style="list-style: disc;">Affiliated to AKTU<sup>*</sup></li>
                            <li style="list-style: disc;">Approved by the AICTE<sup>*</sup></li>
                        </ul>
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