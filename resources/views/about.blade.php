@extends('/layout.mainlayout')

@section('title', 'Home')

@section('content')

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg/background.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-text text-center">
                        <h2>About Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### About Area Start ##### -->
    <section class="about-area section-padding-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>Who We Are And What We Do?</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h6 class="sub-heading pb-5">{{ $content->prim_about }}</h6>

                    <p class="text-center">{{ $content->sec_about }}</p>
                </div>
            </div>



            <div class="row">
                <div class="col-12">
                    <img class="mb-70" src="img/bg-img/.png" alt="">
                    <p class="text-center">VISI PERUSAHAAN :

                        {{ $content->visi }}

                    </p>

                    <p class="text-center">


                        MISI PERUSAHAAN :

                        {{ $content->misi }}
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### About Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
    <!--<div class="contact-area section-padding-0-80">-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="col-12">-->
    <!--                <div class="section-heading">-->
    <!--                    <h3>Contact Us</h3>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->

    <!--        <div class="row">-->
    <!--            <div class="col-12">-->
    <!--                <div class="contact-form-area">-->
    <!--                    <form action="#" method="post">-->
    <!--                        <div class="row">-->
    <!--                            <div class="col-12 col-lg-6">-->
    <!--                                <input type="text" class="form-control" id="name" placeholder="Name">-->
    <!--                            </div>-->
    <!--                            <div class="col-12 col-lg-6">-->
    <!--                                <input type="email" class="form-control" id="email" placeholder="E-mail">-->
    <!--                            </div>-->
    <!--                            <div class="col-12">-->
    <!--                                <input type="text" class="form-control" id="subject" placeholder="Subject">-->
    <!--                            </div>-->
    <!--                            <div class="col-12">-->
    <!--                                <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>-->
    <!--                            </div>-->
    <!--                            <div class="col-12 text-center">-->
    <!--                                <button class="btn delicious-btn mt-30" type="submit">Send</button>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </form>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!-- ##### Contact Area End ##### -->

@endsection
