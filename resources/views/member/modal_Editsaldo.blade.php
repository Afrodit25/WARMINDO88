@foreach ($member as $val)
<div id="edit_saldo{{ $val->id }}" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Saldo Deposit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('Member.EditSaldo', $val->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <input type="hidden" name="member_id" value="{{ $val->id }}">
                        <input type="hidden" name="saldo_sebelumnya" value="{{ $val->saldo_deposit }}">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Saldo Deposit</label>
                                <input class="form-control" id="saldo_deposit" name="saldo_deposit" type="number" required>
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
