<?php include ('master.php'); ?>
<?php include ('../database/customerorder.php'); ?>
<body>
   
<main class="main">

        <ol class="breadcrumb">
          <li class="breadcrumb-item">STEP 1: Order</li>
        </ol>
        

        <div class="container-fluid">
          <div class="animated fadeIn">


            <div class="row">
              <div class="col-lg-10">
                <div class="card">
                  <div class="card-header">
                    <strong>Booking Order</strong> Form</div>
                  <div class="card-body">
                    <form class="form-horizontal" action="" method="post">

                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Purchased Date :</label>
                        <div class="col-md-9">
                          <p class="form-control-static">Today</p>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Printing type :</label>
                        <div class="col-md-9 col-form-label">
                          <div class="form-check">
                            <input class="form-check-input" id="radio1" type="radio" value="1" name="jenis" required>
                            <label class="form-check-label" for="radio1">A4 Normal Print</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" id="radio2" type="radio" value="2" name="jenis" required>
                            <label class="form-check-label" for="radio2">Advanced Print</label>
                          </div>
                        </div>
                      </div>

                      <!--<div class="form-group row">
                        <label class="col-md-3 col-form-label" for="disabledSelect">Disabled Select</label>
                        <div class="col-md-9">
                          <select class="form-control" id="disabledSelect" disabled="">
                            <option value="0">Please select</option>
                            <option value="1">Option #1</option>
                            <option value="2">Option #2</option>
                            <option value="3">Option #3</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="select1">Able Select</label>
                        <div class="col-md-9">
                          <select class="form-control" id="select1" name="select1">
                            <option value="0">Please select</option>
                            <option value="1">Option #1</option>
                            <option value="2">Option #2</option>
                            <option value="3">Option #3</option>
                          </select>
                        </div>
                      </div>-->

                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Colour :</label>
                        <div class="col-md-9 col-form-label">
                          <div class="form-check">
                            <input class="form-check-input" id="radio1" type="radio" value="1" name="warna" required>
                            <label class="form-check-label" for="radio1">Black and White</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" id="radio2" type="radio" value="2" name="warna" required>
                            <label class="form-check-label" for="radio2">Colour</label>
                          </div>
                        </div>
                      </div>    
                      
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="textarea-input">Description</label>
                        <div class="col-md-9">
                          <textarea class="form-control" id="textarea-input" name="keterangan" rows="5" placeholder="Content.." required></textarea>
                        </div>
                      </div>
                              
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="file-input">File input</label>
                        <div class="col-md-9">
                          <input id="file-input" type="file" name="failorder">
                        </div>
                      </div><br><br>

                      <button class="btn btn-sm btn-primary" type="submit" name="submit">
                      <i class="fa fa-dot-circle-o"></i> Submit</button>
                    <button class="btn btn-sm btn-danger" type="reset">
                      <i class="fa fa-ban"></i> Reset</button>

                    </form>
                  </div>
                  <div class="card-footer">
                   
                  </div>
                </div>
              </div>


            </div>
            <!-- /.row-->

          </div>
        </div>
      </main>


  <footer class="app-footer">
      <div>
        <span>&copy; Syamsul Amri Bin Jamaludin B031710093</span>
      </div>
      <div class="ml-auto">
        <span>Projek Sarjana Muda 1</span>
      </div>
    </footer>

</body>