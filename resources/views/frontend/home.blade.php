@extends('frontend.layout')
@section('title', "India's Best College in Noida | SITASRM Engineering & Research Institute")
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    .autoPopupModal .modal-content{z-index:10}.modal-header{background-color:#fff;text-align:center;flex-direction:column;border-bottom:none}.modal-header h5{color:#b30000;font-weight:bold}.modal-title-sub{font-size:14px;margin-top:5px;color:#555}.modal-content{border-radius:8px;padding:20px}.btn-danger{background-color:#b30000;border:none}.modal-header .btn-close{background-color:transparent!important}.form-check-input:checked{background-color:#b30000;border-color:#b30000}.form-check-label a{color:#b30000;text-decoration:none}.w-50{width:50%!important}.owl-carousel .item{padding:10px 0}.owl-carousel .item img{width:90%;height:200px;object-fit:contain;border-radius:10px;background-blend-mode:color-burn;mix-blend-mode:multiply}.carousel-fade-wrapper{position:relative;overflow:hidden}.carousel-fade-wrapper::before,.carousel-fade-wrapper::after{content:'';position:absolute;top:0;width:60px;height:100%;z-index:2;pointer-events:none}.carousel-fade-wrapper::before{left:0;background:linear-gradient(to right,white,transparent)}.carousel-fade-wrapper::after{right:0;background:linear-gradient(to left,white,transparent)}.video-container{height:80vh;display:flex;justify-content:center;align-items:center;position:relative}.video-container video{width:100%;height:100%;object-fit:contain}.video-container video::before{content:'';position:absolute;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,.3);z-index:3}.video-overlay{position:absolute;top:0;left:0;width:100%;height:100%;display:flex;justify-content:flex-end;flex-direction:column;align-content:center;color:#fff;padding-bottom:100px}.video-container h2{color:#fff!important}@media screen and (max-width:500px){.video-container{height:max-content}.video-overlay{position:absolute;top:100%;left:50%;transform:translate(-50%,-50%)}.video-overlay p{font-size:14px!important}.video-overlay h2{color:#fff!important;font-size:16px!important}.elementor-304 .elementor-element.elementor-element-5a80b44{padding-right:30px}}.mdc-text-field--no-label:not(.mdc-text-field--textarea) .mat-mdc-form-field-input-control.mdc-text-field__input,.mat-mdc-text-field-wrapper .mat-mdc-form-field-input-control{border:none!important;padding:0!important}.tabs-container{width:100%;max-width:1280px;margin:0 auto 85px;position:relative}.tab-buttons{display:flex;justify-content:space-around;padding:10px;border-radius:10px}.tab-button{flex:1;padding:10px;text-align:center;cursor:pointer;font-size:16px;transition:background .3s ease;border-radius:10px;position:relative}.tab-button.active{color:#000;border-bottom:2px solid red;border-radius:0}.tab-content{display:none;padding:50px;background:#fff;border-radius:10px;box-shadow:0 4px 8px rgba(0,0,0,.1);background-size:cover}.tab-content.active{display:block}.tab-content-card{background:#fff;border-radius:10px;padding:50px 30px;width:500px}.tab-content h2{font-size:40px;margin:0}.tab-content span{color:red}.tab-content p{font-size:18px;color:#000;opacity:.9;margin:20px 0 0}.top-recruiters-title span{margin-left:-160px}.faq-section{background:#f0f0f0;padding:60px 0 96px;margin-bottom:60px}.break-faq{display:flex;gap:10px;width:1280px;margin:auto}.blog-grid{background-color:#333;margin-top:20px}.blog-items{box-shadow:rgba(149,157,165,.2) 0 8px 24px;border-radius:10px;background-color:#fff;border:1px solid #000}.blog-items .blog-img img{border-radius:10px 10px 0 0}.blog-items .blog-cont{background-color:#fff}.blog-items a:hover{color:#000}@media screen and (max-width:1280px){.tabs-container{max-width:900px}}@media screen and (max-width:900px){.tabs-container{max-width:750px}.blog-grid{grid-template-columns:auto auto}}@media screen and (max-width:750px){.tabs-container{max-width:650px}.blog-grid{grid-template-columns:auto auto}}@media screen and (max-width:500px){.tabs-container{width:90%;margin:auto}.tab-content{padding:33px 20px 37px;margin:10px 0}.tab-content-card{width:auto;padding:27px 19px}.tab-content p{font-size:14px;color:#000;opacity:.9;margin:20px 0 0}.tab-buttons{overflow:auto}.tab-button{font-size:13px;white-space:nowrap}.tab-content h2{font-size:26px}.blog-grid{display:block}.e-con>.e-con-inner>.elementor-widget>.elementor-widget-container,.e-con>.elementor-widget>.elementor-widget-container{height:auto}.blog-lm{padding-bottom:10px}.blog-grid .blog-items .blog-cont{padding:18px 18px 0}.carousel-item{height:65vh!important;position:relative}.carousel-item img{object-fit:cover;width:100%;height:100%;z-index:1}.carousel-item video{width:100%;height:100%;object-fit:cover;z-index:1}.carousel-indicators{bottom:10px}.crausel-btn{background-color:transparent!important}.crausel-btn span{columns:#000!important}.carousel-caption{bottom:0;top:5rem!important}}.red-line{position:relative}.red-line::before{content:'';position:absolute;top:100%;left:0;width:60%;height:5px;background-color:var(--e-global-color-accent)}.elementor-element-6aec9e8 .elementor-widget-container h2{font-size:2rem}.elementor-element-6aec9e8 .elementor-widget-container i{font-size:1.5rem}.ekit-wid-con .elementskit-accordion .elementskit-card-header>.elementskit-btn-link{background:none!important}.ekit-wid-con .elementskit-accordion .elementskit-card-body{padding:20px 30px!important}.news-section,.faq-section{background:#fff;padding:20px;border-radius:8px}.news-section{background:transparent}.accordion-button{background:#ddd!important;color:#000!important}.accordion-button:hover{color:#000!important;font-weight:bold}.accordion-button{outline:none;border:none}.accordion{width:100%;max-width:600px;margin:20px auto}.accordion-item{border-bottom:1px solid #ccc}.accordion-header{background:#f4f4f4;padding:15px;cursor:pointer;font-size:18px;transition:background .3s;user-select:none}.accordion-header:hover{background:#ddd}.accordion-content{max-height:0;overflow:hidden;padding:0 15px;background:#fff;transition:max-height .3s ease-out,padding .3s ease-out}.accordion-item.active .accordion-content{max-height:200px;padding:15px}
</style>
{{-- <style>

    .autoPopupModal .modal-content{
        z-index: 10;
    }

    .modal-header {
      background-color: #fff;
      text-align: center;
      flex-direction: column;
      border-bottom: none;
    }
    .modal-header h5 {
      color: #b30000;
      font-weight: bold;cou
    }
    .modal-title-sub {
      font-size: 14px;
      margin-top: 5px;
      color: #555;
    }
    .modal-content {
      border-radius: 8px;
      padding: 20px;
    }
    .btn-danger {
      background-color: #b30000;
      border: none;
    }

    .modal-header .btn-close{
        background-color: transparent !important;

    }
    .form-check-input:checked {
      background-color: #b30000;
      border-color: #b30000;
    }
    .form-check-label a {
      color: #b30000;
      text-decoration: none;
    }
    .w-50{
        width: 50% !important;
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

    .video-container {
        height: 80vh;
        display: flex;
        justify-content: center;
        align-items: center;                      
        position: relative;         
    }

    .video-container video {
        width: 100%;
        height: 100%;
        object-fit: contain; /* Fill container without distortion */        
        
    }

    

    .video-container video::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.3);
        z-index:3   ;
    }
    .video-overlay{
        position: absolute;
        top: 0; left: 0;
        width: 100%; height: 100%;        
        display: flex; justify-content: flex-end;
        flex-direction: column;
        align-content: center;
        color: #fff;
        padding-bottom:100px; 
    }
    .video-container h2{
        color: #fff !important;
    }

    @media screen and (max-width:500px){
        .video-container {
            height: max-content;
        }
        .video-overlay{
            position: absolute;
            top: 100%; left: 50%;
            transform: translate(-50%, -50%)
        }
        .video-overlay p{
            font-size: 14px !important;
        }
        .video-overlay h2{
            color: #fff !important;
            font-size: 16px !important;
        }
        .elementor-304 .elementor-element.elementor-element-5a80b44 {
            padding-right: 30px;
        }
    }
    .mdc-text-field--no-label:not(.mdc-text-field--textarea) .mat-mdc-form-field-input-control.mdc-text-field__input, .mat-mdc-text-field-wrapper .mat-mdc-form-field-input-control{
        border: none !important;
        padding: 0 !important;
    }
</style> --}}
{{-- <style>
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
            width: 500px;
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

        .top-recruiters-title span{
            margin-left: -160px;
        }
        

        .faq-section {
            background: #f0f0f0;
            padding: 60px 0 96px;
            margin-bottom: 60px;
        }

        .break-faq{           
            display:flex;
            gap:10px;
            width:1280px;
            margin: auto;
        }
        .blog-grid{
            /* display: grid;
            grid-template-columns: auto auto auto;
            gap: 30px; */            
            background-color: #333;
            margin-top:20px;
        }
        .blog-items{
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
            border-radius: 10px;
            background-color: #fff;
            border: 1px solid #000;
        }
        .blog-items .blog-img img{
            border-radius: 10px 10px 0 0;
        }
        .blog-items .blog-cont{
            /* padding:18px; */
            background-color: #fff;
        }
        .blog-items a:hover{
            color:#000;
        }
        @media screen and (max-width:1280px){
            .tabs-container{
                max-width: 900px;
            }
        }

        @media screen and (max-width:900px){
            .tabs-container{
                max-width: 750px;
            }
            .blog-grid{
                grid-template-columns: auto auto;
            }
        }

        @media screen and (max-width:750px){
            .tabs-container{
                max-width: 650px;
            }
             .blog-grid{
                grid-template-columns: auto auto;
            }
        }

        @media screen and (max-width:500px){
            .tabs-container{
                width: 90%;                
                margin: auto;
            }
            .tab-content{
                padding: 33px 20px 37px;
                margin: 10px 0;
            }

            .tab-content-card {                
                width: auto;
                padding: 27px 19px;
            }
            .tab-content p {
                font-size: 14px;
                color: #000;
                opacity: .9;
                margin: 20px 0 0;
            }
            .tab-buttons{
                overflow: auto;
            }
            .tab-button{
                font-size: 13px;
                white-space: nowrap;
            }
            .tab-content h2{
                font-size: 26px;
            }
             .blog-grid{
                display:block;
            }
            .e-con>.e-con-inner>.elementor-widget>.elementor-widget-container, .e-con>.elementor-widget>.elementor-widget-container {
              height: auto;
          }
          .blog-lm{
              padding-bottom:10px;
          }
                .blog-grid .blog-items .blog-cont {
            padding: 18px 18px 0;
        }


        /* Fullscreen carousel */    
    .carousel-item {
        height: 65vh !important;
        position: relative;
    }

    /* Make images cover the entire carousel */
    .carousel-item img {
        object-fit: cover;
        width: 100%;
        height: 100%;
        z-index:1;
    }

    /* Make videos full-screen, autoplay, loop, and remove controls */
    .carousel-item video {
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index:1;
    }

    /* Position controls at the bottom */
    .carousel-indicators {
        bottom: 10px;
    }

    .crausel-btn{
        background-color: transparent !important;        
    }
    .crausel-btn span{
        columns: #000 !important;
    }

    .carousel-caption{
        bottom: 0;
        top: 5rem !important;
    }     
    }
    .red-line{
        position: relative;
    }

    .red-line::before{
        content: '';
        position: absolute;
        top: 100%; left: 0;
        width: 60%;
        height: 5px;
        background-color: var(--e-global-color-accent);
    }
    .elementor-element-6aec9e8 .elementor-widget-container h2{
        font-size: 2rem;        
    }
    .elementor-element-6aec9e8 .elementor-widget-container i{
        font-size: 1.5rem;        
    }
        
</style> --}}
@section('main_content')    
<div data-elementor-type="wp-post" data-elementor-id="304" class="elementor elementor-304" style="background-color: #fff;"> 
    {{-- <div class="elementor-element elementor-element-e7b1143 e-flex e-con-boxed e-con e-parent e-lazyloaded"
        data-id="e7b1143" data-element_type="container"
        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-c449766 e-con-full e-flex e-con e-child"
                data-id="c449766" data-element_type="container">
                <div class="elementor-element elementor-element-498494d elementor-widget elementor-widget-heading animated fadeInUp"
                    data-id="498494d" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                    data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h1 class="elementor-heading-title elementor-size-default">                            
                            {{env('COLLEGE_NAME_SHORT')}}: Transforming  Your Aspirations into Engineering Achievements
                        </h1>
                    </div>
                </div>
                <div class="elementor-element elementor-element-2a445b5 e-flex e-con-boxed e-con e-child animated fadeIn"
                    data-id="2a445b5" data-element_type="container"
                    data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:720}">
                    <div class="e-con-inner">
                        <div class="elementor-element elementor-element-970618e elementor-mobile-align-justify elementor-widget-mobile__width-inherit elementor-widget elementor-widget-button"
                            data-id="970618e" data-element_type="widget" data-widget_type="button.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-button-wrapper">
                                    <a class="elementor-button elementor-button-link elementor-size-md"
                                        href="#">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-icon">
                                                <i aria-hidden="true" class="icon icon-right-arrow2"></i> </span>
                                            <span class="elementor-button-text">Aplly Now </span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div id="fullscreenCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
        <!-- Indicators -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#fullscreenCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#fullscreenCarousel" data-bs-slide-to="1"></button>            
        </div>
    
        <!-- Slides -->
        <div class="carousel-inner">            
            <!-- https://www.w3schools.com/html/mov_bbb.mp4 -->
            <!-- Video Slide -->
            <div class="carousel-item active" style="height: 75vh;">                
                <video autoplay loop muted>
                    <source src="images/college_video4.mp4" type="video/mp4">
                </video>
                <div class="carousel-caption d-flex flex-column justify-content-center text-center" style="position: absolute; top: 0rem; align-items:flex-star; font-family:Arial, Helvetica, sans-serif;">
                    <h1 style="color: #fff; font-family:Arial, Helvetica, sans-serif;">Systems Architecture & Performance Optimization</h1>                    
                    <p style="color: #fff;  font-family:Arial, Helvetica, sans-serif;">At the center of Computer Engineering and Computer Science, Latency Reduction is the door to unlocking high-speed experiences. This we are focused on advanced systems architecture and performance optimization allowing you to advance your skills to design fast, innovative applications that redefine efficiency.</p>
                </div>                
            </div>

            <div class="carousel-item" style="height: 75vh;">                
                <video autoplay loop muted>
                    <source src="images/college_video3.mp4" type="video/mp4">
                </video> 
                <div class="carousel-caption d-flex flex-column justify-content-center align-items-center text-center" style="position: absolute; top: 0rem;  font-family:Arial, Helvetica, sans-serif;">
                    <h1 style="color: #fff;  font-family:Arial, Helvetica, sans-serif;">AI Innovation & Ethical Design Immersion</h1>                    
                    <p style="color: #fff;   font-family:Arial, Helvetica, sans-serif;">
                        Design intelligent, ethical systems with robust AI foundations, developing innovative tools that drive progress and shape a better future.
                    </p>
                </div>                               
            </div>
        </div>
    
        <!-- Controls -->
        <button class="crausel-btn carousel-control-prev" type="button" data-bs-target="#fullscreenCarousel" data-bs-slide="prev" style="background: none;">
            <span class="carousel-control-prev-icon" style="color: #000 !important; background-color:transparent !important;"></span>
        </button>
        <button class="crausel-btn carousel-control-next" type="button" data-bs-target="#fullscreenCarousel" data-bs-slide="next"  style="background: none;">
            <span class="carousel-control-next-icon"  style="color: #000 !important;"></span>
        </button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <marquee behavior="loop" direction="left" style="padding: 10px; color:#324A7D; font-weight:bold;">Admission Helpline :- {{env('COLLEGE_PHONES')}}</marquee>
    <div class="elementor-element elementor-element-f443c61 e-flex e-con-boxed e-con e-parent e-lazyloaded animated fadeInRight"
        data-id="f443c61" data-element_type="container"
        data-settings="{&quot;background_background&quot;:&quot;gradient&quot;,&quot;animation&quot;:&quot;fadeInRight&quot;,&quot;animation_mobile&quot;:&quot;fadeInUp&quot;}">
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-6c90143 e-con-full e-flex e-con e-child animated fadeInLeft"
                data-id="6c90143" data-element_type="container"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInLeft&quot;,&quot;animation_delay&quot;:960,&quot;animation_mobile&quot;:&quot;none&quot;}">
                <div class="elementor-element elementor-element-bfa63aa elementor-widget elementor-widget-heading"
                    data-id="bfa63aa" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h3 class="elementor-heading-title elementor-size-default">Campus Life</h3>
                    </div>
                </div>
                <div class="elementor-element elementor-element-b011bb9 elementor-widget elementor-widget-text-editor"
                    data-id="b011bb9" data-element_type="widget" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        <p>All-inclusive academic environment that encourages growth, creativity, and a lifetime of memories.</p>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-8f2af22 e-con-full e-flex e-con e-child animated fadeInLeft"
                data-id="8f2af22" data-element_type="container"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInLeft&quot;,&quot;animation_delay&quot;:720,&quot;animation_mobile&quot;:&quot;none&quot;}">
                <div class="elementor-element elementor-element-341d01b elementor-widget elementor-widget-heading"
                    data-id="341d01b" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h3 class="elementor-heading-title elementor-size-default">Scholarship Facility</h3>
                    </div>
                </div>
                <div class="elementor-element elementor-element-79d0de1 elementor-widget elementor-widget-text-editor"
                    data-id="79d0de1" data-element_type="widget" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        <p>Scholarships based on merit to empower talent without the barrier of financial circumstances.</p>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-0d6dc5d e-con-full e-flex e-con e-child"
                data-id="0d6dc5d" data-element_type="container"
                data-settings="{&quot;animation_mobile&quot;:&quot;none&quot;}">
                <div class="elementor-element elementor-element-1430bfb elementor-widget elementor-widget-heading"
                    data-id="1430bfb" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h3 class="elementor-heading-title elementor-size-default">Skilled Lecturers</h3>
                    </div>
                </div>
                <div class="elementor-element elementor-element-31dbb7f elementor-widget elementor-widget-text-editor"
                    data-id="31dbb7f" data-element_type="widget" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        <p>Lessons are taught by an innovative faculty at the forefront of their fields, helping to advance knowledge through both teaching and cutting-edge research.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="elementor-element elementor-element-81c262e e-flex e-con-boxed e-con e-parent e-lazyloaded"
        data-id="81c262e" data-element_type="container"
        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="e-con-inner">
            <!--<div class="elementor-element elementor-element-44649a6 e-con-full e-flex e-con e-child"-->
            <!--    data-id="44649a6" data-element_type="container">-->
            <!--    <div class="elementor-element elementor-element-cf2c721 elementor-widget elementor-widget-image animated fadeInUp"-->
            <!--        data-id="cf2c721" data-element_type="widget"-->
            <!--        data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="image.default">-->
            <!--        <div class="elementor-widget-container">-->
            <!--            <img decoding="async" width="1280" height="854"-->
            <!--                src="./Homepage – Edupreme_files/group-of-happy-international-students-posing-outdoors-near-university-building.jpg"-->
            <!--                class="attachment-full size-full wp-image-427"-->
            <!--                alt="Group of happy international students posing outdoors near university building"-->
            <!--                srcset="https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/11/group-of-happy-international-students-posing-outdoors-near-university-building.jpg 1280w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/11/group-of-happy-international-students-posing-outdoors-near-university-building-300x200.jpg 300w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/11/group-of-happy-international-students-posing-outdoors-near-university-building-1024x683.jpg 1024w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/11/group-of-happy-international-students-posing-outdoors-near-university-building-768x512.jpg 768w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/11/group-of-happy-international-students-posing-outdoors-near-university-building-1536x1025.jpg 1536w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/11/group-of-happy-international-students-posing-outdoors-near-university-building-800x534.jpg 800w"-->
            <!--                sizes="(max-width: 1280px) 100vw, 1280px">-->
            <!--        </div>-->
            <!--    </div>-->
            <!--    <div class="elementor-element elementor-element-37a1b06 elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-spacer animated fadeInLeft"-->
            <!--        data-id="37a1b06" data-element_type="widget"-->
            <!--        data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;_animation&quot;:&quot;fadeInLeft&quot;}"-->
            <!--        data-widget_type="spacer.default">-->
            <!--        <div class="elementor-widget-container">-->
            <!--            <div class="elementor-spacer">-->
            <!--                <div class="elementor-spacer-inner"></div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
            <div class="elementor-element elementor-element-2d84654 e-con-full e-flex e-con e-child"
                data-id="2d84654" data-element_type="container"  style="--width: 100%">                
                <div class="elementor-element elementor-element-3093cba elementor-widget elementor-widget-heading animated fadeInRight"
                    data-id="3093cba" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;}"
                    data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h3 class="elementor-heading-title elementor-size-default">{{env('COLLEGE_NAME')}}</h3>
                    </div>
                </div>
                <div class="elementor-element elementor-element-d0fe679 elementor-widget elementor-widget-heading animated fadeInUp"
                    data-id="d0fe679" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                    data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <p class="">{{env('COLLEGE_NAME_MID')}} ENGINEERING & RESEARCH INSTITUTE , the best engineering college in the region was established with the objective of providing quality technical education with adequate industrial exposure than any other engineering colleges in North India , caters the needs of the youth with its innovative teaching methods.</p>                        
                        <p class="">Apart from interactive classroom scenario, periodic guest lectures by experts from industries and academic background provides thirst to the students to learn and to prepare for the ready-to-serve industrial requirements with uncompromised professional ethics.</p>
                    </div>
                </div>                
                <div class="elementor-element elementor-element-09070db elementor-widget elementor-widget-button"
                    data-id="09070db" data-element_type="widget" data-widget_type="button.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-button-wrapper">
                            <a class="elementor-button elementor-button-link elementor-size-sm"
                                href="{{route('about')}}">
                                <span class="elementor-button-content-wrapper">
                                    <span class="elementor-button-text">Read More</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="elementor-element elementor-element-1c9b1eb e-flex e-con-boxed e-con e-parent e-lazyloaded"
        data-id="1c9b1eb" data-element_type="container">
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-c44e3a9 e-con-full e-flex e-con e-child"
                data-id="c44e3a9" data-element_type="container">
                <div class="elementor-element elementor-element-6de2664 elementor-widget__width-initial elementor-widget elementor-widget-counter"
                    data-id="6de2664" data-element_type="widget" data-widget_type="counter.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-counter">
                            <div class="elementor-counter-number-wrapper">
                                <span class="elementor-counter-number-prefix">24/7</span>
                                {{-- <span class="elementor-counter-number" data-duration="2000" data-to-value="32"
                                    data-from-value="0" data-delimiter=",">32</span>
                                <span class="elementor-counter-number-suffix"></span> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-95071a7 elementor-widget__width-initial elementor-widget elementor-widget-heading"
                    data-id="95071a7" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h4 class="elementor-heading-title elementor-size-default">Libraries, Labs & Digital Hub
                        </h4>
                    </div>
                </div>
            </div>            
            <div class="elementor-element elementor-element-9e5a9cc elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                data-id="9e5a9cc" data-element_type="widget" data-widget_type="divider.default">
                <div class="elementor-widget-container">
                    <div class="elementor-divider">
                        <span class="elementor-divider-separator">
                        </span>
                    </div>
                </div>
            </div>

            <div class="elementor-element elementor-element-92bbd13 e-con-full e-flex e-con e-child"
                data-id="92bbd13" data-element_type="container">
                <div class="elementor-element elementor-element-cf97d58 elementor-widget__width-initial elementor-widget elementor-widget-counter"
                    data-id="cf97d58" data-element_type="widget" data-widget_type="counter.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-counter">
                            <div class="elementor-counter-number-wrapper">
                                <span class="elementor-counter-number-prefix"></span>
                                <span class="elementor-counter-number" data-duration="2000" data-to-value="100"
                                    data-from-value="0" data-delimiter=",">20</span>
                                <span class="elementor-counter-number-suffix">%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-067558b elementor-widget__width-initial elementor-widget elementor-widget-heading"
                    data-id="067558b" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h4 class="elementor-heading-title elementor-size-default">Placement Assistance
                        </h4>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-f1041e7 elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget-tablet__width-inherit elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                data-id="f1041e7" data-element_type="widget" data-widget_type="divider.default">
                <div class="elementor-widget-container">
                    <div class="elementor-divider">
                        <span class="elementor-divider-separator">
                        </span>
                    </div>
                </div>
            </div>

            {{-- <div class="elementor-element elementor-element-92bbd13 e-con-full e-flex e-con e-child"
                data-id="92bbd13" data-element_type="container">
                <div class="elementor-element elementor-element-cf97d58 elementor-widget__width-initial elementor-widget elementor-widget-counter"
                    data-id="cf97d58" data-element_type="widget" data-widget_type="counter.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-counter">
                            <div class="elementor-counter-number-wrapper">
                                <span class="elementor-counter-number-prefix"></span>
                                <span class="elementor-counter-number"
                                    data-from-value="0" data-delimiter=",">50</span>
                                <span class="elementor-counter-number-suffix">/50</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-067558b elementor-widget__width-initial elementor-widget elementor-widget-heading"
                    data-id="067558b" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h4 class="elementor-heading-title elementor-size-default">Expert PhD Faculty & Research
                        </h4>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="elementor-element elementor-element-f1041e7 elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget-tablet__width-inherit elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                data-id="f1041e7" data-element_type="widget" data-widget_type="divider.default">
                <div class="elementor-widget-container">
                    <div class="elementor-divider">
                        <span class="elementor-divider-separator">
                        </span>
                    </div>
                </div>
            </div> --}}
            


            <div class="elementor-element elementor-element-4e242b7 e-con-full e-flex e-con e-child"
                data-id="4e242b7" data-element_type="container">
                <div class="elementor-element elementor-element-932eae5 elementor-widget__width-initial elementor-widget elementor-widget-counter"
                    data-id="932eae5" data-element_type="widget" data-widget_type="counter.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-counter">
                            <div class="elementor-counter-number-wrapper">
                                <span class="elementor-counter-number-prefix"></span>
                                <span class="elementor-counter-number" data-duration="2000" data-to-value="25"
                                    data-from-value="0" data-delimiter=",">25</span>
                                <span class="elementor-counter-number-suffix">+</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-e8d0ce6 elementor-widget__width-initial elementor-widget elementor-widget-heading"
                    data-id="e8d0ce6" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h4 class="elementor-heading-title elementor-size-default">Industry Collaboration</h4>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-2c4018a elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                data-id="2c4018a" data-element_type="widget" data-widget_type="divider.default">
                <div class="elementor-widget-container">
                    <div class="elementor-divider">
                        <span class="elementor-divider-separator">
                        </span>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-a14fb6c e-con-full e-flex e-con e-child"
                data-id="a14fb6c" data-element_type="container">
                <div class="elementor-element elementor-element-625febd elementor-widget__width-initial elementor-widget elementor-widget-counter"
                    data-id="625febd" data-element_type="widget" data-widget_type="counter.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-counter">
                            <div class="elementor-counter-number-wrapper">
                                <span class="elementor-counter-number-prefix"></span>                                
                                <span class="elementor-counter-number-suffix">14+</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-223a61c elementor-widget__width-initial elementor-widget elementor-widget-heading"
                    data-id="223a61c" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h4 class="elementor-heading-title elementor-size-default">Student Engagement & Sports Clubs</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="tabs-container">
        <!-- Tab Buttons -->
        <div class="tab-buttons">
            <div class="tab-button active" data-index="0">Courses Offers</div>
            <div class="tab-button" data-index="1">Research</div>
            <div class="tab-button" data-index="2">Center of Excellence</div>
            <div class="tab-button" data-index="3">International Collaborations</div>
            <div class="tab-button" data-index="4">Startup Incubators</div>
        </div>

        <!-- Tab Content -->
        <div class="tab-content active" style="background-image: url(https://res.cloudinary.com/dqqfisfji/image/upload/v1741332722/Courses_Offers_eji5to.png);">
           <div>
              <div class="tab-content-card">
                
                    <h2><span>Digital Skills At<br></span>Your Career Path</h2>
                    <p>Get specialized tech courses in:<br>Computer Science and Engineering<br>CSE (Artificial Intelligence and Machine learning)<br>Computer Science & Information Technology<br>Electronics & Communication Engineering<br></p>
              </div>
           </div>
        </div>
        <div class="tab-content" style="background-image: url(https://res.cloudinary.com/dqqfisfji/image/upload/v1741332791/Research_r2bbya.png);">
            <div>
               <div class="tab-content-card">
                                    
                    <h2><span>Pioneering Research & <br></span>Discovery</h2>
                    <p>An exhilarating community of interdisciplinary research at full flight An engine for PhD studies as well dissemination and development of new technologies</p>
               </div>
            </div>
        </div>
        <div class="tab-content" style="background-image: url(https://res.cloudinary.com/dqqfisfji/image/upload/v1741332811/Center_of_Excellence_syesox.png);">
            <div>
               <div class="tab-content-card">                    
                    <h2><span>Centre for<br></span>Academic Excellence</h2>
                    <p>The Center of Excellence drives innovations and latest research through high end infrastructure, skills and resources. SERI encourages cross disciplinary partnership, boost specialization and sustains development in the areas of new, emerging technologies</p>
               </div>
            </div>
        </div>
        <div class="tab-content" style="background-image: url(https://res.cloudinary.com/dqqfisfji/image/upload/v1741332831/International_Collaborations_j318tt.png);">
            <div>
               <div class="tab-content-card">                    
                    <h2><span>Connecting Minds<br></span>Globally at SERI</h2>
                    <p>We are focused on creating international partnerships with top universities. It drives mutual enrichment and new collaborative research projects full of values.</p>
               </div>
            </div>
        </div>
        <div class="tab-content" style="background-image: url(https://res.cloudinary.com/dqqfisfji/image/upload/v1741332852/Startup_Incubators_jgecwj.png);">
            <div>
               <div class="tab-content-card">                    
                    <h2><span>Entrepreneurial Ecosystem<br></span>for Startups</h2>
                    <p>Streamline payment management with a unified dashboard, enabling both online and in-person payment collection while enhancing conversion rates and minimizing fraud.</p>
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
    
    <div class="elementor-element elementor-element-6aec9e8 e-flex e-con-boxed e-con e-parent e-lazyloaded" style="height:20rem;"
        data-id="6aec9e8" data-element_type="container"
        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-2003ee3 e-flex e-con-boxed e-con e-child"
                data-id="2003ee3" data-element_type="container">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-26e82ad elementor-widget elementor-widget-heading animated fadeInUp"
                        data-id="26e82ad" data-element_type="widget"
                        data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                        data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default" style="font-size: 1.7rem;">“Engineering is the art of directing the great sources of power in nature for the use and convenience of man"</h2>
                            <br><i class="elementor-heading-title elementor-size-default"  style="font-size: 1.5rem;">-Thomas Tredgold</i>
                        </div>
                    </div>
                    {{-- <div class="elementor-element elementor-element-5c5a9eb elementor-widget elementor-widget-text-editor animated fadeInUp"
                        data-id="5c5a9eb" data-element_type="widget"
                        data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                        data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">
                            <p>Sed duis auctor orci lacinia bibendum fermentum nec aptent montes. Lobortis quam
                                magna parturient justo vehicula. Senectus odio lobortis quam mus elit rutrum
                                suscipit lectus eleifend conubia.</p>
                        </div>
                    </div> --}}
                    {{-- <div class="elementor-element elementor-element-7913740 elementor-align-center elementor-widget elementor-widget-button animated fadeIn"
                        data-id="7913740" data-element_type="widget"
                        data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:480}"
                        data-widget_type="button.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-button-wrapper">
                                <a class="elementor-button elementor-button-link elementor-size-sm"
                                    href="https://tebewebe.online/edupreme/template-kit/homepage/#">
                                    <span class="elementor-button-content-wrapper">
                                        <span class="elementor-button-text">Discover More</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="elementor-element elementor-element-1068703 e-flex e-con-boxed e-con e-parent e-lazyloaded" style="background-color: #fff !important;"
        data-id="1068703" data-element_type="container"
        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="e-con-inner" style="padding-top: 35px;">
            <div class="elementor-element elementor-element-2ef56d6 e-flex e-con-boxed e-con e-child"
                data-id="2ef56d6" data-element_type="container">                
                <div class="row d-flex justify-content-center">                    
                    <div class="col-lg-2">
                        <div class="elementor-widget-container" style="display: flex; flex-direction:column;">
                            <span style="font-weight: 300; font-size:28px;">Explore Our</span>                            
                            <h3 class="elementor-heading-title elementor-size-default red-line"style="width: max-content;  margin:10px 0; padding-bottom:5px;">Programs</h3>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="elementor-widget-container">
                            <p>Future engineers are empowered through rigorous and application-oriented training and learning activities. Our students take on real-world challenges by being empowered by our innovative curriculum, state-of-the-art facilities, and expert faculty. A wide variety of learnings offered with in-depth knowledge gained through practical experience. It then translates into industry-relevant skills, assuring a higher rate of employability and successful career in the future.</p>
                        </div>
                    </div>
                </div>
            </div>            
            <div class="elementor-element elementor-element-b7c8d9a e-flex e-con-boxed e-con e-child" data-id="b7c8d9a" data-element_type="container">
                <div class="e-con-inner row">                    
                    <div class="elementor-element elementor-element-8f23e05 e-con-full e-flex e-con e-child animated fadeInUp col-lg-6"
                        data-id="8f23e05" data-element_type="container"
                        
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}">
                        <a href="{{route('view-courses', 'cse')}}">
                            <div class="elementor-element elementor-element-7140809 elementor-widget elementor-widget-heading"
                                data-id="7140809" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h4 class="elementor-heading-title elementor-size-default">Computer Science and Engineering</h4>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-77d3cb1 elementor-widget elementor-widget-image"
                                data-id="77d3cb1" data-element_type="widget" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <img decoding="async" width="1280" height="853"
                                        src="{{asset('courses2/cse.png')}}"
                                        class="attachment-full size-full wp-image-1498" alt="Explaining chemistry"                                    
                                        sizes="(max-width: 1280px) 100vw, 1280px">
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-b126756 e-flex e-con-boxed e-con e-child"
                                data-id="b126756" data-element_type="container">
                                <div class="e-con-inner">
                                    <div class="elementor-element elementor-element-f33ff06 elementor-widget elementor-widget-heading"
                                        data-id="f33ff06" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <p class="elementor-heading-title elementor-size-default">Explore the fields of software development, algorithms, and computing technologies to prepare students for innovative roles in the domains of software engineering, data science, and technology leadership.</p>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-bfb387f elementor-widget elementor-widget-button"
                                        data-id="bfb387f" data-element_type="widget" data-widget_type="button.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-button-wrapper">
                                                <a class="elementor-button elementor-button-link elementor-size-sm"
                                                    href="{{route('view-courses', 'cse')}}">
                                                    <span class="elementor-button-content-wrapper">
                                                        <span class="elementor-button-text">Learn More</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="elementor-element elementor-element-a87c91c e-con-full e-flex e-con e-child animated fadeInUp col-lg-6"
                        data-id="a87c91c" data-element_type="container"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:120}">
                        <a href="{{route('view-courses', 'ec')}}">
                            <div class="elementor-element elementor-element-efe993f elementor-widget elementor-widget-heading"
                                data-id="efe993f" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h4 class="elementor-heading-title elementor-size-default">Electronics &amp; Communication Engineering</h4>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-9bf72fb elementor-widget elementor-widget-image"
                                data-id="9bf72fb" data-element_type="widget" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <img loading="lazy" decoding="async" width="1280" height="853"
                                        src="{{asset('courses2/ece.png')}}"
                                        class="attachment-full size-full wp-image-1093"
                                        alt="Young students painting on canvas during lesson in faculty of arts university">
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-a643fba e-flex e-con-boxed e-con e-child"
                                data-id="a643fba" data-element_type="container">
                                <div class="e-con-inner">
                                    <div class="elementor-element elementor-element-db90bdc elementor-widget elementor-widget-heading"
                                        data-id="db90bdc" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <p class="elementor-heading-title elementor-size-default">Focuses on design and development of advanced electronic systems and communication networks, preparing a student for a career in telecommunications, robotics, and embedded systems</p>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-7ca9880 elementor-widget elementor-widget-button"
                                        data-id="7ca9880" data-element_type="widget" data-widget_type="button.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-button-wrapper">
                                                <a class="elementor-button elementor-button-link elementor-size-sm"
                                                    href="{{route('view-courses', 'ec')}}">
                                                    <span class="elementor-button-content-wrapper">
                                                        <span class="elementor-button-text">Learn More</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>                    
                </div>
            </div>  
            <div class="elementor-element elementor-element-bc58107 e-flex e-con-boxed e-con e-child" data-id="bc58107" data-element_type="container">
                <div class="e-con-inner row">
                    <div class="elementor-element elementor-element-907ff4b e-con-full elementor-hidden-tablet elementor-hidden-mobile e-flex elementor-invisible e-con e-child col-lg-6"
                        data-id="907ff4b" data-element_type="container"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:240}">
                        <a href="{{route('view-courses', 'csit')}}">
                            <div class="elementor-element elementor-element-8d28cd4 elementor-widget elementor-widget-heading"
                                data-id="8d28cd4" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h4 class="elementor-heading-title elementor-size-default">Computer Science &amp; Information Technology
                                    </h4>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-af150d6 elementor-widget elementor-widget-image"
                                data-id="af150d6" data-element_type="widget" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <!--<img src="https://seri.net.in/images/coding-1841550_1280.jpg">-->
                                    <img loading="lazy" decoding="async" width="1280" height="853"
                                        src="{{asset('courses/csit.jpg')}}"
                                        class="attachment-full size-full wp-image-1555"
                                        alt="Students of medicine using laptop while learning together in lecture hall at the university.">
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-d91a31f e-flex e-con-boxed e-con e-child"
                                data-id="d91a31f" data-element_type="container">
                                <div class="e-con-inner">
                                    <div class="elementor-element elementor-element-a04df3a elementor-widget elementor-widget-heading"
                                        data-id="a04df3a" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <p class="elementor-heading-title elementor-size-default">Integrates the principles of computer science and IT management, giving deep training in network security, database management, and software solutions for real-life applications.</p>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-7ef2220 elementor-widget elementor-widget-button"
                                        data-id="7ef2220" data-element_type="widget" data-widget_type="button.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-button-wrapper">
                                                <a class="elementor-button elementor-button-link elementor-size-sm"
                                                    href="{{route('view-courses', 'csit')}}">
                                                    <span class="elementor-button-content-wrapper">
                                                        <span class="elementor-button-text">Learn More</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="elementor-element elementor-element-96dbaa9 e-con-full e-flex elementor-invisible e-con e-child col-lg-6"
                        data-id="96dbaa9" data-element_type="container"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:120}">
                        <a href="{{route('view-courses', 'aiml')}}">
                            <div class="elementor-element elementor-element-9da16ae elementor-widget elementor-widget-heading"
                                data-id="9da16ae" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h4 class="elementor-heading-title elementor-size-default">CSE (Artificial Intelligence and Machine learning)</h4>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-740812f elementor-widget elementor-widget-image"
                                data-id="740812f" data-element_type="widget" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <img loading="lazy" decoding="async" width="1280" height="853"
                                       src="{{asset('courses2/aiml2.jpg')}}"
                                        class="attachment-full size-full wp-image-1520"
                                        alt="University students studying with teacher">
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-8b1438c e-flex e-con-boxed e-con e-child"
                                data-id="8b1438c" data-element_type="container">
                                <div class="e-con-inner">
                                    <div class="elementor-element elementor-element-d5edd45 elementor-widget elementor-widget-heading"
                                        data-id="d5edd45" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <p class="elementor-heading-title elementor-size-default">"Engineering is the art of directing the great sources of power in nature for the use and convenience of man"</p>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-3a94bac elementor-widget elementor-widget-button"
                                        data-id="3a94bac" data-element_type="widget" data-widget_type="button.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-button-wrapper">                                                
                                                <a class="elementor-button elementor-button-link elementor-size-sm"
                                                    href="{{route('view-courses', 'aiml')}}">
                                                    <span class="elementor-button-content-wrapper">
                                                        <span class="elementor-button-text">Learn More</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>                    
                </div>
            </div>
        </div>
    </div>    
    <div class="elementor-element elementor-element-db10bcf e-con-full e-flex e-con e-parent" data-id="db10bcf"
        data-element_type="container">        
        <div class="elementor-element elementor-element-910aef9 e-con-full e-flex e-con e-child" data-id="910aef9"
            data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" style="--width: 100%">
            <div class="elementor-element elementor-element-4dba181 e-con-full e-flex e-con e-child"
                data-id="4dba181" data-element_type="container" style="--width: 100%; padding: 25px 68px !important;">
                <div class="elementor-element elementor-element-66a6537 elementor-invisible elementor-widget elementor-widget-heading"
                    data-id="66a6537" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                    data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default"> <span style="font-weight: 300; line-height:2;">{{env('COLLEGE_NAME_SHORT')}} - Empowering Visionaries & <br></span>Building Innovators</h2>                        
                    </div>
                </div>
                <div class="elementor-element elementor-element-d48357f elementor-widget elementor-widget-text-editor"
                    data-id="d48357f" data-element_type="widget" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        <p>
                            With the dynamic changes in our world today, the traditional models of education do not adequately cater to the student’s practical and global learning. The questions of career readiness and employability only make these challenges worse. At {{env('COLLEGE_NAME_SHORT')}}, we have developed an innovative curriculum powered by AI and integrated with NEP 2020, that integrates modern science with Indian traditional knowledge, solving these issues. Our {{env('COLLEGE_NAME_SHORT')}} curriculum prepares students for industries with its practical and skill-based education. In addition, our students are well supported by career and placement services that offer guidance for internships and mentorships with industry professionals, which helps our students excel in their professional endeavors
                        </p>
                    </div>
                </div>
                <div class="elementor-element elementor-element-5582dfc elementor-widget elementor-widget-button"
                    data-id="5582dfc" data-element_type="widget" data-widget_type="button.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-button-wrapper">
                            <a class="elementor-button elementor-button-link elementor-size-sm"
                                href="{{route('view-rd')}}">
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

    {{-- <div class="content p-5">                                    
        <div class="row p-3">
            <div class=" col-lg-6 col-md-6 col-sm-12 banner d-flex align-items-center justify-content-start" style="flex-direction: column;">                       
                <div class="elementor-element elementor-element-2772079 elementor-invisible elementor-widget elementor-widget-heading"
                    data-id="2772079" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                    data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h3 class="elementor-heading-title elementor-size-default">SERI's Top Recruiters
                        </h3>
                    </div>
                </div>    
                <p style="line-height: 2.5">From the very first year, we integrate a unique approach into the academic framework, combining Industry-Synced Training (IST), Strategic Placement Preparation (SPP), and Robust Industry Links (RIL). Our strong partnerships with leading companies ensure valuable opportunities for internships and placements, while our faculty, equipped with extensive industrial expertise, effectively bridge the gap between theoretical concepts and practical applications</p>                    
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <img src="{{asset('images/recruitesr_collage2.jpg')}}" alt="images" width="100%" height="100%">
            </div>
        </div>            
    </div>   --}}
    
    <div class="elementor-element elementor-element-2c231cc e-flex e-con-boxed e-con e-parent" data-id="2c231cc"
        data-element_type="container">
        <div class="e-con-inner" style="width:100%;">
            <div class="elementor-element elementor-element-f20d47b e-con-full e-flex e-con e-child" style="width: 100%;"
                data-id="f20d47b" data-element_type="container">
                <div class="elementor-element elementor-element-25ae81f elementor-invisible elementor-widget elementor-widget-heading"
                    data-id="25ae81f" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                    data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">Vision & Mission</h2>
                    </div>
                </div>                
                <div class="row w-100 g-2">
                    <div class="col-lg-6">
                        <div class="elementor-element elementor-element-c124153 elementor-mobile-position-left elementor-widget-mobile__width-inherit elementor-position-left elementor-view-stacked elementor-shape-circle elementor-vertical-align-top elementor-invisible elementor-widget elementor-widget-icon-box"
                            data-id="c124153" data-element_type="widget"
                            data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}"
                            data-widget_type="icon-box.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-icon-box-wrapper">

                                    <div class="elementor-icon-box-icon">
                                        <span class="elementor-icon">
                                            <i aria-hidden="true" class="icon icon-graduation-hat"></i> </span>
                                    </div>

                                    <div class="elementor-icon-box-content">

                                        <div class="elementor-icon-box-title">
                                            {{-- <span>Vision</span> --}}
                                        </div>

                                        <p class="elementor-icon-box-description">{{env('COLLEGE_NAME_SHORT')}} aims to be a globally recognized center for excellence in engineering education, research, and innovation, fostering responsible leaders who drive technological advancements for a better society.</p>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="elementor-element elementor-element-4e27cf9 elementor-mobile-position-left elementor-widget-mobile__width-inherit elementor-position-left elementor-view-stacked elementor-shape-circle elementor-vertical-align-top elementor-invisible elementor-widget elementor-widget-icon-box"
                            data-id="4e27cf9" data-element_type="widget"
                            data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}"
                            data-widget_type="icon-box.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-icon-box-wrapper">
        
                                    <div class="elementor-icon-box-icon">
                                        <span class="elementor-icon">
                                            <i aria-hidden="true" class="icon icon-team-1"></i> </span>
                                    </div>
        
                                    <div class="elementor-icon-box-content">
        
                                        <div class="elementor-icon-box-title">
                                            {{-- <span>Mission</span> --}}
                                        </div>
        
                                        <p class="elementor-icon-box-description">With our industry-ready professionals, technical, management, and problem-solving skills we aim to empower students to excel in their chosen fields and also deliver high-quality education with advanced technology.</p>
        
                                    </div>
        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="elementor-element elementor-element-c124153 elementor-mobile-position-left elementor-widget-mobile__width-inherit elementor-position-left elementor-view-stacked elementor-shape-circle elementor-vertical-align-top elementor-invisible elementor-widget elementor-widget-icon-box"
                    data-id="c124153" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}"
                    data-widget_type="icon-box.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-icon-box-wrapper">

                            <div class="elementor-icon-box-icon">
                                <span class="elementor-icon">
                                    <i aria-hidden="true" class="icon icon-graduation-hat"></i> </span>
                            </div>

                            <div class="elementor-icon-box-content">

                                <div class="elementor-icon-box-title">
                                    <span>Vision</span>
                                </div>

                                <p class="elementor-icon-box-description">{{env('COLLEGE_NAME_SHORT')}} aims to be a globally recognized center for excellence in engineering education, research, and innovation, fostering responsible leaders who drive technological advancements for a better society.</p>

                            </div>

                        </div>
                    </div>
                </div> --}}
                {{-- <div class="elementor-element elementor-element-425b85f elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                    data-id="425b85f" data-element_type="widget" data-widget_type="divider.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-divider">
                            <span class="elementor-divider-separator">
                            </span>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="elementor-element elementor-element-4e27cf9 elementor-mobile-position-left elementor-widget-mobile__width-inherit elementor-position-left elementor-view-stacked elementor-shape-circle elementor-vertical-align-top elementor-invisible elementor-widget elementor-widget-icon-box"
                    data-id="4e27cf9" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}"
                    data-widget_type="icon-box.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-icon-box-wrapper">

                            <div class="elementor-icon-box-icon">
                                <span class="elementor-icon">
                                    <i aria-hidden="true" class="icon icon-team-1"></i> </span>
                            </div>

                            <div class="elementor-icon-box-content">

                                <div class="elementor-icon-box-title">
                                    <span>Mission</span>
                                </div>

                                <p class="elementor-icon-box-description">With our industry-ready professionals, technical, management, and problem-solving skills we aim to empower students to excel in their chosen fields and also deliver high-quality education with advanced technology.</p>

                            </div>

                        </div>
                    </div>
                </div> --}}
            </div>            
        </div>
    </div>



    
    {{-- <style>
        .ekit-wid-con .elementskit-accordion .elementskit-card-header>.elementskit-btn-link{
            background: none !important;
        }
        .ekit-wid-con .elementskit-accordion .elementskit-card-body {
            padding: 20px 30px !important;
        }        
        .news-section, .faq-section {
            background: white;
            padding: 20px;
            border-radius: 8px;
            /* box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); */
        }
        .news-section{
            background: transparent;
        }
        .accordion-button{
            background: #ddd !important;
            color: #000 !important;
        }
        .accordion-button:hover{
            color: #000 !important;
            font-weight: bold;
        }
        .accordion-button{
            outline: none;
            border: none;
        }


        .accordion {
            width: 100%;
            max-width: 600px;
            margin: 20px auto;
        }
        .accordion-item {
            border-bottom: 1px solid #ccc;
        }
        .accordion-header {
            background: #f4f4f4;
            padding: 15px;
            cursor: pointer;
            font-size: 18px;
            transition: background 0.3s;
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
            max-height: 200px;
            padding: 15px;
        }
    </style> --}}







    {{-- <section class="faq-section" style="background:#f0f0f0">
        <div class="e-con-inner break-faq">
            <div class="faq-heading elementor-element elementor-element-de36f6f e-con-full e-flex e-con e-child" data-id="de36f6f" data-element_type="container">
                 <div class="elementor-widget-container ">
                    <h2 class="elementor-heading-title elementor-size-default"> Latest News </h2>
                    <p></p>
                </div>
            </div>
            <div class="elementor-element elementor-element-bfd8afe e-con-full e-flex e-con e-child animated fadeInUp">    
                <div class="elementor-element elementor-element-41b9ff1 elementor-widget elementor-widget-elementskit-accordion" data-id="41b9ff1" data-element_type="widget" data-widget_type="elementskit-accordion.default">
                    <div class="elementor-widget-container">
                        <div class="ekit-wid-con">
                            <div class="elementskit-accordion accoedion-primary" id="accordion-67d535b4730d6">
                                <div class="elementskit-card">
                                    <div class="elementskit-card-header" id="primaryHeading-0-41b9ff1">
                                        <a href="#collapse-6f4913967d535b4730d6" class="ekit-accordion--toggler elementskit-btn-link collapsed" data-ekit-toggle="collapse" data-target="#Collapse-6f4913967d535b4730d6" aria-expanded="false" aria-controls="Collapse-6f4913967d535b4730d6">
                                            <span class="ekit-accordion-title">Upcoming Seminars</span>
                                            <div class="ekit_accordion_icon_group">
                                                <div class="ekit_accordion_normal_icon">
                                                    <!-- Normal Icon -->
                                                    <svg class="e-font-icon-svg e-fas-chevron-down" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                                                    </svg>
                                                </div>
        
                                                <div class="ekit_accordion_active_icon">
                                                    <!-- Active Icon -->
                                                    <svg class="e-font-icon-svg e-fas-minus" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
        
                                    <div id="Collapse-6f4913967d535b4730d6" class="collapse" aria-labelledby="primaryHeading-0-41b9ff1" data-parent="#accordion-67d535b4730d6" style="">
        
                                        <div class="elementskit-card-body ekit-accordion--content">
                                            <p>
                                            </p>
                                        </div>
        
                                    </div>
        
                                </div><!-- .elementskit-card END -->
        
    
                                <div class="elementskit-card">
                                    <div class="elementskit-card-header" id="primaryHeading-1-41b9ff1">
                                        <a href="#collapse-042b37867d535b4730d6" class="ekit-accordion--toggler elementskit-btn-link collapsed" data-ekit-toggle="collapse" data-target="#Collapse-042b37867d535b4730d6" aria-expanded="false" aria-controls="Collapse-042b37867d535b4730d6">
        
                                            <span class="ekit-accordion-title">Upcoming Webinars</span>
        
        
                                            <div class="ekit_accordion_icon_group">
                                                <div class="ekit_accordion_normal_icon">
                                                    <!-- Normal Icon -->
                                                    <svg class="e-font-icon-svg e-fas-chevron-down" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                                                    </svg>
                                                </div>
        
                                                <div class="ekit_accordion_active_icon">
                                                    <!-- Active Icon -->
                                                    <svg class="e-font-icon-svg e-fas-minus" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path>
                                                    </svg>
                                                </div>
                                            </div>
        
        
                                        </a>
                                    </div>
        
                                    <div id="Collapse-042b37867d535b4730d6" class=" collapse" aria-labelledby="primaryHeading-1-41b9ff1" data-parent="#accordion-67d535b4730d6">
        
                                        <div class="elementskit-card-body ekit-accordion--content">
                                            <p>
                                            </p>
                                        </div>
        
                                    </div>
        
                                </div><!-- .elementskit-card END -->
        
        
                                <div class="elementskit-card">
                                    <div class="elementskit-card-header" id="primaryHeading-2-41b9ff1">
                                        <a href="#collapse-fcc8da467d535b4730d6" class="ekit-accordion--toggler elementskit-btn-link collapsed" data-ekit-toggle="collapse" data-target="#Collapse-fcc8da467d535b4730d6" aria-expanded="false" aria-controls="Collapse-fcc8da467d535b4730d6">
        
                                            <span class="ekit-accordion-title">Upcoming Conferences</span>
        
        
                                            <div class="ekit_accordion_icon_group">
                                                <div class="ekit_accordion_normal_icon">
                                                    <!-- Normal Icon -->
                                                    <svg class="e-font-icon-svg e-fas-chevron-down" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                                                    </svg>
                                                </div>
        
                                                <div class="ekit_accordion_active_icon">
                                                    <!-- Active Icon -->
                                                    <svg class="e-font-icon-svg e-fas-minus" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path>
                                                    </svg>
                                                </div>
                                            </div>
        
        
                                        </a>
                                    </div>
        
                                    <div id="Collapse-fcc8da467d535b4730d6" class="collapse" aria-labelledby="primaryHeading-2-41b9ff1" data-parent="#accordion-67d535b4730d6" style="">
        
                                        <div class="elementskit-card-body ekit-accordion--content">
                                            <p>
                                            </p>
                                        </div>
        
                                    </div>
        
                                </div><!-- .elementskit-card END -->
        
        
                                <div class="elementskit-card">
                                    <div class="elementskit-card-header" id="primaryHeading-3-41b9ff1">
                                        <a href="#collapse-247bb1b67d535b4730d6" class="ekit-accordion--toggler elementskit-btn-link collapsed" data-ekit-toggle="collapse" data-target="#Collapse-247bb1b67d535b4730d6" aria-expanded="false" aria-controls="Collapse-247bb1b67d535b4730d6">
        
                                            <span class="ekit-accordion-title">Upcoming L&T Activities</span>
        
        
                                            <div class="ekit_accordion_icon_group">
                                                <div class="ekit_accordion_normal_icon">
                                                    <!-- Normal Icon -->
                                                    <svg class="e-font-icon-svg e-fas-chevron-down" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                                                    </svg>
                                                </div>
        
                                                <div class="ekit_accordion_active_icon">
                                                    <!-- Active Icon -->
                                                    <svg class="e-font-icon-svg e-fas-minus" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path>
                                                    </svg>
                                                </div>
                                            </div>
        
        
                                        </a>
                                    </div>
        
                                    <div id="Collapse-247bb1b67d535b4730d6" class=" collapse" aria-labelledby="primaryHeading-3-41b9ff1" data-parent="#accordion-67d535b4730d6">
        
                                        <div class="elementskit-card-body ekit-accordion--content">
                                            <p> </p>
                                        </div>
        
                                    </div>
        
                                </div><!-- .elementskit-card END -->
        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}



    {{-- <li class="list-group-item">News item 1</li>
    <li class="list-group-item">News item 2</li>
    <li class="list-group-item">News item 3</li>
    <li class="list-group-item">News item 4</li> --}}

    {{-- <div class="accordion" id="faqAccordion">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                    Question 1
                </button>
            </h2>
            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                <div class="accordion-body">Answer to question 1.</div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                    Question 2
                </button>
            </h2>
            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">Answer to question 2.</div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                    Question 3
                </button>
            </h2>
            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">Answer to question 3.</div>
            </div>
        </div>
    </div> --}}

<div class="elementor-element elementor-element-2c231cc e-flex e-con-boxed e-con e-parent" data-id="2c231cc" style="background: #f8f9fa;">
    <div class="mt-4 faq-container">
        {{-- <div class="row g-2">            
            <div class="col-md-6">
                <div class="news-section">
                    <h2>Latest News</h2>
                    <ul class="list-group list-group-flush">
                        
                    </ul>
                </div>
            </div>

            <!-- FAQ Section -->
            <div class="col-md-6">
                <div class="faq-section">                    
                    

                    <div class="accordion">
                        <div class="accordion-item">
                            <div class="accordion-header">Upcoming Seminars</div>
                            <div class="accordion-content">
                                <p>Content for section 1 goes here...</p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header">Upcoming Webinars</div>
                            <div class="accordion-content">
                                <p>Content for section 2 goes here...</p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header">Upcoming Conferences</div>
                            <div class="accordion-content">
                                <p>Content for section 3 goes here...</p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header">Upcoming L&T Activities</div>
                            <div class="accordion-content">
                                <p>Content for section 3 goes here...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="container p-0 video-container  mb-4">
            <div style="position: relative; display: inline-block;">
                <video autoplay muted loop playsinline style="display: block; width: 100%; height: auto;">
                    <source src="{{asset('images/seri-video.mp4')}}" type="video/mp4">
                </video>
                
                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.4); pointer-events: none;"></div>
            </div>

            <div class="video-overlay">
                <h2 class="text-center mt-6">Step Inside Our World <br> To Get World-class Campus Experience</h2>
                <p class="text-center">{{env('COLLEGE_NAME_MID')}} Engineering and Research Institute is a place where innovation meets ambition— <br>cutting-edge labs, industry-driven learning, and a campus built for future pioneers.</p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

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
</div>    
    {{-- <div class="elementor-element elementor-element-16dc8b2 e-flex e-con-boxed e-con e-parent" data-id="16dc8b2"
        data-element_type="container">
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-a51e5a1 e-con-full e-flex e-con e-child" style="background-color: #f8f9fa !important;"
                data-id="a51e5a1" data-element_type="container"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-element elementor-element-8bb8c5f elementor-invisible elementor-widget elementor-widget-heading"
                    data-id="8bb8c5f" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}"
                    data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default"> {{env('COLLEGE_NAME_SHORT')}}'s 5 Step Admission Process</h2>
                    </div>
                </div>                
            </div>
            <div class="elementor-element elementor-element-aac22a3 e-con-full e-flex e-con e-child"
                data-id="aac22a3" data-element_type="container">
                <div class="elementor-element elementor-element-9061cdd elementor-view-stacked elementor-absolute e-transform elementor-shape-circle elementor-invisible elementor-widget elementor-widget-icon"
                    data-id="9061cdd" data-element_type="widget"
                    data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_transform_rotateZ_effect_mobile&quot;:{&quot;unit&quot;:&quot;deg&quot;,&quot;size&quot;:90,&quot;sizes&quot;:[]},&quot;_transform_rotateZ_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_rotateZ_effect_tablet&quot;:{&quot;unit&quot;:&quot;deg&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                    data-widget_type="icon.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-icon-wrapper">
                            <div class="elementor-icon">
                                <i aria-hidden="true" class="icon icon-right-arrow"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-70b8b1b elementor-mobile-position-left elementor-widget-mobile__width-inherit elementor-view-default elementor-position-top elementor-widget elementor-widget-icon-box"
                    data-id="70b8b1b" data-element_type="widget" data-widget_type="icon-box.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-icon-box-wrapper">

                            <div class="elementor-icon-box-icon">
                                <span class="elementor-icon">
                                    <i aria-hidden="true" class="icon icon-document"></i> </span>
                            </div>

                            <div class="elementor-icon-box-content">

                                <div class="elementor-icon-box-title">
                                    <span>Explore Programs</span>
                                </div>

                                <p class="elementor-icon-box-description">Just hop on the website and scroll through the various UG & PG engineering and technology programs.</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-5de6345 e-con-full e-flex e-con e-child"
                data-id="5de6345" data-element_type="container">
                <div class="elementor-element elementor-element-6132b26 elementor-mobile-position-left elementor-widget-mobile__width-inherit elementor-view-default elementor-position-top elementor-widget elementor-widget-icon-box"
                    data-id="6132b26" data-element_type="widget" data-widget_type="icon-box.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-icon-box-wrapper">

                            <div class="elementor-icon-box-icon">
                                <span class="elementor-icon">
                                    <i aria-hidden="true" class="icon icon-suitcase-1"></i> </span>
                            </div>

                            <div class="elementor-icon-box-content">

                                <div class="elementor-icon-box-title">
                                    <span>Fill Out the Application Form</span>
                                </div>

                                <p class="elementor-icon-box-description">Go to the admissions portal and fill out the application form online with all required documents.</p>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-a599576 elementor-view-stacked elementor-absolute e-transform elementor-shape-circle elementor-invisible elementor-widget elementor-widget-icon"
                    data-id="a599576" data-element_type="widget"
                    data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_transform_rotateZ_effect_mobile&quot;:{&quot;unit&quot;:&quot;deg&quot;,&quot;size&quot;:90,&quot;sizes&quot;:[]},&quot;_transform_rotateZ_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_rotateZ_effect_tablet&quot;:{&quot;unit&quot;:&quot;deg&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                    data-widget_type="icon.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-icon-wrapper">
                            <div class="elementor-icon">
                                <i aria-hidden="true" class="icon icon-right-arrow"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-2cc9f97 e-con-full e-flex e-con e-child"
                data-id="2cc9f97" data-element_type="container">
                <div class="elementor-element elementor-element-3a390d1 elementor-mobile-position-left elementor-widget-mobile__width-inherit elementor-view-default elementor-position-top elementor-widget elementor-widget-icon-box"
                    data-id="3a390d1" data-element_type="widget" data-widget_type="icon-box.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-icon-box-wrapper">

                            <div class="elementor-icon-box-icon">
                                <span class="elementor-icon">
                                    <i aria-hidden="true" class="icon icon-page-list"></i> </span>
                            </div>

                            <div class="elementor-icon-box-content">

                                <div class="elementor-icon-box-title">
                                    <span>Entrance Exam</span>
                                </div>

                                <p class="elementor-icon-box-description">Apply and sit for the required entrance examinations as specified by our institute guidelines.</p>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-7aeea68 elementor-view-stacked elementor-absolute e-transform elementor-hidden-desktop elementor-hidden-tablet elementor-shape-circle elementor-invisible elementor-widget elementor-widget-icon"
                    data-id="7aeea68" data-element_type="widget"
                    data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_transform_rotateZ_effect_mobile&quot;:{&quot;unit&quot;:&quot;deg&quot;,&quot;size&quot;:90,&quot;sizes&quot;:[]},&quot;_transform_rotateZ_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_rotateZ_effect_tablet&quot;:{&quot;unit&quot;:&quot;deg&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                    data-widget_type="icon.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-icon-wrapper">
                            <div class="elementor-icon">
                                <i aria-hidden="true" class="icon icon-right-arrow"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-169dbf0 e-con-full e-flex e-con e-child"
                data-id="169dbf0" data-element_type="container">
                <div class="elementor-element elementor-element-f948040 elementor-mobile-position-left elementor-widget-mobile__width-inherit elementor-view-default elementor-position-top elementor-widget elementor-widget-icon-box"
                    data-id="f948040" data-element_type="widget" data-widget_type="icon-box.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-icon-box-wrapper">

                            <div class="elementor-icon-box-icon">
                                <span class="elementor-icon">
                                    <i aria-hidden="true" class="icon icon-Profile"></i> </span>
                            </div>

                            <div class="elementor-icon-box-content">

                                <div class="elementor-icon-box-title">
                                    <span>Personal Interview</span>
                                </div>

                                <p class="elementor-icon-box-description">Shortlisted candidates will be called in for a personal interview. </p>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-f17c39c elementor-view-stacked elementor-absolute e-transform elementor-shape-circle elementor-invisible elementor-widget elementor-widget-icon"
                    data-id="f17c39c" data-element_type="widget"
                    data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_transform_rotateZ_effect_mobile&quot;:{&quot;unit&quot;:&quot;deg&quot;,&quot;size&quot;:90,&quot;sizes&quot;:[]},&quot;_transform_rotateZ_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_rotateZ_effect_tablet&quot;:{&quot;unit&quot;:&quot;deg&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                    data-widget_type="icon.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-icon-wrapper">
                            <div class="elementor-icon">
                                <i aria-hidden="true" class="icon icon-right-arrow"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-8c408d0 e-con-full e-flex e-con e-child"
                data-id="8c408d0" data-element_type="container">
                <div class="elementor-element elementor-element-1e6eb2b elementor-mobile-position-left elementor-widget-mobile__width-inherit elementor-view-default elementor-position-top elementor-widget elementor-widget-icon-box"
                    data-id="1e6eb2b" data-element_type="widget" data-widget_type="icon-box.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-icon-box-wrapper">

                            <div class="elementor-icon-box-icon">
                                <span class="elementor-icon">
                                    <i aria-hidden="true" class="icon icon-credit-card"></i> </span>
                            </div>

                            <div class="elementor-icon-box-content">

                                <div class="elementor-icon-box-title">
                                    <span>Confirmation of Admission</span>
                                </div>

                                <p class="elementor-icon-box-description">
                                    When the interview is passed, confirm your acceptance and pay the required fees to secure your place at {{env('COLLEGE_NAME_SHORT')}}. </p>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-0794bfa elementor-view-stacked elementor-absolute e-transform elementor-shape-circle elementor-invisible elementor-widget elementor-widget-icon"
                    data-id="0794bfa" data-element_type="widget"
                    data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_transform_rotateZ_effect_mobile&quot;:{&quot;unit&quot;:&quot;deg&quot;,&quot;size&quot;:90,&quot;sizes&quot;:[]},&quot;_transform_rotateZ_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_rotateZ_effect_tablet&quot;:{&quot;unit&quot;:&quot;deg&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                    data-widget_type="icon.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-icon-wrapper">
                            <div class="elementor-icon">
                                <i aria-hidden="true" class="icon icon-right-arrow"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <section>        
        <div class="container-fluid w-100 mt-4" style="position: relative;">  
            <div class="elementor-element elementor-element-2772079 elementor-invisible elementor-widget elementor-widget-heading"
                data-id="2772079" data-element_type="widget"
                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
                <div class="elementor-widget-container">
                    <div class="container p-0">
                        <div class="row p-2">                            
                            <div class="col-lg-3" >                            
                                {{-- <h3 class="elementor-heading-title elementor-size-default red-line top-recruiters-title" style="width: max-content; padding-bottom:5px;">
                                    <span style="font-weight: 300; font-size:28px; text-align:left">Top</span> <br>
                                    Recruiters<sup style="color: #000;">*</sup> 
                                </h3> --}}
                                <div class="elementor-widget-container" style="display: flex; flex-direction:column; justify-content:center;">
                                    <span style="font-weight: 300; font-size:28px; text-align:left; margin-top:5px;">Top</span>                                                        
                                    <h3 class="elementor-heading-title elementor-size-default red-line"style="width: max-content;  margin:10px 0; padding-bottom:5px;">Recruiters</h3>
                                </div>
                            </div>
                            <div class="col-lg-9" >
                                <div class="elementor-widget-container" style="display: flex; flex-direction:column;justify-content:center;">
                                    <span style="text-align: left">From the very first year, we integrate a unique approach into the academic framework, combining Industry-Synced Training (IST), Strategic Placement Preparation (SPP), and Robust Industry Links (RIL). Our strong partnerships with leading companies ensure valuable opportunities for internships and placements, while our faculty, equipped with extensive industrial expertise, effectively bridge the gap between theoretical concepts and practical applications</span>                    
                                </div>
                            </div>
                        </div>      
                    </div>                                  
                </div>
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
        </div>        
    </section>


    <div class="elementor-element elementor-element-d05a958 e-flex e-con-boxed e-con e-parent" data-id="d05a958"
        data-element_type="container">
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-efd2968 e-flex e-con-boxed e-con e-child"
                data-id="efd2968" data-element_type="container"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-b32a1d1 e-con-full e-flex e-con e-child" style="--width:18%"
                        data-id="b32a1d1" data-element_type="container">
                        <div class="elementor-element elementor-element-4136899 elementor-invisible elementor-widget elementor-widget-heading"
                            data-id="4136899" data-element_type="widget"
                            data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;}"
                            data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">Life Beyond Classrooms</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-e9c2cf6 elementor-invisible elementor-widget elementor-widget-heading"
                            data-id="e9c2cf6" data-element_type="widget"
                            data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}"
                            data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                {{-- <h3 class="elementor-heading-title elementor-size-default"><span style="font-size: 28px">Campus</span><br>Life
                                </h3> --}}
                                <span class="text-white" style="font-weight: 300; font-size:28px; ">Campus</span>                                                        
                                <h3 class="elementor-heading-title elementor-size-default"style="width: max-content;  margin:10px 0; padding-bottom:5px;">Life</h3>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-325d42d elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                            data-id="325d42d" data-element_type="widget" data-widget_type="divider.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-divider">
                                    <span class="elementor-divider-separator">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-620f817 e-con-full e-flex e-con e-child"
                        data-id="620f817" data-element_type="container">
                        <div class="elementor-element elementor-element-8a8a63b elementor-widget elementor-widget-text-editor"
                            data-id="8a8a63b" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <p>The campus life at SERI is vibrant and useful in molding the day-to-day experience of students. Some of these are:</p>
                                <ul style="color: #fff; font-size:16px;">
                                    <li>Hostels with separate facilities for boys & girls with modern amenities.</li>
                                    <li>Many sports and recreational facilities, including indoor and outdoor sports.</li>
                                    <li>Cultural and technical fairs for creativity and teamwork.</li>
                                    <li>Entrepreneurial development and leadership programs in order to enhance careers.</li>
                                    <li>Canteen, library, and medical service for students' well-being.</li>
                                </ul> 
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-c90bda4 e-flex e-con-boxed e-con e-child"
                            data-id="c90bda4" data-element_type="container">
                            <div class="e-con-inner">
                                {{-- <div class="elementor-element elementor-element-003a668 elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-invisible elementor-widget elementor-widget-elementskit-heading" style="width: 75%;"
                                    data-id="003a668" data-element_type="widget"
                                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                                    data-widget_type="elementskit-heading.default">
                                    <div class="elementor-widget-container">
                                        <div class="ekit-wid-con">
                                            <div class="ekit-heading elementskit-section-title-wraper text_left   ekit_heading_tablet-   ekit_heading_mobile-">                                                
                                                <div class="ekit-heading__description">                                                    
                                                    <ul style="color: #fff;">
                                                        <li>Hostels with separate facilities for boys & girls with modern amenities.</li>
                                                        <li>Many sports and recreational facilities, including indoor and outdoor sports.</li>
                                                        <li>Cultural and technical fairs for creativity and teamwork.</li>
                                                        <li>Entrepreneurial development and leadership programs in order to enhance careers.</li>
                                                        <li>Canteen, library, and medical service for students' well-being.</li>
                                                    </ul>                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="elementor-element elementor-element-2d6031c elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                    data-id="2d6031c" data-element_type="widget" data-widget_type="divider.default">
                                    {{-- <div class="elementor-widget-container">
                                        <div class="elementor-divider">
                                            <span class="elementor-divider-separator">
                                            </span>
                                        </div>
                                    </div> --}}
                                </div>
                                {{-- <div class="elementor-element elementor-element-da266cd elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-invisible elementor-widget elementor-widget-elementskit-heading"
                                    data-id="da266cd" data-element_type="widget"
                                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:120}"
                                    data-widget_type="elementskit-heading.default">
                                    <div class="elementor-widget-container">
                                        <div class="ekit-wid-con">
                                            <div
                                                class="ekit-heading elementskit-section-title-wraper text_left   ekit_heading_tablet-   ekit_heading_mobile-">
                                                <h4 class="ekit-heading--title elementskit-section-title ">Student
                                                    Activities</h4>
                                                <div class="ekit-heading__description">
                                                    <p>Condimentum a cubilia erat sit vehicula. Cras primis conubia
                                                        letius faucibus vehicula taciti ac vulputate facilisi augue.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-c2e1a0f elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                    data-id="c2e1a0f" data-element_type="widget" data-widget_type="divider.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-divider">
                                            <span class="elementor-divider-separator">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-d091a59 elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-invisible elementor-widget elementor-widget-elementskit-heading"
                                    data-id="d091a59" data-element_type="widget"
                                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:240}"
                                    data-widget_type="elementskit-heading.default">
                                    <div class="elementor-widget-container">
                                        <div class="ekit-wid-con">
                                            <div
                                                class="ekit-heading elementskit-section-title-wraper text_left   ekit_heading_tablet-   ekit_heading_mobile-">
                                                <h4 class="ekit-heading--title elementskit-section-title ">
                                                    Transportation</h4>
                                                <div class="ekit-heading__description">
                                                    <p>Condimentum a cubilia erat sit vehicula. Cras primis conubia
                                                        letius faucibus vehicula taciti ac vulputate facilisi augue.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="elementor-element elementor-element-a81fe31 e-flex e-con-boxed e-con e-parent" data-id="a81fe31"
        data-element_type="container">
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-14a33ee e-flex e-con-boxed e-con e-child"
                data-id="14a33ee" data-element_type="container">
                <div class="row g-2">
                    <div class="col-lg-6 col-sm-6">                        
                        <div style="--width: 100%;" class="elementor-element elementor-element-d2d573e e-con-full e-flex elementor-invisible e-con e-child"
                            data-id="d2d573e" data-element_type="container"
                            data-settings="{&quot;animation&quot;:&quot;fadeInLeft&quot;}">                            
                            <div class="elementor-element elementor-element-61b873b e-con-full e-flex e-con e-child" style="--width:100%;"
                                data-id="61b873b" data-element_type="container">
                                <div class="elementor-element elementor-element-b7ef7f7 elementor-widget elementor-widget-elementskit-heading"
                                    data-id="b7ef7f7" data-element_type="widget"
                                    data-widget_type="elementskit-heading.default">
                                    <div class="elementor-widget-container">
                                        <div class="card" style="max-height: 20rem; min-height:12rem;">
                                            <div class="card-body">
                                                <div class="ekit-wid-con">
                                                    <div
                                                        class="ekit-heading elementskit-section-title-wraper text_left   ekit_heading_tablet-   ekit_heading_mobile-">
                                                        <h3 class="ekit-heading--title elementskit-section-title "style="font-weight: 300; font-size:28px;">Affiliations</h3>
            
                                                        <div class="ekit-heading__description">
                                                            <p>Affiliated Institution with Dr. A.P.J. Abdul Kalam Technical University, Lucknow An institution duly approved by the All India Council for Technical Education, New Delhi an apex body governing higher technical education in India.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div style="--width: 100%;" class="elementor-element elementor-element-be4e1db e-con-full e-flex elementor-invisible e-con e-child"
                            data-id="be4e1db" data-element_type="container"
                            data-settings="{&quot;animation&quot;:&quot;fadeInRight&quot;}">                            
                            <div class="elementor-element elementor-element-3e4cf67 e-con-full e-flex e-con e-child" style="--width:100%;"
                                data-id="3e4cf67" data-element_type="container">
                                <div class="elementor-element elementor-element-796321f elementor-widget elementor-widget-elementskit-heading"
                                    data-id="796321f" data-element_type="widget"
                                    data-widget_type="elementskit-heading.default">
                                    <div class="elementor-widget-container">
                                        <div class="card" style="max-height: 20rem; min-height:12rem;">
                                            <div class="card-body">
                                                <div class="ekit-wid-con">
                                                    <div
                                                        class="ekit-heading elementskit-section-title-wraper text_left   ekit_heading_tablet-   ekit_heading_mobile-">
                                                        <h3 class="ekit-heading--title elementskit-section-title " style="font-weight: 300; font-size:28px;">Eligibility to Join Us?</h3>
                                                        <div class="ekit-heading__description">
                                                            <p>B.Tech Programs: Minimum 45% in 10+2 for General Category & 40% for SC/ST Category students with Physics, Mathematics, and Chemistry/Computer Science.
                                                                Admission on the basis of the JEE Mains, CUET, or State entrance exam & Management Quota</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="e-con-inner">                                    
                </div> --}}
            </div>
            {{-- <div class="elementor-element elementor-element-90e76da e-flex e-con-boxed e-con e-child"
                data-id="90e76da" data-element_type="container">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-e559556 e-con-full e-flex elementor-invisible e-con e-child"
                        data-id="e559556" data-element_type="container"
                        data-settings="{&quot;animation&quot;:&quot;fadeInLeft&quot;}">
                        <div class="elementor-element elementor-element-59ec8ef elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-image"
                            data-id="59ec8ef" data-element_type="widget" data-widget_type="image.default">
                            <div class="elementor-widget-container">
                                <img loading="lazy" decoding="async" width="1280" height="853"
                                    src="./Homepage – Edupreme_files/university-students-using-laptops-and-digital-tablet-working-together.jpg"
                                    class="attachment-full size-full wp-image-429"
                                    alt="University students using laptops and digital tablet, working together"
                                    srcset="https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/11/university-students-using-laptops-and-digital-tablet-working-together.jpg 1280w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/11/university-students-using-laptops-and-digital-tablet-working-together-300x200.jpg 300w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/11/university-students-using-laptops-and-digital-tablet-working-together-1024x682.jpg 1024w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/11/university-students-using-laptops-and-digital-tablet-working-together-768x512.jpg 768w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/11/university-students-using-laptops-and-digital-tablet-working-together-1536x1024.jpg 1536w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/11/university-students-using-laptops-and-digital-tablet-working-together-800x533.jpg 800w"
                                    sizes="(max-width: 1280px) 100vw, 1280px">
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-ae487a2 e-con-full e-flex e-con e-child"
                            data-id="ae487a2" data-element_type="container">
                            <div class="elementor-element elementor-element-383aeb9 elementor-widget elementor-widget-elementskit-heading"
                                data-id="383aeb9" data-element_type="widget"
                                data-widget_type="elementskit-heading.default">
                                <div class="elementor-widget-container">
                                    <div class="ekit-wid-con">
                                        <div
                                            class="ekit-heading elementskit-section-title-wraper text_left   ekit_heading_tablet-   ekit_heading_mobile-">
                                            <h3 class="ekit-heading--title elementskit-section-title ">Information
                                                Technology</h3>
                                            <div class="ekit-heading__description">
                                                <p>Consectetur placerat fringilla conubia mollis nec pretium urna
                                                    rutrum. Vel natoque habitasse elementum platea morbi feugiat mus
                                                    orci. Dapibus est sodales conubia ex ornare.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-fedf1d7 e-con-full e-flex elementor-invisible e-con e-child"
                        data-id="fedf1d7" data-element_type="container"
                        data-settings="{&quot;animation&quot;:&quot;fadeInRight&quot;}">
                        <div class="elementor-element elementor-element-2ab0ed5 elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-image"
                            data-id="2ab0ed5" data-element_type="widget" data-widget_type="image.default">
                            <div class="elementor-widget-container">
                                <img loading="lazy" decoding="async" width="1280" height="853"
                                    src="./Homepage – Edupreme_files/doctor-examines-the-patient-s-pulse-with-stethoscope-and-records-the-results-health-medical-checkup.jpg"
                                    class="attachment-full size-full wp-image-1101"
                                    alt="Doctor examines the patient&#39;s pulse with stethoscope and records the results, health medical checkup"
                                    srcset="https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/11/doctor-examines-the-patient-s-pulse-with-stethoscope-and-records-the-results-health-medical-checkup.jpg 1280w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/11/doctor-examines-the-patient-s-pulse-with-stethoscope-and-records-the-results-health-medical-checkup-300x200.jpg 300w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/11/doctor-examines-the-patient-s-pulse-with-stethoscope-and-records-the-results-health-medical-checkup-1024x682.jpg 1024w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/11/doctor-examines-the-patient-s-pulse-with-stethoscope-and-records-the-results-health-medical-checkup-768x512.jpg 768w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/11/doctor-examines-the-patient-s-pulse-with-stethoscope-and-records-the-results-health-medical-checkup-1536x1024.jpg 1536w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/11/doctor-examines-the-patient-s-pulse-with-stethoscope-and-records-the-results-health-medical-checkup-800x533.jpg 800w"
                                    sizes="(max-width: 1280px) 100vw, 1280px">
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-cbd1643 e-con-full e-flex e-con e-child"
                            data-id="cbd1643" data-element_type="container">
                            <div class="elementor-element elementor-element-a2759e8 elementor-widget elementor-widget-elementskit-heading"
                                data-id="a2759e8" data-element_type="widget"
                                data-widget_type="elementskit-heading.default">
                                <div class="elementor-widget-container">
                                    <div class="ekit-wid-con">
                                        <div
                                            class="ekit-heading elementskit-section-title-wraper text_left   ekit_heading_tablet-   ekit_heading_mobile-">
                                            <h3 class="ekit-heading--title elementskit-section-title ">Health &amp;
                                                Wellness</h3>
                                            <div class="ekit-heading__description">
                                                <p>Consectetur placerat fringilla conubia mollis nec pretium urna
                                                    rutrum. Vel natoque habitasse elementum platea morbi feugiat mus
                                                    orci. Dapibus est sodales conubia ex ornare.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="elementor-element elementor-element-7543343 e-flex e-con-boxed e-con e-child"
                data-id="7543343" data-element_type="container">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-d670a0f elementor-widget__width-initial elementor-widget-tablet__width-inherit elementor-widget elementor-widget-elementskit-heading"
                        data-id="d670a0f" data-element_type="widget" data-widget_type="elementskit-heading.default">
                        <div class="elementor-widget-container">
                            <div class="ekit-wid-con">
                                <div
                                    class="ekit-heading elementskit-section-title-wraper text_left   ekit_heading_tablet-text_center   ekit_heading_mobile-">
                                    <h3 class="ekit-heading--title elementskit-section-title ">Explore more
                                        experiences about campus here</h3>
                                    <div class="ekit-heading__description">
                                        <p>Platea nascetur torquent per si magna suscipit posuere penatibus
                                            parturient interdum. Neque nam lacinia libero dictumst arcu vestibulum
                                            quis diam. Iaculis luctus felis nunc orci pretium eu maximus per letius.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-a439211 elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget-tablet__width-inherit elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                        data-id="a439211" data-element_type="widget" data-widget_type="divider.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-divider">
                                <span class="elementor-divider-separator">
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-b66a10e elementor-align-right elementor-tablet-align-center elementor-widget__width-initial elementor-widget-tablet__width-inherit elementor-widget elementor-widget-button"
                        data-id="b66a10e" data-element_type="widget" data-widget_type="button.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-button-wrapper">
                                <a class="elementor-button elementor-button-link elementor-size-sm"
                                    href="https://tebewebe.online/edupreme/template-kit/homepage/#">
                                    <span class="elementor-button-content-wrapper">
                                        <span class="elementor-button-text">Discover More</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    <!--Blogs-->
 
    <section class="tabs-container">
        <div>
            <h2>Latest Articles</h2>
        </div>
        <div class="row">
            @foreach ($latest_blogs as $blog)              
            <div class="col-lg-4 col-md-6 col-sm-12">
                <a href="{{route('blogs.details', $blog->seo_url)}}" style="text-decoration: none;">
                <div class="card" style="max-height: 540px; !important; min-height:540px !important;">
                  <img src="{{$blog->image}}" class="card-img-top" alt="..." style="max-height: 275px !important; min-height: 275px !important; object-fit:cover;">
                  <div class="card-body">
                    <h5 class="card-title">{{$blog->blog_title}}</h5>
                    <p class="text-muted">
                        <i class="icon icon-calendar"></i> {{ $blog->created_at->format('d M Y h:i A') }}
                    </p>
                    @php
                        $words = explode(' ', strip_tags($blog->meta_description));
                        $excerpt = implode(' ', array_slice($words, 0, 20)) . (count($words) > 25 ? '...' : '');
                    @endphp

                    <p class="card-text">{{ $excerpt }}</p>                    
                    <p class="blog-lm">Learn More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="9" viewBox="0 0 16 9"><path fill="#000" d="M12.5 5h-9c-.28 0-.5-.22-.5-.5s.22-.5.5-.5h9c.28 0 .5.22.5.5s-.22.5-.5.5"/><path fill="#000" d="M10 8.5a.47.47 0 0 1-.35-.15c-.2-.2-.2-.51 0-.71l3.15-3.15l-3.15-3.15c-.2-.2-.2-.51 0-.71s.51-.2.71 0l3.5 3.5c.2.2.2.51 0 .71l-3.5 3.5c-.1.1-.23.15-.35.15Z"/></svg></p>
                  </div>
                </div>
                </a>
            </div>                
            @endforeach             
        </div>
    </section>
    
    <div class="elementor-element elementor-element-e6724ef e-flex e-con-boxed e-con e-parent" data-id="e6724ef"
        data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-5a80b44 e-con-full e-flex e-con e-child"
                data-id="5a80b44" data-element_type="container">
                <div class="elementor-element elementor-element-0629977 elementor-invisible elementor-widget elementor-widget-heading"
                    data-id="0629977" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                    data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">Together We Build, Together We Achieve!</h2>
                    </div>
                </div>
                <div class="elementor-element elementor-element-f5426f5 elementor-invisible elementor-widget elementor-widget-text-editor"
                    data-id="f5426f5" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                    data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        <p>Let us work together toward building a future of perfection in innovation, learning, and success.</p>
                    </div>
                </div>
                <div class="elementor-element elementor-element-c44af66 elementor-invisible elementor-widget elementor-widget-button"
                    data-id="c44af66" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:480}"
                    data-widget_type="button.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-button-wrapper">
                            <a class="elementor-button elementor-button-link elementor-size-sm"
                                href="{{route('apply_now')}}">
                                <span class="elementor-button-content-wrapper">
                                    <span class="elementor-button-icon">
                                        <i aria-hidden="true" class="icon icon-right-arrow2"></i> </span>
                                    <span class="elementor-button-text">Apply Now</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">            
        <!-- Modal -->
        {{-- <div class="modal fade" id="autoPopupModal" tabindex="-1" aria-labelledby="popupModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content p-3 w-100">
                <div class="modal-header border-0">
                
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <div class="modal-body">
                        <div class="alert alert-success alert-dismissible fade show" role="alert" id="successalert_modal" style="display: none;">
                            <strong>Success</strong> Enquiry Form submitted.
                            <button type="button" onclick="closealert()" style="background-color: transparent !important; color:#000 !important;" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                          </div>                                        
                        <form id="contact-form-modal" data-action="{{ route('submit-contact') }}">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h3 class="modal-title w-100 text-dark fw-bold" id="popupModalLabel">
                                        Request Academic Assistance
                                    </h3>
                                    <br>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Your Name*</label>
                                    <input type="text" name="name" class="form-control" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Your Email*</label>
                                    <input type="email" name="email" class="form-control" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Your Phone Number*</label>
                                    <input type="tel" name="phone" class="form-control" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Select Program*</label>
                                    <select class="form-control" name="program" required>
                                    <option value="">Select program</option>
                                    <option>Computer Science and Engineering</option>
                                    <option>Electronics & Communication Engineering</option>
                                    <option>Computer Science & Information Technology</option>
                                    <option>CSE (Artificial Intelligence & Machine Learning)</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Your City*</label>
                                    <input type="text" name="city" class="form-control" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Your State*</label>
                                    <input type="text" name="state" class="form-control" required>
                                </div> 
                                <div class="col-lg-3">                                    
                                    <button type="submit" form="contact-form-modal" class="btn btn-primary_2 px-5 submit-btn" style="padding:15px 25px !important; width:200px;">Submit</button>                            
                                </div>                               
                            </div>
                        </form>                  
                    </div>
            </div>
            </div>
        </div> --}}
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>   

<script>
    const modalId = 'autoPopupModal';
    const modalEl = document.getElementById(modalId);
    const modal = new bootstrap.Modal(modalEl);
             
    // Function to show modal after 5 seconds
    function showModalAfterDelay() {
      reopenTimeout = setTimeout(() => {
        if (!modalEl.classList.contains('show')) {
          modal.show();
          closePopup();          
        }
      }, 2000);
    }    
    showModalAfterDelay();        
</script>


<script>
    $(document).ready(function () {
      $('#contact-form-modal').on('submit', function (e) {
          e.preventDefault();

          alert('hello !!');
  
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
                  $('#successalert_modal').fadeIn(); // Show the alert
                  form[0].reset(); // Reset form
                  setTimeout(() => {
                      $('#successalert_modal').fadeOut();
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

@section('target-x')
    <script id="targetx-enquiry-script" data-context="SIMT" data-heading="Admissions Open 2025" data-bgcolor="black" src="https://enquirywidget.targetx.in/assets/7/targetx_widget.js" defer></script>
@endsection
  
@endsection