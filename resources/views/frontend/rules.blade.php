@extends('frontend.layout')
@section('title', 'Rules and Regulations')

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
<div data-elementor-type="wp-post" data-elementor-id="436" class="elementor elementor-436 elementor-304">
    {{-- here it is --}}      
    <section class="banner" style="background: url('../images/rules_banenr.jpg') no-repeat center center / cover;">
        <div class="banner-content">
            <h1 style="">Student Guidelines: Rules and Regulations</h1>            
            <h4>To ensure a productive and respectful learning environment, we have established the following rules and regulations for students.</h4>
            <p style="color:#fff;"><i>We appreciate your cooperation in adhering to these guidelines.</i></p>
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
                    <h4>A. College Timings and Transportation</h4>                   
                    {{-- <li>Our academic day runs from 9:40 a.m. to 4:40 p.m.</li>
                    <li>To minimize disruptions, students are expected to arrive by 9:40 a.m. and are not permitted to leave before 4:40 p.m.</li> --}}
                    <li>For convenient commuting, we provide bus service with various boarding points.</li>
                    <li>All buses depart from campus at 4:55 p.m.</li>                    
                </div>
                      
                <div class="content"> 
                    <h4>B. Dress Code</h4>                   
                    <b>We expect all students to maintain a neat and professional appearance while on campus.</b>
                    <li><strong>Boys:</strong> Formal pants and tucked-in shirts are required, along with formal shoes. Sports shoes and slippers are not allowed.</li>
                    <li><strong>Girls:</strong> Salwar suits are the expected attire</li>
                    <li>In case the students are wearing expensive gold ornaments, the institution will not be liable for any loss.</li>
                    <li><strong>Lab/Workshop Dress Code:</strong> For Physics, Chemistry, Computer, and Electronics Laboratories, both boys and girls must wear a white overcoat and shoes as prescribed.</li>                    
                </div>
            
                <div class="content">
                    <h4>C. Academic Activity and Support</h4>
                    <li>Students must wear their Identity Cards at all times while on campus</li>
                    <li>Every student is assigned a faculty co-ordinator who provides guidance on academic and other related matters. Students are encouraged to approach their faculty co-ordinator for assistance.</li>
                    <li>We conduct two internal assessments per semester, and results are shared with parents via SMS and WhatsApp</li>
                    <li>Parents are encouraged to actively monitor their child's academic progress and communicate with the student’s counselor.  </li>
                    <li>Special coaching classes are regularly held for students who need additional academic support.  </li>
                    <li>Regular attendance in theory and laboratory classes is mandatory, following AKTU norms.  </li>
                    <li>Students must obtain prior permission for any leave of absence. Parents will be notified of absences via SMS and WhatsApp.  </li>
                    <li>All leave requests, medical certificates, and permissions for academic and hostel-related matters should be addressed to the HOD/Director</li>
                    <li>Requests for bonafide certificates, expenditure certificates, Government scholarship forms, and book bank applications should be addressed to the Director.  </li>
                </div>

                <div class="content">
                    <h4>D. Leaves Regulations</h4>
                    <p>Please take note of the following leave regulations:  </p>

                    <strong>One day Leave:</strong>
                    <ul>
                        <li style="list-style: square">A leave letter, signed by the student and parents (for day scholars) or warden (for hostellers), must be submitted the previous day</li>
                        <li style="list-style: square">OR, in case of unavoidable circumstances, a leave letter signed by the parents can be submitted on the same day. </li>
                    </ul>

                    <strong>Leave for four days or more:</strong>
                    <ul>
                       <li style="list-style: square;">The leave letter, with the parent’s signature, must be submitted the previous day.</li>
                       <li style="list-style: square;">An additional leave letter should be submitted on the first day of leave through a parent/guardian.</li>
                       <li style="list-style: square;">Parents may also call the office to inform the respective HOD about their ward’s leave. </li>
                       <li style="list-style: square;">For family functions or medical reasons, parents should meet the respective attendance in-charge in person to request leave.</li>
                    </ul>
                </div>

                <div class="content">
                    <h4>E. Attendance Requirements</h4>
                    <li>UG degree course students must maintain a <b style="font-weight: bold;">minimum of 75% attendance</b> to be eligible to appear for University Examinations. </li>
                    <li>As per AKTU guidelines, the conditions to qualify for completing a semester are: </li>

                    <style>
                        ul.diamond-list {
                          list-style: none;
                          padding-left: 1.5rem;
                        }
                    
                        ul.diamond-list li::before {
                          content: "♦";                          
                          font-size: 0.8rem;
                          display: inline-block;
                          width: 1em;
                          margin-left: -1em;
                        }
                    </style>
                    <ul class="diamond-list">
                        <li style="list-style:">Students are expected to attend all classes. </li>
                        <li style="list-style:">However, for unavoidable reasons like medical issues, sports participation, or personal reasons, students must secure at least 75% attendance in each semester.</li>
                        <li style="list-style:">In extraordinary cases, such as severe medical problems or representing the college at state or national level competitions, students with 65% attendance may be permitted to take University Examinations.  </li>
                        <li style="list-style:">Students with less than 65% overall attendance will not be allowed to take the University Examination under any circumstances.</li>
                        <li style="list-style:">These students will be required to repeat the entire year. </li>
                    </ul>
                </div>

                <div class="content">
                    <h4>F. Technology Use</h4>
                    <li>While SERI recognizes the importance of technology in modern education, the use of cell phones during class hours is strictly prohibited to minimize distractions and maintain a focused learning environment</li>
                    <li>Students are expected to use college computer and internet resources responsibly and ethically, adhering to all institutional policies regarding online behavior.</li>
                    <li>Any misuse of technology, including but not limited to cyberbullying, unauthorized access to systems, or distribution of inappropriate content, will result in disciplinary action.</li>
                </div>

                <div class="content">
                    <h4>G. General Conduct and Discipline</h4>
                    <li>Students are expected to conduct themselves with respect and courtesy towards faculty, staff, and fellow students at all times.</li>
                    <li>Any form of disruptive behavior, including but not limited to shouting, loitering in unauthorized areas, or causing disturbances in classrooms or the library, is strictly prohibited.</li>
                    <li>SERI maintains a zero-tolerance policy towards ragging. Any student involved in ragging will face severe disciplinary action, including the possibility of expulsion and legal consequences. </li>
                    <li>Students are responsible for maintaining cleanliness of the campus and its facilities. Littering, vandalism, or damage to college property will not be tolerated.</li>
                    <li>Violation of any of these rules and regulations may result in disciplinary action, the severity of which will be determined by the institution based on the nature of the offense.</li>
                </div>

                <strong>We believe that these guidelines will help in maintaining a disciplined and focused academic community. </strong>
                                
                
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