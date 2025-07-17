@extends('frontend.layout')
@section('title', 'Fee structure   ')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

<link rel="stylesheet" href="{{asset('css/tabs_container.css')}}">
<link rel="stylesheet" href="{{asset('css/test-form.css')}}">

<style>    
    .main h3, .main h1{
        font-family: yale, TimesNewRoman, Times New Roman, Times, Baskerville, Georgia, serif;
        font-weight: bold;
    }

    .content{
        scroll-margin-top: 150px;
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
    <section class="banner banner-dark" style="background: url('../images/fees.avif') no-repeat center center / cover;">
        <div class="banner-content">
            <h1 style="">SERI Fee Structure</h1>                        
            <p style="color:#fff;"><i>Empowering Your Education: Financial Clarity.</i></p>
        </div>
    </section>
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
                <div class="content"> 
                    <h1>{{env('COLLEGE_NAME')}} Engineering and Research Institute (SERI) - Fees</h1>
                    <h4>B.Tech Program Fee Structure</h4>
                    <p>The general annual fee for B.Tech programs at {{env('COLLEGE_NAME_MID')}} Engineering and Research Institute (SERI) is INR 1.25 Lakhs per annum*.</p>
                    <p><strong><sup>*</sup>Important Note on Fee Structure:</strong> The fee of INR 1.25 Lakhs per annum is an indicative figure and represents the general academic tuition fee. This amount typically excludes other potential charges such as examination fees, hostel accommodation fees, transportation costs, security deposits (caution money), development fees, or other miscellaneous expenses. The comprehensive and precise breakdown of all applicable fees and charges will be officially communicated to applicants at the time of admission or through the official admission brochure for the respective academic year. Fees are subject to review and revision as per the Institute's financial policies and directives from regulatory bodies like AICTE.</p>
                </div>
                                                                                
                <div class="content" id="fee_structure_for_academic_programs">
                    <h4>Admission Fee Payment Process</h4>
                    <p>The process for fee payment for B.Tech admissions at SERI is detailed as follows:</p>
                    <ul>
                        <li><strong>Initial Counselling Allotment Fees (Category-I):</strong> Candidates who are allotted a seat at {{env('COLLEGE_NAME_MID')}} Engineering and Research Institute through official counselling bodies are required to pay an initial fee directly to the counselling authority. This payment secures the provisional allotment.</li>
                        <li>
                            <strong>Balance Fee Payment (Category-I & II):</strong>
                            <ul>
                                <li>For Category-I candidates, the remaining balance of the annual fee (after deducting the amount paid to the counselling body) must be paid directly to {{env('COLLEGE_NAME_MID')}} Engineering and Research Institute during the mandatory physical reporting at the campus.</li>
                                <li>For Category-II candidates (Management Quota / Vacant Seats), the full annual fee (INR 1.25 Lakhs*, along with any other applicable charges) must be paid directly to the Institute as confirmed by the Institute Admission Cell.</li>
                            </ul>
                        </li>
                        <li><strong>Mandatory Physical Reporting:</strong> For both categories, physical reporting at the Institute campus within the stipulated time limit and schedule is mandatory to complete the admission process and deposit the requisite fees. Failure to report in person or to complete all necessary fee deposit steps within the given timeline will result in the cancellation of the admission allotment without any extension.</li>
                        <li><strong>Payment Methods:</strong> The Institute will provide specific instructions on accepted payment methods (e.g., online payment portals, bank transfers, demand drafts) for the remaining fee balance.</li>
                    </ul>                    
                </div>
                

                <div class="content" id="eligibility_criteria">
                    <h4>For More Information:</h4>
                    <p>Please do not hesitate to contact us, we are here at you assistance:</p>
                    <ul>
                        <li><p><strong>Phone:</strong> <a href="tel:+919560201536">+91-9560-201-536</a> | <a href="tel:+919560339929">+91-9560-339-929</a>, (General Inquiries: Monday - Friday, 9:00 - 18:00 IST) </p></li>
                        <li><p><strong>Email:</strong> <a href="mailto:info@seri.net.in">info@seri.net.in</a> (For admission-related inquiries, please contact <a href="mailto:admissions@sitasrm.ac.in">admissions@sitasrm.ac.in</a> )  </p></li>
                        <li><p><strong>Mailing Address:</strong> Plot No. 14, Knowledge Park-III, Greater Noida, 201306, Uttar Pradesh, India</p></li>                        
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