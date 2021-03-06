<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/boxicons.min.css" rel="stylesheet">
    <!-- <link href="../css/custom.css" rel="stylesheet"> -->
    <link href="../css/footer.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet"/>
    <style>

               .text-secondary{
                  color: rgb(121, 126, 197);
               }
                .text-prof{
                    color: rgb(110, 115, 192);
                }

    </style>
</head>
<body class="bg-light" style="color: rgb(102, 62, 96);">
    <main class="container">
        <!-- top nav start -->
        <div class="row mx-1 bg-white my-3 col-12 d-flex justify-content-lg-between shadow">
            <nav aria-label="breadcrumb" class="main-breadcrumb col-6 p-3">
              <ol class="breadcrumb ms-3" >
                <li class="breadcrumb-item fs-6 fw-bold"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active fs-6 fw-bold" aria-current="page"> Profile</li>
              </ol>

            </nav>
            <div class="nav-item dropdown col-6  p-2 d-flex justify-content-end">
                <a class="nav-link dropdown-toggle fs-6 fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Hadeel Jameel
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item fs-6 fw-bold" href="{{ route('member') }}">See Members</a></li>
                <li><a class="dropdown-item fs-6 fw-bold" href="{{ route('home') }}">LogOut</a></li>
                </ul>
              </div>

        </div>
         <!-- top nav end -->

        <!-- side sec -->
        <div class="row">
            <!-- Dashboard Nav Section -->
            <div class="col-lg-4 col-md-4 col-12 mb-3">
            <div class="card shadow p-3 pt-0 bg-opacity-0">
                <!-- user avatar -->
                <div class="col-12 d-flex justify-content-center align-items-center p-4 position-relative">
                <img src="../img/nizuoo.jpg"
                    class="user-avatar img-fluid rounded-circle"
                    alt="user avatar"style="width: 70%;"/>
                <a role="button" data-bs-toggle="modal"data-bs-target="#avatar-edit-model"
                        class="position-absolute bg-white border border-primary rounded d-flex justify-content-center align-items-lg-center rounded-circle"
                        style="bottom: 10%;left: 35%; width: 30px;height: 30px;">
                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square " viewBox="0 0 16 16">
                      <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                      <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                    </svg>
                </a>
                </div>

                <!-- name -->
                <div class="text-center">
                <a class="text-prof fs-5 fw-bold" href="">Hadeel Jameel</a>
                <p>Full Stack Developer</p>
                </div>

                <!-- dashboard nav -->
                <nav class="card px-3 py-4 mt-3 d-flex gap-3">
                <!-- info -->
                <a
                    href="#" id="personal"
                    class="text-prof d-flex align-items-center d-inline-block ms-3 border-bottom pb-2"
                >
                    <i class="fa fa-user pe-2"></i>
                    <span class="fs-6 fw-bold">Personal Info</span>
                </a>

                <!-- skills -->
                <a
                    href="#" id="skills"
                    class="text-secondary d-flex align-items-center d-inline-block ms-3 border-bottom pb-2"
                >
                    <i class="fa fa-shekel-sign pe-2"></i>
                    <span class="fs-6 fw-bold">Skills</span>
                </a>

                <!-- experience -->
                <a
                    href="#" id="experience"
                    class="text-secondary d-flex align-items-center d-inline-block ms-3 border-bottom pb-2"
                >
                    <i class="fa fa-object-group pe-2"></i>
                    <span class="fs-6 fw-bold">Experience</span>
                </a>

                <!-- Qualifications -->
                <a
                    href="#" id="study"
                    class="text-secondary d-flex align-items-center d-inline-block ms-3 border-bottom pb-2"
                >
                    <i class="fa fa-book pe-2"></i>
                    <span class="fs-6 fw-bold">Qualifications</span>
                </a>

                <!--   -->
                <!-- <a
                    href="#" id="courses"
                    class="text-secondary d-flex align-items-center d-inline-block ms-3 border-bottom pb-2"> <i class="fa fa-paperclip pe-2"></i>
                    <span class="fs-6 fw-bold">Courses</span>
                </a> -->
                </nav>
            </div>
            </div>

              <!-- info Section -->
            <section class="col-lg-8 col-md-8 col-12" id="perso">
              <div class="card shadow p-3">
                <div class="card-header bg-transparent d-flex justify-content-between align-items-center">
                  <h3 class="fw-bold text-prof">Info</h3>
                  <a role="button" data-bs-toggle="modal"data-bs-target="#edit-info"
                        class="  border border-primary rounded d-flex justify-content-center align-items-lg-center rounded-circle"
                        style="bottom: 10%;left: 35%; width: 30px;height: 30px;">
                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-pencil-square " viewBox="0 0 16 16">
                      <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                      <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                    </svg>
                </a>


                </div>

                <div class="card-body">
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Full Name</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        Hadeel Jameel
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Email</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        hadeel@gmail.com
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Gender</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        Female
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Phone</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        (+697) 777 777 777
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Address</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        Yemen, Taiz-almasbah street
                      </div>
                    </div>
                    <hr>
                     <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Birthday</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        22/2/2022
                      </div>
                    </div>
                  </div>
              </div>
            </section>

            <!-- Skills Section -->
            <section class="col-lg-8 col-md-8 col-12" id="skil">
            <div class="card shadow p-3">
                <div
                class="card-header bg-transparent d-flex justify-content-between align-items-center"
                >
                <h3 class="fw-bold text-prof">Skills</h3>

                <a
                    role="button"
                    data-bs-toggle="modal"
                    data-bs-target="#add-skill"
                >
                    <i class="fa fa-plus fw-bold fs-5 text-prof"></i>
                </a>
                </div>

                <div class="card-body p-0">
                <div class="row">
                    <!--  skill 1 -->
                    <div class="col-12 mb-2">
                    <div class="shadow-sm p-3">
                        <div class="d-flex justify-content-between mb-2">
                        <h5>Web development</h5>

                        <div>
                            <a
                            class="mx-2"
                            role="button"
                            data-bs-toggle="modal"
                            data-bs-target="#edit-skill"
                            >
                            <i class="fa fa-pencil-alt text-secondary"></i>
                            </a>

                            <a
                            role="button"
                            data-bs-toggle="modal"
                            data-bs-target="#delete"
                            >
                            <i class="fa fa-trash text-danger"></i>
                            </a>
                        </div>
                        </div>

                        <div class="progress">
                        <div
                            class="progress-bar"
                            role="progressbar"
                            style="width: 100%"
                            aria-valuenow="100"
                            aria-valuemin="0"
                            aria-valuemax="100"
                        >
                            100%
                        </div>
                        </div>
                    </div>
                    </div>

                    <!--  skill 2 -->
                    <div class="col-12 mb-2">
                    <div class="shadow-sm p-3">
                        <div class="d-flex justify-content-between mb-2">
                        <h5>Database</h5>

                        <div>
                            <a
                            class="mx-2"
                            role="button"
                            data-bs-toggle="modal"
                            data-bs-target="#edit-skill"
                            >
                            <i class="fa fa-pencil-alt text-secondary"></i>
                            </a>

                            <a
                            role="button"
                            data-bs-toggle="modal"
                            data-bs-target="#delete"
                            >
                            <i class="fa fa-trash text-danger"></i>
                            </a>
                        </div>
                        </div>

                        <div class="progress">
                        <div
                            class="progress-bar"
                            role="progressbar"
                            style="width: 100%"
                            aria-valuenow="100"
                            aria-valuemin="0"
                            aria-valuemax="100"
                        >
                            100%
                        </div>
                        </div>
                    </div>
                    </div>

                    <!--  skill 3 -->
                    <div class="col-12 mb-2">
                    <div class="shadow-sm p-3">
                        <div class="d-flex justify-content-between mb-2">
                        <h5>Team player</h5>

                        <div>
                            <a
                            class="mx-2"
                            role="button"
                            data-bs-toggle="modal"
                            data-bs-target="#edit-skill"
                            >
                            <i class="fa fa-pencil-alt text-secondary"></i>
                            </a>

                            <a
                            role="button"
                            data-bs-toggle="modal"
                            data-bs-target="#delete"
                            >
                            <i class="fa fa-trash text-danger"></i>
                            </a>
                        </div>
                        </div>

                        <div class="progress">
                        <div
                            class="progress-bar"
                            role="progressbar"
                            style="width: 100%"
                            aria-valuenow="100"
                            aria-valuemin="0"
                            aria-valuemax="100"
                        >
                            100%
                        </div>
                        </div>
                    </div>
                    </div>

                    <!--  skill 4 -->
                    <div class="col-12 mb-2">
                    <div class="shadow-sm p-3">
                        <div class="d-flex justify-content-between mb-2">
                        <h5>Generous</h5>

                        <div>
                            <a
                            class="mx-2"
                            role="button"
                            data-bs-toggle="modal"
                            data-bs-target="#addSkill"
                            >
                            <i class="fa fa-pencil-alt text-secondary"></i>
                            </a>

                            <a
                            role="button"
                            data-bs-toggle="modal"
                            data-bs-target="#delete"
                            >
                            <i class="fa fa-trash text-danger"></i>
                            </a>
                        </div>
                        </div>

                        <div class="progress">
                        <div
                            class="progress-bar"
                            role="progressbar"
                            style="width: 100%"
                            aria-valuenow="100"
                            aria-valuemin="0"
                            aria-valuemax="100"
                        >
                            100%
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </section>

            <!-- Experience section -->
            <section class="col-lg-8 col-md-8 col-12" id="expe">
              <div class="card p-3">
              <div  class="card-header bg-transparent d-flex justify-content-between align-items-center">
                <h3 class="fw-bold text-prof">Experience</h3>
                <a  role="button"
                    data-bs-toggle="modal"
                    data-bs-target="#add-exper">
                    <i class="fa fa-plus fw-bold fs-5 text-prof"></i>
                </a>
                </div>

                  <div class="card-body">

                  <!--  Qualification  1-->
                  <div class="col-12 mb-5">
                      <div class="shadow-sm p-3">
                      <a href="#">
                          <h4>
                          <b>Engineering</b>
                          <span class="fs-5">Taiz univercity</span>
                          </h4>
                      </a>

                      <a href="#" class="text-black-50 fs-6 d-flex flex-column">
                          <h6 class="text-black">Education</h6>
                          <span>october 2021</span>
                      </a>
                      </div>
                  </div>
                  </div>
                  <!-- Qualification 2 -->
                  <div class="col-12 mb-5">
                      <div class="shadow-sm p-3">
                      <a href="#">
                          <h4>
                          <b>Front end</b>
                          <span class="fs-5">alzeroSchool</span>
                          </h4>
                      </a>

                      <a href="#" class="text-black-50 fs-6 d-flex flex-column">
                          <h6 class="text-black">Traning</h6>
                          <span>July 2018</span>
                      </a>
                      </div>
                  </div>

                  <!-- Qualification 3 -->
                  <div class="col-12 mb-5">
                      <div class="shadow-sm p-3">
                      <a href="#">
                          <h4>
                          <b>back end</b>
                          <span class="fs-5">alzeroSchool</span>
                          </h4>
                      </a>

                      <a href="#" class="text-black-50 fs-6 d-flex flex-column">
                          <h6 class="text-black">Traning</h6>
                          <span>July 2018</span>
                      </a>
                      </div>
                  </div>


              </div>
            </section>

            <!-- Qualifications section -->
            <section class="col-lg-8 col-md-8 col-12" id="Edu">
              <div class="card p-3">
                  <div class="card-header bg-transparent d-flex justify-content-between align-items-center">            <h1 class="fs-3 fw-bold text-prof">Qualifications</h1>
                   <a  role="button"
                    data-bs-toggle="modal"
                    data-bs-target="#add-qual">
                    <!-- <i class="fa fa-plus fw-bold fs-5 text-prof"></i> -->
                    <i class="fa fa-plus fw-bold fs-5 text-prof"></i>
                </a>
                  <!-- <i class="fa fa-plus fw-bold fs-5 text-prof"></i> -->
                  </div>

                  <div class="card-body">

                  <!--  Qualification  1-->
                  <div class="col-12 mb-5">
                      <div class="shadow-sm p-3">
                      <a href="#">
                          <h4>
                          <b>Engineering</b>
                          <span class="fs-5">Taiz univercity</span>
                          </h4>
                      </a>

                      <a href="#" class="text-black-50 fs-6 d-flex flex-column">
                          <h6 class="text-black">Education</h6>
                          <span>october 2021</span>
                      </a>
                      </div>
                  </div>
                  </div>
                  <!-- Qualification 2 -->
                  <div class="col-12 mb-5">
                      <div class="shadow-sm p-3">
                      <a href="#">
                          <h4>
                          <b>Front end</b>
                          <span class="fs-5">alzeroSchool</span>
                          </h4>
                      </a>

                      <a href="#" class="text-black-50 fs-6 d-flex flex-column">
                          <h6 class="text-black">Traning</h6>
                          <span>July 2018</span>
                      </a>
                      </div>
                  </div>

                  <!-- Qualification 3 -->
                  <div class="col-12 mb-5">
                      <div class="shadow-sm p-3">
                      <a href="#">
                          <h4>
                          <b>back end</b>
                          <span class="fs-5">alzeroSchool</span>
                          </h4>
                      </a>

                      <a href="#" class="text-black-50 fs-6 d-flex flex-column">
                          <h6 class="text-black">Traning</h6>
                          <span>July 2018</span>
                      </a>
                      </div>
                  </div>


              </div>
            </section>


        </div>

    </main>

    <!-- Edit user avatar image model -->
    <div
      class="modal fade"
      id="avatar-edit-model"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-3">
          <!-- model header -->
          <div class="modal-headerd-flex justify-content-between align-items-center">
            <h4 class="modal-title fw-bold text-center" id="exampleModalLabel">
              Edit image profile
            </h4>

            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>

          <!-- model body -->
          <div class="modal-body">
            <form class="g-3">
              <div class="input-group mb-3">
                <input type="file" class="form-control" id="inputGroupFile02" />
              </div>
            </form>
          </div>

          <!-- model footer -->
          <div class="modal-footer">
            <button type="button" class="btn bg-primary text-white">
              update
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- edit user info -->
    <div
          class="modal fade"
          id="edit-info"
          tabindex="-1"
          aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content p-3">
        <div class="modal-header">
          <h4 class="modal-title fw-bold text-center" id="exampleModalLabel">
            Edit User Info
          </h4>

          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>

        <div class="modal-body">
          <form class="row g-3">
            <div class="col-6">
              <!-- first name -->
              <div class="input-group">
                  <input
                  type="text"
                  class="form-control"
                  placeholder="First Name"
                  aria-label="fName"
                  aria-describedby="addon-wrapping"
                  required
                  value=""
                  />
              </div>
              </div>

              <!-- last name -->
              <div class="col-6">
              <div class="input-group">
                  <input
                  type="text"
                  class="form-control l"
                  placeholder="Last Name"
                  aria-label="lName"
                  aria-describedby="addon-wrapping"
                  required
                  value=""
                  />
              </div>
              </div>

              <!-- email -->
              <div class="col-12">
              <div class="input-group">
                  <input
                  type="email"
                  class="form-control"
                  placeholder="Email"
                  aria-label="email"
                  aria-describedby="addon-wrapping"
                  required
                  value=""
                  />
              </div>
              </div>

              <!-- gender -->
              <div class="col-6">
              <div class="input-group">
                  <select
                  class="form-select"
                  aria-label="Default select example"
                  required
                  >
                  <option selected disabled>Gender</option>
                  <option  value="1">Female</option>
                  <option value="2">Male</option>
                  </select>
              </div>
              </div>

              <!-- phone number -->
              <div class="col-6">
              <div class="input-group">
                  <input
                  type="text"
                  class="form-contro"
                  placeholder="Phone Number"
                  aria-label="phone"
                  aria-describedby="addon-wrapping"
                  required
                  value=""
                  />
              </div>
              </div>

              <!-- Address  -->
              <div class="col-6">
              <div class="input-group">
                    <input
                  type="text"
                  class="form-control l"
                  placeholder="Address"
                  aria-label="lName"
                  aria-describedby="addon-wrapping"
                  required
                  value=""
                  />
              </div>
              </div>

              <!-- date -->
              <div class="col-6">
              <div class="input-group">
                  <input
                  type="date"
                  class="form-control"
                  value="2/22/2022"
                  />
              </div>
              </div>
          </form>
        </div>

        <div class="modal-footer">
          <button type="button" class=" col-12 btn bg-primary text-white">Save</button>
        </div>
      </div>
      </div>
    </div>


    <!-- add skill Modal  -->
    <div
      class="modal fade"
      id="add-skill"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-3">
          <div class="modal-header">
            <h4 class="modal-title fw-bold text-center" id="exampleModalLabel">
              Add Skill
            </h4>

            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>

          <div class="modal-body">
            <form class="row g-3">
              <input
                type="text"
                class="form-control rounded-pill"
                id="skill"
                placeholder="Skill"
              />
              <input type="range" class="form-range" id="customRange1" />
            </form>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn bg-primary text-white">add</button>
          </div>
        </div>
      </div>
    </div>

    <!-- edit skill Modal  -->
    <div
      class="modal fade"
      id="edit-skill"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-3">
          <div class="modal-header">
            <h4 class="modal-title fw-bold text-center" id="exampleModalLabel">
              Edit Skill
            </h4>

            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>

          <div class="modal-body">
            <form class="row g-3">
              <input
                type="text"
                class="form-control rounded-pill"
                id="skill"
                placeholder="Skill"
              />
              <input type="range" class="form-range" id="customRange1" />
            </form>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn bg-primary text-white">
              Edit
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Delete skill modal -->
    <div
      class="modal fade"
      id="delete"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div
            class="modal-body fw-bold d-flex justify-content-lg-center align-items-center flex-column"
          >
            <i class="bi bi-exclamation-circle fs-1 text-danger"></i>
            <h3 class="fs-4">Do you want to delete?</h3>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-primary"
              data-bs-dismiss="modal"
            >
              No
            </button>
            <button type="button" class="btn btn-danger">Yes</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Add Experience -->
    <div
          class="modal fade"
          id="add-exper"
          tabindex="-1"
          aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content p-3">
        <div class="modal-header">
          <h4 class="modal-title fw-bold text-center" id="exampleModalLabel">
            Edit Experience
          </h4>

          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>

        <div class="modal-body">
          <form class="row g-3">
            <div class="col-6">
              <!--  name -->
              <div class="input-group">
                  <input
                  type="text"
                  class="form-control"
                  placeholder="experience title"
                  aria-label="fName"
                  aria-describedby="addon-wrapping"
                  required
                  value=""
                  />
              </div>
              </div>

              <!-- experience background -->
              <div class="col-6">
              <div class="input-group">
                  <input
                  type="text"
                  class="form-control l"
                  placeholder="experience background"
                  aria-label="lName"
                  aria-describedby="addon-wrapping"
                  required
                  value=""
                  />
              </div>
              </div>


              <!-- Type edu or cusrs  -->
              <div class="col-6">
              <div class="input-group">
                    <input
                  type="text"
                  class="form-control l"
                  placeholder="Traning or Education"
                  aria-label="lName"
                  aria-describedby="addon-wrapping"
                  required
                  value=""
                  />
              </div>
              </div>

              <!-- date -->
              <div class="col-6">
              <div class="input-group">
                  <input
                  type="date"
                  class="form-control"
                  value="2/22/2022"
                  />
              </div>
              </div>
          </form>
        </div>

        <div class="modal-footer">
          <button type="button" class=" col-12 btn bg-primary text-white">Add</button>
        </div>
      </div>
      </div>
    </div>








     <script src="../js/bootstrap.bundle.min.js"></script>
     <script src="../js/jquery.min.js"></script>
     <script>
        // $('personal').click($('pp').hide());
        $(document).ready(function(){

        $("#wrk,#skil,#Edu,#expe,#curs,#Edpers").hide();


        });

        $("#personal").click(function(){
        $("#wrk,#skil,#Edu,#expe,#curs,#Edpers").hide();
        $("#perso").show();



        });


        $("#Edit").click(function(){
        $("#wrk,#skil,#Edu,#expe,#curs,#Edpers,#perso").hide();
        $("#Edpers").show();
        });

        $("#saveEd").click(function(){
        $("#wrk,#skil,#Edu,#expe,#curs,#Edpers,#Edpers").hide();
        $("#perso").show();
        });

        $("#skills").click(function(){
        $("#wrk,#perso,#Edu,#expe,#curs,#Edpers").hide();
        $("#skil").show();


        });

        $("#experience").click(function(){
        $("#wrk,#perso,#Edu,#skil,#curs,#Edpers").hide();
        $("#expe").show();


        });

        $("#study").click(function(){
        $("#wrk,#perso,#expe,#skil,#curs,#Edpers").hide();
        $("#Edu").show();


        });

        $("#courses").click(function(){
        $("#wrk,#perso,#expe,#skil,#Edu,#Edpers").hide();
        $("#curs").show();

        });
    </script>


</body>
</html>
