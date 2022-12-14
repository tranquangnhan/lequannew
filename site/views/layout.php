

<!doctype html>
<html lang="en">

<head>
    <base href="/site/">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?=$page_title?></title>
    <meta name="description" content="Lê Quân sneaker, Chuyên cung cấp giày đẹp.">
    <meta property="og:url" content="<?=(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"?>" />
    <meta property="og:site_name" content="Lê Quân sneaker" />
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="keywords" content="">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>

    <link rel="canonical" href="https://lequansneaker.com/" />

    <meta name="google-site-verification" content="eljW5VzhSrlBMFBV6CcqcUaUAsksU0dALCnmDdXywYs" />
   
    <meta property="article:author" content="https://www.facebook.com/profile.php?id=100067965655732" />

    <?php
        if( $imgMetaDetail ){
            echo '<meta property="og:image" content="https://lequansneaker.com/uploads/'.  $imgMetaDetail .'" />';
        }else{
            echo '<meta property="og:image" content="https://lequansneaker.com/uploads/logo.png" />';
        }
    ?>
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/vnd.microsoft.icon" href="<?=ROOT_URL?>/uploads/logo.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?=ROOT_URL?>/uploads/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="views/assets/css/theme-3950e66.css" type="text/css" media="all">
    <link rel="stylesheet" href="views/assets/css/SweetAlert2.css">
    <link rel="stylesheet" href="views/assets/css/main.css">
    
    <script src="views/assets/js/SweetAlert2.js"></script>
    
    <script type="text/javascript">
    var baseDir = "\/project_chay\/site\/";
    var kkproductsblock = {
        "columnsmobile": "1",
        "columnstablet": "2",
        "columnslaptop": "4",
        "columnsdesktop": "5"
    };
    var prestashop = {
        "cart": {
            "products": [],
            "totals": {
                "total": {
                    "type": "total",
                    "label": "Total",
                    "amount": 0,
                    "value": "$0.00"
                },
                "total_including_tax": {
                    "type": "total",
                    "label": "Total (tax incl.)",
                    "amount": 0,
                    "value": "$0.00"
                },
                "total_excluding_tax": {
                    "type": "total",
                    "label": "Total (tax excl.)",
                    "amount": 0,
                    "value": "$0.00"
                }
            },
            "subtotals": {
                "products": {
                    "type": "products",
                    "label": "Subtotal",
                    "amount": 0,
                    "value": "$0.00"
                },
                "discounts": null,
                "shipping": {
                    "type": "shipping",
                    "label": "Shipping",
                    "amount": 0,
                    "value": "Free"
                },
                "tax": {
                    "type": "tax",
                    "label": "Taxes",
                    "amount": 0,
                    "value": "$0.00"
                }
            },
            "products_count": 0,
            "summary_string": "0 items",
            "vouchers": {
                "allowed": 0,
                "added": []
            },
            "discounts": [],
            "minimalPurchase": 0,
            "minimalPurchaseRequired": ""
        },
        "currency": {
            "name": "US Dollar",
            "iso_code": "USD",
            "iso_code_num": null,
            "sign": "$"
        },
        "customer": {
            "lastname": null,
            "firstname": null,
            "email": null,
            "birthday": null,
            "newsletter": null,
            "newsletter_date_add": null,
            "optin": null,
            "website": null,
            "company": null,
            "siret": null,
            "ape": null,
            "is_logged": false,
            "gender": {
                "type": null,
                "name": null
            },
            "addresses": []
        },
        "language": {
            "name": "English (English)",
            "iso_code": "en",
            "locale": "en-US",
            "language_code": "en-us",
            "is_rtl": "0",
            "date_format_lite": "m\/d\/Y",
            "date_format_full": "m\/d\/Y H:i:s",
            "id": 1
        },
        "page": {
            "title": "",
            "canonical": null,
            "meta": {
                "title": "Demo Shop",
                "description": "Shop powered by PrestaShop",
                "keywords": "",
                "robots": "index"
            },
            "page_name": "index",
            "body_classes": {
                "lang-en": true,
                "lang-rtl": false,
                "country-US": true,
                "currency-USD": true,
                "layout-full-width": true,
                "page-index": true,
                "tax-display-disabled": true
            },
            "admin_notifications": []
        },
        "shop": {
            "name": "Demo Shop",
            "logo": "../\img\/demo-shop-logo-1538137004.jpg",
            "stores_icon": "../\img\/logo_stores.png",
            "favicon": "../\img\/favicon.ico"
        },
    
        "configuration": {
            "display_taxes_label": false,
            "display_prices_tax_incl": false,
            "is_catalog": false,
            "show_prices": true,
            "opt_in": {
                "partner": true
            },
            "quantity_discount": {
                "type": "discount",
                "label": "Discount"
            },
            "voucher_enabled": 0,
            "return_enabled": 0
        },
        "field_required": [],
       
        "link": {
            "protocol_link": "https:\/\/",
            "protocol_content": "https:\/\/"
        },
        "time": 1619192342,
        "static_token": "9407b95b9bb08d999434e20be614587e",
        "token": "c3228a43270800c705bb6563d1e5ba3c"
    };
    </script>
    <script type="text/javascript">
    var kkpc_labels = ['days', 'hours', 'minutes', 'seconds'];
    var kkpc_labels_lang = {
        'days': 'days',
        'hours': 'hours',
        'minutes': 'minutes',
        'seconds': 'seconds'
    };
    var kkpc_show_weeks = 0;
    </script>
