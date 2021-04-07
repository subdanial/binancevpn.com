<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OpenVPN Service for Binance</title>
  <link rel="stylesheet" href="node_modules/alertifyjs/build/css/alertify.min.css">
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/app.css">
</head>

<body>
  <main id="app">




    <!-- Modal buy-->
    <div class="modal  fade" id="select_plan" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="js_modal_title modal-title">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            <form id="order_form" action="database.php" method="post">
              <h5 class="bg-light  d-flex justify-content-between py-2 px-3">
                Currently we only support TRC20 Tether <div>
                  <img src="img/usdt.png" width="28px" class="ms-2">

                </div>

              </h5>
              <div class="w-100 d-block  border-1 border-bottom my-3"></div>


              <input type="hidden" class="js_hidden_plan" name="plan">
              <input type="hidden" class="js_hidden_txid" name="txid">

              <!-- step -->
              <label for="" class="form-label lead d-block m-0"> <span>Step 1 :</span> <span class="fw-bold"> Enter your
                  email</span><span class="text-danger"> *</span></label>
              <small class="form-text text-danger"> Account file will be sent to your email </small>
              <input class="form-control mt-2  js_email" id="" type="mail" name="email" placeholder="Enter your email here" required>

              <!-- step -->
              <label for="" class="form-label mt-5 lead d-block m-0"> Step 2 : <span class="fw-bold"> Enter The address
                  of
                  the Tron wallet you paid with </span><span class="text-danger"> *</span></label>
              <small class="form-text text-danger"> We need your wallet address to check transaction origin </small>
              <input class="form-control mt-2 js_wallet" id="" type="text" name="wallet" placeholder="Wallert Address" required>


              <!-- step -->
              <label for="" class="form-label mt-5 lead d-block m-0"> Step 3 : <span class="fw-bold"> Send TRC20 Tether
                  to
                  this address </span><span class="text-danger"> *</span></label>
              <small class="form-text text-danger"> Check the exact address </small>
              <div class="text-center">
                <span class="d-block lead mt-3">Amount : <span class="js_plan_price"> 00.00 </span> USDT-TRC20</span>
                <img src="img/qr.png" class="mx-auto d-block my-3" alt="">
                <p class="lead">

                  TZ4AB4fxy7XPbc424Mc7xmAuWw5kfeWuSc
                </p>

              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-warning js_submit">Submit</button>

          </div>
        </div>
      </div>
    </div>

    <!-- Modal confirm -->

    <div class="modal fade" id="txid" tabindex="-1" aria-labelledby="Label" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="Label"></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body text-center">
                <p class="lead">We are cheking your transaction - VPN Account will be send to your mail</p>
            <div class="alert alert-warning" role="alert">
              <h3>
                Be sure to keep your Transaction UUID to get support
              </h3>
            </div>


            <h5>
              Transaction UUID : <span class="js_txid"> </span>
            </h5>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-warning" data-bs-dismiss="modal">OK</button>
          </div>
        </div>
      </div>
    </div>

    <header>

      <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="#"><img src="img/logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav pb-1 pt-1 ms-auto">
              <li class="nav-item">
                <a class="nav-link text-primary pt-2 mt-1 me-4" href="#why">WHY USE</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-primary pt-2 mt-1 me-4" href="#features">FEATURES</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-primary pt-2 mt-1 me-4 " href="#pricing">PRICING</a>
              </li>

              <li class="nav-item">
                <a class="nav-link fw-bold d-none d-lg-block border border-3 border-warning rounded-pill px-3 text-dark" href="#download">GET BINANCE VPN</a>
                <a class="nav-link text-primary d-lg-none d-block pt-2 mt-1 me-4 " href="#download">GET BINANCE VPN</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <div id="home" class="_hero pt-5 mt-lg-0 mt-5 bg-dark">
      <div class="container">


        <div class="row align-items-center">
          <div class="col-lg-6">
            <img class="py-lg-5 d-none d-lg-block" src="img/hero.png" alt="">
          </div>
          <div class="col-lg-6">
            <div class="text-lg-end text-center text-white">
              <img src="img/binance.png" alt="">
              <h1>Keep your assets safe</h1>
              <h5>Dedicated IP for each user</h5>
              <div class="_buttons py-3">
                <a href="#pricing" type="button" class="btn btn-warning me-2">Get account</a>
                <a href="#download" type="button" class="btn btn-outline-warning">Download Connection</a>
              </div>
              <h6 class="mt-lg-5 mt-3 pb-lg-0 pb-3">We only accept crypto :
                <img src="img/btc.png" class="mx-1">
                <img src="img/ltc.png" class="mx-1">
                <img src="img/trx.png" class="mx-1">
                <img src="img/usdt.png" class="mx-1">
              </h6>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="why" height="300px"></div>
    <div class="_why pt-5 mt-5 ">
      <div class="container ">
        <h3 class="text-center">Why do I need Binance openvpn service?</h3>
        <p class="text-center text-muted pb-4">Keep trading safe</p>
        <div class="row text-center">

          <!-- 1 -->
          <div class="col-lg-4 border-lg-end ">
            <div class="_image ">
              <!-- <img src="https://picsum.photos/300" alt=""> -->
            </div>
            <div class="_title lead font-weight  py-2 ">
              ACCESS TO WEBSITES
            </div>
            <div class="_describe  w-75 mx-auto text-muted">
              We created ProtonVPN to protect the journalists and activists who use ProtonMail. ProtonVPN breaks down
              the barriers of Internet censorship, allowing you to access any website or content.
            </div>
          </div>
          <!-- 2 -->
          <div class="col-lg-4 border-lg-end">
            <div class="_image ">
              <!-- <img src="https://picsum.photos/300" alt=""> -->
            </div>
            <div class="_title lead font-weight  py-2 ">
              PRIVACY
            </div>
            <div class="_describe  w-75 mx-auto text-muted">
              Keep your browsing history private. As a Swiss VPN provider, we do not log user activity or share data
              with third parties. Our anonymous VPN service enables Internet without surveillance.
            </div>
          </div>
          <!-- 3 -->
          <div class="col-lg-4 border-lg-end">
            <div class="_image ">
              <!-- <img src="https://picsum.photos/300" alt=""> -->
            </div>
            <div class="_title lead font-weight  py-2 ">
              SECURITY
            </div>
            <div class="_describe  w-75 mx-auto text-muted">
              Our secure VPN sends your internet traffic through an encrypted VPN tunnel, so your passwords and
              confidential data stay safe, even over public or untrusted Internet connections.
            </div>
          </div>
        </div>

      </div>

    </div>
    <div id="features" height="300px"></div>
    <div class="_features bg-light pb-5 pt-5 mt-5">
      <div class="container p-lg-0 p-5">
        <div class="row">
          <div class="col-12">
            <h3 class="text-center pb-1">BinanceVPN Features</h3>
            <p class="text-center pb-5 text-muted">BinanceVPN is an OpenVPN with Dedicated ip configured for binance
              traders
            </p>
          </div>
          <!-- item -->
          <div class="col-lg-2 col-4 py-4 _item">
            <img src="img/features/secure_vpn_account.png" class="d-block mx-auto">
            <span class="text-center d-block text-muted pt-2 lh-1">Secure VPN Account</span>
          </div>
          <!-- item -->
          <div class="col-lg-2 col-4 py-4 _item">
            <img src="img/features/encrypted_wi_fi.png" class="d-block mx-auto">
            <span class="text-center d-block text-muted pt-2 lh-1">Encrypted WiFi</span>
          </div>
          <!-- item -->
          <div class="col-lg-2 col-4 py-4 _item">
            <img src="img/features/p2p_and_vo_ip_support.png" class="d-block mx-auto">
            <span class="text-center d-block text-muted pt-2 lh-1">P2P Support</span>
          </div>
          <!-- item -->
          <div class="col-lg-2 col-4 py-4 _item">
            <img src="img/features/pptp_open_l2pt.png" class="d-block mx-auto">
            <span class="text-center d-block text-muted pt-2 lh-1">OpenVpn Protocol</span>
          </div>
          <!-- item -->
          <div class="col-lg-2 col-4 py-4 _item">
            <img src="img/features/devices_simultaneously.png" class="d-block mx-auto">
            <span class="text-center d-block text-muted pt-2 lh-1">2 Devices simultaneously</span>
          </div>
          <!-- item -->
          <div class="col-lg-2 col-4 py-4 _item">
            <img src="img/features/block_ads.png" class="d-block mx-auto">
            <span class="text-center d-block text-muted pt-2 lh-1">Block ads, trackers, and malware</span>
          </div>
          <!-- item -->
          <div class="col-lg-2 col-4 py-4 _item">
            <img src="img/features/multiple_vpn_gatways.png" class="d-block mx-auto">
            <span class="text-center d-block text-muted pt-2 lh-1">Multiple VPN Gateways</span>
          </div>
          <!-- item -->
          <div class="col-lg-2 col-4 py-4 _item">
            <img src="img/features/unlimited_bandwidth.png" class="d-block mx-auto">
            <span class="text-center d-block text-muted pt-2 lh-1">Unlimited Bandwidth
            </span>
          </div>
          <!-- 1 -->
          <div class="col-lg-2 col-4 py-4 _item">
            <img src="img/features/socks5_proxy_included.png" class="d-block mx-auto">
            <span class="text-center d-block text-muted pt-2 lh-1">
              SOCKS5 Proxy Included</span>
          </div>
          <!-- 1 -->
          <div class="col-lg-2 col-4 py-4 _item">
            <img src="img/features/no_traffic_logs.png" class="d-block mx-auto">
            <span class="text-center d-block text-muted pt-2 lh-1">Connection Stats</span>
          </div>
          <!-- 1 -->
          <div class="col-lg-2 col-4 py-4 _item">
            <img src="img/features/instant_setup.png" class="d-block mx-auto">
            <span class="text-center d-block text-muted pt-2 lh-1">Instant Setup</span>
          </div>
          <!-- 1 -->
          <div class="col-lg-2 col-4 py-4 _item">
            <img src="img/features/easy_to_use.png" class="d-block mx-auto">
            <span class="text-center d-block text-muted pt-2 lh-1">Easy to use</span>
          </div>
        </div>
      </div>
    </div>


    <div id="pricing" class="_plans pt-5 ">
      <div class="container p-lg-0 p-5">
        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
          <h3 class="">Select your VPN plan</h3>
          <p class="text-muted">Try Hotspot Shield risk-free. All plans come with a 45-day money-back guarantee.</p>
        </div>

        <div class="row  mb-3 p-0 text-center">
          <div class="col-lg-4 col-12">
            <div class="card mb-4 shadow-sm">
              <div class="card-title pt-4 ">
                <h4 class="my-0 fw-normal fs-7">2-year plan</h4>
              </div>
              <div class="card-body">
                <h1 class="card-title pricing-card-title">$7.21<small class="text-muted">/ mo</small></h1>
                <ul class="list-unstyled mb-4">
                  <li class="badge rounded-pill p-2 px-3 text-dark  bg-warning">Save 72%</li>
                  <li class="pt-3 text-dark">For all VPN features</li>
                </ul>
                <button type="button" class="js_plan w-100 btn btn-warning" data-plan="2">SELECT PLAN</button>
                <span class="mx-1 text-muted d-block pt-3"><del class="mx-1 ">$523.80</del><span class="mx-1">$184.00
                    for
                    the first 2 years</span></span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-12">
            <div class="card  mb-4 shadow-sm">
              <div class="card-title pt-4 ">
                <h4 class="my-0 fw-normal fs-7">1-year plan</h4>
              </div>
              <div class="card-body">
                <h1 class="card-title pricing-card-title">$9.80<small class="text-muted">/ mo</small></h1>
                <ul class="list-unstyled mb-4">
                  <li class="badge rounded-pill p-2 px-3 text-dark  bg-secondary">Save 60%</li>
                  <li class="pt-3 text-dark">For all VPN features</li>
                </ul>
                <button type="button" class="js_plan w-100 btn  btn-outline-warning" data-plan="1">SELECT PLAN</button>
                <span class="mx-1 text-muted d-block pt-3"><del>$263.50</del> $99 for the first year</span>
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-12">
            <div class="card  mb-4 shadow-sm">
              <div class="card-title pt-4 ">
                <h4 class="my-0 fw-normal fs-7">1-month plan</h4>
              </div>
              <div class="card-body">
                <h1 class="card-title pricing-card-title">$21.95<small class="text-muted">/ mo</small></h1>
                <ul class="list-unstyled mb-4">
                  <li class="badge rounded-pill p-2 px-3 text-dark  bg-secondary">Save 0%</li>
                  <li class="pt-3 text-dark">For all VPN features</li>
                </ul>
                <button type="button" class="js_plan w-100 btn  btn-outline-warning" data-plan="0">SELECT PLAN</button>
                <span class="mx-1 text-muted d-block pt-3">$21.95 billed every month</span>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>

    <div id="download" class="_download bg-light pt-5 pb-5">
      <div class="container">

        <div class="row">
          <div class="col-12">
            <h3 class="text-center pb-1">
              Download Binance OpenVPN Client
            </h3>
            <p class="text-muted text-center pb-3">
              Binance OpenVPN offers user-friendly VPN software for all major operating systems.
            </p>
          </div>
          <div class="col-lg col-6">
            <div class="_downloadIcon "><a class="fw-bold text-dark text-decoration-none text-center" href="https://play.google.com/store/apps/details?id=net.openvpn.openvpn" data-ga-slug="Android">
                <div class="_inner bg-bw-1 mb-3">
                  <div class=""><span class="SVG-wrapper SVG-loaded"><img data-src="svg/android.svg" alt="vpn for android" class="SVG scale-48 js-SVG--with-scale lazyloaded" src="svg/android.svg"></span>
                  </div>
                </div>
                <div>
                  <div class="text-reset text-dark pb-lg-0 pb-3">Android</div>
                </div>
              </a></div>
          </div>
          <div class="col-lg col-6">
            <div class="_downloadIcon "><a class="fw-bold text-dark text-decoration-none text-center" href="files/openvpn-connect-3.2.3.1851_signed.msi" data-ga-slug="Windows">
                <div class="_inner bg-bw-1 mb-3">
                  <div class="svg/windows.svg"><span class="SVG-wrapper SVG-loaded"><img data-src="" alt="vpn for windows" class="SVG scale-48 js-SVG--with-scale lazyloaded" src="svg/windows.svg"></span>
                  </div>
                </div>
                <div>
                  <div class="text-reset text-dark pb-lg-0 pb-3">Windows</div>
                </div>
              </a></div>
          </div>
          <div class="col-lg col-6">
            <div class="_downloadIcon "><a class="fw-bold text-dark text-decoration-none text-center" href="files/openvpn-connect-3.2.7.3220_signed.dmg" data-ga-slug="macOS">
                <div class="_inner bg-bw-1 mb-3">
                  <div class=""><span class="SVG-wrapper SVG-loaded"><img data-src="svg/macos.svg" alt="vpn for macos" class="SVG scale-48 js-SVG--with-scale lazyloaded" src="svg/macos.svg"></span>
                  </div>
                </div>
                <div>
                  <div class="text-reset text-dark pb-lg-0 pb-3">macOS</div>
                </div>
              </a></div>
          </div>
          <div class="col-lg col-6">
            <div class="_downloadIcon "><a class="fw-bold text-dark text-decoration-none text-center" href="https://itunes.apple.com/us/app/openvpn-connect/id590379981?mt=8" data-ga-slug="iOS · iPhone · iPad">
                <div class="_inner bg-bw-1 mb-3">
                  <div class=""><span class="SVG-wrapper SVG-loaded"><img data-src="svg/ios.svg" alt="vpn for ios" class="SVG scale-48 js-SVG--with-scale lazyloaded" src="svg/ios.svg"></span>
                  </div>
                </div>
                <div>
                  <div class="text-reset text-dark pb-lg-0 pb-3">iOS · iPhone · iPad</div>
                </div>
              </a></div>
          </div>

          <div class="col-lg col-6">
            <div class="_downloadIcon "><a class="fw-bold text-dark text-decoration-none text-center" href="https://github.com/OpenVPN/openvpn3-linux/" data-ga-slug="Linux">
                <div class="_inner bg-bw-1 mb-3">
                  <div class=""><span class="SVG-wrapper SVG-loaded"><img data-src="svg/linux.svg" alt="vpn for Linux" class="SVG scale-48 js-SVG--with-scale lazyloaded" src="svg/linux.svg"></span>
                  </div>
                </div>
                <div>
                  <div class="text-reset text-dark pb-lg-0 pb-3">Linux</div>
                </div>
              </a></div>
          </div>


        </div>
      </div>
    </div>
    <footer class="_footer bg-dark pt-3 text-light">
      <div class="container">
        <div class="d-lg-flex justify-content-between">
          <p class="text-lg-start text-center">
            Copyright © OpenVPN Service Fixed Ip For Binance , Inc. All Rights Reserved.
          </p>
          <div class="links     text-lg-start text-center">
            <a href="#" class="me-3 text-light  text-decoration-none">Privacy Policy</a>
            <a href="#" class="me-3 text-light  text-decoration-none">Terms</a>
          </div>
        </div>
      </div>
    </footer>
  </main>

  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="node_modules/alertifyjs/build/alertify.min.js"></script>

  <script>
    var data_plan;

    $('.navbar-nav>li>a').on('click', function() {
      $('.navbar-collapse').collapse('hide');
    });
    // bootstrap_nav_fix

    function uuidv4() {
      return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
        var r = Math.random() * 16 | 0,
          v = c == 'x' ? r : (r & 0x3 | 0x8);
        return v.toString(16);
      });
    }
    //uuid

    $('.js_plan').click(function() {
      data_plan = $(this).attr('data-plan')






      switch (data_plan) {
        case '0':
          $('.js_modal_title').html('Binance OpenVPN monthly plan  <span class="badge bg-warning fw-normal text-dark ms-2"> 1 Month </span>')
          $('.js_plan_price').html('21.95')
          $('.js_hidden_plan').val('0')

          break;
        case '1':
          $('.js_modal_title').html('Binance OpenVPN yearly plan   <span class="badge bg-warning fw-normal text-dark ms-2"> 1 Year </span> ')
          $('.js_plan_price').html('99.00')
          $('.js_hidden_plan').val('1')

          break;
        case '2':
          $('.js_modal_title').html('Binance OpenVPN Perennial plan    <span class="badge bg-warning fw-normal text-dark ms-2"> 2 Years </span> ')
          $('.js_plan_price').html('184.00')
          $('.js_hidden_plan').val('2')

          break;
      }
      $('#select_plan').modal('show');
    })









    $('.js_submit').click(function() {


      function isValidEmail(emailText) {
        var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
        return pattern.test(emailText);
      };


      var valid_mail = false;
      var valid_wallet = false;

      if (isValidEmail($('.js_email').val())) {
        valid_mail = true;
      } else {
        valid_mail = false;
        alertify.set('notifier', 'position', 'top-center');
        alertify.error('Email is invalid');
      }


      if ($('.js_wallet').val() != '') {
        valid_wallet = true;
      } else {
        valid_mail = false;
        alertify.set('notifier', 'position', 'top-center');
        alertify.error('Wallet is invalid');
      }

      if (valid_wallet, valid_mail) {
        var uuid = uuidv4();
        $('.js_hidden_txid').val(uuid)
        $('.js_txid').html(uuid)

        var form = $('#order_form');
        var url = form.attr('action');

        $.ajax({
          type: "POST",
          url: url,
          data: form.serialize(),
          success: function(data) {
            alertify.set('notifier', 'position', 'top-center');
            alertify.success(data);
            $('#select_plan').modal('hide');
            $('#txid').modal('show');
          }
        });
      }



    });
  </script>













</body>

</html>
