<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>SIGN UP</title>
    <link rel="stylesheet" href="rsignup.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <div class="container">
      <!--progress bar-->
      <header>NGO Form</header>
      <div class="progress-bar">
        <div class="step">
          <p>NGO</p>
          <div class="bullet">
            <span>1</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>Director</p>
          <div class="bullet">
            <span>2</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>Contact</p>
          <div class="bullet">
            <span>3</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>Submit</p>
          <div class="bullet">
            <span>4</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        
      </div>
<!--progress bar Ends-->

      <div class="form-outer">
        <form action="nsignupd.php" method="POST">
          <!--NGO INFORMATIN-->
          <div class="page slide-page">
            <div class="title">NGO:</div>
            <div class="field">
              <div class="label">NGO Name</div>
              <input type="text" name="name">
            </div>
            <div class="field">
              <div class="label" >Address</div>
              <input type="text" name="address">
            </div>
            <div class="field">
              <div class="label">Locality</div>
              <input type="text" name="locality">
            </div>
            <div class="field">
              <div class="label">Pincode</div>
              <input type="text" name="pincode">
            </div>
            <div class="field">
              <button class="firstNext next" >Next</button>
            </div>
          </div>
<!--Director information-->
          <div class="page">
            <div class="title">Director:</div>
            <div class="field">
              <div class="label">First Name</div>
              <input type="text" name="fname">
            </div>
            <div class="field">
              <div class="label">Last Name</div>
              <input type="text" name="lname">
            </div>
            <div class="field">
              <div class="label">Email</div>
              <input type="text" name="email">
            </div>
            <div class="field">
              <div class="label">Phone</div>
              <input type="Number" name="phone">
            </div>
            
            <div class="field btns">
              <button class="prev-1 prev">Previous</button>
              <button class="next-1 next">Next</button>
            </div>
          </div>
         <!--people information-->
          <div class="page">
            <div class="title">People</div>
              <div class="field">
                <div class="label">
                   Total
                </div>
                <input type="number" name="total">
             </div>
             <div class="title">Contact</div>
            <div class="field">
              <div class="label" >Website</div>
              <input type="text" name="websit">
            </div>
            <div class="field">
              <div class="label">E-Mail</div>
              <input type="text" name="mail">
            </div>
            <div class="field btns">
              <button class="prev-2 prev">Previous</button>
              <button class="next-2 next">Next</button>
            </div>
          </div>
          <!--sing up details-->

          <div class="page">
            <div class="title">Sign Up Details:</div>
            <div class="field">
              <div class="label">Username</div>
              <input type="text" name="username">
            </div>
            <div class="field">
              <div class="label"> New Password</div>
              <input type="password">
            </div><div class="field">
              <div class="label">Renter Password</div>
              <input type="password" name="pass">
            </div>
            <div class="field btns">
              <button class="prev-3 prev">Previous</button>
              <button class="submit" name="submit">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <script src="script.js"></script>

  </body>
</html>