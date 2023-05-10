<!DOCTYPE html>
<style>
    .table-hover-q tbody tr:hover {
     color: #fff;
     background-color: #6493fa; /*  rgba(0, 0, 0, 0.075); */
    }
</style>
<html lang="en">
 @include('layouts.header')

  <body class="bg-white" id="body">
    <div class="row mt-2">
        <div class="col-2 text-right">
            <h1>LOGO</h1>
        </div>
       <div class="col-8">   
            <h5> <b> RFID-BASED LIBRARY ATTENDANCE AND <br> EVALUATION MONITORING SYSTEM WITH DATA ANALYTICS </b></h5> 
        </div>
        <div class="col-2"> 
            <label>March 2, 2023</label> <br>  
            <label>Thursday, 2:11PM</label>   
        </div>
        <div class="col-12">
            <hr>
            <h1 class="text-center">ANNOUNCEMENT</h1>
            <hr>
        </div>
    </div>
    <div class="row mx-2">
      <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-6">
            <div class="card"  style="height: 80vh;">
                <div class="card-header bg-info-dark  mb-1 text-center">
                    <h2> <b> WELCOME TO </b></h2>
                    <h2> <b> UNIVERSITY LIBRARY </b></h2>
                </div>
                <div class="card-body bg-info">

                </div>
            </div>
        </div>
        <div class="col-xl-9 col-lg-8 col-md-6 col-sm-6 col-xs-6">
        <table id="productsTable" class="table table-hover-q table-product" style="width:100%">
                          <thead class="bg-info-dark">
                            <tr>
                              <th>Name</th>
                              <th>ID Number</th>
                              <th>Program</th>
                              <th>College</th>
                              <th>Gender</th>
                              <th>Login</th>
                              <th>Logout</th>
                              <th>Date</th>
                            </tr>
                          </thead>
                          <tbody>

                          <?php for($i = 0;$i < 10; $i++) { ?>
                            <tr>
                              <!-- <td class="py-0">
                                <img src="images/products/products-xs-01.jpg" alt="Product Image">
                              </td> -->
                              <td>Coach Swagger</td>
                              <td>24541</td>
                              <td>27</td>
                              <td>1</td>
                              <td>2</td>
                              <td>4</td>
                              <td>18</td>
                              <td>18</td>
                            </tr>
                                   <?php } ?>



                          </tbody>
                        </table>
        </div>
        
    </div>
  <!-- <div class="row comingsoon-wrapper">
    <div class="col-lg-8 col-xl-5">

        <div class="app-brand w-100 d-flex justify-content-center border-bottom-0">
        <a class="w-auto pl-0" href="/index.html">
            <img src="images/logo.png" alt="Mono">
            <span class="brand-name text-dark">MONO</span>
        </a>
        </div>
        <div class="comingsoon-header text-center">
        <h1>We Are Coming Soon</h1>
        <p>Please stay in touch</p>
        </div>

        <div class="simple_timer"></div>

        <form class="form-subscript">
        <input class="form-control form-control-lg rounded-pill" type="text" placeholder="Enter email for information">
        <button class="btn-search" type="submit">
            <i class="mdi mdi-arrow-right"></i>
        </button>
        </form>

    </div>
   </div> -->


<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/syotimer/jquery.syotimer.min.js"></script>
<script>

  $(".simple_timer").syotimer({
    year: 2020,
    month: 12,
    day: 31,
    hour: 20,
    minute: 30
  });
</script>

</body>
</html>
