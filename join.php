<!DOCTYPE html>
<html>
<head>
    <title>Join Us</title>
    <meta name="description" content="Apply to be a part of Bruin Ventures.">


<?php
    include 'head.php';
?>

<body>
  <main>
    <section class=" section-shaped section-sm my-0 mb-0;">
      <div class="shape shape-style-1 bg-gradient-danger">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="container pt-5 mb-4">
        <div class="row justify-content-center">
          <div class="col-lg-8 ">
            <div class="card bg-secondary shadow border-0">
              <div class="card-body px-lg-5 py-lg-5">
                  <div class="text-center text-muted mb-5">
                      <a href="./index.html">
                        <img src="./assets/img/brand/logo.png" width="200px">
                      </a>
                  </div>
                <div class="text-center text-muted mb-2">
                  <small>Deadline to apply is 11:59pm on Tuesday, October 9th.</small>
                </div>
                <form role="form" class="pb-0 mt-4">
                  <div class="form-group mb-3">
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fa fa-user"></i></span>
                        </div>
                        <input class="form-control" placeholder="First Name" type="name" required>
                        <input class="form-control" placeholder="Last Name" type="name" required>
                     </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                        </div>
                        <input class="form-control" placeholder="Email" type="email" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fa fa-phone"></i></span>
                        </div>
                        <input class="form-control" placeholder="Phone Number" type="phone" required>
                    </div>
                  </div>
                  <div class="form-group">
                     <small class="description"></small>
                    <div class="input-group input-group-alternative">

                      <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fa fa-graduation-cap"></i></span>
                        </div>
                        <input class="form-control" placeholder="Major" type="" required>

                        <input class="form-control" placeholder="Year (1st, 2nd, etc.)" type="" required>

                    </div>
                  </div>
                  <div class="form-group">
                     <small class="description">What are you passionate about? <span class="font-weight-light">(Optional)</span></small>
                    <div class="input-group input-group-alternative">

                    <div class="input-group-prepend">
                          <span class="input-group-text"></span>
                        </div>
                        <textarea id="q2" maxlength="750" resize="none" cols="40" rows="5" class="form-control" placeholder=""></textarea>
                    </div>
                    <span id="q2_warning" class="text-warning" style="display:none;">Character Limit Reached</span>
                  </div>
                  <div class="form-group">
                     <small class="description">BV members are know to be goal-oriented. How would joining BV contribute to your aspirations? <span class="font-weight-light">(Optional)</span></small>
                    <div class="input-group input-group-alternative">

                      <div class="input-group-prepend">
                          <span class="input-group-text"></span>
                        </div>
                        <textarea id="q1" maxlength="750" resize="none" cols="40" rows="5" class="form-control" placeholder=""></textarea>

                    </div>
                    <span id="q1_warning" class="text-warning" style="display:none;">Character Limit Reached</span>
                  </div>

                  <div class="form-group">
                      <small class="description">Resume Upload</small>
                      <div class="text-left">
                              <input type="file" class="btn btn-success" style="font-size:10px;" required>
                      </div>
                  </div>

                  <div class="custom-control custom-control-alternative custom-checkbox mt-5 text-center">
                    <input class="custom-control-input" id=" customCheckLogin" type="checkbox" required >
                    <label class="custom-control-label" for=" customCheckLogin">
                      <span>I have completed this form fully and honestly.</span>
                    </label>
                  </div>
                  <div class="text-center" width="100%" >
                          <input type="submit" class="btn btn-primary mt-4 mb-0 px-5" >
                  </div>
                  <div class="text-center mt-2 text-light mx-3" >
                      <small class="description">Your submission will be considered for the current (or next) requirement cycle.</small>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>
  <footer>

  </footer>
  <!-- Core -->
  <script src="./assets/vendor/jquery/jquery.min.js"></script>
  <script src="./assets/vendor/popper/popper.min.js"></script>
  <script src="./assets/vendor/bootstrap/bootstrap.min.js"></script>
  <script src="./assets/vendor/headroom/headroom.min.js"></script>
  <!-- Argon JS -->
  <script src="./assets/js/argon.js?v=1.0.0"></script>

<script>
    $(document).ready(function(){ //check document ready

    });
</script>

</body>

</html>
