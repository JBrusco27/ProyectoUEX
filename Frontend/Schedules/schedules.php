<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="schedules.css">
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
        <div class="container">
        <h3 class="page-title">Schedules</h3>
            <div class="container-content">
                <form action="">
                    <div class="schedules-form-div"> 
                        <div class="form-div">
                            <div class="label-input-div">
                                <label for="form-from-dep" class="form-label">FROM</label>
                                <select id="form-from-div" class="form-input" name="formFromDep">
                                    <option disabled selected hidden>SELECT ORIGIN</option>
                                    <option>Canelones</option>
                                    <option>Artigas</option>
                                    <option>Maldonado</option>
                                    <option>Montevideo</option>
                                </select>
                            </div>
                            <div class="label-input-div">
                                <label for="form-from-dep" class="form-label">TO</label>
                                <select id="form-from-div" class="form-input" name="formFromDep">
                                    <option disabled selected hidden>SELECT DESTINATION</option>
                                    <option>Canelones</option>
                                    <option>Artigas</option>
                                    <option>Maldonado</option>
                                    <option>Montevideo</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="submitBtn"><ion-icon class="form-button-icon action-icon" name="caret-forward"></ion-icon></button>
                    </div>
                        <div class="schedules-container">
                            <div class="departament-container">
                                <div class="departament">
                                    <h3 class="departament-title departament-orange  dep-left">CA</h3>
                                    <p class="departament-title departament-complete-text dep-left">Canelones</p>
                                    <p class="dep-left">Origin</p>
                                </div>
                                <div class="departament">
                                    <h3 class="departament-title departament-orange dep-right">CA</h3>
                                    <p class="departament-title departament-complete-text dep-right">Canelones</p>
                                    <p class="dep-right">Destination</p>
                                </div>
                            </div>
                            <div class="schedules-content">
                                <div class="">
                                    <div class="schedule">
                                        <p>1:00</p>
                                        <p>2:00</p>
                                    </div>
                                    <div class="schedule">
                                        <p>1:00</p>
                                        <p>2:00</p>
                                    </div>
                                    <div class="schedule">
                                        <p>1:00</p>
                                        <p>2:00</p>
                                    </div>
                                    <div class="schedule">
                                        <p>1:00</p>
                                        <p>2:00</p>
                                    </div>
                                    <div class="schedule">
                                        <p>1:00</p>
                                        <p>2:00</p>
                                    </div>
                                    <div class="schedule">
                                        <p>1:00</p>
                                        <p>2:00</p>
                                    </div>
                                    <div class="schedule">
                                        <p>1:00</p>
                                        <p>2:00</p>
                                    </div>
                                </div>                             
                            </div>
                        </div>
                </form>
            </div>
            <?php include "../Components/FooterComp/footer_comp.php" ?>
        </div>
    </section>
</body>
</html>