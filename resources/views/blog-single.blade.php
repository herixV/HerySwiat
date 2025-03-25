@extends('layouts.app')


@section('breadcrumbs')
<x-breadcrumbs title="Blog-Single" :links="[['name' => 'Blog-Singles', 'url' => '']]" />
</section>
@endsection


@section('content')
<div class="post-wrap padding-small">
  <div class="container-fluid padding-side">
      <div class="row g-5">
          <!-- Contenido Principal -->
          <main class="post-grid col-md-9">
              <div class="row">
                  <article class="post-item">
                      <!-- Título del Post -->
                      <h3 class="display-3 fw-normal mb-5">{{ $post->title }}</h3>

                      <!-- Imagen del Post -->
                      <div class="hero-image">
                          <img src="{{ asset($post->image) }}" alt="{{ $post->title }}" class="img-fluid rounded-4">
                      </div>

                      <!-- Contenido del Post -->
                      <div class="post-content py-5">
                          <div class="post-description">
                              <p>{{ $post->content }}</p>

                              <!-- Citas -->
                              <blockquote>“Style is a way to say who you are without having to speak.” : Rachel Zoe</blockquote>

                              <!-- Lista de puntos -->
                              <h4 class="mt-4">Why You Need a Personal Designer</h4>
                              <ul class="inner-list mb-4">
                                  <li>Exclusive designs that match your personality.</li>
                                  <li>Perfect fit and high-quality craftsmanship.</li>
                                  <li>Customized wardrobe for any occasion.</li>
                                  <li>Access to unique fabrics and fashion trends.</li>
                                  <li>Expert advice on styling and color coordination.</li>
                              </ul>

                              <!-- Más contenido -->
                              <p>{{ $post->excerpt }}</p>

                              <!-- Etiquetas -->
                              <div class="post-bottom-link d-md-flex justify-content-between my-5">
                                  {{-- <div class="block-tag">
                                      <ul class="list-unstyled text-decoration-underline d-flex">
                                          @foreach ($post->tags as $tag)
                                          <li class="me-3"><a href="#">{{ $tag->name }}</a></li>
                                          @endforeach
                                      </ul>
                                  </div> --}}

                                  <!-- Redes Sociales -->
                                  <div class="block-social-links d-flex align-items-center">
                                      <div class="element-title text-uppercase pe-4">Share:</div>
                                      <ul class="social-links d-flex flex-wrap list-unstyled m-0">
                                          <li class="social me-4">
                                              <a href="#">
                                                  <svg width="16" height="16">
                                                      <use xlink:href="#facebook"></use>
                                                  </svg>
                                              </a>
                                          </li>
                                          <li class="social me-4">
                                              <a href="#">
                                                  <svg width="16" height="16">
                                                      <use xlink:href="#twitter"></use>
                                                  </svg>
                                              </a>
                                          </li>
                                          <li class="social me-4">
                                              <a href="#">
                                                  <svg width="16" height="16">
                                                      <use xlink:href="#linkedin"></use>
                                                  </svg>
                                              </a>
                                          </li>
                                          <li class="social me-4">
                                              <a href="#">
                                                  <svg width="16" height="16">
                                                      <use xlink:href="#instagram"></use>
                                                  </svg>
                                              </a>
                                          </li>
                                          <li class="social">
                                              <a href="#">
                                                  <svg width="16" height="16">
                                                      <use xlink:href="#youtube"></use>
                                                  </svg>
                                              </a>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </article>
              </div>
          </main>

          <!-- Barra Lateral -->
          <aside class="col-md-3">
              <div class="post-sidebar">
                  <!-- Buscador -->
                  <form class="position-relative mb-5">
                      <input type="text" class="form-control rounded-5 px-4 py-2 bg-transparent" placeholder="Search">
                      <a href="#" class="position-absolute top-50 end-0 translate-middle-y p-1 me-3">
                          <svg width="20" height="20">
                              <use xlink:href="#search"></use>
                          </svg>
                      </a>
                  </form>

                  <!-- Categorías -->
                  <div class="widget sidebar-categories border-animation-left mb-5">
                      <h4 class="widget-title fw-normal border-bottom pb-3 mb-3">Categories</h4>
                      <ul class="list-unstyled">
                          @foreach ($categories as $category)
                          <li>
                              <a href="#" class="item-anchor text-decoration-none">{{ $category->name }}</a>
                          </li>
                          @endforeach
                      </ul>
                  </div>

                  <!-- Etiquetas -->
                  <div class="widget block-tag mb-5">
                      <h4 class="widget-title fw-normal border-bottom pb-3 mb-3">Tags</h4>
                      <ul class="list-unstyled d-flex flex-wrap gap-2">
                          @foreach ($tags as $tag)
                          <li>
                              <a href="#" class="btn btn-outline-secondary py-2 px-3">{{ $tag->name }}</a>
                          </li>
                          @endforeach
                      </ul>
                  </div>

                  <!-- Posts Recientes -->
                  <div class="widget sidebar-recent-post mb-5">
                      <h4 class="widget-title fw-normal border-bottom pb-3 mb-3">Recent Posts</h4>
                      @foreach ($posts as $recentPost)
                      <div class="sidebar-post-item d-flex justify-content-center">
                          <div class="row mb-3">
                              <div class="col-md-4">
                                  <div class="image-holder">
                                      <a href="{{ route('blog-single', ['id' => $recentPost->id, 'slug' => $recentPost->slug]) }}">
                                          <img src="{{ asset($recentPost->image) }}" alt="{{ $recentPost->title }}" class="img-fluid">
                                      </a>
                                  </div>
                              </div>
                              <div class="col-md-8">
                                  <div class="sidebar-post-content">
                                      <h5 class="post-title fs-5">
                                          <a href="{{ route('blog-single', ['id' => $recentPost->id, 'slug' => $recentPost->slug]) }}">{{ $recentPost->title }}</a>
                                      </h5>
                                      <p class="m-0 lh-base" style="font-size: 14px;">{{ Str::limit($recentPost->excerpt, 100) }}</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                      @endforeach
                  </div>

                  <!-- Redes Sociales -->
                  <div class="widget sidebar-social-links border-animation-left">
                      <h4 class="widget-title fw-normal border-bottom pb-3 mb-3">Follow us:</h4>
                      <ul class="list-unstyled">
                          <li>
                              <a href="#" class="item-anchor">Facebook</a>
                          </li>
                          <li>
                              <a href="#" class="item-anchor">Twitter</a>
                          </li>
                          <li>
                              <a href="#" class="item-anchor">Pinterest</a>
                          </li>
                          <li>
                              <a href="#" class="item-anchor">Youtube</a>
                          </li>
                      </ul>
                  </div>
              </div>
          </aside>
      </div>
  </div>
