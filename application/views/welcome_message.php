<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Jala Register</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
	
</head>
<body>

<div class="container">
	<div class="label">Sign Up</div>
	<div class="text">Fill the form to get JALA account</div>
	<div class="people">
		<img src="assets/people4.png">
	</div>
	<div class="container-title">
		<h3>Sign Up</h3>
	</div>
	<form class="form">
		<div class="form-field">
			<input type="text" placeholder="Name" required>
        </div>
        <div class="form-field">
            <input type="text" placeholder="Phone" required>
            <label for="phone">
				<span>
					<svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.6849 10.907C13.0969 10.3264 12.3627 10.3264 11.7784 10.907C11.3326 11.349 10.8869 11.791 10.4486 12.2405C10.3288 12.3641 10.2276 12.3903 10.0815 12.3079C9.79312 12.1506 9.48598 12.0232 9.20879 11.8509C7.91652 11.0381 6.834 9.99305 5.8751 8.81689C5.39939 8.23256 4.97613 7.60703 4.68021 6.90283C4.62028 6.76049 4.63152 6.66685 4.74764 6.55073C5.19338 6.11998 5.62788 5.67798 6.06613 5.23598C6.67668 4.62169 6.67668 3.90251 6.06239 3.28446C5.71403 2.93237 5.36568 2.58776 5.01733 2.23566C4.65774 1.87607 4.3019 1.51274 3.93856 1.15689C3.35048 0.583798 2.61632 0.583798 2.03199 1.16064C1.5825 1.60263 1.15174 2.05587 0.694766 2.49037C0.2715 2.89116 0.0579936 3.38185 0.0130449 3.95495C-0.0581238 4.88763 0.170365 5.76788 0.492497 6.62565C1.15174 8.40112 2.1556 9.97807 3.37296 11.4239C5.01733 13.3792 6.98009 14.9262 9.27621 16.0424C10.31 16.5443 11.3813 16.9301 12.5462 16.9938C13.3478 17.0388 14.0445 16.8365 14.6026 16.2109C14.9847 15.7839 15.4155 15.3944 15.82 14.9861C16.4193 14.3793 16.4231 13.6451 15.8275 13.0458C15.1158 12.3304 14.4004 11.6187 13.6849 10.907Z" fill="#D9D9D9"/>
                    </svg>
				</span>
			</label>
        </div>
        <div class="form-field">
			<input type="text" placeholder="Email" id="email" required>
			<label for="email">
				<span>
					<svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path
							d="M1.72764 4.35935C1.95534 4.52003 2.6417 4.99723 3.78677 5.79073C4.93187 6.58422 5.80909 7.19519 6.41848 7.62367C6.48543 7.67063 6.62767 7.77273 6.84527 7.9301C7.0629 8.08757 7.24374 8.21483 7.38763 8.31189C7.53163 8.40893 7.70571 8.51778 7.91005 8.63828C8.11431 8.75867 8.30686 8.84923 8.48766 8.90918C8.6685 8.96962 8.83589 8.99956 8.98988 8.99956H8.99998H9.01011C9.16411 8.99956 9.33157 8.96958 9.51241 8.90918C9.69313 8.84923 9.88586 8.75856 10.09 8.63828C10.2941 8.51764 10.4682 8.40889 10.6122 8.31189C10.7562 8.21483 10.9369 8.08757 11.1546 7.9301C11.3722 7.77259 11.5146 7.67063 11.5816 7.62367C12.1975 7.19519 13.7646 6.10698 16.2824 4.35914C16.7712 4.01777 17.1796 3.60586 17.5077 3.12369C17.836 2.64174 18 2.13614 18 1.60718C18 1.16515 17.8408 0.786772 17.5227 0.47207C17.2046 0.157298 16.8279 0 16.3928 0H1.60707C1.09148 0 0.694701 0.17408 0.4168 0.52224C0.138933 0.87047 0 1.30574 0 1.82802C0 2.24988 0.184212 2.70703 0.552461 3.19919C0.920675 3.69139 1.31253 4.07814 1.72764 4.35935Z"
							fill="#D9D9D9"/>
						<path
							d="M16.9954 5.43391C14.7992 6.92038 13.1316 8.07561 11.9933 8.89936C11.6116 9.18049 11.302 9.39996 11.0642 9.55722C10.8264 9.71459 10.5102 9.8753 10.115 10.0393C9.71998 10.2035 9.35184 10.2854 9.01026 10.2854H9.00002H8.98992C8.64841 10.2854 8.28006 10.2035 7.88503 10.0393C7.49001 9.8753 7.17355 9.71459 6.93583 9.55722C6.69817 9.39996 6.38843 9.18049 6.00678 8.89936C5.10271 8.23646 3.43868 7.08116 1.01461 5.43391C0.632816 5.17961 0.294648 4.88813 0 4.56006V12.5353C0 12.9775 0.157298 13.3557 0.47207 13.6704C0.786772 13.9852 1.16519 14.1426 1.60718 14.1426H16.3929C16.8348 14.1426 17.2132 13.9852 17.5279 13.6704C17.8428 13.3556 18 12.9775 18 12.5353V4.56006C17.712 4.88134 17.3773 5.17282 16.9954 5.43391Z"
							fill="#D9D9D9"/>
					</svg>
				</span>
			</label>
		</div>
        <div class="form-field">
			<input type="text" placeholder="PIC">
        </div>
        <div class="form-field">
			<input type="number" placeholder="NPWP Number">
        </div>
        <div class="form-field">
            <input type="select" placeholder="Industry Type">
            <label for="email">
				<span>
					<svg width="19" height="11" viewBox="0 0 19 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0)">
                        <path d="M18.6473 0.352495C18.4124 0.117433 18.134 0 17.8123 0H1.18759C0.865769 0 0.587556 0.117433 0.352495 0.352495C0.117433 0.587816 0 0.866029 0 1.18765C0 1.50921 0.117433 1.78743 0.352495 2.02255L8.6649 10.335C8.90023 10.57 9.17844 10.6877 9.5 10.6877C9.82156 10.6877 10.1 10.57 10.3349 10.335L18.6473 2.02249C18.8821 1.78743 19 1.50921 19 1.18759C19 0.866029 18.8821 0.587816 18.6473 0.352495Z" fill="#D9D9D9"/>
                        </g>
                        <defs>
                        <clipPath id="clip0">
                        <rect width="19" height="10.64" fill="white"/>
                        </clipPath>
                        </defs>
                    </svg>
				</span>
			</label>
        </div>
		<div class="form-textarea">
			<input type="textarea" placeholder="Address">
        </div>
        <div class="form-click">
            <input type="number" placeholder="Duration" required>
            <div class="form-click-text">month</div>
        </div>
        <div class="form-click">
            <input type="number" placeholder="Quota">
            <div class="form-click-text">sales officer</div>
        </div>
    </form>
	<div class="form-action">
		<button appJalaButton style="width: 35.3rem; margin-top: -4.5rem;" color="primary">Submit</button>
	</div>
</div>

</body> 
</html>
