<div class="products">
    <div class="breadcrumbs-fixed panel-action">
        <div class="row">
            <div class="products-act">
                <div class="col-md-4 col-md-offset-2">
                    <div class="left-action text-left clearfix">
                        <h2><i class="fa fa-refresh" style="font-size: 14px; cursor: pointer;"
                               onclick="cms_vcrproduct('1')"></i>Tạo sản phẩm</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-action text-right">
                        <div class="btn-groups">
                            <button type="button" class="btn btn-primary" onclick="cms_add_product( 'save' );"><i
                                    class="fa fa-check"></i> Lưu
                            </button>
                            
                            <button type="button" class="btn btn-primary"
                                    onclick="cms_javascript_redirect( cms_javascrip_fullURL() )"><i
                                    class="fa fa-arrow-left"></i> Trở về
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-space customer"></div>

    <div class="products-content" style="margin-bottom: 25px;">
        <div class="basic-info">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-4 padd-0">
                        <h4>Thông tin cơ bản</h4>
                        <small>Nhập tên và các thông tin cơ bản của sản phẩm</small>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="form-group clearfix">
                                <div class="col-md-6 padd-left-0">
                                    <label>Tên sản phẩm</label>
                                    <input type="text" id="prd_name"
                                           value="<?php if (isset($data['_detail_product'])) echo $data['_detail_product']['prd_name'] . ' - copy' ?>"
                                           class="form-control"
                                           placeholder="Nhập tên sản phẩm"/>
                                </div>
                                <div class="col-md-6 padd-right-0">
                                    <label>Mã sản phẩm</label>
                                    <input type="text" id="prd_code" class="form-control "
                                           placeholder="Nếu không nhập, hệ thống sẽ tự sinh."/>
                                </div>
                            </div>
                            <div class="form-group clearfix">
                                <div class="col-md-6 padd-left-0">
                                    <label>Số lượng</label>
                                    <input type="text" id="prd_sls" value="" placeholder="0"
                                           class="form-control text-right txtNumber"/>
                                </div>
                                <div class="form-group clearfix">
                                
                                  <div class="form-group clearfix">
                                <div class="col-md-6 padd-right-0">
                                    <label>Giá vốn</label>
                                    <input type="text" id="prd_origin_price"
                                           value="<?php if (isset($data['_detail_product'])) echo $data['_detail_product']['prd_origin_price'] ?>"
                                           class="form-control text-right txtMoney" placeholder="Nhập giá vốn"/>  
                                    
                               

                                        
                                           
                                
                                
                                </div>
                                <div class="col-md-6 padd-left-0">
                                    <label>Giá bán</label>
                                    <input type="text" id="prd_sell_price"
                                           value="<?php if (isset($data['_detail_product'])) echo $data['_detail_product']['prd_sell_price'] ?>"
                                           class="form-control txtMoney text-right" placeholder="Nhập giá bán"/>
                                
                                </div>
                            </div>
                            
                                  <div class="col-md-6 padd-left-0">
                                    <label>Cửa hàng</label>
                                    <div class="col-md-11 padd-0">
                                        <select class="form-control" id="prd_manufacture_id">
                                            <optgroup label="Chọn cửa hàng">
                                                <?php $manufacture_id = 0;
                                                if (isset($data['_detail_product']))
                                                    $manufacture_id = $data['_detail_product']['prd_manufacture_id'];
                                                echo $manufacture_id;
                                                ?>
                                                <?php if (isset($data['_prd_manufacture']) && count($data['_prd_manufacture'])):
                                                    foreach ($data['_prd_manufacture'] as $key => $val) :
                                                        ?>
                                                        <option <?php if ($manufacture_id == $val['ID']) echo 'selected ' ?>
                                                            value="<?php echo $val['ID']; ?>"><?php echo $val['prd_manuf_name']; ?></option>
                                                    <?php
                                                    endforeach;
                                                endif;
                                                ?>
                                            </optgroup>
                                            <optgroup label="------------------------">
                                                <option value="product_manufacture" data-toggle="modal"
                                                        data-target="#list-prd-manufacture">Tạo mới Cửa hàng
                                                </option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="col-md-1 padd-0">
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#list-prd-manufacture"
                                                style="border-radius: 0 3px 3px 0; box-shadow: none;">...
                                        </button>
                                    </div>            
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="expand-info">
            <div class="row">
                <div class="col-md-12">
                    <h4 style="border-bottom: 1px solid #0B87C9; padding-bottom: 10px;"><i
                            class="fa fa-th-large blue"></i> <a style="color: #0B87C9; text-decoration: none;"
                                                                data-toggle="collapse" href="#collapseproductinfo"
                                                                aria-expanded="false" aria-controls="
                            
                            )</a></h4>
                </div>
                <div class="col-md-12">
                    <div style="margin-top: 5px;"></div>
                    <div class="collapse" id="collapseproductinfo">
                       
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12 padd-20">
                                    <div class="jumbotron text-center" id="img_upload"
                                         style="border-radius: 0; margin-bottom: 10px; padding: 15px 20px;">
                                        <h3>Upload hình ảnh sản phẩm</h3>
                                        
                                        </small>
                                        <p>
                                            <button class="btn" style="background-color: #337ab7; "
                                                    onclick="browseKCFinder('img_upload','image');return false;"><i
                                                    class="fa fa-picture-o" style="font-size: 40px;color: #fff; "></i>
                                            </button>
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-12 padd-20">
                            <h4 style="margin-top: 0;">Mô tả
                                
                                </small>
                            </h4>
                            <!--                                    <textarea id="ck_editor" id="prd_description"></textarea>-->
                            <div id="ckeditor"></div>
                        </div>
                        <div class="col-md-3 padd-20">
                            <h4>Thông tin cho web</h4>
                            <small

                        </div>
                        <div class="col-md-9">
                            <div class="row">
                                <div class="checkbox-group" style="margin-top: 20px;">
                                    <label class="checkbox"><input type="checkbox" class="checkbox"
                                                                   id="display_website"><span></span> Hiện thị ra
                                        website</label>
                                    <br>
                                    <label class="checkbox"><input type="checkbox" id="prd_highlight"
                                                                   class="checkbox"><span></span> Nổi bật</label>&nbsp;&nbsp;<label
                                        class="checkbox"><input type="checkbox" class="checkbox"
                                                                id="prd_new"><span></span> Hàng mới</label>&nbsp;&nbsp;&nbsp;<label
                                        class="checkbox"><input type="checkbox" class="checkbox"
                                                                id="prd_hot"><span></span> Đang bán chạy</label>
                                </div>
                            </div>
                            <div class="btn-groups pull-right" style="margin-top: 15px;">
                                <button type="button" class="btn btn-primary" onclick="cms_add_product( 'save' );"><i
                                        class="fa fa-check"></i> Lưu
                                </button>
                                <button type="button" class="btn btn-primary "
                                        onclick="cms_add_product( 'saveandcontinue' );"><i class="fa fa-floppy-o"></i>
                                    Lưu và tiếp tục
                                </button>
                                <button type="button" class="btn btn-default btn-back"
                                        onclick="cms_javascript_redirect( cms_javascrip_fullURL() )"><i
                                        class="fa fa-arrow-left"></i> Trở về
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    initSample();
</script>
