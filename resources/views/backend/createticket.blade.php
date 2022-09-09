@extends('backend.layout')
@section('admin')


<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->

            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Create Ticket</h4>
                            <div class="flex-shrink-0">
                                <div class="form-check form-switch form-switch-right form-switch-md">



                                </div>
                            </div>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="live-preview">
                                <div class="row gy-4">
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label for="basiInput" class="form-label">Name</label>
                                            <input type="Text" class="form-control" id="">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label for="labelInput" class="form-label"> Quantity</label>
                                            <input type="Text" class="form-control" id="">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label for="placeholderInput" class="form-label">Price</label>
                                            <input type="text" class="form-control" id="" placeholder="">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-3 col-md-6">
                                        <label for="valueInput" class="form-label">Category</label>
                                        <select class="form-select mb-3" aria-label="Default select example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>

                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label for="valueInput" class="form-label">Event Starts</label>
                                            <input type="date" class="form-control" id="">
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label for="exampleInputdate" class="form-label">Start Time</label>
                                            <input type="time" class="form-control" id="exampleInputdate">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label for="exampleInputdate" class="form-label">End Date</label>
                                            <input type="date" class="form-control" id="exampleInputdate">
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label for="readonlyInput" class="form-label">End Time</label>
                                            <input type="time" class="form-control" id="exampleInputdate">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label for="readonlyInput" class="form-label"> Maximum Quantity</label>
                                            <input type="Text" class="form-control" id="exampleInputdate">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label for="readonlyInput" class="form-label"> Minimum Quantity</label>
                                            <input type="Text" class="form-control" id="exampleInputdate">
                                        </div>
                                    </div>




                                    <!--end col-->

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0">Add Description</h4>
                                                </div><!-- end card header -->

                                                <div class="card-body">

                                                    <div class="ckeditor-classic">
                                                        <textarea id="editor3"></textarea>
                                                    </div>
                                                </div><!-- end card-body -->
                                            </div><!-- end card -->
                                        </div>
                                        <!-- end col -->
                                        <!--end col-->

                                        <div>
                                            <button type="button" class="btn btn-primary bg-gradient waves-effect waves-light">Create Ticket</button>
                                        </div>
                                    </div>
                                </div>
                                <!--end row-->
                            </div>

                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

        </div><!-- End Page-content -->

        <script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
        <script>
            CKEDITOR.replace('editor3');
        </script>






        @endsection