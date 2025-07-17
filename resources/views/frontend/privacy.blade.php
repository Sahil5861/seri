@extends('frontend.layout')
@section('title', 'Privacy Policy   ')

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

        .banner-content{
            min-width: 1000px !important;
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
    <section class="banner banner-dark" style="background: url('../images/privacy-policy.jpg') no-repeat center center / cover;">
        <div class="banner-content">
            <h1 style="">Privacy Policy for {{env('COLLEGE_NAME')}}  (SERI)</h1>                        
            {{-- <p style="color:#fff;"><i>We appreciate your cooperation in adhering to these guidelines.</i></p> --}}
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
                    <h4>Commitment to Privacy at {{env('COLLEGE_NAME')}}</h4>
                    <p>At {{env('COLLEGE_NAME')}}, we are profoundly committed to upholding the privacy and security of your personal information. This Privacy Policy delineates the methodologies through which we collect, utilize, disclose, and safeguard your data during your interactions with our website, services, and academic programs.</p>
                    <p>We strongly encourage you to review this policy comprehensively to understand our institutional practices concerning your personal data.</p>
                </div>
                      
                <div class="content"> 
                    <h4>Our Foundation: R D EDUCATIONAL INSTITUTES PRIVATE LIMITED</h4>                   
                    <p>{{env('COLLEGE_NAME')}} operates under the esteemed patronage and guiding principles of <strong>R D EDUCATIONAL INSTITUTES PRIVATE LIMITED.</strong> This trust is dedicated to fostering excellence in education and research, aligning with our vision to empower future generations through knowledge and innovation. Our commitment to privacy is deeply rooted in the values upheld by the trust, ensuring a secure and transparent environment for all our stakeholders.</p>
                </div>
            
                <div class="content">
                    <h4>Key Provisions:</h4>
                    <ul>
                        <li><strong>Information Collection:</strong> Understanding the categories of personal data we acquire.</li>
                        <li><strong>Data Utilization:</strong> Clarification of the purposes for which your data is employed.</li>
                        <li><strong>Information Disclosure:</strong> Explanation of when and with whom your data may be shared</li>
                        <li><strong>Your Rights and Choices:</strong> Elucidation of your prerogatives concerning your personal data.</li>
                        <li><strong>Contact Information:</strong> Guidance on reaching our designated Privacy Officer for inquiries.</li>
                    </ul>
                </div>

                <div class="content">
                    <h4>Table of Contents</h4>
                    <ul>
                        <li style="list-style:decimal;"><a href="#introduction  ">Introduction</a></li>
                        <li style="list-style:decimal;"><a href="#information_collection  ">Information Collection</a></li>
                        <li style="list-style:decimal;"><a href="#utilization_of_information  ">Utilization of Information</a></li>
                        <li style="list-style:decimal;"><a href="#disclosure_of_information  ">Disclosure of Information</a></li>
                        <li style="list-style:decimal;"><a href="#cookies_and_tracking_technologies  ">Cookies and Tracking Technologies</a></li>
                        <li style="list-style:decimal;"><a href="#your_data_protection_rights_and_choices  ">Your Data Protection Rights and Choices</a></li>
                        <li style="list-style:decimal;"><a href="#data_security_measures  ">Data Security Measures</a></li>
                        <li style="list-style:decimal;"><a href="#data_retention_principles  ">Data Retention Principles</a></li>
                        <li style="list-style:decimal;"><a href="#external_website_links  ">External Website Links</a></li>
                        <li style="list-style:decimal;"><a href="#privacy_concerning_minors  ">Privacy Concerning Minors</a></li>
                        <li style="list-style:decimal;"><a href="#international_data_transfer_policy  ">International Data Transfer Policy</a></li>
                        <li style="list-style:decimal;"><a href="#amendments_to_this_privacy_policy  ">Amendments to This Privacy Policy</a></li>
                        <li style="list-style:decimal;"><a href="#grievance_redressal_officer  ">Grievance Redressal Officer</a></li>
                        <li style="list-style:decimal;"><a href="#contact_information">Contact Information</a></li>
                    </ul>
                </div>

                <div class="content" id="introduction">
                    <h4>1. Introduction</h4>
                    <p>This Privacy Policy describes how {{env('COLLEGE_NAME')}} and its affiliated entities (collectively "the Institution," "we," "our," "us"), operating <a href="seri.net.in">seri.net.in</a> (hereinafter referred to as "the Platform"), under the trust of <strong>R D EDUCATIONAL INSTITUTES PRIVATE LIMITED</strong>, collect, utilize, share, protect, and otherwise process your information/personal data through our website <a href="https://www.seri.net.in">https://www.seri.net.in</a>. It is important to note that certain sections of the Platform may be accessed without formal registration. Our current scope of services is confined to India, and consequently, your personal data will primarily be stored and processed within India.</p>
                    <p>By accessing this Platform, furnishing your information, or availing any product/service offered herein, you unequivocally agree to be bound by the stipulations of this Privacy Policy, the Terms of Use, and all applicable service/product terms and conditions. Furthermore, you consent to be governed by the laws of India, including but not limited to the statutes pertaining to data protection and privacy. Should you not concur with these terms, we respectfully request that you refrain from using or accessing our Platform.</p>
                    <p>This Privacy Policy is effective as of May 30, 2025.</p>
                </div>

                <div class="content" id="information_collection">
                    <h4>2. Information Collection</h4>
                    <p>We collect personal data from you when you engage with our Platform, utilize our services, or otherwise interact with us within the framework of our established relationship. This includes information provided directly by you as well as data collected automatically.</p>
                    <ul>
                        <li style="list-style:disc;">
                            <strong>Information Provided Directly by You:</strong>
                            <ul>
                                <li><strong>Contact Information:</strong> This encompasses your name, date of birth, postal address, telephone/mobile number, email address, and any other identifying information submitted for verification of identity or address</li>
                                <li><strong>Academic and Application Information:</strong> Information related to your academic qualifications (e.g., Class 12 marks for eligibility ), entrance exam ranks (e.g., AKTU Counselling, JEE Mains, CUET ), and details provided during the admission process for various programs (e.g., B.Tech ).</li>
                                <li><strong>Sensitive Personal Data:</strong> With your explicit consent, we may collect sensitive personal data such as bank account details, credit/debit card information, other payment instrument particulars, or biometric data (e.g., facial features or physiological information) to facilitate specific opted-for features on the Platform. All such collections adhere strictly to applicable legal frameworks. You retain the prerogative to withhold such information by electing not to utilize the corresponding service or feature on the Platform.</li>
                                <li><strong>Transactional Information:</strong> Data pertaining to your transactions conducted on the Platform, such as fees paid for admissions or other services.</li>
                            </ul>

                        </li>
                        <li>
                            <strong>Information Collected Automatically:</strong>
                            <ul>
                                <li>We may monitor your behavior patterns, preferences, and other data you choose to provide on our Platform. This information is subsequently aggregated and analyzed.</li>
                                <li>Automatically collected data may include usage metrics (e.g., pages visited, duration of visit, click-through rates), technical data (e.g., IP address, browser type, operating system, device identifier), and general geographic location data.</li>
                            </ul>
                        </li>
                        <li>
                            <strong>Information from Other Sources: </strong>We may obtain information from publicly accessible databases or third-party service providers, as deemed necessary and permissible.
                        </li>
                    </ul>
                    <p><strong>Note on Third-Party Business Partners:</strong> When personal data is collected directly by a third-party business partner, their respective privacy policies shall govern such collection and use. We disclaim responsibility for the privacy practices of third-party business partners or the content of their privacy policies and strongly advise you to review their policies prior to disclosing any information.</p>
                    <p><strong>Security Alert:</strong> Should you receive any communication, whether via email or telephone, from an individual or entity purporting to represent the Institution and soliciting sensitive personal data such as debit/credit card PINs, net-banking credentials, or mobile banking passwords, you are advised to never disclose such </p>
                    <p><strong>information:</strong> Any such solicitations should be immediately reported to the appropriate law enforcement agency.</p>
                </div> 

                <div class="content" id="utilization_of_information">
                    <h4>3. Utilization of Information</h4>
                    <p>We utilize the personal data collected to deliver the services you request and to enhance your overall experience with the Institution. Specifically, your personal data serves the following purposes:</p>

                    <ul>
                        <li>To facilitate the processing and fulfillment of applications and academic services, thereby improving the overall student and applicant experience.</li>
                        <li>To address and resolve disputes efficiently.</li>
                        <li>To diagnose and rectify technical issues.</li>
                        <li>To inform you about pertinent academic programs, offers, services, and updates.</li>
                        <li>To personalize your engagement with the Platform and academic resources.</li>
                        <li>To detect, prevent, mitigate, and investigate fraudulent or illicit activities associated with our services.</li>
                        <li>To enforce our established terms and conditions, including admission and refund policies.</li>
                        <li>To conduct market research, analytical studies, and surveys.</li>
                        <li>For any other purpose explicitly communicated to you at the time of data collection.</li>
                        <li>In instances where your data is used for marketing purposes, we will provide clear mechanisms for you to opt-out of such communications.</li>
                    </ul>
                    <p>Kindly acknowledge that your access to certain products or services may be contingent upon the provision of necessary permissions to the Institution.</p>
                </div> 

                <div class="content" id="disclosure_of_information">
                    <h4>4. Disclosure of Information</h4>
                    <p>We may share your personal data under the following circumstances:</p>

                    <ul>
                        <li><strong>Internal Disclosure:</strong> With our group entities, corporate affiliates, and associated entities to ensure your access to the services and products they offer. Such sharing may facilitate communication efforts by these entities, from which you may explicitly opt-out.</li>
                        <li><strong>Third-Party Service Providers and Partners:</strong> With various third parties, including academic partners, examination bodies (e.g., AKTU, AICTE ), logistics partners, prepaid payment instrument issuers, and other payment service providers selected by you. These disclosures are essential for us to deliver our academic services and products, comply with legal obligations, enforce our user agreements, facilitate our outreach and institutional activities, and safeguard against fraudulent or illegal activities.</li>
                        <li><strong>Government Agencies and Law Enforcement:</strong> We may disclose personal and sensitive personal data to government agencies or authorized law enforcement bodies when legally mandated, in response to subpoenas, court orders, or other legal processes, or when such disclosure is deemed reasonably necessary to uphold our Terms of Use or Privacy Policy, address claims of third-party rights infringements by content, or protect the rights, property, or safety of our users or the general public.</li>
                    </ul>
                </div>

                <div class="content" id="cookies_and_tracking_technologies">
                    <h4>5. Cookies and Tracking Technologies</h4>
                    <p>The Platform employs cookies and similar tracking technologies to optimize your user experience. Cookies are small data files stored on your device that enable us to:</p>

                    <ul>
                        <li><strong>Analyze Platform Usage:</strong> Understand how you interact with our Platform, including pages visited, time spent, and navigation patterns.</li>
                        <li><strong>Personalize Experience:</strong> Retain your preferences and settings for future visits.</li>
                        <li><strong>Enhance Services:</strong> Collect analytical data to continuously improve our Platform's functionality and offerings.</li>
                        <li><strong>Institutional Outreach and Analytics:</strong> (If applicable) Gather data for institutional planning and to deliver relevant information.</li>
                    </ul>
                    <p>You possess the ability to manage your cookie preferences through your web browser settings. Please be advised that disabling certain cookies may impact the full functionality of the Platform.</p>
                </div>

                <div class="content" id="your_data_protection_rights_and_choices">
                    <h4>6. Your Data Protection Rights and Choices</h4>
                    <p>The Institution respects your rights regarding your personal data:</p>

                    <ul>
                        <li><strong>Access, Rectification, and Update:</strong> You may access, rectify, and update your personal data directly through the functionalities provided on the Platform, where available, or by contacting the Institution.</li>
                        <li><strong>Withdrawal of Consent:</strong> You have the option to withdraw any previously granted consent by submitting a written request to the Grievance Officer, using the contact information provided below. Please title your communication "Withdrawal of consent for processing personal data." We may verify such requests prior to processing. Kindly note that the withdrawal of consent will apply prospectively and will be executed in accordance with the Terms of Use, this Privacy Policy, and applicable laws. In the event of such withdrawal, we reserve the right to restrict or deny the provision of our services for which the withdrawn information is deemed essential.</li>
                        <li><strong>Account Deletion:</strong> You may initiate the deletion of your account by accessing your profile and settings on our Platform, where available. This action will result in the loss of all associated account information. Alternatively, you may contact us using the information provided below for assistance with such requests. Please be aware that account deletion may be refused or delayed in the presence of pending grievances, claims, outstanding academic obligations, or other active services. Upon successful deletion, access to your account will be permanently revoked.</li>   
                    </ul>
                    <p>You possess the ability to manage your cookie preferences through your web browser settings. Please be advised that disabling certain cookies may impact the full functionality of the Platform.</p>
                </div>

                <div class="content" id="data_security_measures">
                    <h4>7. Data Security Measures</h4>
                    <p>To safeguard your personal data against unauthorized access, disclosure, loss, or misuse, we implement robust and reasonable security practices and procedures. Once your information is within our custody or when you access your account information, we adhere to stringent security guidelines to protect it from unauthorized access and facilitate the use of a secure server.</p>
                    <p>Notwithstanding these measures, the transmission of information over the internet is inherently not entirely secure due to factors beyond our control. By utilizing the Platform, users acknowledge the security implications of data transmission via the internet and the World Wide Web which cannot always be guaranteed as completely secure. Consequently, certain inherent risks pertaining to the use of the Platform will always persist. Users bear the responsibility for ensuring the protection of their login and password credentials for their respective accounts.</p>                   
                </div>

                <div class="content" id="data_retention_principles">
                    <h4>8. Data Retention Principles</h4>
                    <p>We retain your personal data for a period no longer than is necessary to fulfill the purpose for which it was collected or as mandated by applicable law. However, we may extend data retention if deemed necessary to prevent fraud, mitigate future abuse, or serve other legitimate purposes, such as maintaining academic records. Data may also be retained in an anonymized form for analytical and research endeavors.</p>
                </div>

                <div class="content" id="external_website_links">
                    <h4>9. External Website Links</h4>
                    <p>Our Platform may incorporate links to third-party websites not operated by the Institution. Upon accessing these links, your engagement will be governed by the terms of use, privacy policy, and other relevant policies of those third-party websites. These links are provided solely for your convenience and to offer additional information. We exert no control over, and assume no responsibility for, the content, privacy policies, or practices of any third-party websites or services.</p>
                </div>
                <div class="content" id="privacy_concerning_minors">
                    <h4>10. Privacy Concerning Minors</h4>
                    <p>The Platform is not intended for use by individuals under the age of 13. We do not knowingly collect personal data from children under 13. Should we become aware that personal data has been collected from a child under 13 without verifiable parental consent, we will undertake immediate steps to remove such information from our servers. If you believe we may possess any information from or about a child under 13, please contact us without delay.</p>
                </div>


                <div class="content" id="international_data_transfer_policy">
                    <h4>11. International Data Transfer Policy</h4>
                    <p>As previously stated, the Institution does not offer any product or service through this Platform outside the geographical boundaries of India. Consequently, your personal data will primarily be stored and processed within India, rendering international data transfer mechanisms inapplicable under this current operational model.</p>
                </div>


                <div class="content" id="amendments_to_this_privacy_policy">
                    <h4>12. Amendments to This Privacy Policy</h4>
                    <p>We reserve the right to update this <strong>Privacy Policy</strong> periodically to reflect changes in our information practices. We encourage you to review our <strong>Privacy Policy</strong> regularly for any modifications. Significant amendments will be communicated to you as required under applicable laws.</p>
                </div>

                <div class="content" id="grievance_redressal_officer">
                    <h4>13. Grievance Redressal Officer</h4>
                    <p>For any concerns, inquiries, or communications pertaining to this <strong>Privacy Policy</strong> or its terms, please direct your correspondence to our designated <strong>Grievance Officer</strong> using the contact information provided below.</p>
                    <p><strong>Contact:</strong> <a href="tel:01204100585">0120-4100585</a> | <a href="tel:01204101556">0120-4101556</a></p>
                    <p><strong>Name and Address of the Institution:</strong> Plot No. 14, Knowledge Park-III, Greater Noida, 201306, Uttar Pradesh, India</p>
                </div>

                <div class="content" id="contact_information">
                    <h4>14. Contact Information</h4>
                    <p>Should you have any questions regarding this <strong>Privacy Policy</strong>, please do not hesitate to contact us:</p>
                    <p><strong>Phone:</strong> <a href="tel:+919560201536">+91-9560-201-536</a> | <a href="tel:+919560339929">+91-9560-339-929</a> 
                    (General Inquiries: Monday - Friday, 9:00 - 18:00 IST)</p>
                    <p><strong>Email:</strong> <a href="mailto:info@seri.net.in">info@seri.net.in</a> 
                    (For admission-related inquiries, please contact 
                    <a href="mailto:admissions@sitasrm.ac.in">admissions@sitasrm.ac.in</a>)</p>
                    <p><strong>Mailing Address:</strong> Plot No. 14, Knowledge Park-III, Greater Noida, 201306, Uttar Pradesh, India</p>
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