<!doctype html>
<html lang="en">
<head>
<title>CARIT Evaluation</title>
<link rel="stylesheet" href="stylesheet.css" type="text/css" />
</head>
<body>
<div id="main">
<div id="sidebar">
<div id="logo1">
    <header id="logo">
        <?php include 'menu.php';?>
    <header>
        <?php include 'header.php';?>
    </header><br>
<div class="rectangle" 
</div>    </header>

        <h2 style="text-align: center;">Student Employment Opportunties at the CARIT</h2>
        <hr style="height: 5px; background: teal; margin: 20px 0; box-shadow: 0px 0px 4px 2px rgba(204,204,204,1);">

        <div class="pad">
        <p style="text-align:left; font-family:verdana; font-size:100%; margin-left: 15px;">Summer 2021 is coming and the CARIT has <b>FOUR</b> Student Assistant positions open! Undergraduate students may choose between Mobile Application Development or Electronic Commerce Data Analysis. Graduate students may choose between Data Visualization or Database Security. In order to be considered for these opportunities, you must have had completed some required courses with an average grade requirement of a GPA greater than 3.2 for Undergraduate students and a GPA greater than 3.7 for Graduate students. </p>

        <div class="table">
            <table style="width:95%">
                <tr>
                  <td><b>Grade</b></td>
                  <td>A</td>
                  <td>B</td>
                  <td>C</td>
                  <td>D</td>
                  <td>F</td>
                </tr>
                <tr>
                  <td><b>Points</b></td>
                  <td>4</td>
                  <td>3</td>
                  <td>2</td>
                  <td>1</td>
                  <td>0</td>
                </tr>
              </table>
            </div>
            <h3 style="text-align: center;">Please Answer the following Questions to verify your Eligibility </h3>

    <div class="form" style="text-align: center;">
      <form name="profile">
        <span class="FormLabel"><b>Please Select your Education level</b>:</span>
        <br>
        <input type="radio" id="radio1" name="education" value="Under Graduate" onclick="checkRadio(value)" />
        <label for="radio1">Under Graduate</label>
        <input type="radio" id="radio2" name="education" value="graduate" onclick="checkRadio(value)" />
        <label for="radio2"></label>Graduate</label>
        <br>
        <div id="div1" style="display:none;">
            <br>
            <h3>Please input your grades to determine your eligibility.</h3>            
            <label>IT 6423 IT System Acquisition: &nbsp; &nbsp; &nbsp; &nbsp;</label>
            <input type="text" id="IT6423" name="fname"><br>
            <br>
            <label>IT 6413 IT Service Delivery: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
            <input type="text" id="IT6413" name="fname"><br>
            <br>
            <label>IT 4323 Data Comm. & Networking: </label>
            <input type="text" id="IT4323"><br>
            <br>
            <label>IT 4403 Adv Web and Mobile App: &nbsp; &nbsp;</label>
            <input type="text" id="IT4403" name="fname"><br>
            <br>
        </div>
        <div id="div2" style="display:none;">
            <br>
            <h3>Please input your grades to determine your eligibility.</h3>       
            <label>IT 7113 Data Visualization: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
            <input type="text" id="IT7113"><br><br>
            <label>IT 6713 Business Intelligence: &nbsp; &nbsp; &nbsp; &nbsp; </label>
            <input type="text" id="IT6713"><br><br>
            <label>IT 6733 Database Administration: &nbsp; </label>
            <input id="IT6733" type="text"><br><br>
            <label>IT 6773 Practical Data Analytics: &nbsp; &nbsp;</label>
            <input type="text" id="IT6773"><br>
        </div>
        <br>
        <div id="div3" style="display:none;">
            <input type="button" value="Evaluate" onclick="evaluatecriteria()" /><br><br>
            <label id="res" style="display:none;"></label>
        </div>
    
        <div id="div4" style="display:none;">
            <a href="Application.php">Application Link</a>
        </div>
    
    </form>

    </div>
    </div>
    <div class="footer"><?php include 'footer.php';?></div> 

