
<!Doctype html>
<html>
    <head>
        
        <meta name="keywords" content="Technology, Computer, Programming">
        
        <meta charset="utf-8">
        
        <title>Home</title>
        
        <link href="stylesheet.css" rel="stylesheet" type="text/css">
        
        <style type="text/css"></style>
        
        <meta name="description" content="Study career opportunities in computer-related fields, learn more about company hiring practices and job prerequisites, and to develop skills that will help in the job-search and interview processes.">
       
        <link href="https://fonts.googleapis.com/css?family=Share+Tech+Mono" rel="stylesheet"> 
        
        
        
    </head>
        <script  src="https://www.google.com/jsapi" type="text/javascript" ></script>
        <script> src = "http://www.google.com/uds/solutions/dynamicfeed/gfdynamicfeedcontrol.js"type = "text/javascript" ></script>
        <style type="text/css"></style>

    <body class="oranges">
        <header>
            <!--<div class="headertext"><img src="images/img4.png" width="175px" height="160px"> </div>-->
            
           


        </header>



        <div class="w3-content w3-section"  >
                
            <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="community">AboutUs</a></li>
            <li><a href="resource">Projects</a></li>
            <li><a href="aboutus.html">Dasboard</a></li>
            <li><a href="contact us">ContactUs</a></li>
           </ul> 
            <img class="mySlides" src="images/img1.jpg" width="100%" height="600px">
            <p class="headertext"> INNOVATING THE FUTURE</p>
            <img class="mySlides" src="images/img1.jpg" width="100%" height="600px">
            <img class="mySlides" src="images/img1.jpg" width="100%" height="600px">

        </div>

        <script>
                    var myIndex = 0;
            carousel();

            function carousel() {
                var i;
                var x = document.getElementsByClassName("mySlides");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                myIndex++;
                if (myIndex > x.length) {
                    myIndex = 1
                }
                x[myIndex - 1].style.display = "block";
                setTimeout(carousel, 5000); // Change image every 2 seconds
            }
        </script>


        <div class="container">
            <div class="content">


                <h3><u>News Feeds></h3> 
               
                <?php 
                
                // These are my arrays 
                $images = array();//this is used to store images
                $titles = array();// this is used to store titles 
                $links = array();// this is used to store titles 
                require_once('webhose.php');
                
                // this is the api key  
                Webhose::config("81e306b2-8490-4a78-84d7-390aa94ba8f9");

                function print_filterwebdata_titles($api_response) {
                    if ($api_response == null) {

                        echo "<p>Response is null, no action taken.</p>";
                        return;
                    }
                    if (isset($api_response->posts)) {
                        $c = 0;

                        foreach ($api_response->posts as $post) {
                            
                            global $links;
                            global $titles;
                            
                            
                            $links[$c] = $post->thread->site;
                            $titles[$c] = $post->title;

                            if ($post->thread->main_image == null) {
                                global $images;
                                $images[$c] = 'images/default.jpg';
                                //echo "<p>".$post->title."</p>";
                            } else {

                                if ($post->thread->main_image == 'http://www.techskimm.com/wp-content/plugins/wp-rss-multi-importer/images/facebook.png') {

                                    $images[$c] = 'images/default.jpg';
                                } else {
                                    GLOBAL $images;
                                    $images[$c] = $post->thread->main_image;
                                }
                            }
                            //echo "<img src='".$post->thread->main_image."'>";
                            $c++;
                            //if (!empty($playerlist)) {
                            // list is empty.
//}
                            // echo "<p>" . $array[$i] . "</p>";
                            // echo "<p>" . $post->thread->title . "</p>";
                            ////echo "<div><a href='" . $post->thread->url . "'> Visit our HTML tutorial lll</a></div>";
                            //echo "<img src=' " . $post->thread->main_image . " ' width ='100'height='100' />";


                            if ($c == 6) {
                                break 1;
                            }
                        }
                    }
                }

                $params = array(
                    "q" => "language:english site:wired.com",
                    "sort" => "relevancy"
                );
                
                $result = Webhose::query("filterWebContent", $params);
                
                print_filterwebdata_titles($result);
                
                
                ?>
                <?php print "<a href='https://www.".$links[1] . "'> <div class='latest_news'> <img src='" . $images[1] . "'  width='189' height='105' class='imageleft'/><h3>" . $titles[1] . "</h3><h5>$links[1]</h5></div></a>"; ?>
                <?php echo "<a href='https://www." . $links[2] . "'> <div class='latest_news'> <img src='" . $images[2] . "'  width='189' height='105' class='imageleft'/><h3>" . $titles[2] . "</h3><h5>$links[2]</h5></div></a>"; ?>
                <?php echo "<a href='https://www." . $links[3] . "'> <div class='latest_news'> <img src='" . $images[3] . "'  width='189' height='105' class='imageleft'/><h3>" . $titles[3] . "</h3><h5>$links[3]</h5></div></a>"; ?>
                <?php echo "<a href='https://www." . $links[4] . "'> <div class='latest_news'> <img src='" . $images[4] . "'  width='189' height='105' class='imageleft'/><h3>" . $titles[4] . "</h3><h5>$links[4]</h5></div></a>"; ?>







            </div>
        </div>
    </div>

</div>

<footer>
    <div class="designfooter"> <table width="100%" >
            <tbody>
                <tr>
                    <td><img src="images/facebook.png" alt="" width="50" height="50"/></td>
                    <td><img src="images/instagram.png" alt=" " width="50" height="50"/></td>
                    <td><img src="images/Twitter-Download-PNG.png" alt="" width="50" height="50"/></td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="copyright"> @ 2018 CopyRight: TechnologyClub.com</div>
</footer>




</body>
</html>


