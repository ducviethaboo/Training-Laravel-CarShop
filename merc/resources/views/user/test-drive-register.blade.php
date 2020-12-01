@extends('core.master')
@section('content')
<div class="main">
    <div class="shop_top">
        <div class="container">
            <form>
                <div class="register-top-grid">
                    <h2>Đăng ký lái thử</h2>
                    <div>
                        <span>Họ và tên<label>*</label></span>
                        <input type="text">
                    </div>
                    <div>
                        <span>Số điện thoại<label>*</label></span>
                        <input type="text">
                    </div>
                    <div>
                        <span>Email<label>*</label></span>
                        <input type="text">
                    </div>
                    <div>
                        <span>Mẫu xe lái thử<label>*</label></span>
                        <select id="inputState" class="form-control">
                            @foreach($products as $product)
                            <option selected>{{$product->productName}}</option>
                            @endforeach
                        </select>
                    </div>

                </div>
                <div class="clear"> </div>
                <div class="register-bottom-grid">
                    <div>
                        <span>Ngày đăng ký lái thử<label>*</label></span>
                        <input type="date">
                    </div>
                    <div class="clear"> </div>
                </div>
                <div class="clear"> </div>
                <input style="font-size: 18px" class="btn btn-primary" type="submit" value="Xác nhận">
                <a class="btn" href="{{route('home')}}">Quay lại trang chủ</a>
            </form>
        </div>
    </div>
</div>

@endsection
