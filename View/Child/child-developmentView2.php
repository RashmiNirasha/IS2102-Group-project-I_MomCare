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
        <h3>At 18 months</h3>
    </div>
    <div class="MotherGeneralDetails">
        <table class="MotherCardTables">
            <tr>
                <th></th>
                <th>Development indicator</th>
                <th>Mother/Father/Guardian Observation</th>
            </tr>
            <tr>
                <th>1</th>
                <td>Does not point fingers at things</td>
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
                <td>Cannot walk</td>
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
                <td>It is not known what the familiar materials are used for.</td>
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
                <td>Cannot imitate others</td>
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
                <td>Does not seem to be learning new words</td>
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
                <td>Does not use even 6 words</td>
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
                <td>Does not care when parents leave or come close</td>
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
                <td>It is thought that previous abilities have been lost.</td>
                <td>
                    <select name="dev-idx-8" onchange="changeSelectColor(event)">
                        <option value="">Select</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                </td>
            </tr>
        </table>
    </div>

    <div class="OneColumnSection"> <!--when a section has only one table, use this class-->
    <div class="MotherCardTableTitles"><h3>At 24 Months</h3></div>
    <div class="MotherGeneralDetails">
        <table class="MotherCardTables">
            <tr>
                <th></th>
                <th>Development Index</th>
                <th>Mother/Father/Guardian Observation</th>
            </tr>
            <tr>
                <th>1</th>
                <td>Cannot walk properly</td>
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
                <td>Cannot say a two-word sentence properly</td>
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
                <td>Cannot understand the purpose of frequently used items such as a toothbrush, telephone, or spoon</td>
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
                <td>Does not imitate actions and words</td>
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
                <td>Does not follow simple commands</td>
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
                <td>Loss of previous abilities</td>
                <td>
                    <select name="dev-idx-6" onchange="changeSelectColor(event)">
                        <option value="">Select</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                </td>
            </tr>
        </table>
    </div>
</div>

<div class="OneColumnSection">
    <div class="MotherCardTableTitles"><h3>At 36 Months</h3></div>
    <div class="MotherGeneralDetails">
        <table class="MotherCardTables">
            <tr>
                <th></th>
                <th>Development Index</th>
                <th>Mother/Father/Guardian Observation</th>
            </tr>
            <tr>
                <th>1</th>
                <td>Frequently falls and difficult to climb stairs</td>
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
                <td>Drooling and difficult to talk well</td>
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
                <td>Cannot play well with simple toys</td>
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
                <td>Cannot talk in sentences</td>
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
                <td>Cannot understand a simple command</td>
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
                <td>Do not play with imitation</td>
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
                <td>Do not play with toys or other children</td>
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
                <td>Does not eye to eye</td>
                <td>
                    <select name="dev-idx-7" onchange="changeSelectColor(event)">
                        <option value="">Select</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>9</th>
                <td>Loss of previous abilities.</td>
                <td>
                    <select name="dev-idx-9" onchange="changeSelectColor(event)">
                        <option value="">Select</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                </td>
            </tr>
        </table>
    </div>
</div>

<div class="OneColumnSection">
    <div class="MotherCardTableTitles"><h3>At 48 Months</h3></div>
    <div class="MotherGeneralDetails">
        <table class="MotherCardTables">
            <tr>
                <th></th>
                <th>Development Index</th>
                <th>Mother/Father/Guardian Observation</th>
            </tr>
            <tr>
                <th>1</th>
                <td>Cannot Jump</td>
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
                <td>Cannot draw lines in a paper</td>
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
                <td>Do not like to play collaboratively with others</td>
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
                <td>Does not care about other children or strangers</td>
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
                <td>Does not like to do daily-day activities like dressing, sleeping, toileting etc.</td>
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
                <td>Not even in the middle of the day does he/she announce that he needs to go to the bathroom</td>
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
                <td>It is difficult to repeat a short story that he/she knows well</td>
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
                <td>A three-step instruction is difficult to follow</td>
                <td>
                    <select name="dev-idx-8" onchange="changeSelectColor(event)">
                        <option value="">Select</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>9</th>
                <td>Difficult to understand similarities or differences</td>
                <td>
                    <select name="dev-idx-9" onchange="changeSelectColor(event)">
                        <option value="">Select</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>10</th>
                <td>The words "I" and "you" are not used correctly</td>
                <td>
                    <select name="dev-idx-10" onchange="changeSelectColor(event)">
                        <option value="">Select</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>11</th>
                <td>It is difficult to understand others when speaking</td>
                <td>
                    <select name="dev-idx-11" onchange="changeSelectColor(event)">
                        <option value="">Select</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>12</th>
                <td>The previous abilities are lost</td>
                <td>
                    <select name="dev-idx-11" onchange="changeSelectColor(event)">
                        <option value="">Select</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                </td>
            </tr>

            </table>
        </div>

<div class="OneColumnSection">
    <div class="MotherCardTableTitles"><h3>At 60 Months</h3></div>
    <div class="MotherGeneralDetails">
        <table class="MotherCardTables">
            <tr>
                <th></th>
                <th>Development Index</th>
                <th>Mother/Father/Guardian Observation</th>
            </tr>
            <tr>
                <th>1</th>
                <td>Does not express feelings well</td>
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
                <td>Shows impulsive behavior, such as too much fear, anger, or shyness</td>
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
                <td>Usually aloof and less active</td>
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
                <td>Easily distracted and does not give more than five minutes of attention to any one activity</td>
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
                <td>Does not respond to others or responds only superficially</td>
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
                <td>Cannot distinguish between truth and imitation</td>
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
                <td>Cannot say first name and last name correctly</td>
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
                <td>Plural, past tense verbs are not used correctly</td>
                <td>
                    <select name="dev-idx-8" onchange="changeSelectColor(event)">
                        <option value="">Select</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>9</th>
                <td>Does not talk about everyday activities and experiences </td>
                <td>
                    <select name="dev-idx-9" onchange="changeSelectColor(event)">
                        <option value="">Select</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>10</th>
                <td>Cannot draw objects</td>
                <td>
                    <select name="dev-idx-10" onchange="changeSelectColor(event)">
                        <option value="">Select</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>11</th>
                <td>Loss of previous abilities.</td>
                <td>
                    <select name="dev-idx-11" onchange="changeSelectColor(event)">
                        <option value="">Select</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                </td>
            </tr>
            </table>
        </div>

  <a href="child-developmentView.php?child_id=<?php echo $_GET['child_id']; ?>">
  <button type="submit" class="btn btn-primary">Page 1</button>
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


