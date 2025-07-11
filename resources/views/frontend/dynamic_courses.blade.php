@extends('frontend.layout')
@section('title', 'Course - Btech')

<style>
    .elementskit-entry-thumb img{
        height: 422px !important;
    }

    .elementskit-post-body{
        min-height: max-content;
        height: 500px;

    }

    .banner {
        height: 73vh;
        position: relative;
        overflow: hidden;  
        background: url('../images/btech_course_image.png') center center / cover no-repeat;       
    }
    

    @media (max-width:750px){
        .banner {
            background: url('../images/btech_course_image.png') left center / cover no-repeat;          
        }
    }
</style>

@section('main_content') 
<div data-elementor-type="wp-post" data-elementor-id="436" class="elementor elementor-436 elementor-304">
    {{-- <div class="elementor-element elementor-element-3701d24 e-flex e-con-boxed e-con e-parent e-lazyloaded" style="background: url('../images/courses.jpg') center center / cover no-repeat;"
        data-id="3701d24" data-element_type="container"
        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-0873433 e-con-full e-flex e-con e-child"
                data-id="0873433" data-element_type="container">
                <div class="elementor-element elementor-element-f7bba5a elementor-widget elementor-widget-heading animated fadeInLeft"
                    data-id="f7bba5a" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}"
                    data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h1 class="elementor-heading-title elementor-size-default">Your Path to Engineering Excellence Starts Here Explore B.Tech Programs at SERI</h1>
                    </div>
                </div>
                <div class="elementor-element elementor-element-9dac90b e-flex e-con-boxed e-con e-child"
                    data-id="9dac90b" data-element_type="container">
                    <div class="e-con-inner">
                        <div class="elementor-element elementor-element-866d9b9 elementor-widget__width-initial elementor-widget-divider--view-line elementor-widget elementor-widget-divider animated fadeInUp"
                            data-id="866d9b9" data-element_type="widget"
                            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                            data-widget_type="divider.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-divider">
                                    <span class="elementor-divider-separator">
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-d9061a3 elementor-widget-mobile__width-initial elementor-widget elementor-widget-text-editor animated fadeInRight"
                            data-id="d9061a3" data-element_type="widget"
                            data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;}"
                            data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <p>College is where you are shaped according to the person you want to be in the
                                    future.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <section class="banner"></section>
    <div class="elementor-element elementor-element-253d0550 e-flex e-con-boxed e-con e-parent e-lazyloaded" data-id="253d0550" data-element_type="container">
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-6e597f42 elementor-widget elementor-widget-elementskit-blog-posts" data-id="6e597f42" data-element_type="widget" data-widget_type="elementskit-blog-posts.default">
                <div class="elementor-widget-container">
                    {{-- <div class=" table-responsive">
                        <table class="table table-striped table-bordered ">
                            <thead>
                                <tr>
                                    <th class="text-center" colspan="3">B tech Course</th>
                                </tr>
                                <tr>
                                    <th class="text-center">Degree</th>
                                    <th class="text-center">Course</th>
                                    <th class="text-center">Duration(Yrs)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center ">
                                <tr>
                                    <td>B Tech</td>
                                    <td>Computer science & Engineering (CSE)</td>
                                    <td>04</td>
                                </tr>
                                <tr>
                                    <td>B Tech</td>
                                    <td>Electronics & Communication Engineering (ECE)</td>
                                    <td>04</td>
                                </tr>
                                <tr>
                                    <td>B Tech</td>
                                    <td>Mechanical Engineering (ME)</td>
                                    <td>04</td>
                                </tr>
                                <tr>
                                    <td>B Tech</td>
                                    <td>Civil Engineering (CE)</td>
                                    <td>04</td>
                                </tr>
                            </tbody>
                        </table>    
                    </div>                                      
                    <div class=" table-responsive">
                        <table class="table table-striped table-bordered ">
                            <thead>
                                <tr>
                                    <th class="text-center" colspan="3">Direct Entry Diploma/B Sc holders into the Second Year of the B. Tech (LEET) Program</th>
                                </tr>
                                <tr>
                                    <th class="text-center">Degree</th>
                                    <th class="text-center">Course</th>
                                    <th class="text-center">Duration(Yrs)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center ">
                                <tr>
                                    <td>B Tech</td>
                                    <td>Computer science & Engineering (CSE)</td>
                                    <td>03</td>
                                </tr>
                                <tr>
                                    <td>B Tech</td>
                                    <td>Electronics & Communication Engineering (ECE)</td>
                                    <td>03</td>
                                </tr>
                                <tr>
                                    <td>B Tech</td>
                                    <td>Mechanical Engineering (ME)</td>
                                    <td>03</td>
                                </tr>
                                <tr>
                                    <td>B Tech</td>
                                    <td>Civil Engineering (CE)</td>
                                    <td>03</td>
                                </tr>
                            </tbody>
                        </table>    
                    </div>  --}}
                    <div class="ekit-wid-con">
                        <div id="post-items--6e597f42" class="row post-items">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="elementskit-post-image-card">
                                    <div class="elementskit-entry-header">
                                        <a href="#btech_cse" class="elementskit-entry-thumb">
                                            <img decoding="async" src="{{asset('courses2/cse.jpg')}}" alt="B tech">
                                        </a><!-- .elementskit-entry-thumb END -->

                                        <div class="elementskit-meta-categories">
                                            <span class="elementskit-meta-wraper">
                                                <span><a href="#btech_cse"
                                                        rel="category tag">Program</a></span>
                                            </span>
                                        </div>

                                    </div><!-- .elementskit-entry-header END -->

                                    <div class="elementskit-post-body">
                                        <h2 class="entry-title">
                                            <a href="#btech_cse">Computer Science & Engineering</a>
                                        </h2>

                                        <div class="post-meta-list">
                                            <span class="meta-author">
                                                <i aria-hidden="true" class="icon icon-user"></i> <a href="#"class="author-name">Bobbie Navarro</a>
                                            </span>
                                            <span class="meta-date">
                                                <i aria-hidden="true" class="icon icon-calendar-full"></i> <span
                                                    class="meta-date-text">
                                                    November 29, 2023 </span>
                                            </span>
                                        </div>
                                        <p>Dive into the dynamic world of Computer Science and Engineering at SERI! This program equips you to design, develop, and analyze versatile software and hardware solutions for business, science, and society. Explore core CSE principles alongside cutting-edge technologies. You'll gain essential skills for diverse careers like software development, hardware engineering, system design, and network administration. Our interdisciplinary approach fosters innovation and prepares you to tackle complex problems, ensuring you're ready for an engaging future in technology.  </p>
                                        <div class="btn-wraper">
                                            <a class="elementskit-btn whitespace--normal" id=""
                                                href="{{route('view-courses', 'cse')}}">
                                                Learn More <i aria-hidden="true" class="icon icon-right-arrow2"></i>
                                            </a>

                                        </div>
                                    </div><!-- .elementskit-post-body END -->
                                </div>                            
                            </div>                                                     
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="elementskit-post-image-card">
                                    <div class="elementskit-entry-header">
                                        <a href="#btech_cse" class="elementskit-entry-thumb">
                                            <img decoding="async" src="{{asset('courses2/ece.jpg')}}" alt="B tech">
                                        </a><!-- .elementskit-entry-thumb END -->

                                        <div class="elementskit-meta-categories">
                                            <span class="elementskit-meta-wraper">
                                                <span><a href="#btech_cse"
                                                        rel="category tag">Program</a></span>
                                            </span>
                                        </div>

                                    </div><!-- .elementskit-entry-header END -->

                                    <div class="elementskit-post-body">
                                        <h2 class="entry-title">
                                            <a href="#btech_cse">Electronics & Communication Engineering</a>
                                        </h2>

                                        <div class="post-meta-list">
                                            <span class="meta-author">
                                                <i aria-hidden="true" class="icon icon-user"></i> <a href="#"class="author-name">Bobbie Navarro</a>
                                            </span>
                                            <span class="meta-date">
                                                <i aria-hidden="true" class="icon icon-calendar-full"></i> <span
                                                    class="meta-date-text">
                                                    November 29, 2023 </span>
                                            </span>
                                        </div>


                                        <p>Shape the future of connectivity and electronic innovation with SERI's B.Tech in ECE. This program builds a strong foundation in math and science, focusing on the design and development of complex electronic devices, circuits, and communication systems. Gain expertise in microelectronics, wireless and satellite communication, computer networking, and instrumentation. Prepare for impactful careers driving advancements across diverse industries, ready to innovate in the rapidly evolving world of electronics and telecommunications.  </p>
                                        <div class="btn-wraper">
                                            <a class="elementskit-btn whitespace--normal" id=""
                                                href="{{route('view-courses', 'ec')}}">
                                                Learn More <i aria-hidden="true" class="icon icon-right-arrow2"></i>
                                            </a>

                                        </div>
                                    </div><!-- .elementskit-post-body END -->
                                </div>                            
                            </div>                         

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="elementskit-post-image-card">
                                    <div class="elementskit-entry-header">
                                        <a href="#btech_cse" class="elementskit-entry-thumb">
                                            <img decoding="async" src="{{asset('courses2/csit2.jpg')}}" alt="B tech">
                                        </a><!-- .elementskit-entry-thumb END -->

                                        <div class="elementskit-meta-categories">
                                            <span class="elementskit-meta-wraper">
                                                <span><a href="#btech_cse"
                                                        rel="category tag">Program</a></span>
                                            </span>
                                        </div>

                                    </div><!-- .elementskit-entry-header END -->

                                    <div class="elementskit-post-body">
                                        <h2 class="entry-title">
                                            <a href="#btech_cse">Computer Science & Information Technology</a>
                                        </h2>

                                        <div class="post-meta-list">
                                            <span class="meta-author">
                                                <i aria-hidden="true" class="icon icon-user"></i> <a href="#"class="author-name">Bobbie Navarro</a>
                                            </span>
                                            <span class="meta-date">
                                                <i aria-hidden="true" class="icon icon-calendar-full"></i> <span
                                                    class="meta-date-text">
                                                    November 29, 2023 </span>
                                            </span>
                                        </div>
                                        <p>Bridge the gap between core computing principles and modern IT solutions with SERI's CS & IT program. Master theoretical foundations like algorithms, data structures, operating systems, and computer networks. Simultaneously, delve into essential IT domains such as cloud computing, cybersecurity, database management, and web development. This integrated approach prepares you to design, implement, and manage robust IT infrastructure and software systems, ensuring secure and efficient operations for real-world applications.  </p>
                                        <div class="btn-wraper">
                                            <a class="elementskit-btn whitespace--normal" id=""
                                                href="{{route('view-courses', 'csit')}}">
                                                Learn More <i aria-hidden="true" class="icon icon-right-arrow2"></i>
                                            </a>

                                        </div>
                                    </div><!-- .elementskit-post-body END -->
                                </div>                            
                            </div>                         
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="elementskit-post-image-card">
                                    <div class="elementskit-entry-header">
                                        <a href="#ece" class="elementskit-entry-thumb">
                                            <img decoding="async" src="{{asset('courses2/aiml2.jpg')}}" alt="B tech">
                                        </a><!-- .elementskit-entry-thumb END -->

                                        <div class="elementskit-meta-categories">
                                            <span class="elementskit-meta-wraper">
                                                <span><a href="#ece"
                                                        rel="category tag">Program</a></span>
                                            </span>
                                        </div>

                                    </div><!-- .elementskit-entry-header END -->

                                    <div class="elementskit-post-body">
                                        <h2 class="entry-title">
                                            <a href="#aiml"> CSE (Artificial Intelligence and Machine Learning)</a>
                                        </h2>

                                        <div class="post-meta-list">
                                            <span class="meta-author">
                                                <i aria-hidden="true" class="icon icon-user"></i> <a href="#"class="author-name">Bobbie Navarro</a>
                                            </span>
                                            <span class="meta-date">
                                                <i aria-hidden="true" class="icon icon-calendar-full"></i> <span
                                                    class="meta-date-text">
                                                    November 29, 2023 </span>
                                            </span>
                                        </div>


                                        <p>Become a trailblazer in the transformative fields of AI and Machine Learning at SERI. This specialized B.Tech program provides a deep understanding of AI/ML technologies shaping industries. Explore applications in self-driving cars, smart living, personalized medicine, and predictive analytics. Develop the skills to create intelligent systems, predictive models, and innovative solutions through a curriculum focused on both theoretical foundations and practical application, preparing you to lead future advancements.  
                                        </p>
                                        <div class="btn-wraper">
                                            <a class="elementskit-btn whitespace--normal" id=""
                                                href="{{route('view-courses', 'aiml')}}">
                                                Learn More <i aria-hidden="true" class="icon icon-right-arrow2"></i>
                                            </a>

                                        </div>
                                    </div><!-- .elementskit-post-body END -->
                                </div>                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div id="btech_cse" class="elementor-element elementor-element-db10bcf e-con-full e-flex e-con e-parent" data-id="db10bcf" data-element_type="container">
        <div class="elementor-element elementor-element-9e82b6b e-con-full e-flex e-con e-child" data-id="9e82b6b"
            data-element_type="container">            
            <div class="elementor-element elementor-element-d406e04 elementor-widget elementor-widget-image"
                data-id="d406e04" data-element_type="widget" data-widget_type="image.default">
                <div class="elementor-widget-container">
                    <img loading="lazy" decoding="async" width="1280" height="1158"
                        src="{{asset('images/two-students-working-in-library.jpg')}}"
                        class="attachment-full size-full wp-image-1102"
                        alt="Portrait Of Smiling Male College Student In Busy Communal Campus Building"                        
                        sizes="(max-width: 1280px) 100vw, 1280px">
                </div>
            </div>
        </div>
        <div class="elementor-element elementor-element-910aef9 e-con-full e-flex e-con e-child" data-id="910aef9"
            data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-element elementor-element-4dba181 e-con-full e-flex e-con e-child"
                data-id="4dba181" data-element_type="container">
                <div class="elementor-element elementor-element-66a6537 elementor-invisible elementor-widget elementor-widget-heading"
                    data-id="66a6537" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                    data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">B Tech Computer Science & Engineering</h2>
                    </div>
                </div>
                <div class="elementor-element elementor-element-d48357f elementor-widget elementor-widget-text-editor"
                    data-id="d48357f" data-element_type="widget" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        <p>A Bachelor of Technology (B.Tech) in Computer Science and Technology is your gateway to a dynamic and innovative career. This program equips students with essential skills in programming, algorithms, and data structures, along with cutting-edge technologies like artificial intelligence, cybersecurity, and cloud computing. At the World Institute of Technology (WIT) in Sohna, Gurgaon, our state-of-the-art facilities and experienced faculty ensure a comprehensive and hands-on learning experience. Graduates are well-prepared for diverse roles in the tech industry, from software development to IT consulting, driving the digital future forward. Join us and transform your passion for technology into a successful career.</p>
                    </div>
                </div>
                <div class="elementor-element elementor-element-5582dfc elementor-widget elementor-widget-button"
                    data-id="5582dfc" data-element_type="widget" data-widget_type="button.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-button-wrapper">
                            <a class="elementor-button elementor-button-link elementor-size-sm"
                                href="#">
                                <span class="elementor-button-content-wrapper">
                                    <span class="elementor-button-text">Know More</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="ece" style="flex-direction: row-reverse" class="elementor-element elementor-element-db10bcf e-con-full e-flex e-con e-parent" data-id="db10bcf" data-element_type="container">
        <div class="elementor-element elementor-element-9e82b6b e-con-full e-flex e-con e-child" data-id="9e82b6b"
            data-element_type="container">            
            <div class="elementor-element elementor-element-d406e04 elementor-widget elementor-widget-image"
                data-id="d406e04" data-element_type="widget" data-widget_type="image.default">
                <div class="elementor-widget-container">
                    <img loading="lazy" decoding="async" width="1280" height="1158"
                        src="{{asset('images/explaining-chemistry.jpg')}}"
                        class="attachment-full size-full wp-image-1102"
                        alt="Portrait Of Smiling Male College Student In Busy Communal Campus Building"                        
                        sizes="(max-width: 1280px) 100vw, 1280px">
                </div>
            </div>
        </div>
        <div class="elementor-element elementor-element-910aef9 e-con-full e-flex e-con e-child" data-id="910aef9"
            data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-element elementor-element-4dba181 e-con-full e-flex e-con e-child"
                data-id="4dba181" data-element_type="container">
                <div class="elementor-element elementor-element-66a6537 elementor-invisible elementor-widget elementor-widget-heading"
                    data-id="66a6537" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                    data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">B Tech Electronics & Communication Engineering</h2>
                    </div>
                </div>
                <div class="elementor-element elementor-element-d48357f elementor-widget elementor-widget-text-editor"
                    data-id="d48357f" data-element_type="widget" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        <p>A Bachelor of Technology (B.Tech) in Computer Science and Technology is your gateway to a dynamic and innovative career. This program equips students with essential skills in programming, algorithms, and data structures, along with cutting-edge technologies like artificial intelligence, cybersecurity, and cloud computing. At the World Institute of Technology (WIT) in Sohna, Gurgaon, our state-of-the-art facilities and experienced faculty ensure a comprehensive and hands-on learning experience. Graduates are well-prepared for diverse roles in the tech industry, from software development to IT consulting, driving the digital future forward. Join us and transform your passion for technology into a successful career.</p>
                    </div>
                </div>
                <div class="elementor-element elementor-element-5582dfc elementor-widget elementor-widget-button"
                    data-id="5582dfc" data-element_type="widget" data-widget_type="button.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-button-wrapper">
                            <a class="elementor-button elementor-button-link elementor-size-sm"
                                href="#">
                                <span class="elementor-button-content-wrapper">
                                    <span class="elementor-button-text">Know More</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</div>
@endsection