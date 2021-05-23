@extends('layout.index')
@section('content')
    <div class="main-content">
        <section class="section">
            <h1 class="section-header"><div>Service</div></h1>
            <div class="row">
                <div class="col-12">

                    <div class="card">
                    <div class="card-header">
                        <a href="" class="btn btn-primary btn-sm"><i class="fas fa-add"></i>ເພີ່ມໃໝ່</a>
                    </div>
                    
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ລດ</th>
                            <th>ໂລໂກ້</th>
                            <th>ຊື່ໜ່ວຍບໍລີການ</th>
                            <th>ຄຳອະທິບາຍ</th>
                            <th>ປູ່ມຄຳສັ່ງ</th>
                        </tr>
                        </thead>
                        <tbody>
        
                        @php
                            $no = 1;   
                        @endphp
        
                        
                        <tr>
                            <td>{{$no++}}</td>
                            <td><img src="{{asset('assets/img/Ourservice/1.png')}}" width="100" alt="..."></td>
                            <td>Air Quality Analysis</td>
                            <td>
                                <span class="d-inline-block text-truncate" style="max-width: 200px;">
                                    Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident
                                </span>
                            </td>
                            <td>
                                <form action="" method="POST">
                                    @csrf
                                    @method('DELETE')
            
                                    <a href="" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
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