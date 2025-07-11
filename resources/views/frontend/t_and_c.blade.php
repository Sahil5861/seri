@extends('frontend.layout')
@section('title', 'Terms & conditions   ')

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
    <section class="banner banner-dark" style="background: url('../images/terms_conditions.jpg') no-repeat center center / cover;">
        <div class="banner-content">
            <h1 style="">Terms & Conditions</h1>            
            {{-- <h4>Commitment to Privacy at {{env('COLLEGE_NAME_MID')}} Institute of Management and Technology (SIMT)</h4> --}}
            <p style="color:#fff;"><i>The Foundation of Our Agreement: Ensuring a Transparent Educational Journey</i></p>
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
                    <h2>Fee Payment Structure for B.Tech Programs at {{env('COLLEGE_NAME_MID')}} Engineering and Research Institute- SERI</h2>
                    <p>Welcome to the official Terms and Conditions governing the use of services provided by {{env('COLLEGE_NAME_MID')}} Engineering and Research Institute- SERI. These terms outline the rights and obligations between the institute and its students, applicants, and website users, with a primary focus on the fee payment structure for B.Tech programs. By accessing our website https://seri.net.in/, applying for admission, or utilizing any of our services, you agree to be bound by these Terms and Conditions.</p>
                </div>
                                                                  
                <div class="content">
                    <h4>Table of Contents</h4>
                    <ul>
                        <li style="list-style:decimal;"><a href="#introduction_and_acceptance_of_terms">Introduction and Acceptance of Terms</a></li>
                        <li style="list-style:decimal;"><a href="#btech_program_fee_structure">B.Tech Program Fee Structure</a></li>
                        <li style="list-style:decimal;"><a href="#admission_fee_payment_process">Admission Fee Payment Process</a></li>
                        <li style="list-style:decimal;"><a href="#refund_policy_for_btech_admissions">Refund Policy for B.Tech Admissions</a></li>
                        <li style="list-style:decimal;"><a href="#eligibility_and_admission_process">Eligibility and Admission Process</a></li>
                        <li style="list-style:decimal;"><a href="#user_obligations_and_conduct">User Obligations and Conduct</a></li>
                        <li style="list-style:decimal;"><a href="#general_legal_provisions">General Legal Provisions (Intellectual Property, Disclaimers, Liability)</a></li>
                        <li style="list-style:decimal;"><a href="#contact_information">Contact Information</a></li>
                    </ul>
                </div>



                <div class="content" id="introduction_and_acceptance_of_terms">
                    <h4>1. Introduction and Acceptance of Terms</h4>
                    <p>This document constitutes an electronic record in accordance with the Information Technology Act, 2000, and its applicable rules, governing the use of the domain name <a href="https://seri.net.in/">https://seri.net.in/</a> (hereinafter referred to as 'Website' or 'Platform'). The Platform is owned by {{env('COLLEGE_NAME_MID')}} Engineering and Research Institute (SERI). Your use of the Platform and its services, particularly concerning admission and fee payments, is governed by these Terms and Conditions ("Terms of Use"), including applicable policies incorporated herein by reference. By mere access or use of the Platform, you shall be subject to these policies. These terms are crucial for understanding the financial commitments and processes related to B.Tech admissions at SERI.</p>                    
                </div>

                <hr>

                <div class="content" id="btech_program_fee_structure">
                    <h4>2. B.Tech Program Fee Structure</h4>
                    <p>The general annual fee for B.Tech programs at {{env('COLLEGE_NAME_MID')}} Engineering and Research Institute (SERI) is <strong>INR 1.25 Lakhs per annum<sup>*</sup></strong>.</p>
                    <p><strong><sup>*</sup>Important Note on Fee Structure:</strong> The fee of INR 1.25 Lakhs per annum is an indicative figure and represents the general academic tuition fee. This amount typically excludes other potential charges such as examination fees, hostel accommodation fees, transportation costs, security deposits (caution money), development fees, or other miscellaneous expenses. The comprehensive and precise breakdown of all applicable fees and charges will be officially communicated to applicants at the time of admission or through the official admission brochure for the respective academic year. Fees are subject to review and revision as per the Institute's financial policies and directives from regulatory bodies like AICTE.</p>
                                     
                </div> 

                <hr>

                <div class="content" id="admission_fee_payment_process">
                    <h4>3. Admission Fee Payment Process</h4>
                    <p>The process for fee payment for B.Tech admissions at SERI is detailed as follows:</p>

                    <ul>
                        <li><strong>Initial Counselling Allotment Fees (Category-I):</strong>Candidates who are allotted a seat at {{env('COLLEGE_NAME_MID')}} Engineering and Research Institute through official counselling bodies are required to pay an initial fee directly to the counselling authority. This payment secures the provisional allotment</li>
                        <li>
                            <strong>●	Balance Fee Payment (Category-I & II):</strong>
                            <ul>
                                <li>For Category-I candidates, the remaining balance of the annual fee (after deducting the amount paid to the counselling body) must be paid directly to {{env('COLLEGE_NAME_MID')}} Engineering and Research Institute during the mandatory physical reporting at the campus.</li>
                                <li>For Category-II candidates (Management Quota / Vacant Seats), the full annual fee (INR 1.25 Lakhs*, along with any other applicable charges) must be paid directly to the Institute as confirmed by the Institute Admission Cell.</li>
                            </ul>
                        </li>
                        <li><strong>Mandatory Physical Reporting:</strong> For both categories, physical reporting at the Institute campus within the stipulated time limit and schedule is mandatory to complete the admission process and deposit the requisite fees. Failure to report in person or to complete all necessary fee deposit steps within the given timeline will result in the cancellation of the admission allotment without any extension.</li>
                        <li><strong>Payment Methods:</strong> The Institute will provide specific instructions on accepted payment methods (e.g., online payment portals, bank transfers, demand drafts) for the remaining fee balance.</li>
                    </ul>
                </div> 
                <hr>

                <div class="content" id="refund_policy_for_btech_admissions">
                    <h4>4. Refund Policy for B.Tech Admissions</h4>
                    <p>{{env('COLLEGE_NAME_MID')}} Engineering and Research Institute maintains its refund policies in accordance with applicable regulatory guidelines and institutional discretion.</p>

                    <ul>
                        <li><strong>General Refund Guidelines:</strong> Any refund requests for B.Tech admissions will be processed strictly in accordance with the prevailing norms and timelines set by regulatory bodies such as AICTE, and the specific policies of {{env('COLLEGE_NAME_MID')}} Engineering and Research Institute.</li>
                        <li><strong>Application and Cancellation:</strong> The Institute reserves the right to define the terms and conditions for fee refunds, including any deductions for administrative charges or registration fees, which may apply based on the date of application or cancellation.</li>
                        <li><strong>Official Communication:</strong> Detailed information regarding refund eligibility, applicable deductions, and processing timelines will be clearly communicated by the Institute at the time of admission or through official notices. Applicants are advised to review these specific policies thoroughly before making any fee payments.</li>
                    </ul>
                </div>
                <hr>

                <div class="content" id="eligibility_and_admission_process">
                    <h4>5. Eligibility and Admission Process</h4>
                    <p>Admission to B.Tech programs at {{env('COLLEGE_NAME_MID')}} Engineering and Research Institute (SERI) is primarily based on candidates' performance in national/state-level entrance examinations and academic qualifications.</p>
                    <ul>
                        <li><strong>Eligibility Criteria:</strong> Candidates must have passed Class 12 from UP Board/CBSE or any other equivalent recognized board with Physics, Chemistry, and Mathematics as compulsory subjects. Admission requires candidates to meet the minimum qualifying academic standards set by the Institute and relevant regulatory bodies</li>
                        <li>
                            <strong>Admission Pathways:</strong> Admission is granted through:
                            <ul>
                                <li>Counselling processes based on competitive examination ranks such as JEE Mains or CUET.</li>
                                <li>Management Quota / Vacant Seats, as per the Institute's discretion and availability.</li>
                            </ul>
                        </li>
                        <li><strong>Post-Allotment Process:</strong> Upon provisional allotment of a seat (either through counselling or management quota), candidates are required to complete a mandatory physical reporting process at the SERI campus. This includes verification of original documents and payment of the balance fees as outlined in Section 3. Failure to comply with these steps within the specified schedule will lead to the cancellation of admission without any extension.</li>
                    </ul>
                </div>

                <hr>

                <div class="content" id="user_obligations_and_conduct">
                    <h4>6. User Obligations and Conduct</h4>
                    <p>Users of the Platform and applicants/students of the Institute agree to:</p>
                    <ul>
                        <li>Provide accurate, current, and complete personal and academic information during all interactions with the Institute.</li>
                        <li>Adhere to all applicable laws, regulations, and the Institute's policies and code of conduct.</li>
                        <li>Respect the intellectual property rights of the Institute and third parties.</li>
                        <li>Refrain from any activity that could disrupt the Platform's operations or compromise its security.</li>
                        <li>Ensure timely payment of all fees and charges as per the Institute's financial schedule.</li>
                    </ul>
                </div>

                <hr>

                <div class="content" id="general_legal_provisions">
                    <h4>7. General Legal Provisions</h4>
                    <ul>
                        <li><strong>Intellectual Property Rights:</strong> All content on the Platform, including text, graphics, logos, images, and software, is the proprietary property of {{env('COLLEGE_NAME_MID')}} Engineering and Research Institute-SERI or its content suppliers and is protected by applicable intellectual property laws.</li>
                        <li><strong>Disclaimer of Warranties:</strong> The Platform and its services are provided on an "as is" and "as available" basis. SERI makes no warranties, express or implied, regarding the operation of the Platform or the accuracy of information, except for the terms explicitly stated herein regarding fees and admissions.</li>
                        <li><strong>Limitation of Liability:</strong> SERI shall not be liable for any direct, indirect, incidental, punitive, special, or consequential damages arising from the use of, or inability to use, the Platform or its services, or any financial losses incurred due to non-adherence to fee payment schedules or refund policies.</li>
                        <li><strong>Indemnification:</strong> You agree to indemnify and hold {{env('COLLEGE_NAME_MID')}} Engineering and Research Institute-SERI, its affiliates, officers, directors, employees, and agents harmless from any claims, demands, losses, liabilities, costs, and expenses (including legal fees) arising from your use of the Platform or your breach of these Terms.</li>
                        <li><strong>Governing Law and Jurisdiction:</strong> These Terms and Conditions shall be governed by and construed in accordance with the laws of India. Any disputes arising hereunder shall be exclusively resolved by the courts located in Uttar Pradesh, India</li>
                        <li><strong>Amendments to Terms:</strong> SERI reserves the right to modify these Terms and Conditions, especially those pertaining to fee structures and refund policies, at any time. Any changes will be posted on this page, and your continued use of the Platform or services after such modifications will constitute your acceptance of the updated terms.</li>
                    </ul>
                </div>

                <div class="content" id="contact_information">
                    <h4>8. Contact Information</h4>
                    <p>For any questions or clarifications regarding these Terms and Conditions, particularly concerning fee payments and admissions, please contact us:</p>
                    <strong>(SERI)</strong>
                    <ul>
                        <li><strong>Campus Address:</strong> Plot No. 14, Knowledge Park-III, Greater Noida, 201306, Uttar Pradesh, India</li>
                        <li><strong>Phone:</strong>  <a href="tel:919560990539">+91-9560-990-539</a> | <a href="tel:919560550691">+91-9560-550-691</a> | <a href="tel:919560339605">+91-9560-339-605</a></li>
                        <li><strong>Email for Admissions:</strong> <a href="mailto:admissions@sitasrm.ac.in">admissions@sitasrm.ac.in</a></li>
                        <li><strong>General Email:</strong> <a href="mailto:info@seri.net.in">info@seri.net.in</a></li>
                        <li><strong>Website:</strong> <a target="__blank" href="https://seri.net.in">seri.net.in</a></li>
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