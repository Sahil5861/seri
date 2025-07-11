@extends('frontend.layout')
@section('title', 'Academics Infrastructure')

<link rel="stylesheet" href="{{asset('css/tabs_container.css')}}">
<link rel="stylesheet" href="{{asset('css/test-form.css')}}">

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<style>
    .content{
        margin: 30px 0;
    }
    .content .img{
        width: 100%;
        min-height: 15rem;
        max-height: 15rem;
        object-fit: cover;
        animation: fade-up 1s linear;        
    }

    @keyframes fadeUp {
        0% {
            opacity: 0;
            transform: translateY(40px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .img.fade-up {
        animation: fadeUp 1s ease forwards;
    }
    


</style>
@section('main_content') 
<div data-elementor-type="wp-post" data-elementor-id="436" class="elementor elementor-436 elementor-304" style="background-color: #fff;">
    {{-- here it is --}}      

    <div class="banner banner-dark" style="background: url('../images/academics_banner2.jpg') no-repeat center center / cover;">
        <div class="banner-content">
            <h1>SERI-Academic Infrastructure</h1>
            <p><i>Advancing engineering excellence with innovative facilities and cutting-edge resources.</i></p>
        </div>
    </div>    
    <section class="container-lg p-4">        
        <div class="row d-flex flex-column-reverse flex-lg-row">
            <div class="col-lg-12 main" style="font-family:Arial, Helvetica, sans-serif;">
                <h1 style="margin:20px 0; font-weight:100; line-height:1.6;">Academic Infrastructure @ SERI</h1>                
                <p>{{env('COLLEGE_NAME_MID')}} Engineering & Research Institute (SERI) is committed to providing a conducive and optimal learning environment, emphasizing high-quality teaching and research. Strategically located within the educational hub of Knowledge Park Greater Noida (Delhi NCR), SERI offers an attractive and compact campus, excellent student accommodation, and convenient access to the city. The institute's infrastructure is designed to support a comprehensive academic experience</p>
                <br>                                                                
                <div class="content">                                    
                    <div class="row">
                        <div class="col-lg-8">
                            <img src="{{asset('academics/academic-1.png')}}" alt="image">
                        </div>
                    </div>
                    <br>
                </div>  
                
                <div class="content">
                    <h4>Laboratories</h4>
                    <p>The CSE Department has several well-equipped laboratories to support student learning and research.</p>
                    <ul>
                        <li>These labs are equipped with hardware kits, software tools, and consumables to meet the needs of our undergraduate courses.</li>
                        <li>Students and faculty members use the laboratories for practical experiments, project work, and research activities.</li>
                        <li>Each lab has a dedicated staff member to provide assistance and support.</li>                
                    </ul>
                    <br>
                    <p>The department is equipped with the following labs</p>
        
                    <ul>
                        <li>Physics Lab</li>
                        <li>Chemistry Lab</li>
                        <li>Electrical Lab</li>
                        <li>Electronics Lab</li>
                        <li>Language Lab</li>
                        <li>Computer Programming Lab</li>
                        <li>Drawing Hall</li>
                        <li>Workshop</li>
                    </ul>

                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-3">
                            <img class="img fade-up" src="{{asset('academics/lab_images/lab1.jpg')}}" alt="image">
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-3">
                            <img class="img fade-up" src="{{asset('academics/lab_images/lab2.jpg')}}" alt="image">
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-3">
                            <img class="img fade-up" src="{{asset('academics/lab_images/lab3.jpg')}}" alt="image">
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-3">
                            <img class="img fade-up" src="{{asset('academics/lab_images/lab4.jpg')}}" alt="image">
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-3">
                            <img class="img fade-up" src="{{asset('academics/lab_images/lab5.jpg')}}" alt="image">
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-3">
                            <img class="img fade-up" src="{{asset('academics/lab_images/lab6.jpg')}}" alt="image">
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-3">
                            <img class="img fade-up" src="{{asset('academics/lab_images/lab7.jpg')}}" alt="image">
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-3">
                            <img class="img fade-up" src="{{asset('academics/lab_images/lab8.jpg')}}" alt="image">
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-3">
                            <img class="img fade-up" src="{{asset('academics/lab_images/lab9.png')}}" alt="image">
                        </div>
                    </div>
        
                </div>

                <div class="content">
                    <h4>Library</h4>
                    <p>SERI has an excellent library for the benefit of students, faculty, and researchers.</p>
                    <ul>
                        <li>Our library is one of the best established libraries according to AKTU standards, with a vast collection of books covering various branches of Engineering and Technology, Science, Humanities, and related fields.</li>
                        <li>The library is well-protected with fire alarms and CCTV security systems.</li>
                        <li>SERI's library stocks over 3000+ books, with 12 subscribed journals and study materials.</li>
                        <li>We also have an Air Conditioned Digital library (Delnet) with multimedia material available for students.</li>
                    </ul>
                </div>

                <div class="content">
                    <h4>Digital Repository</h4>
                    <p>The SERI Central Library maintains a Digital Repository that includes:</p>
                    <ul>
                        <li>Question Papers & Model Solutions Bank with previous question papers of Sessional, PUT (Pre-University Test), and University Examinations, along with model solutions prepared by subject teachers.</li>
                        <li>The collection is readily available for student reference in electronic and print form in the central library and in electronic form in departmental and hostel libraries.</li>
                        <li>Students can also access the collection through the Institutional Repository.</li>
                    </ul>

                    <div class="row">
                        <div class="col-lg-4 mb-3">
                            <img src="{{asset('academics/libs/lib1.jpg')}}" alt="image" class="img fade-up">
                        </div>
                        <div class="col-lg-4 mb-3">
                            <img src="{{asset('academics/libs/lib2.jpg')}}" alt="image" class="img fade-up">
                        </div>
                        <div class="col-lg-4 mb-3">
                            <img src="{{asset('academics/libs/lib3.jpg')}}" alt="image" class="img fade-up">
                        </div>
                    </div>
                </div>

                <div class="content">
                    <h4>Internet and Intranet</h4>
                    <p>SERI has a dedicated internet lab that is open 24/7.</p>
                    <ul>
                        <li>We have 300 Mbps internet connectivity, accessible from more than 200 computers and laptops.</li>
                        <li>The campus intranet provides important details about Test Schedules, Time Tables, Examination Schedules, Campus News, and other college-related information.</li>
                        <li>The center supports an institute-wide fiber optic network and wireless connectivity across all academic departments, hostels, the library, and other central facilities.</li>
                        <li>Our center provides system administration and technical support, including software installation, network monitoring, internet connection, and digital library services, with state-of-the-art servers and licensed application software.</li>
                    </ul>
                    <div class="row gap-0">
                        <div class="col-lg-4">
                            <img src="{{asset('academics/net/net1.jpg')}}" alt="image" class="img fade-up">                            
                        </div>
                        <div class="col-lg-4">
                            <img src="{{asset('academics/net/net2.jpg')}}" alt="image" class="img fade-up">
                        </div>
                    </div>
                </div>

                <div class="content">
                    <h4>Sports and Games Facilities</h4>
                    <p>The College provides ample opportunities for students to participate in sports and games at various levels.</p>

                    <ul>
                        <li>We organize various sports and games on campus.</li>
                        <li>Outdoor and indoor game facilities are available on campus and are actively used by students</li>
                        <li>Outdoor games include Basketball, Cricket, Volleyball, Ball Badminton, and Kabbadi.</li>
                        <li>Indoor games include Weight Lifting, Table Tennis, Shuttle, Carrom, and Chess.</li>
                    </ul>
                </div>

                <div class="content">
                    <h4>Gymnasium Facilities</h4>
                    <p>The college has separate gymnasiums for boys and girls.Our gym is equipped with a Bench Press, Incline Bench Press, Dumbbells, Treadmill, and other exercise equipment.</p>
                </div>

                <div class="content">
                    <h4>Yoga Classes</h4>
                    <p>Yoga classes are conducted regularly, both outdoors and indoors.</p>

                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                            <img src="{{asset('academics/games/game1.jpg')}}" alt="image" class="img fade-up">
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                            <img src="{{asset('academics/games/game2.jpg')}}" alt="image" class="img fade-up">
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                            <img src="{{asset('academics/games/game3.jpg')}}" alt="image" class="img fade-up">
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                            <img src="{{asset('academics/games/game4.jpg')}}" alt="image" class="img fade-up">
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                            <img src="{{asset('academics/games/game5.jpg')}}" alt="image" class="img fade-up">
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                            <img src="{{asset('academics/games/game6.jpg')}}" alt="image" class="img fade-up">
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                            <img src="{{asset('academics/games/game7.gif')}}" alt="image" class="img fade-up">
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                            <img src="{{asset('academics/games/game8.jpg')}}" alt="image" class="img fade-up">
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                            <img src="{{asset('academics/games/game9.jpg')}}" alt="image" class="img fade-up">
                        </div>
                    </div>
                </div>

                <div class="content">
                    <h4>Health Center</h4>
                    <p>The Health Centre at SERI is well-equipped and provides quality health care in a comfortable and confidential environment.</p>

                    <ul>
                        <li>It has separate inpatient facilities for male and female students.</li>
                        <li>The health center is managed by a medical officer and a healthcare assistant.</li>
                        <li>The college provides comprehensive medical cover/facilities to students at a nominal charge, including free medical check-ups and OPD services at Bakson Hospital.</li>
                    </ul>

                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <img src="{{asset('academics/health/health1.jpg')}}" alt="image" class="img fade-up">
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <img src="{{asset('academics/health/health2.jpg')}}" alt="image" class="img fade-up">
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <img src="{{asset('academics/health/health3.jpg')}}" alt="image" class="img fade-up">
                        </div>
                    </div>
                </div>

                <div class="content">
                    <h4>Auditorium</h4>
                    <p>We have a well-lit auditorium with a seating capacity of 200+ in a 254 sqft area.
                        This air-conditioned hall features acoustically engineered designs and sophisticated sound equipment.
                        </p>

                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <img src="{{asset('academics/audi/audi1.jpg')}}" alt="image" class="img fade-up">
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <img src="{{asset('academics/audi/audi2.jpg')}}" alt="image" class="img fade-up">
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <img src="{{asset('academics/audi/audi3.jpg')}}" alt="image" class="img fade-up">
                        </div>
                    </div>                    
                </div>

                <hr>

                <div class="content">
                    <h4>Multipurpose Conference Halls</h4>
                    <p>SERI has 2 fully air-conditioned multipurpose halls with a seating capacity of 100, ideal for seminars, conferences, and video conferences.</p>
                </div>

                <div class="content">
                    <h4>Hostels</h4>
                    <p>SERI’s hostels provide a <b>“Home away from Home”</b> for students.
                        Separate boys' and girls' hostels are available on campus with all necessary facilities.
                        </p>

                    <strong>Boys Hostel</strong>
                    <ul>
                        <li>The boys' hostel offers amenities like attached bathrooms, individual beds, study tables, chairs, and wardrobes with locking facilities.</li>
                        <li>The hostel is well-maintained and has 24-hour power backup, RO drinking water, solar heaters, a reading room, a TV lounge, and sports facilities.</li>
                        <li>Students have access to 24/7 high-speed unlimited Wi-Fi internet.</li>
                    </ul>

                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                            <img src="{{asset('academics/hostel/hostel1.jpg')}}" alt="image" class="img fade-up">
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                            <img src="{{asset('academics/hostel/hostel2.jpg')}}" alt="image" class="img fade-up">
                        </div>
                    </div>

                    <strong>Girls Hostel</strong>
                    <ul>
                        <li>The girls' hostel provides well-secured accommodation with attached bathrooms, individual beds, study tables, chairs, and wardrobes with locking facilities.</li>
                        <li>The hostel is maintained by a qualified team of wardens and maintenance staff and includes 24-hour power backup, RO drinking water, a reading room, a TV lounge, sports facilities and a world-class gym.</li>
                        <li>Students have access to 24/7 high-speed unlimited Wi-Fi internet.</li>
                        <li>Girls' students can use the library, COE, and lab facilities for research activities and have specific gym timings.</li>
                        <li>Hygienically prepared homely-style vegetarian food is provided in the hostel mess.</li>                        
                    </ul>

                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                            <img src="{{asset('academics/hostel/hostel3.jpg')}}" alt="image" class="img fade-up">
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                            <img src="{{asset('academics/hostel/hostel4.jpg')}}" alt="image" class="img fade-up">
                        </div>
                    </div>

                    <strong>Smart Laundry</strong>
                    <ul>
                        <li>Smart Laundry facility, powered by Hier, is available in both boys' and girls' hostels.</li>
                        <li>Students can use the low-cost, energy-efficient, and eco-friendly washing facility through a mobile app.</li>                        
                    </ul>

                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                            <img src="{{asset('academics/hostel/hostel5.jpg')}}" alt="image" class="img fade-up">
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                            <img src="{{asset('academics/hostel/hostel6.jpg')}}" alt="image" class="img fade-up">
                        </div>
                    </div>
                </div>  
                
                <div class="content">
                    <h4>Transport Facilities</h4>
                    <p>The college operates a fleet of buses across the city.</p>
                    <ul>
                        <li>The bus network covers all city areas and important junctions.</li>
                        <li>Experienced drivers ensure student safety and compliance with traffic rules.</li>
                        <li>The college encourages students to use the transport for safe and comfortable commuting.</li>
                        <li>Bus in-charges ensure individual attention for all students during their commute.</li>
                    </ul>

                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                            <img src="{{asset('academics/cars/car1.jpg')}}" alt="image" class="img fade-up">
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                            <img src="{{asset('academics/cars/car2.jpg')}}" alt="image" class="img fade-up">
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                            <img src="{{asset('academics/cars/car3.jpg')}}" alt="image" class="img fade-up">
                        </div>
                    </div>
                </div>

                <div class="content">
                    <h4>Green Initiatives</h4>
                    <p>SERI is committed to maintaining a picturesque and serene atmosphere.</p>
                    <ul>
                        <li>Our campus is a blend of culture and innovation, providing a flawless learning experience and cultivating discipline.</li>
                        <li>The campus features well-lit roads and pedestrian-friendly pathways.</li>
                    </ul>

                    <br>
                    <strong>Pedestrian-Friendly Roads</strong>
                    <p>SERI is dedicated to the welfare of staff and students, ensuring safe movement for everyone.</p>

                    <strong>Paperless Office</strong>
                    <p>SERI promotes reducing unnecessary paperwork by using digital communication like emails and WhatsApp for official messages and updates.</p>

                    <strong>Green Landscaping</strong>
                    <p>The institute is a green campus with trees and plants.</p>
                    <ul>
                        <li>We encourage students and staff to plant more trees and maintain a litter and plastic-free environment.</li>
                        <li>Tree plantation projects help foster an eco-friendly climate and provide fresh oxygen.</li>
                        <li>Classrooms have sufficient lighting and ventilation with natural light and airflow.</li>
                        <li>The campus maintains a low noise level during the day.</li>
                        <li>Our green initiatives include solar panels, a paperless working system, and composting activities.</li>
                        <li>Many students use public transport, bicycles, or walk to college.</li>
                        <li>The College includes the study of Carbon Offsets and Carbon Neutrality in its Environmental Studies programs. </li>
                    </ul>
                </div>
            </div>            
        </div>

        
    </section>
</div>
@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    const images = document.querySelectorAll('.img');

const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('fade-up');
      observer.unobserve(entry.target); // remove if you want to re-trigger
    }
  });
}, {
  threshold: 0.1
});

images.forEach(img => {
  observer.observe(img);
});

</script>
  

<script>
    $(document).ready(function() {
    $(".nav-responsive li").on("click", function() {
        $(".nav-responsive li").removeClass("active-nav"); // Remove class from all items
        $(this).addClass("active-nav"); // Add class to the clicked item
    });
});

</script>