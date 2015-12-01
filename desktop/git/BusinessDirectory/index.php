<?php
require_once 'core/init.php';

$business_data = DB::getInstance()->query('SELECT * FROM business_data WHERE prem = 1 ORDER BY bus_name LIMIT 4');

if($business_data->count()){

    foreach($business_data->results() as $data){

        $data->id;
        $data->bus_name;
        $data->contact_no;
        $data->business_no;
        $data->description;
        $data->website;
    }
}else
    echo "No Results returned";
?>

<?php include 'includes/head.php'; ?>
<body>
    <?php include "includes/index_nav.php"; ?>
    <header>
        <div id="inner_header">
            <h3>Welcome to the Business Directory</h3>
        </div>
    </header>

    <div id="main_con">
        <section id="top_section">
            <div id="header">
                <h3>Premium Business listings</h3>
                <p>Launched in 2004 with the creation of the original
                directory; iDorset - TheiGroup has now expanded to cover almost
                the entire country with the same core objective, 'to connect
                local customers to local businesses'. We do this by providing
                businesses and users with a free dedicated county business
                directory, keeping our information clean and user friendly.</p>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img alt="Business Image" data-holder-rendered="true"
                        data-src="holder.js/100%x200" src=
                        "images/prem_image.jpg" style=
                        "height: 200px; width: 100%; display: block;">

    <script>
        $(document).ready(function(){

            $('.caption p').hide();

            $('.caption a').attr('href','http://www.yahoo.co.uk');

        });
    </script>
        
                        <div class="caption">
                            <?php
                            echo "<p> ". $data->id . "</p>";
                            echo "<h3>" . $data->bus_name . "</h3><br/>";
                            echo "Mobile No:";
                            echo "<em>" . $data->contact_no . "</em><br/>";
                            echo "Business No:";
                            echo "<em>" . $data->business_no . "</em><br/>";
                            echo "<tag>".$data->description. "</tag><br />";
                            echo "<a>" .$data->website. "</a>" ;

                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img alt="Business Image" data-holder-rendered="true"
                        data-src="holder.js/100%x200" src=
                        "images/prem_image2.jpg" style=
                        "height: 200px; width: 100%; display: block;">

                        <div class="caption">
                            <?php
                            echo "<p> ". $data->id . "</p>";
                            echo "<h3>" . $data->bus_name . "</h3><br/>";
                            echo "Mobile No:";
                            echo "<em>" . $data->contact_no . "</em><br/>";
                            echo "Business No:";
                            echo "<em>" . $data->business_no . "</em><br/>";
                            echo "<tag>".$data->description. "</tag><br />";
                            echo "<a>" .$data->website. "</a>" ;

                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img alt="Business Image" data-holder-rendered="true"
                        data-src="holder.js/100%x200" src=
                        "images/prem_image3.jpg" style=
                        "height: 200px; width: 100%; display: block;">

                        <div class="caption">
                            <?php
                            echo "<p> ". $data->id . "</p>";
                            echo "<h3>" . $data->bus_name . "</h3><br/>";
                            echo "Mobile No:";
                            echo "<em>" . $data->contact_no . "</em><br/>";
                            echo "Business No:";
                            echo "<em>" . $data->business_no . "</em><br/>";
                            echo "<tag>".$data->description. "</tag><br />";
                            echo "<a>" .$data->website. "</a>" ;

                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img alt="Business Images" data-holder-rendered="true"
                        data-src="holder.js/100%x200" src=
                        "images/prem_image4.jpg" style=
                        "height: 200px; width: 100%; display: block;">

                        <div class="caption">
                            <?php
                            echo "<p> ". $data->id . "</p>";
                            echo "<h3>" . $data->bus_name . "</h3><br/>";
                            echo "Mobile No:";
                            echo "<em>" . $data->contact_no . "</em><br/>";
                            echo "Business No:";
                            echo "<em>" . $data->business_no . "</em><br/>";
                            echo "<tag>".$data->description. "</tag><br />";
                            echo "<a>" .$data->website. "</a>" ;

                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <nav id="page">
            <ul class="pagination">
                <li>
                    <a href="#"><span>&laquo;</span></a>
                </li>

                <li>
                    <a href="#">1</a>
                </li>

                <li>
                    <a href="#">2</a>
                </li>

                <li>
                    <a href="#">3</a>
                </li>

                <li>
                    <a href="#">4</a>
                </li>

                <li>
                    <a href="#">5</a>
                </li>

                <li>
                    <a href="#"><span>&raquo;</span></a>
                </li>
            </ul>
        </nav>

        <article class="col-md-12">
            <div class="bus_title col-md-2">
            <p>Business Name</p><img src="images/holding.jpg"></div>

            <div class="infor_text col-md-10">
                <p>Nulla facilisi. Proin ut lorem ac nibh porttitor sagittis
                vel vel tellus. In hac habitasse platea dictumst. Suspendisse
                convallis pharetra mauris malesuada ultricies. Curabitur vel
                velit placerat, efficitur velit quis, congue risus.
                Pellentesque habitant morbi tristique senectus et netus et
                malesuada fames ac turpis egestas. Morbi auctor, ipsum quis
                fermentum lobortis, dolor nulla elementum mauris, eu hendrerit
                nulla sapien quis odio. Nunc tincidunt arcu in tellus aliquet
                vehicula. Curabitur ac tellus nec augue porta aliquet. Sed
                vitae turpis nec ante cursus tempor. Vivamus fringilla, nibh
                vitae cursus condimentum, magna quam lobortis lacus, iaculis
                tempor leo eros vel nulla. Nulla ornare ipsum a leo ornare
                blandit ut at urna. Lorem ipsum dolor sit amet, consectetur
                adipiscing elit. Nunc consequat ultrices lorem, at varius nunc
                scelerisque quis. Mauris finibus hendrerit feugiat.</p>

                <div class="col-md-4">
                    One
                </div>

                <div class="col-md-3">
                    Two
                </div>

                <div class="col-md-3">
                    Three
                </div>
            </div>
        </article>

        <article class="col-md-12">
            <div class="bus_title col-md-2">
            <p>Business Name</p><img src="images/holding.jpg"></div>

            <div class="infor_text col-md-10">
                <p>Nulla facilisi. Proin ut lorem ac nibh porttitor sagittis
                vel vel tellus. In hac habitasse platea dictumst. Suspendisse
                convallis pharetra mauris malesuada ultricies. Curabitur vel
                velit placerat, efficitur velit quis, congue risus.
                Pellentesque habitant morbi tristique senectus et netus et
                malesuada fames ac turpis egestas. Morbi auctor, ipsum quis
                fermentum lobortis, dolor nulla elementum mauris, eu hendrerit
                nulla sapien quis odio. Nunc tincidunt arcu in tellus aliquet
                vehicula. Curabitur ac tellus nec augue porta aliquet. Sed
                vitae turpis nec ante cursus tempor. Vivamus fringilla, nibh
                vitae cursus condimentum, magna quam lobortis lacus, iaculis
                tempor leo eros vel nulla. Nulla ornare ipsum a leo ornare
                blandit ut at urna. Lorem ipsum dolor sit amet, consectetur
                adipiscing elit. Nunc consequat ultrices lorem, at varius nunc
                scelerisque quis. Mauris finibus hendrerit feugiat.</p>

                <div class="col-md-4">
                    One
                </div>

                <div class="col-md-3">
                    Two
                </div>

                <div class="col-md-3">
                    Three
                </div>
            </div>
        </article>

        <article class="col-md-12">
            <div class="bus_title col-md-2">
            <p>Business Name</p><img src="images/holding.jpg"></div>

            <div class="infor_text col-md-10">
                <p>Nulla facilisi. Proin ut lorem ac nibh porttitor sagittis
                vel vel tellus. In hac habitasse platea dictumst. Suspendisse
                convallis pharetra mauris malesuada ultricies. Curabitur vel
                velit placerat, efficitur velit quis, congue risus.
                Pellentesque habitant morbi tristique senectus et netus et
                malesuada fames ac turpis egestas. Morbi auctor, ipsum quis
                fermentum lobortis, dolor nulla elementum mauris, eu hendrerit
                nulla sapien quis odio. Nunc tincidunt arcu in tellus aliquet
                vehicula. Curabitur ac tellus nec augue porta aliquet. Sed
                vitae turpis nec ante cursus tempor. Vivamus fringilla, nibh
                vitae cursus condimentum, magna quam lobortis lacus, iaculis
                tempor leo eros vel nulla. Nulla ornare ipsum a leo ornare
                blandit ut at urna. Lorem ipsum dolor sit amet, consectetur
                adipiscing elit. Nunc consequat ultrices lorem, at varius nunc
                scelerisque quis. Mauris finibus hendrerit feugiat.</p>

                <div class="col-md-4">
                    One
                </div>

                <div class="col-md-3">
                    Two
                </div>

                <div class="col-md-3">
                    Three
                </div>
            </div>
        </article>

        <article class="col-md-12">
            <div class="bus_title col-md-2">
            <p>Business Name</p><img src="images/holding.jpg"></div>

            <div class="infor_text col-md-10">
                <p>Nulla facilisi. Proin ut lorem ac nibh porttitor sagittis
                vel vel tellus. In hac habitasse platea dictumst. Suspendisse
                convallis pharetra mauris malesuada ultricies. Curabitur vel
                velit placerat, efficitur velit quis, congue risus.
                Pellentesque habitant morbi tristique senectus et netus et
                malesuada fames ac turpis egestas. Morbi auctor, ipsum quis
                fermentum lobortis, dolor nulla elementum mauris, eu hendrerit
                nulla sapien quis odio. Nunc tincidunt arcu in tellus aliquet
                vehicula. Curabitur ac tellus nec augue porta aliquet. Sed
                vitae turpis nec ante cursus tempor. Vivamus fringilla, nibh
                vitae cursus condimentum, magna quam lobortis lacus, iaculis
                tempor leo eros vel nulla. Nulla ornare ipsum a leo ornare
                blandit ut at urna. Lorem ipsum dolor sit amet, consectetur
                adipiscing elit. Nunc consequat ultrices lorem, at varius nunc
                scelerisque quis. Mauris finibus hendrerit feugiat.</p>

                <div class="col-md-4">
                    One
                </div>

                <div class="col-md-3">
                    Two
                </div>

                <div class="col-md-3">
                    Three
                </div>
            </div>
        </article>

        <article class="col-md-12">
            <div class="bus_title col-md-2">
            <p>Business Name</p><img src="images/holding.jpg"></div>

            <div class="infor_text col-md-10">
                <p>Nulla facilisi. Proin ut lorem ac nibh porttitor sagittis
                vel vel tellus. In hac habitasse platea dictumst. Suspendisse
                convallis pharetra mauris malesuada ultricies. Curabitur vel
                velit placerat, efficitur velit quis, congue risus.
                Pellentesque habitant morbi tristique senectus et netus et
                malesuada fames ac turpis egestas. Morbi auctor, ipsum quis
                fermentum lobortis, dolor nulla elementum mauris, eu hendrerit
                nulla sapien quis odio. Nunc tincidunt arcu in tellus aliquet
                vehicula. Curabitur ac tellus nec augue porta aliquet. Sed
                vitae turpis nec ante cursus tempor. Vivamus fringilla, nibh
                vitae cursus condimentum, magna quam lobortis lacus, iaculis
                tempor leo eros vel nulla. Nulla ornare ipsum a leo ornare
                blandit ut at urna. Lorem ipsum dolor sit amet, consectetur
                adipiscing elit. Nunc consequat ultrices lorem, at varius nunc
                scelerisque quis. Mauris finibus hendrerit feugiat.</p>

                <div class="col-md-4">
                    One
                </div>

                <div class="col-md-3">
                    Two
                </div>

                <div class="col-md-3">
                    Three
                </div>
            </div>
        </article>

        <nav id="page">
            <ul class="pagination">
                <li>
                    <a href="#"><span>&laquo;</span></a>
                </li>

                <li>
                    <a href="#">1</a>
                </li>

                <li>
                    <a href="#">2</a>
                </li>

                <li>
                    <a href="#">3</a>
                </li>

                <li>
                    <a href="#">4</a>
                </li>

                <li>
                    <a href="#">5</a>
                </li>

                <li>
                    <a href="#"><span>&raquo;</span></a>
                </li>
            </ul>
        </nav>
    </div><!--  main con -->
<?php  include "includes/footer.php";?>
    
