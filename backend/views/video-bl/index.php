
<?php
use yii\widgets\LinkPager;
use yii\base\Object;
use yii\bootstrap\ActiveForm;
use common\utils\CommonFun;
use yii\helpers\Url;

use backend\models\VideoBl;

$modelLabel = new \backend\models\VideoBl();
?>

<?php $this->beginBlock('header');  ?>
<!-- <head></head>中代码块 -->
<?php $this->endBlock(); ?>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
      
        <div class="box-header">
          <h3 class="box-title">数据列表</h3>
          <div class="box-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
                <button id="create_btn" type="button" class="btn btn-xs btn-primary">添&nbsp;&emsp;加</button>
        			|
        		<button id="delete_btn" type="button" class="btn btn-xs btn-danger">批量删除</button>
            </div>
          </div>
        </div>
        <!-- /.box-header -->
        
        <div class="box-body">
          <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap table-responsive">
            <!-- row start search-->
          	<div class="row">
          	<div class="col-sm-12">
                <?php ActiveForm::begin(['id' => 'video-bl-search-form', 'method'=>'get', 'options' => ['class' => 'form-inline'], 'action'=>Url::toRoute('video-bl/index')]); ?>     
                
                  <div class="form-group" style="margin: 5px;">
                      <label><?=$modelLabel->getAttributeLabel('id')?>:</label>
                      <input type="text" class="form-control" id="query[id]" name="query[id]"  value="<?=isset($query["id"]) ? $query["id"] : "" ?>">
                  </div>
              <div class="form-group">
              	<a onclick="searchAction()" class="btn btn-primary btn-sm" href="#"> <i class="glyphicon glyphicon-zoom-in icon-white"></i>搜索</a>
           	  </div>
               <?php ActiveForm::end(); ?> 
            </div>
          	</div>
          	<!-- row end search -->
          	
          	<!-- row start -->
          	<div class="row">
          	<div class="col-sm-12">
          	<table id="data_table" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="data_table_info">
            <thead class="text-nowrap">
            <tr role="row">
            
            <?php 
              $orderby = isset($_GET['orderby']) ? $_GET['orderby'] : '';
		      echo '<th><input id="data_table_check" type="checkbox"></th>';
              echo '<th onclick="orderby(\'id\', \'desc\')" '.CommonFun::sortClass($orderby, 'id').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('id').'</th>';
              echo '<th onclick="orderby(\'ranking\', \'desc\')" '.CommonFun::sortClass($orderby, 'ranking').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('ranking').'</th>';
              echo '<th onclick="orderby(\'account_name\', \'desc\')" '.CommonFun::sortClass($orderby, 'account_name').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('account_name').'</th>';
              echo '<th onclick="orderby(\'account_id\', \'desc\')" '.CommonFun::sortClass($orderby, 'account_id').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('account_id').'</th>';
              echo '<th onclick="orderby(\'platform\', \'desc\')" '.CommonFun::sortClass($orderby, 'platform').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('platform').'</th>';
              echo '<th onclick="orderby(\'gender\', \'desc\')" '.CommonFun::sortClass($orderby, 'gender').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('gender').'</th>';
              echo '<th onclick="orderby(\'integrated_marketing_gain\', \'desc\')" '.CommonFun::sortClass($orderby, 'integrated_marketing_gain').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('integrated_marketing_gain').'</th>';
              echo '<th onclick="orderby(\'spread_index\', \'desc\')" '.CommonFun::sortClass($orderby, 'spread_index').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('spread_index').'</th>';
              echo '<th onclick="orderby(\'interactive_index\', \'desc\')" '.CommonFun::sortClass($orderby, 'interactive_index').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('interactive_index').'</th>';
              echo '<th onclick="orderby(\'activity_index\', \'desc\')" '.CommonFun::sortClass($orderby, 'activity_index').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('activity_index').'</th>';
              echo '<th onclick="orderby(\'growth_index\', \'desc\')" '.CommonFun::sortClass($orderby, 'growth_index').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('growth_index').'</th>';
              echo '<th onclick="orderby(\'health_index\', \'desc\')" '.CommonFun::sortClass($orderby, 'health_index').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('health_index').'</th>';
              echo '<th onclick="orderby(\'business_fitness_index\', \'desc\')" '.CommonFun::sortClass($orderby, 'business_fitness_index').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('business_fitness_index').'</th>';
              echo '<th onclick="orderby(\'wechat\', \'desc\')" '.CommonFun::sortClass($orderby, 'wechat').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('wechat').'</th>';
              echo '<th onclick="orderby(\'weibo\', \'desc\')" '.CommonFun::sortClass($orderby, 'weibo').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('weibo').'</th>';
              echo '<th onclick="orderby(\'mobile\', \'desc\')" '.CommonFun::sortClass($orderby, 'mobile').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('mobile').'</th>';
              echo '<th onclick="orderby(\'telephone\', \'desc\')" '.CommonFun::sortClass($orderby, 'telephone').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('telephone').'</th>';
              echo '<th onclick="orderby(\'contact_status\', \'desc\')" '.CommonFun::sortClass($orderby, 'contact_status').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('contact_status').'</th>';
              echo '<th onclick="orderby(\'remark\', \'desc\')" '.CommonFun::sortClass($orderby, 'remark').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('remark').'</th>';
              echo '<th onclick="orderby(\'create_date\', \'desc\')" '.CommonFun::sortClass($orderby, 'create_date').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('create_date').'</th>';
              echo '<th onclick="orderby(\'update_time\', \'desc\')" '.CommonFun::sortClass($orderby, 'update_time').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('update_time').'</th>';
         
			?>
	
            <th tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >操作</th>
            </tr>
            </thead>
            <tbody>
            
            <?php
            foreach ($models as $model) {
                echo '<tr id="rowid_' . $model->id . '">';
                echo '  <td><label><input type="checkbox" value="' . $model->id . '"></label></td>';
                echo '  <td>' . $model->id . '</td>';
                echo '  <td>' . $model->ranking . '</td>';
                echo '  <td>' . $model->account_name . '</td>';
                echo '  <td>' . $model->account_id . '</td>';
                echo '  <td>' . $model->platform . '</td>';
                echo '  <td>' . $model->gender . '</td>';
                echo '  <td>' . $model->integrated_marketing_gain . '</td>';
                echo '  <td>' . $model->spread_index . '</td>';
                echo '  <td>' . $model->interactive_index . '</td>';
                echo '  <td>' . $model->activity_index . '</td>';
                echo '  <td>' . $model->growth_index . '</td>';
                echo '  <td>' . $model->health_index . '</td>';
                echo '  <td>' . $model->business_fitness_index . '</td>';
                echo '  <td>' . $model->wechat . '</td>';
                echo '  <td>' . $model->weibo . '</td>';
                echo '  <td>' . $model->mobile . '</td>';
                echo '  <td>' . $model->telephone . '</td>';
                echo '  <td>' . $model->contact_status . '</td>';
                echo '  <td>' . $model->remark . '</td>';
                echo '  <td>' . $model->create_date . '</td>';
                echo '  <td>' . $model->update_time . '</td>';
                echo '  <td class="center">';
                echo '      <a id="view_btn" onclick="viewAction(' . $model->id . ')" class="btn btn-primary btn-sm" href="#"> <i class="glyphicon glyphicon-zoom-in icon-white"></i>查看</a>';
                echo '      <a id="edit_btn" onclick="editAction(' . $model->id . ')" class="btn btn-primary btn-sm" href="#"> <i class="glyphicon glyphicon-edit icon-white"></i>修改</a>';
                echo '      <a id="delete_btn" onclick="deleteAction(' . $model->id . ')" class="btn btn-danger btn-sm" href="#"> <i class="glyphicon glyphicon-trash icon-white"></i>删除</a>';
                echo '  </td>';
                echo '</tr>';
            }
            
            ?>
            
           
           
            </tbody>
            <!-- <tfoot></tfoot> -->
          </table>
          </div>
          </div>
          <!-- row end -->
          
          <!-- row start -->
          <div class="row">
          	<div class="col-sm-5">
            	<div class="dataTables_info" id="data_table_info" role="status" aria-live="polite">
            		<div class="infos">
            		从<?= $pages->getPage() * $pages->getPageSize() + 1 ?>            		到 <?= ($pageCount = ($pages->getPage() + 1) * $pages->getPageSize()) < $pages->totalCount ?  $pageCount : $pages->totalCount?>            		 共 <?= $pages->totalCount?> 条记录</div>
            	</div>
            </div>
          	<div class="col-sm-7">
              	<div class="dataTables_paginate paging_simple_numbers" id="data_table_paginate">
              	<?= LinkPager::widget([
              	    'pagination' => $pages,
              	    'nextPageLabel' => '»',
              	    'prevPageLabel' => '«',
              	    'firstPageLabel' => '首页',
              	    'lastPageLabel' => '尾页',
              	]); ?>	
              	
              	</div>
          	</div>
		  </div>
		  <!-- row end -->
        </div>
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

