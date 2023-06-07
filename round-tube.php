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
                            <img src="img/gallery_main_img_11.jpg" alt="">
                        </div>

                        <div class="swiper-slide">
                            <img src="img/gallery_main_img_11.jpg" alt="">
                        </div>

                        <div class="swiper-slide">
                            <img src="img/gallery_main_img_11.jpg" alt="">
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>


            <div class="col-lg-7">
                <div class="portfolio-info">
                    <h3>Specifications</h3>
                    <ul>
                        <li><strong>Outside Diameter</strong>: 19mm OD To 290mm</li>
                        <li><strong>Wall Thickness</strong>: 1.5 mm, 2 mm, 3 mm And more to below 50mm</li>
                        <li><strong>Grade</strong>: 6063, 6082, 6061-T6</li>
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
                    <p>We supply Aluminium Round Tube in commercial alloy Grade 6063-T6. With medium strength this material is known for its architectural properties. The shape lends itself to many building projects particularly outdoors, where it has a very good resistance to corrosion and high mechanical strength.</p>
                    <p>Common applications for our aluminium tubing include:</p>


                    <P>•    Windows & doors</p>
                    <p>•   Curtain walls</p>
                    <p>•   Interior fittings</p>
                    <p>•   Framework</p>




                </div>

                <div id="Specification" class="tabcontent">
                    <h3>Specification</h3>

                    <table class="table table-bordered table-hover" style="width:95%;margin-top: 2%;margin-left: 2%;line-height: 1.8;">



                        <tbody>


                            <tr>

                                <td rowspan="1" style="background-color: #1A53A0;
                                    line-height: 18px;
                                    color: white;
                                    font-size: 16px;
                                    transition: 0.4s;
                                    font-family: Montserrat,sans-serif;">Finish</td>

                                <td style="background-color: #1A53A0;
                                    line-height: 18px;
                                    color: white;
                                    font-size: 16px;
                                    transition: 0.4s;
                                    font-family: Montserrat,sans-serif;">Standard Mill Finish</td>



                            </tr>

                            <tr>

                                <td rowspan="1" style="background-color: #D9DADA;
                                    line-height: 18px;
                                    color: black;
                                    font-size: 16px;
                                    transition: 0.4s;
                                    font-family: Montserrat,sans-serif;">Proof Stress</td>

                                <td style="background-color: #D9DADA;
                                    line-height: 18px;
                                    color: black;
                                    font-size: 16px;
                                    transition: 0.4s;
                                    font-family: Montserrat,sans-serif;">150 MPa</td>




                            </tr>

                            <tr>

                                <td rowspan="1" style="background-color: #1A53A0;
                                    line-height: 18px;
                                    color: white;
                                    font-size: 16px;
                                    transition: 0.4s;
                                    font-family: Montserrat,sans-serif;">Tensile Strength</td>

                                <td style="background-color: #1A53A0;
                                    line-height: 18px;
                                    color: white;
                                    font-size: 16px;
                                    transition: 0.4s;
                                    font-family: Montserrat,sans-serif;">195 MPa</td>




                            </tr>
                            <tr>

                                <td rowspan="1" style="background-color: #D9DADA;
                                    line-height: 18px;
                                    color: black;
                                    font-size: 16px;
                                    transition: 0.4s;
                                    font-family: Montserrat,sans-serif;">Hardness</td>

                                <td style="background-color: #D9DADA;
                                    line-height: 18px;
                                    color: black;
                                    font-size: 16px;
                                    transition: 0.4s;
                                    font-family: Montserrat,sans-serif;">70 Typical HB</td>




                            </tr>

                            <tr>

                                <td rowspan="1" style="background-color: #1A53A0;
                                    line-height: 18px;
                                    color: white;
                                    font-size: 16px;
                                    transition: 0.4s;
                                    font-family: Montserrat,sans-serif;">Elongation</td>

                                <td style="background-color: #1A53A0;
                                    line-height: 18px;
                                    color: white;
                                    font-size: 16px;
                                    transition: 0.4s;
                                    font-family: Montserrat,sans-serif;">8 Min %</td>




                            </tr>
                            <tr>

                                <td rowspan="1" style="background-color: #D9DADA;
                                    line-height: 18px;
                                    color: black;
                                    font-size: 16px;
                                    transition: 0.4s;
                                    font-family: Montserrat,sans-serif;">Density</td>

                                <td style="background-color: #D9DADA;
                                    line-height: 18px;
                                    color: black;
                                    font-size: 16px;
                                    transition: 0.4s;
                                    font-family: Montserrat,sans-serif;">2.70 g/cm³</td>




                            </tr>

                            <tr>

                                <td rowspan="1" style="background-color: #1A53A0;
                                    line-height: 18px;
                                    color: white;
                                    font-size: 16px;
                                    transition: 0.4s;
                                    font-family: Montserrat,sans-serif;">Melting Point</td>

                                <td style="background-color: #1A53A0;
                                    line-height: 18px;
                                    color: white;
                                    font-size: 16px;
                                    transition: 0.4s;
                                    font-family: Montserrat,sans-serif;">585 - 650 °C</td>




                            </tr>
                            <tr>

                                <td rowspan="1" style="background-color: #D9DADA;
                                    line-height: 18px;
                                    color: black;
                                    font-size: 16px;
                                    transition: 0.4s;
                                    font-family: Montserrat,sans-serif;">Thermal Expansion</td>

                                <td style="background-color: #D9DADA;
                                    line-height: 18px;
                                    color: black;
                                    font-size: 16px;
                                    transition: 0.4s;
                                    font-family: Montserrat,sans-serif;">23.4 x10^-6 /K</td>




                            </tr>

                            <tr>

                                <td rowspan="1" style="background-color: #1A53A0;
                                    line-height: 18px;
                                    color: white;
                                    font-size: 16px;
                                    transition: 0.4s;
                                    font-family: Montserrat,sans-serif;">Modulus of Elasticity</td>

                                <td style="background-color: #1A53A0;
                                    line-height: 18px;
                                    color: white;
                                    font-size: 16px;
                                    transition: 0.4s;
                                    font-family: Montserrat,sans-serif;">69.5 GPa</td>




                            </tr>
                            <tr>

                                <td rowspan="1" style="background-color: #D9DADA;
                                    line-height: 18px;
                                    color: black;
                                    font-size: 16px;
                                    transition: 0.4s;
                                    font-family: Montserrat,sans-serif;">Thermal Conductivity</td>

                                <td style="background-color: #D9DADA;
                                    line-height: 18px;
                                    color: black;
                                    font-size: 16px;
                                    transition: 0.4s;
                                    font-family: Montserrat,sans-serif;">200 - 220 W/m.K</td>




                            </tr>

                            <tr>

                                <td rowspan="1" style="background-color: #1A53A0;
                                    line-height: 18px;
                                    color: white;
                                    font-size: 16px;
                                    transition: 0.4s;
                                    font-family: Montserrat,sans-serif;">Electrical Resistivity</td>

                                <td style="background-color: #1A53A0;
                                    line-height: 18px;
                                    color: white;
                                    font-size: 16px;
                                    transition: 0.4s;
                                    font-family: Montserrat,sans-serif;">0.032 x10^-6 Ω .m</td>




                            </tr>
                            <tr>

                                <td rowspan="1" style="background-color: #D9DADA;
                                    line-height: 18px;
                                    color: black;
                                    font-size: 16px;
                                    transition: 0.4s;
                                    font-family: Montserrat,sans-serif;">Machinability</td>

                                <td style="background-color: #D9DADA;
                                    line-height: 18px;
                                    color: black;
                                    font-size: 16px;
                                    transition: 0.4s;
                                    font-family: Montserrat,sans-serif;">Average</td>




                            </tr>

                            <tr>

                                <td rowspan="1" style="background-color: #1A53A0;
                                    line-height: 18px;
                                    color: white;
                                    font-size: 16px;
                                    transition: 0.4s;
                                    font-family: Montserrat,sans-serif;">Workability - Cold</td>

                                <td style="background-color: #1A53A0;
                                    line-height: 18px;
                                    color: white;
                                    font-size: 16px;
                                    transition: 0.4s;
                                    font-family: Montserrat,sans-serif;">Good</td>




                            </tr>

                            <tr>

                                <td rowspan="1" style="background-color: #D9DADA;
                                    line-height: 18px;
                                    color: black;
                                    font-size: 16px;
                                    transition: 0.4s;
                                    font-family: Montserrat,sans-serif;">Weldability - Gas</td>

                                <td style="background-color: #D9DADA;
                                    line-height: 18px;
                                    color: black;
                                    font-size: 16px;
                                    transition: 0.4s;
                                    font-family: Montserrat,sans-serif;">Good</td>




                            </tr>


                            <tr>

                                <td rowspan="1" style="background-color: #1A53A0;
                                    line-height: 18px;
                                    color: white;
                                    font-size: 16px;
                                    transition: 0.4s;
                                    font-family: Montserrat,sans-serif;">Weldability - Arc</td>

                                <td style="background-color: #1A53A0;
                                    line-height: 18px;
                                    color: white;
                                    font-size: 16px;
                                    transition: 0.4s;
                                    font-family: Montserrat,sans-serif;">Very good</td>




                            </tr>

                            <tr>

                                <td rowspan="1" style="background-color: #D9DADA;
                                    line-height: 18px;
                                    color: black;
                                    font-size: 16px;
                                    transition: 0.4s;
                                    font-family: Montserrat,sans-serif;">Weldability - Resistance</td>

                                <td style="background-color: #D9DADA;
                                    line-height: 18px;
                                    color: black;
                                    font-size: 16px;
                                    transition: 0.4s;
                                    font-family: Montserrat,sans-serif;">Good</td>


                            </tr>
                            <tr>

                                <td rowspan="1" style="background-color: #1A53A0;
                                    line-height: 18px;
                                    color: white;
                                    font-size: 16px;
                                    transition: 0.4s;
                                    font-family: Montserrat,sans-serif;border-bottom-left-radius: 21px;">Brazeability</td>

                                <td style="background-color: #1A53A0;
                                    line-height: 18px;
                                    color: white;
                                    font-size: 16px;
                                    transition: 0.4s;
                                    font-family: Montserrat,sans-serif;border-bottom-right-radius: 21px;">Very good</td>




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