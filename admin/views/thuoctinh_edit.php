<?php 
    if(is_array($oneRecode)){
?>
            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <div class="row d-flex justify-content-center">
                            <div class="col-xl-10">
                                <div class="card-box">
                                    <div class="dropdown float-right">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                        </div>
                                    </div>

                                    <h4 class="header-title mt-0 mb-3">Sửa thuộc tính điện thoại</h4>

                                    <form data-parsley-validate novalidate method="post">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Màn Hình</label>
                                                    <input type="text" name="screen"  parsley-trigger="change" required
                                                        placeholder="Nhập thông số màn hình" value="<?=$oneRecode['ManHinh']?>" class="form-control" id="userName">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Hệ Điều Hành</label>
                                                    <input type="text" name="operatingsystem"  parsley-trigger="change" required
                                                        placeholder="Nhập thông số hệ điều hành" value="<?=$oneRecode['HeDieuHanh']?>"  class="form-control" id="userName">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Camera Sau</label>
                                                    <input type="text" name="rearcamera"  parsley-trigger="change" required
                                                        placeholder="Nhập thông số camera sau" value="<?=$oneRecode['CameraSau']?>" class="form-control" id="userName">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Camera Trước</label>
                                                    <input type="text" name="frontcamera"  parsley-trigger="change" required
                                                        placeholder="Nhập thông số camera trước" value="<?=$oneRecode['CameraTruoc']?>" class="form-control" id="userName">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">CPU</label>
                                                    <input type="text" name="cpu"  parsley-trigger="change" required
                                                        placeholder="Nhập thông số CPU" value="<?=$oneRecode['CPU']?>" class="form-control" id="userName">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">RAM</label>
                                                    <input type="text" name="ram"  parsley-trigger="change" required
                                                        placeholder="Nhập thông số RAM" value="<?=$oneRecode['RAM']?>" class="form-control" id="userName">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Bộ Nhớ Trong</label>
                                                    <input type="number" name="memory"  parsley-trigger="change" required
                                                        placeholder="Nhập thông số bộ nhớ trong" value="<?=$oneRecode['BoNhoTrong']?>" class="form-control" id="userName">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Thẻ Nhớ</label>
                                                    <input type="text" name="memorystick"  parsley-trigger="change" required
                                                        placeholder="Nhập thông số thẻ nhớ" value="<?=$oneRecode['TheNho']?>" class="form-control" id="userName">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Thẻ Sim</label>
                                                    <input type="text" name="sim"  parsley-trigger="change" required
                                                        placeholder="Nhập thông số thẻ sim" value="<?=$oneRecode['TheSim']?>" class="form-control" id="userName">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Dung Lượng Pin</label>
                                                    <input type="text" name="battery"  parsley-trigger="change" required
                                                        placeholder="Nhập thông số dung lượng pin" value="<?=$oneRecode['DungLuongPin']?>" class="form-control" id="userName">
                                                </div>
                                            </div>
                                        </div>
            
                                        <div class="form-group text-right mb-0 ">
                                            <input type="submit" name="them" class="btn btn-primary waves-effect waves-light mr-1" value="Sửa">
                                            <a href="?ctrl=dienthoai&act=index" clas="btn btn-secondary waves-effect waves-light">Huỷ</a>
                                        </div>

                                    </form>
                                </div>
                            </div><!-- end col -->
                        </div>
                    </div>
                </div>
            </div>
        <?php } else {
            echo 'không có thuộc tính này !';
        } ?>