<div class="modal fade" id="edit_dialog" tabindex="-1" role="dialog"
	aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">×</button>
				<h3>Settings</h3>
			</div>
			<div class="modal-body">
                <?php $form = ActiveForm::begin(["id" => "video-bl-form", "class"=>"form-horizontal", "action"=>Url::toRoute("video-bl/save")]); ?>                      
                 
          <input type="hidden" class="form-control" id="id" name="id" />

          <div id="ranking_div" class="form-group">
              <label for="ranking" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("ranking")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="ranking" name="VideoBl[ranking]" placeholder="" />
              </div>
              <div class="clearfix"></div>
          </div>

          <div id="account_name_div" class="form-group">
              <label for="account_name" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("account_name")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="account_name" name="VideoBl[account_name]" placeholder="" />
              </div>
              <div class="clearfix"></div>
          </div>

          <div id="account_id_div" class="form-group">
              <label for="account_id" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("account_id")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="account_id" name="VideoBl[account_id]" placeholder="" />
              </div>
              <div class="clearfix"></div>
          </div>

          <div id="platform_div" class="form-group">
              <label for="platform" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("platform")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="platform" name="VideoBl[platform]" placeholder="" />
              </div>
              <div class="clearfix"></div>
          </div>

          <div id="gender_div" class="form-group">
              <label for="gender" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("gender")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="gender" name="VideoBl[gender]" placeholder="" />
              </div>
              <div class="clearfix"></div>
          </div>

          <div id="integrated_marketing_gain_div" class="form-group">
              <label for="integrated_marketing_gain" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("integrated_marketing_gain")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="integrated_marketing_gain" name="VideoBl[integrated_marketing_gain]" placeholder="" />
              </div>
              <div class="clearfix"></div>
          </div>

          <div id="spread_index_div" class="form-group">
              <label for="spread_index" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("spread_index")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="spread_index" name="VideoBl[spread_index]" placeholder="" />
              </div>
              <div class="clearfix"></div>
          </div>

          <div id="interactive_index_div" class="form-group">
              <label for="interactive_index" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("interactive_index")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="interactive_index" name="VideoBl[interactive_index]" placeholder="" />
              </div>
              <div class="clearfix"></div>
          </div>

          <div id="activity_index_div" class="form-group">
              <label for="activity_index" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("activity_index")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="activity_index" name="VideoBl[activity_index]" placeholder="" />
              </div>
              <div class="clearfix"></div>
          </div>

          <div id="growth_index_div" class="form-group">
              <label for="growth_index" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("growth_index")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="growth_index" name="VideoBl[growth_index]" placeholder="" />
              </div>
              <div class="clearfix"></div>
          </div>

          <div id="health_index_div" class="form-group">
              <label for="health_index" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("health_index")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="health_index" name="VideoBl[health_index]" placeholder="" />
              </div>
              <div class="clearfix"></div>
          </div>

          <div id="business_fitness_index_div" class="form-group">
              <label for="business_fitness_index" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("business_fitness_index")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="business_fitness_index" name="VideoBl[business_fitness_index]" placeholder="" />
              </div>
              <div class="clearfix"></div>
          </div>

          <div id="wechat_div" class="form-group">
              <label for="wechat" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("wechat")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="wechat" name="VideoBl[wechat]" placeholder="" />
              </div>
              <div class="clearfix"></div>
          </div>

          <div id="weibo_div" class="form-group">
              <label for="weibo" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("weibo")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="weibo" name="VideoBl[weibo]" placeholder="" />
              </div>
              <div class="clearfix"></div>
          </div>

          <div id="mobile_div" class="form-group">
              <label for="mobile" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("mobile")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="mobile" name="VideoBl[mobile]" placeholder="" />
              </div>
              <div class="clearfix"></div>
          </div>

          <div id="telephone_div" class="form-group">
              <label for="telephone" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("telephone")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="telephone" name="VideoBl[telephone]" placeholder="" />
              </div>
              <div class="clearfix"></div>
          </div>

          <div id="contact_status_div" class="form-group">
              <label for="contact_status" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("contact_status")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="contact_status" name="VideoBl[contact_status]" placeholder="" />
              </div>
              <div class="clearfix"></div>
          </div>

          <div id="remark_div" class="form-group">
              <label for="remark" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("remark")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="remark" name="VideoBl[remark]" placeholder="" />
              </div>
              <div class="clearfix"></div>
          </div>

          <div id="create_date_div" class="form-group">
              <label for="create_date" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("create_date")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="create_date" name="VideoBl[create_date]" placeholder="必填" />
              </div>
              <div class="clearfix"></div>
          </div>

          <div id="update_time_div" class="form-group">
              <label for="update_time" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("update_time")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="update_time" name="VideoBl[update_time]" placeholder="" />
              </div>
              <div class="clearfix"></div>
          </div>
                    

			<?php ActiveForm::end(); ?>          
                </div>
			<div class="modal-footer">
				<a href="#" class="btn btn-default" data-dismiss="modal">关闭</a> <a
					id="edit_dialog_ok" href="#" class="btn btn-primary">确定</a>
			</div>
		</div>
	</div>
