@extends('mahacuan.DoLogin.layout.main_dologin')

@section('title', 'Feedback')

@section('content')

<main id="main-route">
    <div class="main-content feedback">
	<div class="container">
		<div class="page-header">Laporan ke Pusat</div>
		<div class="feedback__form">
			<div class="form-group">
				<label>Tipe Laporan:</label>
				<select name="feedbackType" id="feedbackType">
					<option value="1">Tambah Dana Tidak diproses</option>
					<option value="2">Tarik Dana Tidak diproses</option>
					<option value="3">Live Chat Bermasalah</option>
					<option value="4">Lainnya</option>
				</select>
			</div>
			<div class="form-group">
				<label>Email:</label>
				<input name="email" id="email" placeholder="Email" value="" autocomplete="off" required="">
			</div>
			<div class="form-group">
				<label>Pesan:</label>
				<textarea name="message" id="message" placeholder="Pesan" value="" autocomplete="off"></textarea>
			</div>
			{{-- <div class="col-lg-4">
				<div class="form-group">
					<div class="captcha-img">
						<img id="captchaFeedback" src="https://mahacuan.live/captcha/default?8G7h0A56">
						<a id="refreshCaptchaFeedback" class="btn btn-sm btn-info mr-4">
							<i class="fas fa-sync-alt"></i>
						</a>
					</div>
				</div>
			</div> --}}
			<div class="form-group">
				<label>Kode Verifikasi:</label>
				<input autocomplete="off" class="form-control input-code" type="text" name="captcha" id="captcha" placeholder="Kode Verifikasi" required="">
			</div>
			<div class="form-group">
				<button id="feedbackFormSubmit" type="submit" class="btn-custom">Kirim</button>
			</div>
		</div>
	</div>
</div>
</main>


@endsection

@section('under_body')



@endsection
