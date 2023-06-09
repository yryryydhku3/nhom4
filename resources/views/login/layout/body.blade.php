<section class="page-section" id="contact">
<form method="POST">
    @csrf
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Login</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <form id="contactForm">
                            
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" placeholder="" name ="name"/>
                                <label for="name">Name</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input class="form-control" id="password" type="password" placeholder="" name ="password"/>
                                <label for="email">Password</label>
                            </div>
                            
                            <button class="btn btn-primary btn-xl" id="submitButton" type="submit">Login</button>
                            <button class="btn btn-primary btn-xl" id="loginButton"><a href="{{ route('register') }}" style="color: #fff; text-decoration: none;">Register</a></button>
                        </form>
                    </div>
                </div>
            </div>
</form>
</section>