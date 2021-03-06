@extends('admin/master')
@section('search')
    <form>
        <div class="input-group">
            <input type="text" class="form-control search-input" placeholder=" Enter Id OF Category">
            <button type="button" class="btn btn-white search-button"><i class="fas fa-search text-danger"></i></button>
        </div>
    </form>
@endsection

@section('body')
    <section>
        <div class="container-fluid">
            <div class="row mb-5">
                <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                    <div class="col-xl-12 col-12">
                        <div class="row">
                            <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
                                <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="tm-block-title d-inline-block">Add Category</h2>
                                        </div>
                                    </div>
                                    <div class="row tm-edit-product-row">
                                        <div class="col-xl-6 col-lg-6 col-md-12">
                                            <form action="" class="tm-edit-product-form">
                                                <div class="form-group mb-3">
                                                    <label
                                                        for="name"
                                                    >Category Name
                                                    </label>
                                                    <input
                                                        id="name"
                                                        name="name"
                                                        type="text"
                                                        class="form-control validate"
                                                        required
                                                    />
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label
                                                        for="description"
                                                    >Description</label
                                                    >
                                                    <textarea
                                                        class="form-control validate"
                                                        rows="3"
                                                        required
                                                    ></textarea>
                                                </div>



                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                                            <div class="tm-product-img-dummy mx-auto">
                                                <i
                                                    class="fas fa-cloud-upload-alt tm-upload-icon"
                                                    onclick="document.getElementById('fileInput').click();"
                                                ></i>
                                            </div>
                                            <div class="custom-file mt-3 mb-3">
                                                <input id="fileInput" type="file" style="display:none;" />
                                                <input
                                                    type="button"
                                                    class="btn btn-primary btn-block mx-auto"
                                                    value="UPLOAD PRODUCT IMAGE"
                                                    onclick="document.getElementById('fileInput').click();"
                                                />
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary btn-block text-uppercase">Add Category Now</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
