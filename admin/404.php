<!DOCTYPE html>
<html lang="en">
    <head>
       <!-- head start from here --> 
        <?php include "common/head.php"; ?>
       <!-- head end here-->  
    </head>
    <body>
        <div id="layoutError">
            <div id="layoutError_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="text-center mt-4">
                                    <img class="mb-4 img-error" src="assets/img/error-404-monochrome.svg" />
                                    <p class="lead">This requested URL was not found on this server.</p>
                                    <a href="index.html">
                                        <i class="fas fa-arrow-left me-1"></i>
                                        Return to Dashboard
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutError_footer">
                <!-- footer start from here -->
                 <?php include "common/footer.php" ?>
                <!-- footer end here -->
            </div>
        </div>
        <!-- script start from here -->
         <?php include "common/script.php"; ?>
        <!-- script end here -->
    </body>
</html>
