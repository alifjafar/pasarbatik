@extends('layouts.main')
@section('description', '- Taglinenya')
@section('content')

    <section class="card-post mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 d-flex">
                    <div class="category__header">
                        <h4 class="category__title">Promo</h4>
                    </div>
                </div>
                <div class="col-md-3 mb-4 d-flex">
                    <div class="card card-shadow no-border">
                        <a href="#">
                            <div class="card__img">
                                {{--@if($post->image)--}}
                                {{--<img src="{{ asset('img/placeholder.svg') }}" alt="{{ $post->title }}" class="lazyload" data-src="{{ Voyager::image( $post->image ) }}"> @else--}}
                                {{--<img src="{{ asset('img/placeholder.svg') }}" alt="{{ $post->title }}"--}}
                                {{--class="card-img-top"> @endif--}}
                                <img src="{{ asset('img/placeholder.svg') }}" class="card-img-top" alt="tes">
                            </div>
                        </a>
                        <div class="card-body">
                            <div class="card-product">
                                <a href="#">Baju Batik Pria</a>
                            </div>

                            <div class="card-price">
                                <a class="" href="#">Rp. 150.000</a>
                            </div>
                            <div class="card-store">
                                <a href="" class="text-muted"><i class="fa fa-store"></i> Butik Ayu Pekalongan</a>
                            </div>
                        </div>
                        <div class="card-footer" style="font-size:12px">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="text-muted">(20 Ulasan)</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4 d-flex">
                    <div class="card card-shadow no-border">
                        <a href="#">
                            <div class="card__img">
                                {{--@if($post->image)--}}
                                {{--<img src="{{ asset('img/placeholder.svg') }}" alt="{{ $post->title }}" class="lazyload" data-src="{{ Voyager::image( $post->image ) }}"> @else--}}
                                {{--<img src="{{ asset('img/placeholder.svg') }}" alt="{{ $post->title }}"--}}
                                {{--class="card-img-top"> @endif--}}
                                <img src="{{ asset('img/placeholder.svg') }}" class="card-img-top" alt="tes">
                            </div>
                        </a>
                        <div class="card-body">
                            <div class="card-product">
                                <a href="#">Baju Batik Pria</a>
                            </div>

                            <div class="card-price">
                                <a class="" href="#">Rp. 150.000</a>
                            </div>
                            <div class="card-store">
                                <a href="" class="text-muted"><i class="fa fa-store"></i> Butik Ayu Pekalongan</a>
                            </div>
                        </div>
                        <div class="card-footer" style="font-size:12px">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="text-muted">(20 Ulasan)</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4 d-flex">
                    <div class="card card-shadow no-border">
                        <a href="#">
                            <div class="card__img">
                                {{--@if($post->image)--}}
                                {{--<img src="{{ asset('img/placeholder.svg') }}" alt="{{ $post->title }}" class="lazyload" data-src="{{ Voyager::image( $post->image ) }}"> @else--}}
                                {{--<img src="{{ asset('img/placeholder.svg') }}" alt="{{ $post->title }}"--}}
                                {{--class="card-img-top"> @endif--}}
                                <img src="{{ asset('img/placeholder.svg') }}" class="card-img-top" alt="tes">
                            </div>
                        </a>
                        <div class="card-body">
                            <div class="card-product">
                                <a href="#">Baju Batik Pria</a>
                            </div>

                            <div class="card-price">
                                <a class="" href="#">Rp. 150.000</a>
                            </div>
                            <div class="card-store">
                                <a href="" class="text-muted"><i class="fa fa-store"></i> Butik Ayu Pekalongan</a>
                            </div>
                        </div>
                        <div class="card-footer" style="font-size:12px">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="text-muted">(20 Ulasan)</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4 d-flex">
                    <div class="card card-shadow no-border">
                        <a href="#">
                            <div class="card__img">
                                {{--@if($post->image)--}}
                                {{--<img src="{{ asset('img/placeholder.svg') }}" alt="{{ $post->title }}" class="lazyload" data-src="{{ Voyager::image( $post->image ) }}"> @else--}}
                                {{--<img src="{{ asset('img/placeholder.svg') }}" alt="{{ $post->title }}"--}}
                                {{--class="card-img-top"> @endif--}}
                                <img src="{{ asset('img/placeholder.svg') }}" class="card-img-top" alt="tes">
                            </div>
                        </a>
                        <div class="card-body">
                            <div class="card-product">
                                <a href="#">Baju Batik Pria</a>
                            </div>

                            <div class="card-price">
                                <a class="" href="#">Rp. 150.000</a>
                            </div>
                            <div class="card-store">
                                <a href="" class="text-muted"><i class="fa fa-store"></i> Butik Ayu Pekalongan</a>
                            </div>
                        </div>
                        <div class="card-footer" style="font-size:12px">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="text-muted">(20 Ulasan)</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 d-flex">
                    <div class="category__header">
                        <h4 class="category__title">Populer</h4>
                        <a href="#" class="category__link">Lihat Semua</a>
                    </div>
                </div>
                <div class="col-md-3 mb-4 d-flex">
                    <div class="card card-shadow no-border">
                        <a href="#">
                            <div class="card__img">
                                {{--@if($post->image)--}}
                                {{--<img src="{{ asset('img/placeholder.svg') }}" alt="{{ $post->title }}" class="lazyload" data-src="{{ Voyager::image( $post->image ) }}"> @else--}}
                                {{--<img src="{{ asset('img/placeholder.svg') }}" alt="{{ $post->title }}"--}}
                                {{--class="card-img-top"> @endif--}}
                                <img src="{{ asset('img/placeholder.svg') }}" class="card-img-top" alt="tes">
                            </div>
                        </a>
                        <div class="card-body">
                            <div class="card-product">
                                <a href="#">Baju Batik Pria</a>
                            </div>

                            <div class="card-price">
                                <a class="" href="#">Rp. 150.000</a>
                            </div>
                            <div class="card-store">
                                <a href="" class="text-muted"><i class="fa fa-store"></i> Butik Ayu Pekalongan</a>
                            </div>
                        </div>
                        <div class="card-footer" style="font-size:12px">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="text-muted">(20 Ulasan)</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4 d-flex">
                    <div class="card card-shadow no-border">
                        <a href="#">
                            <div class="card__img">
                                {{--@if($post->image)--}}
                                {{--<img src="{{ asset('img/placeholder.svg') }}" alt="{{ $post->title }}" class="lazyload" data-src="{{ Voyager::image( $post->image ) }}"> @else--}}
                                {{--<img src="{{ asset('img/placeholder.svg') }}" alt="{{ $post->title }}"--}}
                                {{--class="card-img-top"> @endif--}}
                                <img src="{{ asset('img/placeholder.svg') }}" class="card-img-top" alt="tes">
                            </div>
                        </a>
                        <div class="card-body">
                            <div class="card-product">
                                <a href="#">Baju Batik Pria</a>
                            </div>

                            <div class="card-price">
                                <a class="" href="#">Rp. 150.000</a>
                            </div>
                            <div class="card-store">
                                <a href="" class="text-muted"><i class="fa fa-store"></i> Butik Ayu Pekalongan</a>
                            </div>
                        </div>
                        <div class="card-footer" style="font-size:12px">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="text-muted">(20 Ulasan)</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4 d-flex">
                    <div class="card card-shadow no-border">
                        <a href="#">
                            <div class="card__img">
                                {{--@if($post->image)--}}
                                {{--<img src="{{ asset('img/placeholder.svg') }}" alt="{{ $post->title }}" class="lazyload" data-src="{{ Voyager::image( $post->image ) }}"> @else--}}
                                {{--<img src="{{ asset('img/placeholder.svg') }}" alt="{{ $post->title }}"--}}
                                {{--class="card-img-top"> @endif--}}
                                <img src="{{ asset('img/placeholder.svg') }}" class="card-img-top" alt="tes">
                            </div>
                        </a>
                        <div class="card-body">
                            <div class="card-product">
                                <a href="#">Baju Batik Pria</a>
                            </div>

                            <div class="card-price">
                                <a class="" href="#">Rp. 150.000</a>
                            </div>
                            <div class="card-store">
                                <a href="" class="text-muted"><i class="fa fa-store"></i> Butik Ayu Pekalongan</a>
                            </div>
                        </div>
                        <div class="card-footer" style="font-size:12px">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="text-muted">(20 Ulasan)</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4 d-flex">
                    <div class="card card-shadow no-border">
                        <a href="#">
                            <div class="card__img">
                                {{--@if($post->image)--}}
                                {{--<img src="{{ asset('img/placeholder.svg') }}" alt="{{ $post->title }}" class="lazyload" data-src="{{ Voyager::image( $post->image ) }}"> @else--}}
                                {{--<img src="{{ asset('img/placeholder.svg') }}" alt="{{ $post->title }}"--}}
                                {{--class="card-img-top"> @endif--}}
                                <img src="{{ asset('img/placeholder.svg') }}" class="card-img-top" alt="tes">
                            </div>
                        </a>
                        <div class="card-body">
                            <div class="card-product">
                                <a href="#">Baju Batik Pria</a>
                            </div>

                            <div class="card-price">
                                <a class="" href="#">Rp. 150.000</a>
                            </div>
                            <div class="card-store">
                                <a href="" class="text-muted"><i class="fa fa-store"></i> Butik Ayu Pekalongan</a>
                            </div>
                        </div>
                        <div class="card-footer" style="font-size:12px">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="text-muted">(20 Ulasan)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('js')
    {{--<script type="text/javascript">--}}
    {{--$(document).ready(function () {--}}
    {{--$('.owl-carousel').owlCarousel({--}}
    {{--loop: true,--}}
    {{--margin: 10,--}}
    {{--nav: true,--}}
    {{--navText: [--}}
    {{--"<i class='fa fa-angle-left fa-2x'></i>",--}}
    {{--"<i class='fa fa-angle-right fa-2x'></i>"--}}
    {{--],--}}
    {{--singleItem: true,--}}
    {{--items: 1,--}}
    {{--itemsDesktop: true,--}}
    {{--itemsDesktopSmall: true,--}}
    {{--itemsTablet: true,--}}
    {{--itemsMobile: true,--}}
    {{--dots: false,--}}
    {{--autoplay: true,--}}
    {{--autoplayTimeout: 5000,--}}
    {{--autoplayHoverPause: true--}}
    {{--});--}}
    {{--});--}}

    {{--</script>--}}
    {{--<script>--}}
    {{--// Select all links with hashes--}}
    {{--$('a[href*="#"]')--}}
    {{--// Remove links that don't actually link to anything--}}
    {{--.not('[href="#"]')--}}
    {{--.not('[href="#0"]')--}}
    {{--.click(function (event) {--}}
    {{--// On-page links--}}
    {{--if (--}}
    {{--location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')--}}
    {{--&&--}}
    {{--location.hostname == this.hostname--}}
    {{--) {--}}
    {{--// Figure out element to scroll to--}}
    {{--var target = $(this.hash);--}}
    {{--target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');--}}
    {{--// Does a scroll target exist?--}}
    {{--if (target.length) {--}}
    {{--// Only prevent default if animation is actually gonna happen--}}
    {{--event.preventDefault();--}}
    {{--$('html, body').animate({--}}
    {{--scrollTop: target.offset().top--}}
    {{--}, 1000, function () {--}}
    {{--// Callback after animation--}}
    {{--// Must change focus!--}}
    {{--var $target = $(target);--}}
    {{--$target.focus();--}}
    {{--if ($target.is(":focus")) { // Checking if the target was focused--}}
    {{--return false;--}}
    {{--} else {--}}
    {{--$target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable--}}
    {{--$target.focus(); // Set focus again--}}
    {{--}--}}
    {{--;--}}
    {{--});--}}
    {{--}--}}
    {{--}--}}
    {{--});--}}

    {{--</script>--}}
@endpush
