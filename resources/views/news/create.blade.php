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
                                        <label for="validationTooltip01">Name Title</label>
                                        <input type="text" class="form-control" id="validationTooltip01" value="" required>
                                        <div class="valid-tooltip">
                                        Looks good!
                                        </div>
                                    </div>
                                    <div class="form-group col-6 md-4">
                                        <label for="inputState">ປະເພດຂ່າວ</label>
                                        <select id="inputState" class="form-control">
                                            <option selected>ເລືອກປະເພດຂ່າວ...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <h1>ເນື້ອໃນ</h1>
                                    <form method="post">
                                        <textarea id="mytextarea" name="mytextarea">
                                        Hello, World!
                                        </textarea>
                                    </form>
                                </div>
                                <button class="btn btn-success" type="submit">ຕົກລົງ</button>
                                <button class="btn btn-danger" type="reset">ລົບລ້າງ</button>
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