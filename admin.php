<?php
require_once 'core/init.php';


?>
<?php  include "includes/head.php";?>
<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <ul class="nav navbar-nav col-md-12">
                <li>
                    <a href="index.php">Home</a>
                </li>

                <li>
                    <a class="btn" href="logout.php" id="">Log Out</a>
                </li>
            </ul>
        </div>
    </nav>
   
        <div id="inner_header">
            <h3>Welcome to the Business Directory</h3>
        </div>
    
    <div id="main_con">
        <h1>Main Admin Area<h1>

        <div class="user">
            <h3>Premium Users<span class="label label-default"> Pending</span></h3>
            <table class="table table-hover">
                    <thead>

        <tr>

            <th>id</th>

            <th>First Name</th>

            <th>Last Name</th>

            <th>Email</th>

        </tr>

    </thead>

    <tbody>

        <tr>

            <td>1</td>

            <td>John</td>

            <td>Carter</td>

            <td>johncarter@mail.com</td>

        </tr>

        <tr>

            <td>2</td>

            <td>Peter</td>

            <td>Parker</td>

            <td>peterparker@mail.com</td>

        </tr>

        <tr>

            <td>3</td>

            <td>John</td>

            <td>Rambo</td>

            <td>johnrambo@mail.com</td>

        </tr>

    </tbody>
            </table>
        </div>
        <div class="user">
            <h3>Standard Users<span class="label label-default"> Pending</span></h3>

            <table class="table table-hover">
                    <thead>

        <tr>

            <th>Id</th>

            <th>First Name</th>

            <th>Last Name</th>

            <th>Email</th>

        </tr>

    </thead>

    <tbody>

        <tr>

            <td>1</td>

            <td>John</td>

            <td>Carter</td>

            <td>johncarter@mail.com</td>

        </tr>

        <tr>

            <td>2</td>

            <td>Peter</td>

            <td>Parker</td>

            <td>peterparker@mail.com</td>

        </tr>

        <tr>

            <td>3</td>

            <td>John</td>

            <td>Rambo</td>

            <td>johnrambo@mail.com</td>

        </tr>

    </tbody>
            </table>

        </div>



        
        
    </div><!-- end main -->

    <?php  include "includes/footer.php";?>