<?php

$complete_structure='';



foreach($coupons as $coupon)

{

  $complete_structure.='<tr role="row" class="odd">

                        <td>'.$coupon['txt_coupon_code'].'</td>

                        <td>'.$coupon['int_discount_type'].'</td>

						<td>'.$coupon['int_discount_value'].'</td>
						
						<td>'.$coupon['dt_expire_date'].'</td>

                        <td><a href="'.site_url().'/coupons/edit?id='.$coupon['int_coupon_id'].'">Edit</a>

                            &nbsp;&nbsp;&nbsp;

                            <a class="del_confirm" href="'.site_url().'/coupons/delete?id='.$coupon['int_coupon_id'].'">Delete</a>

                        </td>

                      </tr>';

}

?>

<div class="content-wrapper">

  <div class="row">

    <div class="box">

                <div class="box-header">

                  <h3 class="box-title">Coupon List</h3>

                </div><!-- /.box-header -->

                <div class="box-body">

                  <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table class="table table-bordered table-hover dataTable" id="example2" role="grid" aria-describedby="example2_info">

                    <thead>

                      <tr role="row">

                        <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Code</th>

                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Discount Type</th>

						<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Discount Value</th>
						
						<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Expire Date</th>
						
						<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Actions</th>

                        </tr>

                    </thead>

                    <tbody>

                      <?php echo $complete_structure; ?>

                    </tbody>

                  </table></div>

                </div><!-- /.box-body -->

              </div>

  </div>

</div>

</div>

</div>

<script>

$(document).ready(function(){

  $(".del_confirm").click(function(){

    if(confirm("Are you sure you wish to delete this record?"))

    {

      return true;

    }

    else

    {

      return false;

    }

  });

});

</script>