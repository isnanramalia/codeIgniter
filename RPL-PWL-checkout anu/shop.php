<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('php/head.php'); ?><!-- fungsi meta dan link source -->
    <title>shop - skinker</title>
</head>


<body style="margin-top: 50px; padding-top: 50px;">
    <header>
        <?php
        require_once('php/header.php');
        ?>
    </header>

    <!-- utk menampilkan pop-up alert -->
    <div class="alert-message"></div>
    <style>
        .alert-message {
            position: fixed;
            bottom: 20px;
            right: 20px;
            max-width: 300px;
            z-index: 9999;
            overflow-y: auto;
            max-height: 80vh;
        }
    </style>


    <!-- ---------------------------|START CONTAINER|------------------------------ -->
    <main class="container">
        <section class="row">
            <!-- ---------------------------------------|| section 1(asside filter) ||----------------------------------------------- -->
            <section class="col-2 py-5" style="position: sticky;">
                <aside style="position: fixed;">
                    <h1 style="margin-left: 45px; margin-top: 20px; padding-top: 40px; font-size: 30px;">
                        Filter</h1>
                    <ul class=" list-group-vertical-md">
                        <li class="list-group-item"><a href="#moisturizer">Moisturizer</a></li>
                        <li class="list-group-item"><a href="#sunscreen">Sunscreen</a></li>
                        <li class="list-group-item"><a href="#cleanser">Cleanser</a></li>
                        <li class="list-group-item"><a href="#exfoliant">Exfoliant</a></li>
                        <li class="list-group-item"><a href="#lipcare">Lip Care</a></li>
                        <li class="list-group-item"><a href="#mask">Mask</a></li>
                        <li class="list-group-item"><a href="#serum">Serum</a></li>
                        <li class="list-group-item"><a href="#eyetreatment">Eye Treatment</a></li>
                        <li class="list-group-item"><a href="#toner">Toner</a></li>
                        <li class="list-group-item"><a href="#setbundle">Set Bundle</a></li>
                    </ul>
                </aside>
            </section>


            <!-- ---------------------------------------|| section 2(all products) ||----------------------------------------------- -->

            <section class="col-10 py-5" style="overflow: auto;">
                <h1 style=" text-align: center; padding-bottom: 10px; margin-bottom: 10px;">
                    Product</h1>
                <hr>
                <!------------------------------MOISTURIZER-------------------------->
                <section id="moisturizer" style="background-color: white; font-size: medium; padding: 30px;margin: 30px;border: 0.3px solid  rgba(0, 0, 0, 0.3); border-top-left-radius: 50%; border-bottom-right-radius: 50%;">
                    <h2 style="font-size: medium; text-align: center;">Moisturizer</h2>
                </section>
                <section class="card-deck d-flex justify-content-center">

                    <?php
                    require_once "dbconfig.php";
                    $select_stmt = $db->prepare("SELECT * FROM product WHERE product_category = 'moisturizer'");
                    $select_stmt->execute();
                    include 'php/showProduct.php';
                    ?>

                </section>




                <!------------------------------SUNSCREEN-------------------------->
                <section style="margin: 40px;padding: 40px;"></section>
                <section id="sunscreen" style="background-color: white; font-size: medium; padding: 30px;margin: 30px; border: 0.3px solid  rgba(0, 0, 0, 0.3); border-top-left-radius: 50%; border-bottom-right-radius: 50%;">
                    <h2 style="font-size: medium; text-align: center;">Sunscreen</h2>
                </section>
                <section class="card-deck d-flex justify-content-center">
                    <?php
                    require_once "dbconfig.php";
                    $select_stmt = $db->prepare("SELECT * FROM product WHERE product_category = 'sunscreen'");
                    $select_stmt->execute();
                    include 'php/showProduct.php';
                    ?>
                </section>


                <!------------------------------CLEANSER-------------------------->
                <section style="margin: 40px;padding: 40px;"></section>
                <section id="cleanser" style="background-color: white; font-size: medium; padding: 30px;margin: 30px; border: 0.3px solid  rgba(0, 0, 0, 0.3); border-top-left-radius: 50%; border-bottom-right-radius: 50%;">
                    <h2 style="font-size: medium; text-align: center;">Cleanser</h2>
                </section>
                <section class="card-deck d-flex justify-content-center">
                    <?php
                    require_once "dbconfig.php";
                    $select_stmt = $db->prepare("SELECT * FROM product WHERE product_category = 'cleanser'");
                    $select_stmt->execute();
                    include 'php/showProduct.php';
                    ?>
                </section>

                <!------------------------------EXFOLIANT-------------------------->
                <section style="margin: 40px;padding: 40px;"></section>
                <section id="exfoliant" style="background-color: white; font-size: medium; padding: 30px;margin: 30px; border: 0.3px solid  rgba(0, 0, 0, 0.3); border-top-left-radius: 50%; border-bottom-right-radius: 50%;">
                    <h2 style="font-size: medium; text-align: center;">Exfoliant</h2>
                </section>
                <section class="card-deck d-flex justify-content-center">
                    <?php
                    require_once "dbconfig.php";
                    $select_stmt = $db->prepare("SELECT * FROM product WHERE product_category = 'exfoliant'");
                    $select_stmt->execute();
                    include 'php/showProduct.php';
                    ?>
                </section>

                <!------------------------------LIP CARE-------------------------->
                <section style="margin: 40px;padding: 40px;"></section>
                <section id="lipcare" style="background-color: white; font-size: medium; padding: 30px;margin: 30px; border: 0.3px solid  rgba(0, 0, 0, 0.3); border-top-left-radius: 50%; border-bottom-right-radius: 50%;">
                    <h2 style="font-size: medium; text-align: center;">Lip Care</h2>
                </section>
                <section class="card-deck d-flex justify-content-center">
                    <?php
                    require_once "dbconfig.php";
                    $select_stmt = $db->prepare("SELECT * FROM product WHERE product_category = 'lipCare'");
                    $select_stmt->execute();
                    include 'php/showProduct.php';
                    ?>
                </section>

                <!------------------------------MASK-------------------------->
                <section style="margin: 40px;padding: 40px;"></section>
                <section id="mask" style="background-color: white; font-size: medium; padding: 30px;margin: 30px; border: 0.3px solid  rgba(0, 0, 0, 0.3); border-top-left-radius: 50%; border-bottom-right-radius: 50%;">
                    <h2 style="font-size: medium; text-align: center;">Mask</h2>
                </section>
                <section class="card-deck d-flex justify-content-center">
                    <?php
                    require_once "dbconfig.php";
                    $select_stmt = $db->prepare("SELECT * FROM product WHERE product_category = 'mask'");
                    $select_stmt->execute();
                    include 'php/showProduct.php';
                    ?>
                </section>

                <!------------------------------SERUM/ESSENCE-------------------------->
                <section style="margin: 40px;padding: 40px;"></section>
                <section id="serum" style="background-color: white; font-size: medium; padding: 30px;margin: 30px; border: 0.3px solid  rgba(0, 0, 0, 0.3); border-top-left-radius: 50%; border-bottom-right-radius: 50%;">
                    <h2 style="font-size: medium; text-align: center;">Serum and Essence</h2>
                </section>
                <section class="card-deck d-flex justify-content-center">
                    <?php
                    require_once "dbconfig.php";
                    $select_stmt = $db->prepare("SELECT * FROM product WHERE product_category = 'serum'");
                    $select_stmt->execute();
                    include 'php/showProduct.php';
                    ?>
                </section>

                <!------------------------------EYE TREATMENT-------------------------->
                <section style="margin: 40px;padding: 40px;"></section>
                <section id="eyetreatment" style="background-color: white; font-size: medium; padding: 30px;margin: 30px; border: 0.3px solid  rgba(0, 0, 0, 0.3); border-top-left-radius: 50%; border-bottom-right-radius: 50%;">
                    <h2 style="font-size: medium; text-align: center;">Eye Treatment</h2>
                </section>
                <section class="card-deck d-flex justify-content-center">
                    <?php
                    require_once "dbconfig.php";
                    $select_stmt = $db->prepare("SELECT * FROM product WHERE product_category = 'eye'");
                    $select_stmt->execute();
                    include 'php/showProduct.php';
                    ?>
                </section>

                <!------------------------------TONER-------------------------->
                <section style="margin: 40px;padding: 40px;"></section>
                <section id="toner" style="background-color: white; font-size: medium; padding: 30px;margin: 30px; border: 0.3px solid  rgba(0, 0, 0, 0.3); border-top-left-radius: 50%; border-bottom-right-radius: 50%;">
                    <h2 style="font-size: medium; text-align: center;">Toner</h2>
                </section>
                <section class="card-deck d-flex justify-content-center">
                    <?php
                    require_once "dbconfig.php";
                    $select_stmt = $db->prepare("SELECT * FROM product WHERE product_category = 'toner'");
                    $select_stmt->execute();
                    include 'php/showProduct.php';
                    ?>
                </section>

                <!------------------------------SET BUNDLES-------------------------->
                <section style="margin: 40px;padding: 40px;"></section>
                <section id="setbundle" style="background-color: white; font-size: medium; padding: 30px;margin: 30px; border: 0.3px solid  rgba(0, 0, 0, 0.3); border-top-left-radius: 50%; border-bottom-right-radius: 50%;">
                    <h2 style="font-size: medium; text-align: center;">Set Bundle</h2>
                </section>
                <section class="card-deck d-flex justify-content-center">
                    <?php
                    require_once "dbconfig.php";
                    $select_stmt = $db->prepare("SELECT * FROM product WHERE product_category = 'set bundle'");
                    $select_stmt->execute();
                    include 'php/showProduct.php';
                    ?>
                </section>

            </section>
    </main>



    <!-- ----------------------------------|FOOTER|------------------------------ -->
    <footer class="text-center text-lg-start border border-white mt-xl-5 pt-4" style="background-color: white;">
        <?php require_once('php/footer.php') ?>
        <?php require_once('php/addCart.php'); ?>
    </footer>
</body>

</html>