<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/fontiran.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css"
    integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Document</title>
</head>

<?php
  session_start();
  $user_id = $_SESSION['user_id'] ?? $_COOKIE['guest_id'];
  if (!isset($user_id)) {
    $guest_id = 'guest_' . bin2hex(random_bytes(6));
    setcookie('guest_id', $guest_id, time() + (86400 * 30), "/");
  };
  echo $user_id;
?>

<body id="body" onload="moveToSlide(0),startAutoSlide(),slideOption(),fadeMinidiv(),inTecno(),more(),scroolTop()">
    <?php
        require_once('requirements/constant.php');
        require_once('requirements/config.php');
        include_once('header.php');
    ?>
    <div class="main">
        <div class="slider-container">
            <div class="slides">
                <a href="#"><img src="assets/img/banner_SlideBanner_lL8Uit_e5a37ad5-d523-4617-b11f-fb7699074c35.webp"
                        alt="Not Load"></a>
                <a href="#"><img src="assets/img/banner_SlideBanner_7Y2sIj_b3906a10-5091-475f-a109-bbfdc13bd9f0.gif"
                        alt="Not Load"></a>
                <a href="#"><img src="assets/img/banner_SlideBanner_I6AU5X_292f06f8-8015-4832-9bd7-edb87dcd0663.webp"
                        alt="Not Load"></a>
                <a href="#"><img src="assets/img/banner_SlideBanner_fSc9xp_ba82d335-9e04-4374-ad97-b718e44482ee.webp"
                        alt="Not Load"></a>
            </div>
            <div class="controls">
                <div class="mainButton">
                    <div class="mainArrow">
                        <button class="prev"><i class="bi bi-arrow-right-short"></i></button>
                        <button class="next"><i class="bi bi-arrow-left-short"></i></button>
                    </div>
                    <div class="mainDot">
                        <div class="dots">
                            <span data-index="0" class="dot active"></span>
                            <span data-index="1" class="dot"></span>
                            <span data-index="2" class="dot"></span>
                            <span data-index="3" class="dot"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper">
            <div class="swiper category-swiper-container">
                <h2 class="category-slider-title">دسته‌بندی‌های محبوب</h2>
                <div class="category-slider-wrapper">
                    <button class="slider-arrow prev-cat-arrow">
                        <i class="bi bi-chevron-right"></i>
                    </button>
                    <div class="categories-container">
                        <a href="search/digital" class="category-item">
                            <div class="category-circle">
                                <img src="https://www.technolife.com/image/banner_CircleCategories_h3Jb0s_1a0d1a48-52d3-4328-a6f7-4e3f88e88b08.png"
                                    alt="گوشی موبایل">
                            </div>
                            <p class="category-name">گوشی موبایل</p>
                        </a>
                        <a href="#" class="category-item">
                            <div class="category-circle">
                                <img src="https://www.technolife.com/image/banner_CircleCategories_Mdfsao_e59192fd-eb46-4c74-ab2e-64c230a6b15e.png"
                                    alt="لپتاپ">
                            </div>
                            <p class="category-name">لپتاپ</p>
                        </a>
                        <a href="#" class="category-item">
                            <div class="category-circle">
                                <img src="https://www.technolife.com/image/banner_CircleCategories_xk7oBA_34eca991-46b0-4324-9cff-4fae0dac54e7.png"
                                    alt="سکه و طلا">
                            </div>
                            <p class="category-name">سکه و طلا</p>
                        </a>
                        <a href="#" class="category-item">
                            <div class="category-circle">
                                <img src="https://www.technolife.com/image/banner_CircleCategories_gvx2n5_cf7fa0c5-60d6-4517-a8b7-7499cdc28807.png"
                                    alt="پاوربانک">
                            </div>
                            <p class="category-name">پاوربانک</p>
                        </a>
                        <a href="#" class="category-item">
                            <div class="category-circle">
                                <img src="https://www.technolife.com/image/banner_CircleCategories_y18J9J_66c2be7d-52be-436a-93bd-cc98080a835d.png"
                                    alt="تبلت">
                            </div>
                            <p class="category-name">تبلت</p>
                        </a>
                        <a href="#" class="category-item">
                            <div class="category-circle">
                                <img src="https://www.technolife.com/image/banner_CircleCategories_LPvflx_90ccabe1-52e1-4c5f-a11f-00cc647df346.png"
                                    alt="هندزفری">
                            </div>
                            <p class="category-name">هندزفری</p>
                        </a>
                        <a href="#" class="category-item">
                            <div class="category-circle">
                                <img src="https://www.technolife.com/image/banner_CircleCategories_7Ja0ek_ec2ba647-525f-41c6-8b7d-96f0fea0e05a.png"
                                    alt="گیمینگ">
                            </div>
                            <p class="category-name">گیمینگ</p>
                        </a>
                        <a href="#" class="category-item">
                            <div class="category-circle">
                                <img src="https://www.technolife.com/image/banner_CircleCategories_BaqFKk_27ca3aa5-0431-442a-a173-d8a2ba931a41.png"
                                    alt="ساعت هوشمند">
                            </div>
                            <p class="category-name">ساعت هوشمند</p>
                        </a>
                        <a href="#" class="category-item">
                            <div class="category-circle">
                                <img src="https://www.technolife.com/image/banner_CircleCategories_2f1NVy_6536b652-c19e-4e42-9354-45dac1288ce4.png"
                                    alt="کولر آبی ">
                            </div>
                            <p class="category-name">کولر آبی </p>
                        </a>
                        <a href="#" class="category-item">
                            <div class="category-circle">
                                <img src="https://www.technolife.com/image/banner_CircleCategories_7Ja0ek_ec2ba647-525f-41c6-8b7d-96f0fea0e05a.png"
                                    alt="لوازم خانگی">
                            </div>
                            <p class="category-name">لوازم خانگی</p>
                        </a>
                        <a href="#" class="category-item">
                            <div class="category-circle">
                                <img src="https://www.technolife.com/image/banner_CircleCategories_FIpLDN_64bbd444-9404-4e3c-b442-69416b51327e.png"
                                    alt="دسته بازی">
                            </div>
                            <p class="category-name">دسته بازی</p>
                        </a>
                    </div>
                    <button class="slider-arrow next-cat-arrow">
                        <i class="bi bi-chevron-left"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="tecno-of">
            <div id="product-box-TecnoOf" class="product-box-TecnoOf">
                <div id="products-tecnoOf" class="products-container-TecnoOf">
                    <?php
                    $sql = "SELECT * FROM tbl_products WHERE discount_status = ?"
                    ;if ($stmt = $conn->prepare($sql)) {
                        $dis_status = 1;
                        $stmt -> bind_param("i",$dis_status);
                        $stmt->execute();
                        $result = $stmt->get_result();
                        while ($row = $result->fetch_assoc()) {
                        $imgUrl = ltrim($row['pr_thumbnail'], './');
                        $itemName = $row['name'];
                        $itemPrice = $row['price'];
                        $itemId = $row['product_id'];
                        $card_info = $row['card_info'];
                        $discount_display = [
                                'header' => 'none',
                                'footer' => 'none',
                        ];
                        $discount_status = $row['discount_status'];
                        if ($discount_status === 1) {
                            $discount_data = $row['discount_data'];
                            $discount = json_decode($discount_data, true);
                            $discount_display = [
                                'header' => 'flex',
                                'footer' => 'block',
                            ];
                        }
                    ?>
                    <a href="product/<?php echo $itemId; ?>">
                        <div class="product-tecnoof">
                            <hr class="product-divider-tecnoOf">
                            <div style="display: <?php echo $discount_display['header']; ?>;" class="saleNoTecnoOf">
                                <p><?php echo $discount['description']; ?></p>
                                <div id="data-end-tecnoLife">
                                    <div id="days">190</div>
                                    <p>:</p>
                                    <div id="hour">12</div>
                                    <p>:</p>
                                    <div id="minute">52</div>
                                    <p>:</p>
                                    <div id="second">37</div>
                                    <p></p>
                                </div>
                            </div>
                            <img src="<?php echo htmlspecialchars($imgUrl); ?>"
                                alt="<?php echo htmlspecialchars($itemName); ?> " class="product-image-tecnoOf">
                            <h2 class="product-title-TecnoOf"><?php echo htmlspecialchars($itemName); ?> </h2>
                            <p class="product-description-tecnoOf"><?php echo htmlspecialchars($card_info); ?> </p>
                            </p>
                            <p class="discounted-price-tecnoOf">
                                <?php if ($discount_status === 1) {echo formatNumberFa(htmlspecialchars((100 - $discount['value'])*$itemPrice / 100));} else {echo formatNumberFa(htmlspecialchars($itemPrice));} ?>
                                <p style="display: <?php echo $discount_display['footer']; ?>;">
                                    (<?php echo $discount['value']; ?>% off)</p>
                            </p>
                            <p style="display: <?php echo $discount_display['footer']; ?>;" class="original-price">
                                <?php echo formatNumberFa(htmlspecialchars($itemPrice)); ?></p>
                        </div>
                    </a>
                    <?php 
                        };
                    };
                    ?>
                </div>
                <div id="header-tecnoOf">
                    <div id="left-tecnoOf">نمایش همه<i class="bi bi-arrow-left-short"></i></div>
                    <div id="Right-tecnoOf">تکنواف</div>
                </div>
            </div>
        </div>
        <div class="threeSquere">
            <a href="#"><img
                    src="assets/img/banner_CenterTripletBanners_77uAkK_bdabee04-902f-4027-9478-f3bba8c6f32d.webp"
                    alt="NotLoad"></a>
            <a href="#"><img
                    src="assets/img/banner_CenterTripletBanners_eswnEc_8da905e4-d68a-464d-a9ff-f15df85e7512.webp"
                    alt="NotLoad"></a>
            <a href="#"><img
                    src="assets/img/banner_CenterTripletBanners_kzA1SD_040ac920-2b37-4108-865d-86afdcbe9acd.webp"
                    alt="NotLoad"></a>
        </div>
        <div class="parchamdaran">
            <div id="product-box" class="product-box">
                <div id="products" class="products-container">
                    <?php
                    $sql = "SELECT * FROM tbl_products WHERE category = ?"
                    ;if ($stmt = $conn->prepare($sql)) {
                        $category = 1;
                        $stmt -> bind_param("i",$category);
                        $stmt->execute();
                        $result = $stmt->get_result();
                        while ($row = $result->fetch_assoc()) {
                        $imgUrl = ltrim($row['pr_thumbnail'], './');
                        $itemName = $row['name'];
                        $itemPrice = $row['price'];
                        $itemId = $row['product_id'];
                        $card_info = $row['card_info'];
                        $discount_display = [
                                'header' => 'none',
                                'footer' => 'none',
                        ];
                        $discount_status = $row['discount_status'];
                        if ($discount_status === 1) {
                            $discount_data = $row['discount_data'];
                            $discount = json_decode($discount_data, true);
                            $discount_display = [
                                'header' => 'flex',
                                'footer' => 'block',
                            ];
                        }
                    ?>
                    <div class="product">
                        <hr class="product-divider">
                        <div style="display: <?php echo $discount_display['header']; ?>;" class="saleNo">
                            <p><?php echo $discount['description']; ?></p>
                            <div id="data-end">
                                <div id="days"></div>
                                <p>:</p>
                                <div id="hour"></div>
                                <p>:</p>
                                <div id="minute"></div>
                                <p>:</p>
                                <div id="second"></div>
                                <p></p>
                            </div>
                        </div><a href="product/<?php echo $itemId; ?>">
                            <img src="<?php echo htmlspecialchars($imgUrl); ?>"
                                alt="<?php echo htmlspecialchars($itemName); ?>" class="product-image"></a>
                        <h2 class="product-title"><?php echo htmlspecialchars($itemName); ?></h2>
                        <p class="product-description"><?php echo htmlspecialchars($card_info); ?></p>
                        <p class="discounted-price">
                            <?php if ($discount_status === 1) {echo formatNumberFa(htmlspecialchars((100 - $discount['value'])*$itemPrice / 100));} else {echo formatNumberFa(htmlspecialchars($itemPrice));} ?>
                            <p style="display: <?php echo $discount_display['footer']; ?>;">
                                (<?php echo $discount['value']; ?>% off)</p>
                        </p>
                        <p style="display: <?php echo $discount_display['footer']; ?>;" class="original-price">
                            <?php echo formatNumberFa(htmlspecialchars($itemPrice)); ?></p>
                    </div>
                    <?php 
                        };
                    };
                    ?>
                </div>
                <div id="header">
                    <div id="left">نمایش همه<i class="bi bi-arrow-left-short"></i></div>
                    <div id="Right">پرچمداران هوشمند</div>
                </div>
            </div>
        </div>
        <div class="bartarPhone">
            <div class="threeLabTop">
                <div class="headerLabBest">
                    <h3> برترین های موبایل </h3>
                </div>
                <div class="LapWrap">
                    <a href="#" class="LabCard">
                        <div class="LapImage">
                            <img src="assets/img/small_product-TLP-69015_f4d23762-985a-455b-9664-393d01ee41e8.webp"
                                alt="NotLoad">
                        </div>
                        <div class="lapText">
                            <p> سامسونگ </p>
                        </div>
                    </a>
                    <a href="#" class="LabCard">
                        <div class="LapImage">
                            <img src="assets/img/small_product-TLP-67131_94d083e3-9701-468d-958b-90bc83967faf.webp"
                                alt="NotLoad">
                        </div>
                        <div class="lapText">
                            <p> پوکو </p>
                        </div>
                    </a>
                    <a href="#" class="LabCard">
                        <div class="LapImage">
                            <img src="assets/img/small_product-TLP-67131_94d083e3-9701-468d-958b-90bc83967faf.webp"
                                alt="NotLoad">
                        </div>
                        <div class="lapText">
                            <p> آیفون </p>
                        </div>
                    </a>
                    <a href="#" class="LabCard">
                        <div class="LapImage">
                            <img src="assets/img/small_product-TLP-67131_94d083e3-9701-468d-958b-90bc83967faf.webp"
                                alt="NotLoad">
                        </div>
                        <div class="lapText">
                            <p> آنر </p>
                        </div>
                    </a>
                    <a href="#" class="LabCard">
                        <div class="LapImage">
                            <img src="assets/img/small_product-TLP-67131_94d083e3-9701-468d-958b-90bc83967faf.webp"
                                alt="NotLoad">
                        </div>
                        <div class="lapText">
                            <p> شیائومی </p>
                        </div>
                    </a>
                </div>
            </div>

        </div>
        <section class="tools-hero">
            <a href="لینک‌خرید‌محصول" class="buy-button">خرید</a> <!-- لینک خرید -->
        </section>
        <div class="labTopInTecno">
            <div class="headerParch">
                <span> لب تاب ها در تکنولایف </span>
                <span class="firstchildSpan">
                    نمایش همه
                    <i class="bi bi-arrow-left-short"></i>
                </span>
            </div>
            <div class="swapper">
                <?php
                    $sql = "SELECT * FROM tbl_products WHERE category = ?"
                    ;if ($stmt = $conn->prepare($sql)) {
                        $category = 2;
                        $stmt -> bind_param("i",$category);
                        $stmt->execute();
                        $result = $stmt->get_result();
                        while ($row = $result->fetch_assoc()) {
                        $imgUrl = ltrim($row['pr_thumbnail'], './');
                        $itemName = $row['name'];
                        $itemPrice = $row['price'];
                        $itemId = $row['product_id'];
                        $card_info = $row['card_info'];
                    ?>
                <div class="shape">
                    <a href="product/<?php echo $itemId; ?>"><img src="<?php echo htmlspecialchars($imgUrl); ?>"
                            alt="<?php echo htmlspecialchars($itemName); ?>"></a>
                    <div class="title">
                        <p><?php echo htmlspecialchars($itemName); ?></p>
                    </div>
                    <div class="description"> <?php echo htmlspecialchars($card_info); ?> </div>
                    <p class="money" id="priceLaptop">
                        <?php echo formatNumberFa(htmlspecialchars($itemPrice)); ?>
                    </p>
                    <p style="margin: 5px 0;"> تومان </p>
                </div>
                <hr>
                <?php 
                        };
                    };
                ?>
            </div>
        </div>
        <div class="threeLabTop">
            <div class="headerLabBest">
                <h3> برترین های لب تاب </h3>
            </div>
            <div class="LapWrap">
                <a href="#" class="LabCard">
                    <div class="LapImage">
                        <img src="assets/img/static_laptop_aser_new.webp" alt="NotLoad">
                    </div>
                    <div class="lapText">
                        <p> Acer </p>
                    </div>
                </a>
                <a href="#" class="LabCard">
                    <div class="LapImage">
                        <img src="assets/img/static_laptop_asus_new.webp" alt="NotLoad">
                    </div>
                    <div class="lapText">
                        <p> Asuse </p>
                    </div>
                </a>
                <a href="#" class="LabCard">
                    <div class="LapImage">
                        <img src="assets/img/static_laptop_lenovo_new.webp" alt="NotLoad">
                    </div>
                    <div class="lapText">
                        <p> Lenovo </p>
                    </div>
                </a>
                <a href="#" class="LabCard">
                    <div class="LapImage">
                        <img src="assets/img/static_laptop_mac_new.webp" alt="NotLoad">
                    </div>
                    <div class="lapText">
                        <p> Mac </p>
                    </div>
                </a>
                <a href="#" class="LabCard">
                    <div class="LapImage">
                        <img src="assets/img/static_laptop_hp_new.webp" alt="NotLoad">
                    </div>
                    <div class="lapText">
                        <p> Hp </p>
                    </div>
                </a>
            </div>
        </div>
        <div class="underThreeLaptop">
            <div class="left">
                <a href="#"><img
                        src="https://www.technolife.ir/image/banner_FirstTwinBanners_gnnkT8_89f283d7-2cd1-4528-99f0-abe93193d359.png"
                        alt="NotLoad"></a>
            </div>
            <div class="right">
                <a href="#"><img
                        src="https://www.technolife.ir/image/banner_FirstTwinBanners_vNXpbh_98dfa120-074b-4c84-90fb-8b0aa3b7cb16.png"
                        alt="NotLoad"></a>
            </div>
        </div>
        <div class="phone-categories">
            <div class="category price-category">
                <h2>گوشی بر اساس قیمت</h2>
                <div class="grid">
                    <div class="item">گوشی ساده و ارزان</div>
                    <div class="item">تا 15 میلیون</div>
                    <div class="item">تا 50 میلیون</div>
                    <div class="item">تا 100 میلیون</div>
                    <div class="item">تا 200 میلیون</div>
                    <div class="item">بالای 200 میلیون</div>
                </div>
            </div>
            <div class="category feature-category">
                <h2>گوشی بر اساس ویژگی</h2>
                <div class="grid">
                    <div class="item">گیمینگ</div>
                    <div class="item">دوربین</div>
                    <div class="item">5G</div>
                    <div class="item">باتری</div>
                    <div class="item">ضدآب</div>
                    <div class="item">شارژ سریع</div>
                </div>
            </div>
        </div>
        <div class="handzfreeBest">
            <div class="headerHandBest">
                <h3> برترین های هندزفری </h3>
            </div>
            <div class="imgBestHand">
                <a href="#">
                    <div class="imgBestHandCard">
                        <img src="assets/img/static_handsfree_apple_new.webp" alt="NotLoad">
                    </div>
                    <div class="imgBestHandCardText">
                        <p> Apple </p>
                    </div>
                </a>
                <a href="#">
                    <div class="imgBestHandCard">
                        <img src="assets/img/static_handsfree_haylou_new.webp" alt="NotLoad">
                    </div>
                    <div class="imgBestHandCardText">
                        <p> Haylo </p>
                    </div>
                </a>
                <a href="#">
                    <div class="imgBestHandCard">
                        <img src="assets/img/static_handsfree_huawei_new.webp" alt="NotLoad">
                    </div>
                    <div class="imgBestHandCardText">
                        <p> Huawei </p>
                    </div>
                </a>
                <a href="#">
                    <div class="imgBestHandCard">
                        <img src="assets/img/static_handsfree_qc_new.webp" alt="NotLoad">
                    </div>
                    <div class="imgBestHandCardText">
                        <p> Qc </p>
                    </div>
                </a>
                <a href="#">
                    <div class="imgBestHandCard">
                        <img src="assets/img/static_handsfree_xiaomi_new.webp" alt="NotLoad">
                    </div>
                    <div class="imgBestHandCardText">
                        <p> Xiaomi </p>
                    </div>
                </a>
                <a href="#">
                    <div class="imgBestHandCard">
                        <img src="assets/img/static_handsfree_xiaomi_new.webp" alt="NotLoad">
                    </div>
                    <div class="imgBestHandCardText">
                        <p> Xiaomi </p>
                    </div>
                </a>
            </div>
        </div>
        <div class="underBartarHand">
            <div class="left">
                <a href="#"><img
                        src="assets/img/banner_SecondTwinBanners_fNldTe_1db65bc6-8875-4e63-adb0-110e1f7ba675.webp"
                        alt="NotLoad"></a>
            </div>
            <div class="right">
                <a href="#"><img
                        src="assets/img/banner_SecondTwinBanners_I4t5oj_b57c5f12-9a43-41e8-b101-c4305db5a2eb.webp"
                        alt="NotLoad"></a>
            </div>
        </div>
        <div class="brand-carousel">
            <div class="brand-selected">
                برندهای منتخب
            </div>

            <div class="brand-divider"></div>

            <div class="brand-item">
                <img src="https://www.technolife.ir/image/banner_BrandBanners_9Qpb1k_541f8b8f-dfd3-488a-b02e-0960593c7860.png"
                    alt="Philips">
            </div>

            <div class="brand-divider"></div>

            <div class="brand-item">
                <img src="https://www.technolife.ir/image/banner_BrandBanners_PVvHxD_a5d30633-c84b-470c-bf63-a56e5fbdf9b6.png"
                    alt="TP-Link">
            </div>

            <div class="brand-divider"></div>

            <div class="brand-item">
                <img src="https://www.technolife.ir/image/banner_BrandBanners_GoWKQ2_de5baecb-e4fc-4b4b-a83d-d9ef67e493a8.png"
                    alt="Xiaomi">
            </div>

            <div class="brand-divider"></div>

            <div class="brand-item">
                <img src="https://www.technolife.ir/image/banner_BrandBanners_0E0mGk_aff5d3ed-9b24-4ea4-8b0c-5d3949be06d3.png"
                    alt="Huawei">
            </div>
            <div class="brand-divider"></div>

            <div class="brand-item">
                <img src="https://www.technolife.ir/image/banner_BrandBanners_MriHg0_39d5804c-aacf-4912-98cf-2a6fb4c38517.png"
                    alt="Huawei">
            </div>
            <div class="brand-divider"></div>

            <div class="brand-item">
                <img src="https://www.technolife.ir/image/banner_BrandBanners_Ox33Xi_2b532dfb-3989-46d4-8d2d-b2c5b1e701fb.png"
                    alt="Huawei">
            </div>

        </div>

        <div class="computerAndTools">
            <div class="computerAndTools">
                <div id="product-box-candt" class="product-box-candt">
                    <div id="products-candt" class="products-container-candt">
                        <?php
                    $sql = "SELECT * FROM tbl_products WHERE category = ?"
                    ;if ($stmt = $conn->prepare($sql)) {
                        $category = 2;
                        $stmt -> bind_param("i",$category);
                        $stmt->execute();
                        $result = $stmt->get_result();
                        while ($row = $result->fetch_assoc()) {
                        $imgUrl = ltrim($row['pr_thumbnail'], './');
                        $itemName = $row['name'];
                        $itemPrice = $row['price'];
                        $itemId = $row['product_id'];
                        $card_info = $row['card_info'];
                        $discount_display = [
                                'header' => 'none',
                                'footer' => 'none',
                        ];
                        $discount_status = $row['discount_status'];
                        if ($discount_status === 1) {
                            $discount_data = $row['discount_data'];
                            $discount = json_decode($discount_data, true);
                            $discount_display = [
                                'header' => 'flex',
                                'footer' => 'block',
                            ];
                        }
                    ?>
                        <div class="product-candt">
                            <hr class="product-divider-candt">
                            <div style="display: <?php echo $discount_display['header']; ?>;" class="saleNocandt">
                                <p>سال نو مبارک</p>
                                <div id="data-end-candt">
                                    <div id="days"></div>
                                    <p>:</p>
                                    <div id="hour"></div>
                                    <p>:</p>
                                    <div id="minute"></div>
                                    <p>:</p>
                                    <div id="second"></div>
                                    <p></p>
                                </div>
                            </div><a href="product/<?php echo $itemId; ?>"><img src="<?php echo htmlspecialchars($imgUrl); ?>"
                                    alt="<?php echo htmlspecialchars($itemName); ?> " class="product-image-candt"></a>
                            <h2 class="product-title-candt"><?php echo htmlspecialchars($itemName); ?> </h2>
                            <p class="product-description-candt"><?php echo htmlspecialchars($card_info); ?></p>
                            <p class="discounted-price">
                                <?php if ($discount_status === 1) {echo formatNumberFa(htmlspecialchars((100 - $discount['value'])*$itemPrice / 100));} else {echo formatNumberFa(htmlspecialchars($itemPrice));} ?>
                                <p style="display: <?php echo $discount_display['footer']; ?>;">
                                    (<?php echo $discount['value']; ?>% off)</p>
                            </p>
                            <p style="display: <?php echo $discount_display['footer']; ?>;" class="original-price">
                                <?php echo formatNumberFa(htmlspecialchars($itemPrice)); ?></p>
                        </div>
                    </div>
                    <?php 
                        };
                    };
                    ?>
                    <div id="header-candt">
                        <div id="left-candt">نمایش همه<i class="bi bi-arrow-left-short"></i></div>
                        <div id="Right-candt">کامپیوتر و تجهیزات</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="LavazemHome">
            <div class="headerLavazem">
                <div class="titleLavazem">
                    <h3 style="margin-left: 8px;"> لوازم خانگی و اشپزخانه </h3>
                    <h5> خانه و اشپزخانه </h5>
                </div>
            </div>
            <div class="shape">
                <div class="cardGrid">
                    <div class="grid-Container">
                        <a href="#">
                            <div class="minidiv">
                                <img src="assets/img/static_homeAppliance_airConditioner_new.webp" alt="Not Load">
                                <div class="text">
                                    <p> بخاری برقی </p>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="minidiv">
                                <img src="assets/img/static_homeAppliance_coffeMaker_new.webp" alt="Not Load">
                                <div class="text">
                                    <p> جاروبرقی </p>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="minidiv">
                                <img src="assets/img/static_homeAppliance_dishwasher_new.webp" alt="Not Load">
                                <div class="text">
                                    <p> ابمیوه گیری </p>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="minidiv">
                                <img src="assets/img/static_homeAppliance_electric_heater_new.webp" alt="Not Load">
                                <div class="text">
                                    <p> کولر گازی </p>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="minidiv">
                                <img src="assets/img/static_homeAppliance_hairDryer_new.webp" alt="Not Load">
                                <div class="text">
                                    <p> چای ساز </p>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="minidiv">
                                <img src="assets/img/static_homeAppliance_iron_new.webp" alt="Not Load">
                                <div class="text">
                                    <p> اتو </p>
                                </div>
                            </div>
                        </a>
                        <a href="#" style="border-left: none;">
                            <div class="minidiv">
                                <img src="assets/img/static_homeAppliance_juicer_new.webp" alt="Not Load">
                                <div class="text">
                                    <p> ابمیوه گیری </p>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="minidiv">
                                <img src="assets/img/static_homeAppliance_airConditioner_new.webp" alt="Not Load">
                                <div class="text">
                                    <p> ابمیوه گیری </p>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="minidiv">
                                <img src="assets/img/static_homeAppliance_coffeMaker_new.webp" alt="Not Load">
                                <div class="text">
                                    <p> ابمیوه گیری </p>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="minidiv">
                                <img src="assets/img/static_homeAppliance_dishwasher_new.webp" alt="Not Load">
                                <div class="text">
                                    <p> ابمیوه گیری </p>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="minidiv">
                                <img src="assets/img/static_homeAppliance_electric_heater_new.webp" alt="Not Load">
                                <div class="text">
                                    <p> ابمیوه گیری </p>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="minidiv">
                                <img src="assets/img/static_homeAppliance_hairDryer_new.webp" alt="Not Load">
                                <div class="text">
                                    <p> ابمیوه گیری </p>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="minidiv">
                                <img src="assets/img/static_homeAppliance_iron_new.webp" alt="Not Load">
                                <div class="text">
                                    <p> ابمیوه گیری </p>
                                </div>
                            </div>
                        </a>
                        <a href="#" style="border-left: none;">
                            <div class="minidiv">
                                <img src="assets/img/static_homeAppliance_juicer_new.webp" alt="Not Load">
                                <div class="text">
                                    <p> ابمیوه گیری </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="UnderLavazemHome">
            <div class="left">
                <a href="#"><img style="width: 100%;border-radius: 30px;" src="assets/img/bannerLavazemHome1.webp"
                        alt="Not Load"></a>
            </div>
            <div class="right">
                <a href="#"><img style="width: 100%;border-radius: 30px;" src="assets/img/BannerlavazemHome2.webp"
                        alt="Not Load"></a>
            </div>
        </div>
        <div class="lavazemJanebiBest">
            <div class="labTopInTecno">
                <div class="headerParch">
                    <span> لوازم جانبی منتخب</span>
                    <span class="firstchildSpan">
                        نمایش همه
                        <i class="bi bi-arrow-left-short"></i>
                    </span>
                </div>
                <div class="swapper">
                    <?php
                    $sql = "SELECT * FROM tbl_products WHERE category = ?"
                    ;if ($stmt = $conn->prepare($sql)) {
                        $category = 2;
                        $stmt -> bind_param("i",$category);
                        $stmt->execute();
                        $result = $stmt->get_result();
                        while ($row = $result->fetch_assoc()) {
                        $imgUrl = ltrim($row['pr_thumbnail'], './');
                        $itemName = $row['name'];
                        $itemPrice = $row['price'];
                        $itemId = $row['product_id'];
                        $card_info = $row['card_info'];
                    ?>
                    <div class="shape">
                        <a href="product/<?php echo $itemId; ?>"><img src="<?php echo htmlspecialchars($imgUrl); ?>"
                                alt="<?php echo htmlspecialchars($itemName); ?>"></a>
                        <div class="title">
                            <p><?php echo htmlspecialchars($itemName); ?></p>
                        </div>
                        <div class="description"> <?php echo htmlspecialchars($card_info); ?> </div>
                        <p class="money" id="priceLaptop">
                            <?php echo formatNumberFa(htmlspecialchars($itemPrice)); ?>
                        </p>
                        <p style="margin: 5px 0;"> تومان </p>
                    </div>
                    <hr>
                    <?php 
                        };
                    };
                ?>
                </div>
            </div>
        </div>
        <div class="asBlogTecno">
            <div class="headerAsBlog">
                <div class="left">
                    از وبلاگ تکنولایف
                </div>
                <div class="right">
                    <h3> نمایش در بلاگ </h3>
                    <i class="bi bi-arrow-left-short" style="font-size: 25px;"></i>
                </div>
            </div>
            <div class="imageContainer">
                <div class="arrowLeft" id="arrowLeft"><i class="bi bi-arrow-left-short" style="font-size: 25px;"></i>
                </div>
                <div class="imageCard" id="FirstImageCard" style="transition: margin-right 0.3s ease;">
                    <div class="imgCard">
                        <a href="#"><img src="assets/img/inTecno1.webp" alt="NOt Load"></a>
                    </div>
                    <div class="textCard">
                        کسب درامد از بازی
                    </div>
                </div>
                <div class="imageCard">
                    <div class="imgCard">
                        <a href="#"><img src="assets/img/inTecno2.webp" alt="Not Load"></a>
                    </div>
                    <div class="textCard">
                        تشخیص کابل اصلی ایفون
                    </div>
                </div>
                <div class="imageCard">
                    <div class="imgCard">
                        <a href="#"><img src="assets/img/inTecno3.webp" alt="Not Load"></a>
                    </div>
                    <div class="textCard">
                        پر فروش ترین مدل جاروبرقی پارس خزر
                    </div>
                </div>
                <div class="imageCard">
                    <div class="imgCard">
                        <a href="#"><img src="assets/img/inTecno4.webp" alt="Not Load"></a>
                    </div>
                    <div class="textCard">
                        بهترین گوشی تا پنج میلیون
                    </div>
                </div>
                <div class="imageCard">
                    <div class="imgCard">
                        <a href="#"><img src="assets/img/inTecno5.webp" alt="Not Load"></a>
                    </div>
                    <div class="textCard">
                        بهترین گوشی تا پنج میلیون
                    </div>
                </div>
                <div class="imageCard">
                    <div class="imgCard">
                        <a href="#"><img src="assets/img/inTecno3.webp" alt="Not Load"></a>
                    </div>
                    <div class="textCard">
                        بهترین گوشی تا پنج میلیون
                    </div>
                </div>
                <div class="imageCard">
                    <div class="imgCard">
                        <a href="#"><img src="assets/img/inTecno5.webp" alt="Not Load"></a>
                    </div>
                    <div class="textCard">
                        بهترین گوشی تا پنج میلیون
                    </div>
                </div>
                <div class="arrowRight" id="arrowRight"><i class="bi bi-arrow-right-short" style="font-size: 25px;"></i>
                </div>
            </div>
        </div>
        <div class="line">
            <hr>
        </div>
        <footer class="footer">
            <div class="about-Tecno" id="about-Tecno">
                <h1>فروشگاه اینترنتی تکنولایف</h1>
                <p>
                    فروشگاه اینترنتی تکنولایف سال&zwnj;ها است که به&zwnj;عنوان بزرگترین فروشگاه کالای دیجیتال مشغول
                    فعالیت است. از آن&zwnj;جا که خرید اینترنتی همواره موجی از بی&zwnj;اعتمادی و شک را با خود
                    به&zwnj;همراه داشته، نماد الکترونیکی می&zwnj;تواند خیال خیلی از افراد را راحت کند.
                    <strong>تکنولایف</strong> با داشتن نماد اعتماد الکترونیکی و عضویت در سازمان صنفی رایانه&zwnj;ای
                    کشور، همچنین عضویت در انجمن صنفی فروشگاه&zwnj;های اینترنتی، فضای ایمن برای خرید آنلاین را برای
                    مشتریان خود ایجاد کرده است.
                </p>
                <p>
                    شما می&zwnj;توانید خرید کالای دیجیتال مانند
                    <a
                        href="/product/list/164_163_130/%D8%AA%D9%85%D8%A7%D9%85%DB%8C-%DA%A9%D8%A7%D9%85%D9%BE%DB%8C%D9%88%D8%AA%D8%B1%D9%87%D8%A7-%D9%88-%D9%84%D9%BE-%D8%AA%D8%A7%D9%BE-%D9%87%D8%A7">
                        خرید لپ تاپ </a>
                    ، گوشی موبایل در مدل&zwnj;ها و برندهای مختلف،
                    <a href="/product/list/26/%D9%84%D9%88%D8%A7%D8%B2%D9%85-%D8%AC%D8%A7%D9%86%D8%A8%DB%8C"> لوازم
                        جانبی موبایل </a>
                    ، هدفون، و کلیه لوازم دیجیتال مدنظر خود را با بهترین قیمت، در فروشگاه تکنولایف به ثبت برسانید.
                </p>
                <h1> خرید گوشی از تکنولایف </h1>
                <p>
                    فروشگاه اینترنتی تکنولایف سال&zwnj;ها است که به&zwnj;عنوان بزرگترین فروشگاه کالای دیجیتال مشغول
                    فعالیت است. از آن&zwnj;جا که خرید اینترنتی همواره موجی از بی&zwnj;اعتمادی و شک را با خود
                    به&zwnj;همراه داشته، نماد الکترونیکی می&zwnj;تواند خیال خیلی از افراد را راحت کند.
                    <strong>تکنولایف</strong> با داشتن نماد اعتماد الکترونیکی و عضویت در سازمان صنفی رایانه&zwnj;ای
                    کشور، همچنین عضویت در انجمن صنفی فروشگاه&zwnj;های اینترنتی، فضای ایمن برای خرید آنلاین را برای
                    مشتریان خود ایجاد کرده است.
                </p>
                <h1>خرید گوشی سامسونگ </h1>
                <p>
                    برند کره&zwnj;ای سامسونگ، با تولید سالانه&zwnj;ی گوشی&zwnj;های پرچمدار، میان&zwnj;رده و اقتصادی، یکی
                    از پرطرفدارترین و محبوب&zwnj;ترین برندها در میان کاربران سراسر جهان از جمله ایران است. انواع گوشی
                    موبایل سامسونگ، مناسب کاربران گیمر، عاشقان تولید محتوا، علاقه&zwnj;مندان به عکاسی و دیگر
                    گروه&zwnj;ها است. تنوع بالای گوشی سامسونگ در تکنولایف، این امکان را برای شما علاقه&zwnj;مندان ایجاد
                    کرده که اقدام به
                    <a
                        href="/product/list/69_70_77/%DA%AF%D9%88%D8%B4%DB%8C-%D9%85%D9%88%D8%A8%D8%A7%DB%8C%D9%84-%D8%B3%D8%A7%D9%85%D8%B3%D9%88%D9%86%DA%AF-samsung">
                        خرید گوشی سامسونگ </a>
                    با بهترین قیمت کنید.
                </p>
                <h1>خرید گوشی اپل</h1>
                <p>
                    گوشی اپل از گرانترین گوشی&zwnj;ها، در عین حال محبوب&zwnj;ترین گوشی&zwnj;ها در تمامی دنیا محسوب
                    می&zwnj;شود. بالا بودن
                    <a
                        href="/product/list/69_70_73/%DA%AF%D9%88%D8%B4%DB%8C-%D9%85%D9%88%D8%A8%D8%A7%DB%8C%D9%84-%D8%A7%D9%BE%D9%84-apple">
                        قیمت گوشی آیفون </a>
                    انگار هیچوقت نتوانست مانع شود که افراد موبایل این برند را برای خرید انتخاب نکنند. دوربین قوی،
                    پردازنده&zwnj;ی همه&zwnj;فن&zwnj;حریف، طراحی زیبا و
                    خیلی موارد دیگر، گوشی های این برند آمریکایی را بسیار پرطرفدار کرده و شما می&zwnj;توانید با بهترین
                    قیمت، این گوشی&zwnj;ها را از سایت فروش گوشی تکنولایف خریداری کنید.
                </p>
                <h1>خرید گوشی هواوی</h1>
                <p>
                    هواوی، این برند چینی، در سال ۲۰۱۲ برای جهانیان شناخته شد و توانست در زمانی کوتاه جزء چند شرکت برتر،
                    به خصوص در فروش گوشی شود. با این که داستان&zwnj;های زیادی این برند داشت، اما باز هم طرفداران
                    پروپاقرصی دارد. کسانی&zwnj;که هنوز هم به فکر خرید
                    <a
                        href="/product/list/69_70_798/%DA%AF%D9%88%D8%B4%DB%8C-%D9%85%D9%88%D8%A8%D8%A7%DB%8C%D9%84-%D9%87%D9%88%D8%A7%D9%88%DB%8C-huawei">
                        گوشی هواوی </a>
                    هستند. سایت خرید موبایل تکو لایف، گوشی&zwnj;های این برند را با قیمتی فوق&zwnj;العاده برای کاربران به
                    فروش می&zwnj;رساند.
                </p>
                <h1>خرید گوشی شیائومی</h1>
                <p>
                    سازندگان چینی شیائومی نیز، با تولید انواع گوشی و
                    <a href="/product/list/27_550_227/%D8%AA%D9%85%D8%A7%D9%85-%D8%AA%D8%A8%D9%84%D8%AA-%D9%87%D8%A7">
                        تبلت </a>
                    باکیفیت، توانست نظر و اعتماد خریداران گوشی را به&zwnj; خود جلب کند. شیائومی در طیف&zwnj;های مختلف
                    برای افراد مختلف با نیازهای گوناگون، گوشی&zwnj;های خوبی را در بازه قیمتی مختلف تولید کرد. یکی از
                    دلایلی که شیائومی جزء برندهای پرطرفدار است، مقرون&zwnj;به&zwnj;صرفه بودن قیمت گوشی های این برند نسبت
                    به رقبا است.
                </p>
            </div>
            <div class="more" id="more">
                <h1 id="moreH1">
                    نمایش بیشتر
                </h1>
                <i class="bi bi-caret-down-fill"></i>
            </div>
            <div class="bluFooter">
                <div class="mainBluFooter">
                    <div class="getUp">
                        <div class="img-logo">
                            <img src="assets/img/logoKaren.jpg" alt="Not Load" style="width: 100%;object-fit: cover;">
                        </div>
                        <div class="getUpButton" id="ToTOp">
                            <p style="display: flex;color: black;margin: 0;"> بازگشت به بالا </p>
                            <i style="color: black;display: flex;margin-right: 15px;" class="bi bi-caret-up-fill"></i>
                        </div>
                    </div>
                    <div class="lineFootBlue" style="display: flex;justify-content: center;align-items: center;">
                        <hr style="width: 940px;color: white;margin-left: 40px;margin-right: 60px;width: 100%;">
                    </div>
                    <div class="ulList">
                        <div class="ulRight">
                            <ul>
                                <h3> دسترسی سریع </h3>
                                <a href="#">
                                    <li> بلاگ </li>
                                </a>
                                <a href="#">
                                    <li> خرید گوشی</li>
                                </a>
                                <a href="#">
                                    <li> گوشی سامسونگ</li>
                                </a>
                                <a href="#">
                                    <li> گوشی ایفون</li>
                                </a>
                                <a href="#">
                                    <li> گوشی شیاعومی</li>
                                </a>
                                <a href="#">
                                    <li> گوشی پوکو</li>
                                </a>
                                <a href="#">
                                    <li> مقایسه گوشی</li>
                                </a>
                                <a href="#">
                                    <li> قیمت لب تاب</li>
                                </a>
                                <a href="#">
                                    <li> هندزفری بلوتوثی</li>
                                </a>
                                <a href="#">
                                    <li> لب تاب ایسوس</li>
                                </a>
                                <h3> پیش از خرید </h3>
                                <a href="#">
                                    <li> راهنمای خرید اقساطی </li>
                                </a>
                                <a href="#">
                                    <li> خرید سازمانی </li>
                                </a>
                                <a href="#">
                                    <li> راهنمای خرید از تکنولایف </li>
                                </a>
                                <a href="#">
                                    <li> روش های خرید از تکنولابف </li>
                                </a>
                                <a href="#">
                                    <li> ضمانت هفت روزه تکنولایف </li>
                                </a>
                                <a href="#">
                                    <li> شیوه ها و هزینه ارسال </li>
                                </a>
                            </ul>
                        </div>
                        <div class="ulCenter">
                            <ul>
                                <h3>پرفروش ترین محصولات</h3>
                                <a href="">
                                    <li> گوشی A16 </li>
                                </a>
                                <a href="">
                                    <li> گوشی Pura70 </li>
                                </a>
                                <a href="">
                                    <li> گوشی 14t </li>
                                </a>
                                <a href="">
                                    <li> ایفون 16 </li>
                                </a>
                                <a href="">
                                    <li> گوشی ردمی نوت 14 </li>
                                </a>
                                <a href="">
                                    <li> گوشی اس 25 سامسونگ </li>
                                </a>
                                <a href="">
                                    <li> ساعت هوشمند </li>
                                </a>
                                <a href="">
                                    <li> پرینتر </li>
                                </a>
                                <a href="">
                                    <li> هارد اکسترنال </li>
                                </a>
                                <a href="">
                                    <li> لوازم خانگی </li>
                                </a>
                                <h3> پس از خرید </h3>
                                <a href="#">
                                    <li> تضمین ریجستری </li>
                                </a>
                                <a href="#">
                                    <li>رویه های بازگرداندن کالا </li>
                                </a>
                                <a href="#">
                                    <li> سوالات متداول ریجستری </li>
                                </a>
                                <a href="#">
                                    <li> رهگیری سفارش ها </li>
                                </a>
                            </ul>
                        </div>
                        <div class="ulLeft">
                            <ul>
                                <h3> درباره ما </h3>
                                <a href="#">
                                    <li> تکنولایف در یک نگاه </li>
                                </a>
                                <a href="#">
                                    <li> اهداف و تعهد های ما </li>
                                </a>
                                <a href="#">
                                    <li> سوالات متداول </li>
                                </a>
                                <a href="#">
                                    <li> فروشگاه های حضوری </li>
                                </a>
                                <a href="#">
                                    <li> تماس با ما </li>
                                </a>
                                <h3 style="margin-top: 150px;"> قوانین و مقررات </h3>
                                <a href="#">
                                    <li> قوانین و مقررات</li>
                                </a>
                                <a href="#">
                                    <li>حریم خصوصی کاربران </li>
                                </a>
                                <a href="#">
                                    <li>تکنولایف مشتریان از زبان</li>
                                </a>
                                <a href="#">
                                    <li>تکنولایف چرا</li>
                                </a>
                            </ul>
                        </div>
                    </div>
                    <div class="lineFootBlue"
                        style="display: flex;justify-content: center;align-items: center;margin-top: 12px;">
                        <hr style="color: white;margin-left: 40px;margin-right: 60px;width: 100%;">
                    </div>
                    <div class="connect">
                        <div class="connectUs">
                            <h3> ارتباط با ما </h3>
                            <p> تلفن : 02147708000-02191077500 </p>
                            <p> ایمیل : info@tchnolife.ir</p>
                        </div>
                        <div class="sotial">
                            <div class="sotialMain">
                                <h3 style="font-size: 20px;margin-bottom: 10px;color: white;"> شبکه های اجتماعی </h3>
                                <div class="ico" style="display: flex;flex-direction: row;font-size: 20px;">
                                    <a href="#"><i class="bi bi-instagram" style="margin-right: 30px;"></i></a>
                                    <a href="#"><i class="bi bi-apple"></i></a>
                                    <a href="#"><i class="bi bi-youtube"></i></a>
                                    <a href="#"><i class="bi bi-telegram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lineFootBlue"
                        style="display: flex;justify-content: center;align-items: center;margin-top: 12px;">
                        <hr style="color: white;margin-left: 40px;margin-right: 60px;width: 100%;">
                    </div>
                    <div class="Namadha">
                        <div class="digiOption">
                            <a href="#"><img src="assets/img/NmTecno.webp" alt="Not Load"></a>
                            <a href="#"><img src="assets/img/NmTecnoGold.webp" alt="Not Load"></a>
                            <a href="#"><img src="assets/img/NmTecno1.webp" alt="Not Load"></a>
                            <a href="#"><img src="assets/img/NmTecnoP.webp" alt="Not Load"></a>
                        </div>
                        <div class="NamadQ">
                            <a href="#"><img src="assets/img/namadQ.webp" alt="Not Load"></a>
                            <a href="#"><img src="assets/img/namadQ1.webp" alt="Not Load"></a>
                            <a href="#"><img src="assets/img/namadQ2.webp" alt="Not Load"></a>
                            <a href="#"><img src="assets/img/namadQ3.svg" alt="Not Load"></a>
                            <a href="#"><img src="assets/img/namadQ4.png" alt="Not Load"></a>
                        </div>
                    </div>
                    <div class="mojavez">
                        <p style="color: white;">1391-1404 تمام حقوق مادی و معنوی این سایت متعلق به تکنولایف میباشد</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="./assets/js/app.js"></script>
    <script src="./assets/js/cart_handler.js"></script>
    <script src="./assets/js/Timer.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const categoriesContainer = document.querySelector('.categories-container');
            const prevButton = document.querySelector('.prev-cat-arrow');
            const nextButton = document.querySelector('.next-cat-arrow');

            if (categoriesContainer && prevButton && nextButton) {
                const scrollAmount = 250;

                const scrollCategories = (direction) => {
                    if (direction === 'prev') {
                        categoriesContainer.scrollBy({
                            left: scrollAmount,
                            behavior: 'smooth'
                        });
                    } else {
                        categoriesContainer.scrollBy({
                            left: -scrollAmount,
                            behavior: 'smooth'
                        });
                    }
                };

                prevButton.addEventListener('click', () => scrollCategories('prev'));
                nextButton.addEventListener('click', () => scrollCategories('next'));

                const checkScrollArrows = () => {
                    const currentScrollPos = Math.abs(categoriesContainer.scrollLeft);
                    const maxScrollPos = categoriesContainer.scrollWidth - categoriesContainer.clientWidth;

                    if (currentScrollPos < 5) {
                        prevButton.style.display = 'none';
                    } else {
                        prevButton.style.display = 'flex';
                    }

                    if (maxScrollPos - currentScrollPos < 5) {
                        nextButton.style.display = 'none';
                    } else {
                        nextButton.style.display = 'flex';
                    }
                };

                checkScrollArrows();
                categoriesContainer.addEventListener('scroll', checkScrollArrows);
                window.addEventListener('resize', checkScrollArrows);
            }
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>