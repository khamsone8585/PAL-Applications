@extends('layout.index')
@section('content')
    <div class="main-content">
        <section class="section">
            <h1 class="section-header"><div>Create Service</div></h1>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form class="needs-validation" novalidate>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationTextarea">Content Main</label>
                                        <textarea class="form-control" id="validationTextarea" required></textarea>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationTextarea">Vision</label>
                                        <textarea class="form-control" id="validationTextarea" required></textarea>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationTextarea">Mission</label>
                                        <textarea class="form-control" id="validationTextarea" required></textarea>
                                    </div>
                                </div>
                                
                                <button class="btn btn-success" type="submit">Submit form</button>
                                <button class="btn btn-danger" type="reset">Reset form</button>
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