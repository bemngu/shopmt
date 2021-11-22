@extends('layout')
@section('content')
<div style="margin-top: 60px;" class="container">
          <div class="row">
              <div class="col-sm-1">               
              </div>
              <div style="margin-left:18px" class="col-sm-10">
                  <img class="a1" src="https://cafezone.dexignlab.com/angular/assets/images/background/bg2.jpg" alt="">
                  <div class="nenden"></div>
                  <div class="a2">DID YOU KNOW?</div>
                  <div class="a3">ABOUT OUR SHOP</div>
                  <div class="a4">
                      <img src="https://cafezone.dexignlab.com/angular/assets/images/icons/icon1.png" alt="">
                  </div>
                  <div class="a5">FAMOUS FOR OUR COFFEE</div>
                  <div class="a6">
                      <img src="https://cafezone.dexignlab.com/angular/assets/images/icons/icon2.png" alt="">
                  </div>
                  <div class="a7">CONTACT US</div>
                  <div class="a8">
                      <img src="https://cafezone.dexignlab.com/angular/assets/images/icons/icon3.png" alt="">
                  </div>
                  <div class="a9">OPEN EVERYDAY 08:00 - 23:00</div>
                  <div class="a10">
                      <img src="https://cafezone.dexignlab.com/angular/assets/images/icons/icon4.png" alt="">
                  </div>
                  <div class="a11">LOCATED IN CITY CENTER</div>
              </div>
              <div class="col-sm-1">               
              </div>
       
          </div>
      </div>





<style>
.a5, .a7, .a9, .a11{
    font-size: 14px;
    line-height: 24px;
    position: absolute;
    top: 300px;
    z-index: 2;
    color: #fff;
    font-variant: all-petite-caps;
    left: 119px;
}
.a1{
    width: 100%;
    height: 450px;
    position: relative;
    border-radius: 50px;
}
.nenden{
    position: absolute;
    top: 0;
    z-index: 1;
    background: rgb(0 0 0 / 73%);
    width: 97%;
    height: 450px;
    border-radius: 50px;
}

.a4 img{
    position: absolute;
    top: 218px;    height: 65px;  
      z-index: 2;    left: 147px;
}
.a6 img{
    position: absolute;
    top: 218px;    height: 65px;  
      z-index: 2;    left: 337px;
}
.a8 img{
    position: absolute;
    top: 218px;    height: 65px;  
      z-index: 2;    left: 543px;
}
.a10 img{
    position: absolute;
    top: 218px;    height: 65px;  
      z-index: 2;    left: 761px;
}
.a2{
    position: absolute;
    top: 10px;
    left: 310px;
    font-size: 102px;
    z-index: 2;
    color: white;
    font-weight: bolder;
    font-variant-caps: all-petite-caps;
    letter-spacing: 1px;
    font-family: 'Open Sans Condensed';
}
.a3{
    position: absolute;
    z-index: 2;
    top: 127px;
    font-size: 14px;
    left: 400px;
    color: #da5933;
    font-variant: all-small-caps;
    letter-spacing: 10px;

}
.a7{
    left: 338px;
}
.a9{
    left: 535px;
    width: 81px;
    text-align: center;
    height: 53px;
}
.a11{
    left: 738px;
}

</style>
@endsection