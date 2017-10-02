@extends('admin/template')
@section('test')
	<meta charset="UTF-8">
	<link href="{{asset('css/bootstrap-tableadmin.css')}}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-tableadmin.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <link href="{{asset('css/bootstrap-menu.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>    
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!-- <style>
		body{
			background-color: #85e085;
		}
	</style> -->
	<!-- navbar -->
	<!-- <nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				 <a class="navbar-brand">Kaset-Warehouse</a>
			</div>

			<ul class="nav navbar-nav">
                <li class="active"><a href="product">คลังสินค้า</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="logout.blade.php">
						<span class="glyphicon glyphicon-log-in"></span>  LOGOUT
					</a>
				</li>
			</ul>
		</div>
	</nav> -->

@include('admin.navbar')
             
@include('admin.leftmenu')

<!-- <div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <nav class="navbar navbar-default">
                      <div class="container-fluid">
                        <div class="navbar-header">
                          
                        </div>
                        <ul class="nav navbar-nav">
                            <li><a href="home1">หน้าแรก</a></li>
                            <li><a href="product">คลังสินค้า</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#">บทความ</a></li>
                            <li><a href="#">กระดานถาม-ตอบ</a></li>
                        </ul>
                      </div>
                  </nav>

              </div>
            </div>
           
 -->
                    <div class="container">
                	<div class="row">
                      <div class="col-md-9">
                      <h4>สินค้าใกล้หมดอายุ</h4><hr>
                        <!--  <div class="row col-md-6 col-md-offset-2 custyle"> -->
                        <div class="table-responsive">
                          <div class="panel panel-default panel-table"> 
                    <table class="table table-striped table-bordered table-list">
                    <thead>
                        <tr>
                            <th class="text-center">รหัสสินค้า</th>
                            <th class="text-center">ชื่อสินค้า</th>
                            <th class="text-center">ประเภท</th>
                            <th class="text-center">ต้นทุน</th>
                            <th class="text-center">ราคาขาย</th>
                            <th class="text-center">วันผลิต</th>
                            <th class="text-center">วันหมดอายุ</th>
                            <th class="text-center">จำนวน</th>
                        </tr>
                    </thead>
                                    @foreach($products as $index)
                                      <tbody>
                                            <tr>
                                            <td>{{$index->id}}</td>
                                            <td>{{$index->pro_name}}</td>
                                            <td>{{$index->pro_type}}</td>
                                            <td>{{$index->pro_price}}</td>
                                            <td>{{$index->pro_sale_price}}</td>
                                            <td>{{$index->pro_maf_date}}</td>
                                            <td>{{$index->pro_ex_date}}</td>
                                            <td>{{$index->pro_amount}}
                                                
                                              </td>
                                            </tr>
                                      </tbody>
                                    @endforeach                
                    </table>
                    </div>
                   
                </div>
                </div>
            </div>
                </div>
	<!-- Scripts -->
	    <script src="{{ asset('js/app.js') }}"></script>
@endsection