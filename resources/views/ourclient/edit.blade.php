@extends('layout.index')
@section('content')
    <div class="main-content">
        <section class="section">
            <h1 class="section-header"><div>Edit OurClient</div></h1>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form class="needs-validation" novalidate>
                                    <div class="form-row">
                                        <div class="input-group mb-3 col-4">
                                                <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03">
                                                <label class="custom-file-label" for="inputGroupFile03">Choose file</label>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="form-row mb-3">
                                        <img src="{{asset('assets/img/Client/Client1.jpeg')}}" class="rounded mx-auto d-block" alt="...">
                                    </div>
                                <div class="text-center mb-3">
                                    <button class="btn btn-success" type="submit">Submit form</button>
                                    <button class="btn btn-danger" type="reset">Reset form</button>
                                </div>
                            </form>
                        </div>
                    <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            
        </section>
    </div>
@endsection