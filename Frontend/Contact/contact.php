<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="contact.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script src="../Components/HeaderComp/header_comp.js"></script>
    <script src="../Components/MenuComp/menu_comp.js"></script>
    
    
    <link rel="stylesheet" href="../Components/HeaderComp/header_comp.css">
    <link rel="stylesheet" href="../Components/FooterComp/footer_comp.css">
    <link rel="stylesheet" href="../Components/MenuComp/menu_comp.css">
</head>
<body>
    <?php include "../Components/MenuComp/menu_comp.php" ?>
    <section class="wrap-container" id="wrap-container">
        <?php include "../Components/HeaderComp/header_comp.php" ?>
        <section class="container">
            <h3 class="page-title">Contact</h3>
            <div class="container-content">
                <form action="">
                    <div class="form-top">
                        <div class="form-left">
                            <div class="form-left-div">
                                <ion-icon class="form-icon" name="person"></ion-icon>
                                <div class="label-input-div">
                                    <label for="form-name" class="form-label">NAME & LASTNAME</label>
                                    <input id="form-name" class="form-input" name="formName" type="text" required>
                                </div>
                            </div>
                            <div class="form-left-div">
                                <ion-icon class="form-icon" name="mail"></ion-icon>
                                <div class="label-input-div">
                                    <label for="form-email" class="form-label">E-MAIL</label>
                                    <input id="form-email" class="form-input" name="formEmail" type="text" required>
                                </div>
                            </div>
                            <div class="form-left-div">
                                <ion-icon class="form-icon" name="call"></ion-icon>
                                <div class="label-input-div">
                                    <label for="form-name" class="form-label">PHONE</label>
                                    <input id="form-name" class="form-input" name="formName" type="text" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-right">
                            <div class="form-right-div">
                                <ion-icon class="rightform-icon" name="chatbox-ellipses"></ion-icon>
                                <div class="right-label-input-div">
                                    <label for="form-from-dep" class="form-label">MESSAGE</label>
                                    <textarea id="form-message" class="form-input" name="formFromDep" type="text"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button id="submit" class="submitBtn" type="submit"><ion-icon class="form-button-icon" name="caret-forward"></ion-icon></button>
                </form>
            </div>
            <?php include "../Components/FooterComp/footer_comp.php" ?>
        </section>
    </section>
</body>
</html>
<script src="../Contact/contact.js"></script>