<?php 
include '../views/header.php' ; 
include 'formerrors.php';
include 'progressbar.php';

  // If the user is already signed in, send them to the home page
  if(!isset($_SESSION['signedin']) && $_SESSION['signedin'] !== true){
        header('location: signinpage.php?message=mustbesignedin&redirect=registrationpage.php?stage=1');
        exit();
  }

 ?>

<div class="signuppage">
    <h3 class="mb-5">Profile Details</h3>
    <!-- Second page of registration -->
    <?php if($_GET['stage'] == 1){ ?>
        <form action="createprofile.php" method="post" class="col-md-6">
        <input type="hidden" name="stage" value="1">
        <input type="hidden" name="user_id" value="<?php echo $_SESSION['userId']; ?>">
            <div class="form-group mb-4">
                <label for="inputFirstName">First Name</label>
                <input type="text" class="form-control" id="inputFirstName" name="first_name" placeholder="Jane">
            </div>
            <div class="form-group mb-4">
                <label for="inputLastName">Last Name</label>
                <input type="text" class="form-control" id="inputLastName" name="last_name" placeholder="Smith">
            </div>
            <div class="form-group mb-4">
                <label for="inputEmail">Email</label>
                <input type="text" class="form-control" id="inputEmail" name="email" aria-describedby="emailHelp" placeholder="jane.smith@gmail.com">
                <small id="emailHelp" class="form-text text-muted">Your email will be used to verify your account. We will not spam you.</small>
            </div>
            <label for="dobPick">Date of Birth</label>
            <div class="form-group mb-4 d-flex align-items-row" id="dobPick">
                <div>
                    <select class="custom-select" id="inputDobMonth" name="dob_month">
                        <option selected disabled>Select Month...</option>
                        <option value="01">January</option>
                        <option value="02">February</option>
                        <option value="03">March</option>
                        <option value="04">April</option>
                        <option value="05">May</option>
                        <option value="06">June</option>
                        <option value="07">July</option>
                        <option value="08">August</option>
                        <option value="09">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                    </select>
                </div>
                <div class="pl-5 pr-5">
                    <select class="custom-select" id="inputDobDay" name="dob_day">
                        <option selected disabled>Select Month...</option>
                        <option value="01">1</option>
                        <option value="02">2</option>
                        <option value="03">3</option>
                        <option value="04">4</option>
                        <option value="05">5</option>
                        <option value="06">6</option>
                        <option value="07">7</option>
                        <option value="08">8</option>
                        <option value="09">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="23">30</option>
                        <option value="31">31</option>
                    </select>
                </div>
                <div>
                    <select class="custom-select" id="inputDobYear" name="dob_year">
                        <option selected disabled>Select Year...</option>
                        <option value="2018">2019</option>
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                        <option value="2014">2014</option>
                        <option value="2013">2013</option>
                        <option value="2012">2012</option>
                        <option value="2011">2011</option>
                        <option value="2010">2010</option>
                        <option value="2009">2009</option>
                        <option value="2008">2008</option>
                        <option value="2007">2007</option>
                        <option value="2006">2006</option>
                        <option value="2005">2005</option>
                        <option value="2004">2004</option>
                        <option value="2003">2003</option>
                        <option value="2002">2002</option>
                        <option value="2001">2001</option>
                        <option value="2000">2000</option>
                        <option value="1999">1999</option>
                        <option value="1998">1998</option>
                        <option value="1997">1997</option>
                        <option value="1996">1996</option>
                        <option value="1995">1995</option>
                        <option value="1994">1994</option>
                        <option value="1993">1993</option>
                        <option value="1992">1992</option>
                        <option value="1991">1991</option>
                        <option value="1990">1990</option>
                        <option value="1989">1989</option>
                        <option value="1988">1988</option>
                        <option value="1987">1987</option>
                        <option value="1986">1986</option>
                        <option value="1985">1985</option>
                        <option value="1984">1984</option>
                        <option value="1983">1983</option>
                        <option value="1982">1982</option>
                        <option value="1981">1981</option>
                        <option value="1980">1980</option>
                        <option value="1979">1979</option>
                        <option value="1978">1978</option>
                        <option value="1977">1977</option>
                        <option value="1976">1976</option>
                        <option value="1975">1975</option>
                        <option value="1974">1974</option>
                        <option value="1973">1973</option>
                        <option value="1972">1972</option>
                        <option value="1971">1971</option>
                        <option value="1970">1970</option>
                        <option value="1969">1969</option>
                        <option value="1968">1968</option>
                        <option value="1967">1967</option>
                        <option value="1966">1966</option>
                        <option value="1965">1965</option>
                        <option value="1964">1964</option>
                        <option value="1963">1963</option>
                        <option value="1962">1962</option>
                        <option value="1961">1961</option>
                        <option value="1960">1960</option>
                        <option value="1959">1959</option>
                        <option value="1958">1958</option>
                        <option value="1957">1957</option>
                        <option value="1956">1956</option>
                        <option value="1955">1955</option>
                        <option value="1954">1954</option>
                        <option value="1953">1953</option>
                        <option value="1952">1952</option>
                        <option value="1951">1951</option>
                        <option value="1950">1950</option>
                        <option value="1949">1949</option>
                        <option value="1948">1948</option>
                        <option value="1947">1947</option>
                        <option value="1946">1946</option>
                        <option value="1945">1945</option>
                        <option value="1944">1944</option>
                        <option value="1943">1943</option>
                        <option value="1942">1942</option>
                        <option value="1941">1941</option>
                        <option value="1940">1940</option>
                        <option value="1939">1939</option>
                        <option value="1938">1938</option>
                        <option value="1937">1937</option>
                        <option value="1936">1936</option>
                        <option value="1935">1935</option>
                        <option value="1934">1934</option>
                        <option value="1933">1933</option>
                        <option value="1932">1932</option>
                        <option value="1931">1931</option>
                        <option value="1930">1930</option>
                        <option value="1929">1929</option>
                        <option value="1928">1928</option>
                        <option value="1927">1927</option>
                        <option value="1926">1926</option>
                        <option value="1925">1925</option>
                        <option value="1924">1924</option>
                        <option value="1923">1923</option>
                        <option value="1922">1922</option>
                        <option value="1921">1921</option>
                        <option value="1920">1920</option>
                        <option value="1919">1919</option>
                        <option value="1918">1918</option>
                        <option value="1917">1917</option>
                        <option value="1916">1916</option>
                        <option value="1915">1915</option>
                        <option value="1914">1914</option>
                        <option value="1913">1913</option>
                        <option value="1912">1912</option>
                        <option value="1911">1911</option>
                        <option value="1910">1910</option>
                        <option value="1909">1909</option>
                        <option value="1908">1908</option>
                        <option value="1907">1907</option>
                        <option value="1906">1906</option>
                        <option value="1905">1905</option>
                    </select>
                </div>
            </div>
            <div class="form-group mt-5">
                <button type="submit" class="btn btn-primary float-right">Next</button>
            </div>
        </form>
    <!-- Third page of registration -->
    <?php } else if($_GET['stage'] == 2){ ?>
        <form action="createprofile.php" method="post" class="col-md-6" enctype="multipart/form-data">
        <input type="hidden" name="stage" value="2">
        <input type="hidden" name="user_id" value="<?php echo $_SESSION['userId']; ?>">
            <div class="form-group mb-4 custom-file">
                <label class="custom-file-label" for="inputProfilePic">Choose Photo</label>
                <input type="file" class="custom-file-input" name="profile_pic" id="inputProfilePic">
            </div>
            <div class="form-group mb-4">
                <label for="inputBiography">Biography</label>
                <textarea class="form-control" rows="5" id="inputBiography" name="biography"></textarea>
                <small>Add a paragraph or two talking about yourself and your dogs.</small>
            </div>
            <label for="locationPicker">Your Location</label>
            <div class="form-group mb-4" id="locationPicker">
                    <select class="custom-select" id="inputCountry" name="country">
                    <option selected disabled>Select Country...</option>
                    <option value="canada">Canada</option>
                    <option value="usa">United States</option>
                </select>
            </div>
            <div class="form-group mb-4" >
                <select class="custom-select" id="inputProvince" name="province">
                <option selected disabled>Select Province/State...</option>
                <option value="bc">British Columbia</option>
                <option value="alb">Alberta</option>
                <option value="man">Manitoba</option>
                <option value="sas">Saskatchewan</option>
                <option value="ont">Ontario</option>
                <option value="que">Quebec</option>
            </select>
            </div>
            <div class="form-group mb-4" >
                <select class="custom-select" id="inputCity" name="city">
                <option selected disabled>Select City...</option>
                <option value="surrey">Surrey</option>
                <option value="langley">Langley</option>
                <option value="richmond">Richmond</option>
                </select>
            </div>
            <div class="form-group mt-5">
                <button type="submit" class="btn btn-primary float-right">Next</button>
            </div>
        </form>
    <?php } else if($_GET['stage'] == 3){ ?>
        <form action="createprofile.php" method="post" class="col-md-6" enctype="multipart/form-data">
        <input type="hidden" name="stage" value="3">
        <input type="hidden" name="user_id" value="<?php echo $_SESSION['userId']; ?>">
            <h3>Dog's Info</h3>
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
            <label for="dogDobPick">Date of Birth</label>
            <div class="form-group mb-4 d-flex align-items-row" id="dogDobPick">
                <div>
                    <select class="custom-select" id="inputDogDobMonth" name="dog_dob_month">
                        <option selected disabled>Select Month...</option>
                        <option value="01">January</option>
                        <option value="02">February</option>
                        <option value="03">March</option>
                        <option value="04">April</option>
                        <option value="05">May</option>
                        <option value="06">June</option>
                        <option value="07">July</option>
                        <option value="08">August</option>
                        <option value="09">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                    </select>
                </div>
                <div class="pl-5 pr-5">
                    <select class="custom-select" id="inputDogDobDay" name="dog_dob_day">
                        <option selected disabled>Select Month...</option>
                        <option value="01">1</option>
                        <option value="02">2</option>
                        <option value="03">3</option>
                        <option value="04">4</option>
                        <option value="05">5</option>
                        <option value="06">6</option>
                        <option value="07">7</option>
                        <option value="08">8</option>
                        <option value="09">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="23">30</option>
                        <option value="31">31</option>
                    </select>
                </div>
                <div>
                    <select class="custom-select" id="inputDogDobYear" name="dog_dob_year">
                        <option selected disabled>Select Year...</option>
                        <option value="2018">2019</option>
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                        <option value="2014">2014</option>
                        <option value="2013">2013</option>
                        <option value="2012">2012</option>
                        <option value="2011">2011</option>
                        <option value="2010">2010</option>
                        <option value="2009">2009</option>
                        <option value="2008">2008</option>
                        <option value="2007">2007</option>
                        <option value="2006">2006</option>
                        <option value="2005">2005</option>
                        <option value="2004">2004</option>
                        <option value="2003">2003</option>
                        <option value="2002">2002</option>
                        <option value="2001">2001</option>
                        <option value="2000">2000</option>
                        <option value="1999">1999</option>
                        <option value="1998">1998</option>
                        <option value="1997">1997</option>
                        <option value="1996">1996</option>
                        <option value="1995">1995</option>
                        <option value="1994">1994</option>
                        <option value="1993">1993</option>
                        <option value="1992">1992</option>
                        <option value="1991">1991</option>
                        <option value="1990">1990</option>
                        <option value="1989">1989</option>
                        <option value="1988">1988</option>
                        <option value="1987">1987</option>
                        <option value="1986">1986</option>
                        <option value="1985">1985</option>
                        <option value="1984">1984</option>
                        <option value="1983">1983</option>
                        <option value="1982">1982</option>
                        <option value="1981">1981</option>
                        <option value="1980">1980</option>
                        <option value="1979">1979</option>
                        <option value="1978">1978</option>
                        <option value="1977">1977</option>
                        <option value="1976">1976</option>
                        <option value="1975">1975</option>
                        <option value="1974">1974</option>
                        <option value="1973">1973</option>
                        <option value="1972">1972</option>
                        <option value="1971">1971</option>
                        <option value="1970">1970</option>
                        <option value="1969">1969</option>
                        <option value="1968">1968</option>
                        <option value="1967">1967</option>
                        <option value="1966">1966</option>
                        <option value="1965">1965</option>
                        <option value="1964">1964</option>
                        <option value="1963">1963</option>
                        <option value="1962">1962</option>
                        <option value="1961">1961</option>
                        <option value="1960">1960</option>
                        <option value="1959">1959</option>
                        <option value="1958">1958</option>
                        <option value="1957">1957</option>
                        <option value="1956">1956</option>
                        <option value="1955">1955</option>
                        <option value="1954">1954</option>
                        <option value="1953">1953</option>
                        <option value="1952">1952</option>
                        <option value="1951">1951</option>
                        <option value="1950">1950</option>
                        <option value="1949">1949</option>
                        <option value="1948">1948</option>
                        <option value="1947">1947</option>
                        <option value="1946">1946</option>
                        <option value="1945">1945</option>
                        <option value="1944">1944</option>
                        <option value="1943">1943</option>
                        <option value="1942">1942</option>
                        <option value="1941">1941</option>
                        <option value="1940">1940</option>
                        <option value="1939">1939</option>
                        <option value="1938">1938</option>
                        <option value="1937">1937</option>
                        <option value="1936">1936</option>
                        <option value="1935">1935</option>
                        <option value="1934">1934</option>
                        <option value="1933">1933</option>
                        <option value="1932">1932</option>
                        <option value="1931">1931</option>
                        <option value="1930">1930</option>
                        <option value="1929">1929</option>
                        <option value="1928">1928</option>
                        <option value="1927">1927</option>
                        <option value="1926">1926</option>
                        <option value="1925">1925</option>
                        <option value="1924">1924</option>
                        <option value="1923">1923</option>
                        <option value="1922">1922</option>
                        <option value="1921">1921</option>
                        <option value="1920">1920</option>
                        <option value="1919">1919</option>
                        <option value="1918">1918</option>
                        <option value="1917">1917</option>
                        <option value="1916">1916</option>
                        <option value="1915">1915</option>
                        <option value="1914">1914</option>
                        <option value="1913">1913</option>
                        <option value="1912">1912</option>
                        <option value="1911">1911</option>
                        <option value="1910">1910</option>
                        <option value="1909">1909</option>
                        <option value="1908">1908</option>
                        <option value="1907">1907</option>
                        <option value="1906">1906</option>
                        <option value="1905">1905</option>
                    </select>
                </div>
            </div>
            <label for="dogAdoptDate">Adoption Date</label>
            <div class="form-group mb-4 d-flex align-items-row" id="dogAdoptDate">
                <div>
                    <select class="custom-select" id="inputDogAdoptMonth" name="dog_adopt_month">
                        <option selected disabled>Select Month...</option>
                        <option value="01">January</option>
                        <option value="02">February</option>
                        <option value="03">March</option>
                        <option value="04">April</option>
                        <option value="05">May</option>
                        <option value="06">June</option>
                        <option value="07">July</option>
                        <option value="08">August</option>
                        <option value="09">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                    </select>
                </div>
                <div class="pl-5 pr-5">
                    <select class="custom-select" id="inputDogAdoptDay" name="dog_adopt_day">
                        <option selected disabled>Select Month...</option>
                        <option value="01">1</option>
                        <option value="02">2</option>
                        <option value="03">3</option>
                        <option value="04">4</option>
                        <option value="05">5</option>
                        <option value="06">6</option>
                        <option value="07">7</option>
                        <option value="08">8</option>
                        <option value="09">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="23">30</option>
                        <option value="31">31</option>
                    </select>
                </div>
                <div>
                    <select class="custom-select" id="inputDogAdoptYear" name="dog_adopt_year">
                        <option selected disabled>Select Year...</option>
                        <option value="2018">2019</option>
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                        <option value="2014">2014</option>
                        <option value="2013">2013</option>
                        <option value="2012">2012</option>
                        <option value="2011">2011</option>
                        <option value="2010">2010</option>
                        <option value="2009">2009</option>
                        <option value="2008">2008</option>
                        <option value="2007">2007</option>
                        <option value="2006">2006</option>
                        <option value="2005">2005</option>
                        <option value="2004">2004</option>
                        <option value="2003">2003</option>
                        <option value="2002">2002</option>
                        <option value="2001">2001</option>
                        <option value="2000">2000</option>
                    </select>
                </div>
            </div>
            <div class="form-group mt-5">
                <button type="submit" class="btn btn-primary float-right">Next</button>
            </div>
        </form>
    <?php } ?>

</div>
<?php 

include '../views/footer.php'; ?>