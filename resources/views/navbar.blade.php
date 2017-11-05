<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="css/navbar.css">
  <script type="text/javascript" src="js/navbar.js"></script>
  <script>
      function openNav() {
    document.getElementById("mySidenav").style.width = "70%";
    // document.getElementById("flipkart-navbar").style.width = "50%";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.body.style.backgroundColor = "rgba(0,0,0,0)";
}
  </script>
</head>
<body>

<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<div id="flipkart-navbar">
    <div class="container">
        <div class="row row1">
        
        <ul class="largenav pull-right">
                <li class="upper-links"><a class="links" href="{{url('/home1')}}">หน้าแรก</a></li>
                <li class="upper-links dropdown"><a class="links">หมวดสินค้า</a>
                <ul class="dropdown-menu">
                        <li class="profile-li"><a class="profile-links" href="{{url('/vegetable')}}">ผัก</a></li>
                        <li class="profile-li"><a class="profile-links" href="{{url('/fruit')}}">ผลไม้</a></li>
                        <li class="profile-li"><a class="profile-links" href="{{url('/plant')}}">พืชไร่</a></li>
                        <li class="profile-li"><a class="profile-links" href="{{url('/dried_food')}}">ของแห้ง</a></li>
                        <li class="profile-li"><a class="profile-links" href="{{url('/product_general')}}">สินค้าทั่วไป</a></li>
                    </ul>
                </li>
                @if (Auth::user()->name=="หทัยชนก อินทนิน")
                <li class="upper-links"><a class="links" href="{{url('/products')}}">คลังสินค้า</a></li>
                @endif
                @if (Auth::user()->name=="หทัยชนก อินทนิน")
                <li class="upper-links dropdown"><a class="links">รายการสินค้า</a>
                <ul class="dropdown-menu">
                        <li class="profile-li"><a class="profile-links" href="{{url('/bestseller')}}">สินค้าขายดี</a></li>
                        <li class="profile-li"><a class="profile-links" href="{{url('/out_of_stock')}}">สินค้าใกล้หมดคลัง</a></li>
                        <li class="profile-li"><a class="profile-links" href="{{url('/exp')}}">สินค้าใกล้หมดอายุ</a></li>
                        <li class="profile-li"><a class="profile-links" href="{{url('/balance')}}">สินค้าคงเหลือ</a></li>
                    </ul>
                </li>
                @endif
                <!-- <li class="upper-links">
                    <a class="links" href="http://clashhacks.in/">
                        <svg class="" width="16px" height="12px" style="overflow: visible;">
                            <path d="M8.037 17.546c1.487 0 2.417-.93 2.417-2.417H5.62c0 1.486.93 2.415 2.417 2.415m5.315-6.463v-2.97h-.005c-.044-3.266-1.67-5.46-4.337-5.98v-.81C9.01.622 8.436.05 7.735.05 7.033.05 6.46.624 6.46 1.325v.808c-2.667.52-4.294 2.716-4.338 5.98h-.005v2.972l-1.843 1.42v1.376h14.92v-1.375l-1.842-1.42z" fill="#fff"></path>
                        </svg>
                    </a>
                </li> -->
            
         
          @if (Auth::guest())
                <li class="upper-links"><a class="links" href="{{url('/login')}}">ลงชื่อเข้าใช้</a></li>
                <li class="upper-links"><a class="links" href="{{url('/register')}}">สมัครสมาชิก</a></li>
          @else
                            <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <span class="glyphicon glyphicon-user">
                                </span>&nbsp;
                            {{ Auth::user()->name }}&nbsp;<span class="caret"></span>
                            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
              <li><a href="{{url('data')}}">บัญชีผู้ใช้</a></li>
              <li><a href="{{url('ch_pass')}}">เปลี่ยนรหัสผ่าน</a></li>
              <li role="separator" class="divider"></li>
              <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form></li>
            </ul>
            </div>



                
            @endif
        
          </div>
          <div class="row row2">
            <div class="col-sm-2">
                <h2 style="margin:0px;"><span class="smallnav menu" onclick="openNav()">☰ Brand</span></h2>
                <h1 style="margin:0px;"><span class="largenav"></span></h1>
            </div>
            <div class="flipkart-navbar-search smallsearch col-sm-8 col-xs-11">
                <div class="row">
                    <input class="flipkart-navbar-input col-xs-11" type="" placeholder="ค้นหาสินค้าหรือหมวดหมู่สินค้า" name="">
                    <button class="flipkart-navbar-button col-xs-1">
                        <svg width="15px" height="15px">
                            <path d="M11.618 9.897l4.224 4.212c.092.09.1.23.02.312l-1.464 1.46c-.08.08-.222.072-.314-.02L9.868 11.66M6.486 10.9c-2.42 0-4.38-1.955-4.38-4.367 0-2.413 1.96-4.37 4.38-4.37s4.38 1.957 4.38 4.37c0 2.412-1.96 4.368-4.38 4.368m0-10.834C2.904.066 0 2.96 0 6.533 0 10.105 2.904 13 6.486 13s6.487-2.895 6.487-6.467c0-3.572-2.905-6.467-6.487-6.467 "></path>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="cart largenav col-sm-2">
                <a class="cart-button">
                    <svg class="cart-svg " width="16 " height="16 " viewBox="0 0 16 16 ">
                        <path d="M15.32 2.405H4.887C3 2.405 2.46.805 2.46.805L2.257.21C2.208.085 2.083 0 1.946 0H.336C.1 0-.064.24.024.46l.644 1.945L3.11 9.767c.047.137.175.23.32.23h8.418l-.493 1.958H3.768l.002.003c-.017 0-.033-.003-.05-.003-1.06 0-1.92.86-1.92 1.92s.86 1.92 1.92 1.92c.99 0 1.805-.75 1.91-1.712l5.55.076c.12.922.91 1.636 1.867 1.636 1.04 0 1.885-.844 1.885-1.885 0-.866-.584-1.593-1.38-1.814l2.423-8.832c.12-.433-.206-.86-.655-.86 " fill="#fff "></path>
                    </svg> ตะกร้า
                    <span class="item-number ">0</span>
                </a>
            </div>
        </div>
    </div>
</div>
       
      </div>
</div>


</body>
</html>