<script type="text/javascript">

  function checkRadio(value) {
      if (value == "Under Graduate") {
          document.getElementById('res').innerHTML = " ";
          document.getElementById("div2").style.display = "none";
          document.getElementById("div1").style.display = "block";
          document.getElementById("div3").style.display = "block";
          document.getElementById("div4").style.display = "none";
          document.getElementById('IT6423').value = "";
          document.getElementById('IT6413').value = "";
          document.getElementById('IT4323').value = "";
          document.getElementById('IT4403').value = "";

      } else if (value == "graduate") {
          document.getElementById('res').innerHTML = " ";
          document.getElementById("div1").style.display = "none";
          document.getElementById("div2").style.display = "block";
          document.getElementById("div3").style.display = "block";
          document.getElementById("div4").style.display = "none";
          document.getElementById("IT7113").value = "";
          document.getElementById("IT6713").value = "";
          document.getElementById('IT6733').value = "";
          document.getElementById('IT6773').value = "";
      } else {
          document.getElementById('res').innerHTML = " ";
          document.getElementById("div1").style.display = "none";
          document.getElementById("div2").style.display = "none";
          document.getElementById("div3").style.display = "none";
          document.getElementById("div4").style.display = "none";
          document.getElementById('IT6423').value = "";
          document.getElementById('IT6413').value = "";
          document.getElementById('IT4323').value = "";
          document.getElementById('IT4403').value = "";
          document.getElementById("IT7113").value = "";
          document.getElementById("IT6713").value = "";
          document.getElementById('IT6733').value = "";
          document.getElementById('IT6773').value = "";
      }
  }

  function getGpa(x) {
      var gpa;
      if (x == "A") {
          gpa = 4;
      } else if (x == "B") {
          gpa = 3;
      } else if (x == "C") {
          gpa = 2;
      } else if (x == "D") {
          gpa = 1;
      } else if (x == "F") {
          gpa = 0;
      } else {
          alert("Kindly enter valid grades in required fields");
              return;
      }
      return gpa;
  }

  function evaluatecriteria() {
      var radio1Checked = document.getElementById('radio1').checked;
      var radio2Checked = document.getElementById('radio2').checked;
      if (radio1Checked) {

          var edit1 = document.getElementById('IT6423').value;
          var edit2 = document.getElementById('IT6413').value;
          var edit3 = document.getElementById('IT4323').value;
          var edit4 = document.getElementById('IT4403').value;
          if (edit1 == "" || edit2 == "" || edit3 == "" ||edit4 == "") {
              alert("Kindly enter the grades in required fields");
              return;
          }
          edit1 = edit1.toUpperCase();
          edit2 = edit2.toUpperCase();
          edit3 = edit3.toUpperCase();
          edit4 = edit4.toUpperCase();
          var sub1 = getGpa(edit1);
          var sub2 = getGpa(edit2);
          var sub3 = getGpa(edit3);
          var sub4 = getGpa(edit4);
          var avg = (sub1 + sub2 + sub3 + sub4) / 4;
          if (avg > 3.2) {
              document.getElementById('res').style.display = "block";
              document.getElementById('res').innerHTML =
                  "Congratulations! Now you are eligible to apply for assistanships."
              document.getElementById('div4').style.display = "block";

          } else {
              document.getElementById('res').style.display = "block";
              document.getElementById('res').innerHTML =
                  "Sorry, you are not eligible for assistanships. Please apply next time."
          }
      } else if (radio2Checked) {
          var edit5 = document.getElementById("IT7113").value;
          var edit6 = document.getElementById("IT6713").value;
          var edit7 = document.getElementById('IT6733').value;
          var edit8 = document.getElementById('IT6773').value;
          if (edit5 == "" || edit6 == ""|| edit8 == "" ||edit7 == "" ) {
              alert("Kindly enter the grades in required fields");
              return;
          }
          edit5 = edit5.toUpperCase();
          edit6 = edit6.toUpperCase();
          edit7 = edit7.toUpperCase();
          edit8 = edit8.toUpperCase();
          var sub1 = getGpa(edit5);
          var sub2 = getGpa(edit6);
          var sub3 = getGpa(edit7);
          var sub4 = getGpa(edit8);
          var avg = (sub1 + sub2 + sub3 + sub4) / 4;
          if (avg > 3.7) {
              document.getElementById('res').style.display = "block";
              document.getElementById('res').innerHTML =
                  "Congratulations! Now you are eligible to apply for assistanships."
              document.getElementById('div4').style.display = "block";

          } else {
              document.getElementById('res').style.display = "block";
              document.getElementById('res').innerHTML =
                  "Sorry, you are not eligible for assistanships. Please apply next time."
          }
      }
  }
  </script>


</body>
</html>
