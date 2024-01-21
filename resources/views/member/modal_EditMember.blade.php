@foreach ($member as $val)
<div id="edit_member{{ $val->id }}" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Member</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('Member.EditMember', $val->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <input type="hidden" name="member_id" value="{{ $val->id }}">
                        <input type="hidden" name="saldo_sebelumnya" value="{{ $val->saldo_deposit }}">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Username</label>
                                <input class="form-control" type="text" value="{{ $val->username_member }}" readonly>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Full Name</label>
                                <input class="form-control" id="full_name_member" name="full_name_member" type="text" value="{{ $val->full_name_member }}" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Refferal</label>
                                <input class="form-control" id="kode_refferal" name="kode_refferal" type="text" value="{{ $val->kode_refferal }}" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Saldo Deposit</label>
                                <input class="form-control" id="saldo_deposit" name="saldo_deposit" value="{{ $val->saldo_deposit }}" type="number" required>
                            </div>
                        </div>
                    </div>
                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endforeach
