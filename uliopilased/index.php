<!DOCTYPE html>
<html lang="en">
<?php
    include_once './../templates/header.php';
?>

<body id="page-top" class="practice">

    <?php include_once './../templates/top-navbar.php';?>

    <div id="main"></div>

    <div id="page-content">
        <?php

            $t_pieces = t(array("fp-mh_h1","uliop_desc","forms_consent"),$dbhost,$dbname,$dbuser,$dbpassword);

            //for smaller buttons, unworthy of the database
            if($_SESSION["lang"] == "ee"){
                $arc_active = "Praegu aktiivsed";
                $add_profile = "Lisa profiil";
                $send_email_text = "Saada kiri";
                $view_text = "Vaata";
            }
            else{
                $arc_active = "Currently active";
                $add_profile = "Upload profile";
                $send_email_text = "Send email";
                $view_text = "View";
            }

            //fields
            $wf_fields = array();
            if($_SESSION["lang"] == "ee"){
                $wf_fields["ajaloo ja arheoloogia instituut"] = "ajaloo ja arheoloogia instituut";
                $wf_fields["arvutiteaduse instituut"] = "arvutiteaduse instituut";
                $wf_fields["bio- ja siirdemeditsiini instituut"] = "bio- ja siirdemeditsiini instituut";
                $wf_fields["eesti ja üldkeeleteaduse instituut"] = "eesti ja üldkeeleteaduse instituut";
                $wf_fields["Eesti mereinstituut"] = "Eesti mereinstituut";
                $wf_fields["farmaatsia instituut"] = "farmaatsia instituut";
                $wf_fields["filosoofia ja semiootika instituut"] = "filosoofia ja semiootika instituut";
                $wf_fields["füüsika instituut"] = "füüsika instituut";
                $wf_fields["hambaarstiteaduse instituut"] = "hambaarstiteaduse instituut";
                $wf_fields["haridusteaduste instituut"] = "haridusteaduste instituut";
                $wf_fields["Johan Skytte poliitikauuringute instituut"] = "Johan Skytte poliitikauuringute instituut";
                $wf_fields["keemia instituut"] = "keemia instituut";
                $wf_fields["kliinilise meditsiini instituut"] = "kliinilise meditsiini instituut";
                $wf_fields["kultuuriteaduste instituut"] = "kultuuriteaduste instituut";
                $wf_fields["maailma keelte ja kultuuride kolledž"] = "maailma keelte ja kultuuride kolledž";
                $wf_fields["majandusteaduskond"] = "majandusteaduskond";
                $wf_fields["matemaatika ja statistika instituut"] = "matemaatika ja statistika instituut";
                $wf_fields["molekulaar- ja rakubioloogia instituut"] = "molekulaar- ja rakubioloogia instituut";
                $wf_fields["Narva kolledž"] = "Narva kolledž";
                $wf_fields["õigusteaduskond"] = "õigusteaduskond";
                $wf_fields["ökoloogia ja maateaduste instituut"] = "ökoloogia ja maateaduste instituut";
                $wf_fields["Pärnu kolledž"] = "Pärnu kolledž";
                $wf_fields["peremeditsiini ja rahvatervishoiu instituut"] = "peremeditsiini ja rahvatervishoiu instituut";
                $wf_fields["psühholoogia instituut"] = "psühholoogia instituut";
                $wf_fields["sporditeaduste ja füsioteraapia instituut"] = "sporditeaduste ja füsioteraapia instituut";
                $wf_fields["Tartu observatoorium"] = "Tartu observatoorium";
                $wf_fields["tehnoloogiainstituut"] = "tehnoloogiainstituut";
                $wf_fields["ühiskonnateaduste instituut"] = "ühiskonnateaduste instituut";
                $wf_fields["usuteaduskond"] = "usuteaduskond";
                $wf_fields["Viljandi kultuuriakadeemia"] = "Viljandi kultuuriakadeemia";
                $wf_fields["muu"] = "muu";
                //workfield
                $wf_fields["Määramata"] = "Määramata";
                $wf_fields["Arvestusala"] = "Arvestusala";
                $wf_fields["Ehitus"] = "Ehitus";
                $wf_fields["Energeetika ja kaevandamine"] = "Energeetika ja kaevandamine";
                $wf_fields["Haridus ja teadus"] = "Haridus ja teadus";
                $wf_fields["Info- ja kommunikatsioonitehnoloogia"] = "Info- ja kommunikatsioonitehnoloogia";
                $wf_fields["Kaubandus, rentimine ja parandus"] = "Kaubandus, rentimine ja parandus";
                $wf_fields["Keemia-, kummi-, plasti- ja ehitusmaterjalitööstus"] = "Keemia-, kummi-, plasti- ja ehitusmaterjalitööstus";
                $wf_fields["Kultuur ja loometegevus"] = "Kultuur ja loometegevus";
                $wf_fields["Majutus, toitlustus ja turism"] = "Majutus, toitlustus ja turism";
                $wf_fields["Metalli- ja masinatööstus"] = "Metalli- ja masinatööstus";
                $wf_fields["Metsandus ja puidutööstus"] = "Metsandus ja puidutööstus";
                $wf_fields["Õigus"] = "Õigus";
                $wf_fields["Personali- ja administratiivtöö ning ärinõustamine"] = "Personali- ja administratiivtöö ning ärinõustamine";
                $wf_fields["Põllumajandus ja toiduainetööstus"] = "Põllumajandus ja toiduainetööstus";
                $wf_fields["Rõiva-, tekstiili- ja nahatööstus"] = "Rõiva-, tekstiili- ja nahatööstus";
                $wf_fields["Sotsiaaltöö"] = "Sotsiaaltöö";
                $wf_fields["Tervishoid"] = "Tervishoid";
                $wf_fields["Transport, logistika ning mootorsõidukid"] = "Transport, logistika ning mootorsõidukid";
                $wf_fields["Vee- ja jäätmemajandus ning keskkond"] = "Vee- ja jäätmemajandus ning keskkond";
            }
            else{
                $wf_fields["ajaloo ja arheoloogia instituut"] = "Institute of History and Archaeology";
                $wf_fields["arvutiteaduse instituut"] = "Institute of Computer Science";
                $wf_fields["bio- ja siirdemeditsiini instituut"] = "Institute of Biomedicine and Translational Medicine";
                $wf_fields["eesti ja üldkeeleteaduse instituut"] = "Institute of Estonian and General Linguistics";
                $wf_fields["Eesti mereinstituut"] = "Estonian Marine Institute";
                $wf_fields["farmaatsia instituut"] = "Institute of Pharmacy";
                $wf_fields["filosoofia ja semiootika instituut"] = "Institute of Philosophy and Semiotics";
                $wf_fields["füüsika instituut"] = "Institute of Physics";
                $wf_fields["hambaarstiteaduse instituut"] = "Institute of Dentistry";
                $wf_fields["haridusteaduste instituut"] = "Institute of Education";
                $wf_fields["Johan Skytte poliitikauuringute instituut"] = "Johan Skytte Institute of Political Studies";
                $wf_fields["keemia instituut"] = "Institute of Chemistry";
                $wf_fields["kliinilise meditsiini instituut"] = "Institute of Clinical Medicine";
                $wf_fields["kultuuriteaduste instituut"] = "Institute of Cultural Research";
                $wf_fields["maailma keelte ja kultuuride kolledž"] = "College of Foreign Languages and Cultures";
                $wf_fields["majandusteaduskond"] = "School of Economics and Business Administration";
                $wf_fields["matemaatika ja statistika instituut"] = "Institute of Mathematics and Statistics";
                $wf_fields["molekulaar- ja rakubioloogia instituut"] = "Institute of Molecular and Cell Biology";
                $wf_fields["Narva kolledž"] = "Narva College";
                $wf_fields["õigusteaduskond"] = "School of Law";
                $wf_fields["ökoloogia ja maateaduste instituut"] = "Institute of Ecology and Earth Sciences";
                $wf_fields["Pärnu kolledž"] = "Pärnu College";
                $wf_fields["peremeditsiini ja rahvatervishoiu instituut"] = "Institute of Family Medicine and Public Health";
                $wf_fields["psühholoogia instituut"] = "Institute of Psychology";
                $wf_fields["sporditeaduste ja füsioteraapia instituut"] = "Institute of Sport Sciences and Physiotherapy";
                $wf_fields["Tartu observatoorium"] = "Tartu Observatory";
                $wf_fields["tehnoloogiainstituut"] = "Institute of Technology";
                $wf_fields["ühiskonnateaduste instituut"] = "Institute of Social Studies";
                $wf_fields["usuteaduskond"] = "School of Theology and Religious Studies";
                $wf_fields["Viljandi kultuuriakadeemia"] = "Viljandi Culture Academy";
                $wf_fields["muu"] = "other";
                //workfield
                $wf_fields["Määramata"] = "Unselected";
                $wf_fields["Arvestusala"] = "Accounting";
                $wf_fields["Ehitus"] = "Construction";
                $wf_fields["Energeetika ja kaevandamine"] = "Energy and mining";
                $wf_fields["Haridus ja teadus"] = "Education and research";
                $wf_fields["Info- ja kommunikatsioonitehnoloogia"] = "ICT";
                $wf_fields["Kaubandus, rentimine ja parandus"] = "Trade, rentals, repair";
                $wf_fields["Keemia-, kummi-, plasti- ja ehitusmaterjalitööstus"] = "Chemicals, rubber, plastic, construction materials";
                $wf_fields["Kultuur ja loometegevus"] = "Culture and creative industries";
                $wf_fields["Majutus, toitlustus ja turism"] = "Accommodation, catering, tourism";
                $wf_fields["Metalli- ja masinatööstus"] = "Metal products, machinery";
                $wf_fields["Metsandus ja puidutööstus"] = "Forestry, timber";
                $wf_fields["Õigus"] = "Security, law";
                $wf_fields["Personali- ja administratiivtöö ning ärinõustamine"] = "HR, business consultancy";
                $wf_fields["Põllumajandus ja toiduainetööstus"] = "Agriculture, food industry";
                $wf_fields["Rõiva-, tekstiili- ja nahatööstus"] = "Apparel, textile";
                $wf_fields["Sotsiaaltöö"] = "Social work";
                $wf_fields["Tervishoid"] = "Health care";
                $wf_fields["Transport, logistika ning mootorsõidukid"] = "Transportation, logistics, motor vehicles";
                $wf_fields["Vee- ja jäätmemajandus ning keskkond"] = "Water, waste and environmental management";
            }

            //form
            if($_SESSION["lang"] == "ee"){
                $name_form_area = "Ees- ja perekonnanimi *";
                $name_form_area_warning = "Palun lisa oma nimi";
                $email_form_area_warning = "Vajame sinu meiliaadressi, et sulle kinnituslink saata";
                $work_form_area = "Eriala *";
                $work_form_area_warning = "Palun anna teada, mis eriala sa õpid";
                $institute_form_area = "Instituut";
                $institute_form_area_warning = "Ole hea ja anna teada, mis instituudist sa oled";
                $photo_form_area = "Lae üles oma profiilipilt";
                $photo_form_area_warning = "Lae profiilipilt!";
                $area_form_area = "Soovitav praktika/töö valdkond *";
                $area_form_area_warning = "Ära unusta märkida, mis valdkonnas soovid töötada";
                $strengths_form_area = "Tugevused/oskused *";
                $strengths_form_area_warning = "Palun kirjelda lühidalt oma oskusi";
                $experience_form_area = "Kogemused";
                $location_form_area = "Soovitud asukoht";
                $cv_form_area = "Lae üles oma CV";
                $consent_form_area = "Olen teadlik, et kõik vormi sisestatud isikuandmed avalikustatakse Futulabi kodulehel. Tutvu adnmekaitsetingimustega ";
                $consent_link_text = "siit";
                $close_text = "Sulge";
            }
            else{
                $name_form_area = "First and last name *";
                $name_form_area_warning = "Please insert your name";
                $email_form_area_warning = "Your e-mail is required for the e-mail confirmation link";
                $work_form_area = "Curriculum *";
                $work_form_area_warning = "Please tell us your curriculum";
                $institute_form_area = "Institute";
                $institute_form_area_warning = "Please tell us which institute you are from";
                $photo_form_area = "Upload your profile picture";
                $photo_form_area_warning = "Upload your profile picture!";
                $area_form_area = "Preferred internship field *";
                $area_form_area_warning = "Don't forget to specify your preferred internship field";
                $strengths_form_area = "Character strengths *";
                $strengths_form_area_warning = "Please shortly describe your strenghts";
                $experience_form_area = "Experience";
                $location_form_area = "Preferred location";
                $cv_form_area = "Upload your CV";
                $consent_form_area = "I am aware that the personal data uploaded by users onto the form will be published on Futulab. Read the data protection policy ";
                $consent_link_text = "here";
                $close_text = "Close";
            }
        ?>

        <section class="page-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="text-uppercase font-weight-bold mt-5 mb-3" data-aos="fade-right"><?php echo $t_pieces["fp-mh_h1"]; ?></h1>
                    </div>
                    <div class="col-lg-4" data-aos="fade-right">
                        <p class="font-weight-light">
                            <?php echo $t_pieces["uliop_desc"]; ?>
                        </p>
                    </div>
                    <div class="col-lg-2" data-aos="zoom-in-left">
                        <span id="formToggler" class="toggleMenu text-uppercase" onclick="openModal(); gtag('event', 'Ava',{'event_category': 'Üliõpilased','event_label':'Ava lisa profiil'});"><?php echo $add_profile; ?></span>
                    </div>
                    <div class="col-lg-12">
                        <h5 class="text-uppercase text-center font-weight-bold mt-5" data-aos="fade-down"><?php echo $arc_active; ?></h5>
                    </div>
                </div> <!-- .row -->
            </div> <!-- .container -->
        </section>
        <!-- Portfolio Section -->
        <section class="mb-5" id="about">
            <div class="container" data-aos="fade-down">
                <div class="row">
                    <div class="col-lg-12"></div>
                    <div class="col-lg-12">
                        <div class="row">
                            <div id="carouselPager" class="carousel slide col-md-12">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="container">
                                            <div class="row">
                                                <?php
                                                // Function to show maxchars if to much text
                                                function substringwords($text, $maxchar = 40, $end = "..."){
                                                if (strlen($text) > $maxchar || $text = '') {
                                                  $words = preg_split('/\s/', $text);
                                                  $output = '';
                                                  $i = 0;
                                                  while (1) {
                                                    $length = strlen($output) + strlen($words[$i]);
                                                    if ($length > $maxchar) {
                                                      break;
                                                    }
                                                    else {
                                                      $output .= " " . $words[$i];
                                                      ++$i;
                                                    }
                                                  }
                                                  $output .= " " . $end;
                                                }
                                                else {
                                                  $output = $text;
                                                }
                                                return $output;
                                                }
                                                try {
                                                    $conn = new PDO('mysql:host='.$dbhost.';dbname='.$dbname.';charset=utf8', $dbuser , $dbpassword);
                                                    // set the PDO error mode to exception
                                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                                    if(!empty($_POST)){
                                                        $cat = $_POST["cat"];
                                                        $location = $_POST["locations"];
                                                        $date = $_POST["date_order"];

                                                        $queryString = "";
                                                        if($cat == "date"){
                                                            $queryString.="ORDER BY datetime_uploaded ";
                                                            if($date == "new"){
                                                                $queryString.="DESC";
                                                            }else{
                                                                $queryString.="ASC";
                                                            }
                                                            $query = $conn->prepare('SELECT * FROM People WHERE isvalidated = ? '+$queryString);
                                                            $query->execute(array(1));
                                                        }else{
                                                            $query = $conn->prepare('SELECT * FROM People WHERE isvalidated = ? AND location = ?');
                                                            $query->execute(array(1, $location));
                                                        }

                                                    }else{
                                                        $query = $conn->prepare('SELECT * FROM People WHERE isvalidated = ?');
                                                        $query->execute(array(1));
                                                    }
                                                    $data = $query -> fetchAll();
                                                    $j = 0;
                                                    $max_per_page = 12;
                                                    $pages = 1;
                                                    $queue = false;
                                                    foreach($data as $row){

                                                        // Everything on new lines
                                                        $name = $row["name"];
                                                        $name_br = str_replace(" ", "<br>", $name);
                                                        $degree = $row["major"]."<br>".$row["institute"];

                                                        $pic = "../userdata/pictures/".$row["picturepath"];
                                                        if($row["picturepath"]==""){
                                                           $pic ="../userdata/blank_profile_pic.png";
                                                        }
                                                        $cv = "/userdata/cvs/".$row["cvpath"];
                                                        $email = $row["email"];
                                                        $tugevused = $row["skills"];
                                                        $kogemused = $row["experience"];
                                                        $work = $row["work"];
                                                        $asukoht = $row["location"]; 

                                                        //bullet list creator
                                                        $parsed_kogemused = "<ul>";
                                                        foreach(explode("\n", $kogemused) as $line){
                                                            $parsed_kogemused .= "<li>$line</li>";
                                                        }
                                                        $parsed_kogemused .= "</ul>";
                                                        unset($line);
                                                        
                                                        if($queue){
                                                            echo '</div></div></div><div class="carousel-item"><div class="container"><div class="row">';
                                                            $queue = false;
                                                            $pages++;
                                                        }
                                                        
                                                        $bigstring = '
                                                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2">
                                                            <div class="flip-div">
                                                                <div class="flip-main">
                                                                    <div class="front">
                                                                        <div class="card">
                                                                            <p><img class="" src="'.$pic.'" alt="'.$name.'" title="'.$name.'"></p>
                                                                            <div class="card-body pb-2">
                                                                                <p class="card-title font-weight-bold mt-3">'.$name_br.'</p>
                                                                                <p class="card-text font-weight-light">'.$degree.'</p>
                                                                                <p class="card-text font-weight-light text-primary">'.$work.'</p>
                                                                            </div>
                                                                            <i class="arrow-front"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="back">
                                                                        <div class="card">
                                                                            <div class="card-body">
                                                                                <p class="card-title font-weight-bold">'.$name_br.'</p>
                                                                                <p class="card-text font-weight-light">'.$degree.'</p>
                                                                                <p class="card-text font-weight-light">'.$work.'</p>
                                                                                <p class="font-weight-bold mt-3">'.$strengths_form_area.'</p>
                                                                                <p class="card-text font-weight-light ">'.$tugevused.'</p>
                                                                                <p class="font-weight-bold">'.$experience_form_area.'</p>
                                                                                <p class="card-text font-weight-light">'.$kogemused.'</p>
                                                                            </div>
                                                                            <div class="links">
                                                                              <a href="mailto:'.$email.'" class="text-uppercase">'.$send_email_text.'</a>'.
                                                                                (!empty($row["cvpath"]) ? '<a href="#" onclick="return false;" class="text-uppercase js-open-cv" data-uname="'.$name.'" data-cv="'.$cv.'">'.$view_text.' CV\'d</a>':'' ).'
                                                                            </div>
                                                                            <i class="arrow-front"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>';
                                                        $bigstring = str_replace("\n","",$bigstring);
                                                        $bigstring = str_replace("\t","",$bigstring);
                                                        echo $bigstring;
                                                        $j++;
                                                        if ($j == $max_per_page){
                                                            $j = 0;
                                                            $queue = true;
                                                        }

                                                    }
                                                } catch (PDOException $e){
                                                    echo "Connection failed: " . $e->getMessage();
                                                }
                                            ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <nav aria-label="Pager" class="col-md-12">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item" data-index="prev">
                                        <a class="page-link" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <?php
                                  for($i=0; $i < $pages; $i++){
                                      echo '<li class="page-item '.($i == 0 ? "active" : "").'" data-index="'.$i.'"><a class="page-link">'.($i+1).'</a></li>';
                                  }
                                ?>
                                    <li class="page-item" data-index="next">
                                        <a class="page-link" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>

    <!-- modal -->
    <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="container">
                        <?php
                        //form text translations
                        if($_SESSION["lang"] == "ee"){
                            $name_form_area = "Ees- ja perekonnanimi *";
                            $name_form_area_warning = "Palun lisa oma nimi";
                            $email_form_area_warning = "Vajame sinu meiliaadressi, et sulle kinnituslink saata";
                            $work_form_area = "Eriala *";
                            $work_form_area_warning = "Palun anna teada, mis eriala sa õpid";
                            $institute_form_area = "Instituut";
                            $institute_form_area_warning = "Ole hea ja anna teada, mis instituudist sa oled";
                            $photo_form_area = "Lae üles oma profiilipilt";
                            $photo_form_area_warning = "Lae profiilipilt!";
                            $area_form_area = "Soovitav praktika/töö valdkond *";
                            $area_form_area_warning = "Ära unusta märkida, mis valdkonnas soovid töötada";
                            $strengths_form_area = "Tugevused/oskused *";
                            $strengths_form_area_warning = "Palun kirjelda lühidalt oma oskusi";
                            $experience_form_area = "Kogemused";
                            $location_form_area = "Soovitud asukoht";
                            $cv_form_area = "Lae üles oma CV";
                            $consent_form_area = "Olen teadlik, et kõik vormi sisestatud isikuandmed avalikustatakse Futulabi kodulehel. Tutvu adnmekaitsetingimustega ";
                            $consent_link_text = "siit";
                            $close_text = "Sulge";
                        }
                        else{
                            $name_form_area = "First and last name *";
                            $name_form_area_warning = "Please insert your name";
                            $email_form_area_warning = "Your e-mail is required for the e-mail confirmation link";
                            $work_form_area = "Curriculum *";
                            $work_form_area_warning = "Please tell us your curriculum";
                            $institute_form_area = "Institute";
                            $institute_form_area_warning = "Please tell us which institute you are from";
                            $photo_form_area = "Upload your profile picture";
                            $photo_form_area_warning = "Upload your profile picture!";
                            $area_form_area = "Preferred internship field *";
                            $area_form_area_warning = "Don't forget to specify your preferred internship field";
                            $strengths_form_area = "Character strengths *";
                            $strengths_form_area_warning = "Please shortly describe your strenghts";
                            $experience_form_area = "Experience";
                            $location_form_area = "Preferred location";
                            $cv_form_area = "Upload your CV";
                            $consent_form_area = "I am aware that the personal data uploaded by users onto the form will be published on Futulab. Read the data protection policy ";
                            $consent_link_text = "here";
                            $close_text = "Close";
                        }
                        ?>

                        <form class="needs-validation row <?php if ($form_success){ echo "hidden"; }?>" action="./prax_api.php" method="post" enctype="multipart/form-data" id="form_student">

                            <div class="col-lg-8">
                                <div class="form-group">
                                    <p class="alert alert-warning font-weight-normal"><?php echo $t_pieces["forms_consent"];?></p>
                                    <label for="name"><?php echo $name_form_area; ?></label>
                                    <input required type="text" class="form-control <?php if(!empty($_POST)) { if($name == "") { echo "is-invalid"; } else {echo "is-valid";} } ?>" id="name" name="name">
                                    <div class='invalid-feedback'><?php echo $name_form_area_warning; ?></div>
                                </div>
                                <div class="form-group">
                                    <label for="email">E-mail *</label>
                                    <input required type="email" class="form-control <?php if(!empty($_POST)) { if($email_valid) { echo "is-valid"; }else{ echo "is-invalid"; } }?>" id="email" aria-describedby="emailHelp" name="email">
                                    <div class='invalid-feedback'><?php echo $email_form_area_warning; ?></div>
                                </div>
                                <div class="form-group">
                                    <label for="work"><?php echo $work_form_area; ?></label>
                                    <input required type="text" class="form-control <?php if(!empty($_POST)) { if($major != "") { echo "is-valid"; }else{ echo "is-invalid"; } } ?>" id="major" name="major">
                                    <div class='invalid-feedback'><?php echo $work_form_area_warning; ?></div>
                                </div>
                                <div class="form-group">
                                    <label for="work"><?php echo $institute_form_area; ?></label>
                                    <select class="form-control" class="form-control <?php if(!empty($_POST)) { if($institute != "") { echo "is-valid"; }else{ echo "is-invalid"; } } ?>" id="institute" name="institute">
                                        <option selected>...</option>
                                        <option value="ajaloo ja arheoloogia instituut"><?php echo $wf_fields["ajaloo ja arheoloogia instituut"]; ?></option>
                                        <option value="arvutiteaduse instituut"><?php echo $wf_fields["arvutiteaduse instituut"]; ?></option>
                                        <option value="bio- ja siirdemeditsiini instituut"><?php echo $wf_fields["bio- ja siirdemeditsiini instituut"]; ?></option>
                                        <option value="eesti ja üldkeeleteaduse instituut"><?php echo $wf_fields["eesti ja üldkeeleteaduse instituut"]; ?></option>
                                        <option value="Eesti mereinstituut"><?php echo $wf_fields["Eesti mereinstituut"]; ?></option>
                                        <option value="farmaatsia instituut"><?php echo $wf_fields["farmaatsia instituut"]; ?></option>
                                        <option value="filosoofia ja semiootika instituut"><?php echo $wf_fields["filosoofia ja semiootika instituut"]; ?></option>
                                        <option value="füüsika instituut"><?php echo $wf_fields["füüsika instituut"]; ?></option>
                                        <option value="hambaarstiteaduse instituut"><?php echo $wf_fields["hambaarstiteaduse instituut"]; ?></option>
                                        <option value="haridusteaduste instituut"><?php echo $wf_fields["haridusteaduste instituut"]; ?></option>
                                        <option value="Johan Skytte poliitikauuringute instituut"><?php echo $wf_fields["Johan Skytte poliitikauuringute instituut"]; ?></option>
                                        <option value="keemia instituut"><?php echo $wf_fields["keemia instituut"]; ?></option>
                                        <option value="kliinilise meditsiini instituut"><?php echo $wf_fields["kliinilise meditsiini instituut"]; ?></option>
                                        <option value="kultuuriteaduste instituut"><?php echo $wf_fields["kultuuriteaduste instituut"]; ?></option>
                                        <option value="maailma keelte ja kultuuride kolledž"><?php echo $wf_fields["maailma keelte ja kultuuride kolledž"]; ?></option>
                                        <option value="majandusteaduskond"><?php echo $wf_fields["majandusteaduskond"]; ?></option>
                                        <option value="matemaatika ja statistika instituut"><?php echo $wf_fields["matemaatika ja statistika instituut"]; ?></option>
                                        <option value="molekulaar- ja rakubioloogia instituut"><?php echo $wf_fields["molekulaar- ja rakubioloogia instituut"]; ?></option>
                                        <option value="Narva kolledž"><?php echo $wf_fields["Narva kolledž"]; ?></option>
                                        <option value="õigusteaduskond"><?php echo $wf_fields["õigusteaduskond"]; ?></option>
                                        <option value="ökoloogia ja maateaduste instituut"><?php echo $wf_fields["ökoloogia ja maateaduste instituut"]; ?></option>
                                        <option value="Pärnu kolledž"><?php echo $wf_fields["Pärnu kolledž"]; ?></option>
                                        <option value="peremeditsiini ja rahvatervishoiu instituut"><?php echo $wf_fields["peremeditsiini ja rahvatervishoiu instituut"]; ?></option>
                                        <option value="psühholoogia instituut"><?php echo $wf_fields["psühholoogia instituut"]; ?></option>
                                        <option value="sporditeaduste ja füsioteraapia instituut"><?php echo $wf_fields["sporditeaduste ja füsioteraapia instituut"]; ?></option>
                                        <option value="Tartu observatoorium"><?php echo $wf_fields["Tartu observatoorium"]; ?></option>
                                        <option value="tehnoloogiainstituut"><?php echo $wf_fields["tehnoloogiainstituut"]; ?></option>
                                        <option value="ühiskonnateaduste instituut"><?php echo $wf_fields["ühiskonnateaduste instituut"]; ?></option>
                                        <option value="usuteaduskond"><?php echo $wf_fields["usuteaduskond"]; ?></option>
                                        <option value="Viljandi kultuuriakadeemia"><?php echo $wf_fields["Viljandi kultuuriakadeemia"]; ?></option>
                                        <option value="muu"><?php echo $wf_fields["muu"]; ?></option>
                                    </select>
                                    <div class='invalid-feedback'><?php echo $institute_form_area_warning; ?></div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="pilt" class="<?php if(!empty($_POST)) { if(!$pic_success) { echo "is-invalid"; } } ?>">Pilt</label>
                                    <div id="preview">
                                        <img id="profileImg" src="../userdata/blank_profile_pic.png" height="200" alt="Image preview...">
                                    </div>
                                    <div class="upload-btn-wrapper">
                                        <button class="btn"><?php echo $photo_form_area; ?></button>
                                        <input type="file" accept="image/*" class="form-control-file <?php if(!empty($_POST)) { if(!$cv_success) { echo "is-invalid"; } } ?>" id="pilt" name="pilt_full" onchange="previewFile()">
                                        <div class='invalid-feedback'><?php echo $photo_form_area_warning; ?></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="work"><?php echo $area_form_area; ?></label>
                                    <select class="form-control" id="work" name="work">
                                        <option value="Määramata" selected><?php echo $wf_fields["Määramata"]; ?></option>
                                        <option value="Arvestusala"><?php echo $wf_fields["Arvestusala"]; ?></option>
                                        <option value="Ehitus"><?php echo $wf_fields["Ehitus"]; ?></option>
                                        <option value="Energeetika ja kaevandamine"><?php echo $wf_fields["Energeetika ja kaevandamine"]; ?></option>
                                        <option value="Haridus ja teadus"><?php echo $wf_fields["Haridus ja teadus"]; ?></option>
                                        <option value="Info- ja kommunikatsioonitehnoloogia"><?php echo $wf_fields["Info- ja kommunikatsioonitehnoloogia"]; ?></option>
                                        <option value="Kaubandus, rentimine ja parandus"><?php echo $wf_fields["Kaubandus, rentimine ja parandus"]; ?></option>
                                        <option value="Keemia-, kummi-, plasti- ja ehitusmaterjalitööstus"><?php echo $wf_fields["Keemia-, kummi-, plasti- ja ehitusmaterjalitööstus"]; ?></option>
                                        <option value="Kultuur ja loometegevus"><?php echo $wf_fields["Kultuur ja loometegevus"]; ?></option>
                                        <option value="Majutus, toitlustus ja turism"><?php echo $wf_fields["Majutus, toitlustus ja turism"]; ?></option>
                                        <option value="Metalli- ja masinatööstus"><?php echo $wf_fields["Metalli- ja masinatööstus"]; ?></option>
                                        <option value="Metsandus ja puidutööstus"><?php echo $wf_fields["Metsandus ja puidutööstus"]; ?></option>
                                        <option value="Õigus"><?php echo $wf_fields["Õigus"]; ?></option>
                                        <option value="Personali- ja administratiivtöö ning ärinõustamine"><?php echo $wf_fields["Personali- ja administratiivtöö ning ärinõustamine"]; ?></option>
                                        <option value="Põllumajandus ja toiduainetööstus"><?php echo $wf_fields["Põllumajandus ja toiduainetööstus"]; ?></option>
                                        <option value="Rõiva-, tekstiili- ja nahatööstus"><?php echo $wf_fields["Rõiva-, tekstiili- ja nahatööstus"]; ?></option>
                                        <option value="Sotsiaaltöö"><?php echo $wf_fields["Sotsiaaltöö"]; ?></option>
                                        <option value="Tervishoid"><?php echo $wf_fields["Tervishoid"]; ?></option>
                                        <option value="Transport, logistika ning mootorsõidukid"><?php echo $wf_fields["Transport, logistika ning mootorsõidukid"]; ?></option>
                                        <option value="Vee- ja jäätmemajandus ning keskkond"><?php echo $wf_fields["Vee- ja jäätmemajandus ning keskkond"]; ?></option>
                                    </select>
                                    <div class='invalid-feedback'><?php echo $area_form_area_warning; ?></div>
                                </div>
                                <div class="form-group">
                                    <label for="oskused"><?php echo $strengths_form_area; ?></label>
                                    <textarea required class="form-control  <?php if(!empty($_POST)) { if($work != "") { echo "is-valid"; }else{ echo "is-invalid"; } } ?>" id="oskused" rows="3" name="oskused"></textarea>
                                    <div class='invalid-feedback'><?php echo $strengths_form_area_warning; ?></div>
                                </div>
                                <div class="form-group">
                                    <label for="kogemused"><?php echo $experience_form_area; ?></label>
                                    <textarea class="form-control" id="kogemused" rows="3" name="kogemused"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="location"><?php echo $location_form_area; ?></label>
                                    <input type="text" class="form-control <?php if(!empty($_POST)) { if($location != "") { echo "is-valid"; }else{ echo "is-invalid"; } } ?>" id="location" name="location">
                                </div>
                                <div class="form-group text-center">
                                    <div class="upload-btn-wrapper">
                                        <button class="btn"><?php echo $cv_form_area;?></button>
                                        <input type="file" class="form-control-file <?php if(!empty($_POST)) { if(!$cv_success) { echo "is-invalid"; } } ?>" id="cv" name="cv" onchange="showFileName(this.files)">
                                        <div class='invalid-feedback'><?php echo $cv_form_area;?></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input <?php if(!empty($_POST)) { if($checkpoint) { echo "is-valid"; }else{ echo "is-invalid"; } } ?>" id="checkpoint" name="checkpoint" required="required">
                                        <label class="custom-control-label text-left" for="checkpoint"><?php echo $consent_form_area; ?><a href="<?php echo $wwwroot;?>andmekaitsetingimused" target="_blank"><?php echo $consent_link_text; ?></a>.</label>
                                    </div>
                                </div>
                                <button id="submit-all" type="submit" class="mt-3 text-center text-uppercase btn btn-lg btn-primary font-weight-light js-ajax" data-value="add" onclick="gtag('event', 'Salvesta',{'event_category': 'Üliõpilased','event_label':'Lisa profiil'});"><?php echo $add_profile; ?></button>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $close_text; ?></button>
                </div>
            </div>

        </div>
    </div>

    <div class="modal fade modal-cv" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">CV</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-lg-12 pdf-container"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $close_text; ?></button>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include_once './../templates/footer.php';?>
    <script src="https://unpkg.com/cropperjs"></script>
    <script>
        var blobImg;
        try {

        } catch (err) {
            console.log(err);
        }
        $(document).ready(function() {
            $('.js-modal').on('click', openModal);
            $('.js-open-cv').on('click', openCV);
            $('.js-ajax').on('click', function(e) {
                ajaxSubmit(e);
            });
            $(".flip-div").click(function() {
                $(this).toggleClass("hover");
            });
            $('.links a').on("click", function(e) {
                $(this).parent().parent().parent().parent().parent().toggleClass("hover")
            });

            $('.pagination .page-item').on('click', paginatorClick);
            $('#carouselPager').carousel({
                interval: false,
                wrap: false
            });
            $('#carouselPager').on('slide.bs.carousel', function(e) {
                $('.pagination .page-item').eq(e.from + 1).toggleClass('active');
                $('.pagination .page-item').eq(e.to + 1).toggleClass('active');
            });

        });

        function paginatorClick(e) {
            var carousel = $('#carouselPager');
            var target = $(e.currentTarget);
            var index = target.data('index');
            carousel.carousel(index);
        }

        function openCV(e) {
            var modal = $('.modal-cv').first();
            var target = $(e.currentTarget);
            $('.modal-cv .modal-title').text($(target).data('uname') + " CV");
            var cvpath = "../js/pdf/web/viewer.html?file=<?php echo $wwwroot;?>" + $(target).data('cv');

            var cvembed = $('<iframe>').attr({
                'src': cvpath + '&embedded=true',
                'type': 'application/pdf'
            }).css('width', '100%').css('min-height', '512px');
            modal.find('.modal-body').empty();
            modal.find('.modal-body').html(cvembed);

            modal.modal('show');
        }

        function openModal(e) {
            if (e !== undefined && e.target !== this)
                return;
            var modal = $('.modal').first();
            modal.modal('show');
        }

        function ajaxSubmit(e) {
            var action = $(e.currentTarget).data("value");
            var form = $('#form_student');
            var modal = $('.modal').first();
            e.preventDefault();
            e.stopPropagation();
            var formData = new FormData(document.getElementById('form_student'));
            formData.append("action", action);
            formData.delete("pilt_full");
            if (blobImg != undefined)
                formData.append("pilt", blobImg, "profilepic.jpg");

            if ($('#cv')[0].files.length != 0 && $('#cv')[0].files[0].size > 8192000) { // 8 MB (size in bytes)
                form.before('<div class="alert alert-danger alert-dismissible fade show" role="alert">\
                              <strong>Viga!</strong> CV faili suurus on liiga suur!\
                              <button type="button" class="close" data-dismiss="alert" aria-label="Sulge">\
                                <span aria-hidden="true">&times;</span>\
                              </button>\
                            </div>');
                return;
            }

            $.ajax({
                type: 'POST',
                url: form.attr('action'),
                cache: false,
                contentType: false,
                processData: false,
                data: formData
            }).done(function(response) {
                form.after("<div class='alert alert-success'>Aitäh! Teie emailile tuleb postituse aktiveerimislink!</div>");
                form.css('display', 'none');
                form.trigger("reset");
                setTimeout(function() {
                    modal.modal("hide");
                }, 3000);
            }).fail(function(response) {
                form.addClass('was-validated');
                form.before('<div class="alert alert-danger alert-dismissible fade show" role="alert">\
                              <strong>Viga!</strong> ' + response + '\
                              <button type="button" class="close" data-dismiss="alert" aria-label="Sulge">\
                                <span aria-hidden="true">&times;</span>\
                              </button>\
                            </div>');
            });
        }

        function showFileName(files) {
            try {
                var fname = document.getElementById("cv-upload-data");
                fname.innerHTML = files[0].name + " (" + (files[0].size / 1024).toFixed(2) + "KB)";
                document.getElementById("cv").parentElement.appendChild(fname);
            } catch (err) {
                var fname = document.createElement("div");
                fname.classList.add("pt-3");
                fname.id = "cv-upload-data";
                fname.innerHTML = files[0].name + " (" + (files[0].size / 1024).toFixed(2) + "KB)";
                document.getElementById("cv").parentElement.appendChild(fname);
            }
        }

        function previewFile() {
            var preview = document.querySelector('#preview');
            var files = document.querySelector('input[type=file]').files[0];

            function readAndPreview(file) {
                // Make sure `file.name` matches our extensions criteria
                if (/\.(jpe?g|png|gif)$/i.test(file.name)) {
                    var reader = new FileReader();
                    reader.addEventListener("load", function() {
                        var image = document.getElementById('profileImg');
                        image.height = 100;
                        image.title = file.name;
                        image.src = this.result;
                        preview.appendChild(image);
                    }, false);
                    reader.readAsDataURL(file);
                }
            }
            if (files) {
                readAndPreview(files);
                var editor = document.createElement('div');
                editor.classList.add("cropper-overlay");
                // Create the confirm button
                var confirm = document.createElement('button');
                confirm.textContent = 'Kärbi';
                confirm.classList.add("btn");
                confirm.classList.add("btn-primary");
                confirm.classList.add("text-uppercase");
                confirm.classList.add("btn-cropper-overlay");

                confirm.addEventListener('click', function() {
                    // Get the canvas with image data from Cropper.js
                    var canvas = cropper.getCroppedCanvas({
                        width: 256,
                        height: 256
                    });

                    // Turn the canvas into a Blob (file object without a name)
                    canvas.toBlob(function(blob) {
                        // Set #profileImg src to blob and use blobImg global to use later in formData
                        document.getElementById('profileImg').src = URL.createObjectURL(blob);
                        blobImg = blob;
                    });
                    // Remove the editor from view
                    editor.parentNode.removeChild(editor);
                });
                editor.appendChild(confirm);
                // Load the image
                var image = new Image();
                image.src = URL.createObjectURL(files);
                editor.appendChild(image);
                // Append the editor to the page
                document.body.appendChild(editor);
                // Create Cropper.js and pass image
                var cropper = new Cropper(image, {
                    aspectRatio: 1
                });
            }
        }

    </script>

</body>

</html>
