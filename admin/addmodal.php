<?php 
include_once 'include/header.php';
include_once 'include/sidebar.php';
?>
 <div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
          <h3 class="page-title"> Add New Plan </h3>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Plan</a></li>
              <li class="breadcrumb-item active" aria-current="page"> Add Plan</li>
            </ol>
          </nav>
        </div>
        <div class="row">
          <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Add New PLan</h4>
                <form class="forms-sample">
                  <div class="form-group">
                    <label for="exampleInputName1">SELECT BRAND</label>
                    <select name="brandId" id="">
                      <option value=""> Select Brand</option>
                      <?
                      // SELCT QUERY
                      while (condition) 
                      {?>
                        <option value="brandIdHere"> car_brand</option>
                      <?
                      }
                      ?>
                      
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputName1">Plan Title</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleTextarea1">Plan Description</label>
                    <textarea class="form-control" id="exampleTextarea1" rows="4" placeholder="Plan Description Here"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="basePriceInput">Base Price</label>
                    <input type="number" class="form-control" id="basePriceInput" placeholder="Base Price" min="1" >
                  </div>
                  <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="img[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                          </span>
                        </div>
                      </div>
                  <button type="submit" class="btn btn-primary mr-2">Submit</button>
                  <button class="btn btn-light">Cancel</button>
                </form>
              </div>
            </div>
          </div>             
      </div>
    </div>
</div>
  
<?php 
include_once 'include/footer.php';
?>
