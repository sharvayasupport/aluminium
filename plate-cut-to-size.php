<?php include('./header.php'); ?>


<link href="assets/css/tab.css" rel="stylesheet">

<section id="portfolio-details" class="portfolio-details">
    <div class="container">

        <a href="index.php">Back to Home</a>

        <div class="row gy-4">

            <div class="col-lg-5">
                <div class="portfolio-details-slider swiper">
                    <div class="swiper-wrapper align-items-center">

                        <div class="swiper-slide">
                            <img src="img/gallery_main_img_5.jpg" alt="">
                        </div>

                        <div class="swiper-slide">
                            <img src="img/gallery_main_img_5.jpg" alt="">
                        </div>

                        <div class="swiper-slide">
                            <img src="img/gallery_main_img_5.jpg" alt="">
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>


            <div class="col-lg-7">
                <div class="portfolio-info">
                    <h3>Specifications</h3>
                    <ul>
                        <li><strong>Width</strong>: 1220mm (1.2 MTR), 1500mm (1.5 MTR)</li>
                        <li><strong>Length</strong>: 2440mm (2.44 MTR), 3000mm (3 MTR)</li>
                        <li><strong>Grade</strong>: 6082, 6061-T6, 8011-H14</li>
                        <li><strong>Thickness</strong>: 3mm And Upto 100mm</li>
                        <li><strong>Finish</strong>: Standard Mill Finish, Natural Anodised</li>

                    </ul>
                </div>
                <div class="portfolio-description">
                    <!--  <h2>Description</h2>
                      <p>
                        Our Aluminium Round Bar is supplied in grade 6061-T6, 6082-T6,. Often referred to as an 'architectural alloy', this material has high strength and can be easily cut or welded with the right equipment. The bar shape lends itself to many building projects particularly outdoors, where it has a very good resistance to corrosion and high mechanical strength.
                      </p> -->
                </div> 


                <div class="tab">
                    <button class="tablinks" onclick="openCity(event, 'Description')">Description</button>
                    <button class="tablinks" onclick="openCity(event, 'Specification')">Specification</button>

                </div>

                <div id="Description" class="tabcontent">
                    <h3>Description</h3>
                    <p>Rajesh Aluminium stock a wide range of Aluminium Plate in various thicknesses and grades 6082-T6, 6061-T6. Aluminium Plate is one of the most popular alloys. These plates can be availed by the customers in several dimensions, depending upon their needs. An outstanding finish characterizes the offered plates.</p>
                    <p>Aluminium Plate is one of the most popular alloys. A blank canvas for many DIY and commercial applications. Typically used in components for:</p>


                    <P>•   Shipbuilding</p>
                    <p>•   Rail cars</p>
                    <p>•   Vehicle bodies</p>

                </div>

                <div id="Specification" class="tabcontent">
                    <h3>Specification</h3>
                    
                    <P>Aluminium alloys are alloys where the principal metal is aluminium.</P>
                    <table class="table table-bordered table-hover" style="width:95%;margin-top: 2%;margin-left: 2%;line-height: 1.8;">

                        <thead>

                            <tr>

                                <th style="color: white;background-color: #1A53A0;border-top-left-radius: 21px;">GRADE</th>

                                <th style="color: white;background-color: #1A53A0;border-top-right-radius: 21px;">DESCRIPTION</th>






                            </tr>

                        </thead>        

                        <tbody>

                            <tr>

                                <td rowspan="1" style="background-color: #D9DADA;
                                    line-height: 18px;
                                    color: black;
                                    font-size: 16px;
                                    transition: 0.4s;
                                    font-family: Montserrat,sans-serif;">1060</td>

                                <td style="background-color: #D9DADA;
                                    line-height: 18px;
                                    color: black;
                                    font-size: 16px;
                                    transition: 0.4s;
                                    font-family: Montserrat,sans-serif;">	Aluminium alloy 1060 is a medium strength alloy with very good resistance to atmospheric corrosion and very good weldability as well as good cold formability.</td>




                            </tr>

                            <tr>

                                <td rowspan="1" style="background-color: #1A53A0;
                                    line-height: 18px;
                                    color: white;
                                    font-size: 16px;
                                    transition: 0.4s;
                                    font-family: Montserrat,sans-serif;">8011</td>

                                <td style="background-color: #1A53A0;
                                    line-height: 18px;
                                    color: white;
                                    font-size: 16px;
                                    transition: 0.4s;
                                    font-family: Montserrat,sans-serif;">Our Aluminium 8011 is known for exceptional performance in extreme environments but is not recommended for use in temperatures in excess of 625°C.</td>



                            </tr>


                            <tr>

                                <td rowspan="1" style="background-color: #D9DADA;
                                    line-height: 18px;
                                    color: black;
                                    font-size: 16px;
                                    transition: 0.4s;
                                    font-family: Montserrat,sans-serif;">6082</td>

                                <td style="background-color: #D9DADA;
                                    line-height: 18px;
                                    color: black;
                                    font-size: 16px;
                                    transition: 0.4s;
                                    font-family: Montserrat,sans-serif;">Aluminium alloy 6082 is a high strength heat treatable alloy. It has very good corrosion resistance and very good weldability.</td>




                            </tr>

                            <tr>

                                <td rowspan="1" style="background-color: #1A53A0;
                                    line-height: 18px;
                                    color: white;
                                    font-size: 16px;
                                    transition: 0.4s;
                                    font-family: Montserrat,sans-serif;border-bottom-left-radius: 21px;">6061</td>

                                <td style="background-color: #1A53A0;
                                    line-height: 18px;
                                    color: white;
                                    font-size: 16px;
                                    transition: 0.4s;
                                    font-family: Montserrat,sans-serif;border-bottom-right-radius: 21px;">H20 is the old British Standard equivalent for our Grade 6061 T6. This is a high strength alloy with additions of magnesium and silicon. Commonly utilised as an architectural alloy it has a good formability in manufacture and lends itself to intricate extrusions and sections.</td>




                            </tr>


                        </tbody>

                    </table>
                </div>




            </div>

        </div>

    </div>
</section><!-- End Portfolio Details Section -->

<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>

<?php include('./footer.php'); ?>