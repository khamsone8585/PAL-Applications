@extends('layout.index')
@section('content')
    <div class="main-content">
        <section class="section">
            <h1 class="section-header"><div>About</div></h1>
            <div class="row">
                <div class="col-12">

                    <div class="card">
                    <div class="card-header">
                    </div>
                    
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ລດ</th>
                            <th>content</th>
                            <th>Vision</th>
                            <th>Vision</th>
                            <th>ປູ່ມຄຳສັ່ງ</th>
                        </tr>
                        </thead>
                        <tbody>
        
                        @php
                            $no = 1;   
                        @endphp
        
                        
                        <tr>
                            <td>{{$no++}}</td>
                            <td>
                                <span class="d-inline-block text-truncate" style="max-width: 300px;">
                                    Phanthamit Analytical Lab (PAL), is an independent Environment Laboratory Service Provider that offers international standard laboratory services with quality instruments, well trained staff and is ISO/IEC 17025 accredited. PAL provides a wide range of environmental analysis services which include Water, Air, Sediment & Soil along with Noise and Vibration testing. These services are done according to Lao National Environmental Standards. PAL provides an efficient, budget conscious service with focus on delivering high quality results. PAL also provides services for samples to be analyzed by laboratories in Thailand under the collaboration with Eastern Thai Consulting (1992). In addition, PAL provides a highly professional service in standardized calibration for measurement and scientific instruments under the collaboration with AMARC in Thailand.
                                </span>
                            </td>
                            <td>
                                <span class="d-inline-block text-truncate" style="max-width: 250px;">
                                To be the leader in private analytical testing laboratory in Lao PDR with the international standard quality service.
                                </span>
                            </td>
                            <td>
                                <span class="d-inline-block text-truncate" style="max-width: 500px;">
                                To provide highest quality laboratory services in a timely, accurate, and efficient manner through the use of quality instrument, standardized testing method and technical expertise. To continually improve quality, processes, and knowledge base through research and collaboration. To recognize and pay attention to the needs of customers, working openly and cooperatively in setting work schedules and meeting targets.
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