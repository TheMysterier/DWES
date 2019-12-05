<?php  
    function error1(){
        if (isset($_SESSION['error1'])){ ?>

            <div class="error">
                <?php foreach ($_SESSION['error1'] as $error) : ?>
                    <p><?php echo $error ?></p>
                <?php endforeach ?>
            </div>
            <?php  
                
            if (isset($_SESSION['error1'])) {
                $_SESSION['error1'] = null;
                unset($_SESSION['error1']);
            }

        }
    };

    function error2(){
        if (isset($_SESSION['error2'])){ ?>

            <div class="error">
                <?php foreach ($_SESSION['error2'] as $error) : ?>
                    <p><?php echo $error ?></p>
                <?php endforeach ?>
            </div>
            <?php  
                
            if (isset($_SESSION['error2'])) {
                $_SESSION['error2'] = null;
                unset($_SESSION['error2']);
            }

        }
    };

    function error3(){
        if (isset($_SESSION['error3'])){ ?>

            <div class="error">
                <?php foreach ($_SESSION['error3'] as $error) : ?>
                    <p><?php echo $error ?></p>
                <?php endforeach ?>
            </div>
            <?php  
                
            if (isset($_SESSION['error3'])) {
                $_SESSION['error3'] = null;
                unset($_SESSION['error3']);
            }

        }
    };
?>