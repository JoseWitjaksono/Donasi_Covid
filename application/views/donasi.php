<!--TITLE-->
	<title>DONASI COVID</title>

    <!--::::: SUPPORT META :::::::-->
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--::::: CSS FILES:::::::-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/stellarnav.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/space__grotesk.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/typography.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/buttons.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/inner.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/theme.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/header.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/footer.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">

</head><!--HEAD END-->

<body><!--BODY START-->


    <!--PRELAODER START-->
     <div class="preloader" style="display: none;">
         <div class="preloader__container">
            <img src="<?php echo base_url(); ?>assets/images/big__virous.png" alt="">
         </div>
     </div>
    <!--PRELAODER END-->


      <!--:::::HEADER AREA START :::::::-->
      <div class="header__area header__absolute" id="header">
        <div class="container">
            <div class="row">
                <div class="col-6 col-md-5 col-xl-3 align-self-center">
                    <a href="#" class="logo"><img src="https://apps.telkomakses.co.id/portal/img/logo_ta2.png" alt="" style="width: 70%"></a>
                </div>
                <div class="col-9 col-md-10 col-xl-9 text-center align-self-center" id="profile_area">
                    <div class="main__menu">
                        <div class="stellarnav light right desktop"><a href="#" class="menu-toggle"><span class="bars"><span></span><span></span><span></span></span> </a>
                            <ul class="navclass" id="scroll"><a href="#" class="close-menu full"><span class="icon-close"></span>Close</a>
                                <li class=""><img src="<?= $this->session->userdata("foto")?>" style="height: 55px; width: 55px; border-radius: 50%;"></li>
                                <li class="has-sub current"><a href="#"><?= $this->session->userdata("nama")?></a>
                                    <ul>
                                        <li><a href="<?= base_url() ?>Donasi/logout">Logout</a></li>
                                    </ul>
                                    <a class="dd-toggle" href="#"><span class="icon-circle-arrow-right"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--::::: HEADER AREA END :::::::-->

    <!--::::: WELCOME AREA START :::::::-->
    <div class="welcome welcome1" id="home">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-lg-6">
                    <div class="title wow fadeInLeft" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                        <p class="title__top"><img src="<?php echo base_url(); ?>assets/images/alert.svg" alt="">Covid-19 Alert</p>
                        <h1>Save yourself Save the world.</h1>
						<h5>Dalam rangka mendorong keterlibatan Insan Telkom Akses untuk aktif bekerjasama membantu dan bergotong royong dalam menanggulangi pandemi Covid-19 melalui berbagai aksi sosial,</h5>
						<h5>Perusahaan mengajak seluruh Insan Telkom Akses untuk berbagi secara sukarela menyumbangkan sebagian THR yang diterima dengan mekanisme pengajuan pemotongan THR secara aktif,
						Jika Insan Telkom Akses bersedia, Silahkan klik tombol dibawah ini</h5>
                        <div class="space-30"></div>
						<?php
							if($state == "BELUM") {
								?>
								<a type="button" class="cbtn btn1" data-toggle="modal" data-target="#elegantModalForm">Donasi</a>
								<?php
							}else{
							    ?>
                                <a type="button" class="cbtn btn1" onclick="alreadyDonated()">Donasi</a>
                                <?php
                            }
						?>
                    </div>
                </div>
            </div>
        </div>
        <img src="<?php echo base_url(); ?>assets/images/shape__white1.png" alt="" class="shape shape1">
        <img src="<?php echo base_url(); ?>assets/images/shape__white2.png" alt="" class="shape shape2">

        <div class="welcome_shapes wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
            <div class="welcome_shapes__wrap">
                <img class="welcome__shape__bg " src="<?php echo base_url(); ?>assets/images/hero__bg.png" alt="">
                <img class="welcome_shape welcome_shapes1" src="<?php echo base_url(); ?>assets/images/logo_flu2.png" alt="">
                <img class="welcome_shape welcome_shapes2" src="<?php echo base_url(); ?>assets/images/big__virous.png" alt="">
                <img class="welcome_shape welcome_shapes3" src="<?php echo base_url(); ?>assets/images/big__virous.png" alt="">
                <img class="welcome_shape welcome_shapes4" src="<?php echo base_url(); ?>assets/images/big__virous.png" alt="">
            </div>
        </div>

    </div>
    <!--::::: WELCOME AREA END :::::::-->

    <!--::::: ABOUT AREA START :::::::-->
    <div class="about__area section-padding" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="about__img wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                        <img src="<?php echo base_url(); ?>assets/images/about__left.png" alt="image">
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="about__text wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                        <div class="title">
                            <p class="title__top">About Covid-19</p>
                            <h3>Apa itu Novel Corona Virus?</h3>
                            <h4>Penyakit coronavirus (COVID-19) adalah penyakit menular yang disebabkan oleh virus jenis baru yang belum pernah teridentifikasi pada manusia.</h4>
							<br>
							<h4>Virus ini menyebabkan penyakit saluran pernapasan (seperti flu) dengan gejala seperti batuk, demam, dan pada kasus yang lebih serius, pneumonia. Anda dapat mencegahnya dengan mencuci tangan secara rutin dan menghindari menyentuh wajah.</h4>
                            <div class="space-30"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="<?php echo base_url(); ?>assets/images/shape__white2.png" alt="" class="about__shape about__shape1">
        <img src="<?php echo base_url(); ?>assets/images/shape__white2.png" alt="" class="about__shape about__shape2">
        <img src="<?php echo base_url(); ?>assets/images/shape__white2.png" alt="" class="about__shape about__shape3">
        <img src="<?php echo base_url(); ?>assets/images/shape__white2.png" alt="" class="about__shape about__shape4">
    </div>
    <!--::::: ABOUT AREA END :::::::-->

    <!--:::::ALL JS FILES :::::::-->
    <script src="<?php echo base_url(); ?>assets/js/jQuery.2.1.0.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.nav.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/stellarnav.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.counterup.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/wow.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/autonumeric@4.5.4"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<script>
        function alreadyDonated(){
            $("#profile_area").toggle();
            Swal.fire(
                'Terimakasih !',
                'Anda sudah melakukan donasi sebesar Rp. <?php if(!empty($jumlah_donasi)){echo $jumlah_donasi;} ?>',
                'success'
            ).then((result) => {
                // Reload the Page
                $("#profile_area").toggle();
            });
        }

		function test(){
			$('#elegantModalForm').modal('hide');

            $("#profile_area").toggle();

			var radioValue = $("input[name='gridRadios']:checked").val();
			var inputValue = $("#jumlahLain").val();
			var finalValue;
			if(radioValue != "JUMLAHLAIN") {
				var finalValue = radioValue;
			}else{
				var finalValue = inputValue;
			}

            rawValue = finalValue.replace(/[^\d,-]/g, '');
            rawValue = rawValue.replace(",", '.');

			const swalWithBootstrapButtons = Swal.mixin({
				customClass: {
					confirmButton: 'btn btn-block btn-outline-success',
					cancelButton: 'btn btn-block btn-outline-secondary'
				},
				buttonsStyling: false
			})

				swalWithBootstrapButtons.fire({
					title: 'Apakah anda sudah yakin?',
					text: "Anda akan mendonasikan THR anda sebesar " + finalValue + " , Anda tidak bisa membatalkan setelah konfirmasi ini",
					icon: 'question',
					showCancelButton: true,
					confirmButtonText: 'Ya, Saya setuju',
					cancelButtonText: 'Tidak, Batalkan',
					reverseButtons: true,
					showLoaderOnConfirm: true,
					preConfirm: (login) => {
						return fetch(`<?= base_url()?>Donasi/form_submit/`+rawValue)
							.then(response => {
								if (!response.ok) {
									throw new Error(response.statusText)
								}
								return response.json()
							})
							.catch(error => {
								Swal.showValidationMessage(
									`Request failed: ${error}`
								)
							})
					},
					allowOutsideClick: () => !Swal.isLoading()
				}).then((result) => {
					if (result.value) {
						swalWithBootstrapButtons.fire(
							'Berhasil!',
							'Donasi anda akan kami teruskan kepada yang membutuhkan',
							'success'
						).then((result) => {
							location.reload();
						})
					} else if (
						result.dismiss === Swal.DismissReason.cancel
					) {
						swalWithBootstrapButtons.fire(
							'Gagal!',
							'Donasi anda dibatalkan',
							'error'
						)
					}
                    $("#profile_area").toggle();
				})
		}

        $(document).ready(function(){
            $("#jumlahLain").click(function(){
                $("#gridRadios8").prop("checked", true);
            });

        });

        jQuery( document ).ready(function( $ ) {
            // The options are...optional :)
            const autoNumericOptionsEuro = {
                currencySymbol :'Rp. ',
                decimalPlaces:'0',
                digitGroupSeparator        : '.',
                decimalCharacter           : ',',
                decimalCharacterAlternative: '.',
                minimumValue: "1"
            };

            // Initialization
            new AutoNumeric('#jumlahLain', autoNumericOptionsEuro);


        });
	</script>


