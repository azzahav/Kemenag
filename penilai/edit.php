<div class="modal fade text-left" id="kepo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalLabel33">Ubah Nilai </h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form name="update" method="post" action="">
                                                            <div class="modal-body">
                                                                <label>Angka Kredit </label>
                                                                <div class="input-group">
                                                                    <input type="number" class="touchspin"  name="angka_kredit" class="form-control" value="<?php echo $angka_kredit;?>">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                            <input type="hidden"  name="id_rekap" value="<?php echo $_GET['id_rekap'];?>">
			                                                <input type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1" name="update" value="Update"></input>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>