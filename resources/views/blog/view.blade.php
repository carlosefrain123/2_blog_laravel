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

    <main class="main">
        <!--post-default-->
        <section class="mt-130 mb-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-9 side-content">
                        <div class="theiaStickySidebar">
                            <!--Post-single-->
                            <div class="post-single">
                                <!-- Imagen Principal del Post -->
                                <div class="post-single__image">
                                    <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}" class="post-single__image-img">
                                </div>

                                <!-- Contenido del Post -->
                                <div class="post-single__content">
                                    <!-- Categorías -->
                                    @foreach ($post->categories as $category)
                                        <a href="#" class="category">{{ $category->name }}</a>
                                    @endforeach

                                    <!-- Título del Post -->
                                    <h2 class="post-single__title">{{ $post->title }}</h2>

                                    <!-- Meta Información -->
                                    <ul class="post-single__meta list-inline">
                                        <li class="post-single__meta-item">
                                            <a href="#">
                                                <img src="{{ asset('assets/img/author/admin.png') }}" alt="{{ $post->user->name }}" class="post-single__meta-img">
                                            </a>
                                        </li>
                                        <li class="post-single__meta-item">
                                            <a href="#" class="post-single__meta-link">{{ $post->user->name }}</a>
                                        </li>
                                        <li class="post-single__meta-item">
                                            <span class="dot"></span> {{ $post->published_at->translatedFormat('d F Y') }}
                                        </li>
                                    </ul>
                                </div>

                                <!-- Cuerpo del Post -->
                                <div class="post-single__body">
                                    <p>{!! $post->content !!}</p>
                                </div>

                                <!-- Tags del Post -->
                                <div class="post-single__footer">
                                    <ul class="list-inline widget__tags">
                                        @foreach ($post->tags as $tag)
                                            <li class="widget__tags-item">
                                                <a href="#" class="widget__tags-link">{{ $tag->name }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                            <!--Related-posts-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="widget">
                                        <div class="widget__related-post">
                                            <div class="widget__related-post__image">
                                                <a href="post-default.html">
                                                    <img src="assets/img/latest/1.jpg" alt="..." class="widget__related-post__img">
                                                </a>
                                            </div>
                                            <div class="widget__related-post__content">
                                                <a class="btn-link" href="post-default.html">
                                                    <i class="bi bi-arrow-left"></i>Preview post
                                                </a>
                                                <p class="widget__related-post__title">
                                                    <a href="post-default.html" class="widget__related-post__link">5 Things I Wish I Knew Before Traveling to Malaysia</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="widget">
                                        <div class="widget__related-post">
                                            <div class="widget__related-post__image">
                                                <a href="post-default.html">
                                                    <img src="assets/img/latest/2.jpg" alt="..." class="widget__related-post__img">
                                                </a>
                                            </div>
                                            <div class="widget__related-post__content">
                                                <a class="btn-link" href="post-default.html">
                                                    Next post <i class="bi bi-arrow-right"></i>
                                                </a>
                                                <p class="widget__related-post__title">
                                                    <a href="post-default.html" class="widget__related-post__link">5 Things I Wish I Knew Before Traveling to Malaysia</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 max-width side-sidebar">
                        <div class="theiaStickySidebar">
                            <!--widget-author-->
                            <div class="widget">
                                <div class="widget__author">
                                    <!-- Imagen del Autor -->
                                    <div class="widget__author-top">
                                        <a href="#" class="widget__author-link">
                                            <img src="{{ asset('assets/img/author/admin.png') }}" alt="{{ $post->user->name }}" class="widget__author-img">
                                        </a>
                                    </div>
                                    <!-- Contenido del Autor -->
                                    <div class="widget__author-content">
                                        <h6 class="widget__author-name">Hi, I'm {{ $post->user->name }}</h6>
                                        <p class="widget__author-bio">
                                            {{ $post->user->descripcion ?? 'This user has not added a description yet.' }}
                                        </p>
                                        <!-- Redes Sociales -->
                                        <ul class="list-inline social-media social-media--layout-two">
                                            @if ($post->user->urlfacebook)
                                                <li class="social-media__item">
                                                    <a href="{{ $post->user->urlfacebook }}" class="social-media__link color-facebook" target="_blank">
                                                        <i class="bi bi-facebook"></i>
                                                    </a>
                                                </li>
                                            @endif
                                            @if ($post->user->urlinstagram)
                                                <li class="social-media__item">
                                                    <a href="{{ $post->user->urlinstagram }}" class="social-media__link color-instagram" target="_blank">
                                                        <i class="bi bi-instagram"></i>
                                                    </a>
                                                </li>
                                            @endif
                                            @if ($post->user->urlyoutube)
                                                <li class="social-media__item">
                                                    <a href="{{ $post->user->urlyoutube }}" class="social-media__link color-youtube" target="_blank">
                                                        <i class="bi bi-youtube"></i>
                                                    </a>
                                                </li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!--widget-Latest-Posts-->
                            <div class="widget">
                                <h5 class="widget__title">Latest Posts</h5>
                                <ul class="widget__latest-posts">
                                    @foreach ($latestPosts as $index => $post)
                                        <!-- Post {{ $index + 1 }} -->
                                        <li class="widget__latest-posts__item">
                                            <div class="widget__latest-posts-image">
                                                <a href="{{ route('posts.show', ['id' => $post->id, 'slug' => $post->slug]) }}" class="widget__latest-posts-link">
                                                    <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}" class="widget__latest-posts-img">
                                                </a>
                                            </div>
                                            <div class="widget__latest-posts-count">{{ $index + 1 }}</div>
                                            <div class="widget__latest-posts__content">
                                                <p class="widget__latest-posts-title">
                                                    <a href="{{ route('posts.show', ['id' => $post->id, 'slug' => $post->slug]) }}" class="widget__latest-posts-link">
                                                        {{ $post->title }}
                                                    </a>
                                                </p>
                                                <small class="widget__latest-posts-date">
                                                    <i class="bi bi-clock-fill widget__latest-posts-icon"></i>
                                                    {{ $post->published_at->translatedFormat('d \d\e F \d\e Y') }}
                                                </small>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                            <!--widget-categories-->
                            <div class="widget">
                                <h5 class="widget__title">Categories</h5>
                                <ul class="widget__categories">
                                    <li class="widget__categories-item">
                                        <a href="blog-grid.html" class="category widget__categories-link">Livestyle</a>
                                        <span class="ml-auto widget__categories-number">22 Posts</span>
                                    </li>
                                    <li class="widget__categories-item">
                                        <a href="blog-grid.html" class="category widget__categories-link">travel</a>
                                        <span class="ml-auto widget__categories-number">25 Posts</span>
                                    </li>
                                    <li class="widget__categories-item">
                                        <a href="blog-grid.html" class="category widget__categories-link">food</a>
                                        <span class="ml-auto widget__categories-number">15 Posts</span>
                                    </li>
                                    <li class="widget__categories-item">
                                        <a href="blog-grid.html" class="category widget__categories-link">fashion</a>
                                        <span class="ml-auto widget__categories-number">18 Posts</span>
                                    </li>
                                    <li class="widget__categories-item">
                                        <a href="blog-grid.html" class="category widget__categories-link">interior</a>
                                        <span class="ml-auto widget__categories-number">21 Posts</span>
                                    </li>
                                    <li class="widget__categories-item">
                                        <a href="blog-grid.html" class="category widget__categories-link">art & design</a>
                                        <span class="ml-auto widget__categories-number">14 Posts</span>
                                    </li>



                                </ul>
                            </div>

                            <!--widget-tags-->
                            <div class="widget">
                                <h5 class="widget__title">Tags</h5>
                                <ul class="list-inline widget__tags">
                                    <li class="widget__tags-item">
                                        <a href="blog-grid.html" class="widget__tags-link">Travel</a>
                                    </li>
                                    <li class="widget__tags-item">
                                        <a href="blog-grid.html" class="widget__tags-link">nature</a>
                                    </li>
                                    <li class="widget__tags-item">
                                        <a href="blog-grid.html" class="widget__tags-link">tips</a>
                                    </li>
                                    <li class="widget__tags-item">
                                        <a href="blog-grid.html" class="widget__tags-link">forest</a>
                                    </li>
                                    <li class="widget__tags-item">
                                        <a href="blog-grid.html" class="widget__tags-link">Torism</a>
                                    </li>
                                    <li class="widget__tags-item">
                                        <a href="blog-grid.html" class="widget__tags-link">fashion</a>
                                    </li>
                                    <li class="widget__tags-item">
                                        <a href="blog-grid.html" class="widget__tags-link">livestyle</a>
                                    </li>
                                    <li class="widget__tags-item">
                                        <a href="blog-grid.html" class="widget__tags-link">health</a>
                                    </li>
                                    <li class="widget__tags-item">
                                        <a href="blog-grid.html" class="widget__tags-link">food</a>
                                    </li>
                                    <li class="widget__tags-item">
                                        <a href="blog-grid.html" class="widget__tags-link">breakfast</a>
                                    </li>
                                    <li class="widget__tags-item">
                                        <a href="blog-grid.html" class="widget__tags-link">hacks</a>
                                    </li>
                                    <li class="widget__tags-item">
                                        <a href="blog-grid.html" class="widget__tags-link">interior</a>
                                    </li>
                                </ul>
                            </div>

                            <!--widget-ads-->
                            <div class="widget">
                                <h5  class="widget__title">ads</h5>
                                <div class="widget__ads">
                                    <a href="#" class="widget__ads-link">
                                        <img src="assets/img/ads/ads3.jpg" alt="" class="widget__ads-img">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--/-->

        <!--newslettre-->
        @include('partials.newlettre')
    </main>

    <!--footer-->
    @include('partials.footer')
    <!--plugins -->
    @include('partials.js')

</body>
</html>
