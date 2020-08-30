<!--------------------
          START - Breadcrumbs
          -------------------->
<ul class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="adm.php">Home</a>
    </li>
    <li class="breadcrumb-item">
        <span>Ketentuan Anak Asuh</span>
    </li>
    <!-- <li class="breadcrumb-item">
              <span>Laptop with retina screen</span>
            </li> -->
</ul>
<!--------------------
          END - Breadcrumbs
          -------------------->
<div class="content-panel-toggler">
    <i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span>
</div>
<div class="content-i">
    <div class="content-box">
        <div class="row">
            <div class="col-sm-12">
                <div class="element-wrapper">
                    <h6 class="element-header">
                        Ketentuan Anak Asuh
                    </h6>
                    <div class="element-wrapper">
                        <div class="element-box">
                            <form id="formValidate" action="<?php $_SERVER['PHP_SELF']; ?>" name='form' method="post" enctype="multipart/form-data">
                                <h4 class="form-header" align='center'>
                                    <u>DATA ANAK ASUH</u>
                                </h4>
                                <div class="form-desc" align='center'>
                                    <p>Anak Asuh Panti Asuhan PAKYM Surakarta</p>
                                </div>
                                <div class="form-group" align='center'>
                                    <button class="mr-2 mb-2 btn btn-primary" data-target="#onboardingWideFormModal" data-toggle="modal" type="button">Tambah Data Anak Asuh</button>
                                    <div aria-hidden="true" class="onboarding-modal modal fade animated" id="onboardingWideFormModal" role="dialog" tabindex="-1">
                                        <div class="modal-dialog modal-lg modal-centered" role="document">
                                            <div class="modal-content text-center">
                                                <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="close-label">Exit</span><span class="os-icon os-icon-close"></span></button>
                                                <div class="onboarding-side-by-side">
                                                    <div class="onboarding-media">
                                                        <img alt="" src="img/logo_pakym.png" width="180px">
                                                    </div>
                                                    <div class="onboarding-content with-gradient">
                                                        <h4 class="onboarding-title">
                                                            Tambah Data Anak Asuh
                                                        </h4>
                                                        <div class="onboarding-text">
                                                            Anak Asuh Panti Asuhan PAKYM Surakarta
                                                        </div>
                                                        <form id="formValidate" action="<?php $_SERVER['PHP_SELF']; ?>" name='form' method="post" enctype="multipart/form-data">
                                                            <div class="row">
                                                                <div class="col-sm-12" align="left">
                                                                    <div class="form-group">
                                                                        <label for="">No.</label>
                                                                        <input class="form-control" data-error="Data harus diisi" required="required" placeholder="Enter your full name..." type="text" value="">
                                                                        <div class="help-block form-text with-errors form-control-feedback"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-12" align="left">
                                                                        <div class="form-group">
                                                                            <label for="">Syarat</label>
                                                                            <input class="form-control" placeholder="Enter your full name..." type="text" value="">
                                                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-sm-12" align="left">
                                                                            <div class="form-group">
                                                                                <label for="">Tata Tertib</label>
                                                                                <input class="form-control" placeholder="Enter your full name..." type="text" value="">
                                                                                <div class="help-block form-text with-errors form-control-feedback"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm-12" align="left">
                                                                                <div class="form-group">
                                                                                    <label for="">Larangan</label>
                                                                                    <input class="form-control" placeholder="Enter your full name..." type="text" value="">
                                                                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-12">
                                                                                <div class="form-group" align='left'>
                                                                                    <!-- <button class="btn btn-outline-primary" type="button" name="button">Update Azas Panti Asuhan</button> -->
                                                                                    <input class="btn btn-primary" type="submit" name="submit" value="Tambah Data">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table id="dataTable1" width="100%" class="table table-striped table-lightfont">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Syarat</th>
                                                <th>Tata Tertib</th>
                                                <th>Larangan</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No.</th>
                                                <th>Syarat</th>
                                                <th>Tata Tertib</th>
                                                <th>Larangan</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> 