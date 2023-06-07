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
                            <img src="img/gallery_main_img_6.jpg" alt="">
                        </div>

                        <div class="swiper-slide">
                            <img src="img/gallery_main_img_6.jpg" alt="">
                        </div>

                        <div class="swiper-slide">
                            <img src="img/gallery_main_img_6.jpg" alt="">
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>


            <div class="col-lg-7">
                <div class="portfolio-info">
                    <h3>Specifications</h3>
                    <ul>
                        <li><strong>Width</strong>: 25mm To 425mm</li>
                        <li><strong>Length</strong>: 3660mm(3.66 MTR)</li>
                        <li><strong>Thickness</strong>: 10mm To 100mm</li>
                        <li><strong>Grade</strong>: 6082, 6061, 6063-T6</li>
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
                    <p>This Aluminium Flat Bar is available in grade 6063-T6, 6061-T6, 6082-T6. A grade that is known in the metal industry as a 'structural alloy' because of its high strength combined with excellent corrosion resistance. In addition, this lightweight aluminium bar is easy to machine, drill and cut. With the right equipment it can also be welded.</p>
                    <p> Popular fabrications for our flat bar include:</p>

                    <P>•  Internal fixtures</p>
                    <p>•  Shop fittings</p>
                    <p>•  Automobiles</p>
                    <p>•  Caravans </p>
                    <p>•  Machining parts</p>
                    <p>•  Frame building</p>
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
                                    font-family: Montserrat,sans-serif;">Width</td>

                                <td style="background-color: #D9DADA;
                                    line-height: 18px;
                                    color: black;
                                    font-size: 16px;
                                    transition: 0.4s;
                                    font-family: Montserrat,sans-serif;">25mm To 425mm</td>




                            </tr>

                            <tr>

                                <td rowspan="1" style="background-color: #1A53A0;
                                    line-height: 18px;
                                    color: white;
                                    font-size: 16px;
                                    transition: 0.4s;
                                    font-family: Montserrat,sans-serif;">Thickness</td>

                                <td style="background-color: #1A53A0;
                                    line-height: 18px;
                                    color: white;
                                    font-size: 16px;
                                    transition: 0.4s;
                                    font-family: Montserrat,sans-serif;">6mm To 100mm</td>




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
                                    font-family: Montserrat,sans-serif;">170 MPa</td>




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
                                    font-family: Montserrat,sans-serif;">260 MPa</td>




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
                                    font-family: Montserrat,sans-serif;">Density</td>

                                <td style="background-color: #1A53A0;
                                    line-height: 18px;
                                    color: white;
                                    font-size: 16px;
                                    transition: 0.4s;
                                    font-family: Montserrat,sans-serif;">2.70 g/cm³</td>




                            </tr>
                            <tr>

                                <td rowspan="1" style="background-color: #D9DADA;
                                    line-height: 18px;
                                    color: black;
                                    font-size: 16px;
                                    transition: 0.4s;
                                    font-family: Montserrat,sans-serif;">Melting Point</td>

                                <td style="background-color: #D9DADA;
                                    line-height: 18px;
                                    color: black;
                                    font-size: 16px;
                                    transition: 0.4s;
                                    font-family: Montserrat,sans-serif;">555 °C</td>




                            </tr>

                            <tr>

                                <td rowspan="1" style="background-color: #1A53A0;
                                    line-height: 18px;
                                    color: white;
                                    font-size: 16px;
                                    transition: 0.4s;
                                    font-family: Montserrat,sans-serif;">Thermal Expansion</td>

                                <td style="background-color: #1A53A0;
                                    line-height: 18px;
                                    color: white;
                                    font-size: 16px;
                                    transition: 0.4s;
                                    font-family: Montserrat,sans-serif;">24 x10^-6 /K</td>




                            </tr>
                            <tr>

                                <td rowspan="1" style="background-color: #D9DADA;
                                    line-height: 18px;
                                    color: black;
                                    font-size: 16px;
                                    transition: 0.4s;
                                    font-family: Montserrat,sans-serif;">Modulus of Elasticity</td>

                                <td style="background-color: #D9DADA;
                                    line-height: 18px;
                                    color: black;
                                    font-size: 16px;
                                    transition: 0.4s;
                                    font-family: Montserrat,sans-serif;">70 GPa</td>




                            </tr>

                            <tr>

                                <td rowspan="1" style="background-color: #1A53A0;
                                    line-height: 18px;
                                    color: white;
                                    font-size: 16px;
                                    transition: 0.4s;
                                    font-family: Montserrat,sans-serif;">Thermal Conductivity</td>

                                <td style="background-color: #1A53A0;
                                    line-height: 18px;
                                    color: white;
                                    font-size: 16px;
                                    transition: 0.4s;
                                    font-family: Montserrat,sans-serif;">180 W/m.K</td>




                            </tr>
                            <tr>

                                <td rowspan="1" style="background-color: #D9DADA;
                                    line-height: 18px;
                                    color: black;
                                    font-size: 16px;
                                    transition: 0.4s;
                                    font-family: Montserrat,sans-serif;">Electrical Resistivity</td>

                                <td style="background-color: #D9DADA;
                                    line-height: 18px;
                                    color: black;
                                    font-size: 16px;
                                    transition: 0.4s;
                                    font-family: Montserrat,sans-serif;">0.038 x10^-6 Ω .m</td>




                            </tr>

                            <tr>

                                <td rowspan="1" style="background-color: #1A53A0;
                                    line-height: 18px;
                                    color: white;
                                    font-size: 16px;
                                    transition: 0.4s;
                                    font-family: Montserrat,sans-serif;">Machinability</td>

                                <td style="background-color: #1A53A0;
                                    line-height: 18px;
                                    color: white;
                                    font-size: 16px;
                                    transition: 0.4s;
                                    font-family: Montserrat,sans-serif;">Average</td>




                            </tr>
                            <tr>

                                <td rowspan="1" style="background-color: #D9DADA;
                                    line-height: 18px;
                                    color: black;
                                    font-size: 16px;
                                    transition: 0.4s;
                                    font-family: Montserrat,sans-serif;">Workability - Cold</td>

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
                                    font-family: Montserrat,sans-serif;">Weldability - Gas</td>

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
                                    font-family: Montserrat,sans-serif;">Weldability - Arc</td>

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
                                    font-family: Montserrat,sans-serif;">Weldability - Resistance</td>

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
                                    font-family: Montserrat,sans-serif;border-bottom-left-radius: 21px;">Brazeability</td>

                                <td style="background-color: #D9DADA;
                                    line-height: 18px;
                                    color: black;
                                    font-size: 16px;
                                    transition: 0.4s;
                                    font-family: Montserrat,sans-serif;border-bottom-right-radius: 21px;">Good</td>




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