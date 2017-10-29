<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">User</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Users</h3>
              <div class="pull-right">
                  <a href="<?php echo base_url('loginCtrl/useradd');?>" class="btn btn-primary btn-flat">Add</a>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width: 10%">S.No</th>
                  <th>Product</th>
                  <th>Category</th>
                  <th>Quantity</th>
                  <th>Price</th>
                </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Combo Offer</td>
                    <td>Budget</td>
                    <td>2</td>
                    <td>100</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Combo Offer</td>
                    <td>Moderate</td>
                    <td>4</td>
                    <td>700</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Combo Offer</td>
                    <td>Budget</td>
                    <td>4</td>
                    <td>100</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Combo Offer</td>
                    <td>Budget</td>
                    <td>2</td>
                    <td>115</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Combo Offer</td>
                    <td>Moderate</td>
                    <td>4</td>
                    <td>100</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>Combo Offer</td>
                    <td>Moderate</td>
                    <td>2</td>
                    <td>100</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>Combo Offer</td>
                    <td>Budget</td>
                    <td>8</td>
                    <td>980</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>Combo Offer</td>
                    <td>Budget</td>
                    <td>1</td>
                    <td>940</td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>Combo Offer</td>
                    <td>Moderate</td>
                    <td>4</td>
                    <td>800</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>Combo Offer</td>
                    <td>Budget</td>
                    <td>7</td>
                    <td>350</td>
                  </tr>
                  <tr>
                    <td>11</td>
                    <td>Combo Offer</td>
                    <td>Budget</td>
                    <td>2</td>
                    <td>640</td>
                  </tr>
                  <tr>
                    <td>12</td>
                    <td>Combo Offer</td>
                    <td>Budget</td>
                    <td>2</td>
                    <td>700</td>
                  </tr>
                  <tr>
                    <td>13</td>
                    <td>Combo Offer</td>
                    <td>Moderate</td>
                    <td>4</td>
                    <td>320</td>
                  </tr>
                  <tr>
                    <td>14</td>
                    <td>Budget</td>
                    <td>Budget</td>
                    <td>2</td>
                    <td>100</td>
                  </tr>
                  <tr>
                    <td>14</td>
                    <td>Combo Offer</td>
                    <td>Moderate</td>
                    <td>4</td>
                    <td>500</td>
                  </tr>
                </tbody>
                <tfoot>
                <tr>
                  <th>S.No</th>
                  <th>Product</th>
                  <th>Category</th>
                  <th>Quantity</th>
                  <th>Price</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>



<script>
  $(function () {
    $('#example1').DataTable();
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>