 @extends('layouts.frontend')

@section('content')
    <!--================ Start Home Banner Area =================-->
    <section class="home_banner_area">
        <div class="banner_inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner_content text-center">
                            <p class="text-uppercase">
                                Best Company in PhnomPenh
                            </p>
                            <h2 class="text-uppercase mt-4 mb-5">
                               Phone Company in PhnomPenh
                            </h2>
                            <div>
                                <a href="#" class="primary-btn2 mb-3 mb-sm-0">learn more</a>
                                <a href="#" class="primary-btn ml-sm-3 ml-0">see company</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Home Banner Area =================-->


    <!--================ Start Popular Courses Area =================-->
    <div class="popular_courses">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="main_title">
                        <br><br>
                        <h2 class="mb-3">All Company</h2>
                        <p>
                            We are an established mobile phone shop in Cambodia
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- single course -->
                <div class="col-lg-12">
                    <div class="owl-carousel active_course">
                        <div class="single_course">
                            <div class="course_head">
                                <img class="img-fluid" src="https://z-p3-scontent.fpnh5-3.fna.fbcdn.net/v/t1.0-9/66210546_2226957437420430_1347794152330362880_o.jpg?_nc_cat=104&_nc_sid=e3f864&_nc_eui2=AeEic5JPdo-JAUekctDZhdMBwHVa47x7GhLAdVrjvHsaEkSIAUrHupUaVMraJioimLiqEZVDJzOZFTBobzQe4bbF&_nc_ohc=4un33VcF3RgAX9IS_cv&_nc_ht=z-p3-scontent.fpnh5-3.fna&oh=9482df3d0889d6422602971426c10b38&oe=5F5C4EC9" alt="" />
                            </div>
                            <div class="course_content">
                                <h4 class="mb-3">
                                    <a href="course-details.html">Nika Phone Shop</a>
                                </h4>
                                <p>Phone: 095 735 151</p>
                                <p>Email: Nika@Nika.Com.Kh</p>
                            </div>
                        </div>

                        <div class="single_course">
                            <div class="course_head">
                                <img class="img-fluid" src="https://z-p3-scontent.fpnh5-3.fna.fbcdn.net/v/t1.0-9/90060634_2880109842036232_1062408839824932864_n.png?_nc_cat=103&_nc_sid=e3f864&_nc_eui2=AeGI7iWHeqF8MtFq6PindRrESPkF23dze2dI-QXbd3N7Z5dFhCOBray2oLmzqaqw7ji3gGlvs76-4V5_WVCZPI2c&_nc_ohc=zojHfo4Oz3UAX9Ib5f3&_nc_ht=z-p3-scontent.fpnh5-3.fna&oh=5f32e64f6cc0fd16c76cc187d70792e8&oe=5F69BA36" alt="" />
                            </div>
                            <div class="course_content">
                                <h4 class="mb-3">
                                    <a href="course-details.html">Sokly Phone Shop</a>
                                </h4>
                                <p>Phone: 023 216 725</p>
                                <p>Email: info@soklyphone.com</p>
                            </div>
                        </div>

                        <div class="single_course">
                            <div class="course_head">
                                <img class="img-fluid" src="https://z-p3-scontent.fpnh5-3.fna.fbcdn.net/v/t1.0-9/109654036_880657919124799_8816343855489615783_o.jpg?_nc_cat=104&_nc_sid=e3f864&_nc_eui2=AeGzOKvr11nnSNM1ImpSAxgjQPXdGjDEc4JA9d0aMMRzgqirlSJk3D6eMe0jxD8dM55wHogAEtcS6N66s_RN7IK5&_nc_ohc=3UJySpM_5UIAX-Qg-qO&_nc_ht=z-p3-scontent.fpnh5-3.fna&oh=d57ca69c63cb2e794044336e5066aae6&oe=5F679CC2" alt="" />
                            </div>
                            <div class="course_content">
                                <h4 class="mb-3">
                                    <a href="course-details.html">KoungY</a>
                                </h4>
                                <p>Phone: 012 987 999</p>
                                <p>Email: info@koungy.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================ End Popular Courses Area =================-->
@endsection
