<!doctype html>
<html lang="es">

<head>
    @include('partials.head')
</head>

<body>

    <!--loading -->
    @include('partials.loading')

    <!-- Header -->
    @include('partials.header')

    <main class="main ">
        <!--about-us-->
        <section class="m-top mb-10">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-xl-9 m-auto">
                        <div class="about-us">
                            <div class="about-us__image">
                                <img src="assets/img/pic/about-us.jpg" alt="" class="about-us__img">
                            </div>
                            <div class="about-us__description">
                                <p class="about-us__description-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus facere, nemo dignissimos, in labore nostrum provident
                                    perferendis minima accusamus aliquam reprehenderit autem
                                </p>
                                <p class="about-us__description-text">
                                    praesentium sunt beatae libero non totam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus facere, nemo dignissimos, in labore nostrum provident
                                    perferendis minima accusamus aliquam reprehenderit autem praesentium sunt beatae libero non totam.
                                </p>
                                <p class="about-us__description-text">
                                    praesentium sunt beatae libero non totam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus facere, nemo dignissimos, in labore nostrum provident
                                    perferendis minima accusamus aliquam reprehenderit autem praesentium sunt beatae libero non totam.
                                </p>
                                <div class="about-us__qoute">
                                    <i class="bi bi-quote about-us__qoute-icon"></i>

                                    <h3 class="about-us__qoute-item">
                                        "My website’s kind of fun for me. I get to do drawings on that.
                                        It’s kind of fun.”
                                    </h3>
                                    <small class="about-us__qoute-author">Jeff Bridges.</small>
                                </div>
                            <p class="about-us__description-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur malesuada malesuada metus ut placerat. Cras a porttitor
                                quam, eget ornare sapien. In sit amet vulputate metus. Nullam eget rutrum nisl. Sed tincidunt lorem sed maximus interdum.
                                Interdum malesuada fames ante ipsum primis in faucibus. Aenean scelerisque efficitur mauris nec tincidunt. cursus leo ultricies
                                magna faucibus id.
                            </p>
                            <p class="about-us__description-text">
                                praesentium sunt beatae libero non totam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus facere, nemo dignissimos, in labore nostrum provident
                                perferendis minima accusamus aliquam reprehenderit autem praesentium sunt beatae libero non totam.
                            </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!--newslettre-->
        <section class="newslettre__section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-10 col-sm-11 m-auto">
                        <div class="newslettre">
                            <div class="newslettre__info ">
                                <h3 class="newslettre__title">Get The Best Blog Stories into Your inbox!</h3>
                                <p class="newslettre__desc"> Sign up for free and be the first to get notified about new posts. </p>
                            </div>

                            <form action="#" class="newslettre__form">
                                <input type="email" class="newslettre__form-input form-control" placeholder="Your email adress" required="required">
                                <button class="newslettre__form-submit" type="submit">Subscribe</button>
                            </form>

                            <ul class="list-inline social-media social-media--layout-three">
                                <li class="social-media__item">
                                    <a href="#" class="social-media__link" ><i class="bi bi-facebook"></i>Facebook</a>
                                </li>

                                <li class="social-media__item">
                                    <a href="#" class="social-media__link"><i class="bi bi-instagram"></i>Instagram</a>
                                </li>
                                <li class="social-media__item">
                                    <a href="#" class="social-media__link"><i class="bi bi-twitter-x"></i>Twitter</a>
                                </li>
                                <li class="social-media__item">
                                    <a href="#" class="social-media__link"><i class="bi bi-youtube"></i>Youtube</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!--footer-->
    @include('partials.footer')
    <!--plugins -->
    @include('partials.js')

</body>
</html>
