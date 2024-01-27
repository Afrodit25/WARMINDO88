@foreach ($withdraw as $val)
<div id="update_status{{ $val->id }}" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Status Withdraw</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('Deposit.UpdateStatus', $val->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <input type="hidden" name="saldo_sebelumnya" value="{{ $val->nominal_withdraw }}">
                        {{-- <input type="hidden" name="deposit_id" value="{{ $val->id }}"> --}}
                        <input type="hidden" name="member_id" value="{{ $val->member_id }}">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Status Deposit</label>
                                <select class="select" name="status_deposit" required>
                                    <option value="" @selected(old('PENDING', $val->status_deposit) == 'PENDING')>PENDING</option>
                                    <option value="SUCCESS" @selected(old('SUCCESS', $val->status_deposit) == 'SUCCESS')>SUCCESS</option>
                                </select>
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
