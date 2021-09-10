<?php
  $page_title = 'Salida diaria';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
   page_require_level(3);
?>

<?php
 $year  = date('Y');
 $month = date('m');
 $day   = date('d');
 $sales = dailySales($year,$month,$day);
?>
<?php include_once('layouts/header.php'); ?>
<div class="row">
  <div class="col-md-6">
    <?php echo display_msg($msg); ?>
  </div>
</div>
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading clearfix">
          <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span>Salidas Diarias en el Mes:&nbsp;&nbsp;<?php echo date('m'); ?></span>
          </strong>
        </div>
        <div class="panel-body">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th class="text-center" style="width: 50px;">#</th>
                <th> Nombre del producto </th>
                <th style="width: 10%;"> Part No. </th>
                <th class="text-center" style="width: 10%;"> Cantidad </th>
               
                <th class="text-center" style="width: 15%;"> Fecha </th>
             </tr>
            </thead>
            <tbody>
              <?php 
                $total_qty=0; 
                $total_saleing_price=0; 
                $total_profit=0; 
              ?>
              <?php foreach ($sales as $sale):?>
              <tr>
                <td class="text-center"><?php echo count_id();?></td>
                <td><?php echo remove_junk($sale['name']); ?></td>
                <td><?php echo remove_junk($sale['partNo']); ?></td>
                <td class="text-center"><?php echo (int)$sale['total_qty']; ?></td>
                
                <td class="text-center"><?php echo date("Y/m/d", strtotime ($sale['date'])); ?></td>
              </tr>
              <?php 
                $total_qty += (int)$sale['total_qty']; 
                $total_saleing_price += $sale['total_saleing_price'];
                $total_profit += $sale['total_profit'];
              ?>
              <?php endforeach;?>
              <tr>
                <td class="text-center"></td>
                <td><strong>Total</strong></td>
                <td></td>
                <td class="text-center"><strong><?php echo (int)$total_qty; ?></strong></td>
                
                
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

<?php include_once('layouts/footer.php'); ?>
