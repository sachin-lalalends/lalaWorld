<style type="text/css">
.wellcome-area {
    background: rgba(248, 248, 248, 0.8) url(/skin/landing/images/landing/bg_news.jpg);
    background-size: cover;
    background-position: center top;
    background-repeat: no-repeat;
    background-attachment: fixed;
        margin-top: 4%;
}
.mg4{margin-top: 4%;}
.well-bg {
    position: relative;
}
.test-overly {
    background: rgba(0,0,0,0.80);
    position: absolute;
    width: 100%;
    height: 100%;
}
.well-text{color: #fff;}
.wellcome-text {
    margin: 70px 0;
    padding: 0px 40px 30px 40px;
}
.subs-feilds {
    border: 1px solid #fff;
    display: inline-block;
    height: 52px;
    margin-top: 30px;
    width: 60%;
    border-radius: 30px;
    overflow: hidden;
}
.suscribe-input input {
    background: transparent none repeat scroll 0 0;
    border: medium none;
    color: #fff;
    float: left;
    font-size: 15px;
    line-height: 24px;
    padding: 11px 15px;
    width: 70%;
    height: 50px;
}
.suscribe-input button {
    background: #1ab394 none repeat scroll 0 0;
    border: medium none;
    border-radius: 0 20px 20px 0;
    color: #fff;
    float: left;
    font-size: 20px;
    font-weight: 700;
    padding: 14px 20px;
    width: 30%;
}
ul.comm_channel{}
.step-cont{margin-top: 5%;}
ul.comm_channel li{list-style: none;}
    .team-1-member {
    text-align: center;
    margin-top: 48px;
}
.social-icons li .fa{ color: #1ab394; }
ul.comm_channel .fa{ background: #1ab394;
    color: #fff;
    padding: 4px;
    border-radius: 100%;
    cursor: pointer;
    margin-bottom: 2%;
    width: 24px;
    text-align: center;
    margin-right: 2%;}
.team-1-member img {
    display: inline-block;
    margin-bottom: 16px;
}
.team-1-member h5 {
    font-size: 20px;
    margin-bottom: 8px;
}
.team-1-member .social-icons {
    margin-top: 8px;
}
.social-icons {
       list-style: none;
    width: 78%;
    text-align: center;
    display: block;
}
.social-icons li {
    font-size: 20px;
}
.social-icons li a {
    color: #333333;
}
#particle-canvas {
  width: 100%;
  height: 100%;
}
@media (max-width: 500px) {
    .whitelogo{display: none !important;}
    .appNow {
    margin-left: 11%;
    margin-top: 2%;
}
.social-icons{width: 89%;}
}
</style>
<div id="particle-canvas"></div>
    <div class="container">
        <div class="caption-lala">
            <p class="main-head-text">Empowering the underbanked with a brand new Financial Infrastructure</p>
            <p class="sec-head-text">Bridging the fiat with the Crypto World</p>
            <div class="select-drop">
                <span class="sec-head-text">I would like to</span>
                <?php
                $CI->partial($this->theme . '/templates/borrow-options');
                ?>
                <span><a href="#" class="appNow btn btn-primary">Lets Go</a></span>

            </div>
        </div>
    </div>
<!-- <section id="features" class="container services">
    <div class="row">
        <div class="col-sm-3">
            <h3>Data Secured on Blockchain</h3>
            <p>All borrowers and lenders data is secured on blockchain and all loan details are put on the public ledger
                to accessible with La La Tokens access</p>
        </div>
        <div class="col-sm-3">
            <h3>Global ID Registry</h3>
            <p>Businesses and individuals are now placed on a global debt and global investment registry for cross check
                and cross sell opportunities</p>
        </div>
        <div class="col-sm-3">
            <h3>P2P Transfer & Remittance</h3>
            <p>Businesses can make payments based on smart contracts between each other, including international
                remittances to avoid excessive forex charges</p>

        </div>
        <div class="col-sm-3">
            <h3>Smart Contract Ability</h3>
            <p>Lenders and borrowers, businesses and individuals can make financial transactions based on pre-agreed
                secure and standard product contracts</p>
        </div>
    </div>
</section> 
<section class="container features">
    <div class="row">
        <div class="col-lg-12 text-center">
            <div class="navy-line"></div>
            <h1>Fast secure and seamless transactions<br/><br/> <span class="navy"></span></h1>
        </div>
    </div>
    <div class="row bg_wh">
        <div class="col-md-3 text-center wow fadeInLeft">
            <div>
                <img src="<?php echo $this->MEDIA_URl ?>icons/lowest rate.png" style="width: 78px; height:78px;">
                <h2>Lowest Rates</h2>
                <p>Our borrowers can typically save 5 to 15% on interest rates and transaction charges</p>
            </div>
            <div class="m-t-lg">
                <img src="<?php echo $this->MEDIA_URl ?>icons/quick-&-easy.png" style="width: 78px; height:78px;">
                <h2>Quick and Secure</h2>
                <p>Refreshingly fast process with standard smart contracts and secured on block chain network</p>
            </div>
        </div>
        <div class="col-md-6 text-center  wow zoomIn">
            <img src="<?php echo $this->MEDIA_URl ?>landing/perspective.png" alt="dashboard" class="img-responsive">
        </div>
        <div class="col-md-3 text-center wow fadeInRight">
            <div>
                <img src="<?php echo $this->MEDIA_URl ?>icons/no-panelty.png" style="width: 78px; height:78px;">
                <h2>Decentralised by definition </h2>
                <p>Distributed ledgers and retworks help reduce costs of transactions, easy liquidation as well as
                    storing of assets</p>
            </div>
            <div class="m-t-lg">
                <img src="<?php echo $this->MEDIA_URl ?>icons/secure.png" style="width: 78px; height:78px;">
                <h2>Secure payments transactions</h2>
                <p>The distributed network assures transparency, security and seamless payments, further enhanced by La
                    La wallet</p>
            </div>
        </div>
    </div>
</section>-->
<section class="steps" id="about-us">
<div class="container text-center">
    <div class="row step-head">
        <div classs="col-lg-12 text-center">
            <div class="navy-line"></div>
            <h1>About LALA<br/><br/> <span class="navy"></span></h1>
            <p>LALA World (“LALA”) is a One Stop Wallet, a financial services ecosystem, bridging the Fiat and the Crypto world, thereby empowering the unbanked and underserved with everyday banking needs. By creating a whole new peer to peer infrastructure on Blockchain, LALA aims to revolutionise the way individuals, small businesses and micro entrepreneurs transact, make payments, borrow money and associated products like insurances, domestic and cross border remittances, cards and other general banking products.</p>
        </div>
    </div>
    <div class="row step content">
        <div class="col-sm-12 bg_wh">
            <div class="col-sm-4 step-cont">
                <img src="<?php echo $this->MEDIA_URl ?>icons/Wallet.png" style="width: 98px; height:98px;">
                <h3>LALA Wallet</h3>
                <p class="step-cont-head"> The central core - your one stop solution for all your banking needs - Bridging Fiat world with the crypto world. </p>
            </div>
            <div class="col-sm-4 step-cont">
                <img src="<?php echo $this->MEDIA_URl ?>icons/id-score.png" style="width: 98px; height:98px;">
                <h3>LALA ID and LALA Score</h3>
                <p class="step-cont-head">Global ID management and verification on blockchain creating one comprehensive ID and score the individuals and businessess.</p>
            </div>
            <div class="col-sm-4 step-cont">
                <img src="<?php echo $this->MEDIA_URl ?>icons/card.png" style="width: 98px; height:98px;">
                <h3>LALA CARD</h3>
                <p class="step-cont-head">Debit, Credit and Loyalty in One Card. A Prepaid VISA/Master Card synced to the LALA Wallet spendable at PoS.ATM or online.</p>
            </div>
        </div>
        <div class="col-sm-12 bg_wh">
            <div class="col-sm-4 step-cont">
                <img src="<?php echo $this->MEDIA_URl ?>icons/kit.png" style="width: 98px; height:98px;">
                <h3>LALA Kit</h3>
                <p class="step-cont-head">Software meets Hardware. A physical preset plug and play kit sold at shops and handed over to like of migrant labourers, contaning Card, Insurance, mobile and other goodies.</p>
            </div>
            <div class="col-sm-4 step-cont">
                <img src="<?php echo $this->MEDIA_URl ?>icons/wealth.png" style="width: 98px; height:98px;">
                <h3>LALA Wealth</h3>
                <p class="step-cont-head">Fiat and Crypto investment products - like a Robo advisor using AI and ML, secured and identified on blockchain.</p>
            </div>
            <div class="col-sm-4 step-cont">
                <img src="<?php echo $this->MEDIA_URl ?>icons/lends.png" style="width: 98px; height:98px;">
                <h3>LALA LENDS</h3>
                <p class="step-cont-head">Peer to Peer and EMI based lending for small business and micro entrepreneurial projects and borrowers.</p>
            </div>
        </div>
        <div class="col-sm-12 bg_wh">
            <div class="col-sm-4 step-cont">
                <img src="<?php echo $this->MEDIA_URl ?>icons/exchange.png" style="width: 98px; height:98px;">
                <h3>LALA Crypto Exchange</h3>
                <p class="step-cont-head">Fiat to Crypto, crypto to crypto, GPS enabled local transation with peers physically within the wallet. </p>
            </div>
            <div class="col-sm-4 step-cont">
                <img src="<?php echo $this->MEDIA_URl ?>icons/remit.png" style="width: 98px; height:98px;">
                <h3>LALA Remit</h3>
                <p class="step-cont-head">Local and Global Remittance via bloackchain in the backend using LALA exchange Fiat and Digital remittance.</p>
            </div>
            <div class="col-sm-4 step-cont">
                <img src="<?php echo $this->MEDIA_URl ?>icons/billpay.png" style="width: 98px; height:98px;">
                <h3>LALA BillPay</h3>
                <p class="step-cont-head"> Local and International utility, card and any bill payment via country specific partners in Crypto and Fiat.</p>
            </div>
        </div>
    </div>
    </div>
</section>
<section class="timeline gray-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>Timeline & Milestones</h1>
                <!-- <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. </p> -->
            </div>
        </div>
        <div class="row features-block">

            <div class="col-lg-12">
                <div id="vertical-timeline" class="vertical-container light-timeline center-orientation">
                <div class="vertical-timeline-block">
                        <div class="vertical-timeline-icon navy-bg">
                            <!--  <i class="fa fa-file-text"></i> -->
                        </div>

                        <div class="vertical-timeline-content">
                            <p> Company Set up in Singapore 
                            </p>
                            <!-- <a href="#" class="btn btn-xs btn-primary"> More info</a> -->
                            <span class="vertical-date"> Mid <br/> <small>2016 </small> </span>
                        </div>
                    </div>
                     <div class="vertical-timeline-block">
                        <div class="vertical-timeline-icon navy-bg">
                            <!--  <i class="fa fa-file-text"></i> -->
                        </div>

                        <div class="vertical-timeline-content">
                            <p> Team set up in Singapore and India for development work. Wallet work started 
                            </p>
                            <!-- <a href="#" class="btn btn-xs btn-primary"> More info</a> -->
                            <span class="vertical-date"> September <br/> <small>2016</small> </span>
                        </div>
                    </div>
                     <div class="vertical-timeline-block">
                        <div class="vertical-timeline-icon navy-bg">
                            <!--  <i class="fa fa-file-text"></i> -->
                        </div>

                        <div class="vertical-timeline-content">
                            <p> Development ongoing, started global partnerships 
                            </p>
                            <!-- <a href="#" class="btn btn-xs btn-primary"> More info</a> -->
                            <span class="vertical-date"> October-November <br/> <small>2016</small> </span>
                        </div>
                    </div>
                    <div class="vertical-timeline-block">
                        <div class="vertical-timeline-icon navy-bg">
                            <!--  <i class="fa fa-file-text"></i> -->
                        </div>

                        <div class="vertical-timeline-content">
                            <p>Managment Team has been working on this concept for over a year and after repeated
                                iterations a final model was selected
                            </p>
                            <!-- <a href="#" class="btn btn-xs btn-primary"> More info</a> -->
                            <span class="vertical-date"> January <br/> <small>2017</small> </span>
                        </div>
                    </div>

                    <div class="vertical-timeline-block">
                        <div class="vertical-timeline-icon navy-bg">
                            <!-- <i class="fa fa-inr"></i> -->
                        </div>

                        <div class="vertical-timeline-content">
                            <p>MVP started shaping up, feedback from community, advisors. Team expansion</p>
                            <!-- <a href="#" class="btn btn-xs btn-primary"> More info</a> -->
                            <span class="vertical-date"> February – March <br/> <small>2017</small> </span>
                        </div>
                    </div>

                    <div class="vertical-timeline-block">
                        <div class="vertical-timeline-icon navy-bg">
                            <!-- <i class="fa fa-users"></i> -->
                        </div>

                        <div class="vertical-timeline-content">
                            <p>Key advisors on board along with senior social associations </p> 
                            <!-- <a href="#" class="btn btn-xs btn-primary"> More info</a> -->
                            <span class="vertical-date">April<br/> <small>2017</small> </span>
                        </div>
                    </div>

                    <div class="vertical-timeline-block">
                        <div class="vertical-timeline-icon navy-bg">
                            <!-- <i class="fa fa-wrench"></i> -->
                        </div>

                        <div class="vertical-timeline-content">
                            <p>MVP, started working on the LALA COIN concept and whitepaper</p>
                            <!-- <a href="#" class="btn btn-xs btn-primary"> More info</a> -->
                            <span class="vertical-date"> May <br/> <small>2017</small> </span>
                        </div>
                    </div>

                    <div class="vertical-timeline-block">
                        <div class="vertical-timeline-icon navy-bg">
                            <!-- <i class="fa fa-btc"></i> -->
                        </div>

                        <div class="vertical-timeline-content">
                            <p>Development of LALA ID on Blockchain, started collecting data from customers</p>
                            <!-- <a href="#" class="btn btn-xs btn-primary"> More info</a> -->
                            <span class="vertical-date"> June – Jul <br/> <small>2017</small> </span>
                        </div>
                    </div>

                    <div class="vertical-timeline-block">
                        <div class="vertical-timeline-icon navy-bg">
                            <!-- <i class="fa fa-sitemap"></i> -->
                        </div>

                        <div class="vertical-timeline-content">
                            <p>ICO planning and further Blockchain development, smart contract development, due diligence, marketing campaigns, channels set up. Entire ICO team in place, White Paper complete and released, Website revamped </p>
                            <!-- <a href="#" class="btn btn-xs btn-primary"> More info</a> -->
                            <span class="vertical-date"> August – September <br/> <small>2017</small> </span>
                        </div>
                    </div>

                    <div class="vertical-timeline-block">
                        <div class="vertical-timeline-icon navy-bg">
                            <!-- <i class="fa fa-sitemap"></i> -->
                        </div>

                        <div class="vertical-timeline-content">
                            <h2>Roadmap Ahead </h2>
                            
                            <!-- <a href="#" class="btn btn-xs btn-primary"> More info</a> 
                            <span class="vertical-date"> Q3 <br/> <small>2017</small> </span>-->
                        </div>
                    </div>

                    <div class="vertical-timeline-block">
                        <div class="vertical-timeline-icon navy-bg">
                            <!-- <i class="fa fa-sitemap"></i> -->
                        </div>

                        <div class="vertical-timeline-content">
                            <p> prototype of Android mobile app, wallet with LALA ID, exchange app, global expansion in two directions: to underdeveloped regions (expansion of the network of users in Africa, Asia, South America) and to the cities that are crucial to modern business (London, Singapore, Hong Kong and San Francisco) </p>
                            <!-- <a href="#" class="btn btn-xs btn-primary"> More info</a> -->
                            <span class="vertical-date"> October <br/> <small>2017</small> </span>
                        </div>
                    </div>

                    <div class="vertical-timeline-block">
                        <div class="vertical-timeline-icon navy-bg">
                            <!-- <i class="fa fa-sitemap"></i> -->
                        </div>

                        <div class="vertical-timeline-content">
                            <p>Pre-ICO campaign, marketing, feedbacks, further global partnerships with Associations, governments, corporate in Asia and Africa. Transparency during the ICO and post ICO will be the key to our development, Engagement with various advisors, conferences, partners, media, panel discussions, meetups </p>
                            <!-- <a href="#" class="btn btn-xs btn-primary"> More info</a> -->
                            <span class="vertical-date"> October <br/> <small>2017</small> </span></div>
                    </div>

                    <div class="vertical-timeline-block">
                        <div class="vertical-timeline-icon navy-bg">
                            <!-- <i class="fa fa-sitemap"></i> -->
                        </div>

                        <div class="vertical-timeline-content">
                            <p> ICO (Crowdsale), launch of other products on the LALA Wallet App </p>
                            <!-- <a href="#" class="btn btn-xs btn-primary"> More info</a> -->
                            <span class="vertical-date"> November <br/> <small>2017</small> </span>
                        </div>
                    </div>

                    <div class="vertical-timeline-block">
                        <div class="vertical-timeline-icon navy-bg">
                            <!-- <i class="fa fa-sitemap"></i> -->
                        </div>

                        <div class="vertical-timeline-content">
                            <p> ICO concludes, Launch of iOS App </p>
                            <!-- <a href="#" class="btn btn-xs btn-primary"> More info</a> -->
                            <span class="vertical-date"> December <br/> <small>2017</small> </span></div>
                    </div>
                 
                  <div class="vertical-timeline-block">
                        <div class="vertical-timeline-icon navy-bg">
                            <!-- <i class="fa fa-sitemap"></i> -->
                        </div>

                        <div class="vertical-timeline-content">
                            <p> Integration of partners, listing on Excahneg, full product launch, further decentralization of LALA architecture. </p>
                            <!-- <a href="#" class="btn btn-xs btn-primary"> More info</a> -->
                            <span class="vertical-date"> December <br/> <small>2017</small> </span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<div class="container mg4">
<div class="row">
    <div class="col-sm-12">
        <div class="col-md-5 col-sm-12">
            <h2>Single payment Platform for all your financial needs</h2>
            <p style="margin-top: 4%;">The platform connects assets and businesses on blockchains to the real-world in a decentralized manner. Developers can develop security smart contract modules, businesses can connect their users and usecase to real-world payments.</p>
        </div>
        <div class="col-sm-12 col-md-7">
            <img src="/skin/landing/images/landing/web-products-image.png" class="img-responsive" width="100%" alt="LALA world service">
        </div>
    </div>
</div>
</div> 
<div class="wellcome-area" style="background-position: 50% 95px;">
                <div class="well-bg">
                    <div class="test-overly"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="wellcome-text" style="background-position: 50% 184px;">
                                    <div class="well-text text-center">
                                        <h2>Welcome To Our LALA WORLD</h2>
                                        <p>
                                            LALA World (“LALA”) is a One Stop Wallet, a financial services ecosystem, bridging the Fiat and the Crypto world, thereby empowering the unbanked and underserved with everyday banking needs.
                                        </p>
                                        <div class="subs-feilds">
                                            <div class="suscribe-input">
                                                <input type="email" class="email form-control width-80" id="sus_email" placeholder="Email">
                                                <button type="submit" id="sus_submit" class="add-btn width-20">Subscribe</button>
                                                <div id="msg_Submit" class="h3 text-center hidden"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<div class="clearfix"></div>
<section id="team" class="team">
    <div class="container">
        <div class="row m-b-lg">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>LALA WORLD Team</h1>
            </div>
        </div>
       <div class="row">
        <div class="col-md-2 col-sm-4 col-md-offset-2">
          <div class="team-1-member"> <img alt="Team Member" width="150" class="background-image" src="/skin/landing/images/team/Sankalp.png">
            <h5>Sankalp Shangari</h5>
            <span>CEO</span><br>
            <ul class="social-icons">
              <li> London </li>
              <li> <a href="" target="_blank"> <i class="fa fa-linkedin" aria-hidden="true"></i> </a> </li>
            </ul>
          </div>
        </div>
        <div class="col-md-2 col-sm-4">
          <div class="team-1-member"><img alt="Team Member" width="150" class="background-image" src="/skin/landing/images/team/Deepoo.png">
            <h5>Deepoo Gupta</h5>
            <span>Technology</span><br>
            <ul class="social-icons">
             <li> India </li>
              <li> <a href="" target="_blank"> <i class="fa fa-linkedin" aria-hidden="true"></i> </a> </li>
            </ul>
          </div>
        </div>
        <div class="col-md-2 col-sm-4">
          <div class="team-1-member"> <img alt="Team Member" width="150" class="background-image" src="/skin/landing/images/team/Dev.png">
            <h5>Dev Singh</h5>
            <span>Graphics & Marketing</span><br>
            <ul class="social-icons">
             <li> India </li>
              <li> <a href="" target="_blank"> <i class="fa fa-linkedin" aria-hidden="true"></i> </a> </li>
            </ul>
          </div>
        </div>
        <div class="col-md-2 col-sm-4">
          <div class="team-1-member"> <img alt="Team Member" width="150" class="background-image" src="/skin/landing/images/team/kanav.png">
            <h5>Kanav Bhan</h5>
            <span>COO</span><br>
            <ul class="social-icons">
             <li> India </li>
              <li> <a href="" target="_blank"> <i class="fa fa-linkedin" aria-hidden="true"></i> </a> </li>
            </ul>
          </div>
        </div>
      </div>
       <div class="row">
        <div class="col-md-2 col-sm-4 col-md-offset-2">
          <div class="team-1-member"> <img alt="Team Member" width="150" class="background-image" src="/skin/landing/images/team/Sachin.png">
            <h5>Sachin Sharma</h5>
            <span>Technology</span><br>
            <ul class="social-icons">
              <li> India </li>
              <li> <a href="" target="_blank"> <i class="fa fa-linkedin" aria-hidden="true"></i> </a> </li>
            </ul>
          </div>
        </div>
        <div class="col-md-2 col-sm-4">
          <div class="team-1-member"><img alt="Team Member" width="150" class="background-image" src="/skin/landing/images/team/Vivek.png">
            <h5>Vivek</h5>
            <span>Technology</span><br>
            <ul class="social-icons">
             <li> India </li>
              <li> <a href="" target="_blank"> <i class="fa fa-linkedin" aria-hidden="true"></i> </a> </li>
            </ul>
          </div>
        </div>
        <div class="col-md-2 col-sm-4">
          <div class="team-1-member"> <img alt="Team Member" width="150" class="background-image" src="/skin/landing/images/team/Yannick_Naud.png">
            <h5>Yannick Naud</h5>
           
            <ul class="social-icons">
             <li> London </li>
              <li> <a href="" target="_blank"> <i class="fa fa-linkedin" aria-hidden="true"></i> </a> </li>
            </ul>
          </div>
        </div>
        <div class="col-md-2 col-sm-4">
          <div class="team-1-member"> <img alt="Team Member" width="150" class="background-image" src="/skin/landing/images/team/Romain_Girbal.png">
            <h5>Romain Girbal</h5>
           
            <ul class="social-icons">
             <li> Guinea </li>
              <li> <a href="" target="_blank"> <i class="fa fa-linkedin" aria-hidden="true"></i> </a> </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2 col-sm-4 col-md-offset-2">
          <div class="team-1-member"> <img alt="Team Member" width="150" class="background-image" src="/skin/landing/images/team/Thibault_Launay.png">
            <h5>Thibault Launay</h5>
          
            <ul class="social-icons">
              <li> London </li>
              <li> <a href="" target="_blank"> <i class="fa fa-linkedin" aria-hidden="true"></i> </a> </li>
            </ul>
          </div>
        </div>
        <div class="col-md-2 col-sm-4">
          <div class="team-1-member"><img alt="Team Member" width="150" class="background-image" src="/skin/landing/images/team/Mathias_Leopoldie.png">
            <h5>Mathias Leopoldie</h5>
            
            <ul class="social-icons">
             <li> France </li>
              <li> <a href="" target="_blank"> <i class="fa fa-linkedin" aria-hidden="true"></i> </a> </li>
            </ul>
          </div>
        </div>
        <div class="col-md-2 col-sm-4">
         
        </div>
        <div class="col-md-2 col-sm-4">
          
        </div>
      </div>
    </div>
</section>

<div class="clearfix"></div>
<section id="contact" class="contact">
    <div class="container">
        <div class="row m-b-lg">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>Contact Us</h1>
            </div>
        </div>
        <div class="row m-b-lg">
            <div class="col-sm-12">
                <div class="col-sm-4">
                   <address>
                        <strong><span class="navy">Singapore</span></strong><br/>
                        53 B, Grange Road<br/>
                        Singapore - 249567<br/>
                    </address>
                </div>
                <div class="col-sm-4">
                    
                </div>
                <div class="col-sm-4">
                <h4><span class="navy">JOIN OUR COMMUNITY</span></h4>
                    <ul class="comm_channel">
                        <li>
                        <i class="fa fa-twitter" aria-hidden="true"></i> Twitter
                        </li>
                        <li>
                        <i class="fa fa-facebook" aria-hidden="true"></i> Facebook
                        </li>
                        <li>
                        <i class="fa fa-linkedin" aria-hidden="true"></i> LinkidIn
                        </li>
                        <li>
                        <i class="fa fa-slack" aria-hidden="true"></i> Slack
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center" style="padding-bottom: 3%;">
                <a href="mailto:<?php echo $this->support_email ?>" class="btn btn-primary">Send us email</a>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
    // particle.min.js hosted on GitHub
// Scroll down for initialisation code

!function(a){var b="object"==typeof self&&self.self===self&&self||"object"==typeof global&&global.global===global&&global;"function"==typeof define&&define.amd?define(["exports"],function(c){b.ParticleNetwork=a(b,c)}):"object"==typeof module&&module.exports?module.exports=a(b,{}):b.ParticleNetwork=a(b,{})}(function(a,b){var c=function(a){this.canvas=a.canvas,this.g=a.g,this.particleColor=a.options.particleColor,this.x=Math.random()*this.canvas.width,this.y=Math.random()*this.canvas.height,this.velocity={x:(Math.random()-.5)*a.options.velocity,y:(Math.random()-.5)*a.options.velocity}};return c.prototype.update=function(){(this.x>this.canvas.width+20||this.x<-20)&&(this.velocity.x=-this.velocity.x),(this.y>this.canvas.height+20||this.y<-20)&&(this.velocity.y=-this.velocity.y),this.x+=this.velocity.x,this.y+=this.velocity.y},c.prototype.h=function(){this.g.beginPath(),this.g.fillStyle=this.particleColor,this.g.globalAlpha=.7,this.g.arc(this.x,this.y,1.5,0,2*Math.PI),this.g.fill()},b=function(a,b){this.i=a,this.i.size={width:this.i.offsetWidth,height:this.i.offsetHeight},b=void 0!==b?b:{},this.options={particleColor:void 0!==b.particleColor?b.particleColor:"#fff",background:void 0!==b.background?b.background:"#1a252f",interactive:void 0!==b.interactive?b.interactive:!0,velocity:this.setVelocity(b.speed),density:this.j(b.density)},this.init()},b.prototype.init=function(){if(this.k=document.createElement("div"),this.i.appendChild(this.k),this.l(this.k,{position:"absolute",top:0,left:0,bottom:0,right:0,"z-index":1}),/(^#[0-9A-F]{6}$)|(^#[0-9A-F]{3}$)/i.test(this.options.background))this.l(this.k,{background:this.options.background});else{if(!/\.(gif|jpg|jpeg|tiff|png)$/i.test(this.options.background))return console.error("Please specify a valid background image or hexadecimal color"),!1;this.l(this.k,{background:'url("'+this.options.background+'") no-repeat center',"background-size":"cover"})}if(!/(^#[0-9A-F]{6}$)|(^#[0-9A-F]{3}$)/i.test(this.options.particleColor))return console.error("Please specify a valid particleColor hexadecimal color"),!1;this.canvas=document.createElement("canvas"),this.i.appendChild(this.canvas),this.g=this.canvas.getContext("2d"),this.canvas.width=this.i.size.width,this.canvas.height=this.i.size.height,this.l(this.i,{position:"relative"}),this.l(this.canvas,{"z-index":"20",position:"relative"}),window.addEventListener("resize",function(){return this.i.offsetWidth===this.i.size.width&&this.i.offsetHeight===this.i.size.height?!1:(this.canvas.width=this.i.size.width=this.i.offsetWidth,this.canvas.height=this.i.size.height=this.i.offsetHeight,clearTimeout(this.m),void(this.m=setTimeout(function(){this.o=[];for(var a=0;a<this.canvas.width*this.canvas.height/this.options.density;a++)this.o.push(new c(this));this.options.interactive&&this.o.push(this.p),requestAnimationFrame(this.update.bind(this))}.bind(this),500)))}.bind(this)),this.o=[];for(var a=0;a<this.canvas.width*this.canvas.height/this.options.density;a++)this.o.push(new c(this));this.options.interactive&&(this.p=new c(this),this.p.velocity={x:0,y:0},this.o.push(this.p),this.canvas.addEventListener("mousemove",function(a){this.p.x=a.clientX-this.canvas.offsetLeft,this.p.y=a.clientY-this.canvas.offsetTop}.bind(this)),this.canvas.addEventListener("mouseup",function(a){this.p.velocity={x:(Math.random()-.5)*this.options.velocity,y:(Math.random()-.5)*this.options.velocity},this.p=new c(this),this.p.velocity={x:0,y:0},this.o.push(this.p)}.bind(this))),requestAnimationFrame(this.update.bind(this))},b.prototype.update=function(){this.g.clearRect(0,0,this.canvas.width,this.canvas.height),this.g.globalAlpha=1;for(var a=0;a<this.o.length;a++){this.o[a].update(),this.o[a].h();for(var b=this.o.length-1;b>a;b--){var c=Math.sqrt(Math.pow(this.o[a].x-this.o[b].x,2)+Math.pow(this.o[a].y-this.o[b].y,2));c>20||(this.g.beginPath(),this.g.strokeStyle=this.options.particleColor,this.g.globalAlpha=(20-c)/20,this.g.lineWidth=.7,this.g.moveTo(this.o[a].x,this.o[a].y),this.g.lineTo(this.o[b].x,this.o[b].y),this.g.stroke())}}0!==this.options.velocity&&requestAnimationFrame(this.update.bind(this))},b.prototype.setVelocity=function(a){return"fast"===a?1:"slow"===a?.33:"none"===a?0:.66},b.prototype.j=function(a){return"high"===a?5e3:"low"===a?2e4:isNaN(parseInt(a,10))?1e4:a},b.prototype.l=function(a,b){for(var c in b)a.style[c]=b[c]},b});

// Initialisation

var canvasDiv = document.getElementById('particle-canvas');
var options = {
  particleColor: '#fff',
  background: '/skin/landing/images/landing/bb6.jpg',
  interactive: true,
  speed: 'medium',
  density: 'high'
};
var particleCanvas = new ParticleNetwork(canvasDiv, options);
</script>
