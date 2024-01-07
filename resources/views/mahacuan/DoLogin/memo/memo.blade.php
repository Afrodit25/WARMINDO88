@extends('mahacuan.DoLogin.layout.main_dologin')

@section('title', 'Memo')

@section('content')

<main id="main-route">
    <div class="main-content memo">
    <div class="container">
        <div class="memo__container">
            <ul class="component-tabs nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-item nav-link mr-0 active" id="nav-broadcast-tab" data-toggle="tab" href="#nav-broadcast" role="tab" aria-controls="nav-broadcast" aria-selected="true">
                        <img src="{{ asset('/') }}template_mahacuan/themes/1/img/navigation/memo.svg" width="40" height="40">
                        <span>Pengumuman</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-item nav-link mr-0" id="nav-all-tab" data-toggle="tab" href="#nav-all" role="tab" aria-controls="nav-all" aria-selected="false">
                        <img src="{{ asset('/') }}template_mahacuan/themes/1/img/navigation/addmemo.svg" width="40" height="40">
                        <span>Memo Anda</span>
                    </a>
                </li>
                <li hidden="" class="nav-item">
                    <a class="nav-item nav-link" id="nav-add-memo-tab" data-toggle="tab" href="#nav-add-memo" role="tab" aria-controls="nav-add-memo" aria-selected="false">
                    </a>
                </li>
                <li hidden="" class="nav-item">
                    <a class="nav-item nav-link" id="nav-detail-tab" data-toggle="tab" href="#nav-detail" role="tab" aria-controls="nav-detail" aria-selected="false">
                    </a>
                </li>
            </ul>
            <div class="component-tab-content tab-content">
                <div class="tab-pane fade active show" id="nav-broadcast" role="tabpanel" aria-labelledby="nav-broadcast-tab">
                    <div class="memo-broadcast">
                        <div class="container-fluid table-dataTable">
                            <div id="memo-broadcast-table_wrapper" class="dataTables_wrapper no-footer"><div class="dataTables_length" id="memo-broadcast-table_length"><label>Show <select name="memo-broadcast-table_length" aria-controls="memo-broadcast-table" class=""><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div><div id="memo-broadcast-table_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="memo-broadcast-table"></label></div><table id="memo-broadcast-table" class="table table-hover table-bordered dataTable no-footer" role="grid" aria-describedby="memo-broadcast-table_info" style="width: 1038px;">
                                <thead>
                                    <tr role="row"><th scope="col" class="text-left sorting_desc" tabindex="0" aria-controls="memo-broadcast-table" rowspan="1" colspan="1" aria-label="Tanggal: activate to sort column ascending" aria-sort="descending" style="width: 365px;">Tanggal</th><th scope="col" class="text-left sorting" tabindex="0" aria-controls="memo-broadcast-table" rowspan="1" colspan="1" aria-label="Type: activate to sort column ascending" style="width: 256px;">Type</th><th scope="col" class="text-left sorting" tabindex="0" aria-controls="memo-broadcast-table" rowspan="1" colspan="1" aria-label="Subject: activate to sort column ascending" style="width: 363px;">Subject</th></tr>
                                </thead>
                            <tbody><tr class="odd"><td valign="top" colspan="3" class="dataTables_empty">No data available in table</td></tr></tbody></table><div class="dataTables_info" id="memo-broadcast-table_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div><div class="dataTables_paginate paging_simple_numbers" id="memo-broadcast-table_paginate"><a class="paginate_button previous disabled" aria-controls="memo-broadcast-table" data-dt-idx="0" tabindex="-1" id="memo-broadcast-table_previous">Previous</a><span></span><a class="paginate_button next disabled" aria-controls="memo-broadcast-table" data-dt-idx="1" tabindex="-1" id="memo-broadcast-table_next">Next</a></div></div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">
                    <div class="memo-all">
                        <div class="d-flex">
                            <a class="btn-custom ml-auto" href="#" id="addMemoButton">
                                <i class="fas fa-file-signature"></i>
                                <span>Tambahkan Memo</span>
                            </a>
                        </div>
                        <div class="container-fluid table-dataTable">
                            <div id="memo-table_wrapper" class="dataTables_wrapper no-footer"><div class="dataTables_length" id="memo-table_length"><label>Show <select name="memo-table_length" aria-controls="memo-table" class=""><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div><div id="memo-table_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="memo-table"></label></div><table id="memo-table" class="table table-hover table-bordered dataTable no-footer" role="grid" aria-describedby="memo-table_info">
                                <thead>
                                    <tr role="row"><th scope="col" class="text-left sorting_asc" rowspan="1" colspan="1" aria-label="Tanggal">Tanggal</th><th scope="col" class="text-left sorting" tabindex="0" aria-controls="memo-table" rowspan="1" colspan="1" aria-label="Type: activate to sort column ascending">Type</th><th scope="col" class="text-left sorting" tabindex="0" aria-controls="memo-table" rowspan="1" colspan="1" aria-label="Subject: activate to sort column ascending">Subject</th><th scope="col" class="text-center sorting" tabindex="0" aria-controls="memo-table" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Status</th></tr>
                                </thead>
                            <tbody><tr class="odd"><td valign="top" colspan="4" class="dataTables_empty">No data available in table</td></tr></tbody></table><div class="dataTables_info" id="memo-table_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div><div class="dataTables_paginate paging_simple_numbers" id="memo-table_paginate"><a class="paginate_button previous disabled" aria-controls="memo-table" data-dt-idx="0" tabindex="-1" id="memo-table_previous">Previous</a><span></span><a class="paginate_button next disabled" aria-controls="memo-table" data-dt-idx="1" tabindex="-1" id="memo-table_next">Next</a></div></div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-detail" role="tabpanel" aria-labelledby="nav-detail-tab">
                    <div class="memo-view pt-0">
                        <div class="memo-view__container">
                            <a href="javascript:;" onclick="$('#nav-all-tab').click()" class="view-back btn-custom"><i class="fas fa-angle-left"></i> Kembali</a>
                            <div class="memo-view-form">
                                <div class="memo-view-content">
                                    <div class="content-subject"></div>
                                    <div class="content-desc"></div>
                                </div>
                                <div id="memoViewReply"></div>
                                <form id="memoReplyForm" novalidate="novalidate">
                                    <div class="memo-reply-form">
                                        <textarea class="form-control" placeholder="Masukan balasan disini" name="message"></textarea>
                                        <input type="hidden" name="memoId">
                                        <input type="hidden" name="status">
                                        <div class="reply-form-code captcha">
                                            <label>Kode Verifikasi</label>
                                            <span>
                                                <img src="https://mahacuan.live/captcha/default?trDyEMSo">
                                            </span>
                                            <a class="btn btn-sm btn-info mr-4" name="reload">
                                                <i class="fas fa-sync-alt"></i>
                                            </a>
                                            <input class="input-code form-control" type="text" name="captcha" placeholder="Kode Verifikasi">&nbsp;&nbsp;
                                            <button type="submit" class="btn-custom-sm">Balas memo</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-add-memo" role="tabpanel" aria-labelledby="nav-add-memo-tab">
                    <form id="formAddMemo">
                        <div class="memo-add">
                            <div class="form-group">
                                <label>Judul*</label>
                                <input type="text" name="subject" id="subject" maxlength="25" placeholder="Judul Memo">
                            </div>
                            <div class="form-group">
                                <label>Tipe*</label>
                                <input type="text" name="type" id="type" placeholder="Tipe Masalah Memo">
                            </div>
                            <div class="form-group mt-4">
                                <textarea name="message" id="messageAdd" placeholder="Pesan"></textarea>
                            </div>
                            <div class="form-group captcha">
                                <div class="row">
                                    <div class="col-lg-2 d-flex align-items-center justify-content-start">
                                        <label>Kode Verifikasi:</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="cap-img">
                                            <div class="img-holder">
                                                <span>
                                                    <img src="https://mahacuan.live/captcha/default?RnpMrRxb">
                                                </span>
                                                <a type="button" class="btn btn-sm btn-info mr-3" name="reload">
                                                    <i class="fas fa-sync-alt"></i>
                                                </a>
                                            </div>
                                            <div class="sent-holder">
                                                <input class="input-code" type="text" name="captcha" id="captchaAdd" placeholder="Kode Verifikasi" required="">
                                                <button class="btn-custom-sm" type="submit">Kirim</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="memo-desc">** Harap untuk selalu bersabar menunggu jawaban tiket dari operator, untuk masalah yang urgent sekali bisa langsung menghubungi via livechat</div>
            </div>
        </div>
    </div>
</div>
</main>

@endsection

@section('under_body')



@endsection
