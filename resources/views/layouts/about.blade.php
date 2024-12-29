<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>University of Gezira</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
      <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script>
      <style type="text/css">
        .navbar .megamenu{ padding: 1rem; }
        /* ============ desktop view ============ */
        @media all and (min-width: 992px) {

            .navbar .has-megamenu{position:static!important;}
            .navbar .megamenu{left:0; right:0; width:100%; margin-top:0;  }

        }
        /* ============ desktop view .end// ============ */


        /* ============ mobile view ============ */ 
        @media(max-width: 991px) {

            .navbar.fixed-top .navbar-collapse,
            .navbar.sticky-top .navbar-collapse {
                overflow-y: auto;
                max-height: 90vh;
                margin-top: 10px;
            }
        }

        /* ============ mobile view .end// ============ */


        a:link,
        a:visited {
            background-color: bg-dark;
            color: white;
            border: 1px solid bg-dark;
            padding: 10px 20px;
            text-align: left;
            text-decoration: none;
            display: inline-block;
        }

        a:hover,
        a:active {
            background-color: green;
            color: white;
        }

        /* Reset default margins and padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body styling */
        body {
            font-size: 16px;
            font-family: 'CustomArabicFont', sans-serif;
            /* Use a clean, easy-to-read font */
            color: #333;
            /* Dark text for readability */
            background-color: #f9f9f9;
            /* Light background for minimal eye strain */
            line-height: 1.3;
            /* Increase line height for easier reading */
            padding: 0px;
            /* Add padding around the page */
        }

        /* Container for main content */
        .container {
            max-width: 98%;
            /* Keeps content centered on larger screens */
            margin: 0 auto;

            background-color: #fff;
            /* White background for content area */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            /* Subtle shadow for depth */
            border-radius: 8px;
            /* Rounded corners for modern look */
        }

        /* Headings */
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            /* Slightly darker headings */
            margin-bottom: .5rem;
        }

        h1 {
            font-size: 2.5rem;
        }

        h2 {
            font-size: 2rem;
        }

        /* Links */
        a {
            color: #ffffff;
            /* Blue links */
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        /* Basic button styling */
        button {
            background-color: #fcfcfc;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #ffffff;
        }

        /* Responsive text for accessibility */
        @media (max-width: 768px) {
            body {
                font-size: 0.9rem;
            }
        }

</style>
<script type="text/javascript">
document.addEventListener("DOMContentLoaded", function(){
    /////// Prevent closing from click inside dropdown
    document.querySelectorAll('.dropdown-menu').forEach(function(element){
        element.addEventListener('click', function (e) {
            e.stopPropagation();
        });
    })
});
// DOMContentLoaded  end
</script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="socialstyle.css">
<link rel="stylesheet" href="numberofstudents.css">
<link rel="stylesheet" href="mainslideshow.css">
<link rel="stylesheet" href="contactus.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">

        @include("layouts.top")
       

        <div  style=" padding-left: 20px;">
            <div class="row">
                
                <div class="col-lg-2  col-sm-3" >
                    <div class="w3-bar-block  w3-card " style="width:100%; margin-left: 0px;padding-left: 1px;background-color:rgb(94, 181, 184);color:white" >
                       {{--  <h5 class="w3-bar-item">About</h5> --}}
                        <button class="w3-bar-item w3-button tablink" onclick="openTag(event, 'history')">History and development</button>
                        <button class="w3-bar-item w3-button tablink" onclick="openTag(event, 'vision')">Vision and mission</button>
                        <button class="w3-bar-item w3-button tablink" onclick="openTag(event, 'aims')">Aims and objectives</button>
                        <button class="w3-bar-item w3-button tablink" onclick="openTag(event, 'facts')">Facts and numbers</button>

                        <button class="w3-bar-item w3-button tablink" onclick="openTag(event, 'Councils')">University Council</button>
                        <button class="w3-bar-item w3-button tablink" onclick="openTag(event, 'senate')">University Senate</button>
                        <button class="w3-bar-item w3-button tablink" onclick="openTag(event, 'Contact')">Contact Us</button>
                        <button class="w3-bar-item w3-button tablink" onclick="openTag(event, 'logo')">University logo</button>
                    </div>
                </div>

          <div style="margin-left:0px" class="col-lg-10 col-sm-8" style="width:100%">

                    <div id="history" class="w3-container city" style="display:none">
                        <h2 style="text-transform: uppercase">History and development</h2>
                        <section style="text-align: justify">
                        <p>
                            The first university guide quotes causes and justifications for establishing the University of Gezira as follows:
                            "The mission of the universities is to seek science and knowledge, reveal the secrets of nature, build human civilization in all its dimensions, assess the balance of justice, support the inherent spiritual values, raise the word of truth and prosperity, eliminate the injustice and corruption, build the mind and conscience of mankind, develop expertise and skills, enrich and refine the talents, and achieve all that through constructive cooperation in an atmosphere of brotherhood, love and fidelity".
<br>
                            <img src="/images/about/history.jpg" class="pull-left" alt="" style="padding:5px 10px 5px 15px;">
                            The University of Gezira was established to serve the community, and to link education with the requirements of development and make it more relevant to human and environmental needs. This is evident from the content of educational mission entrusted to it and identified in its function "to study the environment of Sudan and in particular the rural environment, to identify the issues and conduct research around it". With this concept, the University of Gezira began its path exploring problems of society, training professional cadre capable of utilizing the potential of the rural areas of Sudan and conduct basic and applied scientific research to serve the rural community.
                            Now and after more than three decades since its establishment, the University comprises twenty three faculties spreading all over the Gezira state, in addition to the community college. The number of research institutes in various scientific and humanitarian disciplines has risen to nine, specialized research and training centers were established in faculties and institutes
                        </p>
                        <p>
                            The University of Gezira is currently spread over twelve campuses in the state of Gezira and one campus in the northern state. Campuses in Wad Medani are the University City in Neshaishiba, Elrazi Campus, and Hantoub Campus. The University City in Neshaishiba is located in the northern outskirts of the city and it includes the university administration, central deanships, Faculties of Agricultural Sciences, Engineering and Technology, Economics and Rural Development, industries engineering and technology, and the National Institute for Development of Horticultural Exports, the Sugar Institute and the University of Gezira Farm. Elrazi campus is located in the southern part of the city of Wad Medani and includes Faculties of Medicine, Pharmacy, Applied Medical Sciences, Medical Laboratory Science, Dentistry, and Mathematical and Computer Sciences, and the Water Management and Irrigation Institute, The National Cancer Institute and the National Oilseeds Processing and Research Institute, in addition to the Education Promotion Center, University Press and University of Gezira Consulting House. The campus in Hantoub houses the Faculty of Education - Hantoub and the Institute of Islamic Studies and Islamization of Knowledge.
                            There are eight other University campuses in different locations in the Gezira state, including the Faculty of Arts and Humanities Sciences and Faculty of Languages which are located in Elkamlin town, the Faculty of Commercial Studies is located in Alhilalia town, the Faculty of Education – El Hassahissa located in El Hassahisa town,
                            the Faculty of Animal Production located in Elmanagil, the Faculty of Health and Environmental Sciences located in Elhush in the South Gezira Locality and the Faculty of Developmental Studies located in Umm Elgora Locality.
                            At the Locality of Wad Medani in addition to the city of Wad Medani campuses, there is the Faculty of Media in Fadasi (Wad Medani suburb).
                             ALso, in Abuharaz (Wad Medani suburb) campus there are the faculty of law and the faculty of science. Finaly,  at Eldaba town (Northern state) there is the National Institute for Desert Studies.
                            The number of students enrolled in the University of Gezira has reached 28000 students registered for bachelor's degrees, 4800 for technical diplomas and 4000 students in postgraduate programs. This has coincided with the development of the infrastructure of Faculties and Institutes and furnishing.

                        </p>
                        </section>
                    </div>

                    <div id="vision" class="w3-container city" style="display:none">
                        <h2>VISION</h2>
                        <section style="text-align: justify">
                        <p>To Attain The Highest level of Scientific and Technological Excellence and Sustainability in the Fields of Research, Teaching and Community Service.</p>
                        </section>
                        <h2>MISSION</h2>
                        <section style="text-align: justify">
                        <p>To Contribute Effectively in Achieving Comprehensive Economic and Social Development for the whole Sudanese Society in General and its Rural Community in particular.</p>
                        </section>
                    </div>

                    <div id="aims" class="w3-container city" style="display:none">
                        <h2 style="text-transform: uppercase">Aims and objectives</h2>
                        <section style="text-align: justify">
                        <p>The University of Gezira was established in the city of Wad Medani, the capital of the Gezira state in accordance with a Republican Decree issued on the 19th of November 1975. The location of the University influences its goals and philosophy. The Gezira state was chosen for its agricultural, economic, educational and social importance. It embraces the Gezira Agricultural Scheme with 840 000 hectares of irrigated land. Likewise, the Gezira state harbors various advanced industries; cars, tractors, sugar, hides, textiles and other transformational industries. For the reasons mentioned above the University of Gezira has emphasized community orientation and rural development for the purpose of creating an impetus to agricultural and industrial development.
                            The educational philosophy of the University of Gezira is based on the integrative approach to science. This integrative approach was adopted to achieve the objectives of the university, which is based on the study of the environment of Sudan, particularly the rural environment, without negligence of the urban environment, to identify issues and conduct research on them. This approach calls for the principle of "unity of science", i.e., science, art and knowledge are varied important subjects but closely linked with each other and overlapping to the point that makes them coherent and integrated. As the rural community looks to its issues in a complementary manner, the University of Gezira has adopted this approach to achieve sustainable economic and social development in the community as a whole and especially rural areas. As the University of Gezira has aimed to study the environment in its broad sense, it is natural that the university tends to adopt integration of knowledge in order to improve the link between education and environment and integrate the perception of the overall developmental programs. Therefore, the university is charged with a threefold mission: Cognitive, Environmental, and social mission.</p>
                        </section>
                        <h3>The main objectives of the University are:</h3>
<ul>
                            <li> Training and qualifying of professional personnel in the various fields of knowledge through the establishment of graduate and postgraduate programs and the implementation of the interdisciplinary approach in teaching, training and research.</li>
                            <li> Throughout its history, the University of Gezira has adhered to the community-oriented philosophy. Teaching and research activities in different faculties, institutes and centers are mainly tailored to solve problems of rural areas and rural community using an integrated comprehensive approach. Conduction of applied scientific research benefiting from advanced technological achievements.</li>
                            <li>Introduction of modern technological methods and techniques for the promotion of agriculture and industry.</li>
</ul>
                        </div>

                    <div id="facts" class="w3-container city" style="display:none">
                        <h2 style="text-transform: uppercase">Facts and numbers</h2>

                        <p></p>
                    </div>

                    <div id="Councils" class="w3-container city" style="display:none">
                        <h2 style="text-transform: uppercase">University Council</h2>

                        <section style="text-align: justify">
                            <p>
                        The University Council, represents the highest executive authority of the University and chaired by a national figure. The University Council is formed by an order of His excellency the President of the Republic who is the Guardian of the university. The Vice Chancellor and Deputy Vice Chancellor of the university are appointed by the President of the Republic from senior faculty members. The Vice Chancellor of the University is the link between the university Council and other organs of the university and reports to the Council on the implementation of policies and decisions.

The University Council is responsible for the University’s general development, efficiency of operation and financial management. The Council formulates policies and plans to develop the university and improve its performance scientifically, educationally and financially. Also, the council is in charge of formulating the development plan of the University, approve the annual budget proposals for development, the development of university funds, accept contributions, donations, endowments and identify exploitation avenues. The Council has the power for establishing Faculties and institutes, centers, departments, and university hospitals. The Council meets regularly, twice a year at least )in the fourth Saturday of the months of March and October(.for transaction of its business

</p>
<p>
   <b>The University Council membership includes:</b>
   <ul>
        <li>(21) Members from outside the university</li>
        <li>Ex officio members</li>
    <ul>
        <li>Vice Chancellor</li>
        <li>Deputy Vice Chancellor</li>
        <li>Principal</li>
        <li> Dean of Academic Affairs</li>
        <li>Dean of Student Affairs</li>
        <li>Dean of libraries</li>
        <li>Nine Members from within the university</li>
    </ul>
    <li> Student representatives</li>
    <ul>
        <li>Chairman of the University of Gezira Student Union</li>
        <li>Member of the Executive Office of the University of Gezira Student Union</li>
    </ul>
</ul>
</p>
                        </section>
                    </div>
                    <div id="senate" class="w3-container city" style="display:none">
                        <h2 style="text-transform: uppercase">University senate</h2>
                        <section style="text-align: justify">
                        <p> <b>It is the highest academic organ and it looks after the following academic matters:</b>
                            <ol>
<li>Admission affairs at both under graduate and post-graduate levels.</li>
    <li>Awarding degrees (including honorary), prizes etc.</li>
        <li> Adopting policies and regulations necessary for the achievement of
    academic excellence.</li>
                            </ol>

<b> Senate Membership Includes:</b>
<ul>
    <li>Vice  Chancellor as chairman.
    <li>Deputy Vice  Chancellor.</li>
    <li>Principal of the university.</li>
    <li>Dean of academic affairs ( as secretary).</li>
    <li>Dean of Post-graduate Studies and scientific Research.</li>
    <li>Dean of Student's affairs.</li>
    <li>Deans of faculties and Institutes.</li>
    <li>Deputy deans of faculties and institutes.</li>
    <li>Heads of departments.</li>
    <li>Directors of centers.</li>
    <li>Professors.</li>
</ul>
    <b>For functional duties, the senate delegates some of its powers to four specialized committees to look into matters corresponding to the senate responsibilities. The committees are :</b>
<ol>
 <li> Post-graduate studies committee.</li>
 <li> Scientific committee.</li>
<li> Undergraduate studies committee.</li>
<li> Technical diplomas committee.</li>
 </ol>
                        </p>
                        <p></p>
                        </section>
                    </div>
                    <div id="Contact" class="w3-container city" style="display:none">
                        <h2>Contact Us</h2>
                    <table id="myTable">

                        <tr>
                            <th>Vice Chancellor</th>
                            <th>Email:vch@uofg.edu.sd</th>
                            <th>Tel:00249511840466 - Fax:00249511843174</th>
                        </tr>
                        <tr>
                            <th>Deputy Vice Chancellor</th>
                            <th>Email : dvc@uofg.edu.sd</th>
                            <th>Tel: 00249511827011 Fax: 00249511843697 </th>
                        </tr>
                        <tr>
                            <th>Secretary of Academic Affairs</th>
                            <th>Email: secacadaffairs@uofg.edu.sd</th>
                            <th>Tel: </th>
                        </tr>
                        <tr>
                            <th>External Relations and International Cooperation Directorate</th>
                            <th>Email: eric@uofg.edu.sd</th>
                            <th>Tel: </th>
                        </tr>
                    </table>
                    </div>
                    <div id="logo" class="w3-container city" style="display:none">
                        <h2>University Logo</h2>

                        <p></p>
                    </div>
          </div>

        </div>

          <script>

          function openTag(evt, divid) {
            var i, x, tablinks;
            x = document.getElementsByClassName("city");
            for (i = 0; i < x.length; i++) {
              x[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < x.length; i++) {
              tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
            }
            document.getElementById(divid).style.display = "block";
            evt.currentTarget.className += " w3-red";
          }
          </script>


</div>

        @include("layouts.mainfooter")
        @include("layouts.copyright")


          </body>
</html>
