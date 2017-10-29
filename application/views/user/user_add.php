<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">User</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">User Add</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group col-md-4">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Title">
                </div>
              </div>
              <!-- /.box-body -->
              <table class="table">
                <thead>
                  <th style="width:8%;">S.No</th>
                  <th>Product</th>
                  <th>Category</th>
                  <th>Quantity</th>
                  <th>Price</th>
                  <th><button class="btn btn-primary" type="button" onclick="adNewProduct()"><i class="fa fa-plus fa-1x"></i></button></th>
                </thead>
                <tbody>
                  <tr class="odd">
                    <td><input type="text" class="form-control" name="sno[]" value="1" disabled></td>
                    <td><input type="text" class="form-control" name="product[]"></td>
                    <td><input type="text" class="form-control" name="category[]"></td>
                    <td><input type="text" class="form-control" name="quantity[]"></td>
                    <td><input type="text" class="form-control" name="price[]"></td>
                    <td><button class="btn btn-danger" type="button"><i class="fa fa-trash fa-1x"></i></button></td>
                  </tr>
                  <tr class="odd hide" id="removeHiddenRow">
                    <td><input type="text" class="form-control" id="sno" disabled></td>
                    <td><input type="text" class="form-control" id="product"></td>
                    <td><input type="text" class="form-control" id="category"></td>
                    <td><input type="text" class="form-control" id="quantity"></td>
                    <td><input type="text" class="form-control" id="price"></td>
                    <td><button class="btn btn-danger" type="button" onclick="removeProduct($(this))"><i class="fa fa-trash fa-1x"></i></button></td>
                  </tr>
                </tbody>
              </table>
              <div class="box-footer pull">
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
<script type="text/javascript">
  function adNewProduct() {
    var $template = $('#removeHiddenRow'),
    $clone    = $template.clone().removeClass('hide').removeAttr('id').insertBefore($template);
    $clone.find('#product').attr('name','product[]');
    $clone.find('#sno').attr('name','sno[]');
    $clone.find('#price').attr('name','price[]');
    $clone.find('#quantity').attr('name','quantity[]');
    $clone.find('#category').attr('name','category[]');
    serialNo();
  }
  function removeProduct($this){
    $this.parents('.odd').remove();
    serialNo();
  }

  function serialNo(){
    var lineCount=1;
    $('[name="sno[]"]').each(function(){
      $(this).val(lineCount);
      lineCount++;
    });
  }
</script>