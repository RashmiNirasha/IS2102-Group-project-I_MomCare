<?php 
session_start();
include '../../Config/dbConnection.php';
include "../../Assets/Includes/header_pages.php";
include "../../Assets/Includes/sidenav.php";?>

<!DOCTYPE html>
<html lang="en">
<Head>
  <Link Href="Https://Fonts.Googleapis.Com/Css?Family=Quicksand:400,700" Rel="Stylesheet">
  <style><?php include "../../Assets/css/style-child.css";?></style>

</Head>
<body>

<div class="child-container">
  <h2>Development Tests</h2>
  <div class="OneColumnSection">
  <div class="MotherCardTableTitles">
    <h3>At 2 months</h3>
  </div>
  <div class="MotherGeneralDetails">
    <table class="MotherCardTables">
      <tr>
        <th></th>
        <th>Development index</th>
        <th>Mother/Father/Guardian Observation</th>
      </tr>
      <tr>
        <th>1</th>
        <td>Does not respond to sounds</td>
        <td>
        <select name="dev-idx-1" onchange="changeSelectColor(event)">
      <option value="">Select</option>
      <option value="yes">Yes</option>
      <option value="no">No</option>
    </select>
        </td>
      </tr>
      <tr>
        <th>2</th>
        <td>Does not look at moving objects</td>
        <td>
        <select name="dev-idx-1" onchange="changeSelectColor(event)">
      <option value="">Select</option>
      <option value="yes">Yes</option>
      <option value="no">No</option>
    </select>
        </td>
      </tr>
      <tr>
        <th>3</th>
        <td>Not smiling responsively with you</td>
        <td>
        <select name="dev-idx-1" onchange="changeSelectColor(event)">
      <option value="">Select</option>
      <option value="yes">Yes</option>
      <option value="no">No</option>
    </select>
        </td>
      </tr>

                        <tr>
                        <th> 4 </th>
                        <td>Don't put your hands to your mouth</td>
                        <td>
                        <select name="dev-idx-1" onchange="changeSelectColor(event)">
      <option value="">Select</option>
      <option value="yes">Yes</option>
      <option value="no">No</option>
    </select>
                        </td>
                        </tr>
                        <tr>
                        <th> 5 </th>
                        <td>Does not try to raise your head while lying on your hands</td>
                        <td>
                        <select name="dev-idx-1" onchange="changeSelectColor(event)">
      <option value="">Select</option>
      <option value="yes">Yes</option>
      <option value="no">No</option>
    </select>
                        </td>
                        </tr>
                            </table>
                            <!-- <input type="submit" name="generate_pdf" class="NextBtn" value="Generate PDF" /> -->
                        </div>

                        <div class="OneColumnSection"> <!--when a section has only one table, use this class-->
                        <div class="MotherCardTableTitles"><h3> At 4 months  </h3></div>
                        <div class="MotherGeneralDetails">
                            <table class="MotherCardTables">
                            <tr>
                                    <th></th>
                                    <th>Development index</th>
                                    <th>Mother/Father/Guardian Observation</th>
                                </tr>
                                <tr>
                                    <th>1 </th>
                                    <td>Does not look at moving objects</td>
                                    <td>
                                    <select name="dev-idx-1" onchange="changeSelectColor(event)">
                                        <option value="">Select</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                        </select></td>
                                </tr>
                                <tr>
                                    <th>2 </th>
                                    <td>Does not smile responsively with you</td>
                                    <td>
                                    <select name="dev-idx-1" onchange="changeSelectColor(event)">
                                            <option value="">Select</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                            </select></td>
                                </tr>
                                <tr>
                                    <th>3 </th>
                                    <td>Unable to hold head up straight</td>
                                    <td>
                                    <select name="dev-idx-1" onchange="changeSelectColor(event)">
                                            <option value="">Select</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                            </select></td>
                                                                        </tr>
                                <tr>
                                    <th> 4 </th>
                                    <td>The mouth does not make small sounds.</td>
                                    <td>
                                                            <select name="dev-idx-1" onchange="changeSelectColor(event)">
                            <option value="">Select</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                            </select></td>
                                                        </tr>
                                <tr>
                                    <th> 5 </th>
                                    <td>Do not put material in the mouth</td>
                                    <td>
                                    <select name="dev-idx-1" onchange="changeSelectColor(event)">
                                    <option value="">Select</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                    </select> </td>
                                                                </tr>
                                <tr>
                                    <th> 6 </th>
                                    <td>When the feet are placed on a firm background, the body does not push down</td>
                                    <td>
                                    <select name="dev-idx-1" onchange="changeSelectColor(event)">
                                            <option value="">Select</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                            </select> </td>
                                </tr>
                                <tr>
                                    <th> 7 </th>
                                    <td>Inability to move one or both eyes in all directions</td>
                                    <td>
                                    <select name="dev-idx-1" onchange="changeSelectColor(event)">
                                        <option value="">Select</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                        </select>
                                    </td>
                                </tr>
                            </table>
                            </div>


                            <div class="OneColumnSection"> <!--when a section has only one table, use this class-->
                        <div class="MotherCardTableTitles"><h3> At 6 months  </h3></div>
                        <div class="MotherGeneralDetails">
                            <table class="MotherCardTables">
                            <tr>
                                    <th></th>
                                    <th>Development index</th>
                                    <th>Mother/Father/Guardian Observation</th>
                                </tr>
                                <tr>
                                    <th>1 </th>
                                    <td>Does not attempt to reach for things within reach</td>
                                    <td>
                                    <select name="dev-idx-1" onchange="changeSelectColor(event)">
                                        <option value="">Select</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                        </select></td>
                                </tr>
                                <tr>
                                    <th>2 </th>
                                    <td>Does not show affection to caregivers</td>
                                    <td>
                                    <select name="dev-idx-1" onchange="changeSelectColor(event)">
                                            <option value="">Select</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                            </select></td>
                                </tr>
                                <tr>
                                    <th>3 </th>
                                    <td>unresponsive for surrounding sounds</td>
                                    <td>
                                    <select name="dev-idx-1" onchange="changeSelectColor(event)">
                                            <option value="">Select</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                            </select></td>
                                                                        </tr>
                                <tr>
                                    <th> 4 </th>
                                    <td>Difficulty bringing a substants to the mouth</td>
                                    <td>
                                                            <select name="dev-idx-1" onchange="changeSelectColor(event)">
                            <option value="">Select</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                            </select></td>
                                                        </tr>
                                <tr>
                                    <th> 5 </th>
                                    <td>Cannot pronounce vowels such as "a" and "o"</td>
                                    <td>
                                    <select name="dev-idx-1" onchange="changeSelectColor(event)">
                                    <option value="">Select</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                    </select> </td>
                                                                </tr>
                                <tr>
                                    <th> 6 </th>
                                    <td> there is no ability to turn even to one side</td>
                                    <td>
                                    <select name="dev-idx-1" onchange="changeSelectColor(event)">
                                            <option value="">Select</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                            </select> </td>
                                </tr>
                                <tr>
                                    <th> 7 </th>
                                    <td>Does not laugh and do not make loud noises </td>
                                    <td>
                                    <select name="dev-idx-1" onchange="changeSelectColor(event)">
                                        <option value="">Select</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th> 8 </th>
                                    <td>The body feels very rigid and the muscles feel abnormally tight.</td>
                                    <td>
                                    <select name="dev-idx-1" onchange="changeSelectColor(event)">
                                        <option value="">Select</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th> 9 </th>
                                    <td>The body feels soft and brittle.</td>
                                    <td>
                                    <select name="dev-idx-1" onchange="changeSelectColor(event)">
                                        <option value="">Select</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                        </select>
                                    </td>
                                </tr>
                            </table>
                            </div>

                            <div class="OneColumnSection">
  <div class="MotherCardTableTitles"><h3>At 9 months</h3></div>
  <div class="MotherGeneralDetails">
    <table class="MotherCardTables">
      <tr>
        <th></th>
        <th>Development index</th>
        <th>Mother/Father/Guardian Observation</th>
      </tr>
      <tr>
        <th>1</th>
        <td>Feet cannot support body weight with help</td>
        <td>
          <select name="dev-idx-1" onchange="changeSelectColor(event)">
            <option value="">Select</option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
          </select>
        </td>
      </tr>
      <tr>
        <th>2</th>
        <td>Cannot sit with help</td>
        <td>
          <select name="dev-idx-2" onchange="changeSelectColor(event)">
            <option value="">Select</option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
          </select>
        </td>
      </tr>
      <tr>
        <th>3</th>
        <td>Cannot pronounce words such as “mama” or “dada”</td>
        <td>
          <select name="dev-idx-3" onchange="changeSelectColor(event)">
            <option value="">Select</option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
          </select>
        </td>
      </tr>
      <tr>
        <th>4</th>
        <td>Do not participate in responsive play with others</td>
        <td>
          <select name="dev-idx-4" onchange="changeSelectColor(event)">
            <option value="">Select</option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
          </select>
        </td>
      </tr>
      <tr>
        <th>5</th>
        <td>Do not respond to his/her name</td>
        <td>
          <select name="dev-idx-5" onchange="changeSelectColor(event)">
            <option value="">Select</option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
          </select>
        </td>
      </tr>
      <tr>
        <th>6</th>
        <td>Does not recognize familiar people</td>
        <td>
          <select name="dev-idx-6" onchange="changeSelectColor(event)">
            <option value="">Select</option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
          </select>
        </td>
      </tr>
      <tr>
        <th>7</th>
        <td>Does not look at things that are shown</td>
        <td>
          <select name="dev-idx-7" onchange="changeSelectColor(event)">
            <option value="">Select</option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
          </select>
        </td>
      </tr>
      <tr>
        <th>8</th>
        <td>Can not move toys from one hand to another</td>
        <td>
        <select name="dev-idx-7" onchange="changeSelectColor(event)">
            <option value="">Select</option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
          </select>
        </td>
        </tr>
        </table>
                            </div>

                            
  <!-- 12th month  -->
  <div class="OneColumnSection">
  <div class="MotherCardTableTitles">
    <h3>At 12 months</h3>
  </div>
  <div class="MotherGeneralDetails">
    <table class="MotherCardTables">
      <tr>
        <th></th>
        <th>Development index</th>
        <th>Mother/Father/Guardian Observation</th>
      </tr>
      <tr>
        <th>1</th>
        <td>Cannot move from one place to another independently. Eg: crawling</td>
        <td>
        <select name="dev-idx-1" onchange="changeSelectColor(event)">
      <option value="">Select</option>
      <option value="yes">Yes</option>
      <option value="no">No</option>
    </select>
        </td>
      </tr>
      <tr>
        <th>2</th>
        <td>Cannot stand with help or with a helping stand.</td>
        <td>
        <select name="dev-idx-2" onchange="changeSelectColor(event)">
      <option value="">Select</option>
      <option value="yes">Yes</option>
      <option value="no">No</option>
    </select>
        </td>
      </tr>
      <tr>
        <th>3</th>
        <td>Cannot find hidden items</td>
        <td>
        <select name="dev-idx-3" onchange="changeSelectColor(event)">
      <option value="">Select</option>
      <option value="yes">Yes</option>
      <option value="no">No</option>
    </select>
        </td>
      </tr>
      <tr>
    <th>4</th>
    <td>Cannot say single words such as amma,thaththa</td>
    <td>
    <select name="dev-idx-4" onchange="changeSelectColor(event)">
      <option value="">Select</option>
      <option value="yes">Yes</option>
      <option value="no">No</option>
    </select>
    </td>
  </tr>

  <tr>
    <th>5</th>
    <td>Cannot do physical movements such as waving a hand and shaking head</td>
    <td>
    <select name="dev-idx-5" onchange="changeSelectColor(event)">
      <option value="">Select</option>
      <option value="yes">Yes</option>
      <option value="no">No</option>
    </select>
    </td>
  </tr>

  <tr>
    <th>6</th>
    <td>Does not point at things</td>
    <td>
    <select name="dev-idx-6" onchange="changeSelectColor(event)">
      <option value="">Select</option>
      <option value="yes">Yes</option>
      <option value="no">No</option>
    </select>
    </td>
  </tr>

  <tr>
    <th>7</th>
    <td>It is not possible to grab something small with help of the ring finger and the big toe.</td>
    <td>
    <select name="dev-idx-7" onchange="changeSelectColor(event)">
      <option value="">Select</option>
      <option value="yes">Yes</option>
      <option value="no">No</option>
    </select>
    </td>
  </tr>

  <tr>
    <th>8</th>
    <td>It is thought that the previous abilities have been lost.</td>
    <td>
    <select name="dev-idx-7" onchange="changeSelectColor(event)">
      <option value="">Select</option>
      <option value="yes">Yes</option>
      <option value="no">No</option>
    </select>
    </td>
  </tr>
  </table>
    </div>

                            <!-- <input type="submit" name="generate_pdf" class="NextBtn" value="Generate PDF" /> -->
                        </div>



                            <a href="child-developmentView2.php?child_id=<?php echo $_GET['child_id']; ?>">
  <button type="submit" class="btn btn-primary">Page 2</button>
</a>                            </div>

                            <script>

                        function changeSelectColor(event) {
                        var select = event.target;
                        var option = select.options[select.selectedIndex];

                        if (option.value === 'yes') {
                            select.classList.add('green-background');
                            select.classList.remove('red-background');
                        } else {
                            select.classList.add('red-background');
                            select.classList.remove('green-background');
                        }
                        }

</script>
  </body>
</html>