</div>
<?php $this->beginBlock('footer');  ?>
<!-- <body></body>后代码块 -->
 <script>
function orderby(field, op){
	 var url = window.location.search;
	 var optemp = field + " desc";
	 if(url.indexOf('orderby') != -1){
		 url = url.replace(/orderby=([^&?]*)/ig,  function($0, $1){ 
			 var optemp = field + " desc";
			 optemp = decodeURI($1) != optemp ? optemp : field + " asc";
			 return "orderby=" + optemp;
		   }); 
	 }
	 else{
		 if(url.indexOf('?') != -1){
			 url = url + "&orderby=" + encodeURI(optemp);
		 }
		 else{
			 url = url + "?orderby=" + encodeURI(optemp);
		 }
	 }
	 window.location.href=url; 
 }
 function searchAction(){
		$('#video-bl-search-form').submit();
	}
 function viewAction(id){
		initModel(id, 'view', 'fun');
	}

 function initEditSystemModule(data, type){
	if(type == 'create'){
    	        $("#id").val("");
        $("#ranking").val("");
        $("#account_name").val("");
        $("#account_id").val("");
        $("#platform").val("");
        $("#gender").val("");
        $("#integrated_marketing_gain").val("");
        $("#spread_index").val("");
        $("#interactive_index").val("");
        $("#activity_index").val("");
        $("#growth_index").val("");
        $("#health_index").val("");
        $("#business_fitness_index").val("");
        $("#wechat").val("");
        $("#weibo").val("");
        $("#mobile").val("");
        $("#telephone").val("");
        $("#contact_status").val("");
        $("#remark").val("");
        $("#create_date").val("");
        $("#update_time").val("");
	
	}
	else{
    	        $("#id").val(data.id)
        $("#ranking").val(data.ranking)
        $("#account_name").val(data.account_name)
        $("#account_id").val(data.account_id)
        $("#platform").val(data.platform)
        $("#gender").val(data.gender)
        $("#integrated_marketing_gain").val(data.integrated_marketing_gain)
        $("#spread_index").val(data.spread_index)
        $("#interactive_index").val(data.interactive_index)
        $("#activity_index").val(data.activity_index)
        $("#growth_index").val(data.growth_index)
        $("#health_index").val(data.health_index)
        $("#business_fitness_index").val(data.business_fitness_index)
        $("#wechat").val(data.wechat)
        $("#weibo").val(data.weibo)
        $("#mobile").val(data.mobile)
        $("#telephone").val(data.telephone)
        $("#contact_status").val(data.contact_status)
        $("#remark").val(data.remark)
        $("#create_date").val(data.create_date)
        $("#update_time").val(data.update_time)
	}
	if(type == "view"){
      $("#id").attr({readonly:true,disabled:true});
      $("#ranking").attr({readonly:true,disabled:true});
      $("#account_name").attr({readonly:true,disabled:true});
      $("#account_id").attr({readonly:true,disabled:true});
      $("#platform").attr({readonly:true,disabled:true});
      $("#gender").attr({readonly:true,disabled:true});
      $("#integrated_marketing_gain").attr({readonly:true,disabled:true});
      $("#spread_index").attr({readonly:true,disabled:true});
      $("#interactive_index").attr({readonly:true,disabled:true});
      $("#activity_index").attr({readonly:true,disabled:true});
      $("#growth_index").attr({readonly:true,disabled:true});
      $("#health_index").attr({readonly:true,disabled:true});
      $("#business_fitness_index").attr({readonly:true,disabled:true});
      $("#wechat").attr({readonly:true,disabled:true});
      $("#weibo").attr({readonly:true,disabled:true});
      $("#mobile").attr({readonly:true,disabled:true});
      $("#telephone").attr({readonly:true,disabled:true});
      $("#contact_status").attr({readonly:true,disabled:true});
      $("#remark").attr({readonly:true,disabled:true});
      $("#create_date").attr({readonly:true,disabled:true});
      $("#update_time").attr({readonly:true,disabled:true});
	$('#edit_dialog_ok').addClass('hidden');
	}
	else{
      $("#id").attr({readonly:false,disabled:false});
      $("#ranking").attr({readonly:false,disabled:false});
      $("#account_name").attr({readonly:false,disabled:false});
      $("#account_id").attr({readonly:false,disabled:false});
      $("#platform").attr({readonly:false,disabled:false});
      $("#gender").attr({readonly:false,disabled:false});
      $("#integrated_marketing_gain").attr({readonly:false,disabled:false});
      $("#spread_index").attr({readonly:false,disabled:false});
      $("#interactive_index").attr({readonly:false,disabled:false});
      $("#activity_index").attr({readonly:false,disabled:false});
      $("#growth_index").attr({readonly:false,disabled:false});
      $("#health_index").attr({readonly:false,disabled:false});
      $("#business_fitness_index").attr({readonly:false,disabled:false});
      $("#wechat").attr({readonly:false,disabled:false});
      $("#weibo").attr({readonly:false,disabled:false});
      $("#mobile").attr({readonly:false,disabled:false});
      $("#telephone").attr({readonly:false,disabled:false});
      $("#contact_status").attr({readonly:false,disabled:false});
      $("#remark").attr({readonly:false,disabled:false});
      $("#create_date").attr({readonly:false,disabled:false});
      $("#update_time").attr({readonly:false,disabled:false});
		$('#edit_dialog_ok').removeClass('hidden');
		}
		$('#edit_dialog').modal('show');
}