</div>
{{-- <div class="post-wrap padding-small">
  <div class="container-fluid padding-side">
    <div class="row g-5">
      <main class="post-grid col-md-9">
        <div class="row">
          <article class="post-item">

            <h3 class="display-3 fw-normal mb-5">Trends: Why a Personal Designer Is the Key to Your Unique Style</h3>

            <div class="hero-image">
              <img src="./assets/img/post5.jpg" alt="single-post" class="img-fluid rounded-4">
            </div>
            <div class="post-content py-5">
              <div class="post-description">
                <p>Fashion is more than just clothing—it's a form of self-expression. A personal designer can help you
                  craft a wardrobe that reflects your identity, preferences, and lifestyle, ensuring that every piece
                  you wear is uniquely yours.</p>

                <p>Unlike mass-produced fashion, personalized designs are tailored to fit perfectly, made with
                  high-quality fabrics, and created to enhance your individuality. A personal designer understands
                  your needs and transforms your vision into a reality.</p>

                <blockquote>“Style is a way to say who you are without having to speak.” : Rachel Zoe</blockquote>
                <h4 class="mt-4">Why You Need a Personal Designer</h4>
                <ul class="inner-list mb-4">
                  <li>Exclusive designs that match your personality.</li>
                  <li>Perfect fit and high-quality craftsmanship.</li>
                  <li>Customized wardrobe for any occasion.</li>
                  <li>Access to unique fabrics and fashion trends.</li>
                  <li>Expert advice on styling and color coordination.</li>
                </ul>
                <p>Having a personal designer means having a fashion consultant who understands your body shape,
                  style aspirations, and comfort needs. Whether for everyday wear, business attire, or special
                  events, a designer helps you create a signature look that stands out.</p>
                <div class="post-bottom-link d-md-flex justify-content-between my-5">
                  <div class="block-tag">
                    <ul class="list-unstyled text-decoration-underline d-flex ">
                      <li class="me-3"><a href="#">Personal Style</a></li>
                      <li class="me-3"><a href="#">Custom Fashion</a></li>
                      <li class="me-3"><a href="#">Tailoring</a></li>
                    </ul>
                  </div>
                  <div class="block-social-links d-flex align-items-center">
                    <div class="element-title text-uppercase pe-4">Share:</div>
                    <ul class="social-links d-flex flex-wrap list-unstyled m-0">
                      <li class="social me-4">
                        <a href="#">
                          <svg width="16" height="16">
                            <use xlink:href="#facebook"></use>
                          </svg>
                        </a>
                      </li>
                      <li class="social me-4">
                        <a href="#">
                          <svg width="16" height="16">
                            <use xlink:href="#twitter"></use>
                          </svg>
                        </a>
                      </li>
                      <li class="social me-4">
                        <a href="#">
                          <svg width="16" height="16">
                            <use xlink:href="#linkedin"></use>
                          </svg>
                        </a>
                      </li>
                      <li class="social me-4">
                        <a href="#">
                          <svg width="16" height="16">
                            <use xlink:href="#instagram"></use>
                          </svg>
                        </a>
                      </li>
                      <li class="social">
                        <a href="#">
                          <svg width="16" height="16">
                            <use xlink:href="#youtube"></use>
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div id="single-post-navigation">
                <div class="post-navigation d-flex justify-content-between">
                  <a class="post-prev text-decoration-none" href="#">
                    <span class="page-nav-title text-decoration-underline text-uppercase">How to Take Care of Your
                      Tailored Suit</span>
                  </a>
                  <a class="post-next text-decoration-none" href="#">
                    <span class="page-nav-title text-decoration-underline text-uppercase text-end">Essential Fashion
                      Tips for the Summer Season</span>
                  </a>
                </div>
              </div>

            </div>
          </article>
          <div id="post-author-info" class="border-top border-bottom py-4">
            <div class="row d-flex align-items-center">
              <div class="col-md-3">
                <div class="image-holder">
                  <a href="#">
                    <img src="./assets/img/team1.jpg" class="img-fluid" alt="author">
                  </a>
                </div>
              </div>
              <div class="col-md-9">
                <div class="post-author-content">
                  <div class="element-title text-uppercase">
                    <p class="text-decoration-none fs-5">James Younes</p>
                  </div>
                  <span class="author-position">Fashion Designer & Tailoring Expert</span>
                  <p class="mt-3">Nascetur libero elementum adipiscing mauris maecenas et magna. Etiam nec, rutrum a
                    diam lacus,
                    nunc integer etiam. Mattis pulvinar non viverra donec pellentesque. Odio mi consequat libero
                    dolor. Porta ut diam lobortis eget leo, lectus. Tortor diam dignissim amet, in interdum aliquet.
                    Magnis dictum et eros purus fermentum, massa ullamcorper sit sollicitudin.</p>
                </div>
              </div>
            </div>
          </div>
          <section id="post-comment">
            <div class="container">
              <div class="row">
                <div class="comments-wrap mt-5">
                  <h3 class="display-5 fw-normal mb-5">
                    <span class="count">3</span> Comments
                  </h3>
                  <div class="comment-list">
                    <article class="comment-item pb-3 row">
                      <div class="col-md-2">
                        <img src="./assets/img/commentor-item1.jpg" alt="default"
                          class="commentor-image img-fluid rounded-circle">
                      </div>
                      <div class="col-md-10">
                        <div class="author-post mb-4">
                          <div class="comment-meta text-uppercase d-flex gap-3 text-black">
                            <div class="author-name fw-semibold">Lufy carlson</div>
                            <span class="meta-date">Jul 10</span>
                          </div>
                          <p>Tristique tempis condimentum diam done ullancomroer sit element henddg sit he
                            consequert.Tristique tempis condimentum diam done ullancomroer sit element henddg sit he
                            consequert.</p>
                          <div class="comments-reply border-animation">
                            <a href="#">
                              <i class="icon icon-mail-reply"></i>Reply </a>
                          </div>
                        </div>
                      </div>
                    </article>
                    <article class="comment-item pb-3 row child-comments">
                      <div class="col-md-2">
                        <img src="./assets/img/commentor-item2.jpg" alt="default"
                          class="commentor-image img-fluid rounded-circle">
                      </div>
                      <div class="col-md-10">
                        <div class="author-post mb-4">
                          <div class="comment-meta text-uppercase d-flex gap-3 text-black ">
                            <div class="author-name fw-semibold">Lora leigh</div>
                            <span class="meta-date">Jul 10</span>
                          </div>
                          <p>Tristique tempis condimentum diam done ullancomroer sit element henddg sit he
                            consequert.Tristique tempis condimentum diam done ullancomroer sit element henddg sit he
                            consequert.</p>
                          <div class="comments-reply border-animation">
                            <a href="#">
                              <i class="icon icon-mail-reply"></i>Reply </a>
                          </div>
                        </div>
                      </div>
                    </article>
                    <article class="comment-item pb-3 row">
                      <div class="col-md-2">
                        <img src="./assets/img/commentor-item3.jpg" alt="default"
                          class="commentor-image img-fluid rounded-circle">
                      </div>
                      <div class="col-md-10">
                        <div class="author-post mb-4">
                          <div class="comment-meta text-uppercase d-flex gap-3 text-black ">
                            <div class="author-name fw-semibold">Natalie dormer</div>
                            <span class="meta-date">Jul 10</span>
                          </div>
                          <p>Tristique tempis condimentum diam done ullancomroer sit element henddg sit he
                            consequert.Tristique tempis condimentum diam done ullancomroer sit element henddg sit he
                            consequert.</p>
                          <div class="comments-reply border-animation">
                            <a href="#">
                              <i class="icon icon-mail-reply"></i>Reply </a>
                          </div>
                        </div>
                      </div>
                    </article>
                  </div>
                </div>
                <div class="comment-respond mt-5">
                  <h3 class="display-5 fw-normal mb-5">Leave a Comment</h3>
                  <p>Your email address will not be published. Required fields are marked *</p>
                  <form method="post" class="form-group ">
                    <div class="row">
                      <div class="col-lg-12 mb-3">
                        <textarea class="form-control bg-transparent ps-3 pt-3" id="comment" name="comment"
                          placeholder="Write your comment here *"></textarea>
                      </div>
                      <div class="col-lg-6 mb-3">
                        <input class="form-control bg-transparent ps-3" type="text" name="author" id="author"
                          placeholder="Write your full name here *">
                      </div>
                      <div class="col-lg-6">
                        <input class="form-control bg-transparent ps-3" type="email" name="email" id="email"
                          placeholder="Write your e-mail address *">
                      </div>
                      <div class="col-lg-12">
                        <label class="d-flex align-items-center">
                          <input type="checkbox" class="checked-box me-2">
                          <span class="label-body">Save my name, email, and website in this browser for the next
                            time.</span>
                        </label>
                      </div>
                    </div>
                    <button class="btn btn-arrow btn-primary mt-3" type="submit"> <span>Submit<svg width="18"
                          height="18">
                          <use xlink:href="#arrow-right"></use>
                        </svg></span></button>
                  </form>
                </div>
              </div>
            </div>
          </section>
        </div>
      </main>
      <aside class="col-md-3">
        <div class="post-sidebar">
          <form class="position-relative mb-5">
            <input type="text" class="form-control rounded-5 px-4 py-2 bg-transparent" placeholder="Search">
            <a href="#" class="position-absolute top-50 end-0 translate-middle-y p-1 me-3">
              <svg width="20" height="20">
                <use xlink:href="#search"></use>
              </svg>
            </a>
          </form>
          <div class="widget sidebar-categories border-animation-left mb-5">
            <h4 class="widget-title fw-normal border-bottom pb-3 mb-3">Categories</h4>
            <ul class="list-unstyled">
              <li>
                <a href="#" class="item-anchor text-decoration-none">All</a>
              </li>
              <li>
                <a href="#" class="item-anchor text-decoration-none">Tailoring</a>
              </li>
              <li>
                <a href="#" class="item-anchor text-decoration-none">Haute Couture</a>
              </li>
              <li>
                <a href="#" class="item-anchor text-decoration-none">Custom Suits</a>
              </li>
              <li>
                <a href="#" class="item-anchor text-decoration-none">Bridal Wear</a>
              </li>
            </ul>
          </div>

          <div class="widget block-tag mb-5">
            <h4 class="widget-title fw-normal border-bottom pb-3 mb-3">Tags</h4>
            <ul class="list-unstyled d-flex flex-wrap gap-2">
              <li>
                <a href="#" class="btn btn-outline-secondary py-2 px-3">Tailoring</a>
              </li>
              <li>
                <a href="#" class="btn btn-outline-secondary py-2 px-3">Fashion</a>
              </li>
              <li>
                <a href="#" class="btn btn-outline-secondary py-2 px-3">Fabric</a>
              </li>
              <li>
                <a href="#" class="btn btn-outline-secondary py-2 px-3">Bespoke</a>
              </li>
            </ul>
          </div>


          <div class="widget sidebar-recent-post mb-5">
            <h4 class="widget-title fw-normal border-bottom pb-3 mb-3">Recent Posts</h4>
            <div class="sidebar-post-item d-flex justify-content-center">
              <div class="row mb-3">
                <div class="col-md-4">
                  <div class="image-holder">
                    <a href="#">
                      <img src="./assets/img/post1.jpg" alt="blog" class="img-fluid">
                    </a>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="sidebar-post-content">
                    <h5 class="post-title fs-5">
                      <a href="#">Inside a High-End Tailoring Studio</a>
                    </h5>
                    <p class=" m-0 lh-base" style="font-size: 14px;">Magnam at iusto omnis impedit minima sunt,
                      aspernatur rem dolorem, dolorum quaerat eius quas ipsum ...</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="sidebar-post-item d-flex justify-content-center">
              <div class="row mb-3">
                <div class="col-md-4">
                  <div class="image-holder">
                    <a href="#">
                      <img src="./assets/img/post2.jpg" alt="blog" class="img-fluid">
                    </a>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="sidebar-post-content">
                    <h5 class="post-title fs-5">
                      <a href="#">Guide to the Latest Fashion Trends </a>
                    </h5>
                    <p class=" m-0 lh-base" style="font-size: 14px;">Magnam at iusto omnis impedit minima sunt,
                      aspernatur rem dolorem, dolorum quaerat eius quas ipsum ...</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="sidebar-post-item d-flex justify-content-center">
              <div class="row mb-3">
                <div class="col-md-4">
                  <div class="image-holder">
                    <a href="#">
                      <img src="./assets/img/post3.jpg" alt="blog" class="img-fluid">
                    </a>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="sidebar-post-content">
                    <h5 class="post-title fs-5">
                      <a href="#">A Day in the Life of a Fashion Designer</a>
                    </h5>
                    <p class=" m-0 lh-base" style="font-size: 14px;">Magnam at iusto omnis impedit minima sunt,
                      aspernatur rem dolorem, dolorum quaerat eius quas ipsum ...</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="widget sidebar-social-links border-animation-left">
            <h4 class="widget-title fw-normal border-bottom pb-3 mb-3">Follow us:</h4>
            <ul class="list-unstyled">
              <li>
                <a href="#" class="item-anchor">Facebook</a>
              </li>
              <li>
                <a href="#" class="item-anchor">Twitter</a>
              </li>
              <li>
                <a href="#" class="item-anchor">Pinterest</a>
              </li>
              <li>
                <a href="#" class="item-anchor">Youtube</a>
              </li>
            </ul>
          </div>
        </div>
      </aside>
    </div>
  </div>
</div> --}}
@endsection

@section('scripts')
@endsection


