@extends('frontend.layout')
@section('title', 'Blogs')
<style>
    .blogs_feild{
        background-color: #fff;
        width: 150% !important;
        
    }

    /* .card2 {
        max-height: 300px;
        height: 200px;
        padding: 10px;
        margin: 10px 0;        
    } */
    .card-small{
        height: auto;
        height: 120px;
        padding: 10px;
    }
    
    /* .col-md-4 .card-img {
        height: 100% !important; 
        width:100% !important;        
        transition: box-shadow 0.3s ease-in-out;
        cursor: pointer;
    } */
    /* .col-md-4 img:hover {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    } */

.card2 {
    display: flex;
    flex-direction: row;
    align-items: stretch;
    width: 100%;
    max-width: 100%;
    min-height: 200px; /* Adjust as needed */   
    max-height: 300px; 
    margin: 10px 0;
    /* box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1); */
    overflow: hidden;
    /* border-radius: 10px; */
    transition: box-shadow 0.3s ease-in-out;
}

.card2:hover {
    box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.2);
}

/* Image Section */
.image-section {    
    display: flex;
    align-items: center;
    justify-content: center;
}

.image-section img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;
}

/* Content Section */
.content-section {
    /* background-color: green; For demo */
    padding: 15px;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    text-align: left;
}

.card-title {
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 5px;
    color: white;
}

.text-muted {
    font-size: 14px;
    color: #e0e0e0;
    margin-bottom: 10px;
}

.card-text {
    font-size: 16px;
    line-height: 1.4;
    color: #000;
}



    .e-con.e-flex>.e-con-inner{
        align-items: flex-start !important;
    }

    .card{
        height: 400px;
        background-position: left;
        background-position-x: left;
        background-size: contain;
        background-repeat: no-repeat;
    }


    
</style>