</head>
<?php
    if(isset($_GET['act']) && $_GET['act'] != "product"){
?>
<script>
    sessionStorage.removeItem("brand")
    sessionStorage.removeItem("price")
</script>
<?php
    }
?>

<body id="index" class="lang-en country-us currency-usd layout-full-width page-index tax-display-disabled">
<!-- Messenger Plugin chat Code -->
<div id="fb-root"></div>

<!-- Your Plugin chat code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "460929777684466");
  chatbox.setAttribute("attribution", "biz_inbox");
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v11.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>
    <!-- <div id="page-loader"></div> -->
    <main>
        <header id="header">
            <div class="header-banner">
            </div>
            <nav class="header-nav">
                <div class="container">
                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 left-nav">

                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 center-nav">
                            <div id="kkheaderblock" class="clearfix">
                                <div id="kkcmsheader">
                                    <div class="kkheader-service"></div>
                                </div>

                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 right-nav">
               
                            <div id="_desktop_user_info">
                                <div class="user-info-inner">
                                <?php
                                        if (isset($_SESSION['suser'])&&$_SESSION['suser']!='') {
                                            echo '<div class="logoutH">'.$_SESSION['suser'].'</div>';
                                            echo '<ul class="user-info logout">
                                                <li>    
                                                     <a href="'.ROOT_URL.'/?act=logout">
                                                        <span class="hidden-sm-down">Đăng xuất</span>
                                                    </a></li>
                                            </ul>';
                                                
                                            ?> 
                                    
                                    <?php }else{?> 
                                    <div class="kkuserheading"></div>
                                    <ul class="user-info">
                                        <li>
                                            <a href="<?=ROOT_URL.'/dang-nhap'?>">
                                                <i class="material-icons user">&#xE7FF;</i>
                                                <span class="hidden-sm-down">Đăng nhập</span>
                                            </a>
                                        </li>
                                            
                                        <li>       
                                            <a href="<?=ROOT_URL.'/dang-ky'?>">
                                                <i class="material-icons user">&#xE7FF;</i>
                                                <span class="hidden-sm-down">Đăng kí</span>
                                            </a>
                                        </li>
                                            
                                    </ul>
                                    <?php } ?> 
                                </div>
                            </div>
                            <div id="_desktop_cart">
                                <div class="shopping-cart">
                                    <div class="blockcart cart-preview inactive"
                                        data-refresh-url="">
                                        <div class="header">
                                            <div class="cart-link">
                                                <a rel="nofollow">
                                                    <i class="material-icons shopping-cart" > shopping_cart</i>
                                                    <span class="hidden-sm-down">Cart</span>
                                                    <span class="cart-products-count">0</span>
                                                </a>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-right">

                                                <li class="cart-det2"
                                                    data-refresh-url="">
                                                    <span class="no-items"></span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            




                            <!-- end cart -->



                        </div>
                    </div>

                </div>
                </div>
            </nav>
            <div class="header-top">
                <div class="container">


                    <div class="desktop_logo">
                        <h1>
                            <a href="<?php echo ROOT_URL?>/">
                                <img class="logo img-responsive " src="<?=ROOT_URL?>/uploads/logo.png"
                                    alt="Demo Shop">
                            </a>
                        </h1>
                    </div>


                    <div class="infinityheadercontact">

                        <div class="headercontact">

                            <div class="contact-inner">

                                <div class="subicon contacticon">
                                    <span class="hide">icon</span>
                                </div>

                                <div class="infinitycontact-dec">
                                    <div class="contact-title">Zalo</div>
                                    <div class="contact-dec"><a href="#">0901108244</a></div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="infinityheaderemail">

                        <div class="headercontact">

                            <div class="email-inner">
                                <a href="https://www.facebook.com/profile.php?id=100067965655732">
                                    <div class="subicon ">
                        
                                        <i style="font-size:2rem; margin-left:2rem" class="fa fa-facebook" aria-hidden="true"></i>
                                        
                                    </div>
                                </a>

                                <div class="infinitycontact-dec">

                                    

                                    

                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                </div>

                <div class="mobile-overlay"></div>
                <div id="mobile_kktop_menu_wrapper" class="hidden-md-up">
                    <div id="top_menu_closer">
                        <div class="leftmenu-title">
                            <i class="material-icons"></i>Danh mục
                        </div>
                    </div>
                    <div class="js-top-menu mobile" id="_mobile_top_menu"></div>
                    <div class="clearfix"></div>

                </div>
            </div>

            <!-----------------------------------End-Header-Top------------------------------------------------->
            <div class="position-static">
                <div class="container">
                    <div class="row">

                        <div class="menu js-top-menu hidden-sm-down" id="_desktop_top_menu">

                            <ul class="top-menu" id="top-menu" data-depth="0">
                                <?php 
                                    $this->model = new Model_home();
                                    $i =0;
                                    foreach ($getMenuParent as $row) {
                                        // show dm cấp 0
                                        if($row['slug'] == "san-pham"){
                                            $link = ROOT_URL."/".$row['slug']."/tat-ca/trang-1";
                                        }else{
                                            $link = ROOT_URL."/".$row['slug'];
                                        }
                                        
                                        echo '<li class="category" id="category-3'.$i.'">
                                        <a class="dropdown-item" href="'.$link.'" data-depth="0">';
                                        $dmcap112 = $this->model->showDmCon($row['id']);
                                        if($dmcap112) {
                                            echo '<span class="float-xs-right hidden-md-up">
                                            <span data-target="#top_sub_menu_40711'.$i.'" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                <i class="material-icons add">&#xE313;</i>
                                                <i class="material-icons remove">&#xE316;</i>
                                            </span>
                                        </span>';
                                        }
                                            
                                           echo $row['name'].'
                                        </a>';
                                        // show dm cap 1
                                        $dmcap1 = $this->model->showDmCon($row['id']);
                                        if ($dmcap1) {
                                            echo '<div class="popover sub-menu js-sub-menu collapse twocolumn" id="top_sub_menu_40711'.$i.'">
                                            <ul class="top-menu" data-depth="1">';
                                            $h=0;
                                            foreach ($dmcap1 as $row) {
                                                $link = ROOT_URL."/danh-muc/".$row['slug']."-".$row['id']."/trang-1";
                                                echo '
                                                <li class="category" id="category-4'.$h.'">
                                                <a class="dropdown-item dropdown-submenu" href="'.$link.'" data-depth="1">
                                                    <span class="float-xs-right hidden-md-up">
                                                        <span data-target="#top_sub_menu_63115'.$i.'" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                            <i class="material-icons add">&#xE313;</i>
                                                            <i class="material-icons remove">&#xE316;</i>
                                                        </span>
                                                    </span>
                                                    '.$row['name'].'
                                                </a>';
                                                $h++;
                                                // show dm cap 2
                                                $dmcap2 = $this->model->showDmCon($row['id']);
                                                if($dmcap2){
                                                    echo '<div class="collapse" id="top_sub_menu_63115'.$i.'">
                                                    <ul class="top-menu" data-depth="2">';
                                                    $z=0;
                                                    foreach ($dmcap2 as $row) {
                                                        $link = ROOT_URL."/danh-muc/".$row['slug']."-".$row['id']."/trang-1";
                                                        echo '<li class="category" id="category-13'.$z.'">
                                                        <a class="dropdown-item" href="'.$link.'" data-depth="2">
                                                        '.$row['name'].'
                                                        </a>
                                                    </li>';
                                                    $z++;
                                                    }
                                                    echo '</ul></div>';
                                                }
                                                $i++;
                                            }
                                            echo '</li></ul></div>';
                                        }
                                        
                                        echo '</li>';
                                        
                                    }
                                ?>


                            </ul>

                            <div class="clearfix"></div>
                        </div>

                    </div>
                    <div class="hidden-md-up text-sm-center mobile">
                        <div id="mobile_menu">
                            <div class="float-xs-left" id="menu-icon">
                                <div class="leftmenu-title">
                                    <i class="material-icons">&#xE5D2;</i>Danh mục
                                </div>
                            </div>
                            <div class="float-xs-right" id="_mobile_cart"></div>
                            <div class="float-xs-right" id="_mobile_search-widget"></div>
                            <div class="float-xs-right" id="_mobile_user_info"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
        </header>
        <!-- Header End -->

        <?php if (file_exists($viewFile)) require_once "$viewFile";?>


        <div class="container">
            <div id="_mobile_left_column" class=""></div>
            <div id="_mobile_right_column" class=""></div>
            <div class="clearfix"></div>
        </div>

        <footer id="footer">


            <div class="container">

                <div class="footer-before col-lg-3 col-sm-12">
                    <div class="container">
                        <div class="row">

                            <div id="kkstoreinfo" class="col-lg-12 links footer-block hb-animate-element left-to-right">

                                <div class="title  hidden-md-up collapsed" data-target="#kkstoreinfo-container"
                                    data-toggle="collapse">

                                    <span class="h3">Chúng tôi</span>

                                    <span class="float-xs-right">

                                        <span class="navbar-toggler collapse-icons">
                                            <i class="material-icons add">&#xE145;</i>
                                            <i class="material-icons remove">&#xE15B;</i>
                                        </span>

                                    </span>

                                </div>

                                <div id="kkstoreinfo-container" class="kkstoreinfo-inner collapse footer-dropdown">
                                    <a href="<?php echo ROOT_URL?>/" class="store-logo">
                                        <img src="../uploads/logo.png"
                                            alt="Logo-hang-Ella.png">
                                    </a>
                                    <div class="store-description">
                                        <p>Chào mừng đến với chúng tôi</p>
                                    </div>
                                </div>
                            </div>
                    

                        </div>
                    </div>
                </div>

                <div class="footer-container col-lg-9 col-sm-12">
                    <div class="container">
                        <div class="row">

                            <div id="kkservice-block" class="kkservicecms links col-lg-12 col-xs-12 clearfix  hb-animate-element right-to-left">

                                <div class="title  hidden-md-up" data-toggle="collapse"
                                    data-target="#kkservice_block_container">
                                    <span class="h3 block-contact-title">Dịch vụ</span>
                                    <span class="float-xs-right">
                                        <span class="navbar-toggler collapse-icons">
                                            <i class="material-icons add">&#xE145;</i>
                                            <i class="material-icons remove">&#xE15B;</i>
                                        </span>
                                    </span>
                                </div>


                                <div class="container">
                                    <div id="kkservice_block_container" class="service-inner collapse row">
                                        <div class="subtitle-part subtitle-part1 col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                            <div class="serviceblock subbanner-part-maininnner1">
                                                <div class="subicon subicon1"><span class="hide">icon</span></div>
                                                <div class="servicedec">
                                                    <div class="subtitile subtitile1">Miễn phí giao hàng</div>
                                                    <div class="subtitile subtitile2">Đơn hàng từ 2 sản phẩm</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="subtitle-part subtitle-part2 col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                            <div class="serviceblock subbanner-part-maininnner2">
                                                <div class="subicon subicon22"><img class="lazy" data-src="../uploads/ship.png" alt=""></div>
                                                <div class="servicedec">
                                                    <div class="subtitile subtitile1"> Được kiểm tra hàng</div>
                                                    <div class="subtitile subtitile1">  trước khi thanh toán</div>

                                                    <!-- <div class="subtitile subtitile2"> Đảm bảo hoàn tiền</div> -->

                                                </div>
                                            </div>
                                        </div>
                                        <div class="subtitle-part subtitle-part3 col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                            <div class="serviceblock subbanner-part-maininnner3">
                                                <div class="subicon subicon32"><img src="../uploads/9746646271543238922-16.png" alt="">
                                                <img src="../uploads/9746646271543238922-16.png" alt="">
                                                <img src="../uploads/9746646271543238922-16.png" alt="">
                                                <img src="../uploads/9746646271543238922-16.png" alt="">
                                                <img src="../uploads/9746646271543238922-16.png" alt=""></div>
                                                <div class="servicedec">
                                                    <div class="subtitile subtitile1">chất lượng</div>
                                                    <!-- <div class="subtitile subtitile2"> miễn phí quà tặng</div> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="subtitle-part subtitle-part4 col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                            <div class="serviceblock subbanner-part-maininnner4">
                                                <div class="subicon subicon4"><span class="hide">icon</span></div>
                                                <div class="servicedec">
                                                    <div class="subtitile subtitile1">techcombank</div>
                                                    <div class="subtitile subtitile2">19032756336010</div>
                                                    <div class="subtitile subtitile2">Nguyễn Thị Thanh Tâm</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 linklist links">
                                <div class="row">
                                    <div class="col-md-6 wrapper hb-animate-element bottom-to-top">
                                        <h3 class="h3 hidden-sm-down">Sản phẩm</h3>
                                        <div class="title  hidden-md-up" data-target="#footer_sub_menu_8589"
                                            data-toggle="collapse">
                                            <span class="h3">Sản phẩm</span>
                                            <span class="float-xs-right">
                                                <span class="navbar-toggler collapse-icons">
                                                    <i class="material-icons add">&#xE145;</i>
                                                    <i class="material-icons remove">&#xE15B;</i>
                                                </span>
                                            </span>
                                        </div>
                                        <ul id="footer_sub_menu_8589" class="collapse">
                                            <li>
                                                <a id="link-product-page-prices-drop-1" class="cms-page-link"
                                                    href="<?=ROOT_URL?>/san-pham/tat-ca/trang-1"
                                                    title="Our special products">
                                                    Tất cả sản phẩm
                                                </a>
                                            </li>
                                            <li>
                                                <a id="link-product-page-new-products-1" class="cms-page-link"
                                                    href="<?=ROOT_URL?>/danh-muc/giay-6/trang-1"
                                                    title="Our new products">
                                                    Giày
                                                </a>
                                            </li>
                                            <li>
                                                <a id="link-product-page-best-sales-1" class="cms-page-link"
                                                    href="<?=ROOT_URL?>/danh-muc/quan-ao-7/trang-1"
                                                    title="Our best sales">
                                                    Quần áo
                                                </a>
                                            </li>
                                            <li>
                                                <a id="link-product-page-best-sales-1" class="cms-page-link"
                                                    href="<?=ROOT_URL?>/danh-muc/phu-kien-8/trang-1"
                                                    title="Our best sales">
                                                    Phụ kiện
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 wrapper hb-animate-element bottom-to-top">
                                        <h3 class="h3 hidden-sm-down">Chúng tôi</h3>
                                        <div class="title  hidden-md-up" data-target="#footer_sub_menu_3249"
                                            data-toggle="collapse">
                                            <span class="h3">Thông tin</span>
                                            <span class="float-xs-right">
                                                <span class="navbar-toggler collapse-icons">
                                                    <i class="material-icons add">&#xE145;</i>
                                                    <i class="material-icons remove">&#xE15B;</i>
                                                </span>
                                            </span>
                                        </div>
                                        <ul id="footer_sub_menu_3249" class="collapse">
                                            <li>
                                                <a id="link-cms-page-4-2" class="cms-page-link"
                                                    href="<?=ROOT_URL?>/lien-he"
                                                    title="Learn more about us">
                                                    Liên hệ
                                                </a>
                                            </li>
                                            <li>
                                                <a id="link-cms-page-4-2" class="cms-page-link"
                                                    href="<?=ROOT_URL?>/gioi-thieu"
                                                    title="Learn more about us">
                                                    Giới thiệu
                                                </a>
                                            </li>
                                          
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div id="block_myaccount_infos" class="col-lg-3 links hb-animate-element bottom-to-top">
                                <h3 class="myaccount-title hidden-sm-down">
                                    <a class="text-uppercase"
                                        href="#"
                                        rel="nofollow">
                                        Chính sách
                                    </a>
                                </h3>
                                <div class="title  hidden-md-up" data-target="#footer_account_list"
                                    data-toggle="collapse">
                                    <span class="h3">Chính sách</span>
                                    <span class="float-xs-right">
                                        <span class="navbar-toggler collapse-icons">
                                            <i class="material-icons add">&#xE145;</i>
                                            <i class="material-icons remove">&#xE15B;</i>
                                        </span>
                                    </span>
                                </div>
                                <ul class="account-list collapse" id="footer_account_list">
                                    <li>
                                        <a href="<?=ROOT_URL?>/chinh-sach-van-chuyen"
                                            title="Personal info" rel="nofollow">
                                            Chính sách vận chuyển
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?=ROOT_URL?>/bao-hanh"
                                            title="Orders" rel="nofollow">
                                            Chính sách bảo hành
                                        </a>
                                    </li>
                                  
                                    

                                </ul>
                            </div>
                            <div class="block-contact contact-rich col-lg-3 links hb-animate-element bottom-to-top">
                                <h3 class="hidden-sm-down">Thông tin cửa hàng</h3>
                                <div class="title  hidden-md-up" data-toggle="collapse" data-target="#contact-footer">
                                    <span class="h3 block-contact-title">Thông tin cửa hàng</span>
                                    <span class="float-xs-right">
                                        <span class="navbar-toggler collapse-icons">
                                            <i class="material-icons add">&#xE145;</i>
                                            <i class="material-icons remove">&#xE15B;</i>
                                        </span>
                                    </span>
                                </div>
                                <ul id="contact-footer" class="collapse">
                                    <li class="block">
                                        <div class="icon"><i class="material-icons">&#xE55F;</i></div>
                                        <div class="data">2/9 Đoàn Thị Điểm phường 1 Phú Nhuận, TP.HCM<br /></div>

                                    </li>
                                    <li class="block">
                                        <div class="data">
                                            <div class="icon"><i class="material-icons">&#xE0CD;</i></div>
                                            <span class="title"></span> <span>0901108244</span>
                                        </div>
                                    </li>
                                    <li class="block">
                                        <div class="data">
                                        </div>
                                    </li>
                                    <li class="block">
                                        <div class="data">
                                            <div class="icon"><i class="material-icons">&#xE158;</i></div>
                                            <a href="mailto:nguyendangquan28297@gmail.com">nguyendangquan28297@gmail.com</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                          

                        </div>
                    </div>
                </div>

            </div>

            <div class="footer-after">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-xs-12 hb-animate-element left-to-right">
                            <p class="footer-aftertext ">

                                <a class="_blank " href="#" target="_blank">
                                    © 2021 - Powered by Visitek
                                </a>

                            </p>
                        </div>

                        

                    </div>
                </div>
            </div>
        </footer>
    </main>
    <a id="back-to-top" title="Back to top" class=""><i class="material-icons arrow-up">&#xE316;</i></a>
    <div class="newsletter-pop">
    </div>
    <script type="text/javascript" src="views/assets/js/bottom-b769945.js" ></script>
    <script src="views/assets/js/jquery.flexslider.js"></script>
    <script src="views/assets/js/jquery.addcart.js"></script>
    <!-- ============== DOAN NAY SANG THEM VAO ======================= -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js" integrity="sha512-UdIMMlVx0HEynClOIFSyOrPggomfhBKJE28LKl8yR3ghkgugPnG6iLfRfHwushZl1MOPSY6TsuBDGPK2X4zYKg==" crossorigin="anonymous"></script>
    
<script>
    $(document).ready(function() {
		$("#customer-form").validate({
		rules: {
			"firstname": {
				required: true,
			},
			"lastname": {
				required: true,
			},
			"phone":{
				required: true,
				maxlength: 15,
				minlenght: 8,
				digits: true
			},
			"email":{
				required: true,
				maxlength: 200,
				email: true
			}
		}
	});
        if ($('.flexslider').length > 0) {
            $('.flexslider').flexslider({
                slideshowSpeed: $('.flexslider').data('interval'),
                pauseOnHover: $('.flexslider').data('pause'),
                animation: 'fade',
                controlNav: !0,
            })
        }
    });
    </script>
<script src="views/assets/js/cartview.js"></script>
<script src="https://sp.zalo.me/plugins/sdk.js"></script>
<!-- ============== DOAN NAY SANG THEM VAO ======================= -->

   

</body>

</html>
<!-- Footer End-->