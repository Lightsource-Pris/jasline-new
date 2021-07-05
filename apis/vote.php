<?php
include "connector.php";
class Vote extends Connector{

    function response($msg){
        echo '<script>alert("'.$msg.'")</script>';
    }

    //General Voting Category
    public function gen_vote(){
        if(isset($_POST['vote'])){
        
            $category = 'general';

            $Most_popular_M = $_POST['Most_popular_M'];
            $Most_popular_F = $_POST['Most_popular_F'];
            $Sport_man_of_the_year = $_POST['Sport_man_of_the_year']; 
            $Most_fashionable_M = $_POST['Most_fashionable_M'];
            $Most_fashionable_F = $_POST['Most_fashionable_F'];
            $Mr_personality = $_POST['Mr_personality'];
            $miss_personality = $_POST['miss_personality'];
            $Perfect_gentleman = $_POST['Perfect_gentleman'];
            $Most_reserved_M = $_POST['Most_reserved_M'];
            $Most_reserved_F = $_POST['Most_reserved_F'];
            $Best_dressed_M = $_POST['Best_dressed_M'];
            $Best_dressed_F = $_POST['Best_dressed_F'];
            $Miss_petit = $_POST['Miss_petit'];
            $Big_bold_and_beautiful = $_POST['Big_bold_and_beautiful'];
            $Miss_ebony = $_POST['Miss_ebony'];
            $Most_beautiful = $_POST['Most_beautiful'];
            $Most_handsome = $_POST['Most_handsome'];
            $Most_expensive = $_POST['Most_expensive']; 
            $Money_bag = $_POST['Money_bag'];
            $Man_of_the_year = $_POST['Man_of_the_year'];
            $Unsung_hero = $_POST['Unsung_hero'];
            $Best_clique = $_POST['Best_clique'];
            $Political_icon = $_POST['Political_icon']; 
            $Brand_influencer = $_POST['Brand_influencer'];
            $Most_influential_student_M = $_POST['Most_influential_student_M'];
            $Most_influential_student_F = $_POST['Most_influential_student_F'];
            $Most_sophisticated_student_M = $_POST['Most_sophisticated_student_M'];
            $Most_sophisticated_student_F = $_POST['Most_sophisticated_student_F'];
            $Best_automobile = $_POST['Best_automobile'];
            $Model_of_the_year = $_POST['Model_of_the_year'];
            $Miss_photogenic = $_POST['Miss_photogenic'];
            $Most_sought_after_M = $_POST['Most_sought_after_M'];
            $Most_sought_after_F = $_POST['Most_sought_after_F'];
            $Golden_boy = $_POST['Golden_boy'];
            $YAGI = $_POST['YAGI'];
            $Revelation = $_POST['Revelation'];
            $Hour_glass = $_POST['Hour_glass'];
            
            $this->conn = mysqli_connect('localhost','root','','jasline') or die("Connection Failed!");
            $query = $this->conn->prepare("INSERT INTO $category(`Most_popular_M`,`Most_popular_F`,`Sport_man_of_the_year`
            ,`Most_fashionable_M`,`Most_fashionable_F`,`Mr_personality`,`miss_personality`,`Perfect_gentleman`,
            `Most_reserved_M`,`Most_reserved_F`,`Best_dressed_M`,`Best_dressed_F`,`Miss_petit`,
            `Big_bold_and_beautiful`,`Miss_ebony`,`Most_beautiful`,`Most_handsome`,`Most_expensive`,
            `Money_bag`,`Man_of_the_year`,`Unsung_hero`,`Best_clique`,`Political_icon`,`Brand_influencer`,
            `Most_influential_student_M`,`Most_influential_student_F`,`Most_sophisticated_student_M`,
            `Most_sophisticated_student_F`,`Best_automobile`,`Model_of_the_year`,`Miss_photogenic`,
            `Most_sought_after_M`,`Most_sought_after_f`,`Golden_boy`,`YAGI`,`Revelation`,`Hour_glass`) 
            VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
            $query->bind_param("sssssssssssssssssssssssssssssssssssss",$Most_popular_M,$Most_popular_F,
            $Sport_man_of_the_year,$Most_fashionable_M,$Most_fashionable_F,$Mr_personality,$miss_personality,
            $Perfect_gentleman,$Most_reserved_M,$Most_reserved_F,$Best_dressed_M,$Best_dressed_F,
            $Miss_petit,$Big_bold_and_beautiful,$Miss_ebony,$Most_beautiful,$Most_handsome,$Most_expensive,$Money_bag,
            $Man_of_the_year,$Unsung_hero,$Best_clique,$Political_icon,$Brand_influencer,$Most_influential_student_M,
            $Most_influential_student_F,$Most_sophisticated_student_M,$Most_sophisticated_student_F,
            $Best_automobile,$Model_of_the_year,$Miss_photogenic,$Most_sought_after_M,$Most_sought_after_F,
            $Golden_boy,$YAGI,$Revelation,$Hour_glass);
            $query->execute();
            if($query){
                $update = $this->conn->prepare("UPDATE nominees set votes=votes+1 where `name`=? or `name`=? or `name`=?
                 or `name`=? or `name`=? or `name`=? or `name`=? or `name`=? or `name`=? or `name`=? or `name`=?
                 or `name`=? or `name`=? or `name`=? or `name`=? or `name`=? or `name`=? or `name`=? or `name`=?
                 or `name`=? or `name`=? or `name`=? or `name`=? or `name`=? or `name`=? or `name`=? or `name`=?
                 or `name`=? or `name`=? or `name`=? or `name`=? or `name`=? or `name`=? or `name`=? or `name`=?
                 or `name`=? or `name`=?");
                $update->bind_param("sssssssssssssssssssssssssssssssssssss",$Most_popular_M,$Most_popular_F,
                $Sport_man_of_the_year,$Most_fashionable_M,$Most_fashionable_F,$Mr_personality,$miss_personality,
                $Perfect_gentleman,$Most_reserved_M,$Most_reserved_F,$Best_dressed_M,$Best_dressed_F,
                $Miss_petit,$Big_bold_and_beautiful,$Miss_ebony,$Most_beautiful,$Most_handsome,$Most_expensive,$Money_bag,
                $Man_of_the_year,$Unsung_hero,$Best_clique,$Political_icon,$Brand_influencer,$Most_influential_student_M,
                $Most_influential_student_F,$Most_sophisticated_student_M,$Most_sophisticated_student_F,
                $Best_automobile,$Model_of_the_year,$Miss_photogenic,$Most_sought_after_M,$Most_sought_after_F,
                $Golden_boy,$YAGI,$Revelation,$Hour_glass);
                $update->execute();
                if($update){
                    echo "<script>alert('Thanks for voting, your vote has been recorded!')</script>";
                    echo "<script>location.href=''</script>";
                }else{
                    echo "<script>alert('Error! Please try again.')</script>";
                    echo "<script>location.href=''</script>";
                }
            }else{
                echo "<script>location.href=''</script>";
            }      
                    
            }
        
    }

    //Entreprenuer Voting Category
    public function entre_vote(){
        if(isset($_POST['vote'])){
        
            $category = 'entreprenuer';

            $Clothier_of_the_year = $_POST['Clothier_of_the_year'];
            $Most_Enterprising_Student = $_POST['Most_Enterprising_Student'];
            $CEO_of_the_Year = $_POST['CEO_of_the_Year'];
            $Make_up_artist_of_the_year = $_POST['Make_up_artist_of_the_year']; 
            $Student_Brand_of_the_year = $_POST['Student_Brand_of_the_year'];
            $Graphics_Designer_of_the_year = $_POST['Graphics_Designer_of_the_year'];
            $Most_Creative_student = $_POST['Most_Creative_student'];
            $Photographer_of_the_year = $_POST['Photographer_of_the_year'];

            
            $this->conn = mysqli_connect('localhost','root','','jasline');
            $query = $this->conn->prepare("INSERT INTO $category(`Clothier_of_the_year`,`Most_Enterprising_Student`,`CEO_of_the_Year`,`Make_up_artist_of_the_year`,`Student_Brand_of_the_year`
            ,`Graphics_Designer_of_the_year`,`Most_Creative_student`,`Photographer_of_the_year`) 
            VALUES(?,?,?,?,?,?,?,?)");
            $query->bind_param("ssssssss",$Clothier_of_the_year,$Most_Enterprising_Student,$CEO_of_the_Year,
            $Make_up_artist_of_the_year,$Student_Brand_of_the_year,$Graphics_Designer_of_the_year,$Most_Creative_student,
            $Photographer_of_the_year);
            $query->execute();
            if($query){
                $update = $this->conn->prepare("UPDATE nominees set votes=votes+1 where `name`=? or `name`=?
                 or `name`=? or `name`=? or `name`=? or `name`=? or `name`=? or `name`=?");
                $update->bind_param("ssssssss",$Clothier_of_the_year,$Most_Enterprising_Student,$CEO_of_the_Year,
                $Make_up_artist_of_the_year,$Student_Brand_of_the_year,$Graphics_Designer_of_the_year,
                $Most_Creative_student,$Photographer_of_the_year);
                $update->execute();
                if($update){
                    echo "<script>alert('Thanks for voting, your vote has been recorded!')</script>";
                    echo "<script>location.href=''</script>";
                }else{
                    echo "<script>alert('Error! Please try again.')</script>";
                    echo "<script>location.href=''</script>";
                }
            }else{
                response("Error ,try again please!");
                echo "<script>location.href=''</script>";
            }      
                    
            }
        
    }

    //Entertainment Voting Category
    public function enter_vote(){
        if(isset($_POST['vote'])){
        
            $category = 'entertainment';

            $Best_news_act = $_POST['Best_news_act'];
            $Artist_of_the_year = $_POST['Artist_of_the_year'];
            $DJ_of_the_year = $_POST['DJ_of_the_year']; 
            $Entertainment_personality = $_POST['Entertainment_personality'];
            $Entertainment_brand_of_the_year = $_POST['Entertainment_brand_of_the_year'];
            $Music_producer_of_the_year = $_POST['Music_producer_of_the_year'];
            $Best_dancer = $_POST['Best_dancer'];
            $Next_rated_act = $_POST['Next_rated_act'];
            $Rap_artist_of_the_year = $_POST['Rap_artist_of_the_year'];
            $Most_promising_entertainment_personality = $_POST['Most_promising_entertainment_personality'];
            $Best_use_of_social_media = $_POST['Best_use_of_social_media'];
            $Event_organizer_of_the_year = $_POST['Event_organizer_of_the_year'];
            $Online_comedy_platform = $_POST['Online_comedy_platform'];
            $Comedian_of_the_year = $_POST['Comedian_of_the_year'];
            $PR_of_the_year = $_POST['PR_of_the_year'];
            $Social_media_influencer_of_the_year = $_POST['Social_media_influencer_of_the_year'];
            
            $this->conn = mysqli_connect('localhost','root','','jasline') or die("Connection Failed!");
            $query = $this->conn->prepare("INSERT INTO $category(`Best_news_act`,`Artist_of_the_year`,`DJ_of_the_year`,
            `Entertainment_personality`,`Entertainment_brand_of_the_year`,
            `Music_producer_of_the_year`,`Best_dancer`,`Next_rated_act`,`Rap_artist_of_the_year`,
            `Most_promising_entertainment_personality`,`Best_use_of_social_media`,`Event_organizer_of_the_year`,
            `Online_comedy_platform`,`Comedian_of_the_year`,`PR_of_the_year`,`Social_media_influencer_of_the_year`) 
            VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
            $query->bind_param("ssssssssssssssss",$Best_news_act,$Artist_of_the_year,$DJ_of_the_year,
            $Entertainment_personality,$Entertainment_brand_of_the_year,
            $Music_producer_of_the_year,$Best_dancer,$Next_rated_act,$Rap_artist_of_the_year,
            $Most_promising_entertainment_personality,$Best_use_of_social_media,$Event_organizer_of_the_year,
            $Online_comedy_platform,$Comedian_of_the_year,$PR_of_the_year,$Social_media_influencer_of_the_year);
            $query->execute();
            if($query){
                $update = $this->conn->prepare("UPDATE nominees set votes=votes+1 where `name`=? or `name`=? or `name`=?
                 or `name`=? or `name`=? or `name`=? or `name`=? or `name`=? or `name`=? or `name`=? or `name`=?
                 or `name`=? or `name`=? or `name`=? or `name`=? or `name`=?");
                $update->bind_param("ssssssssssssssss",$Best_news_act,$Artist_of_the_year,$DJ_of_the_year,
                $Entertainment_personality,$Entertainment_brand_of_the_year,
                $Music_producer_of_the_year,$Best_dancer,$Next_rated_act,$Rap_artist_of_the_year,
                $Most_promising_entertainment_personality,$Best_use_of_social_media,$Event_organizer_of_the_year,
                $Online_comedy_platform,$Comedian_of_the_year,$PR_of_the_year,$Social_media_influencer_of_the_year);
                $update->execute();
                if($update){
                    echo "<script>alert('Thanks for voting, your vote has been recorded!')</script>";
                    echo "<script>location.href=''</script>";
                }else{
                    echo "<script>alert('Error! Please try again.')</script>";
                    echo "<script>location.href=''</script>";
                }
            }else{
                echo "<script>location.href=''</script>";
            }      
                    
            }
        
    }


    //Fresh Student Voting Category
    public function fresh_vote(){
        if(isset($_POST['vote'])){
        
            $category = 'fresh_students';

            $Rookie_of_the_year_M = $_POST['Rookie_of_the_year_M'];
            $Rookie_of_the_year_F = $_POST['Rookie_of_the_year_F'];
            $Best_new_student_M = $_POST['Best_new_student_M'];
            $Next_rated_artist = $_POST['Next_rated_artist']; 
            $Best_new_student_F = $_POST['Best_new_student_F'];
            
            $this->conn = mysqli_connect('localhost','root','','jasline') or die("Connection Failed!");
            $query = $this->conn->prepare("INSERT INTO $category(`Rookie_of_the_year_M`,`Rookie_of_the_year_F`,`Best_new_student_M`
            ,`Best_new_student_F`,`Next_rated_artist`) 
            VALUES(?,?,?,?,?)");
            $query->bind_param("sssss",$Rookie_of_the_year_M,$Rookie_of_the_year_F,$Best_new_student_M,$Best_new_student_F,$Next_rated_artist);
            $query->execute();
            if($query){
                $update = $this->conn->prepare("UPDATE nominees set votes=votes+1 where `name`=? or `name`=? or `name`=?
                 or `name`=? or `name`=?");
                $update->bind_param("sssss",$Rookie_of_the_year_M,$Rookie_of_the_year_F,$Best_new_student_M,
                $Best_new_student_F,$Next_rated_artist);
                $update->execute();
                if($update){
                    echo "<script>alert('Thanks for voting, your vote has been recorded!')</script>";
                    echo "<script>location.href=''</script>";
                }else{
                    echo "<script>alert('Error! Please try again.')</script>";
                    echo "<script>location.href=''</script>";
                }
            }else{
                echo "<script>alert('Error! Please try again.')</script>";
                echo "<script>location.href=''</script>";
            }      
                    
            }
        
    }


    //Academics Voting Category
    public function academic_vote(){
        if(isset($_POST['vote'])){
        
            $category = 'academics';

            $Best_Student_Academics = $_POST['Best_Student_Academics'];
            $Best_Honorable = $_POST['Best_Honorable'];
            
            $this->conn = mysqli_connect('localhost','root','','jasline') or die("Connection Failed!");
            $query = $this->conn->prepare("INSERT INTO $category(`Best_Student_Academics`,`Best_Honorable`) 
            VALUES(?,?)");
            $query->bind_param("ss",$Best_Student_Academics,$Best_Honorable);
            $query->execute();
            if($query){

                $update = $this->conn->prepare("UPDATE nominees set votes=votes+1 where `name`=? or `name`=?");
                $update->bind_param("ss",$Best_Student_Academics,$Best_Honorable);
                $update->execute();
                if($update){
                    echo "<script>alert('Thanks for voting, your vote has been recorded!')</script>";
                    echo "<script>location.href=''</script>";
                }else{
                    echo "<script>alert('Error! Please try again.')</script>";
                    echo "<script>location.href=''</script>";
                }
                
            }else{
                echo "<script>alert('Error! Please try again.')</script>";
                echo "<script>location.href=''</script>";
            }      
                    
            }
        
    }


    //Special Recognition Voting Category
    public function special_vote(){
        if(isset($_POST['vote'])){
        
            $category = 'special_recognition';

            $Hall_of_fame = $_POST['Hall_of_Fame'];
            $this->conn = mysqli_connect('localhost','root','','jasline') or die("Connection Failed!");
            $query = $this->conn->prepare("INSERT INTO $category(`Hall_of_fame`) 
            VALUES(?)");
            $query->bind_param("s",$Hall_of_fame);
            $query->execute();
            if($query){
                $update = $this->conn->prepare("UPDATE nominees set votes=votes+1 where `name`=?");
                $update->bind_param("s",$Hall_of_fame);
                $update->execute();
                if($update){
                    echo "<script>alert('Thanks for voting, your vote has been recorded!')</script>";
                    echo "<script>location.href=''</script>";
                }else{
                    echo "<script>alert('Error! Please try again.')</script>";
                    echo "<script>location.href=''</script>";
                }
            }else{
                echo "<script>alert('Error! Please try again.')</script>";
                echo "<script>location.href=''</script>";
            }      
                    
            }
        
    }
}

    $new_vote = new Vote();

    
?>