@section('main_content')   
<div data-elementor-type="wp-post" data-elementor-id="1184" class="elementor elementor-1184">
    <div class="elementor-element elementor-element-9c0d281 e-flex e-con-boxed e-con e-parent e-lazyloaded"
        data-id="9c0d281" data-element_type="container"
        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-3871437 e-con-full e-flex e-con e-child"
                data-id="3871437" data-element_type="container">                
                <div class="elementor-element elementor-element-8765ec4 elementor-widget elementor-widget-heading animated fadeInLeft"
                    data-id="8765ec4" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}"
                    data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">Our Blogs</h2>
                    </div>
                </div>
                <div class="elementor-element elementor-element-18bcc94 e-flex e-con-boxed e-con e-child"
                    data-id="18bcc94" data-element_type="container">
                    <div class="e-con-inner">
                        <div class="elementor-element elementor-element-61ad27f elementor-widget__width-initial elementor-widget-divider--view-line elementor-widget elementor-widget-divider animated fadeInUp"
                            data-id="61ad27f" data-element_type="widget"
                            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                            data-widget_type="divider.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-divider">
                                    <span class="elementor-divider-separator">
                                    </span>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="elementor-element elementor-element-023796d e-flex e-con-boxed e-con e-parent e-lazyloaded" data-id="023796d" data-element_type="container">
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-61a7bf0 e-con-full e-flex e-con e-child" data-id="61a7bf0" data-element_type="container">
            {{-- <div class="elementor-element elementor-element-e33acf4 e-con-full e-flex e-con e-child blogs_feild" data-id="e33acf4" data-element_type="container"> --}}
                <div class="elementor-element elementor-element-c059924 elementor-invisible elementor-widget elementor-widget-image"
                    data-id="c059924" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="image.default">
                    <div class="container mt-4">
                        @if ($blogs->isNotEmpty())                
                            @foreach ($blogs as $blog)  
                            <a href="{{ route('blogs.details', $blog->id) }}" style="text-decoration: none;">                                
                                <div class="card2 card-responsive" style="border: .1rem solid #0003;">
                                    <div class="row g-0">
                                        <!-- Image Section -->
                                        <div class="col-md-4 image-section">                                            
                                            <img class="card-img" src="{{ asset($blog->image) }}" alt="Blog Image">                                            
                                        </div>
                                        <!-- Content Section -->
                                        <div class="col-lg-1"></div>
                                        <div class="col-md-7 content-section">
                                            <div class="card2-body">
                                                <h3 class="card-title">{{ $blog->blog_title }}</h3>
                                                <p class="text-muted">
                                                    <i class="icon icon-calendar"></i> {{ $blog->created_at->format('d M Y h:i A') }}
                                                </p>
                                                <p class="card-text">
                                                    {!! $blog->meta_description !!}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                                                                            
                            </a>                                                                                              
                            @endforeach
                        @endif
                        <!-- Pagination Links -->
                        <div class="d-flex justify-content-center mt-4">
                            {{ $blogs->links() }}
                        </div>
                    </div>
                    
                </div>
            </div>              
            <div class="elementor-element elementor-element-61a7bf0 e-con-full e-flex e-con e-child" data-id="61a7bf0" data-element_type="container">
                    @if ($recent_blogs->isNotEmpty())
                    <div class="elementor-element elementor-element-2051bf3 elementor-invisible elementor-widget elementor-widget-elementskit-heading" data-id="2051bf3" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;}" data-widget_type="elementskit-heading.default">
                        <div class="elementor-widget-container">
                            <div class="ekit-wid-con">
                                <div class="ekit-heading elementskit-section-title-wraper text_left ekit_heading_tablet- ekit_heading_mobile-">
                                    <h4 class="ekit-heading--title" style="border-bottom: 1px solid #888; padding-bottom:10px;">Recent Blogs</h4>                                
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-4dfb54b elementor-widget elementor-widget-text-editor"
                        data-id="4dfb54b" data-element_type="widget" data-widget_type="text-editor.default">
                        <div class="elementor-widget-container card-small-container">                            
                                @foreach ($recent_blogs as $blog)
                                <div class="card-small card-small-responsive shadow-lg border-0" style="background: transparent;">
                                    <div class="row g-0">                    
                                        <!-- Image Section -->
                                        <div class="col-md-4">
                                            <a href="{{route('blogs.details', $blog->id)}}">
                                                <img style="width:70px;" class="card-img" src="{{asset($blog->image)}}" class="img-fluid rounded-end" alt="Blog Image">
                                            </a>
                                        </div>              
                                        <div class="col-lg-1"></div>                                  
                                        <!-- Content Section -->
                                        <div class="col-md-7">
                                            <div class="card-small-body">
                                                <h6 class="card-title">{{$blog->blog_title}}</h6>
                                                <p class="text-muted">
                                                    <i class="bi bi-calendar"></i> {{$blog->created_at->format('d M Y')}}
                                                    {{-- <i class="bi bi-chat"></i> 0 --}}
                                                </p>
                                            </div>
                                        </div>                                        
                                    </div>
                                </div>
                                @endforeach                                                       
                        </div>
                    </div> 
                    @endif               
            </div>                    
                
                    
                
        </div>
    </div>    
    {{-- <div class="elementor-element elementor-element-ef1ac9a e-flex e-con-boxed elementor-invisible e-con e-parent" style="margin-bottom: 5px;"
        data-id="ef1ac9a" data-element_type="container"
        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInLeft&quot;,&quot;animation_mobile&quot;:&quot;fadeInUp&quot;}">
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-61c9462 e-con-full e-flex e-con e-child"
                data-id="61c9462" data-element_type="container">
                <div class="elementor-element elementor-element-a7145b6 elementor-widget elementor-widget-heading"
                    data-id="a7145b6" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h3 class="elementor-heading-title elementor-size-default">Our Vision</h3>
                    </div>
                </div>
                <div class="elementor-element elementor-element-baaa77e elementor-widget elementor-widget-text-editor"
                    data-id="baaa77e" data-element_type="widget" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        <p>The {{env('COLLEGE_NAME')}}'s main objective is to maintain its standing as a supreme point of academic achievement known for its dedication to providing top-notch technical education. Beyond only teaching, our goal is to develop a culture of self-motivation and nurture the potential of future technocrats. By adopting modern educational methods and a demanding curriculum, we aim to provide our students with the skills, values, and information needed to succeed in their chosen areas.</p>
                    </div>
                </div>
            </div>            
        </div>
    </div>     --}}
</div>
@endsection