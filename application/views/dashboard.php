
<?php
	$this->load->view('header');
?>
<style type="text/css">
	.pln, .phn, .pan {
    padding-left: 0;
}
.af-item:first-child:before {
    content: '';
    left: -1px;
    width: 1px;
    height: 10px;
    background: white;
}
.af-marker:after {
    content: '';
}
.af-marker {
    position: relative;
    right: 26px;
    top: 0px;
    color: #004a7c;
}
.af-marker i {
    width: 30px;
    height: 30px;
    border-radius: 100%;
    background-color: white;
    border: 1px solid #d2ced0;
    padding: 1.5% 0 1.5% 2.3%;
   
}
ul.af li{list-style: none;}
.af-item {
    height: calc(450px/8);
    border-left: 1px solid #d2ced0;
    margin-left: 15px;
}
.flex-align-start, .bc-modal.confirm.top {
    -webkit-box-align: start;
    -webkit-align-items: flex-start;
    -ms-flex-align: start;
    -ms-grid-row-align: flex-start;
    -ms-flex-align: start;
    align-items: flex-start;
}
.af-info {
    padding: .8em;
}
.border-bottom {
    border-bottom: 1px solid #DDD;
}
.width-100{
    width: 100%;
}
.mgt{margin-top: -7%;}
.ml1{    margin-left: 1%;}
.ml2{    margin-left: 34%;}
.ml3{margin-left: 71%;}
.tot-fiat{
	font-size: 22px;
    margin-left: 34%;
}
</style>

	<div class="wrapper wrapper-content">
		<div class="row">
			<div class="col-md-6">
				<div class="row">
					<div class="ibox float-e-margins">
						<div class="ibox-title" style="font-size: 20px">RECENT ACTIVITY</div>
						<div class="ibox-content inspinia-timeline">
						<ul class="af pln">
							<li class="af-item flex-align-start">
								<div class="col-sm-2 af-info flex-center width-100 width-100-mobile border-bottom">
									<div class="af-marker"><i class="fa fa-file-text"></i></div>
		                         </div>
								<div class="col-sm-4 mgt ml1" style="color: #00BABC;">Recieved BTC</div>
								<div class="col-sm-3 mgt ml2">Sep 1, 2017</div>
								<div class="col-sm-3 mgt ml3">0.03 BTC</div>
							</li>
							<li class="af-item flex-align-start">
								<div class="col-sm-2 af-info flex-center width-100 width-100-mobile border-bottom">
									<div class="af-marker"><i class="fa fa-file-text"></i></div>
		                         </div>
								<div class="col-sm-4 mgt ml1" style="color: #F26C57;">Sent ETH</div>
								<div class="col-sm-3 mgt ml2">Sep 2, 2017</div>
								<div class="col-sm-3 mgt ml3">0.13 ETH</div>
							</li>
							<li class="af-item flex-align-start">
								<div class="col-sm-2 af-info flex-center width-100 width-100-mobile border-bottom">
									<div class="af-marker"><i class="fa fa-file-text"></i></div>
		                         </div>
								<div class="col-sm-4 mgt ml1" style="color: #00BABC;">Recieved LAL</div>
								<div class="col-sm-3 mgt ml2">Sep 2, 2017</div>
								<div class="col-sm-3 mgt ml3">0.13 LAL</div>
							</li>
						</ul>
						<div style="clear: both;"></div>
	                    </div>
					</div>
				</div>
				<div class="row">
					<div class="ibox float-e-margins">
						<div class="ibox-title" style="font-size: 20px">MY BALANCE</div>
						<div class="ibox-content inspinia-timeline">
							<span class="tot-fiat">&#8377;102,869.14</span>
							<ul class="af pln">
								<li class="af-item flex-align-start">
								<div class="col-sm-2 af-info flex-center width-100 width-100-mobile border-bottom">
									<div class="af-marker"><i class="fa fa-btc"></i></div>
		                         </div>
								<div class="col-sm-4 mgt ml1">Bitcoin</div>
								<div class="col-sm-3 mgt ml2">0.30</div>
								<div class="col-sm-3 mgt ml3">&#8377;97,869.14</div>
							</li>
							<li class="af-item flex-align-start">
								<div class="col-sm-2 af-info flex-center width-100 width-100-mobile border-bottom">
									<div class="af-marker"><i class="fa fa-btc"></i></div>
		                         </div>
								<div class="col-sm-4 mgt ml1">Ethereum</div>
								<div class="col-sm-3 mgt ml2">2.00</div>
								<div class="col-sm-3 mgt ml3">&#8377;97,869.14</div>
							</li>
							<li class="af-item flex-align-start">
								<div class="col-sm-2 af-info flex-center width-100 width-100-mobile border-bottom">
									<div class="af-marker"><i class="fa fa-btc"></i></div>
		                         </div>
								<div class="col-sm-4 mgt ml1">LAL</div>
								<div class="col-sm-3 mgt ml2">500</div>
								<div class="col-sm-3 mgt ml3">&#8377;197,869.14</div>
							</li>
							</ul>
						</div>

					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="ibox float-e-margins">
					<div class="ibox-title" style="font-size: 20px">MY INVESTMENTS</div>
					<div class="ibox-content inspinia-timeline">
						<div id="piechart_3d"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer">
	    <div class="pull-right">
	        <strong>Copyright</strong> La La World &copy; 2017
	    </div>
	</div>
</div>
</div>
<?php
	$this->load->view('footer');
?>