</body>

<!-- Modal -->
<div class="modal fade" id="elegantModalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
	 aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<!--Content-->
		<div class="modal-content form-elegant">
			<!--Header-->
			<!--Body-->
			<div class="modal-body mx-4">
				<form id="form-donasi" method="get" action="<?= base_url();?>Donasi/form_submit">
				<!--Body-->
					<div class="md-form mb-5">
						<h4 style="text-align: center">Silahkan Pilih Jumlah Donasi Anda</h4>
						<br>
						<fieldset class="form-group">
							<div class="row">
								<div class="col-sm-10">
									<div class="form-check">
										<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="Rp. 50.000" checked>
										<label class="form-check-label" for="gridRadios1">
											Rp. 50.000
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="Rp. 100.000">
										<label class="form-check-label" for="gridRadios2">
											Rp. 100.000
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="Rp. 250.000" >
										<label class="form-check-label" for="gridRadios3">
											Rp. 250.000
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios4" value="Rp. 500.000" >
										<label class="form-check-label" for="gridRadios4">
											Rp. 500.000
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios5" value="Rp. 1.000.000" >
										<label class="form-check-label" for="gridRadios5">
											Rp. 1.000.000
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios6" value="Rp. 2.500.000" >
										<label class="form-check-label" for="gridRadios6">
											Rp. 2.500.000
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios7" value="Rp. 5.000.000" >
										<label class="form-check-label" for="gridRadios7">
											Rp. 5.000.000
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios8" value="JUMLAHLAIN" >
										<input type="text" name="jumlahLain" id="jumlahLain" class="form-control" placeholder="Jumlah Lain..">
										<label class="form-check-label" for="gridRadios7">
										</label>
									</div>
								</div>
							</div>
						</fieldset>
					</div>
					<div class="text-center mb-3">
						<a type="button" onclick="test()" class="cbtn btn1" style="width: 100%">Submit</a>
					</div>
				</form>
			</div>
		</div>
		<!--/.Content-->
	</div>
</div>
<!-- Modal -->
