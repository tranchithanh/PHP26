<?php include_once 'inc/header.php';?>
            <div class="grid_12">
                <!-- Example table -->
                <div class="module">
                    <?php
                        $query = "SELECT * FROM hoa";

                        $result = $mysqli->query($query);
                    ?>
                	<h2><span>Danh sách sản phẩm</span></h2>
                    
                    <div class="module-table-body">
                    	<form action="">
                        <table id="myTable" class="tablesorter">
                        	<thead>
                                <tr>
                                    <th style="width:4%; text-align: center;">ID</th>
                                    <th>Tên hoa</th>
                                    <th style="width:20%">Mô tả</th>
                                    <th style="width:16%; text-align: center;">Hình ảnh</th>
                                    <th style="width:12%; text-align: center;">Giá bán</th>
                                    <th style="width:11%; text-align: center;">Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    while ($arHoa = mysqli_fetch_assoc($result)) {
                                        $id_hoa = $arHoa['id_hoa'];
                                        $ten_hoa = $arHoa['ten_hoa'];
                                        $mo_ta = $arHoa['mo_ta'];
                                        $hinh_anh = $arHoa['hinh_anh'];
                                        $gia_ban = $arHoa['gia_ban'];
                                        $id_cat = $arHoa['id_cat'];
                                ?>
                                <tr>
                                    <td class="align-center"><?php echo $id_hoa; ?></td>
                                    <td><a href="edit.php?id_hoa=<?php echo $id_hoa; ?>"><?php echo $ten_hoa; ?></a></td>
                                    <td><?php echo $mo_ta; ?></td>
                                    <td align="center"><img src="images/tmp/<?php echo $hinh_anh; ?>" class="hoa" alt="<?php echo $hinh_anh; ?>"/></td>
                                    <td align="right"><?php echo number_format($gia_ban,0,',','.'); ?> VNĐ</td>
                                    <td align="center">
                                        <a href="edit.php?id_hoa=<?php echo $id_hoa; ?>">Sửa <img src="images/pencil.gif" alt="edit" /></a>
                                        <a href="#">Xóa <img src="images/bin.gif" width="16" height="16" alt="delete" /></a>
                                    </td>
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                        </form>
                     </div> <!-- End .module-table-body -->
                </div> <!-- End .module -->
                
                
                     <div class="pagination">           
                        <div class="numbers">
                            <span>Trang:</span> 
                            <a href="#">1</a> 
                            <span>|</span> 
                            <a href="#">2</a> 
                            <span>|</span> 
                            <span class="current">3</span> 
                            <span>|</span> 
                            <a href="#">4</a> 
                            <span>|</span> 
                            <a href="#">5</a> 
                            <span>|</span> 
                            <a href="#">6</a> 
                        </div> 
                        <div style="clear: both;"></div> 
                     </div>
                
			</div> <!-- End .grid_12 -->
<?php include_once 'inc/footer.php'?> 