function initModel(id, type, fun){
	
	$.ajax({
		   type: "GET",
		   url: "<?=Url::toRoute('video-bl/view')?>",
		   data: {"id":id},
		   cache: false,
		   dataType:"json",
		   error: function (xmlHttpRequest, textStatus, errorThrown) {
			    alert("出错了，" + textStatus);
			},
		   success: function(data){
			   initEditSystemModule(data, type);

			   ////////////////////////////////////////
   		   }
		});
}
	
function editAction(id){
	initModel(id, 'edit');
}

function deleteAction(id){
	var ids = [];
	if(!!id == true){
		ids[0] = id;
	}
	else{
		var checkboxs = $('#data_table :checked');
	    if(checkboxs.size() > 0){
	        var c = 0;
	        for(i = 0; i < checkboxs.size(); i++){
	            var id = checkboxs.eq(i).val();
	            if(id != ""){
	            	ids[c++] = id;
	            }
	        }
	    }
	}
	if(ids.length > 0){
		admin_tool.confirm('请确认是否删除', function(){
		    $.ajax({
				   type: "GET",
				   url: "<?=Url::toRoute('video-bl/delete')?>",
				   data: {"ids":ids},
				   cache: false,
				   dataType:"json",
				   error: function (xmlHttpRequest, textStatus, errorThrown) {
					    admin_tool.alert('msg_info', '出错了，' + textStatus, 'warning');
					},
				   success: function(data){
					   for(i = 0; i < ids.length; i++){
						   $('#rowid_' + ids[i]).remove();
					   }
					   admin_tool.alert('msg_info', '删除成功', 'success');
					   window.location.reload();
				   }
				});
		});
	}
	else{
		admin_tool.alert('msg_info', '请先选择要删除的数据', 'warning');
	}
    
}

