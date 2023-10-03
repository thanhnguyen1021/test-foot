<div class="setting">
    <ul class="nav nav-tabs tab-setting" role="tablist">
        <li role="presentation" class="active"><a href="#user" aria-controls="home" role="tab" data-toggle="tab"><i
                    class="fa fa-user"></i> Nhân viên</a></li>
        
                
    </ul>
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="user">
            <div class="panel panel-primary" style="margin-top: 20px">
                <div class="panel-heading">
                    <i class="fa fa-user"></i> Nhân viên
                    <div class="action pull-right">
                        <button class="btn btn-default btn-sm create-nv btn-in-panel blue" data-toggle="modal"
                                data-target="#create-nv"><i class="fa fa-pencil blue"></i> Tạo nhân viên
                        </button>
                        | <i class="fa fa-refresh" style="font-size: 14px; cursor: pointer;" onclick="cms_upuser()"></i>
                    </div>

                </div>
                <div class="panel-body">
                    <div class="table-responsive ">
                        <table class="table table-hover table-user table-striped">
                            <thead>
                            <th class="text-center">STT</th>
                            <th>Mã nhân viên</th>
                            <th>Tên nhân viên</th>
                            <th>Email</th>
                            <th>Nhóm người sử dụng</th>
                            <th class="text-center">Trạng thái</th>
                            <th></th>
                            </thead>
                            <tbody>
                            <?php
                            if (isset($_user) && count($_user)) :
                                $ind = 0;
                                foreach ($_user as $key => $val) : $ind++; ?>
                                    <tr class="tr-item-<?php echo $val['id']; ?>">
                                        <td class="text-center"><?php echo $ind; ?></td>
                                        <td><?php echo $val['username']; ?></td>
                                        <td><?php echo ($val['display_name'] != '') ? $val['display_name'] : '-'; ?></td>
                                        <td><?php echo $val['email']; ?></td>
                                        <td><?php echo '<span class="user_group"><i class="fa fa-male"></i> ' . $val['group_name'] . '</span>'; ?></td>
                                        <td class="text-center"><?php echo cms_render_html($val['user_status'], 'user_status', ['fa-unlock', 'fa-lock'], ['Hoạt động', 'Tạm ngừng']); ?></td>
                                        <td class="text-center"><i class="fa fa-pencil-square-o edit-item" title="Sửa"
                                                                   onclick="cms_edit_usitem(<?php echo $val['id']; ?>)"
                                                                   style="margin-right: 10px; cursor: pointer;"></i><i
                                                onclick="cms_del_usitem(<?php echo $val['id']; ?>)" title="Xóa"
                                                class="fa fa-trash-o delete-item" style="cursor: pointer;"></i></td>
                                    </tr>
                                    <tr class="edit-tr-item-<?php echo $val['id']; ?>" style="display: none;">
                                        <td class="text-center"><?php echo $ind; ?></td>
                                        <td class="itmanv"><input type="text" class="form-control"
                                                                  value="<?php echo $val['username']; ?>" disabled/>
                                        </td>
                                        <td class="itdisplay_name"><input type="text" class="form-control"
                                                                          value="<?php echo $val['display_name']; ?>"/>
                                        </td>
                                        <td class="itemail">
                                            <input type="text" class="form-control"
                                                                   value="<?php echo $val['email']; ?>"/>
                                        </td>
                                        <td class="itgroup_name">
                                            <div class="group-user">
                                                <div class="group-selbox">
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center ituser_status">
                                            <select class="ituser_status form-control">
                                                <option
                                                    value="1" <?php echo ($val['user_status'] == '1') ? 'selected="selected"' : ''; ?>>
                                                    Hoạt động
                                                </option>
                                                <option
                                                    value="0" <?php echo ($val['user_status'] == '0') ? 'selected="selected"' : ''; ?>>
                                                    Tạm dừng
                                                </option>
                                            </select>
                                        </td>
                                        <td class="text-center"><i class="fa fa-floppy-o" title="Lưu"
                                                                   onclick="cms_save_item_user( <?php echo $val['id']; ?> )"
                                                                   style="color: #EC971F; cursor: pointer; margin-right: 10px;"></i><i
                                                onclick="cms_undo_item( <?php echo $val['id']; ?> )" title="Hủy"
                                                class="fa fa-undo"
                                                style="color: green; cursor: pointer; margin-right: 5px;"></i></td>
                                    </tr>
                                <?php endforeach;
                            else: ?>
                                <tr>
                                    <td class="text-center" colspan="7">Không có Người dùng trong danh sách</td>
                                </tr>
                            <?php endif;
                            ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            



               
                     
					 
			
