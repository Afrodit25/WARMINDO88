@foreach ($member as $val)
<div id="change_password{{ $val->id }}" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Change Password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('Member.ChangePassword', $val->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <input type="hidden" name="member_id" value="{{ $val->id }}">
                        <input type="hidden" name="user_id" value="{{ $val->user_id }}">
                        <input type="hidden" name="saldo_sebelumnya" value="{{ $val->saldo_deposit }}">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>New Password</label>
                                <input class="form-control" id="password" name="password" type="password" required>
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
