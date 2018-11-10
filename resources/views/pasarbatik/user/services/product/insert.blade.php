@extends('layouts.main')
@push('body') class="bg-light"
@endpush

@push('css')
    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            /* display: none; <- Crashes Chrome on hover */
            -webkit-appearance: none;
            margin: 0; /* <-- Apparently some margin are still there even though it's hidden */
        }
    </style>
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">--}}
    <style>
        .dropzone {
            border: 2px dashed #966b5e;
            border-radius: 5px;
            background: white;
        }
    </style>
@endpush
@section('content')
    <section class="mt-5" id="edit-profile">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    @include('pasarbatik.user.sidebar-dashboard')
                </div>
                <div class="col-md-9">
                    <small>
                        <ol class="breadcrumb" style="background:transparent">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Partner</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Jual Batik</li>
                        </ol>
                    </small>
                    <hr>
                    <h2 class="section-heading pl-3">Jual Batik</h2>

                    <div class="card p-4">
                        <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data"
                              id="thisproduct">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="dropzone">Upload Image <a href="#" data-toggle="image-product"
                                                                              title="Upload Image Productmu! (multiple image)"><i
                                                    class="fa fa-info-circle"></i></a></label>
                                        <div id="file" class="dropzone"></div>
                                    </div>
                                    {{-- Loop Content --}}
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="name">Nama Produk</label>
                                            <input type="text" class="form-control" id="name" name="name" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="category">Kategori Produk</label>
                                            <select class="selectpicker form-control" data-live-search="true"
                                                    title="Pilih Kategori"
                                                    data-style="bg-white border" id="category" name="category_id">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Deskripsi</label>
                                        <textarea name="description" id="description" rows="5" class="form-control"
                                                  placeholder="Deskripsi Produk"></textarea>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="price">Harga</label>

                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Rp.</span>
                                                    </div>
                                                    <input type="number" name="price" id="price" class="form-control"
                                                           required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="quantity">Jumlah</label>
                                                <input type="number" name="quantity" id="quantity"
                                                       class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="size">Ukuran (Size)</label>
                                        <select name="size[]" id="size" class="form-control select2" multiple>
                                            <option value="s">S</option>
                                            <option value="m">M</option>
                                            <option value="l">L</option>
                                            <option value="xl">XL</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <span class="float-right">

                                            <button type="submit" class="btn btn-sm btn-pasarbatik">Publish</button>
                                        </span>
                                    </div>

                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
@push('js')
    <script type="text/javascript">
        $(function () {
            $('[data-toggle="video"]').tooltip();
        });

        @if(Session::has('success'))
        swal("Berhasil !", '{{ Session::get('success') }}', "success");
        @endif


        $(function () {

            $('.select2').select2();

            $.ajax({
                async: false,
                type: 'GET',
                url: '{{ route('categories.index') }}',
                success: function (data) {
                    $.each(data.data, function (index, value) {
                        $('#category').append(
                            '<option value="' + value['id'] + '">' + value['name'] + '</option>'
                        )
                    })
                },
                error: function (data) {
                    console.log('Error:', data)
                }
            })
        });
    </script>

    <script type="text/javascript">
        let drop = new Dropzone('#file', {
            addRemoveLinks: true,
            url: '{{ route('upload.image') }}',
            headers: {
                'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content
            },

        });

        drop.on("success", function (file, res) {
            file.id = res.id;
            $("#thisproduct").append($('<input type="hidden" ' + 'name="product_images[]" ' + 'value="' + res.id + '" id="image' + res.id + '">'))
        });


        drop.on('removedfile', function (file) {
            axios.delete('/delete-image/' + file.id)
                .then(function (response) {
                    console.log(response.status);
                    $('#image' + file.id).remove();
                })
                .catch(function (error) {
                });
        });

    </script>
@endpush
