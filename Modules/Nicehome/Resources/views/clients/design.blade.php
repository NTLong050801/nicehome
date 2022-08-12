
@extends('nicehome::layouts.master')
@section('style')
<link rel="stylesheet" href="{{ mix('css/design.css') }}">
@endsection


@section('content')
<div class="menu">
    <div class="menu-content row">
        <div class="menu_item col-6 ">
            <a href="#"><img src=".././images/yeu-nha.svg" alt=""> NHÀ ĐẸP</a>
        </div>
        <div class="menu_item col-6 ">
            <a href="#"><img src=".././images/yeu-decor.svg" alt=""> PHÒNG</a>
        </div>
    </div>
</div>
@include('nicehome::clients.search')
<div class="content">
    <div class="breadcrumb">
        <ul>
            <li><a href="#">Homedy</a></li>

            <li><a href="#">Thiết kế nhà đẹp</a></li>
            <li><a href="#">Phòng</a></li>
        </ul>
    </div>
   
    <h1>Tổng hợp những ý tưởng trang trí phòng đẹp, hiện đại nhất 2022</h1>
    <div class="content_img">
        <div class="ro">
            <div class="card card_small ">
                <div class="author">
                    <a href="#">
                        <div class="avatar">
                            <img src=".././images/home_design/1-637447637870197485-637457182464199933.jpg_80x80.jpg"
                                alt="">
                        </div>
                        <div class="text-name">
                            <h2>Phùng Thanh Tú</h2>
                        </div>
                    </a>
                </div>
                <div class="card_right">
                    <div class="share">
                        <a href=""><img class="share_img" src="https://static.homedy.com/src/images/icon/share.svg"
                                alt=""></a>
                        <div class="sotical">
                            <label for="">
                                <span class="lb_share"></span>Chia Sẻ
                            </label>
                            <ul class="share-social">
                                <li><a href="#"><img src=".././images/fb.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/ins.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/zalo.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/in.svg" alt=""></a></li>


                            </ul>
                            <label for="" class="lb_copy">
                                <a href="#"> <span class="copy_url"></span>Sao chép liên kết</a>
                            </label>
                        </div>
                    </div>
                    <div class="lb_save">
                        <img src="https://static.homedy.com/src/images/icon/save.svg" alt=""><span>10</span>
                    </div>
                </div>
                <div class="div_img">
                    <img class="card_img"
                        src=".././images/home_design/163239659-437075694048568-568738197103448726-n-637527178921722198.jpg_480x480.jpg"
                        alt="">
                </div>
                <div class="hv_btn_save">
                    <button><i></i>Lưu</button>
                </div>
            </div>
            <div class="card card_medium">
                <div class="author">
                    <a href="#">
                        <div class="avatar">
                            <img src=".././images/home_design/1-637447637870197485-637457182464199933.jpg_80x80.jpg"
                                alt="">
                        </div>
                        <div class="text-name">
                            <h2>Phùng Thanh Tú</h2>
                        </div>
                    </a>
                </div>
                <div class="card_right">
                    <div class="share">
                        <a href=""><img class="share_img" src="https://static.homedy.com/src/images/icon/share.svg"
                                alt=""></a>
                        <div class="sotical">
                            <label for="">
                                <span class="lb_share"></span>Chia Sẻ
                            </label>
                            <ul class="share-social">
                                <li><a href="#"><img src=".././images/fb.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/ins.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/zalo.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/in.svg" alt=""></a></li>


                            </ul>
                            <label for="" class="lb_copy">
                                <a href="#"> <span class="copy_url"></span>Sao chép liên kết</a>
                            </label>
                        </div>
                    </div>
                    <div class="lb_save">
                        <img src="https://static.homedy.com/src/images/icon/save.svg" alt=""><span>10</span>
                    </div>
                </div>
                <div class="div_img">
                    <img class="card_img"
                        src=".././images/home_design/117509607-591936508145477-3260115862149071794-n-637498415978210640.jpg_480x480.jpg"
                        alt="">
                </div>
                <div class="hv_btn_save">
                    <button><i></i>Lưu</button>
                </div>
            </div>

            <div class="card card_large">
                <div class="author">
                    <a href="#">
                        <div class="avatar">
                            <img src=".././images/home_design/1-637447637870197485-637457182464199933.jpg_80x80.jpg"
                                alt="">
                        </div>
                        <div class="text-name">
                            <h2>Phùng Thanh Tú</h2>
                        </div>
                    </a>
                </div>
                <div class="card_right">
                    <div class="share">
                        <a href=""><img class="share_img" src="https://static.homedy.com/src/images/icon/share.svg"
                                alt=""></a>
                        <div class="sotical">
                            <label for="">
                                <span class="lb_share"></span>Chia Sẻ
                            </label>
                            <ul class="share-social">
                                <li><a href="#"><img src=".././images/fb.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/ins.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/zalo.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/in.svg" alt=""></a></li>


                            </ul>
                            <label for="" class="lb_copy">
                                <a href="#"> <span class="copy_url"></span>Sao chép liên kết</a>
                            </label>
                        </div>
                    </div>
                    <div class="lb_save">
                        <img src="https://static.homedy.com/src/images/icon/save.svg" alt=""><span>10</span>
                    </div>
                </div>
                <div class="div_img">
                    <img class="card_img"
                        src=".././images/home_design/101686366-3070457753033427-1944022689182121984-n-637521170978935008.jpg_480x480.jpg"
                        alt="">
                </div>
                <div class="hv_btn_save">
                    <button><i></i>Lưu</button>
                </div>
            </div>
            <div class="card card_large">
                <div class="author">
                    <a href="#">
                        <div class="avatar">
                            <img src=".././images/home_design/1-637447637870197485-637457182464199933.jpg_80x80.jpg"
                                alt="">
                        </div>
                        <div class="text-name">
                            <h2>Phùng Thanh Tú</h2>
                        </div>
                    </a>
                </div>
                <div class="card_right">
                    <div class="share">
                        <a href=""><img class="share_img" src="https://static.homedy.com/src/images/icon/share.svg"
                                alt=""></a>
                        <div class="sotical">
                            <label for="">
                                <span class="lb_share"></span>Chia Sẻ
                            </label>
                            <ul class="share-social">
                                <li><a href="#"><img src=".././images/fb.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/ins.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/zalo.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/in.svg" alt=""></a></li>


                            </ul>
                            <label for="" class="lb_copy">
                                <a href="#"> <span class="copy_url"></span>Sao chép liên kết</a>
                            </label>
                        </div>
                    </div>
                    <div class="lb_save">
                        <img src="https://static.homedy.com/src/images/icon/save.svg" alt=""><span>10</span>
                    </div>
                </div>
                <div class="div_img">
                    <img class="card_img"
                        src=".././images/home_design/131888691-243802710465670-4956553036041556574-n-637501918096317842.jpg_480x480.jpg"
                        alt="">
                </div>
                <div class="hv_btn_save">
                    <button><i></i>Lưu</button>
                </div>
            </div>
            <div class="card card_medium">
                <div class="author">
                    <a href="#">
                        <div class="avatar">
                            <img src=".././images/home_design/1-637447637870197485-637457182464199933.jpg_80x80.jpg"
                                alt="">
                        </div>
                        <div class="text-name">
                            <h2>Phùng Thanh Tú</h2>
                        </div>
                    </a>
                </div>
                <div class="card_right">
                    <div class="share">
                        <a href=""><img class="share_img" src="https://static.homedy.com/src/images/icon/share.svg"
                                alt=""></a>
                        <div class="sotical">
                            <label for="">
                                <span class="lb_share"></span>Chia Sẻ
                            </label>
                            <ul class="share-social">
                                <li><a href="#"><img src=".././images/fb.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/ins.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/zalo.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/in.svg" alt=""></a></li>


                            </ul>
                            <label for="" class="lb_copy">
                                <a href="#"> <span class="copy_url"></span>Sao chép liên kết</a>
                            </label>
                        </div>
                    </div>
                    <div class="lb_save">
                        <img src="https://static.homedy.com/src/images/icon/save.svg" alt=""><span>10</span>
                    </div>
                </div>
                <div class="div_img">
                    <img class="card_img"
                        src=".././images/home_design/106380311-2733511586753731-5614011841946814846-n-637499287682344176.jpg_480x480.jpg"
                        alt="">
                </div>
                <div class="hv_btn_save">
                    <button><i></i>Lưu</button>
                </div>
            </div>
            <div class="card card_small">
                <div class="author">
                    <a href="#">
                        <div class="avatar">
                            <img src=".././images/home_design/1-637447637870197485-637457182464199933.jpg_80x80.jpg"
                                alt="">
                        </div>
                        <div class="text-name">
                            <h2>Phùng Thanh Tú</h2>
                        </div>
                    </a>
                </div>
                <div class="card_right">
                    <div class="share">
                        <a href=""><img class="share_img" src="https://static.homedy.com/src/images/icon/share.svg"
                                alt=""></a>
                        <div class="sotical">
                            <label for="">
                                <span class="lb_share"></span>Chia Sẻ
                            </label>
                            <ul class="share-social">
                                <li><a href="#"><img src=".././images/fb.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/ins.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/zalo.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/in.svg" alt=""></a></li>


                            </ul>
                            <label for="" class="lb_copy">
                                <a href="#"> <span class="copy_url"></span>Sao chép liên kết</a>
                            </label>
                        </div>
                    </div>
                    <div class="lb_save">
                        <img src="https://static.homedy.com/src/images/icon/save.svg" alt=""><span>10</span>
                    </div>
                </div>
                <div class="div_img">
                    <img class="card_img"
                        src=".././images/home_design/107393381-278718733574626-4399595186467507928-n-637499283122738247.jpg_480x480.jpg"
                        alt="">
                </div>
                <div class="hv_btn_save">
                    <button><i></i>Lưu</button>
                </div>
            </div>
            <div class="card card_medium">
                <div class="author">
                    <a href="#">
                        <div class="avatar">
                            <img src=".././images/home_design/1-637447637870197485-637457182464199933.jpg_80x80.jpg"
                                alt="">
                        </div>
                        <div class="text-name">
                            <h2>Phùng Thanh Tú</h2>
                        </div>
                    </a>
                </div>
                <div class="card_right">
                    <div class="share">
                        <a href=""><img class="share_img" src="https://static.homedy.com/src/images/icon/share.svg"
                                alt=""></a>
                        <div class="sotical">
                            <label for="">
                                <span class="lb_share"></span>Chia Sẻ
                            </label>
                            <ul class="share-social">
                                <li><a href="#"><img src=".././images/fb.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/ins.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/zalo.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/in.svg" alt=""></a></li>


                            </ul>
                            <label for="" class="lb_copy">
                                <a href="#"> <span class="copy_url"></span>Sao chép liên kết</a>
                            </label>
                        </div>
                    </div>
                    <div class="lb_save">
                        <img src="https://static.homedy.com/src/images/icon/save.svg" alt=""><span>10</span>
                    </div>
                </div>
                <div class="div_img">
                    <img class="card_img"
                        src=".././images/home_design/117509607-591936508145477-3260115862149071794-n-637498415978210640.jpg_480x480.jpg"
                        alt="">
                </div>
                <div class="hv_btn_save">
                    <button><i></i>Lưu</button>
                </div>
            </div>
            <div class="card card_large">
                <div class="author">
                    <a href="#">
                        <div class="avatar">
                            <img src=".././images/home_design/1-637447637870197485-637457182464199933.jpg_80x80.jpg"
                                alt="">
                        </div>
                        <div class="text-name">
                            <h2>Phùng Thanh Tú</h2>
                        </div>
                    </a>
                </div>
                <div class="card_right">
                    <div class="share">
                        <a href=""><img class="share_img" src="https://static.homedy.com/src/images/icon/share.svg"
                                alt=""></a>
                        <div class="sotical">
                            <label for="">
                                <span class="lb_share"></span>Chia Sẻ
                            </label>
                            <ul class="share-social">
                                <li><a href="#"><img src=".././images/fb.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/ins.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/zalo.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/in.svg" alt=""></a></li>


                            </ul>
                            <label for="" class="lb_copy">
                                <a href="#"> <span class="copy_url"></span>Sao chép liên kết</a>
                            </label>
                        </div>
                    </div>
                    <div class="lb_save">
                        <img src="https://static.homedy.com/src/images/icon/save.svg" alt=""><span>10</span>
                    </div>
                </div>
                <div class="div_img">
                    <img class="card_img"
                        src=".././images/home_design/120081557-326355325121686-6275421373381005313-n-637497606026419898.jpg_480x480.jpg"
                        alt="">
                </div>
                <div class="hv_btn_save">
                    <button><i></i>Lưu</button>
                </div>
            </div>
            <div class="card card_small">
                <div class="author">
                    <a href="#">
                        <div class="avatar">
                            <img src=".././images/home_design/1-637447637870197485-637457182464199933.jpg_80x80.jpg"
                                alt="">
                        </div>
                        <div class="text-name">
                            <h2>Phùng Thanh Tú</h2>
                        </div>
                    </a>
                </div>
                <div class="card_right">
                    <div class="share">
                        <a href=""><img class="share_img" src="https://static.homedy.com/src/images/icon/share.svg"
                                alt=""></a>
                        <div class="sotical">
                            <label for="">
                                <span class="lb_share"></span>Chia Sẻ
                            </label>
                            <ul class="share-social">
                                <li><a href="#"><img src=".././images/fb.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/ins.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/zalo.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/in.svg" alt=""></a></li>


                            </ul>
                            <label for="" class="lb_copy">
                                <a href="#"> <span class="copy_url"></span>Sao chép liên kết</a>
                            </label>
                        </div>
                    </div>
                    <div class="lb_save">
                        <img src="https://static.homedy.com/src/images/icon/save.svg" alt=""><span>10</span>
                    </div>
                </div>
                <div class="div_img">
                    <img class="card_img"
                        src=".././images/home_design/117509607-591936508145477-3260115862149071794-n-637498415978210640.jpg_480x480.jpg"
                        alt="">
                </div>
                <div class="hv_btn_save">
                    <button><i></i>Lưu</button>
                </div>
            </div>
            <div class="card card_medium">
                <div class="author">
                    <a href="#">
                        <div class="avatar">
                            <img src=".././images/home_design/1-637447637870197485-637457182464199933.jpg_80x80.jpg"
                                alt="">
                        </div>
                        <div class="text-name">
                            <h2>Phùng Thanh Tú</h2>
                        </div>
                    </a>
                </div>
                <div class="card_right">
                    <div class="share">
                        <a href=""><img class="share_img" src="https://static.homedy.com/src/images/icon/share.svg"
                                alt=""></a>
                        <div class="sotical">
                            <label for="">
                                <span class="lb_share"></span>Chia Sẻ
                            </label>
                            <ul class="share-social">
                                <li><a href="#"><img src=".././images/fb.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/ins.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/zalo.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/in.svg" alt=""></a></li>


                            </ul>
                            <label for="" class="lb_copy">
                                <a href="#"> <span class="copy_url"></span>Sao chép liên kết</a>
                            </label>
                        </div>
                    </div>
                    <div class="lb_save">
                        <img src="https://static.homedy.com/src/images/icon/save.svg" alt=""><span>10</span>
                    </div>
                </div>
                <div class="div_img">
                    <img class="card_img"
                        src=".././images/home_design/117509607-591936508145477-3260115862149071794-n-637498415978210640.jpg_480x480.jpg"
                        alt="">
                </div>
                <div class="hv_btn_save">
                    <button><i></i>Lưu</button>
                </div>
            </div>
            <div class="card card_small">
                <div class="author">
                    <a href="#">
                        <div class="avatar">
                            <img src=".././images/home_design/1-637447637870197485-637457182464199933.jpg_80x80.jpg"
                                alt="">
                        </div>
                        <div class="text-name">
                            <h2>Phùng Thanh Tú</h2>
                        </div>
                    </a>
                </div>
                <div class="card_right">
                    <div class="share">
                        <a href=""><img class="share_img" src="https://static.homedy.com/src/images/icon/share.svg"
                                alt=""></a>
                        <div class="sotical">
                            <label for="">
                                <span class="lb_share"></span>Chia Sẻ
                            </label>
                            <ul class="share-social">
                                <li><a href="#"><img src=".././images/fb.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/ins.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/zalo.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/in.svg" alt=""></a></li>


                            </ul>
                            <label for="" class="lb_copy">
                                <a href="#"> <span class="copy_url"></span>Sao chép liên kết</a>
                            </label>
                        </div>
                    </div>
                    <div class="lb_save">
                        <img src="https://static.homedy.com/src/images/icon/save.svg" alt=""><span>10</span>
                    </div>
                </div>
                <div class="div_img">
                    <img class="card_img"
                        src=".././images/home_design/117509607-591936508145477-3260115862149071794-n-637498415978210640.jpg_480x480.jpg"
                        alt="">
                </div>
                <div class="hv_btn_save">
                    <button><i></i>Lưu</button>
                </div>
            </div>
            <div class="card card_large">
                <div class="author">
                    <a href="#">
                        <div class="avatar">
                            <img src=".././images/home_design/1-637447637870197485-637457182464199933.jpg_80x80.jpg"
                                alt="">
                        </div>
                        <div class="text-name">
                            <h2>Phùng Thanh Tú</h2>
                        </div>
                    </a>
                </div>
                <div class="card_right">
                    <div class="share">
                        <a href=""><img class="share_img" src="https://static.homedy.com/src/images/icon/share.svg"
                                alt=""></a>
                        <div class="sotical">
                            <label for="">
                                <span class="lb_share"></span>Chia Sẻ
                            </label>
                            <ul class="share-social">
                                <li><a href="#"><img src=".././images/fb.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/ins.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/zalo.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/in.svg" alt=""></a></li>


                            </ul>
                            <label for="" class="lb_copy">
                                <a href="#"> <span class="copy_url"></span>Sao chép liên kết</a>
                            </label>
                        </div>
                    </div>
                    <div class="lb_save">
                        <img src="https://static.homedy.com/src/images/icon/save.svg" alt=""><span>10</span>
                    </div>
                </div>
                <div class="div_img">
                    <img class="card_img"
                        src=".././images/home_design/117509607-591936508145477-3260115862149071794-n-637498415978210640.jpg_480x480.jpg"
                        alt="">
                </div>
                <div class="hv_btn_save">
                    <button><i></i>Lưu</button>
                </div>
            </div>
            <div class="card card_large">
                <div class="author">
                    <a href="#">
                        <div class="avatar">
                            <img src=".././images/home_design/1-637447637870197485-637457182464199933.jpg_80x80.jpg"
                                alt="">
                        </div>
                        <div class="text-name">
                            <h2>Phùng Thanh Tú</h2>
                        </div>
                    </a>
                </div>
                <div class="card_right">
                    <div class="share">
                        <a href=""><img class="share_img" src="https://static.homedy.com/src/images/icon/share.svg"
                                alt=""></a>
                        <div class="sotical">
                            <label for="">
                                <span class="lb_share"></span>Chia Sẻ
                            </label>
                            <ul class="share-social">
                                <li><a href="#"><img src=".././images/fb.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/ins.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/zalo.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/in.svg" alt=""></a></li>


                            </ul>
                            <label for="" class="lb_copy">
                                <a href="#"> <span class="copy_url"></span>Sao chép liên kết</a>
                            </label>
                        </div>
                    </div>
                    <div class="lb_save">
                        <img src="https://static.homedy.com/src/images/icon/save.svg" alt=""><span>10</span>
                    </div>
                </div>
                <div class="div_img">
                    <img class="card_img"
                        src=".././images/home_design/117509607-591936508145477-3260115862149071794-n-637498415978210640.jpg_480x480.jpg"
                        alt="">
                </div>
                <div class="hv_btn_save">
                    <button><i></i>Lưu</button>
                </div>
            </div>
            <div class="card card_small">
                <div class="author">
                    <a href="#">
                        <div class="avatar">
                            <img src=".././images/home_design/1-637447637870197485-637457182464199933.jpg_80x80.jpg"
                                alt="">
                        </div>
                        <div class="text-name">
                            <h2>Phùng Thanh Tú</h2>
                        </div>
                    </a>
                </div>
                <div class="card_right">
                    <div class="share">
                        <a href=""><img class="share_img" src="https://static.homedy.com/src/images/icon/share.svg"
                                alt=""></a>
                        <div class="sotical">
                            <label for="">
                                <span class="lb_share"></span>Chia Sẻ
                            </label>
                            <ul class="share-social">
                                <li><a href="#"><img src=".././images/fb.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/ins.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/zalo.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/in.svg" alt=""></a></li>


                            </ul>
                            <label for="" class="lb_copy">
                                <a href="#"> <span class="copy_url"></span>Sao chép liên kết</a>
                            </label>
                        </div>
                    </div>
                    <div class="lb_save">
                        <img src="https://static.homedy.com/src/images/icon/save.svg" alt=""><span>10</span>
                    </div>
                </div>
                <div class="div_img">
                    <img class="card_img"
                        src=".././images/home_design/117509607-591936508145477-3260115862149071794-n-637498415978210640.jpg_480x480.jpg"
                        alt="">
                </div>
                <div class="hv_btn_save">
                    <button><i></i>Lưu</button>
                </div>
            </div>
            <div class="card card_small ">
                <div class="author">
                    <a href="#">
                        <div class="avatar">
                            <img src=".././images/home_design/1-637447637870197485-637457182464199933.jpg_80x80.jpg"
                                alt="">
                        </div>
                        <div class="text-name">
                            <h2>Phùng Thanh Tú</h2>
                        </div>
                    </a>
                </div>
                <div class="card_right">
                    <div class="share">
                        <a href=""><img class="share_img" src="https://static.homedy.com/src/images/icon/share.svg"
                                alt=""></a>
                        <div class="sotical">
                            <label for="">
                                <span class="lb_share"></span>Chia Sẻ
                            </label>
                            <ul class="share-social">
                                <li><a href="#"><img src=".././images/fb.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/ins.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/zalo.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/in.svg" alt=""></a></li>


                            </ul>
                            <label for="" class="lb_copy">
                                <a href="#"> <span class="copy_url"></span>Sao chép liên kết</a>
                            </label>
                        </div>
                    </div>
                    <div class="lb_save">
                        <img src="https://static.homedy.com/src/images/icon/save.svg" alt=""><span>10</span>
                    </div>
                </div>
                <div class="div_img">
                    <img class="card_img"
                        src=".././images/home_design/117509607-591936508145477-3260115862149071794-n-637498415978210640.jpg_480x480.jpg"
                        alt="">
                </div>
                <div class="hv_btn_save">
                    <button><i></i>Lưu</button>
                </div>
            </div>
            <div class="card card_medium">
                <div class="author">
                    <a href="#">
                        <div class="avatar">
                            <img src=".././images/home_design/1-637447637870197485-637457182464199933.jpg_80x80.jpg"
                                alt="">
                        </div>
                        <div class="text-name">
                            <h2>Phùng Thanh Tú</h2>
                        </div>
                    </a>
                </div>
                <div class="card_right">
                    <div class="share">
                        <a href=""><img class="share_img" src="https://static.homedy.com/src/images/icon/share.svg"
                                alt=""></a>
                        <div class="sotical">
                            <label for="">
                                <span class="lb_share"></span>Chia Sẻ
                            </label>
                            <ul class="share-social">
                                <li><a href="#"><img src=".././images/fb.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/ins.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/zalo.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/in.svg" alt=""></a></li>


                            </ul>
                            <label for="" class="lb_copy">
                                <a href="#"> <span class="copy_url"></span>Sao chép liên kết</a>
                            </label>
                        </div>
                    </div>
                    <div class="lb_save">
                        <img src="https://static.homedy.com/src/images/icon/save.svg" alt=""><span>10</span>
                    </div>
                </div>
                <div class="div_img">
                    <img class="card_img"
                        src=".././images/home_design/117509607-591936508145477-3260115862149071794-n-637498415978210640.jpg_480x480.jpg"
                        alt="">
                </div>
                <div class="hv_btn_save">
                    <button><i></i>Lưu</button>
                </div>
            </div>
            <div class="card card_large">
                <div class="author">
                    <a href="#">
                        <div class="avatar">
                            <img src=".././images/home_design/1-637447637870197485-637457182464199933.jpg_80x80.jpg"
                                alt="">
                        </div>
                        <div class="text-name">
                            <h2>Phùng Thanh Tú</h2>
                        </div>
                    </a>
                </div>
                <div class="card_right">
                    <div class="share">
                        <a href=""><img class="share_img" src="https://static.homedy.com/src/images/icon/share.svg"
                                alt=""></a>
                        <div class="sotical">
                            <label for="">
                                <span class="lb_share"></span>Chia Sẻ
                            </label>
                            <ul class="share-social">
                                <li><a href="#"><img src=".././images/fb.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/ins.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/zalo.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/in.svg" alt=""></a></li>


                            </ul>
                            <label for="" class="lb_copy">
                                <a href="#"> <span class="copy_url"></span>Sao chép liên kết</a>
                            </label>
                        </div>
                    </div>
                    <div class="lb_save">
                        <img src="https://static.homedy.com/src/images/icon/save.svg" alt=""><span>10</span>
                    </div>
                </div>
                <div class="div_img">
                    <img class="card_img"
                        src=".././images/home_design/117509607-591936508145477-3260115862149071794-n-637498415978210640.jpg_480x480.jpg"
                        alt="">
                </div>
                <div class="hv_btn_save">
                    <button><i></i>Lưu</button>
                </div>
            </div>
            <div class="card card_large">
                <div class="author">
                    <a href="#">
                        <div class="avatar">
                            <img src=".././images/home_design/1-637447637870197485-637457182464199933.jpg_80x80.jpg"
                                alt="">
                        </div>
                        <div class="text-name">
                            <h2>Phùng Thanh Tú</h2>
                        </div>
                    </a>
                </div>
                <div class="card_right">
                    <div class="share">
                        <a href=""><img class="share_img" src="https://static.homedy.com/src/images/icon/share.svg"
                                alt=""></a>
                        <div class="sotical">
                            <label for="">
                                <span class="lb_share"></span>Chia Sẻ
                            </label>
                            <ul class="share-social">
                                <li><a href="#"><img src=".././images/fb.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/ins.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/zalo.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/in.svg" alt=""></a></li>


                            </ul>
                            <label for="" class="lb_copy">
                                <a href="#"> <span class="copy_url"></span>Sao chép liên kết</a>
                            </label>
                        </div>
                    </div>
                    <div class="lb_save">
                        <img src="https://static.homedy.com/src/images/icon/save.svg" alt=""><span>10</span>
                    </div>
                </div>
                <div class="div_img">
                    <img class="card_img"
                        src=".././images/home_design/117509607-591936508145477-3260115862149071794-n-637498415978210640.jpg_480x480.jpg"
                        alt="">
                </div>
                <div class="hv_btn_save">
                    <button><i></i>Lưu</button>
                </div>
            </div>
            <div class="card card_medium">
                <div class="author">
                    <a href="#">
                        <div class="avatar">
                            <img src=".././images/home_design/1-637447637870197485-637457182464199933.jpg_80x80.jpg"
                                alt="">
                        </div>
                        <div class="text-name">
                            <h2>Phùng Thanh Tú</h2>
                        </div>
                    </a>
                </div>
                <div class="card_right">
                    <div class="share">
                        <a href=""><img class="share_img" src="https://static.homedy.com/src/images/icon/share.svg"
                                alt=""></a>
                        <div class="sotical">
                            <label for="">
                                <span class="lb_share"></span>Chia Sẻ
                            </label>
                            <ul class="share-social">
                                <li><a href="#"><img src=".././images/fb.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/ins.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/zalo.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/in.svg" alt=""></a></li>


                            </ul>
                            <label for="" class="lb_copy">
                                <a href="#"> <span class="copy_url"></span>Sao chép liên kết</a>
                            </label>
                        </div>
                    </div>
                    <div class="lb_save">
                        <img src="https://static.homedy.com/src/images/icon/save.svg" alt=""><span>10</span>
                    </div>
                </div>
                <div class="div_img">
                    <img class="card_img"
                        src=".././images/home_design/117509607-591936508145477-3260115862149071794-n-637498415978210640.jpg_480x480.jpg"
                        alt="">
                </div>
                <div class="hv_btn_save">
                    <button><i></i>Lưu</button>
                </div>
            </div>
            <div class="card card_small">
                <div class="author">
                    <a href="#">
                        <div class="avatar">
                            <img src=".././images/home_design/1-637447637870197485-637457182464199933.jpg_80x80.jpg"
                                alt="">
                        </div>
                        <div class="text-name">
                            <h2>Phùng Thanh Tú</h2>
                        </div>
                    </a>
                </div>
                <div class="card_right">
                    <div class="share">
                        <a href=""><img class="share_img" src="https://static.homedy.com/src/images/icon/share.svg"
                                alt=""></a>
                        <div class="sotical">
                            <label for="">
                                <span class="lb_share"></span>Chia Sẻ
                            </label>
                            <ul class="share-social">
                                <li><a href="#"><img src=".././images/fb.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/ins.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/zalo.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/in.svg" alt=""></a></li>


                            </ul>
                            <label for="" class="lb_copy">
                                <a href="#"> <span class="copy_url"></span>Sao chép liên kết</a>
                            </label>
                        </div>
                    </div>
                    <div class="lb_save">
                        <img src="https://static.homedy.com/src/images/icon/save.svg" alt=""><span>10</span>
                    </div>
                </div>
                <div class="div_img">
                    <img class="card_img"
                        src=".././images/home_design/117509607-591936508145477-3260115862149071794-n-637498415978210640.jpg_480x480.jpg"
                        alt="">
                </div>
                <div class="hv_btn_save">
                    <button><i></i>Lưu</button>
                </div>
            </div>
            <div class="card card_medium">
                <div class="author">
                    <a href="#">
                        <div class="avatar">
                            <img src=".././images/home_design/1-637447637870197485-637457182464199933.jpg_80x80.jpg"
                                alt="">
                        </div>
                        <div class="text-name">
                            <h2>Phùng Thanh Tú</h2>
                        </div>
                    </a>
                </div>
                <div class="card_right">
                    <div class="share">
                        <a href=""><img class="share_img" src="https://static.homedy.com/src/images/icon/share.svg"
                                alt=""></a>
                        <div class="sotical">
                            <label for="">
                                <span class="lb_share"></span>Chia Sẻ
                            </label>
                            <ul class="share-social">
                                <li><a href="#"><img src=".././images/fb.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/ins.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/zalo.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/in.svg" alt=""></a></li>


                            </ul>
                            <label for="" class="lb_copy">
                                <a href="#"> <span class="copy_url"></span>Sao chép liên kết</a>
                            </label>
                        </div>
                    </div>
                    <div class="lb_save">
                        <img src="https://static.homedy.com/src/images/icon/save.svg" alt=""><span>10</span>
                    </div>
                </div>
                <div class="div_img">
                    <img class="card_img"
                        src=".././images/home_design/117509607-591936508145477-3260115862149071794-n-637498415978210640.jpg_480x480.jpg"
                        alt="">
                </div>
                <div class="hv_btn_save">
                    <button><i></i>Lưu</button>
                </div>
            </div>
            <div class="card card_large">
                <div class="author">
                    <a href="#">
                        <div class="avatar">
                            <img src=".././images/home_design/1-637447637870197485-637457182464199933.jpg_80x80.jpg"
                                alt="">
                        </div>
                        <div class="text-name">
                            <h2>Phùng Thanh Tú</h2>
                        </div>
                    </a>
                </div>
                <div class="card_right">
                    <div class="share">
                        <a href=""><img class="share_img" src="https://static.homedy.com/src/images/icon/share.svg"
                                alt=""></a>
                        <div class="sotical">
                            <label for="">
                                <span class="lb_share"></span>Chia Sẻ
                            </label>
                            <ul class="share-social">
                                <li><a href="#"><img src=".././images/fb.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/ins.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/zalo.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/in.svg" alt=""></a></li>


                            </ul>
                            <label for="" class="lb_copy">
                                <a href="#"> <span class="copy_url"></span>Sao chép liên kết</a>
                            </label>
                        </div>
                    </div>
                    <div class="lb_save">
                        <img src="https://static.homedy.com/src/images/icon/save.svg" alt=""><span>10</span>
                    </div>
                </div>
                <div class="div_img">
                    <img class="card_img"
                        src=".././images/home_design/117509607-591936508145477-3260115862149071794-n-637498415978210640.jpg_480x480.jpg"
                        alt="">
                </div>
                <div class="hv_btn_save">
                    <button><i></i>Lưu</button>
                </div>
            </div>
            <div class="card card_small">
                <div class="author">
                    <a href="#">
                        <div class="avatar">
                            <img src=".././images/home_design/1-637447637870197485-637457182464199933.jpg_80x80.jpg"
                                alt="">
                        </div>
                        <div class="text-name">
                            <h2>Phùng Thanh Tú</h2>
                        </div>
                    </a>
                </div>
                <div class="card_right">
                    <div class="share">
                        <a href=""><img class="share_img" src="https://static.homedy.com/src/images/icon/share.svg"
                                alt=""></a>
                        <div class="sotical">
                            <label for="">
                                <span class="lb_share"></span>Chia Sẻ
                            </label>
                            <ul class="share-social">
                                <li><a href="#"><img src=".././images/fb.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/ins.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/zalo.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/in.svg" alt=""></a></li>


                            </ul>
                            <label for="" class="lb_copy">
                                <a href="#"> <span class="copy_url"></span>Sao chép liên kết</a>
                            </label>
                        </div>
                    </div>
                    <div class="lb_save">
                        <img src="https://static.homedy.com/src/images/icon/save.svg" alt=""><span>10</span>
                    </div>
                </div>
                <div class="div_img">
                    <img class="card_img"
                        src=".././images/home_design/117509607-591936508145477-3260115862149071794-n-637498415978210640.jpg_480x480.jpg"
                        alt="">
                </div>
                <div class="hv_btn_save">
                    <button><i></i>Lưu</button>
                </div>
            </div>
            <div class="card card_large">
                <div class="author">
                    <a href="#">
                        <div class="avatar">
                            <img src=".././images/home_design/1-637447637870197485-637457182464199933.jpg_80x80.jpg"
                                alt="">
                        </div>
                        <div class="text-name">
                            <h2>Phùng Thanh Tú</h2>
                        </div>
                    </a>
                </div>
                <div class="card_right">
                    <div class="share">
                        <a href=""><img class="share_img" src="https://static.homedy.com/src/images/icon/share.svg"
                                alt=""></a>
                        <div class="sotical">
                            <label for="">
                                <span class="lb_share"></span>Chia Sẻ
                            </label>
                            <ul class="share-social">
                                <li><a href="#"><img src=".././images/fb.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/ins.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/zalo.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/in.svg" alt=""></a></li>


                            </ul>
                            <label for="" class="lb_copy">
                                <a href="#"> <span class="copy_url"></span>Sao chép liên kết</a>
                            </label>
                        </div>
                    </div>
                    <div class="lb_save">
                        <img src="https://static.homedy.com/src/images/icon/save.svg" alt=""><span>10</span>
                    </div>
                </div>
                <div class="div_img">
                    <img class="card_img"
                        src=".././images/home_design/117509607-591936508145477-3260115862149071794-n-637498415978210640.jpg_480x480.jpg"
                        alt="">
                </div>
                <div class="hv_btn_save">
                    <button><i></i>Lưu</button>
                </div>
            </div>
            <div class="card card_small">
                <div class="author">
                    <a href="#">
                        <div class="avatar">
                            <img src=".././images/home_design/1-637447637870197485-637457182464199933.jpg_80x80.jpg"
                                alt="">
                        </div>
                        <div class="text-name">
                            <h2>Phùng Thanh Tú</h2>
                        </div>
                    </a>
                </div>
                <div class="card_right">
                    <div class="share">
                        <a href=""><img class="share_img" src="https://static.homedy.com/src/images/icon/share.svg"
                                alt=""></a>
                        <div class="sotical">
                            <label for="">
                                <span class="lb_share"></span>Chia Sẻ
                            </label>
                            <ul class="share-social">
                                <li><a href="#"><img src=".././images/fb.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/ins.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/zalo.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/in.svg" alt=""></a></li>


                            </ul>
                            <label for="" class="lb_copy">
                                <a href="#"> <span class="copy_url"></span>Sao chép liên kết</a>
                            </label>
                        </div>
                    </div>
                    <div class="lb_save">
                        <img src="https://static.homedy.com/src/images/icon/save.svg" alt=""><span>10</span>
                    </div>
                </div>
                <div class="div_img">
                    <img class="card_img"
                        src=".././images/home_design/117509607-591936508145477-3260115862149071794-n-637498415978210640.jpg_480x480.jpg"
                        alt="">
                </div>
                <div class="hv_btn_save">
                    <button><i></i>Lưu</button>
                </div>
            </div>
            <div class="card card_small">
                <div class="author">
                    <a href="#">
                        <div class="avatar">
                            <img src=".././images/home_design/1-637447637870197485-637457182464199933.jpg_80x80.jpg"
                                alt="">
                        </div>
                        <div class="text-name">
                            <h2>Phùng Thanh Tú</h2>
                        </div>
                    </a>
                </div>
                <div class="card_right">
                    <div class="share">
                        <a href=""><img class="share_img" src="https://static.homedy.com/src/images/icon/share.svg"
                                alt=""></a>
                        <div class="sotical">
                            <label for="">
                                <span class="lb_share"></span>Chia Sẻ
                            </label>
                            <ul class="share-social">
                                <li><a href="#"><img src=".././images/fb.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/ins.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/zalo.svg" alt=""></a></li>
                                <li><a href="#"><img src=".././images/in.svg" alt=""></a></li>


                            </ul>
                            <label for="" class="lb_copy">
                                <a href="#"> <span class="copy_url"></span>Sao chép liên kết</a>
                            </label>
                        </div>
                    </div>
                    <div class="lb_save">
                        <img src="https://static.homedy.com/src/images/icon/save.svg" alt=""><span>10</span>
                    </div>
                </div>
                <div class="div_img">
                    <img class="card_img"
                        src=".././images/home_design/117509607-591936508145477-3260115862149071794-n-637498415978210640.jpg_480x480.jpg"
                        alt="">
                </div>
                <div class="hv_btn_save">
                    <button><i></i>Lưu</button>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
@section('js')
<script src="{{ mix('js/index.js') }}"></script>
@endsection
