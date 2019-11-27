<?php 
include '../../view/header.php' ; 
include '../../auth/formerrors.php';

  // If the user is already signed in, send them to the home page
  if(!isset($_SESSION['signedin']) && $_SESSION['signedin'] !== true){
        header('location: ../../auth/signinpage.php?message=mustbesignedin&redirect=../../home/profile/profile_edit.php');
        exit();
  }

    $dob = explode("-", $_SESSION['profile_dob']);
    $dob_year = $dob[0];
    $dob_month = $dob[1];
    $dob_day = $dob[2];

    $location = explode(", ", $_SESSION['profile_location']);
    $city = $location[0];
    $state = $location[1];
    $country = $location[2];

 ?>

<div class="signuppage">
    <h3 class="mb-5">Edit Profile</h3>
        <form action="updateprofile.php" method="post" class="col-md-6" enctype="multipart/form-data">
        <input type="hidden" name="user_id" value="<?php echo $_SESSION['userId']; ?>">
            <div class="form-group mb-4">
                <label for="inputFirstName">First Name</label>
                <input type="text" class="form-control" id="inputFirstName" name="first_name" value="<?php echo $_SESSION['profile_fName']; ?>">
            </div>
            <div class="form-group mb-4">
                <label for="inputLastName">Last Name</label>
                <input type="text" class="form-control" id="inputLastName" name="last_name" value="<?php echo $_SESSION['profile_lName']; ?>">
            </div>
            <div class="form-group mb-4">
                <label for="inputEmail">Email</label>
                <input type="text" class="form-control" id="inputEmail" name="email" aria-describedby="emailHelp" value="<?php echo $_SESSION['profile_email']; ?>"">
            </div>
            <label for="dobPick">Date of Birth</label>
            <div class="form-group mb-4 d-flex align-items-row" id="dobPick">
                <div>
                    <select class="custom-select" id="inputDobMonth" name="dob_month">
                        <option disabled>Select Month...</option>
                        <option id="month_01" value="01">January</option>
                        <option id="month_02" value="02">February</option>
                        <option id="month_03" value="03">March</option>
                        <option id="month_04" value="04">April</option>
                        <option id="month_05" value="05">May</option>
                        <option id="month_06" value="06">June</option>
                        <option id="month_07" value="07">July</option>
                        <option id="month_08" value="08">August</option>
                        <option id="month_09" value="09">September</option>
                        <option id="month_10" value="10">October</option>
                        <option id="month_11" value="11">November</option>
                        <option id="month_12" value="12">December</option>
                    </select>
                </div>
                <div class="pl-5 pr-5">
                    <select class="custom-select" id="inputDobDay" name="dob_day">
                        <option disabled>Select Month...</option>
                        <option id="day_01" value="01">1</option>
                        <option id="day_02" value="02">2</option>
                        <option id="day_03" value="03">3</option>
                        <option id="day_04" value="04">4</option>
                        <option id="day_05" value="05">5</option>
                        <option id="day_06" value="06">6</option>
                        <option id="day_07" value="07">7</option>
                        <option id="day_08" value="08">8</option>
                        <option id="day_09" value="09">9</option>
                        <option id="day_10" value="10">10</option>
                        <option id="day_11" value="11">11</option>
                        <option id="day_12" value="12">12</option>
                        <option id="day_13" value="13">13</option>
                        <option id="day_14" value="14">14</option>
                        <option id="day_15" value="15">15</option>
                        <option id="day_16" value="16">16</option>
                        <option id="day_17" value="17">17</option>
                        <option id="day_18" value="18">18</option>
                        <option id="day_19" value="19">19</option>
                        <option id="day_20" value="20">20</option>
                        <option id="day_21" value="21">21</option>
                        <option id="day_22" value="22">22</option>
                        <option id="day_23" value="23">23</option>
                        <option id="day_24" value="24">24</option>
                        <option id="day_25" value="25">25</option>
                        <option id="day_26" value="26">26</option>
                        <option id="day_27" value="27">27</option>
                        <option id="day_28" value="28">28</option>
                        <option id="day_29" value="29">29</option>
                        <option id="day_30" value="30">30</option>
                        <option id="day_31" value="31">31</option>
                    </select>
                </div>
                <div>
                    <select class="custom-select" id="inputDobYear" name="dob_year">
                        <option disabled>Select Year...</option>
                        <option id="year_2019" value="2019">2019</option>
                        <option id="year_2018" value="2018">2018</option>
                        <option id="year_2017" value="2017">2017</option>
                        <option id="year_2016" value="2016">2016</option>
                        <option id="year_2015" value="2015">2015</option>
                        <option id="year_2014" value="2014">2014</option>
                        <option id="year_2013" value="2013">2013</option>
                        <option id="year_2012" value="2012">2012</option>
                        <option id="year_2011" value="2011">2011</option>
                        <option id="year_2010" value="2010">2010</option>
                        <option id="year_2009" value="2009">2009</option>
                        <option id="year_2008" value="2008">2008</option>
                        <option id="year_2007" value="2007">2007</option>
                        <option id="year_2006" value="2006">2006</option>
                        <option id="year_2005" value="2005">2005</option>
                        <option id="year_2004" value="2004">2004</option>
                        <option id="year_2003" value="2003">2003</option>
                        <option id="year_2002" value="2002">2002</option>
                        <option id="year_2001" value="2001">2001</option>
                        <option id="year_2000" value="2000">2000</option>
                        <option id="year_1999" value="1999">1999</option>
                        <option id="year_1998" value="1998">1998</option>
                        <option id="year_1997" value="1997">1997</option>
                        <option id="year_1996" value="1996">1996</option>
                        <option id="year_1995" value="1995">1995</option>
                        <option id="year_1994" value="1994">1994</option>
                        <option id="year_1993" value="1993">1993</option>
                        <option id="year_1992" value="1992">1992</option>
                        <option id="year_1991" value="1991">1991</option>
                        <option id="year_1990" value="1990">1990</option>
                        <option id="year_1989" value="1989">1989</option>
                        <option id="year_1988" value="1988">1988</option>
                        <option id="year_1987" value="1987">1987</option>
                        <option id="year_1986" value="1986">1986</option>
                        <option id="year_1985" value="1985">1985</option>
                        <option id="year_1984" value="1984">1984</option>
                        <option id="year_1983" value="1983">1983</option>
                        <option id="year_1982" value="1982">1982</option>
                        <option id="year_1981" value="1981">1981</option>
                        <option id="year_1980" value="1980">1980</option>
                        <option id="year_1979" value="1979">1979</option>
                        <option id="year_1978" value="1978">1978</option>
                        <option id="year_1977" value="1977">1977</option>
                        <option id="year_1976" value="1976">1976</option>
                        <option id="year_1975" value="1975">1975</option>
                        <option id="year_1974" value="1974">1974</option>
                        <option id="year_1973" value="1973">1973</option>
                        <option id="year_1972" value="1972">1972</option>
                        <option id="year_1971" value="1971">1971</option>
                        <option id="year_1970" value="1970">1970</option>
                        <option id="year_1969" value="1969">1969</option>
                        <option id="year_1968" value="1968">1968</option>
                        <option id="year_1967" value="1967">1967</option>
                        <option id="year_1966" value="1966">1966</option>
                        <option id="year_1965" value="1965">1965</option>
                        <option id="year_1964" value="1964">1964</option>
                        <option id="year_1963" value="1963">1963</option>
                        <option id="year_1962" value="1962">1962</option>
                        <option id="year_1961" value="1961">1961</option>
                        <option id="year_1960" value="1960">1960</option>
                        <option id="year_1959" value="1959">1959</option>
                        <option id="year_1958" value="1958">1958</option>
                        <option id="year_1957" value="1957">1957</option>
                        <option id="year_1956" value="1956">1956</option>
                        <option id="year_1955" value="1955">1955</option>
                        <option id="year_1954" value="1954">1954</option>
                        <option id="year_1953" value="1953">1953</option>
                        <option id="year_1952" value="1952">1952</option>
                        <option id="year_1951" value="1951">1951</option>
                        <option id="year_1950" value="1950">1950</option>
                        <option id="year_1949" value="1949">1949</option>
                        <option id="year_1948" value="1948">1948</option>
                        <option id="year_1947" value="1947">1947</option>
                        <option id="year_1946" value="1946">1946</option>
                        <option id="year_1945" value="1945">1945</option>
                        <option id="year_1944" value="1944">1944</option>
                        <option id="year_1943" value="1943">1943</option>
                        <option id="year_1942" value="1942">1942</option>
                        <option id="year_1941" value="1941">1941</option>
                        <option id="year_1940" value="1940">1940</option>
                        <option id="year_1939" value="1939">1939</option>
                        <option id="year_1938" value="1938">1938</option>
                        <option id="year_1937" value="1937">1937</option>
                        <option id="year_1936" value="1936">1936</option>
                        <option id="year_1935" value="1935">1935</option>
                        <option id="year_1934" value="1934">1934</option>
                        <option id="year_1933" value="1933">1933</option>
                        <option id="year_1932" value="1932">1932</option>
                        <option id="year_1931" value="1931">1931</option>
                        <option id="year_1930" value="1930">1930</option>
                        <option id="year_1929" value="1929">1929</option>
                        <option id="year_1928" value="1928">1928</option>
                        <option id="year_1927" value="1927">1927</option>
                        <option id="year_1926" value="1926">1926</option>
                        <option id="year_1925" value="1925">1925</option>
                        <option id="year_1924" value="1924">1924</option>
                        <option id="year_1923" value="1923">1923</option>
                        <option id="year_1922" value="1922">1922</option>
                        <option id="year_1921" value="1921">1921</option>
                        <option id="year_1920" value="1920">1920</option>
                        <option id="year_1919" value="1919">1919</option>
                        <option id="year_1918" value="1918">1918</option>
                        <option id="year_1917" value="1917">1917</option>
                        <option id="year_1916" value="1916">1916</option>
                        <option id="year_1915" value="1915">1915</option>
                        <option id="year_1914" value="1914">1914</option>
                        <option id="year_1913" value="1913">1913</option>
                        <option id="year_1912" value="1912">1912</option>
                        <option id="year_1911" value="1911">1911</option>
                        <option id="year_1910" value="1910">1910</option>
                        <option id="year_1909" value="1909">1909</option>
                        <option id="year_1908" value="1908">1908</option>
                        <option id="year_1907" value="1907">1907</option>
                        <option id="year_1906" value="1906">1906</option>
                        <option id="year_1905" value="1905">1905</option>
                    </select>
                </div>
            </div>
            <div class="form-group mb-4 custom-file">
                <label class="custom-file-label" for="inputProfilePic">Choose Photo</label>
                <input type="file" class="custom-file-input" name="profile_pic" id="inputProfilePic">
            </div>
            <div class="form-group mb-4">
                <label for="inputBiography">Biography</label>
                <textarea class="form-control" rows="5" id="inputBiography" name="biography"><?php echo $_SESSION['profile_bio']; ?></textarea>
            </div>
            <label for="locationPicker">Your Location</label>
            <div class="form-group mb-4" id="locationPicker">
                    <select class="custom-select" id="inputCountry" name="country">
                    <option selected disabled>Select Country...</option>
                    <option id="country_canada" value="canada">Canada</option>
                    <option id="country_usa" value="usa">United States</option>
                </select>
            </div>
            <div class="form-group mb-4" >
                <select class="custom-select" id="inputProvince" name="province">
                <option disabled>Select Province/State...</option>
                <option id="state_bc" value="bc">British Columbia</option>
                <option id="state_alb" value="alb">Alberta</option>
                <option id="state_man" value="man">Manitoba</option>
                <option id="state_sas" value="sas">Saskatchewan</option>
                <option id="state_ont" value="ont">Ontario</option>
                <option id="state_que" value="que">Quebec</option>
            </select>
            </div>
            <div class="form-group mb-4" >
                <select class="custom-select" id="inputCity" name="city">
                <option disabled>Select City...</option>
                <option id="city_surrey" value="surrey">Surrey</option>
                <option id="city_langley" value="langley">Langley</option>
                <option id="city_richmond" value="richmond">Richmond</option>
                </select>
            </div>
           
            <div class="form-group mt-5">
                <button type="submit" class="btn btn-primary float-right">Update</button>
            </div>
        </form>
</div>
<script>
    document.querySelector('#year_<?php echo $dob_year ?>').setAttribute("selected", "selected");
    document.querySelector('#month_<?php echo $dob_month ?>').setAttribute("selected", "selected");
    document.querySelector('#day_<?php echo $dob_day ?>').setAttribute("selected", "selected");
    document.querySelector('#city_<?php echo $city ?>').setAttribute("selected", "selected");
    document.querySelector('#state_<?php echo $state ?>').setAttribute("selected", "selected");
    document.querySelector('#country_<?php echo $country ?>').setAttribute("selected", "selected");
</script>
<?php include '../../view/footer.php'; ?>

