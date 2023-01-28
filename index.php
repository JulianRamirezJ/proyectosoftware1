<!DOCTYPE html>
<html lang="en">
    <header>        
        <meta charset="utf-8">
        <title>User Registration</title>
        <!--Conection with css styles-->
        <link type="text/css" href="css/style.css" rel="stylesheet" media="all" >

    </header>
    <body>
        <div>
            <div class="title-1"><h2 class="title">Proyect 1</h2></div>
            <div class="title-2"><h4 class="title">Software Enginering Topics</h4></div>
            <div class="form">
                <h3 class="title-form">Enter your data</h3>
                <form action="controller.php?action=save" method="POST">
                    <div class="form-g">
                        <label for="name">Name</label>
                        <input type="text" name="name" required class="field" autocomplete="OFF"/>
                    </div>
                    <div class="form-g">
                        <label for="email">E-mail</label>
                        <input type="text" name="email" required class="field" autocomplete="OFF"/>
                    </div>
                    <div class="form-g">
                        <label for="name">Tel</label>
                        <input type="text" name="tel" required class="field" autocomplete="OFF"/>
                    </div> 
                    <button type="submit" class="submit-button"><h3>Save</h3></button>
                </form>
            </div>
        </div>
    </body>
</html>