@extends('layout.index')
@section('content')
    <div class="main-content">
        <section class="section">
            <h1 class="section-header"><div>Edit Service</div></h1>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form class="needs-validation" novalidate>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationTooltip01">Name Service</label>
                                        <input type="text" class="form-control" id="validationTooltip01" value="" required>
                                        <div class="valid-tooltip">
                                        Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationTextarea">Description</label>
                                        <textarea class="form-control" id="validationTextarea" placeholder="Required example textarea" required></textarea>
                                        
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="input-group mb-3">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputGroupFile02">
                                            <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
                                        </div>
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