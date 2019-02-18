<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class changepass extends CI_Model 
{
public function pass() {
            echo '
                <div class="modal fade" id="pss">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <a class="close" data-dismiss="modal">&times;</a>
                                <h3>CHANGE PASSWORD</h3>
                            </div>
                            <div class="modal-body">
                                <form class="form-horizontal" role="form" method="post" action="'.base_url().'index.php/page/changepassword">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Password Lama</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="password" name="passold" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Password Baru</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="password" name="pass" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Konfirmasi Password</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="password" name="pass2" placeholder="konfirm password baru" required>
                                        </div>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                    <button class="btn btn-success" type="submit" name="save">Save</button>
                            </div>
                                </form>
                        </div>
                    </div>
                </div>
            ';
        }
    }