function getSelectedIdValues(formId)
{
	var value="";
	$( formId + " :checked").each(function(i)
	{
		if(!this.checked)
		{
			return true;
		}
		value += this.value;
		if(i != $("input[name='id']").size()-1)
		{
			value += ",";
		}
	 });
	return value;
}

$('#edit_dialog_ok').click(function (e) {
    e.preventDefault();
	$('#video-bl-form').submit();
});

$('#create_btn').click(function (e) {
    e.preventDefault();
    initEditSystemModule({}, 'create');
});

$('#delete_btn').click(function (e) {
    e.preventDefault();
    deleteAction('');
});

$('#video-bl-form').bind('submit', function(e) {
	e.preventDefault();
	var id = $("#id").val();
	var action = id == "" ? "<?=Url::toRoute('video-bl/create')?>" : "<?=Url::toRoute('video-bl/update')?>";
    $(this).ajaxSubmit({
    	type: "post",
    	dataType:"json",
    	url: action,
    	success: function(value) 
    	{
        	if(value.errno == 0){
        		$('#edit_dialog').modal('hide');
        		admin_tool.alert('msg_info', '添加成功', 'success');
        		window.location.reload();
        	}
        	else{
            	var json = value.data;
        		for(var key in json){
        			$('#' + key).attr({'data-placement':'bottom', 'data-content':json[key], 'data-toggle':'popover'}).addClass('popover-show').popover('show');
        			
        		}
        	}

    	}
    });
});

</script>
<?php $this->endBlock(); ?>