@extends('Front.layout.app')

@section('main-content')
    <!-- About -->
    <section id="about" class="about">
        <div class="container text-center">
            <div class="card-header">
                <h2>Tanzania Reading Associatio UK!</h2>
            </div>
            <p class="lead">At Tanzania Reading Berkshire Association (TA), we serve as a socio-economic and cultural support network for Tanzanians living in Reading and Berkshire. To work close with local authorities in order to instil cultural awareness in our children and an appreciation of our cultural values and traditions. To take an active role in sharing Tanzania Culture within our wider communities, and to function as the official mouthpiece of the members of Tanzania Reading Berkshire Association (TA) We’re also looking to promote initiatives to help those who need it most. With an array of volunteer projects, we welcome you to join our endeavors aimed at making the County a better place. Read on and contact us to learn how you can become part of the Association..</p>

        </div>

        <!-- /.container -->
    </section>

    <!-- Leaders -->
    <section id="leader" class="services bg-primary text-white">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 mx-auto">
                    <h2>Our Leaders</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                  <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-cloud fa-stack-1x text-primary"></i>
                  </span>
                                <h4>
                                    <strong>Chairman</strong>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="#" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                  <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-compass fa-stack-1x text-primary"></i>
                  </span>
                                <h4>
                                    <strong>V/Chairman</strong>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="#" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                  <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-flask fa-stack-1x text-primary"></i>
                  </span>
                                <h4>
                                    <strong>Secretary</strong>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="#" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                  <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-shield fa-stack-1x text-primary"></i>
                  </span>
                                <h4>
                                    <strong>Treasurer</strong>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="#" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    {{--News --}}
    <section id="news" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 mx-auto text-center">
                    <div class="card-header">
                        <h3> Our News</h3>
                    </div>
                    <hr class="small">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                            <div class="post-preview">
                                <a href="post.html">
                                    <h2 class="post-title">
                                        Man must explore, and this is exploration at its greatest
                                    </h2>
                                    <h3 class="post-subtitle">
                                        Problems look mighty small from 150 miles up
                                    </h3>
                                </a>
                                <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on September 24, 2014</p>
                            </div>
                            <hr>
                            <div class="post-preview">
                                <a href="post.html">
                                    <h2 class="post-title">
                                        I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.
                                    </h2>
                                </a>
                                <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on September 18, 2014</p>
                            </div>
                            <hr>
                            <div class="post-preview">
                                <a href="post.html">
                                    <h2 class="post-title">
                                        Science has not yet mastered prophecy
                                    </h2>
                                    <h3 class="post-subtitle">
                                        We predict too much for the next year and yet far too little for the next ten.
                                    </h3>
                                </a>
                                <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on August 24, 2014</p>
                            </div>
                            <hr>
                            <div class="post-preview">
                                <a href="post.html">
                                    <h2 class="post-title">
                                        Failure is not an option
                                    </h2>
                                    <h3 class="post-subtitle">
                                        Many say exploration is part of our destiny, but it’s actually our duty to future generations.
                                    </h3>
                                </a>
                                <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on July 8, 2014</p>
                            </div>
                            <hr>
                            <!-- Pager -->
                            <ul class="pager">
                                <li class="next">
                                    <a href="#">Older Posts &rarr;</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                    <a href="#" class="btn btn-dark">View More Items</a>
                </div>

                <div class="col-md-4 mx-auto text-center">

                    <div class="card text-center">
                        <div class="card-header">
                          <h3> HABARI ZA HIVI PUNDE</h3>
                        </div>
                        <div class="card-block">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                            </ul>
                        </div>

                    </div>

                </div>
                <!-- /.col-lg-8 -->
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->
    </section>

    {{--Gallery --}}

    <section id="gallery" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto text-center">
                    <div class="card-header">
                        <h3> Gallery</h3>
                    </div>
                    <hr class="small">
                    <div class="row">
                        <div class="col-lg-12 col-lg-offset-2 col-md-12 col-md-offset-1">
                            <div class="post-preview">

                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active">
                                            <img class="d-block img-fluid" src="https://img1.wsimg.com/isteam/ip/9d307cf4-8047-4dfa-b245-e24c3da385ca/34866ad8-b843-4b3e-904f-44174ce77e00.JPG/:/rs=w:400,h:500,cg:true,m/cr=w:800,h:500,a:cc" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block img-fluid" src="https://img1.wsimg.com/isteam/ip/9d307cf4-8047-4dfa-b245-e24c3da385ca/9df2ee64-7e58-484c-933c-e7632bcb818d.JPG/:/rs=w:400,h:500,cg:true,m/cr=w:800,h:500,a:cc" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block img-fluid" src="https://img1.wsimg.com/isteam/ip/9d307cf4-8047-4dfa-b245-e24c3da385ca/fa3ba594-ae0d-4b00-8c9c-8a0185d3b10b.JPG/:/rs=w:400,h:500,cg:true,m/cr=w:800,h:500,a:cc" alt="Third slide">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>

                            </div>

                                <hr>
                            </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>


    <section id="membership" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto text-center">
                    <div class="card-header">
                        <h3> Membership </h3>
                    </div>
                    <hr class="small">
                    <div class="row">
                        <div class="col-lg-6 col-lg-offset-2 col-md-12 col-md-offset-1">
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur ducimus error pariatur ut! Explicabo minus praesentium ullam voluptatibus! Ab aliquid dolores enim iure maiores modi qui rem ut vero voluptate?

                        </div>

                        <div class="col-lg-6 col-lg-offset-2 col-md-12 col-md-offset-1">
                            <form>
                                 <div class="form-group">
                                     <label for="example-text-input" class="col-4 col-form-label">Your Name</label>
                                     <div class="col-10">
                                         <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
                                     </div>
                                 </div>

                                <label for="example-text-input" class="col-4 col-form-label">Your Email</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
                                </div>

                                <label for="example-text-input" class="col-4 col-form-label">Your Phone</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
                                </div>
                                <div class="form-group">

                                    <label for="example-text-input" class="col-4 col-form-label">Your Address</label>
                                    <div class="col-10">
                                        <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleSelect1">Example select</label>
                                    <select class="form-control" id="exampleSelect1">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <label for="example-text-input" class="col-4 col-form-label">Bio</label>
                                <div class="col-10">
                                    <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>


    <!-- Map -->
    <section id="contact" class="map">

            <div class="row">
                <div class="col-lg-10 mx-auto text-center">
                    <h2>Our Office Address - Reading</h2>
                    <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>
                    <br/>
                    <small>
                        <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
                    </small>
                </div>
            </div>

    </section>

@endsection


{{--@section('bg-img',  asset('front/img/bg.jpg'))--}}
{{--@section('title',    asset('TANZANIA ASSOCIATION READING UK '))--}}
{{--@section('sub-title',  asset('Karibu Kwenye Jumuiya Ya Watanzania Reading UK '))--}}