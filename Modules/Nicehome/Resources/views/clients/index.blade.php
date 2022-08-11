@extends('nicehome::layouts.master')
@section('style')
<link rel="stylesheet" href="{{ mix('css/style.css') }}">
@endsection
@section('content')
<div class="menu">
    <div class="menu-content row">
        <div class="menu_item col-6 ">
            <a href="#"><img src="./images/yeu-nha.svg" alt=""> NHÀ ĐẸP</a>
        </div>
        <div class="menu_item col-6 ">
            <a href="#"><img src="./images/yeu-decor.svg" alt=""> PHÒNG</a>
        </div>
    </div>
</div>
@include('nicehome::clients.search')
<div class="content">
    <div class="breadcrumb">
        <ul>
            <li><a href="#">Homedy</a></li>
            <!-- <img src="./images/" alt=""> -->
            <li><a href="#">Thiết kế nhà đẹp</a></li>
        </ul>
    </div>
    <h1>Tổng hợp những mẫu thiết kế nhà đẹp hiện đại, mới nhất 2022</h1>
    @include('nicehome::clients.products')
    <div class="page">
        <ul>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">></a></li>
        </ul>
    </div>
    <div class="des">
        <p>1000+ <b>mẫu nhà đẹp</b>, mẫu thiết kế chung cư, biệt thự, nhà phố,... trên Homedy sẽ giúp bạn thỏa mãn
            nhãn quan của mình. Hơn hết, chúng còn mang đến những ý tưởng mới để bạn thiết kế căn nhà của riêng
            mình.</p>
        <p>Xây nhà một trong những việc quan trọng trong cuộc đời mỗi người. Trước đây, nhiều người cho rằng việc
            thiết kế nhà trước khi thi công là tốn kém, không cần thiết. Tuy nhiên, các yêu cầu về nhà ở hiện nay
            ngày càng cao, nhà ở vừa phải đảm bảo tính thẩm mỹ, vừa phải có đầy đủ công năng. Chính vì vậy, nếu
            không tiến hành thiết kế, việc thi công hoàn thiện nhà theo đúng yêu cầu là vô cùng khó khăn. Bên cạnh
            đó, chi phí thi công, trang trí nhà không được tính toán trước rất khó kiểm soát và dễ bị phụ trội.</p>
        <p>Xây nhà một trong những việc quan trọng trong cuộc đời mỗi người. Trước đây, nhiều người cho rằng việc
            thiết kế nhà trước khi thi công là tốn kém, không cần thiết. Tuy nhiên, các yêu cầu về nhà ở hiện nay
            ngày càng cao, nhà ở vừa phải đảm bảo tính thẩm mỹ, vừa phải có đầy đủ công năng. Chính vì vậy, nếu
            không tiến hành thiết kế, việc thi công hoàn thiện nhà theo đúng yêu cầu là vô cùng khó khăn. Bên cạnh
            đó, chi phí thi công, trang trí nhà không được tính toán trước rất khó kiểm soát và dễ bị phụ trội.</p>
        <h2>
            <strong>Các mẫu thiết kế nhà phổ biến</strong>
        </h2>
        <h3>
            <strong>Mẫu thiết kế nhà biệt thự đẹp</strong>
        </h3>
        <p>Biệt thự là một trong những loại hình nhà ở cao cấp, được những người có tài chính, giới thượng lưu đặc
            biệt yêu thích. Thiết kế biệt thự ngoài nhà ở còn có sân vườn và nhiều công trình tiện ích khác như: hồ
            bơi, khu tiệc ngoài trời, gara,...</p>
        <p>Mời bạn tham khảo một số mẫu biệt thự đẹp do Homedy tổng hợp dưới đây:</p>
        <div class="img_house">
            <img src="./images/biet-thu-mini-01-637583999571852228.jpg" alt="">
        </div>
        <p>Mẫu biệt thự mini phù hợp với không gian nhà ở đô thị đông đúc. Mẫu biệt thự mini giá rẻ 2 tầng mang
            phong cách hiện đại hiện đại, hoàn toàn không có những chi tiết thừa, chi tiết thiết kế rườm rà.</p>
        <p>Công trình này thường có chi phí ít hơn so với những loại hình biệt thự khác. Việc sử dụng chất liệu hiện
            đại một các khoa học, thông minh giúp hạn chế tối đa chi phí. Trong khi đó, vẫn đảm bảo được các công
            năng của căn nhà, mang tới không gian sống tiện nghi cho bạn.</p>
        <div class="img_house">
            <img src="./images/biet-thu-san-vuon-02-637583999854933050.jpg" alt="">
        </div>
        <p>Mẫu biệt thự sân vườn này được thiết kế với hệ thống mái thái sậm màu, tương phản với nền sơn trắng. Cách
            phối màu này khiến căn nhà trở nên ấn tượng và bắt mắt hơn. </p>
        <p>Bể bơi được xây dựng ngay trước nhà, khiến không gian của toàn bộ khuôn viên biệt thự rất thoáng mát, hài
            hòa với tự nhiên.</p>
        <p>Phòng khách và khu vực sinh hoạt chung được bố trí ngay bên phải lối vào. Các phòng ngủ được bố trí đối
            xứng qua phòng khách, đáp ứng nhu cầu sinh hoạt của các thành viên trong gia đình. </p>
        <p>Phòng bếp được đặt tách biệt nhằm hạn chế ám mùi vào các không gian khác. Phòng tắm và wc được đặt ở cuối
            nhà để tạo sự kín đáo, thuận tiện khi sử dụng.</p>
        <div class="img_house">
            <img src="./images/biet-thu-chu-l-3-637584007089363963.jpg" alt="">
        </div>
        <p>Mẫu biệt thự đẹp chữ L được xây dựng với hệ mái thái đỏ tươi kiểu truyền thống. Mái nhà có độ dốc thoai
            thoải vừa phải giúp thoát nước dễ dàng. </p>
        <p>Bộ ba phòng khách, phòng bếp và khu vực ăn uống được thiết kế theo dạng chữ L. Bốn phòng ngủ được bố trí
            cạnh nhau. Đây là kiểu biệt thự nhà vườn phổ biến, đặc trưng cho các công trình nhà biệt thự tại Việt
            Nam.</p>
        <div class="img_house">
            <img src="./images/biet-thu-hien-dai-4-637584000059176222.jpg" alt="">
        </div>
        <p>Phong cách nhà hiện đại với 4 phòng ngủ đặt ngay sát cửa chính, cho tầm nhìn “xanh”, vô cùng thoáng đãng
            ra khoảng sân trước nhà. Phía sau là phòng khách, phòng thờ, các không gian chung được bố trí đơn giản.
        </p>
    </div>
    <div class="share_repos">

    </div>
</div>
@endsection