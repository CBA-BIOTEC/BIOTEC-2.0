@extends('plantillas.plantilla')

@section('content')
<div class="container-fluid">
  <section class="section">
    <div id="carouselExampleCaptions" class="carousel slide " data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/bio/bio.png" class="d-block w-100 rounded" alt="...">
          <div class="carousel-caption d-none d-md-block"></div>
        </div>
        <div class="carousel-item">
          <img src="images/bio/biotec5.jpg" class="d-block w-100 rounded" alt="...">
          <div class="carousel-caption d-none d-md-block"></div>
        </div>
        <div class="carousel-item">
          <img src="images/bio/biotec4.jpg" class="d-block w-100 rounded" alt="...">
          <div class="carousel-caption d-none d-md-block"></div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>

<!-----PAGE CONTENT---->

  <div class="container py-5 my-1">
    <!-- For Demo Purpose -->
    <header class="text-center">
      <h1 class="display-3 font-weight-bold">BIO-TEC</h1>
      <p class="font-calibri text-muted mb-0">A project by apprentices, for apprentices.</p>
      <p class="font-calibri">Made by:<a href="http://senabiotecnologia.blogspot.com/" class="text-muted">
          <u>Sena</u></a>
      </p>
    </header>

    <!-- DEMO 1 -->
    <div class="py-5" id="WTIS">
    <div class="row g-0 align-items-center justify-content-center">
    <center>
      <h2>BIOTECHNOLOGY</h2>
        <p class="font-calibri text-muted mb-0 p-2 mb-5">In its most general conception, biotechnology refers to the use of living organisms or their subcellular components for the production of substances, development of processes or creation of services. Biotechnology includes several branches such as environmental, human, plant, industrial and animal. In this article we present some aspects of animal biotechnology, particularly those derived from the knowledge and manipulation of genetic material.
        </p>
      </center>
        <br> 
    </div>

      <div class="row">
        <!-- BIOTECNOLOGÍA VEGETAL-->
        <div class="col-lg-6 mb-3 mb-lg-0 mb-sm-2 mt-4">
        <a class="text-light" data-bs-toggle="modal" href="#Modalvegetal">
          <div class="hover hover-1 text-white rounded"><img src="images/bio/vegetal2.jpg" alt="">
            <div class="hover-1-content px-5 py-4">
            <br>  
              <h3 class="hover-1-title text-uppercase mb-0"> <span class="font-weight-light fw-bold">VEGETAL BIOTECHNOLOGY</h3>
              <p class="hover-1-description font-weight-light mb-0 fw-semibold"> Alteration of various genetic characteristics of some plants.
              <br>
              </p>
            </div>
          </div>
        </a>
  </div>

      <!-- BIOTECNOLOGIA ANIMAL--->
      <div class="col-lg-6 mt-4">
        <a class="vegetal-link text-light" data-bs-toggle="modal" href="#Modalanimal">
        <div class="hover hover-1 text-white rounded"><img src="images/bio/animal1.jpg" alt="">
          <div class="hover-1-content px-5 py-2 mt-4 ">
            <h3 class="hover-1-title text-uppercase mb-0"> <span class="font-weight-light fw-bold">ANIMAL BIOTECHNOLOGY</h3>
            <p class="hover-1-description font-weight-light mb-0 fw-semibold">Application of science in order to provide goods and services for the well-being of the animal and human population.</p>
        </a>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="AREAS">
  <br>
    <center>
      <h3 class="fw-semibold pb-3">BIOTECHNOLOGY AREAS</h3>
        <br>
        <p class="pb-5">
        Due to the vast application of Biotechnology in various fields like medical, agriculture, dairy, textile, food, and many more industries, Biotechnology can be classified using a color code. Paweł Kafarski, who is the Faculty of Chemistry in the Department of Bioorganic Chemistry in 2012 classifies Biotechnology by using ten different color codes.
        </p>
        <br>
    </center>
      <div class="row">
        <div class="col-lg-4 mb-3 mb-lg-0 col-md-6">
          <div class="hover hover-3 text-white rounded"><img src="images/bio/redb.webp" alt="">
            <div class="hover-overlay"></div>
            <div class="hover-3-content px-5 py-4">
              <!--Red-->
              <div class="container">
              <h3 class="hover-3-title text-uppercase font-bold mb-2">Red biotechnology</h3>
              <p class="hover-3-description small mb-0">Refers to the use of bio-organisms in medicine, such as in the creation of antibiotics. It is the sanitary branch of biotechnology.</p>
              </div>
            </div>
          </div>
        </div>

        
      <div class="col-lg-4 mb-3 mb-lg-0 col-md-6 col-md-6">
        <div class="hover hover-3 text-white rounded"><img src="images/bio/biotec.png" alt="">
          <div class="hover-overlay"></div>
          <div class="hover-3-content px-5 py-4">
            <div class="container">
            <h3 class="hover-3-title text-uppercase font-weight-bold mb-1">Green biotechnology </h3>
            <p class="hover-3-description small  mb-0">Applied to agricultural processes. For example, development of products to combat pests.</p>
            </div>
          </div>
        </div>
      </div>
       
      <div class="col-lg-4 mb-3 mb-lg-0 col-md-6">
        <div class="hover hover-3 text-white rounded"><img src="images/bio/whitebio.jpg" alt="">
          <div class="hover-overlay"></div>
          <div class="hover-3-content px-5 py-4">
            <div class="container">
            <h3 class="hover-3-title text-uppercase font-weight-bold mb-1">White biotechnology</h3>
            <p class="hover-3-description small  mb-0">Is biotechnology applied to industrial processes. For example, the development of biofuels.</p>
            </div>
          </div>
        </div>
      </div>
    </div>


      <div class="row pt-5">
        <div class="col-lg-4 mb-3 mb-lg-0 col-md-6">
          <div class="hover hover-3 text-white rounded"><img src="images/bio/bluebio.jpeg" alt="">
            <div class="hover-overlay"></div>
            <div class="hover-3-content px-5 py-4">
              <div class="container">
              <h3 class="hover-3-title text-uppercase font-weight-bold mb-1">Blue biotechnology </h3>
              <p class="hover-3-description small mb-0">For processes related to the sea. Development of marine resources for the creation of products for aquaculture, for example.</p>

              </div>
            </div>
          </div>
        </div>


      <div class="col-lg-4 mb-3 mb-lg-0 col-md-6">
        <div class="hover hover-3 text-white rounded"><img src="images/bio/greybio.jpg" alt="">
          <div class="hover-overlay"></div>
          <div class="hover-3-content px-5 py-4">
            <div class="container">
            <h3 class="hover-3-title text-uppercase font-weight-bold mb-1">Grey biotechnology</h3>
            <p class="hover-3-description small  mb-0"> For the search for solutions to environmental problems. Seeks the conservation and recovery of ecosystems</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-3 mb-lg-0 col-md-6">
        <div class="hover hover-3 text-white rounded"><img src="images/bio/goldbio.jpg" alt="">
          <div class="hover-overlay"></div>
          <div class="hover-3-content px-5 py-4">
            <div class="container">
            <h3 class="hover-3-title text-uppercase font-weight-bold mb-1">Gold Biotechnology</h3>
            <p class="hover-3-description small mb-0">Is now known as Bioinformatics, deals with all types of computational biology techniques that include computer science, chip technology, Nanobiotechnology, etc.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- IMAGE CONTET-->
  <section class="showcase mx-3">
    <div class="container-fluid my-2 align-items-center justify-content-center">
      <div class="row g-0 align-items-center justify-content-center">
        <div class="col-lg-6 col-md-6 order-lg-6 text-white showcase-img" style="background-image: url('images/bio/concepto.png')"></div>
        <div class="col-lg-6 col-md-12 my-3 mx-1 showcase-text">
          <h2>Concepts</h2>
          <p class="lead mb-0">General concepts on biotechnology will be found, focusing on animal and vegetal biotechnology.</p>
        </div>
      </div>
      <div class="row g-0 align-items-center justify-content-center">
        <div class="col-lg-6 col-md-12 order-lg-2 text-white showcase-img" style="background-image: url('images/bio/aa.png')"></div>
        <div class="col-lg-6 col-md-12 order-lg-1 mx-1 my-3 showcase-text">
          <h2>Activities</h2>
          <p class="lead mb-0">You will find activities related to English language and biotechnology, supporting knowledge of their career and professional life. </p>
        </div>
      </div>
    </div>
  </section>

  <!------------MODALS--VEGETAL--------------->
  <div class="modal modal fade" id="Modalvegetal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="btn-close" data-bs-dismiss="modal"></div>
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-12">
                <div class="modal-body">
                  <!-- Project details-->
                  <center>
                  <div class="py-2 mb-4">
                    <div class="row">
                      <!-- DEMO 5 Item-->
                      <div class="col-lg-12 mb-4 mb-lg-0">
                        <div class="hover hover-5 text-white rounded"><img src="images/bio/biotec6.jpg" alt="">
                          <div class="hover-overlay"></div>
                          <div class="hover-5-content">
                            <h3 class="hover-5-title text-uppercase font-weight-light mb-0"><span>VEGETAL</span><strong class="font-weight-bold text-white"> BIOTECHNOLOGY</strong></h3>
                          </div>
                        </div>
                      </div>
                  </center>

                    <h4 class=" fw-semibold mt-3">What is it?</h4>
                    </main>
                    <p class="my-2">Vegetal biotechnology is that science that is responsible for developing new and diverse varieties of traits in crops and plants. Thus making it possible to study the various genes that make up a plant, and the characteristics they provide. Furthermore, it allows these traits to be transferred from one plant to another, achieving genetic improvement.</p>
                    <br>
                    <a href="/links" class="font-italic text-muted mb-4">See more...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
  </div>

  <!------------MODALS--ANIMALS--------------->
  <div class="modal modal fade" id="Modalanimal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="btn-close" data-bs-dismiss="modal"></i></div>
          <div class="container-fluid">
            <div class="row justify-content-center">
              <div class="col-lg-12">
                <div class="modal-body">
                  <!-- Project details-->
                    <center>
                    <div class="py-2 mb-4">
                      <div class="row">
                        <!-- DEMO 5 Item-->
                        <div class="col-lg-12 mb-4 mb-lg-0">
                          <div class="hover hover-5 text-white rounded"><img src="images/bio/biotec5.jpeg" alt="">
                            <div class="hover-overlay"></div>
                            <div class="hover-5-content">
                              <h3 class="hover-5-title text-uppercase font-weight-light mb-0"><span>ANIMAL</span><strong class="font-weight-bold text-white"> BIOTECHNOLOGY</strong></h3>
                            </div>
                          </div>
                        </div>
                    </center>
                                    
                      <h4 class=" fw-semibold">What is it?</h4>
                      <p class="my-2">It is defined as the application of science and engineering to the processing or production of products to provide goods and services for the welfare of the human population, although this may extend to animal welfare in general. Animal biotechnology includes the use of livestock (e.g., cows, goats, sheep, pigs), poultry, fish, insects, pet animals, and laboratory animals.</p>
                      <br>
                      <a href="/links" class="font-italic text-muted mb-4">See more...</a>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
</div>
   
 
<!-- /#page-content-wrapper -->


@endsection
  