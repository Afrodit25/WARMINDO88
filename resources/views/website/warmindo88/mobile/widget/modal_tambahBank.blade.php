@foreach ($data as $v)
    <div class="modal custom-popup fade" id="bankDetail" tabindex="-1" aria-labelledby="bankDetailLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
                <div class="modal-body">
                    <div class="popup-bank-detail">
                        <div class="bank-detail-header">
                            <h4>Rekening Saya</h4>
                        </div>
                        @foreach ($bankUtama as $q)
                            <div class="bank-detail-info">
                                <h6 class="info-header">Rekening Utama</h6>
                                <div class="bank-account">
                                    <div class="acc-details">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="acc-name">Nama Rek.:
                                                    <span>{{ $q->nama_rekening }}</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="bank-name">Nama Bank:
                                                    <span>{{ $q->bank_name }}</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="acc-number">Nomor Rek.:
                                                    <span>{{ $q->no_rekening }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <div class="bank-detail-info">
                            <h6 class="info-header">Rekening Lainnya</h6>
                            <div id="otherBanks"></div>
                        </div>
                        <form method="POST" action="{{ route('BankAccount.store') }}">
                            @csrf
                            <input type="hidden" name="member_id" value="{{ $v->member_id }}">
                            <div class="add-bank-forms">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="add-bank-cont">
                                            <div class="title">Nama Rek.</div>
                                            <input name="optAccountNames" class="form-control-sm" type="text"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="add-bank-cont">
                                            <div class="title">Pilih Bank</div>
                                            <select class="form-control form-control-sm" name="chooseOptionalBank"
                                                id="chooseOptionalBank" required>
                                                <option value="">--- Pilih Bank ---</option>
                                                @foreach ($bankGroup as $model => $banks)
                                                    <optgroup label="{{ $model }}">
                                                        @foreach ($banks as $val)
                                                            <option value="{{ $val->id }}" data-max="10"
                                                                data-min="10">{{ $val->bank_name }}</option>
                                                        @endforeach
                                                    </optgroup>
                                                @endforeach
                                            </select>
                                            <span id="chooseOptionalBank-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="add-bank-cont">
                                            <div class="title" id="labelAccNumb">Nomor
                                                Rek.</div>
                                            <div class="input-group input-group-sm">
                                                <div class="input-group-prepend" id="phoneInputPrepend">
                                                    <span class="input-group-text"></span>
                                                </div>
                                                <input class="form-control" type="text" name="optAccountNumbers"
                                                    id="optAccountNumbers" minlength="8" maxlength="20"
                                                    autocomplete="off" required>
                                            </div>
                                            <span id="optAccountNumber-error"></span>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                            <div class="bank-buttons" id="">
                                {{-- <a class="btn-custom-sm cancel add-bank">Tambah Rek.</a> --}}
                                <button id="" class="btn-custom-sm">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
