<?php 
include '../../view/header.php' ; 
include '../../auth/formerrors.php';

  // If the user is already signed in, send them to the home page
  if(!isset($_SESSION['signedin']) && $_SESSION['signedin'] !== true){
        header('location: ../../auth/signinpage.php?message=mustbesignedin&redirect=../../home/profile/profile_edit.php');
        exit();
  }

 ?>

<form action="manage_dog.php?action=add" method="post" class="col-md-6">
        <input type="hidden" name="user_id" value="<?php echo  $_SESSION['userId']; ?>">
            <div class="form-group mb-4">
                <label for="inputDogName">Name</label>
                <input type="text" class="form-control" id="inputDogName" name="dog_name" aria-describedby="dogNameHelp" placeholder="Enter Dog's Name">
            </div>
            <div class="form-group mb-4">
                <label for="inputDogBreed">Breed</label>
                <input type="text" class="form-control" id="inputDogBreed" name="dog_breed" aria-describedby="dogBreedHelp" placeholder="Enter Dog's Breed">
            </div>
            <div class="form-group mb-4">
                <label>Gender</label><br>
                <div class="input-group-text col-md-4">
                    <input type="radio" id="inputDogGenderFemale" name="dog_gender" value="Female">
                        <label for="inputDogGenderFemale">Female</label>
                </div>
                <div class="input-group-text col-md-4">
                    <input type="radio" id="inputDogGenderMale" name="dog_gender" value="Male">
                        <label" for="inputDogGenderMale">Male</label>
                </div>
            </div>
            <label for="dobPick">Date of Birth</label>
            <div class="form-group mb-4 d-flex align-items-row" id="dobPick">
                <div>
                    <select class="custom-select" id="inputDobMonth" name="dog_dob_month">
                        <option selected disabled>Select Month...</option>
                        <option id="dob_month_01" value="01">January</option>
                        <option id="dob_month_02" value="02">February</option>
                        <option id="dob_month_03" value="03">March</option>
                        <option id="dob_month_04" value="04">April</option>
                        <option id="dob_month_05" value="05">May</option>
                        <option id="dob_month_06" value="06">June</option>
                        <option id="dob_month_07" value="07">July</option>
                        <option id="dob_month_08" value="08">August</option>
                        <option id="dob_month_09" value="09">September</option>
                        <option id="dob_month_10" value="10">October</option>
                        <option id="dob_month_11" value="11">November</option>
                        <option id="dob_month_12" value="12">December</option>
                    </select>
                </div>
                <div class="pl-5 pr-5">
                    <select class="custom-select" id="inputDobDay" name="dog_dob_day">
                        <option selected disabled>Select Month...</option>
                        <option id="dob_day_01" value="01">1</option>
                        <option id="dob_day_02" value="02">2</option>
                        <option id="dob_day_03" value="03">3</option>
                        <option id="dob_day_04" value="04">4</option>
                        <option id="dob_day_05" value="05">5</option>
                        <option id="dob_day_06" value="06">6</option>
                        <option id="dob_day_07" value="07">7</option>
                        <option id="dob_day_08" value="08">8</option>
                        <option id="dob_day_09" value="09">9</option>
                        <option id="dob_day_10" value="10">10</option>
                        <option id="dob_day_11" value="11">11</option>
                        <option id="dob_day_12" value="12">12</option>
                        <option id="dob_day_13" value="13">13</option>
                        <option id="dob_day_14" value="14">14</option>
                        <option id="dob_day_15" value="15">15</option>
                        <option id="dob_day_16" value="16">16</option>
                        <option id="dob_day_17" value="17">17</option>
                        <option id="dob_day_18" value="18">18</option>
                        <option id="dob_day_19" value="19">19</option>
                        <option id="dob_day_20" value="20">20</option>
                        <option id="dob_day_21" value="21">21</option>
                        <option id="dob_day_22" value="22">22</option>
                        <option id="dob_day_23" value="23">23</option>
                        <option id="dob_day_24" value="24">24</option>
                        <option id="dob_day_25" value="25">25</option>
                        <option id="dob_day_26" value="26">26</option>
                        <option id="dob_day_27" value="27">27</option>
                        <option id="dob_day_28" value="28">28</option>
                        <option id="dob_day_29" value="29">29</option>
                        <option id="dob_day_30" value="30">30</option>
                        <option id="dob_day_31" value="31">31</option>
                    </select>
                </div>
                <div>
                    <select class="custom-select" id="inputDobYear" name="dog_dob_year">
                        <option selected disabled>Select Year...</option>
                        <option id="dob_year_2019" value="2019">2019</option>
                        <option id="dob_year_2018" value="2018">2018</option>
                        <option id="dob_year_2017" value="2017">2017</option>
                        <option id="dob_year_2016" value="2016">2016</option>
                        <option id="dob_year_2015" value="2015">2015</option>
                        <option id="dob_year_2014" value="2014">2014</option>
                        <option id="dob_year_2013" value="2013">2013</option>
                        <option id="dob_year_2012" value="2012">2012</option>
                        <option id="dob_year_2011" value="2011">2011</option>
                        <option id="dob_year_2010" value="2010">2010</option>
                        <option id="dob_year_2009" value="2009">2009</option>
                        <option id="dob_year_2008" value="2008">2008</option>
                        <option id="dob_year_2007" value="2007">2007</option>
                        <option id="dob_year_2006" value="2006">2006</option>
                        <option id="dob_year_2005" value="2005">2005</option>
                        <option id="dob_year_2004" value="2004">2004</option>
                        <option id="dob_year_2003" value="2003">2003</option>
                        <option id="dob_year_2002" value="2002">2002</option>
                        <option id="dob_year_2001" value="2001">2001</option>
                        <option id="dob_year_2000" value="2000">2000</option>
                        <option id="dob_year_1999" value="1999">1999</option>
                        <option id="dob_year_1998" value="1998">1998</option>
                        <option id="dob_year_1997" value="1997">1997</option>
                        <option id="dob_year_1996" value="1996">1996</option>
                        <option id="dob_year_1995" value="1995">1995</option>
                        <option id="dob_year_1994" value="1994">1994</option>
                        <option id="dob_year_1993" value="1993">1993</option>
                        <option id="dob_year_1992" value="1992">1992</option>
                        <option id="dob_year_1991" value="1991">1991</option>
                        <option id="dob_year_1990" value="1990">1990</option>
                    </select>
                </div>
            </div>
            <label for="dogAdoptDate">Adoption Date</label>
            <div class="form-group mb-4 d-flex align-items-row" id="dogAdoptDate">
                <div>
                    <select class="custom-select" id="inputDogAdoptMonth" name="dog_adopt_month">
                        <option selected disabled>Select Month...</option>
                        <option id="adopted_month_01" value="01">January</option>
                        <option id="adopted_month_02" value="02">February</option>
                        <option id="adopted_month_03" value="03">March</option>
                        <option id="adopted_month_04" value="04">April</option>
                        <option id="adopted_month_05" value="05">May</option>
                        <option id="adopted_month_06" value="06">June</option>
                        <option id="adopted_month_07" value="07">July</option>
                        <option id="adopted_month_08" value="08">August</option>
                        <option id="adopted_month_09" value="09">September</option>
                        <option id="adopted_month_10" value="10">October</option>
                        <option id="adopted_month_11" value="11">November</option>
                        <option id="adopted_month_12" value="12">December</option>
                    </select>
                </div>
                <div class="pl-5 pr-5">
                    <select class="custom-select" id="inputDogAdoptDay" name="dog_adopt_day">
                        <option selected disabled>Select Month...</option>
                        <option id="adopted_day_01" value="01">1</option>
                        <option id="adopted_day_02" value="02">2</option>
                        <option id="adopted_day_03" value="03">3</option>
                        <option id="adopted_day_04" value="04">4</option>
                        <option id="adopted_day_05" value="05">5</option>
                        <option id="adopted_day_06" value="06">6</option>
                        <option id="adopted_day_07" value="07">7</option>
                        <option id="adopted_day_08" value="08">8</option>
                        <option id="adopted_day_09" value="09">9</option>
                        <option id="adopted_day_10" value="10">10</option>
                        <option id="adopted_day_11" value="11">11</option>
                        <option id="adopted_day_12" value="12">12</option>
                        <option id="adopted_day_13" value="13">13</option>
                        <option id="adopted_day_14" value="14">14</option>
                        <option id="adopted_day_15" value="15">15</option>
                        <option id="adopted_day_16" value="16">16</option>
                        <option id="adopted_day_17" value="17">17</option>
                        <option id="adopted_day_18" value="18">18</option>
                        <option id="adopted_day_19" value="19">19</option>
                        <option id="adopted_day_20" value="20">20</option>
                        <option id="adopted_day_21" value="21">21</option>
                        <option id="adopted_day_22" value="22">22</option>
                        <option id="adopted_day_23" value="23">23</option>
                        <option id="adopted_day_24" value="24">24</option>
                        <option id="adopted_day_25" value="25">25</option>
                        <option id="adopted_day_26" value="26">26</option>
                        <option id="adopted_day_27" value="27">27</option>
                        <option id="adopted_day_28" value="28">28</option>
                        <option id="adopted_day_29" value="29">29</option>
                        <option id="adopted_day_30" value="30">30</option>
                        <option id="adopted_day_31" value="31">31</option>
                    </select>
                </div>
                <div>
                    <select class="custom-select" id="inputDogAdoptYear" name="dog_adopt_year">
                        <option selected disabled>Select Year...</option>
                        <option id="adopted_year_2019" value="2019">2019</option>
                        <option id="adopted_year_2018" value="2018">2018</option>
                        <option id="adopted_year_2017" value="2017">2017</option>
                        <option id="adopted_year_2016" value="2016">2016</option>
                        <option id="adopted_year_2015" value="2015">2015</option>
                        <option id="adopted_year_2014" value="2014">2014</option>
                        <option id="adopted_year_2013" value="2013">2013</option>
                        <option id="adopted_year_2012" value="2012">2012</option>
                        <option id="adopted_year_2011" value="2011">2011</option>
                        <option id="adopted_year_2010" value="2010">2010</option>
                        <option id="adopted_year_2009" value="2009">2009</option>
                        <option id="adopted_year_2008" value="2008">2008</option>
                        <option id="adopted_year_2007" value="2007">2007</option>
                        <option id="adopted_year_2006" value="2006">2006</option>
                        <option id="adopted_year_2005" value="2005">2005</option>
                        <option id="adopted_year_2004" value="2004">2004</option>
                        <option id="adopted_year_2003" value="2003">2003</option>
                        <option id="adopted_year_2002" value="2002">2002</option>
                        <option id="adopted_year_2001" value="2001">2001</option>
                        <option id="adopted_year_2000" value="2000">2000</option>
                        <option id="adopted_year_1999" value="1999">1999</option>
                        <option id="adopted_year_1998" value="1998">1998</option>
                        <option id="adopted_year_1997" value="1997">1997</option>
                        <option id="adopted_year_1996" value="1996">1996</option>
                        <option id="adopted_year_1995" value="1995">1995</option>
                        <option id="adopted_year_1994" value="1994">1994</option>
                        <option id="adopted_year_1993" value="1993">1993</option>
                        <option id="adopted_year_1992" value="1992">1992</option>
                        <option id="adopted_year_1991" value="1991">1991</option>
                        <option id="adopted_year_1990" value="1990">1990</option>
                    </select>
                </div>
            </div>
            <div class="form-group mt-5">
                <button type="submit" name="update_dog" class="btn btn-primary float-right">Next</button>
            </div>
        </form>

<?php include '../../view/footer.php'; ?>