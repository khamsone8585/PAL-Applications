@extends('layout.index')
@section('content')
    <div class="main-content">
        <section class="section">
            <h1 class="section-header"><div>Contact US</div></h1>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="row">
							<div class="col-12 col-sm-6 col-lg-3">
								<div class="card card-sm">
									<div class="card-icon text-primary"> <i class="ion ion-person"></i> </div>
									<div class="card-wrap">
										<div class="card-body"> 10 </div>
										<div class="card-header">
											<h4>Total Admin</h4> </div>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-lg-3">
								<div class="card card-sm">
									<div class="card-icon text-danger"> <i class="ion ion-ios-paper-outline"></i> </div>
									<div class="card-wrap">
										<div class="card-body"> 42 </div>
										<div class="card-header">
											<h4>News</h4> </div>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-lg-3">
								<div class="card card-sm">
									<div class="card-icon text-warning"> <i class="ion ion-paper-airplane"></i> </div>
									<div class="card-wrap">
										<div class="card-body"> 1,201 </div>
										<div class="card-header">
											<h4>Reports</h4> </div>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-lg-3">
								<div class="card card-sm">
									<div class="card-icon text-success"> <i class="ion ion-record"></i> </div>
									<div class="card-wrap">
										<div class="card-body"> 47 </div>
										<div class="card-header">
											<h4>Online Users</h4> </div>
									</div>
								</div>
							</div>
						</div>
                    </div>
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>ລດ</th>
                                <th>ຊື່</th>
                                <th>ອີເມລ</th>
                                <th>ເນື້ອໃນ</th>
                                <th>ປູ່ມຄຳສັ່ງ</th>
                            </tr>
                            </thead>
                            <tbody>
            
                            @php
                                $no = 1;   
                            @endphp
            
                            
                            <tr>
                                <td>{{$no++}}</td>
                                <td>khamsone</td>
                                <td>asoulipanya@gmail.com</td>
                                <td>
                                    <span class="d-inline-block text-truncate" style="max-width: 200px;">
                                        To be the leader in private analytical testing laboratory in Lao PDR with the international standard quality service.
                                    </span>
                                </td>
                                <td>
                                    <form action="" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('ທ່ານຕ້ອງການລຶບຂໍ້ມູນນີ້ ຫຼື ບໍ?')"><i class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                                
                                </tr>  
                            </table>
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