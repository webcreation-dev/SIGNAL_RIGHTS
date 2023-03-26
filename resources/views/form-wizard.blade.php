<!DOCTYPE html>
<html lang="en">
  <x-head-crm />
  <body onload="startTime()">

    <x-loader-crm />

    <div class="page-wrapper compact-wrapper" id="pageWrapper">

      <x-header-crm />

      <!-- Page Body Start-->
      <div class="page-body-wrapper">

        <x-sidebar-crm />

        <div class="page-body">
            <div class="container-fluid">
              <div class="page-title">
                <div class="row">
                  <div class="col-6">
                    <h3>Step Form Wizard</h3>
                  </div>
                  <div class="col-6">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html">
                          <svg class="stroke-icon">
                            <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                          </svg></a></li>
                      <li class="breadcrumb-item">Form Layout</li>
                      <li class="breadcrumb-item active"> Step Form Wizard</li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
            <!-- Container-fluid starts-->
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-12">
                  <div class="card">
                    <div class="card-header">
                        <h5>Browser defaults</h5><span>Not interested in custom validation feedback messages or writing JavaScript to change form behaviors? All good, you can use the browser defaults. Try submitting the form below. Depending on your browser and OS, you’ll see a slightly different style of feedback.</span><span>While these feedback styles cannot be styled with CSS, you can still customize the feedback text through JavaScript.</span>
                      </div>
                    <div class="card-body">
                      <div class="stepwizard">
                        <div class="stepwizard-row setup-panel">
                          <div class="stepwizard-step"><a class="btn btn-primary" href="#step-1">1</a>
                            <p>Step 1</p>
                          </div>
                          <div class="stepwizard-step"><a class="btn btn-light" href="#step-2">2</a>
                            <p>Step 2</p>
                          </div>
                          <div class="stepwizard-step"><a class="btn btn-light" href="#step-3">3</a>
                            <p>Step 3</p>
                          </div>
                          <div class="stepwizard-step"><a class="btn btn-light" href="#step-4">4</a>
                            <p>Step 4</p>
                          </div>
                        </div>
                      </div>

                      <form action="#" method="POST">

                        <div class="setup-content" id="step-1">
                            <div class="row g-3">
                                <div class="col-md-4">
                                  <label class="form-label" for="validationDefault01">First name</label>
                                  <input class="form-control" id="validationDefault01" type="text" placeholder="First name" required="">
                                </div>
                                <div class="col-md-4">
                                  <label class="form-label" for="validationDefault02">Last name</label>
                                  <input class="form-control" id="validationDefault02" type="text" placeholder="Last name" required="">
                                </div>
                                <div class="col-md-4 mb-3">
                                  <label class="form-label" for="validationDefaultUsername">Username</label>
                                  <div class="input-group"><span class="input-group-text" id="inputGroupPrepend2">@</span>
                                    <input class="form-control" id="validationDefaultUsername" type="text" placeholder="Username" aria-describedby="inputGroupPrepend2" required="">
                                  </div>
                                </div>
                              </div>
                              <div class="row g-3">
                                <div class="col-md-6">
                                  <label class="form-label" for="validationDefault03">City</label>
                                  <input class="form-control" id="validationDefault03" type="text" placeholder="City" required="">
                                </div>
                                <div class="col-md-3">
                                  <label class="form-label" for="validationDefault04">State</label>
                                  <select class="form-select" id="validationDefault04" required="">
                                    <option selected="" disabled="" value="">Choose...</option>
                                    <option>...</option>
                                  </select>
                                </div>
                                <div class="col-md-3 mb-3">
                                  <label class="form-label" for="validationDefault05">Zip</label>
                                  <input class="form-control" id="validationDefault05" type="text" placeholder="Zip" required="">
                                </div>
                            </div>
                            <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                        </div>

                        <div class="setup-content" id="step-2">
                            <div class="row g-3">
                                <div class="col-md-4">
                                  <label class="form-label" for="validationDefault01">First name</label>
                                  <input class="form-control" id="validationDefault01" type="text" placeholder="First name" required="">
                                </div>
                                <div class="col-md-4">
                                  <label class="form-label" for="validationDefault02">Last name</label>
                                  <input class="form-control" id="validationDefault02" type="text" placeholder="Last name" required="">
                                </div>
                                <div class="col-md-4 mb-3">
                                  <label class="form-label" for="validationDefaultUsername">Username</label>
                                  <div class="input-group"><span class="input-group-text" id="inputGroupPrepend2">@</span>
                                    <input class="form-control" id="validationDefaultUsername" type="text" placeholder="Username" aria-describedby="inputGroupPrepend2" required="">
                                  </div>
                                </div>
                              </div>
                              <div class="row g-3">
                                <div class="col-md-6">
                                  <label class="form-label" for="validationDefault03">City</label>
                                  <input class="form-control" id="validationDefault03" type="text" placeholder="City" required="">
                                </div>
                                <div class="col-md-3">
                                  <label class="form-label" for="validationDefault04">State</label>
                                  <select class="form-select" id="validationDefault04" required="">
                                    <option selected="" disabled="" value="">Choose...</option>
                                    <option>...</option>
                                  </select>
                                </div>
                                <div class="col-md-3 mb-3">
                                  <label class="form-label" for="validationDefault05">Zip</label>
                                  <input class="form-control" id="validationDefault05" type="text" placeholder="Zip" required="">
                                </div>
                            </div>
                            <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                        </div>
                        <div class="setup-content" id="step-3">
                            <div class="row g-3">
                                <div class="col-md-4">
                                  <label class="form-label" for="validationDefault01">First name</label>
                                  <input class="form-control" id="validationDefault01" type="text" placeholder="First name" required="">
                                </div>
                                <div class="col-md-4">
                                  <label class="form-label" for="validationDefault02">Last name</label>
                                  <input class="form-control" id="validationDefault02" type="text" placeholder="Last name" required="">
                                </div>
                                <div class="col-md-4 mb-3">
                                  <label class="form-label" for="validationDefaultUsername">Username</label>
                                  <div class="input-group"><span class="input-group-text" id="inputGroupPrepend2">@</span>
                                    <input class="form-control" id="validationDefaultUsername" type="text" placeholder="Username" aria-describedby="inputGroupPrepend2" required="">
                                  </div>
                                </div>
                              </div>
                              <div class="row g-3">
                                <div class="col-md-6">
                                  <label class="form-label" for="validationDefault03">City</label>
                                  <input class="form-control" id="validationDefault03" type="text" placeholder="City" required="">
                                </div>
                                <div class="col-md-3">
                                  <label class="form-label" for="validationDefault04">State</label>
                                  <select class="form-select" id="validationDefault04" required="">
                                    <option selected="" disabled="" value="">Choose...</option>
                                    <option>...</option>
                                  </select>
                                </div>
                                <div class="col-md-3 mb-3">
                                  <label class="form-label" for="validationDefault05">Zip</label>
                                  <input class="form-control" id="validationDefault05" type="text" placeholder="Zip" required="">
                                </div>
                            </div>
                            <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                        </div>
                        <div class="setup-content" id="step-4">
                            <div class="row g-3">
                                <div class="col-md-4">
                                  <label class="form-label" for="validationDefault01">First name</label>
                                  <input class="form-control" id="validationDefault01" type="text" placeholder="First name" required="">
                                </div>
                                <div class="col-md-4">
                                  <label class="form-label" for="validationDefault02">Last name</label>
                                  <input class="form-control" id="validationDefault02" type="text" placeholder="Last name" required="">
                                </div>
                                <div class="col-md-4 mb-3">
                                  <label class="form-label" for="validationDefaultUsername">Username</label>
                                  <div class="input-group"><span class="input-group-text" id="inputGroupPrepend2">@</span>
                                    <input class="form-control" id="validationDefaultUsername" type="text" placeholder="Username" aria-describedby="inputGroupPrepend2" required="">
                                  </div>
                                </div>
                              </div>
                              <div class="row g-3">
                                <div class="col-md-6">
                                  <label class="form-label" for="validationDefault03">City</label>
                                  <input class="form-control" id="validationDefault03" type="text" placeholder="City" required="">
                                </div>
                                <div class="col-md-3">
                                  <label class="form-label" for="validationDefault04">State</label>
                                  <select class="form-select" id="validationDefault04" required="">
                                    <option selected="" disabled="" value="">Choose...</option>
                                    <option>...</option>
                                  </select>
                                </div>
                                <div class="col-md-3 mb-3">
                                  <label class="form-label" for="validationDefault05">Zip</label>
                                  <input class="form-control" id="validationDefault05" type="text" placeholder="Zip" required="">
                                </div>
                            </div>
                            <button class="btn btn-success pull-right" type="submit">Finish!</button>

                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Container-fluid Ends-->
          </div>


        <x-footer-dashboard />
        <x-footer-home />
  </body>
</html>
