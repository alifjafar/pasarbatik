@extends('layouts.main')

@section('content')

<section>
    <div class="container mt-5">

        <div class="container">
            <div class="row">
                <div class="container col-lg-3 mt-5 mb-5">
                    <span class="form-header">Filter</span>
                    <div class="form-filter">
                        <h6 class="mt-3"><strong>Kategori</strong></h6>
                        <div class="dropdown">
                            <button class="align-baseline form-control dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i>Pilih Kategori</i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                        <h6 class="mt-3"><strong>Rentang Harga</strong></h6>
                        <form action="" class="mb-5">
                            <input type="text" class="form-control mb-1" id="hargamin" placeholder="Min">
                            <input type="text" class="form-control" id="hargamax" placeholder="Max">
                        </form>
                        <h6 class="mt-3"><strong>Rating :</strong></h6>
                        <input type="checkbox" name="rating[]" id="rating"> <span class="fa fa-star checked"></span><span
                            class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span
                            class="fa fa-star checked"></span>
                        <br>
                        <input type="checkbox" name="rating[]" id="rating"> <span class="fa fa-star checked"></span><span
                            class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span>
                        <br>
                        <input type="checkbox" name="rating[]" id="rating"> <span class="fa fa-star checked"></span><span
                            class="fa fa-star checked"></span><span class="fa fa-star checked"></span>
                        <br>
                        <input type="checkbox" name="rating[]" id="rating"> <span class="fa fa-star checked"></span><span
                            class="fa fa-star checked"></span>
                        <br>
                        <input type="checkbox" name="rating[]" id="rating"> <span class="fa fa-star checked"></span>
                        <br>
                        <button type="submit" class="btn btn-pasarbatik mt-2">Tampilkan</button>
                    </div>
                </div>

                <div class="container col-lg-9 mt-5">
                    <div class="row">
                        <h6 class="container mb-5 col-sm-7">Menampilkan 35 produk untuk <strong>"Kemeja Batik"</strong>
                            (1-12 dari 35)</h6>
                        <label for="sorting">Urutkan :</label>
                        <div class="dropdown col-sm-4">
                            <!-- <button class="dropdown-btn form-control dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i>Pilih Kategori</i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div> -->
                            <select class="dropdown-btn form-control" name="sorting" id="sorting">
                                <option class="dropdown-item" value="relevan">Paling sesuai</option>
                                <option class="dropdown-item" value="termahal">Harga Tertinggi</option>
                                <option class="dropdown-item" value="terendah">Harga Terendah</option>
                                <option class="dropdown-item" value="terbaru">Paling Baru</option>
                                <option class="dropdown-item" value="populer">Populer</option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-md-3 mb-4 d-flex">
                                <div class="card card-shadow no-border">
                                    <a href="#">
                                        <div class="card__img">
                                            {{--@if($post->image)--}}
                                            {{--<img src="{{ asset('img/placeholder.svg') }}" alt="{{ $post->title }}"
                                                class="lazyload" data-src="{{ Voyager::image( $post->image ) }}">
                                            @else--}}
                                            {{--<img src="{{ asset('img/placeholder.svg') }}" alt="{{ $post->title }}"
                                                --}} {{--class="card-img-top"> @endif--}} <img src="{{ asset('img/placeholder.svg') }}"
                                                class="card-img-top" alt="tes">
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
                                            <a href="" class="text-muted"><i class="fa fa-store"></i> Butik Ayu
                                                Pekalongan</a>
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
                                            {{--<img src="{{ asset('img/placeholder.svg') }}" alt="{{ $post->title }}"
                                                class="lazyload" data-src="{{ Voyager::image( $post->image ) }}">
                                            @else--}}
                                            {{--<img src="{{ asset('img/placeholder.svg') }}" alt="{{ $post->title }}"
                                                --}} {{--class="card-img-top"> @endif--}} <img src="{{ asset('img/placeholder.svg') }}"
                                                class="card-img-top" alt="tes">
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
                                            <a href="" class="text-muted"><i class="fa fa-store"></i> Butik Ayu
                                                Pekalongan</a>
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
                                            {{--<img src="{{ asset('img/placeholder.svg') }}" alt="{{ $post->title }}"
                                                class="lazyload" data-src="{{ Voyager::image( $post->image ) }}">
                                            @else--}}
                                            {{--<img src="{{ asset('img/placeholder.svg') }}" alt="{{ $post->title }}"
                                                --}} {{--class="card-img-top"> @endif--}} <img src="{{ asset('img/placeholder.svg') }}"
                                                class="card-img-top" alt="tes">
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
                                            <a href="" class="text-muted"><i class="fa fa-store"></i> Butik Ayu
                                                Pekalongan</a>
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
                                            {{--<img src="{{ asset('img/placeholder.svg') }}" alt="{{ $post->title }}"
                                                class="lazyload" data-src="{{ Voyager::image( $post->image ) }}">
                                            @else--}}
                                            {{--<img src="{{ asset('img/placeholder.svg') }}" alt="{{ $post->title }}"
                                                --}} {{--class="card-img-top"> @endif--}} <img src="{{ asset('img/placeholder.svg') }}"
                                                class="card-img-top" alt="tes">
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
                                            <a href="" class="text-muted"><i class="fa fa-store"></i> Butik Ayu
                                                Pekalongan</a>
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
                                            {{--<img src="{{ asset('img/placeholder.svg') }}" alt="{{ $post->title }}"
                                                class="lazyload" data-src="{{ Voyager::image( $post->image ) }}">
                                            @else--}}
                                            {{--<img src="{{ asset('img/placeholder.svg') }}" alt="{{ $post->title }}"
                                                --}} {{--class="card-img-top"> @endif--}} <img src="{{ asset('img/placeholder.svg') }}"
                                                class="card-img-top" alt="tes">
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
                                            <a href="" class="text-muted"><i class="fa fa-store"></i> Butik Ayu
                                                Pekalongan</a>
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
                                            {{--<img src="{{ asset('img/placeholder.svg') }}" alt="{{ $post->title }}"
                                                class="lazyload" data-src="{{ Voyager::image( $post->image ) }}">
                                            @else--}}
                                            {{--<img src="{{ asset('img/placeholder.svg') }}" alt="{{ $post->title }}"
                                                --}} {{--class="card-img-top"> @endif--}} <img src="{{ asset('img/placeholder.svg') }}"
                                                class="card-img-top" alt="tes">
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
                                            <a href="" class="text-muted"><i class="fa fa-store"></i> Butik Ayu
                                                Pekalongan</a>
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
                                            {{--<img src="{{ asset('img/placeholder.svg') }}" alt="{{ $post->title }}"
                                                class="lazyload" data-src="{{ Voyager::image( $post->image ) }}">
                                            @else--}}
                                            {{--<img src="{{ asset('img/placeholder.svg') }}" alt="{{ $post->title }}"
                                                --}} {{--class="card-img-top"> @endif--}} <img src="{{ asset('img/placeholder.svg') }}"
                                                class="card-img-top" alt="tes">
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
                                            <a href="" class="text-muted"><i class="fa fa-store"></i> Butik Ayu
                                                Pekalongan</a>
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
                                            {{--<img src="{{ asset('img/placeholder.svg') }}" alt="{{ $post->title }}"
                                                class="lazyload" data-src="{{ Voyager::image( $post->image ) }}">
                                            @else--}}
                                            {{--<img src="{{ asset('img/placeholder.svg') }}" alt="{{ $post->title }}"
                                                --}} {{--class="card-img-top"> @endif--}} <img src="{{ asset('img/placeholder.svg') }}"
                                                class="card-img-top" alt="tes">
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
                                            <a href="" class="text-muted"><i class="fa fa-store"></i> Butik Ayu
                                                Pekalongan</a>
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
                    <div class="container mt-5">
                    <div class="row">
                        <h6 class="container mb-5 col-sm-8"></h6>
                        <div class="col-sm-4">
                        <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item-pasarbatik"><a class="page-link-pasarbatik" href="#">Previous</a></li>
                                    <li class="page-item-pasarbatik"><a class="page-link-pasarbatik" href="#">1</a></li>
                                    <li class="page-item-pasarbatik"><a class="page-link-pasarbatik" href="#">2</a></li>
                                    <li class="page-item-pasarbatik"><a class="page-link-pasarbatik" href="#">3</a></li>
                                    <li class="page-item-pasarbatik"><a class="page-link-pasarbatik" href="#">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                            
                        </div>
                    </div>
                </div>
</section>

@endsection
