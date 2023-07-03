<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script src="../Components/HeaderComp/header_comp.js"></script>
    <script src="../Components/MenuComp/menu_comp.js"></script>

    <link rel="stylesheet" href="../Components/HeaderComp/header_comp.css">
    <link rel="stylesheet" href="../Components/FooterComp/footer_comp.css">
    <link rel="stylesheet" href="../Components/MenuComp/menu_comp.css">
</head>
<body>
    <?php include "../Components/MenuComp/menu_comp.php" ?>
    <section id="wrap-container" class="wrap-container">
        <?php include "../Components/HeaderComp/header_comp.php" ?>
        <section class="container">
            <h3 class="page-title">Home</h3>
            <div class="container-content">
                <img class="container-content-img" src="../Resources/UruguayExpressLogoNoBack.png" alt="">
                <h2>Premium experience, infinite possibilities</h2>
                <form action="">
                    <div class="form-input-container">
                        <div class="form-cont-div">
                            <ion-icon class="form-icon" name="home"></ion-icon>
                            <div class="label-input-div">
                                <label for="form-from-dep" class="form-label">FROM</label>
                                <select id="form-from-div" class="form-input" name="formFromDep">
                                    <option disabled selected hidden>DEPARTAMENT</option>
                                    <option>Canelones</option>
                                    <option>Artigas</option>
                                    <option>Maldonado</option>
                                    <option>Montevideo</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-cont-div">
                            <ion-icon class="form-icon" name="home"></ion-icon>
                            <div class="label-input-div">
                                <label for="form-from-dep" class="form-label">FROM</label>
                                <select id="form-from-div" class="form-input" name="formFromDep">
                                    <option disabled selected hidden>Km</option>
                                    <option>Canelones</option>
                                    <option>Artigas</option>
                                    <option>Maldonado</option>
                                    <option>Montevideo</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-cont-div">
                            <ion-icon class="form-icon" name="home"></ion-icon>
                            <div class="label-input-div">
                                <label for="form-from-dep" class="form-label">TO</label>
                                <select id="form-from-div" class="form-input" name="formFromDep">
                                    <option disabled selected hidden>DEPARTAMENT</option>
                                    <option>Canelones</option>
                                    <option>Artigas</option>
                                    <option>Maldonado</option>
                                    <option>Montevideo</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-cont-div">
                            <ion-icon class="form-icon" name="home"></ion-icon>
                            <div class="label-input-div">
                                <label for="form-from-dep" class="form-label">TO</label>
                                <select id="form-from-div" class="form-input" name="formFromDep">
                                    <option disabled selected hidden>Km</option>
                                    <option>Canelones</option>
                                    <option>Artigas</option>
                                    <option>Maldonado</option>
                                    <option>Montevideo</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-cont-div">
                            <ion-icon class="form-icon" name="calendar"></ion-icon>
                            <div class="label-input-div">
                                <label for="form-from-dep" class="form-label">DEPARTURE</label>
                                <input id="form-from-div" class="form-input" name="formFromDep" type="date">
                            </div>
                        </div>
    
                        <div class="form-cont-div">
                            <ion-icon class="form-icon" name="calendar"></ion-icon>
                            <div class="label-input-div">
                                <label for="form-from-dep" class="form-label">RETURN</label>
                                <input id="form-from-div" class="form-input" name="formFromDep" type="date">
                            </div>
                        </div>
                        <div class="form-cont-div">
                            <ion-icon class="form-icon" name="people"></ion-icon>
                            <div class="label-input-div">
                                <label for="form-from-dep" class="form-label">TRAVELERS</label>
                                <select id="form-from-div" class="form-input" name="formFromDep">
                                    <option disabled selected>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-cont-div form-cont-div-button">
                            <div class="label-input-div label-input-div-button">
                                <input id="form-from-div" class="form-input-button" name="formFromDep" type="button" value="One Trip">
                            </div>
                            <div class="label-input-div label-input-div-button">
                                <input id="form-from-div" class="form-input-button" name="formFromDep" type="button" value="Round Trip">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="submitBtn"><span>buy your ticket</span></button>
                </form>
            </div>
            <?php include "../Components/FooterComp/footer_comp.php" ?>
        </section>
    </section>
</body>
</html>