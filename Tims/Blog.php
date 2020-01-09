<!doctype html>
<html class="no-js" lang="en">

<?php include('head.php')?>

<body class="template-color-1">

    <div class="main-wrapper">

        <!-- Begin Loading Area -->
        <div class="loading">
            <div class="text-center middle">
                <div class="lds-ellipsis">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
        <!-- Loading Area End Here -->

        <!-- Begin Tim's jewelry Header Main Area -->
        <?php include('header.php')?>
        <!-- Tim's jewelry Header                        Main Area End Here -->
        <!-- Begin Contact Main Page Area -->
        <div>
            <div>
                <iframe class="iframe-container" style="width: 100%" src="https://timsjewelry.wordpress.com" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
        <!-- Contact Main Page Area End Here -->
        <?php include('footer.php')?>

        <script type="text/javascript" language="javascript"> 
        $('.iframe-container').css('height', $(window).height()+'px');
        </script>

</body>

</html>