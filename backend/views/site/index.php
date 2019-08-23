

<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-navy">
                <div class="inner">
                    <h3><?= $statistics['video_dy_count'];?></h3>

                    <p>抖音榜单</p>
                </div>
                <div class="icon">
                    <i class="fa fa-table"></i>
                </div>
                <a href="/index.php?r=video-dy/index" class="small-box-footer">更多信息 <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-orange">
                <div class="inner">
                    <h3><?= $statistics['video_ks_count'];?></h3>

                    <p>快手榜单</p>
                </div>
                <div class="icon">
                    <i class="fa fa-table"></i>
                </div>
                <a href="/index.php?r=video-hs/index" class="small-box-footer">更多信息 <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3><?= $statistics['video_bl_count'];?></h3>

                    <p>哔哩榜单</p>
                </div>
                <div class="icon">
                    <i class="fa fa-table"></i>
                </div>
                <a href="/index.php?r=video-bl/index" class="small-box-footer">更多信息 <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-fuchsia">
                <div class="inner">
                    <h3><?= $statistics['video_mep_count'];?></h3>

                    <p>美拍榜单</p>
                </div>
                <div class="icon">
                    <i class="fa fa-table"></i>
                </div>
                <a href="/index.php?r=video-mep/index" class="small-box-footer">更多信息 <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3><?= $statistics['video_mip_count'];?></h3>

                    <p>秒拍榜单</p>
                </div>
                <div class="icon">
                    <i class="fa fa-table"></i>
                </div>
                <a href="/index.php?r=video-mip/index" class="small-box-footer">更多信息 <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3><?= $statistics['video_xg_count'];?></h3>

                    <p>西瓜榜单</p>
                </div>
                <div class="icon">
                    <i class="fa fa-table"></i>
                </div>
                <a href="/index.php?r=video-xg/index" class="small-box-footer">更多信息 <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-maroon">
                <div class="inner">
                    <h3><?= $statistics['video_hs_count'];?></h3>

                    <p>火山榜单</p>
                </div>
                <div class="icon">
                    <i class="fa fa-table"></i>
                </div>
                <a href="/index.php?r=video-hs/index" class="small-box-footer">更多信息 <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <!-- /.row -->

    <!-- Small boxes (Stat box) -->
	<div class="row" style="display: none">
		<div class="col-md-12">
		<div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">系统信息</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">#</th>
                  <th style="width: 200px">名称</th>
                  <th>信息</th>
                  <th style="width: 200px">说明</th>
                </tr>
                <?php 
                    $count = 1;
                    foreach($sysInfo as $info){
    			       echo '<tr>';
    			       echo '  <td>'. $count .'</td>';
    			       echo '  <td>'.$info['name'].'</td>';
    			       echo '  <td>'.$info['value'].'</td>';
    			       echo '  <td></td>';
    			       echo '</tr>';
    			       $count++;
    			   }
    			   ?>
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              
            </div>
          </div>
          <!-- /.box -->
		</div>
		
		
	</div>
	<!-- /.row -->


	<!-- Main row -->
	<div class="row">


	</div>
	<!-- /.row (main row) -->

</section>
<!-- /.content -->