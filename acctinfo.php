<div class="profile-container1">
      <form method="POST" id='loginform' action="profile.php" onsubmit="saveInfo()" >
      <h1> Account Information </h1>  
      <div class="row g-3">
        <div class="col">
          <input type="text" name='username' id="inputUsername" class="form-control" placeholder="Username" required autofocus>
          <span name="error" class="error message" id="user_msg"> </span>
        </div>
      </div>

      <div class="row g-3">
        <div class="col">
          <input type="password" name='password' id="inputPassword" class="form-control" placeholder="Password" required>
          <span name="error" class="error message" id="pwd_msg"> </span>
          <div class="form-group showPassword">
            <input  type="checkbox" id="showPassword" /> Show password
          </div>
        </div>
    </div>

    <div class="row g-3">
      <div class="col">
        <input type="text" id='firstname' class="form-control" placeholder="First name" aria-label="First name">
        <span class="error message" id="fname_msg"></span>
      </div>
    </div>

    <div class="row g-3">
      <div class="col">
        <input type="text" id='lastname' class="form-control" placeholder="Last name" aria-label="Last name">
        <span class="error message" id="lname_msg"></span>
      </div>
    </div>

    <div class="row g-3">
      <div class="col">
        <input type="email" id="inputEmail" class="form-control" placeholder="Email Address" autofocus>
      </div>
    </div>

    <div class="text-center">
      <button type='submit' class="btn btn-lg btn-primary form-btn" id='save' >Save</button>
    </div
    </form>
      </div>
