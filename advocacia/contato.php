<!DOCTYPE html>
<html lang="en">

<title>Camargo Advocacia</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/footer.css">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">




<style>
html,
body,
h1,
h2,
h3,
h4,
h5,
h6 {
    font-family: "Roboto", sans-serif;
}



@media only screen and (max-width:200px) {

    .w3-sidebar.w3-collapse {
        display: none !important;
    }

    /* .w3-top,
    .w3-bottom {
        position: relative;
        width: 100%;
        z-index: 1;
    } */

}

@media only screen and (min-width:993px) {

    .w3-sidebar.w3-collapse {
        display: none !important;
    }

}

.w3-top,
.w3-bottom {
    position: relative;
    width: 100%;
    z-index: 1;
}

.w3-sidebar {
    z-index: 3;
    width: 250px;
    top: 43px;
    bottom: 0;
    height: inherit;

}
</style>

<body>

    <?php include_once('layouts/navbar.php'); ?>



    <?php //include_once('layouts/sidebar.php'); ?>


    <!-- Contact Container -->
    <div class="w3-container w3-padding-32 w3-theme-l5" id="contact">
    <div class="col-md-12 d-flex justify-content-center">
        <div class="col-md-6" >
            <div class="w3-col m6">
                <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Contato</span></div>
                <h3>Endereço</h3>                
                <h5>Avenida Paraná , 855 , Centro </h5>                
                <h6>Por favor, entre em contato sempre que precisar. Obrigado(a)!</h6>
                <h6>Swing by for a cup of coffee, or whatever.</h6>
                
                <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i>Janiopolis - PR</p>
                <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i> +00 1515151515</p>
                <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i> test@test.com</p>
            </div>
            <div class="w3-col m6">
                <form class="w3-container w3-card-4 w3-padding-16 w3-white" action="/action_page.php" target="_blank">
                    <div class="w3-section">
                        <label>Nome</label>
                        <input class="w3-input" type="text" name="Name" required>
                    </div>
                    <div class="w3-section">
                        <label>Email</label>
                        <input class="w3-input" type="text" name="Email" required>
                    </div>
                    <div class="w3-section">
                        <label>Menssagem</label>
                        <input class="w3-input" type="text" name="Message" required>
                    </div>
                    <input class="w3-check" type="checkbox" checked name="Like">
                    <label>Desejo Receber novos Feeds </label>
                    <button type="submit" class="w3-button w3-right w3-theme">Enviar</button>
                </form>
            </div>
        </div>
    </div>
    </div>


    <?php include_once('layouts/footer.php'); ?>


    <script>
    // Get the Sidebar
    var mySidebar = document.getElementById("mySidebar");

    // Get the DIV with overlay effect
    var overlayBg = document.getElementById("myOverlay");

    //Toggle between showing and hiding the sidebar, and add overlay effect

    function w3_open() {
        if (mySidebar.style.display === 'block') {
            mySidebar.style.display = 'none';
            overlayBg.style.display = "none";
        } else {
            mySidebar.style.display = 'block';
            overlayBg.style.display = "block";
        }
    }

    //Close the sidebar with the close button

    function w3_close() {
        mySidebar.style.display = "none";
        overlayBg.style.display = "none";
    }
    </script>

</body>

</html>