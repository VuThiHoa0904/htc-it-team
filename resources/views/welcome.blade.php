 @yield('layouts.header')
 <!-- About Us Start -->
    <section id="aboutus" class="aboutus">
        <div class="container">
            <div class="row">
                <div class="col-sm-12"><span class="section-number">2</span>
                    <h2 class="section-heading">Giới Thiệu...</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="about-box">
                    <div class="col-md-7">
                        {!! setting('home.about') !!}
                        <a href="#services" class="btn btn-hero smooth-scrool">Dịch vụ của chúng tôi</a></div>
                    <div class="col-sm-5">
                        <div class="about-image"><img src="{{asset('image/about-us.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our counters -->
    <div class="counters">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="counter"><i class="fa fa-clock-o"></i>
                        <div class="number animateNumber"><span>{{setting('home.hours')}}</span></div>
                        <p>Số giờ làm việc</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="counter"><i class="fa fa-user-circle-o"></i>
                        <div class="number animateNumber"><span>{{setting('home.customers')}}</span></div>
                        <p>Khách hàng</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="counter"><i class="fa fa-check-circle-o"></i>
                        <div class="number animateNumber"><span>{{setting('home.done_projects')}}</span></div>
                        <p>Dự án đã hoàn thành</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="counter"><i class="fa fa-thumbs-o-up"></i>
                        <div class="number animateNumber"><span>{{setting('home.Percent_ratio_customers')}}</span></div>
                        <p>Tỉ lệ Khách hàng hài lòng</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our counters End -->
    <!-- Services Start -->
    <section id="services" class="services">
        <div class="container">
            <div class="row">
                <div class="col-sm-12"><span class="section-number">3</span>
                    <h2 class="section-heading">Dịch Vụ Của Chúng Tôi...</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach($services as $item)
                <div class="col-md-4 col-sm-6">
                    <div class="icon-box">
                        <div class="icon-left">
                            <i class="{{$item->icon}}"></i>
                        </div>
                        <div class="icon-content">
                            <h4 class="title">{{$item->title}}</h4>
                            <p>{{$item->description}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Services End -->
    <!-- Testimonials Wrapper Start -->
    <section id="testimonial" class="testimonials-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12"><span class="section-number">4</span>
                    <h2 class="section-heading">Feedback của Khách hàng...</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div id="testimonials" class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="testimonial">
                            <h4 class="author">PHÍ VINH CÔNG</h4>
                            <h6 class="title">Nhà triết học</h6>
                            <div class="content thumb"><img class="img-circle" alt=""
                                                            src="http://sbtechnosoft.com/digitalseo/images/testimonials1.png">
                            </div>
                            <p><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque est quasi, quas ipsam,
                                    expedita placeat facilis odio illo ex accusantium eaque.</em></p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial">
                            <h4 class="author">NÔNG VĂN KHÁNH</h4>
                            <h6 class="title">Giáo sư</h6>
                            <div class="content thumb"><img class="img-circle" alt=""
                                                            src="http://sbtechnosoft.com/digitalseo/images/testimonials2.png">
                            </div>
                            <p><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque est quasi, quas ipsam,
                                    expedita placeat facilis odio illo ex accusantium eaque.</em></p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial">
                            <h4 class="author">DƯƠNG QUANG ĐỊNH</h4>
                            <h6 class="title">Nhà sử học</h6>
                            <div class="content thumb"><img class="img-circle" alt=""
                                                            src="http://sbtechnosoft.com/digitalseo/images/testimonials3.png">
                            </div>
                            <p><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque est quasi, quas ipsam,
                                    expedita placeat facilis odio illo ex accusantium eaque.</em></p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial">
                            <h4 class="author">Person Name</h4>
                            <h6 class="title">Designation</h6>
                            <div class="content thumb"><img class="img-circle" alt=""
                                                            src="http://sbtechnosoft.com/digitalseo/images/testimonials2.png">
                            </div>
                            <p><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque est quasi, quas ipsam,
                                    expedita placeat facilis odio illo ex accusantium eaque.</em></p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial">
                            <h4 class="author">Person Name</h4>
                            <h6 class="title">Designation</h6>
                            <div class="content thumb"><img class="img-circle" alt=""
                                                            src="http://sbtechnosoft.com/digitalseo/images/testimonials1.png">
                            </div>
                            <p><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque est quasi, quas ipsam,
                                    expedita placeat facilis odio illo ex accusantium eaque.</em></p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial">
                            <h4 class="author">Person Name</h4>
                            <h6 class="title">Designation</h6>
                            <div class="content thumb"><img class="img-circle" alt=""
                                                            src="http://sbtechnosoft.com/digitalseo/images/testimonials3.png">
                            </div>
                            <p><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque est quasi, quas ipsam,
                                    expedita placeat facilis odio illo ex accusantium eaque.</em></p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial">
                            <h4 class="author">Person Name</h4>
                            <h6 class="title">Designation</h6>
                            <div class="content thumb"><img class="img-circle" alt=""
                                                            src="http://sbtechnosoft.com/digitalseo/images/testimonials1.png">
                            </div>
                            <p><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque est quasi, quas ipsam,
                                    expedita placeat facilis odio illo ex accusantium eaque.</em></p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial">
                            <h4 class="author">Person Name</h4>
                            <h6 class="title">Designation</h6>
                            <div class="content thumb"><img class="img-circle" alt=""
                                                            src="http://sbtechnosoft.com/digitalseo/images/testimonials2.png">
                            </div>
                            <p><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque est quasi, quas ipsam,
                                    expedita placeat facilis odio illo ex accusantium eaque.</em></p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial">
                            <h4 class="author">Person Name</h4>
                            <h6 class="title">Designation</h6>
                            <div class="content thumb"><img class="img-circle" alt=""
                                                            src="http://sbtechnosoft.com/digitalseo/images/testimonials3.png">
                            </div>
                            <p><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque est quasi, quas ipsam,
                                    expedita placeat facilis odio illo ex accusantium eaque.</em></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials Wrapper End -->
    <!-- Portfolio Start -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-sm-12"><span class="section-number">5</span>
                    <h2 class="section-heading">Lĩnh vực phát triển...</h2>
                </div>
            </div>
        </div>
        <!-- Portfolio Filters -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    @foreach($products as $item)
                        {!! $item->description !!}
                    @endforeach
                    <ul class="portfolio-filter">
                        <li class="filter active" data-filter="*">All</li>
                        @foreach($languages as $item)
                            <li class="filter" data-filter=".{{$item->data_filter}}">{{$item->name}}</li>
                        @endforeach
                    </ul>
                    <!-- /Portfolio Filters -->
                    <!-- Portfolio Wrap -->
                    <div class="row portfolio-container">
                        <!-- single portfolio -->
                        <div class="col-md-4 col-sm-6 col-xs-12 work laravel"><a href="#work_id-1"> <img
                                        src="http://sbtechnosoft.com/digitalseo/images/gallery-img1.jpg" alt="">
                                <div class="work-inner">
                                    <div class="work-info"><i class="fa fa-search"></i></div>
                                </div>
                            </a>
                            <div id="work_id-1" class="mfp-hide work-popup"><img
                                        src="http://sbtechnosoft.com/digitalseo/images/gallery-img1.jpg" alt=""></div>
                        </div>
                        <!-- single portfolio -->
                        <div class="col-md-4 col-sm-6 col-xs-12 work laravel"><a href="#work_id-2"> <img
                                        src="http://sbtechnosoft.com/digitalseo/images/gallery-img2.jpg" alt="">
                                <div class="work-inner">
                                    <div class="work-info"><i class="fa fa-search"></i></div>
                                </div>
                            </a>
                            <div id="work_id-2" class="mfp-hide work-popup"><img
                                        src="http://sbtechnosoft.com/digitalseo/images/gallery-img2.jpg" alt=""></div>
                        </div>
                        <!-- single portfolio -->
                        <div class="col-md-4 col-sm-6 col-xs-12 work jquery"><a href="#work_id-3"> <img
                                        src="http://sbtechnosoft.com/digitalseo/images/gallery-img3.jpg" alt="">
                                <div class="work-inner">
                                    <div class="work-info"><i class="fa fa-search"></i></div>
                                </div>
                            </a>
                            <div id="work_id-3" class="mfp-hide work-popup"><img
                                        src="http://sbtechnosoft.com/digitalseo/images/gallery-img3.jpg" alt=""></div>
                        </div>
                        <!-- single portfolio -->
                        <div class="col-md-4 col-sm-6 col-xs-12 work html"><a href="#work_id-4"> <img
                                        src="http://sbtechnosoft.com/digitalseo/images/gallery-img4.jpg" alt="">
                                <div class="work-inner">
                                    <div class="work-info"><i class="fa fa-search"></i></div>
                                </div>
                            </a>
                            <div id="work_id-4" class="mfp-hide work-popup"><img
                                        src="http://sbtechnosoft.com/digitalseo/images/gallery-img4.jpg" alt=""></div>
                        </div>
                        <!-- single portfolio -->
                        <div class="col-md-4 col-sm-6 col-xs-12 work html"><a href="#work_id-5"> <img
                                        src="http://sbtechnosoft.com/digitalseo/images/gallery-img5.jpg" alt="">
                                <div class="work-inner">
                                    <div class="work-info"><i class="fa fa-search"></i></div>
                                </div>
                            </a>
                            <div id="work_id-5" class="mfp-hide work-popup"><img
                                        src="http://sbtechnosoft.com/digitalseo/images/gallery-img5.jpg" alt=""></div>
                        </div>
                        <!-- single portfolio -->
                        <div class="col-md-4 col-sm-6 col-xs-12 work py"><a href="#work_id-6"> <img
                                        src="http://sbtechnosoft.com/digitalseo/images/gallery-img6.jpg" alt="">
                                <div class="work-inner">
                                    <div class="work-info"><i class="fa fa-search"></i></div>
                                </div>
                            </a>
                            <div id="work_id-6" class="mfp-hide work-popup"><img
                                        src="http://sbtechnosoft.com/digitalseo/images/gallery-img6.jpg" alt=""></div>
                        </div>
                        <!-- single portfolio -->
                        <div class="col-md-4 col-sm-6 col-xs-12 work bootstrap"><a href="#work_id-7"> <img
                                        src="http://sbtechnosoft.com/digitalseo/images/gallery-img3.jpg" alt="">
                                <div class="work-inner">
                                    <div class="work-info"><i class="fa fa-search"></i></div>
                                </div>
                            </a>
                            <div id="work_id-7" class="mfp-hide work-popup"><img
                                        src="http://sbtechnosoft.com/digitalseo/images/gallery-img3.jpg" alt=""></div>
                        </div>
                        <!-- single portfolio -->
                        <div class="col-md-4 col-sm-6 col-xs-12 work py"><a href="#work_id-8"> <img
                                        src="http://sbtechnosoft.com/digitalseo/images/gallery-img1.jpg" alt="">
                                <div class="work-inner">
                                    <div class="work-info"><i class="fa fa-search"></i></div>
                                </div>
                            </a>
                            <div id="work_id-8" class="mfp-hide work-popup"><img
                                        src="http://sbtechnosoft.com/digitalseo/images/gallery-img1.jpg" alt=""></div>
                        </div>
                        <!-- single portfolio -->
                        <div class="col-md-4 col-sm-6 col-xs-12 work html"><a href="#work_id-9"> <img
                                        src="http://sbtechnosoft.com/digitalseo/images/gallery-img2.jpg" alt="">
                                <div class="work-inner">
                                    <div class="work-info"><i class="fa fa-search"></i></div>
                                </div>
                            </a>
                            <div id="work_id-9" class="mfp-hide work-popup"><img
                                        src="http://sbtechnosoft.com/digitalseo/images/gallery-img2.jpg" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Portfolio Wrap -->
    </section>
    <!-- Portfolio End -->
    <!-- Call to action Start -->
    <div class="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-8">
                    <div class="call-to-action-left">
                        <h3>Tạo website của bạn ngay bây giờ?</h3>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4"><a href="#contactus" class="smoth-scroll btn btn-hero pull-right">Liên hệ</a></div>
            </div>
        </div>
    </div>
    <!-- Call to action End -->
    <!-- Our Team Start -->
    <section id="our-team" class="our-team">
        <div class="container">
            <div class="row">
                <div class="col-sm-12"><span class="section-number">6</span>
                    <h2 class="section-heading">Đội ngũ của chúng tôi...</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-team-item">
                        <div class="team-image"><a href="#"><img
                                        src="http://sbtechnosoft.com/digitalseo/images/out-team1.jpg" alt=""></a></div>
                        <div class="team-content">
                            <h3><a href="#">Robin Williams</a></h3>
                            <span class="designation">SEO Analyst</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque est quasi, quas ipsam,
                                expedita placeat facilis odio illo eaque.</p>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-team-item">
                        <div class="team-image"><a href="#"><img
                                        src="http://sbtechnosoft.com/digitalseo/images/out-team2.jpg" alt=""></a></div>
                        <div class="team-content">
                            <h3><a href="#">Dave Young</a></h3>
                            <span class="designation">SEO Analyst</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque est quasi, quas ipsam,
                                expedita placeat facilis odio illo eaque.</p>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-team-item">
                        <div class="team-image"><a href="#"><img
                                        src="http://sbtechnosoft.com/digitalseo/images/out-team3.jpg" alt=""></a></div>
                        <div class="team-content">
                            <h3><a href="#">Mary Williams</a></h3>
                            <span class="designation">SEO Analyst</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque est quasi, quas ipsam,
                                expedita placeat facilis odio illo eaque.</p>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-team-item">
                        <div class="team-image"><a href="#"><img
                                        src="http://sbtechnosoft.com/digitalseo/images/out-team4.jpg" alt=""></a></div>
                        <div class="team-content">
                            <h3><a href="#">Robin Williams</a></h3>
                            <span class="designation">Ruby Williams</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque est quasi, quas ipsam,
                                expedita placeat facilis odio illo eaque.</p>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Team End -->
    <!-- Pricing Table Start -->
    <section id="pricing" class="pricing-table-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12"><span class="section-number">7</span>
                    <h2 class="section-heading">Giá thành...</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="pricing-table">
                    <div class="col-md-4 col-sm-6">
                        <div class="price-content-wrap">
                            <div class="plan-name">
                                <p class="price-title mr-btm-48">Website Giới Thiệu Doanh Nghiệp</p>
                            </div>
                            <div class="plan-price">
                                <h4><span>$</span> 99</h4>
                                <span class="duration">All Taxes</span></div>
                            <ul class="price-details">
                                <li><strong>Full</strong> Access</li>
                                <li>Source Files</li>
                                <li><strong>Unlimited</strong> Users</li>
                                <li><strong>150</strong> Domains</li>
                                <li><strong>430 Email</strong> Accounts</li>
                                <li>Automatic Cloud Backups</li>
                            </ul>
                            <a href="#" class="btn mian-btn price-btn">Liên Hệ</a></div>
                    </div>
                    <div class="col-md-4 col-sm-6 space">
                        <div class="price-content-wrap features-price">
                            <div class="plan-name">
                                <p class="price-title mr-btm-48">Website Thương Mại Điện Tử</p>
                            </div>
                            <div class="plan-price">
                                <h4><span>$</span> 299</h4>
                                <span class="duration">All Taxes</span></div>
                            <ul class="price-details">
                                <li><strong>Full</strong> Access</li>
                                <li>Source Files</li>
                                <li><strong>Unlimited</strong> Users</li>
                                <li><strong>150</strong> Domains</li>
                                <li><strong>430 Email</strong> Accounts</li>
                                <li>Automatic Cloud Backups</li>
                            </ul>
                            <a href="#" class="btn mian-btn price-btn features-price-btn">Liên Hệ</a></div>
                    </div>
                    <div class="col-md-4 col-sm-6 space1">
                        <div class="price-content-wrap">
                            <div class="plan-name">
                                <p class="price-title mr-btm-48">Website Quản Trị Doanh Nghiệp</p>
                            </div>
                            <div class="plan-price">
                                <h4><span>$</span> 399</h4>
                                <span class="duration">All Taxes</span></div>
                            <ul class="price-details">
                                <li><strong>Full</strong> Access</li>
                                <li>Source Files</li>
                                <li><strong>Unlimited</strong> Users</li>
                                <li><strong>150</strong> Domains</li>
                                <li><strong>430 Email</strong> Accounts</li>
                                <li>Automatic Cloud Backups</li>
                            </ul>
                            <a href="#" class="btn mian-btn price-btn">Liên Hệ</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing Table end -->
    <!-- Contact Us Start -->
    <section id="contactus" class="contactus">
        <div class="container">
            <div class="row">
                <div class="col-sm-12"><span class="section-number">8</span>
                    <h2 class="section-heading">Liên hệ với chúng tôi...</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-xs-12">
                    <div class="row">
                        <!-- START CONTACT FORM DESIGN AREA -->
                        <form id="contact-form" method="post">
                            <div class="form-group col-md-6">
                                <input name="name" class="form-control input-lg" id="first-name" placeholder="Họ và Tên*"
                                       required type="text">
                            </div>
                            <div class="form-group col-md-6">
                                <input name="phone" class="form-control input-lg" id="phone" placeholder="Số điện thoại" required
                                       type="text">
                            </div>
                            <div class="form-group col-md-6">
                                <input name="email" class="form-control input-lg" id="email" placeholder="E-mail*" required
                                       type="email">
                            </div>
                            <div class="form-group col-md-6">
                                <input name="subject" class="form-control input-lg" id="subject" placeholder="Tiêu đề"
                                       type="text">
                            </div>
                            <div class="form-group col-md-12">
                                <textarea rows="5" name="message" class="form-control input-lg" id="description"
                                          placeholder="Nội dung" required></textarea>
                            </div>
                            <div class="col-md-12">
                                <div class="text-left contact-box">
                                    <button type="submit" class="btn btn-hero">Gửi</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 col-xs-12">
                    <div class="row">
                        <div class="contact-form contact_detail">
                            <!-- START CONTACT FORM DESIGN AREA -->
                            <div class="col-lg-12">
                                <div class="item"><i class="icons fa fa-map-marker fa-fw"></i>
                                    <div class="contact-info">
                                        <div class="text">Số 65, Đ. Hoàng Văn Thụ, P. Phan Đình Phùng, TP. Thái Nguyên, T. Thái Nguyên</div>
                                    </div>
                                </div>
                                <div class="item"><i class="icons fa fa-phone fa-fw"></i>
                                    <div class="contact-info">
                                        <div class="text">0999888666</div>
                                    </div>
                                </div>
                                <div class="item"><i class="icons fa fa-envelope-o fa-fw"></i>
                                    <div class="contact-info"><a href="mailto:support@sbtechnosoft.com" class="text">itcenter@htc-it.team</a>
                                    </div>
                                </div>
                                <div class="item"><i class="icons fa fa-fax fa-fw"></i>
                                    <div class="contact-info"> Fax : (123) 4657890</div>
                                </div>
                            </div>
                            <!-- / END CONTACT FORM DESIGN AREA -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Google Map Start -->
        <div class="google-map">
            <div class="container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3709.8364846705786!2d105.83232741424474!3d21.59230487367802!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313527943d2a7f51%3A0x50ba15fcd0f3f391!2zSFRDIC0gVHJ1bmcgdMOibSDEkMOgbyB04bqhbyB2w6AgUGjDoXQgdHJp4buDbiBOZ3Xhu5NuIE5ow6JuIEzhu7Fj!5e0!3m2!1svi!2s!4v1591956546030!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                </iframe>
            </div>
        </div>
        <!-- Google Map end -->
    </section>
    <!-- Contact Us End -->
 @yield('layouts.footer')